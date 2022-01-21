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

Route::get('/', function () {
    return view('Home-Page');
});


Route::get('/sito1', function () {
    return view('sito1',
     ['name'=>'Alessio']);
});


Route::get('/sito2', function () {
    return view('sito2');
});


Route::get('/sito3', function () {
    return view('sito3');
});

