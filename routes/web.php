<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReparacionController; //Importar el controlador
use App\Http\Controllers\ClienteController; //Importar el controlador
use App\Http\Controllers\TablaController; //Importar el controlador




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

Route::resource('reparaciones', ReparacionController::class);

//Route::get('/reparacion', function () {
  //  return view('reparacion.index');
//});
//Route::get('/reparacion/create',[ReparacionController::class,'create']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';



