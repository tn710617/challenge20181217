<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/paymentResponse', 'PaymentsController@paymentResponse');

Route::post('/register', 'ApiRegistrationController@register')->middleware('content_length');
Route::post('/login', 'ApiLoginController@login')->middleware('content_length');
Route::post('/profile', 'ApiSessionsController@show')->middleware('tokenValidator')->middleware('content_length');
Route::post('/findTheLittleMan', 'MutualAccomplishmentController@findTheLittleMan')->middleware('tokenValidator')->middleware('content_length');
Route::post('/profile', 'ApiSessionsController@show')->middleware('tokenValidator')->middleware('content_length');
