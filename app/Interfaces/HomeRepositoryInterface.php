<?php

namespace App\Interfaces;

interface HomeRepositoryInterface
{
    public function getNextEventsAndLastResults();
    public function getCurrentRegistration();
}