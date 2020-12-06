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
Route::get('/', function () {return view('/welcome');});

//attendace用ルート
Route::group(['prefix' => 'user', 'middleware' => 'auth'], function(){
    Route::get('attendance/index', 'User\AttendanceController@index');
    Route::get('attendance/create', 'User\AttendanceController@add');
    Route::post('attendance/create', 'User\AttendanceController@create');
    Route::get('attendance/edit', 'User\AttendanceController@edit');
    Route::post('attendance/edit', 'User\AttendanceController@update');
    Route::get('attendance/delete', 'User\AttendanceController@delete');
});

//出退勤
Route::group(['prefix' => 'user', 'middleware' => 'auth'], function() {
    Route::post('/punchin', 'HistoryController@punchIn')->name('history/punchin');
    Route::post('/punchout', 'HistoryController@punchOut')->name('history/punchout');
});


Auth::routes();

//user認証後
Route::group(['middleware' => 'auth:user'], function() {
    Route::get('/home', 'HomeController@index')->name('home');
});

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


//management用ルート
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function(){
    Route::get('management.dashboard', 'Admin\ManagementController@add');
    Route::get('management/dashboard', 'Admin\ManagementController@dashboard');
    Route::get('management/information','Admin\ManagementController@information');
    Route::get('management/delete', 'Admin\ManagementController@delete');
    Route::get('management/resister', 'Admin\ManagementController@resister');
    Route::post('management/resister', 'Admin\ManagementController@update');
});




