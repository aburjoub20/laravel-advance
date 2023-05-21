<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;

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

Route::get('/clients',[ClientsController::class,'index'])->name('Client.index');
Route::get('/clients/create',[ClientsController::class,'create'])->name('Client.create');
Route::post('/clients/store',[ClientsController::class,'store'])->name('Client.store');


