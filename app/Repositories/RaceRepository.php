<?php

namespace App\Repositories;

use App\Interfaces\RaceRepositoryInterface;
use App\Models\Race;
use Illuminate\Support\Facades\DB;

class RaceRepository extends BaseRepository implements RaceRepositoryInterface
{
    
    private $raceYear;

    public function __construct($attributes)
    {
        $this->raceYear = $attributes[0];
        parent::__construct($this->raceYear,null);
    }
    
    public function getRaceYear()
    {
        return $this->raceYear;
    }





    public function getRacesOfYear()
    {
        $sql =  DB::table($this->shortcutRaces)
        ->select(
            $this->shortcutRaces.'.nazev_zavodu',
            $this->shortcutRaces.'.misto_zavodu',
            $this->shortcutRaces.'.datum_zavodu',
            $this->shortcutRaces.'.nove_vysledky',
            $this->shortcutRaces.'.web',
            'typ_zavodu.typ_zavodu')
        ->where('zverejneni','>',0)
        ->join('typ_zavodu', $this->shortcutRaces.'.typ_zavodu', '=', 'typ_zavodu.id_typ_zavodu')
        ->orderBy('datum_zavodu', 'asc');

        return $sql->get();
    }

}
