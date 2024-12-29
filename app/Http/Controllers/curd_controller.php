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

    public function create(Request $req){
        /*return $req->txtnombre;*/
       try {
        $sql = DB::insert("INSERT INTO producto(id_producto,nombre,precio,cantidad) values (?,?,?,?) ", [
            $req->txtcodigo,
            $req->txtnombre,
            $req->txtprecio,
            $req->txtcantidad
        ]);
       } catch (\Throwable $th) {
        $sql = 0;
       }
        if($sql){
            return back()->with("Correcto", "Producto registrado correctamente.");
        }else{
            return back()->with("Error", "El producto no pudo ser registrado.");
        }

    }
}
