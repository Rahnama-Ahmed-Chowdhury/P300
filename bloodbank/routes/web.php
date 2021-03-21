<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/','App\Http\Controllers\HomeController@home');
Route::resource('pages', HomeController::class);


Route::get('test', [HomeController::class, 'test']);

Route::get('home', [HomeController::class, 'home']);

Route::get('log_in', [HomeController::class, 'log_in']);

Route::get('registration', [HomeController::class, 'registration']);
Route::get('search', [HomeController::class, 'search']);
Route::get('donor_list', [HomeController::class, 'donor_list']);