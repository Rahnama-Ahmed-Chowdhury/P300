<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AarticleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DonarController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;


Route::get('/','App\Http\Controllers\AarticleController@home');

Route::get('/manuel',[PageController::class,'manuel']);



Route::get('/about-us',[PageController::class,'about']);
Route::get('/contact-us',[PageController::class,'contact']);


Route::resource('informations', DonarController::class);
Route::get('donor_list',[DonarController::class,'donor_list']);
Route::get('create',[DonarController::class,'create']);

