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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/member', 'MemberController@index');
Route::get('/member/create', 'MemberController@create');
Route::get('/member/store', 'MemberController@store');
Route::get('/member/{id}/edit', 'MemberController@edit');
Route::get('/member/{id}/update', 'MemberController@update');
Route::get('/member/{id}/delete', 'MemberController@destroy');

Route::get('/jadwal', 'JadwalController@index');