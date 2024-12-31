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

    public function update(Request $r){
        $estado = 0;
        try {
            $sql = DB::update("UPDATE producto set nombre=?, precio=?, cantidad=? where id_producto=? ", [
                $r->txtnombre,
                $r->txtprecio,
                $r->txtcantidad,
                $r->txtcodigo
                ]);

                if($sql == 0){
                    $estado = 1;
                }
            } catch (\Throwable $th) {
                $sql = 0; //hace que no salga el mensaje de error de mysql.
            }
            if($sql == 1){
                    return back()->with("Correcto", "Producto actualizado correctamente.");
            }else if(($sql == 0) && ($estado == 1)){
                    return back()->with("not-modificado", "El producto no tuvo modificaciones");
            }else{
                return back()->with("Error", "La informacion del producto no pudo ser actualizada por favor verifique.");
            }
    
    }

    public function delete($id){
        try {
            $sql = DB::delete("DELETE FROM producto WHERE id_producto=$id");
            } catch (\Throwable $th) {
            $sql = 0;
            }
            if($sql){
                return back()->with("Correcto", "Producto borrado correctamente.");
            }else{
                return back()->with("Error", "El producto no pudo ser borrado ");
            }
    
    }


}
