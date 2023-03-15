<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Select;


class RegistrationController extends Controller
{
      
    private $select;
    
    
    public function __construct(\App\Models\Select $select)
    {
        $this->select = $select;
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($raceYear,$raceId,Select $select)
    {
        
       // $selects = Select::where('race_id','=',$raceId)->where('event_order','=',1);
       $x = $this->select->test($raceId);
       foreach($x as $y){
       foreach(json_decode($y['content']) as $d){

      // dump($d);
    }
}

        
      
        return view('registration/index',[
            'countries' => Country::orderBy('name','asc')->get(),
            'selects' => $select->test($raceId)
        ]);
    }

}
