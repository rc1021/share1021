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

Route::get('/', 'DayController@index');
Route::get('days', 'DayController@index');
Route::resource('day', 'DayController')->only(['index', 'show']);
Route::get('page/{slug}', 'PageController@show')->name('page.show');
// Route::resource('goals', 'MyGoalController')->only(['store']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
