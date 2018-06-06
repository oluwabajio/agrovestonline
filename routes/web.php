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

Route::get('/questions', function () {
    return view('questions');
});

Route::get('/ask-questions', function () {
    return view('askquestions');
});

Route::get('/designquestions', function () {
    return view('designquestions');
});

Route::get('/agric-business-expo', function () {
    return view('agricbusinessexpo');
});
Route::get('/admin', function () {
    return view('admindashboard');
});


Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/users', function () {
    return view('dashboard.tables');
});

Route::get('/dashboard/basic', function () {
    return view('dashboard.basic');
});


Route::get('/dashboard/standard', function () {
    return view('dashboard.standard');
});


Route::get('/dashboard/premium', function () {
    return view('dashboard.premium');
});























Route::get('/users', function () {
    return view('users');
});

Route::get('/basic', function () {
    return view('basic');
});

Route::get('/standard', function () {
    return view('standard');
});
Route::get('/premium', function () {
    return view('premium');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
