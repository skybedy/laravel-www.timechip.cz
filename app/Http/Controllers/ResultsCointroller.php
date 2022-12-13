<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultsCointroller extends Controller
{
    public function index($raceYear)
    {
        $zavody = new Zavody($raceYear);
        
        return view('zavody',['races' => $zavody->zavody(),'raceYear' => $raceYear]);
    }

}
