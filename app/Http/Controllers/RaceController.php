<?php

namespace App\Http\Controllers;

use App\Models\Zavody;
use App\Interfaces\RaceRepositoryInterface;

class RaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RaceRepositoryInterface $race)
    {
        return view('zavody',['races' => $race->getRacesOfYear(),'raceYear' => $race->getRaceYear()]);
    }


}
