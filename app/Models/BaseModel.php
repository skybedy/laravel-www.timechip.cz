<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{

    protected $sqlZavody;
    protected $sqlKategorie;




    public function __construct($raceYear)
    {
        $this->sqlZavody = 'zavody_'.$raceYear;  
        $this->sqlKategorie = "kategorie_".$raceYear; 
         
    }








}
