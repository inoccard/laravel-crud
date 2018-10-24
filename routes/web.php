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

Route::resource('shares', "ShareController");

// Second Route method – Root URL with ID will match this method
Route::get('ID/{id}', function ($id) {
    echo 'ID: ' . $id;
});
// Third Route method – Root URL with or without name will match this method
Route::get('/user/{name?}', function ($name = 'Inocêncio Cardoso') {
    echo "Name: " . $name;
});
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sobre', 'SobreController@sobre')->name('sobre');

Route::get('sendbasicemail', 'MailController@basic_email');
Route::get('sendhtmlemail', 'MailController@html_email');
Route::get('sendattachmentemail', 'MailController@attachment_email');

Route::get('/form', 'FormController@index')->name('form');
