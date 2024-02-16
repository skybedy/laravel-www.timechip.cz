<?php

namespace App\Interfaces;

interface RegistrationRepositoryInterface
{
    public function getRaceOption();
    public function getEventList();
    public function getEventAgeRange();
    public function getAll();
}