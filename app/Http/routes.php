<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');

    });
    Route::get('registerr', 'IndexController@form');
    Route::get('pdfTutorial', 'IndexController@pdfTutorial');
    Route::get('videoTutorial', 'IndexController@videoTutorial');
    Route::post('acceptFullPayment', 'IndexController@acceptFullPayment');
    Route::get('checkStudent', 'IndexController@checkStudent');
    Route::post('welcomeAndConfirm', 'IndexController@welcomeAndConfirm');
    Route::post('registerLink', 'IndexController@registerLink');
    Route::post('uploady', 'IndexController@uploady');
    Route::get('finalizePaymentCheck', 'IndexController@finalizePaymentCheck');
    Route::post('registerinformation', 'IndexController@registerinformation');
    Route::post('adminDeleteCourse', 'AdminController@adminDeleteCourse');
    Route::post('adminAddCourse', 'AdminController@adminAddCourse');
    Route::get('payment', 'IndexController@payment');
    Route::post('registerChecks', 'IndexController@registerChecks');
    Route::get('sendEmail', 'IndexController@sendEmail');
    Route::get('admin', [
        'middleware' => 'auth',
        'uses' => 'AdminController@index'
    ]);
    Route::post('admin1', [
        'middleware' => 'auth',
        'uses' => 'AdminController@admin1'
    ]);
    Route::get('admin2', [
        'middleware' => 'auth',
        'uses' => 'AdminController@admin2'
    ]);
    Route::get('admin3', [
        'middleware' => 'auth',
        'uses' => 'AdminController@admin3'
    ]);
    Route::post('admin4', [
        'middleware' => 'auth',
        'uses' => 'AdminController@admin4'
    ]);
    Route::post('admin5', [
        'middleware' => 'auth',
        'uses' => 'AdminController@admin5'
    ]);
    Route::get('admin6', [
        'middleware' => 'auth',
        'uses' => 'AdminController@admin6'
    ]);
    Route::post('admin7', [
        'middleware' => 'auth',
        'uses' => 'AdminController@admin7'
    ]);
    Route::get('stDetails', [
        'middleware' => 'auth',
        'uses' => 'AdminController@stDetails'
    ]);
    Route::get('stlist', [
        'middleware' => 'auth',
        'uses' => 'AdminController@stlist'
    ]);
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');
});
Route::auth();

