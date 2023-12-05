<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return "<h1>Olá Mundo</h1>";
});

Route::get('/contact', function () {
    return "<h1>Olá Mundo/Contato:D</h1>";
});


Route::get('/lesson', function () {
    return "<h1>Olá Mundo/Contato:D</h1>";
});

Route::get('/lesson-101', function () {
    return "<h1>Olá Mundo/Contato:D</h1>";
});