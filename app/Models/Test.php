<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends BaseModel
{

private $raceYear;
private $raceId;

public function __construct($attributes)
{
   // dd($attributes);
    $this->raceYear = $attributes[0];
    $this->raceId = $attributes[1];
    parent::__construct($this->raceYear,null);
}    

public function test()
{
    return $this->sqlZavody;
}

}
