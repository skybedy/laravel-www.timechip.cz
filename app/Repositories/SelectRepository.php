<?php

namespace App\Repositories;

use App\Interfaces\SelectRepositoryInterface;
use App\Models\Select;

class SelectRepository implements SelectRepositoryInterface
{
    
    private $select;
    
    public function __construct(Select $select)
    {
        $this->select = $select;
    }
    
    public function getTest($raceId) 
    {
        return  $this->select::where('race_id','=',$raceId)->where('event_order','=',1)->get();
    }

}
