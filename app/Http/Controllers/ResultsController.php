<?php

namespace App\Http\Controllers;

use App\Models\Results;
use Illuminate\Contracts\View\View;

class ResultsController extends Controller
{
    
    private $subEventList;
    
    
    
    public function index($raceYear)
    {
        //$resultList =  $results->Results($raceYear);
        
        //return view('results.index',['raceYear' => $raceYear,'resultList' => $resultList]);

        return redirect('https://vysledky.timechip.cz#'.$raceYear);
    }





   /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($raceYear,$raceCode)
    {
        $results = new Results($raceYear,$raceCode);

        if($results->getSubEventNumber() > 1)
        {
            $this->subEventList = $results->subEventList();
        }
        
        return view('results.show', ['results' => $results->ResultsOverall(),'subEventList' => $this->subEventList,'categoryList' => $results->categoryList()]);
    }



}
