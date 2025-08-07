<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Interfaces\SelectRepositoryInterface;
use App\Interfaces\RegistrationRepositoryInterface;
use App\Interfaces\HomeRepositoryInterface;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\RegistrationRequest;
use App\Models\Registration;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailZavodnikovi;
use App\Mail\ContactMessage;
use App\Http\Controllers\ContactController;


class RegistrationController extends Controller
{

    private $select;
    private $homeRepositoryInterface;
    private $registrationRepositoryInterface;
    private $request;


    public function __construct(SelectRepositoryInterface $select,HomeRepositoryInterface $homeRepositoryInterface,RegistrationRepositoryInterface $registrationRepositoryInterface,Request $request)
    {
        $this->select = $select;
        $this->request = $request;
        $this->homeRepositoryInterface = $homeRepositoryInterface;
        $this->registrationRepositoryInterface = $registrationRepositoryInterface;
    }


    public function index(Registration $registration,$raceName,$raceYear,$raceId)
    {
    
        $eventOrder = 1; //privorka
        
   
    
     
        return view('registration.index',[
            'currentRegistrations' => $this->homeRepositoryInterface->getCurrentRegistration(),
            'raceName' => $raceName,
            'raceYear' => $raceYear,
            'raceId' => $raceId,
            'registrations' => $registration->getAll($raceId),
            'eventList' => $this->registrationRepositoryInterface->getEventList(),
        ]);
    }




    public function success($raceName,$raceYear,$raceId)
    {
        return view('registration.success',[
            'currentRegistrations' => $this->homeRepositoryInterface->getCurrentRegistration(),
            'raceYear' => $raceYear,
            'raceId' => $raceId,
            'raceName' => $raceName
        ]);
    }






    private function storeType1()
    {
        dd($this->request);
    }

    private function storeType3()
    {
        dd($this->request);
    }




    public function store(RegistrationRequest $request,$raceName,$raceYear,$raceId,Registration $registration)
    {

        $category = $registration->categorySelect($request,$raceYear,$raceId);

        $entryFee = $registration->entryFee($raceYear,$raceId,$request->event_order);


       $registration = Registration::create([
            'id_zavodu' => $raceId,
            'id_kategorie' => $category[0]->id_kategorie,
            'prijmeni_1' => $request->lastname,
            'jmeno_1' => $request->firstname,
            'datum_narozeni' => "$request->birthyear-00-00",
            'poradi_podzavodu' => $request->event_order,
            'prislusnost' => $request->team,
            'pohlavi' => $request->gender,
            'stat' => $request->country,
            'mail' => $request->email,
            'telefon_1' => $request->phone_1,
            'telefon_2' => $request->phone_2,
            'startovne' => $entryFee[0]->castka,

        ]);

        $lastInsertedId = $registration->id;

       
       
        $vs = $registration->insertVs($lastInsertedId,$raceYear,$raceId,$request->registration_type);
       
      //  Mail::to($request->email)->send(new MailZavodnikovi());
      //  Mail::to(env('MAIL_TO'))->send(new ContactMessage('timechip.cz@gmail.com', 'bla'));

      $mail = new ContactController();
      $mail->send();

      
      
        return redirect()->route('index');


    }






    public function store_zal(RegistrationRequest $request,$raceName,$raceYear,$raceId)
    {

        $fun = 'storeType'.$this->request->registration_type;




        /*

        $validated = $this->request->validate([
            'event_order' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'birthyear' => 'required',
            'country' => 'required',
            'phone1' => 'required',
            'email' => 'required',
        ]);*/






        $response = Http::asForm()->post('https://api.timechip.cz/prihlasky/ulozit-prihlasku/'.$raceYear.'/'.$raceId, [
            'typ_prihlasky' => $request->registration_type,
            'event_order' => $request->event_order,
            'firstname' => $request->firstname,
            'surname' => $request->lastname,
            'team' => $request->team,
            'pohlavi' => $request->gender,
            'rok_narozeni' => $request->birthyear,
            'country' => $request->country,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'email' => $request->email,
          ]);



       if($response['status'] == 'OK')
        {
            return redirect()->route('registration_success',['raceName' => $raceName,'raceYear' => $raceYear,'raceId' => $raceId]);
        }

    }



    public function create($raceName,$raceYear,$raceId,RegistrationRepositoryInterface $registration)
    {

        $this->request->session()->reflash();
        //dd($registration->getEventList());

        if(!isset($registration->getEventList()['current_event']))
        {
            abort(404);
        }

        $x = $this->select->getTest($raceId);
      //  dd($this->homeRepositoryInterface->getCurrentRegistration());
      //dd($registration->getEventList());

        return view('registration.create',[
            'eventList' => $registration->getEventList(),
            'countries' => Country::orderBy('name','asc')->get(),
            'eventAgeRange' => $registration->getEventAgeRange(),
            'selects' => $x,
           // 'formtype' => 50,
            'currentRegistrations' => $this->homeRepositoryInterface->getCurrentRegistration(),
            'raceName' => $raceName,
            'raceYear' => $raceYear,
            'raceId' => $raceId

        ]);
    }

}
