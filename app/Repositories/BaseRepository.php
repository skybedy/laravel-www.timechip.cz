<?php

namespace App\Repositories;


class BaseRepository
{

    protected $shortcutRaces;
    protected $shortcutEvents;
    protected $shortcutCategory;
    protected  $shortcutRegistrationIndividual;

    public function __construct($raceYear)
    {
        $this->shortcutRaces = 'zavody_'.$raceYear;  
        $this->shortcutEvents = 'podzavody_'.$raceYear;
        $this->shortcutCategory = 'kategorie_'.$raceYear; 
        $this->shortcutRegistrationIndividual = 'prihlasky_jednotlivci_'.$raceYear;
    }








}
