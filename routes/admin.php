<?php

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

Route::get('/admin', function () {
    return   "welcome admin";
});

Route::namespace("Front")->prefix("users")-> group( function(){
        Route::get("render","UserController@render");
        Route::get("update","UserController@update");  
        Route::get("delete","UserController@delete");
});

Route::group(['namespace'=>'Front','' ],function(){
    Route::get(    "test","UserController@render");
});

    