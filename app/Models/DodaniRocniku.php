<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DodaniRocniku extends Model
{
   protected $table = 'dodani_rocniku';

   protected $fillable = [
    'kod',
    ];
}
