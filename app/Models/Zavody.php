<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;


class Zavody
{

    private $zavodyTable;
   
    public function __construct($raceYear)
    {
        $this->zavodyTable = 'zavody_'.$raceYear;
    }

    
    public function Zavody()
    {
       //$sql =  $this->classZavody::with('typZavodu')->whereNotNull('datum_zavodu')->where('zverejneni','=',1)->orderBy('datum_zavodu','ASC');  
       $sql =  DB::table($this->zavodyTable)
                ->join('typ_zavodu', $this->zavodyTable.'.id_zavodu', '=', 'typ_zavodu.id_typ_zavodu')
                ->select(
                    $this->zavodyTable.'.nazev_zavodu',
                    $this->zavodyTable.'.misto_zavodu',
                    $this->zavodyTable.'.datum_zavodu',
                    $this->zavodyTable.'.nove_vysledky',
                    $this->zavodyTable.'.web',
                    'typ_zavodu.typ_zavodu');
        
        return $sql->get();
    }



}
