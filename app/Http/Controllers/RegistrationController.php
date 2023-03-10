<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;


class RegistrationController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($raceYear)
    {
        
        return view('registration/index',[
            'countries' => Country::orderBy('name','asc')->get()
        ]);
    }

}
