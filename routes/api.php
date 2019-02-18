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


Route::group(['middleware' => 'auth:api','prefix' => 'v1', 'namespace' => 'Api'], function(){
    Route::post('details', 'UserController@details');
    Route::get('user', 'UserController@index');
});




Route::group(['prefix' => 'v1', 'namespace' => 'Api'], function() {
    
    Route::post('login', 'UserController@login');
    Route::post('register', 'UserController@register');
    // Route::resource('user', 'UserController');
    Route::resource('products', 'ProductController');
    
});


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });