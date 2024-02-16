<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;


class Zavody extends BaseModel
{

    private $zavodyTable;

    protected $primaryKey = 'id_zavodu';
   
    public function __construct($raceYear)
    {
        parent::__construct($raceYear,null);
    }

    
    public function Zavody()
    {
       //$sql =  $this->classZavody::with('typZavodu')->whereNotNull('datum_zavodu')->where('zverejneni','=',1)->orderBy('datum_zavodu','ASC');  
       $sql =  DB::table($this->sqlZavody)
                ->select(
                    $this->sqlZavody.'.nazev_zavodu',
                    $this->sqlZavody.'.misto_zavodu',
                    $this->sqlZavody.'.datum_zavodu',
                    $this->sqlZavody.'.nove_vysledky',
                    $this->sqlZavody.'.web',
                    'typ_zavodu.typ_zavodu')
                ->where('zverejneni','>',0)    
                ->join('typ_zavodu', $this->sqlZavody.'.typ_zavodu', '=', 'typ_zavodu.id_typ_zavodu')
                ->orderBy('datum_zavodu', 'asc');
        
        return $sql->get();
    }



}
