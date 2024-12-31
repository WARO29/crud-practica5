<?php

use App\Http\Controllers\curd_controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [curd_controller::class, "index"])->name("crud.index");

//Ruta para añadir un nuevo producto.
Route::post('/registrar-producto', [curd_controller::class, "create"])->name("crud.create");

//Ruta para modificar un producto.
Route::post('/modificar-producto', [curd_controller::class, "update"])->name("crud.update");

//Ruta para eliminar un producto.
Route::get('/eliminar-producto-{id}', [curd_controller::class, "delete"])->name("crud.delete"); 
//cuando envie una variable va hacer de tipo get.