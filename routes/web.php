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

// root
Route::get('/', function () {
    return view('home');
});

// redirect to home (root)
Route::get('/home', function () {
    return redirect('/');
});


// question related routes
Route::get('/questions', 'App\Http\Controllers\QuestionController@index'); // display all
Route::get('/questions/create', 'App\Http\Controllers\QuestionController@create'); // create new
Route::post('/questions', 'App\Http\Controllers\QuestionController@store'); // store newly created in DB
Route::get('/questions/{id}', 'App\Http\Controllers\QuestionController@show'); // display id specific
Route::delete('/questions/{id}', 'App\Http\Controllers\QuestionController@destroy'); // delete

// answer related routes
Route::get('/answers/create/{id}', 'App\Http\Controllers\AnswerController@create'); // create new
Route::post('/questions/{id}', 'App\Http\Controllers\AnswerController@store'); // store newly created in DB
Route::post('/answers/upvote/{id}', 'App\Http\Controllers\AnswerController@upvote'); // upvote existing answer
Route::delete('/questions/deleteanswer/{id}', 'App\Http\Controllers\AnswerController@destroy'); // delete