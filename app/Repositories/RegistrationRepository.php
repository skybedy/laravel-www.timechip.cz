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


    public function getEventAgeRange()
    {
        return DB::table($this->shortcutCategory)
                ->select(DB::raw($this->raceYear." - MIN(vek_start) AS year_end,".$this->raceYear." - MAX(vek_konec) AS year_start"))
                ->where('id_zavodu',$this->raceId)
                ->where('poradi_podzavodu',$this->eventOrder)
                ->get()->toArray();
    } 
    
    
    public function getEventList()
    {
        $eventList = DB::table($this->shortcutEvents)
        ->select('nazev','registration_name','poradi_podzavodu','registration_form_type')
        ->where('id_zavodu',$this->raceId)
        ->whereNotNull('registration_form_type')
        ->OrderBy('poradi_podzavodu','ASC')
        ->get();


//dd($eventList);

        return[
            'event_list' => $eventList,
            'current_event' =>  $eventList->firstWhere('poradi_podzavodu', $this->eventOrder),
            'race_year' => $this->raceYear,
            'race_id' => $this->raceId
        ];
    }

//pocet_podzavodu asi pujde pryč, nazev jeste nevim
    public function getRaceOption()
    {
        return DB::table($this->shortcutRaces)->select('pocet_podzavodu','nazev_zavodu')->where('id_zavodu',$this->raceId)->get();

        foreach($x as $val)
        {
            return $val;
        }
    }

    public function getAll()
    {
        return

        DB::table($this->shortcutRegistrationIndividual)
        ->where('id_zavodu',$this->raceId)
        ->join('nazev_k', $this->shortcutCategory.'.id_kategorie', '=', $this->shortcutRegistrationIndividual.'id_kategorie')

        ->orderBy('prijmeni_1','ASC')
        ->get()->toArray();

    } 


}
