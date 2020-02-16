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

Route::get('student', function () {
    return view('./student/student');
});

Route::get('plans', 'PlansController@show');
// Route::get('plans', function () {
//     return view('./plans/plans');
// });

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/plans/{id}', 'PlansController@show');

