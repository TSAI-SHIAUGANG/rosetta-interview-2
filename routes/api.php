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

//web
Route::group(['namespace'=>'Api'], function(){

    // posts
    Route::group(['as'=>'posts.', 'prefix'=>'posts'], function(){
        Route::get('/', 'PostController@index')->name('index');
        Route::post('/', 'PostController@create')->name('create');

        Route::group(['prefix'=>'{post}'], function(){
            Route::get('/', 'PostController@show')->name('show');
            Route::patch('/', 'PostController@update')->name('update');
            Route::delete('/', 'PostController@delete')->name('delete');
        });
    });

});
