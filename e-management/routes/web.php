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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function(){
    Route::get('attendance/index', 'User\AttendanceController@add');
    Route::get('attendance/index', 'User\AttendanceController@index');
    Route::get('attendance/edit', 'User\AttendanceController@edit');
    Route::get('attendace/edit', 'User\AttendanceController@resister');
    Route::get('attendance/delete', 'User\AttendanceController@delete');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

