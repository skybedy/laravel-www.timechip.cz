<?php

namespace App\Repositories;

use App\Interfaces\RegistrationRepositoryInterface;
use App\Models\Race;
use Illuminate\Support\Facades\DB;

class RegistrationRepository extends BaseRepository implements RegistrationRepositoryInterface
{
    
    private $raceYear;
    private $raceId;
    private $eventOrder;

    public function __construct($attributes)
    {
        $this->raceYear = $attributes[0];
        $this->raceId = $attributes[1];
        $this->eventOrder = $attributes[2];
        parent::__construct($this->raceYear);
    }


    public function getEventList()
    {
        return DB::table($this->shortcutEvents)
        ->select('nazev','poradi_podzavodu','registration_form_type')
        ->where('id_zavodu',$this->raceId)
        ->whereNotNull('registration_form_type')
        ->OrderBy('poradi_podzavodu','ASC')
        ->get();
    }

//pocet_podzavodu asi pujde pryč, nazev jeste nevim
    public function getRaceOption()
    {
        $x =  DB::table($this->shortcutRaces)->select('pocet_podzavodu','nazev_zavodu')->where('id_zavodu',$this->raceId)->get();

        foreach($x as $val)
        {
            return $val;
        }

    }








  
    

}
