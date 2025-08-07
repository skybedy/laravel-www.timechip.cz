<?php

namespace App\Http\Controllers;

use App\Repositories\HomeRepository;

class HomeController extends Controller
{
    
    public function __invoke(HomeRepository $homeRepository)
    {

      /*
      $NextEventsAndLastResults =  [
        Races::with('typZavodu')->whereNotNull('datum_zavodu')->where([['datum_zavodu','<',date("Y-m-d")],['zverejneni','=',1]])->orderBy('datum_zavodu','ASC')->limit(8)->get(),
        Races::with('typZavodu')
          ->whereNotNull('datum_zavodu')
          ->whereNotNull('zverejneni')
          ->whereNotNull('nove_vysledky')
          ->where([
            ['datum_zavodu','<',date("Y-m-d")],
            ])
          ->orderBy('datum_zavodu','DESC')->limit(8)->get()
      ];*/

      return view('home',['next_events_and_last_results' => $homeRepository->getNextEventsAndLastResults(),'currentRegistrations' => $homeRepository-> getCurrentRegistration()]);
      
    }
}
