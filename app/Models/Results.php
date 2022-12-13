<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Results
{

    private $sqlzavod;
    private $sqlvysledky;
    private $sqlkategorie;
    private $time_order = 1;
    private $event_order = 1;
    
    
    public function Results($raceYear)
    {
        
        $zavodyTable = "zavody_".$raceYear;

        $sql =  DB::table($zavodyTable)
        ->select(
            $zavodyTable.'.nazev_zavodu',
            $zavodyTable.'.kod_zavodu',
            $zavodyTable.'.misto_zavodu',
            $zavodyTable.'.datum_zavodu',
            $zavodyTable.'.nove_vysledky',
            $zavodyTable.'.web')
        ->where('nove_vysledky','=',1)
        ->orderBy('datum_zavodu','DESC');
       
        return $sql->get();
    
    }


   public function ResultsOverallX($raceYear,$raceCode)
   {
        $raceCode = str_replace('-','_',$raceCode);
        $zavod = "zavod_".$raceCode."_".$raceYear;
        $vysledky = "vysledky_".$raceCode."_".$raceYear."_test";

       // $sql1 = DB::table($vysledky)

   }
   
   
   
   
   
    public function ResultsOverall($raceYear,$raceCode)
    {

        $raceCode = str_replace('-','_',$raceCode);
        $this->sqlzavod = "zavod_".$raceCode."_".$raceYear;
        $this->sqlvysledky = "vysledky_".$raceCode."_".$raceYear."_test";
        $this->sqlkategorie = "kategorie_".$raceYear;
        
        $sql1 = DB::select("SELECT 
            v.ids_alias as ids,
            v.cip,
            v.race_time,
            v.race_time AS finish_time,
            ZEROS_REMOVE(v.distance_overall) AS distance_overall_edit,
            v.rank_overall,
            v.rank_category,
            v.rank_gender,
            v.distance_overall,
            o.prijmeni AS fullname,
            o.rocnik,
            t.nazev_tymu,
            k.kod_k 
        FROM $this->sqlvysledky v,$this->sqlzavod z,osoby o,tymy t,$this->sqlkategorie k
        WHERE
            v.race_time > 0 AND 
            v.time_order = ? AND 
            v.false_time IS NULL AND 
            v.lap_only IS NULL AND 
            v.ids = z.ids AND 
            z.poradi_podzavodu = ? AND 
            z.ido = o.ido AND
            z.id_tymu = t.id_tymu AND
            z.id_kategorie = k.id_kategorie 
        GROUP BY v.ids 
        ORDER BY v.race_time_sec ASC",[1,1]);

        $sql2 = DB::table('tabulka_vysledky')
                ->select('column_name','column_order','column_align','variable_name','time_order')
                ->where('race_id','=',3)
                ->where('race_year','=',2022)
                ->orderBy('column_order','ASC')            
                ->get();
        
                return ['columns' => $sql2,'lines' => $sql1];
        
    }




}
