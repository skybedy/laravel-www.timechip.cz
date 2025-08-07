<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Registration extends Model
{


/*
    public function __construct($raceYear,$raceId,$eventOrder)
    {
        $this->raceYear = 2025;
        $this->raceId = $raceId;
        $this->eventOrder = $eventOrder;
        parent::__construct($this->raceYear);
    }*/


    protected $table = 'prihlasky_jednotlivci_2025';

    protected $kategorie = 'kategorie_2025';

    protected $fillable = [

        'id_zavodu','id_kategorie','prijmeni_1','jmeno_1','datum_narozeni','poradi_podzavodu','prislusnost','pohlavi','stat','mail','telefon_1','telefon_2','startovne'
     ];



    public function categorySelect($request,$raceYear,$raceId)
    {

        $vek = date('Y') - $request->birthyear;

        $sql = "SELECT k.id_kategorie FROM kategorie_{$raceYear} k WHERE id_zavodu = :race_id AND pohlavi = :pohlavi AND :vek BETWEEN vek_start AND vek_konec AND poradi_podzavodu = :event_order AND paralelni_kategorie = :paralelni_kategorie";

        $results = DB::select($sql, ['race_id' => $raceId,'pohlavi' => $request->gender,'vek' => $vek,'event_order' => $request->event_order,'paralelni_kategorie' => 0]);

        return $results;
    }

    public function entryFee($raceYear,$raceId,$eventOrder)
    {
         $sql = "SELECT castka FROM prihlasky_startovne_{$raceYear} WHERE id_zavodu = :race_id AND poradi_podzavodu =  :event_order";

         $results = DB::select($sql, ['race_id' => $raceId,'event_order' => $eventOrder]);

         return $results;

    }



    public function insertVs($registrationId, $raceYear, $raceId, $registrationType)
    {

        $sql = "
                INSERT INTO vs_$raceYear (id_zavodu, id_prihlasky, typ_prihlasky, vs)
                SELECT ?, ?, ?, COALESCE(MAX(vs), 202500000) + 1 FROM vs_$raceYear
                RETURNING vs
            ";

            $result = DB::select($sql, [$raceId, $registrationId,$registrationType]);

            return $result[0]->vs ?? null;
            
    }



    public function getAll($raceId)
    {
        $sql = "SELECT p.prijmeni_1,p.jmeno_1,p.poradi_podzavodu,p.prislusnost,p.zaplaceno,k.nazev_k FROM $this->table p,$this->kategorie k WHERE p.id_zavodu = :race_id AND p.id_kategorie = k.id_kategorie"; 

        $results = DB::select($sql, ['race_id' => $raceId]);

        return $results;
    }



}
