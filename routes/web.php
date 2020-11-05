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

Route::get("/","PostController@index");
Route::get('/about', function () {
    return view('about');
});


// post

Route::get("/posts","PostController@index");
Route::get("/posts/create","PostController@create");
Route::post("/posts","PostController@store");
Route::get("/posts/{post}","PostController@show")->name('post');
Route::get("/posts/{post}/edit","PostController@edit");
Route::put("/posts/{post}","PostController@update");
Route::delete("/posts/{post}","PostController@destroy");

// admin pannel

Auth::routes();

Route::get('/my-admin', 'AdminController@index')->name('home');
