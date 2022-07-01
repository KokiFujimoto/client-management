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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'viewHome'])->name('viewHome');
Route::get('/home/store', [\App\Http\Controllers\HomeController::class, 'viewStore'])->name('viewStore');
Route::get('/home/detail/{id}', [App\Http\Controllers\HomeController::class, 'viewDetail'])->name('viewDetail');

Route::post('/home/store', [App\Http\Controllers\ClientController::class, 'store'])->name('store');
Route::patch('/home/detail/update/{id}', [App\Http\Controllers\ClientController::class, 'update'])->name('update');
Route::delete('/home/store/delete/{id}', [App\Http\Controllers\ClientController::class, 'delete'])->name('delete');