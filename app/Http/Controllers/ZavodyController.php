<?php

namespace App\Http\Controllers;

use App\Models\Zavody;

class ZavodyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($raceYear)
    {
        $zavody = new Zavody($raceYear);
        
        return view('zavody',['races' => $zavody->zavody(),'raceYear' => $raceYear]);
    }

}
