<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DataPendudukController,

};

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::prefix('dashboard')->group(function(){
//     Route::get('statistik', function(){
//         return view('layouts.index');
//     })->name('statistik.index');
// });

Route::get('/', function(){
    return view('layouts.index');
})->name('home');

Route::get('data-penduduk', [DataPendudukController::class, 'index']);


Route::get('new-page', function(){
    return view('new-page');
})->name('new-page');