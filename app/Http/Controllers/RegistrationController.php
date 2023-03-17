<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Interfaces\SelectRepositoryInterface;
use App\Interfaces\RegistrationRepositoryInterface;


class RegistrationController extends Controller
{
      
    private $select;
    
    
    public function __construct(SelectRepositoryInterface $select)
    {
        $this->select = $select;
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($raceYear,$raceId,RegistrationRepositoryInterface $registration,Request $request,$_eventOrder = null)
    {
        
        isset($_eventOrder) ? $eventOrder = $_eventOrder :   $eventOrder = 1;
        
        $x = $this->select->getTest($raceId);
        dd($eventOrder);
        
        $eventList = [];

        $eventNumber = $registration->getRaceOption()->pocet_podzavodu;

        if($eventNumber > 1)
        {
            $eventList = $registration->getEventList();
        }
        
        $eventList = $registration->getEventList();
        
        $eventNumber = count($eventList);
        
        
        dd($eventList);
        
        
        
        
        
        return view('registration/index',[
            'eventNumber' => $eventNumber,
            'eventList' => $registration->getEventList(),
            'countries' => Country::orderBy('name','asc')->get(),
            'selects' => $x,
            'formtype' => 1
        ]);
    }

}
