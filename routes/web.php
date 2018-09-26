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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/tech', 'HomeController@tech')->name('tech');
Route::get('/home/tech/metod', 'HomeController@metod')->name('metod');
Route::get('/home/tech/onemetod', 'HomeController@onemetod')->name('onemetod');

Route::prefix('admin')->group(function (){
    Route::get('/','AdminController@admin')->name('admin');
    Route::get('user','AdminController@user')->name('users');
    Route::get('adduser','AdminController@adduser')->name('adduser');
    Route::post('/createuser','UserController@createuser');
    Route::get('/edit/{id}','AdminController@edituser')->name('edituser');
    Route::get('/deleteuser/{id}','UserController@deleteUser')->name('deleteuser');
    Route::post('/updateuser/{id}','UserController@updateuser')->name('updateuser');

});

Route::prefix('user')->group(function (){
    Route::get('/','UserController@profile')->name('profile');
    Route::get('/edit/{id}','UserController@profileUserUpdate')->name('editprofile');
    Route::post('/update','UserController@profileUpdate')->name('updateprofile');
});
