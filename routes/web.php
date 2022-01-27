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
    $grupa="W-1841";
    $specialitatea="Administrarea aplicatiilor web";
    
    return view('welcome', ['grupa' => $grupa, 'specialitatea'=>$specialitatea]);});

Route::get('/about', function () {return view('about');});

Route::get('/contacts', function () {return view('contacts');});
