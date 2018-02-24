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

//Route::get('/', function () {
//    return view('welcome');
//});

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

Route::group(['middleware' => 'web'], function () {

    // Authentication Routes...
    $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
    $this->post('login', 'Auth\LoginController@login');
    $this->post('logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('/', 'HomeController@index')->name('home');

    Route::post('/back_call', 'HomeController@addBackCall')->name('back_call');
    Route::post('/ask_question', 'HomeController@askQuestion')->name('ask_question');
    Route::post('/back_ring', 'HomeController@backRing')->name('back_ring');
    Route::post('/add_review', 'HomeController@addReview')->name('add_review');

    Route::get('/galleries', 'GalleryController@index')->name('galleries');
    Route::get('/reviews', 'ReviewController@index')->name('reviews');
});
