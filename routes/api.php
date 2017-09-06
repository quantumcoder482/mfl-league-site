<?php


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

Route::middleware('api')->get('/league', 'APIController@league');
Route::middleware('api')->get('/standings', 'APIController@standings');
Route::middleware('api')->get('/scores', 'APIController@scores');
