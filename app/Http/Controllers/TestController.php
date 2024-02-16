<?php

namespace App\Http\Controllers;

use App\Interfaces\TestRepositoryInterface;

class TestController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(TestRepositoryInterface $repository)
    {
    dd($repository->test());
    }
}
