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

Route::get('/', function () 
{
    return view('welcome');
});

Route::get('HDTutoMail/{id}', function ($id) 
{
    $user = \App\User::find($id);

    Mail::to('maximebarber@gmail.com')->send(new \App\Mail\HDTutoMail($user));

    return redirect('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
