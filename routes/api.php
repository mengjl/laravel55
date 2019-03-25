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

Route::any('sign','SignController@delSign');
//学习类的路由组

Route::prefix('study')->group(function(){
        Route::any('get/bonus','Study\BonusController@getBonus');//这是获取红包的路由

});
