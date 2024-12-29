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
