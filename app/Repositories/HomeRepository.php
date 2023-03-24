<?php

namespace App\Repositories;

use App\Interfaces\HomeRepositoryInterface;
use Illuminate\Support\Facades\DB;
use App\Models\Races;

class HomeRepository extends BaseRepository implements HomeRepositoryInterface
{
    
    private $raceYear;

    public function __construct($attributes)
    {
        $this->raceYear = $attributes[0];
        parent::__construct($this->raceYear);
    }

    
    
    public function getCurrentRegistration()
    {
        return DB::table($this->shortcutRaces)
                ->select('id_zavodu','nazev_zavodu')
                ->whereNotNull('nove_prihlasky')
                ->orderBy('nazev_zavodu','ASC')
                ->get();
    } 
    
    
    
    
    public function getNextEventsAndLastResults()
    {
      
      $lastResults =  Races::with('typZavodu')
      ->whereNotNull('datum_zavodu')
      ->whereNotNull('zverejneni')
      ->whereNotNull('nove_vysledky')
      ->where([
        ['datum_zavodu','<',date("Y-m-d")],
        ])
      ->orderBy('datum_zavodu','DESC')->limit(6)->get();


      dd($lastResults);
      
      
        return [
            Races::with('typZavodu')->whereNotNull('datum_zavodu')->where([['datum_zavodu','>',date("Y-m-d")],['zverejneni','=',1]])->orderBy('datum_zavodu','ASC')->limit(6)->get(),
            Races::with('typZavodu')
              ->whereNotNull('datum_zavodu')
              ->whereNotNull('zverejneni')
              ->whereNotNull('nove_vysledky')
              ->where([
                ['datum_zavodu','<',date("Y-m-d")],
                ])
              ->orderBy('datum_zavodu','DESC')->limit(6)->get()
        ];
    }



}
