<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Interfaces\SelectRepositoryInterface;
use App\Interfaces\RegistrationRepositoryInterface;
use App\Interfaces\HomeRepositoryInterface;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;

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

    
    
    public function index($raceName,$raceYear,$raceId)
    {
        
        
        return view('registration.index',[
            'currentRegistrations' => $this->homeRepositoryInterface->getCurrentRegistration(),
            'raceName' => $raceName,
            'raceYear' => $raceYear,
            'raceId' => $raceId,
            'registrations' => $this->registrationRepositoryInterface->getAll(),
            'eventList' => $this->registrationRepositoryInterface->getEventList(),



        ]);
    }



    public function store($raceYear,$raceId)
    {
        
        
        $validated = $this->request->validate([
            'event_order' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'birthyear' => 'required',
            'country' => 'required',
            'phone1' => 'required',
            'email' => 'required',
        ]);



        $response = Http::asForm()->post('https://api.timechip.cz/prihlasky/ulozit-prihlasku/'.$raceYear.'/'.$raceId, [
            'typ_prihlasky' => 1,
            'event_order' => $this->request->event_order,
            'firstname' => $this->request->firstname,
            'surname' => $this->request->lastname,
            'team' => $this->request->team,
            'pohlavi' => $this->request->gender,
            'rok_narozeni' => $this->request->birthyear,
            'country' => $this->request->country,
            'phone1' => $this->request->phone1,
            'phone2' => $this->request->phone2,
            'email' => $this->request->email,
          ]);

        

       dd($response->json());




    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($raceName,$raceId,RegistrationRepositoryInterface $registration)
    {
        
        $this->request->session()->reflash();
        
        if(!isset($registration->getEventList()['current_event']))
        {
            abort(404);
        }

        $x = $this->select->getTest($raceId);
     

        return view('registration.create',[
            'eventList' => $registration->getEventList(),
            'countries' => Country::orderBy('name','asc')->get(),
            'eventAgeRange' => $registration->getEventAgeRange(),
            'selects' => $x,
            'formtype' => 1,
            'currentRegistrations' => $this->homeRepositoryInterface->getCurrentRegistration(),
            'raceName' => $raceName
        ]);
    }

}
