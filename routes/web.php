<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[dashboardController::class,'index'])->name('full.mark');
Route::get('/more',[dashboardController::class,'more'])->name('more.servise');
Route::get('/search',[dashboardController::class,'search'])->name('search');

Route::prefix('/user')->middleware('auth')->group(function(){
        Route::get('/addservices',[ServicesController::class,'create'])->name('services.create');
    Route::post('/addservices',[ServicesController::class,'store'])->name('services.store');
    Route::post('/addservices/extra',[ServicesController::class,'extra'])->name('services.extra');
Route::post('/create_order',[ServicesController::class,'create_order'])->name('create.order');

});

Route::get('/user/showservices/{id}',[ServicesController::class,'show'])->name('services.show');
