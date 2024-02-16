<?php

namespace App\Http\Controllers;

use App\Interfaces\RaceRepositoryInterface;
use App\Interfaces\HomeRepositoryInterface;

class RaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RaceRepositoryInterface $race,HomeRepositoryInterface $homeRepositoryInterface)
    {
        return view('zavody',[
            'races' => $race->getRacesOfYear(),
            'raceYear' => $race->getRaceYear(),
            'currentRegistrations' => $homeRepositoryInterface->getCurrentRegistration(),
        ]);
    }


}
