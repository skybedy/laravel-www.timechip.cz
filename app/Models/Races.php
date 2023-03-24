<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Races extends Model
{
    
    
    protected $primaryKey = 'id_zavodu';

    //ne, to není dobrý, nevím co s tím zatím
    protected static $globalTable = "zavody_2023";

  
    public function __construct()
    {
        // https://stackoverflow.com/questions/42782695/laravel-eloquent-settable-in-relationships        
        //self::$globalTable = 'zavody_'.date("Y");
    }

    public function typZavodu()
    {
        return $this->belongsTo(typ_zavodu::class,'typ_zavodu');
    }

    public function getDatumZavoduAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d', $value)->format('j. n');
    }

    public function getTable() {
        return self::$globalTable;
    }

    public static function setGlobalTable($table) {
        self::$globalTable = $table;
    }
 
}
