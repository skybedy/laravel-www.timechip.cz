<?php

namespace App\Repositories;

use App\Interfaces\TestRepositoryInterface;
use App\Repositories\BaseRepository;

class TestRepository implements TestRepositoryInterface
{
    
    private $raceYear;
    
    public function __construct($attributes)
    {
       // dd($attributes);
        $this->raceYear = $attributes;
    }
    
    public function test() 
    {
        return "hoj".$this->raceYear;
    }

}
