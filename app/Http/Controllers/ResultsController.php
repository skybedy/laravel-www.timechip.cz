<?php

namespace App\Http\Controllers;

use App\Models\Results;
use Illuminate\Contracts\View\View;

class ResultsController extends Controller
{
    public function index(Results $results,$raceYear): View
    {
        $resultList =  $results->Results($raceYear);
        
        return view('results.index',['raceYear' => $raceYear,'resultList' => $resultList]);
    }





   /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($raceYear,$raceCode,Results $results): View
    {
        $result = (array) $results->ResultsOverall($raceYear,$raceCode);
        $array = json_decode(json_encode($result), true);
        return view('results.show', ['results' => $array]);
    }



}
