<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\DodaniRocniku;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class EnduroKolinController extends Controller
{
    
    
    
    
    

    
    
    public function create(Request $request)
    {

       $racer = DodaniRocniku::where('kod', $request['kod'])->first();
       
       
       
       
        return view('enduro-kolin.create',[
            'racer' => $racer 
          ]);
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'rocnik' => 'required',
            ]
        );
        
//dd($request['rocnik']);
        $racer = DodaniRocniku::find($request['id']);

        $racer->rocnik = "{$request['rocnik']}-00-00";
 
        $racer->save();
        
        return view('enduro-kolin.store',[
            'racer' => $racer 
          ]);
    }
    
    
    
    public function naplneniDb(DodaniRocniku $dodaniRocniku)
    {

       for($i = 1;$i <= 1000;$i++)
       {
            $kod = rand(100000000,999999999);

            if (!$dodaniRocniku::where('kod', $kod)->exists())
            {
                $dodaniRocniku->create([
                    'kod' => $kod,
                ]);
            }
       }

        return view('enduro-kolin.index',[
          'bla' => 'snad to funguje' ,
        ]);
    }
}
