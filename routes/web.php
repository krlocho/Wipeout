<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReparacionController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TablaController;
use GuzzleHttp\Middleware;

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

//Start Routes CRUD
Route::resource('reparaciones', ReparacionController::class)->middleware('cors')->middleware('auth')->name('reparaciones','*');

Route::resource('clientes', ClienteController::class)->middleware('cors')->middleware('auth')->name('clientes','*');

Route::resource('tablas', TablaController::class)->middleware('cors')->middleware('auth')->name('tablas','*');

//End Routes CRUD


Route::get('/', function () {
    return view('welcome');

})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/* Route::get('/reparacion', function () {
    return view('reparacion.index');
});
Route::get('/reparacion/create',[ReparacionController::class,'create']); */

require __DIR__ . '/auth.php';



