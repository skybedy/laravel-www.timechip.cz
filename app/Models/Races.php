<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Races extends Model
{
    
    
    protected $primaryKey = 'id_zavodu';

    protected $table = 'zavody_2022';

    public function typZavodu()
    {
        return $this->belongsTo(typ_zavodu::class,'typ_zavodu');
    }

   
    public function getDatumZavoduAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d', $value)->format('j. n');
    }




    
}
