<?php

use Illuminate\Support\Facades\Route;

/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */

Route::get('/', function () {
    return view('welcome');
// return '111';
});

//Route::get('/book', function () {
//    // return view('welcome');
//    return '111book';
//});

Route::get('/author', 'App\Http\Controllers\AuthorIdController@index')->name('author.index');
Route::get('/author/create', 'App\Http\Controllers\AuthorIdController@create')->name('author.create');
Route::post('/author', 'App\Http\Controllers\AuthorIdController@store')->name('author.store');
Route::get('/author/{post}', 'App\Http\Controllers\AuthorIdController@show')->name('author.show');
Route::get('/author/{post}/edit', 'App\Http\Controllers\AuthorIdController@edit')->name('author.edit');
Route::patch('/author/{post}', 'App\Http\Controllers\AuthorIdController@update')->name('author.update');
Route::delete('/author/{post}', 'App\Http\Controllers\AuthorIdController@destroy')->name('author.delete');

Route::get('/author/update', 'App\Http\Controllers\AuthorIdController@update');
Route::get('/author/delete', 'App\Http\Controllers\AuthorIdController@delete');


Route::get('/book', 'App\Http\Controllers\BookIdController@index')->name('book.index');
Route::get('/book/create', 'App\Http\Controllers\BookIdController@create')->name('book.create');
Route::post('/book', 'App\Http\Controllers\BookIdController@store')->name('book.store');
Route::get('/book/{post}', 'App\Http\Controllers\BookIdController@show')->name('book.show');
Route::get('/book/{post}/edit', 'App\Http\Controllers\BookIdController@edit')->name('book.edit');
Route::patch('/book/{post}', 'App\Http\Controllers\BookIdController@update')->name('book.update');
Route::delete('/book/{post}', 'App\Http\Controllers\BookIdController@destroy')->name('book.delete');

Route::get('/book/update', 'App\Http\Controllers\BookIdController@update');
Route::get('/book/delete', 'App\Http\Controllers\BookIdController@delete');


Route::get('/adm', 'App\Http\Controllers\admController@index')->name('adm.index');
