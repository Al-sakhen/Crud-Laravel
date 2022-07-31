<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
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

Route::get('/', [HomeController::class , 'index']);

Route::get('/informations' , [InformationController::class , 'index'])->name('informations');
Route::get('/information/create' , [InformationController::class , 'create']);
Route::post('/information/store' , [InformationController::class , 'store']);

Route::get('/information/edit/{id}' , [InformationController::class , 'edit']);
Route::post('/information/update' , [InformationController::class , 'update']);

Route::delete('/information/delete/{id}' , [InformationController::class , 'destroy']);
