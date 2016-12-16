<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// homepage
Route::get('/', 'HomepageController@map')->name('homepage');

// student detail
Route::get('/student/{student_uid}', 'StudentController@detail')->name('student_detail');

// logged-in student
Route::get('/home', 'HomeController@index')->name('student_home');
Route::get('/home/edit', 'HomeController@edit')->name('student_edit');

Auth::routes();


