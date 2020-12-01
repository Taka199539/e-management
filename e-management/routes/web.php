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

//user認証不要
Route::get('/', function () {
    return view('/home');
});

//attendaceコントローラー
Route::group(['prefix' => 'user', 'middleware' => 'auth'], function(){
    Route::get('attendance/index', 'User\AttendanceController@add');
    Route::get('attendance/index', 'User\AttendanceController@index');
    Route::get('attendance/edit', 'User\AttendanceController@edit');
    Route::get('attendace/edit', 'User\AttendanceController@update');
    Route::get('attendance/delete', 'User\AttendanceController@delete');
});


Auth::routes();

//user認証後
Route::get('/home', 'HomeController@index')->name('home');


//admin認証不要
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', function () { return redirect('/admin/home'); });
    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login');
});

//admin認証後
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    Route::post('logout', 'Admin\LoginController@logout')->name('admin.logout');
    Route::get('home', 'Admin\HomeController@index')->name('admin.home');
});

