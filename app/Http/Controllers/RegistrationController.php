<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Interfaces\SelectRepositoryInterface;
use App\Interfaces\RegistrationRepositoryInterface;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;


class RegistrationController extends Controller
{
      
    private $select;
    
    
    public function __construct(SelectRepositoryInterface $select)
    {
        $this->select = $select;
    }
    
    

    public function store(Request $request)
    {
        
        /*$validated = $request->validate([
            'event_order' => 'required',
            'firstname' => 'required',
            'surname' => 'required',
            'pohlavi' => 'required',
            'rok_narozeni' => 'required',
            'stat' => 'required',
            'phone1' => 'required',
            'email' => 'required',
        ]);*/


  /*      $client = new Client();
        $res = $client->request('POST', 'https://api.timechip.cz/prihlasky/ulozit-prihlasku/2023/9', [
            'form_params' => [
                'event_order' => 1,
                'firstname' => 'test_secret',
            ]
        ]);*/
       
       
        //echo $res->getStatusCode();
        // 200
        //dump($res->getHeader('content-type'));
        // 'application/json; charset=utf8'
        //print_r($res->getBody());
 

        $response = Http::post('https://api.timechip.cz/prihlasky/ulozit-prihlasku/2023/9', [
            'event_order' => 1,
            'firstname' => 'Martin',
            'surname' => 'Kupec'
        ]);

        

       dd($response);




    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($raceYear,$raceId,RegistrationRepositoryInterface $registration)
    {
        
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
            'formtype' => 1
        ]);
    }

}
