<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Select;


class RegistrationController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(\App\Models\Select $select)
    {
        
       // $selects = Select::where('race_id','=',$raceId)->where('event_order','=',1);
        dd($select->test());
        
      /*
        return view('registration/index',[
            'countries' => Country::orderBy('name','asc')->get(),
            'selects' => $select
        ]);*/
    }

}
