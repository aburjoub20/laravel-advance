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
// put for modify one feture
// patch for modfify many fetures

    Route::group(['prefix'=>'/clients', 'as'=>'clients.'],function(){
    Route::get('/',[ClientsController::class,'index'])->name('index');
    Route::get('/create',[ClientsController::class,'create'])->name('create');
    Route::post('/store',[ClientsController::class,'store'])->name('store');
    Route::delete('/delete',[ClientsController::class,'delete'])->name('delete');
    Route::get('/edit/{id}',[ClientsController::class ,'edit'])->name('edit');
    Route::put('/update',[ClientsController::class ,'update'])->name('update');
});



