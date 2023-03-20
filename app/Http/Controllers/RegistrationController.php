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
    
    
    public function __construct(SelectRepositoryInterface $select)
    {
        $this->select = $select;
    }
    
    

    public function store(Request $request,$raceYear,$raceId)
    {
        
        
        //dd($request->all());
        
        
        $validated = $request->validate([
            'event_order' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'birthyear' => 'required',
            'country' => 'required',
            'phone1' => 'required',
            'email' => 'required',
        ]);



        $response = Http::post('https://api.timechip.cz/prihlasky/ulozit-prihlasku/'.$raceYear.'/'.$raceId, [
            'typ_prihlasky' => 1,
            'event_order' => $request->event_order,
            'firstname' => $request->firstname,
            'surname' => $request->lastname,
            'prislusnost' => $request->team,
            'pohlavi' => $request->gender,
            'rok_narozeni' => $request->birthyear,
            'country' => $request->country,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'email' => $request->email,
          ]);

        

       dd($response->json());




    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($raceName,$raceId,RegistrationRepositoryInterface $registration,Request $request,HomeRepositoryInterface $homeRepository)
    {
        
        $request->session()->reflash();
        
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
            'currentRegistrations' => $homeRepository->getCurrentRegistration(),
            'raceName' => $raceName
        ]);
    }

}
