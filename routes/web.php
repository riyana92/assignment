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
Route::get('/first', function () {
    return view('assignment/first');
});
Route::get('/third', function () {
    return view('assignment/third');
});
Route::get('/fourth', function () {
    return view('assignment/fourth');
});
Route::get('/forth', function () {
    return view('assignment/forth');
});
Route::get('/fifth', function () {
    return view('assignment/fifth');
});
Route::get('/sixth', function () {
    return view('assignment/sixth');
});
Route::get('/eight-2', function () {
    return view('assignment/eight-2');
});
Route::get('/eight-1', function () {
    return view('assignment/eight-1');
});

Route::get('/nine', function () {
    return view('assignment/nine');
});
Route::get('/ten', function () {
    return view('assignment/ten');
});
Route::get('/eleven', function () {
    return view('assignment/eleven');
});
Route::get('/twelve', function () {
    return view('assignment/twelve');
});
Route::get('/thirteen', function () {
    return view('assignment/thirteen');
});
Route::get('/fourteen', function () {
    return view('assignment/fourteen');
});
Route::get('/fifteen', function () {
    return view('assignment/fifteen');
});