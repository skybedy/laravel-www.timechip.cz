<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\zavody_2022;
use App\Repositories\HomeRepository;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminat.d-none .d-sm-blocke\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(HomeRepository $homeRepository)
    {

      $NextEventsAndLastResults =  [
        zavody_2022::with('typZavodu')->whereNotNull('datum_zavodu')->where([['datum_zavodu','<',date("Y-m-d")],['zverejneni','=',1]])->orderBy('datum_zavodu','ASC')->limit(8)->get(),
        zavody_2022::with('typZavodu')
          ->whereNotNull('datum_zavodu')
          ->whereNotNull('zverejneni')
          ->whereNotNull('nove_vysledky')
          ->where([
            ['datum_zavodu','<',date("Y-m-d")],
            ])
          ->orderBy('datum_zavodu','DESC')->limit(8)->get()
      ];

      return view('home',['next_events_and_last_results' => $homeRepository->getNextEventsAndLastResults(),'currentRegistrations' => $homeRepository-> getCurrentRegistration()]);
      
    }
}
