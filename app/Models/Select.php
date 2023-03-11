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


    public function __construct(array $a)
    {
        //dd($a);
        foreach($a as $val){
            //dump($val);
            $x =  $val["race_year"];

        }
        //$this->raceYear = $attr['a'];
      //  $this->raceId  = $a[0];
    }


    public function test()
    {
        return Select::where('race_id','=',$this->raceId)->get();
    }



}
