<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{

    protected $sqlZavody;
    protected $sqlKategorie;
    protected $shortcutRaces;
    protected $shortcutEvents;
    protected $shortcutCategory;
    protected  $shortcutRegistrationIndividual;





    public function __construct($raceYear)
    {
        $this->sqlZavody = 'zavody_'.$raceYear;  
       
        $this->sqlKategorie = "kategorie_".$raceYear; 
       
        $this->shortcutRaces = 'zavody_'.$raceYear;  
       
        $this->shortcutEvents = 'podzavody_'.$raceYear;
       
        $this->shortcutCategory = 'kategorie_'.$raceYear; 
       
        $this->shortcutRegistrationIndividual = 'prihlasky_jednotlivci_'.$raceYear;
         
    }








}
