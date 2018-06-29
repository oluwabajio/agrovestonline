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

Route::group(['middleware' => 'auth'], function () {

    // All my routes that needs a logged in user
    
Route::get('/dashboard', 'Controller@db');
Route::get('/dashboard/users', 'Controller@registeredUser');
Route::get('/user', function () {
    return view('users.index');
});


});


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

//admin dashboard


Route::delete('/dashboard/users/{id}', ['uses' =>'Controller@destroy']);






Route::resource('/dashboard/basic', 'BasicController');

Route::resource('/dashboard/premium', 'PremiumController');

Route::resource('/dashboard/standard', 'StandardController');

Route::resource('/user/basic', 'BasicQController');

Route::resource('/user/premium', 'PremiumQController');

Route::resource('/user/standard', 'StandardQController');

Route::resource('/user/basic-question', 'UserBasicQuestionController');

Route::resource('/user/standard-question', 'UserStandardQuestionController');

Route::resource('/user/premium-question', 'UserPremiumQuestionController');


Route::resource('/dashboard/expo', 'ExpoUserController');

Route::post('/agric-business-expo/store', 'ExpoUserController@store');

Route::resource('/dashboard/newsletters', 'NewsletterController');

Route::post('/newsletters/store', 'NewsletterController@store');



Route::get('/about', function () {
    return view('about');
});

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay'); 
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');


// Route::delete('/delete/{id}', 'BasicController@destroy');



// Route::get('/users', function () {
//     return view('users');
// });

Route::get('/basic', function () {
    return view('basic');
});

Route::get('/standard', function () {
    return view('standard');
});
Route::get('/premium', function () {
    return view('premium');
});
Route::get('/testo', function () {
    return view('testo');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

