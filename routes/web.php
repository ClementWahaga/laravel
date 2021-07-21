<?php

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




Route::get('/', function () {return view('welcome');});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/reservation', function () {return view('reservation');});

Route::get('/medecinform', function () {return view('medecinform');});
Route::get('medecin', [medecinController::class, 'create'])->name('medecin.create');
Route::post('medecin', [medecinController::class, 'store'])->name('medecin.store');


Auth::routes();