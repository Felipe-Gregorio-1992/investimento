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



Route::get('/',['uses' => 'Controller@homepage']);
Route::get('/cadastro',['uses' => 'Controller@cadastro']);

Route::get('/login',['uses' => 'Controller@telalogin']);
Route::post('/login',['as'=>'user.login','uses' => 'Controller@auth']);


