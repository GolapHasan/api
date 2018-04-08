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

Route::group(['middleware' => ['api','cors']], function () {
    Route::post('auth/register', 'Auth\ApiRegisterController@create');
});


Route::group(['middleware' => ['inject-secret']], function () {
    Route::post('/v1/login', 'AuthController@issueToken');
});

Route::apiResource('/products', 'ProductController');

Route::group(['prefix'=>'products'], function() {
	Route::apiResource('/{product}/reviews', 'ReviewController');
});
