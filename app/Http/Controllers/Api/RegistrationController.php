<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function startNumberCheck()
    {

        $sql =  DB::table('kategorie_2023')
        ->select('id_kategorie')
        ->where('id_zavodu','=',21);
        

        return $sql->get();

    }


    public function startNumberChoiceEnduroCC($category_id)
    {
        return DB::table('ids_endurocc')
        ->select('ids')
        ->where('id_kategorie','=',$category_id)
        ->where('volne','=',1)
        ->orderBy('ids','ASC')->get();

    }

}
