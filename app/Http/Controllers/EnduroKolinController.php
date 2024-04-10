<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\DodaniRocniku;

class EnduroKolinController extends Controller
{
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
