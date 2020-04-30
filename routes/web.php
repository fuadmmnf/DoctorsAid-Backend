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
Route::get('/', ['as'=>'index','uses'=>'IndexController@index']);

Auth::routes();
// Auth::routes(['register' => false]);

Route::get('/doctor/apply', ['as'=>'doctor.apply','uses'=>'IndexController@doctorApply']);

Route::get('/dashboard', ['as'=>'dashboard','uses'=>'DashboardController@index']);
