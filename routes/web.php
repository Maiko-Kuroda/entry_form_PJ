<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

    //ユーザー関連
    Route::get('/user/edit', 'Admin\UserController@edit')->name('userEdit');
    Route::post('/user/update', 'Admin\UserController@update');
    Route::get('/user','Admin\UserController@yourAccount');
    Route::get('/user/index','Admin\UserController@index')->middleware('auth');
    Route::get('/user/detail','Admin\UserController@showDetail');
    Route::get('/welcome','Admin\UserController@welcome');
    Route::get('/ok','Admin\UserController@judge');
    // Route::get('/ng','Admin\UserController@judge');
    Route::get('/contact','Admin\UserController@contact');

    //アンケート関連
    Route::get('/form', 'Admin\QuestionaryController@form')->name('form');
    Route::post('/confirm', 'Admin\QuestionaryController@confirm')->name('confirm');
    Route::post('/complete', 'Admin\QuestionaryController@complete')->name('complete');
    Route::get('/your_form', 'Admin\QuestionaryController@yourForm')->name('yourForm');
    Route::get('/Questionary/detail', 'Admin\QuestionaryController@showDetail');

    Route::get('/temperature/add', 'Admin\TemperatureController@add');
    Route::post('/temperature/create', 'Admin\TemperatureController@create');
    Route::get('/temperature/your_temperature', 'Admin\TemperatureController@showMyTemper');
    Route::get('/temperature/detail', 'Admin\TemperatureController@showDetail');
    // Route::get('/temperature/already', 'Admin\TemperatureController@create');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
