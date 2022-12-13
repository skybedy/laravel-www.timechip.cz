<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class zavody_2022 extends Model
{
    
    protected $table = 'zavody_2022';
    
    protected $primaryKey = 'id_zavodu';

    public function typZavodu(){
        return $this->belongsTo(typ_zavodu::class,'typ_zavodu');
    }

   
    public function getDatumZavoduAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d', $value)->format('j. n');
    }




    
}
