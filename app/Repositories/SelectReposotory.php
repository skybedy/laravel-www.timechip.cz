<?php

namespace App\Repositories;

use App\Interfaces\RepositoryInterface;
use App\Models\Select;
use Dotenv\Repository\RepositoryInterface as RepositoryRepositoryInterface;

class SelectRepository implements RepositoryRepositoryInterface
{
    public function getOrders() 
    {
        return ::all();
    }

}
