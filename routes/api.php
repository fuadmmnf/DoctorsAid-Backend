<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::post('authenticate', 'AuthController@authenticateUser');


Route::apiResource('doctortypes', 'API\DoctorTypesController');
Route::apiResource('patients', 'API\PatientController');

Route::apiResource('doctors', 'API\DoctorController');
Route::get('doctortypes/{doctortype_id}/doctors/available', 'API\DoctorController@getSingleAvailableDoctorByType');


