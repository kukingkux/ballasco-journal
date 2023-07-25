<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GroupsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('dashboard');
});

Route::get('/history', function() {
    return view('history');
});

Route::get('/agenda', function() {
    return view('agenda');
});

Route::get('/', function () {

})->middleware('auth');

Route::resource('/agenda', AgendaController::class);

Route::get('/history', 'App\Http\Controllers\AgendaController@history');
Route::get('/agenda', 'App\Http\Controllers\GroupsController@group');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');