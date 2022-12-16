<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use LDAP\Result;

class Results
{

    private $sqlZavod;
    private $sqlVysledky;
    private $sqlKategorie;
    private $time_order = 1;
    private $event_order = 1;
    private $zavodyTable;
    private $raceCode;
    private $raceYear;
    private $subEvents;
    private $subEventOrder = 1;
    private $sqlZavody;
    private $sqlPodzavody;
    private $raceId;
    private $subEventList;
    private $subEventNumber;
    
    
    public function __construct($raceYear,$raceCode){
        $this->zavodyTable = "zavody_".$raceYear;
        $this->sqlZavody = "zavody_".$raceYear;
        $this->raceCode = str_replace('-','_',$raceCode);
        $this->raceYear = $raceYear;
        
        $this->sqlZavod = "zavod_".$this->raceCode."_".$this->raceYear;
        $this->sqlVysledky = "vysledky_".$this->raceCode."_".$this->raceYear."_test";
        $this->sqlKategorie = "kategorie_".$this->raceYear;
        $this->subEvents = "podzavody_".$this->raceYear;
        $this->sqlPodzavody = "podzavody_".$this->raceYear;
         
        $eventData = (array) $this->eventData()[0];
        $this->raceId = $eventData['id_zavodu'];
        $this->subEventNumber = $eventData['pocet_podzavodu']; 
        
        $x = $this->eventData()[0];
        echo $x->id_zavodu;
    
    }

    public function getSubEventNumber()
    {
        return $this->subEventNumber;
    }




    
    public function subEventList()
    {
        $sql = "SELECT nazev AS nazev_podzavodu,poradi_podzavodu 
                FROM $this->sqlPodzavody
                WHERE id_zavodu = ? ORDER BY poradi_podzavodu ASC";

        return  DB::select($sql,[$this->raceId]);

    }


    public function categoryList()
    {
        $result = DB::table($this->sqlKategorie)
                ->select('id_kategorie AS category_id','poradi AS category_order','nazev_k AS category_name','kod_k AS category_code')
                ->where('id_zavodu','=',$this->raceId)
                ->orderBy('poradi','ASC')
                ->get();
        
        return $result;
    }




 




    
    
    
    
    
    private function eventData()
    {
        $sql = "SELECT z.id_zavodu,z.nazev_zavodu,z.pocet_podzavodu 
                FROM $this->sqlZavody z
                WHERE z.kod_zavodu LIKE ?";
        
        return DB::select($sql,[$this->raceCode]);
    }
   
   
   
   
   

    
    
    
    
    
    
    
    
    
    
    
    public function Results()
    {
        

        $sql =  DB::table($this->zavodyTable)
        ->select(
            $this->zavodyTable.'.nazev_zavodu',
            $this->zavodyTable.'.kod_zavodu',
            $this->zavodyTable.'.misto_zavodu',
            $this->zavodyTable.'.datum_zavodu',
            $this->zavodyTable.'.nove_vysledky',
            $this->zavodyTable.'.web')
        ->where('nove_vysledky','=',1)
        ->orderBy('datum_zavodu','DESC');
       
        return $sql->get();
    
    }



   
   
   
   
   
   
    public function ResultsOverall()
    {

     
        
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
        FROM $this->sqlVysledky v,$this->sqlZavod z,osoby o,tymy t,$this->sqlKategorie k
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
