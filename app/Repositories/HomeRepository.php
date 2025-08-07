<?php

namespace App\Repositories;

use App\Interfaces\HomeRepositoryInterface;
use Illuminate\Support\Facades\DB;
use App\Models\Races;

class HomeRepository extends BaseRepository implements HomeRepositoryInterface
{
    
    private $raceYear;
    private $homepageRaceNumber = 7;    

    public function __construct($attributes)
    {
        $this->raceYear = 2025;
        parent::__construct($this->raceYear);
    }

    
    
    public function getCurrentRegistration()
    {
        return DB::table($this->shortcutRaces)
        //return DB::table('zavody_2024')
                ->select('id_zavodu','nazev_zavodu','nove_prihlasky')
                ->whereNotNull('nove_prihlasky')
                ->orderBy('nazev_zavodu','ASC')
                ->get();
    } 

  
    public function getNextEventsAndLastResults()
    {
      
      
      //$mergeResult = false;
      $nextRaces = Races::with('typZavodu')->whereNotNull('datum_zavodu')->where([['datum_zavodu','>',date("Y-m-d")],['zverejneni','=',1]])->orderBy('datum_zavodu','ASC')->limit($this->homepageRaceNumber)->get();
      $lastResults =  Races::with('typZavodu')->whereNotNull('datum_zavodu')->whereNotNull('zverejneni')->whereNotNull('nove_vysledky')->where([['datum_zavodu','<=',date("Y-m-d")],])->orderBy('datum_zavodu','DESC')->limit($this->homepageRaceNumber)->get();
      $mergeResult = $lastResults; 
     
      if($lastResults->count() < $this->homepageRaceNumber)
      {
       
        Races::setGlobalTable('zavody_2024');

        $lastYearResults  =  Races::with('typZavodu')
        ->whereNotNull('datum_zavodu')
        ->whereNotNull('zverejneni')
        ->whereNotNull('nove_vysledky')
        ->where([
          ['datum_zavodu','<',date("Y-m-d")],
          ])
        ->orderBy('datum_zavodu','DESC')->limit($this->homepageRaceNumber - $lastResults->count())->get();
  
        $mergeResult = $lastResults->merge($lastYearResults);
      }

        return [
            $nextRaces,
            $mergeResult
        ];
    }

}
