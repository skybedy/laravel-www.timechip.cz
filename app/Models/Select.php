<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Select extends Model
{
    use HasFactory;

    protected $table = 'select';
    private $raceYear;
    private $raceId;


    //public function __construct(int $year)
    //{
       // dd($a);
     // $x = $a['race_year'];
       
       
     // $this->raceYear = $year;
     // $this->raceId  = $id;
   // }


    public function test($raceId)
    {
        return  Select::where('race_id','=',$raceId)->where('event_order','=',1)->get();
    }



}
