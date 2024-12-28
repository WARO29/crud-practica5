<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class curd_controller extends Controller
{
    public function index(){
        $datos = DB::select("SELECT * FROM producto"); //se crea la consulta aunque tambien se hubiese podido 
        //hacer con eloquent
        return view("welcome")->with("datos", $datos); 
        //se envia la variable datos para mostrar los datos arrojados en la consulta por este dato.
    }
}
