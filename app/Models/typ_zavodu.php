<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class typ_zavodu extends Model
{

    protected $table = 'typ_zavodu';

    protected $primaryKey = 'id_typ_zavodu';

    public function zavody2022(){
        return $this->hasMany(zavody_2022::class);
    }



}
