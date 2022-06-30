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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'viewHome'])->name('viewHome');
Route::get('/home/store', [\App\Http\Controllers\HomeController::class, 'viewStore'])->name('viewStore');
Route::get('/home/detail', [App\Http\Controllers\HomeController::class, 'viewDetail'])->name('viewDetail');

Route::post('/home/store', [App\Http\Controllers\ClientController::class, 'store'])->name('store');
