<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($raceYear)
    {
        //$zavody = new Zavody($raceYear);
        
        return view('registration/index');
    }

}
