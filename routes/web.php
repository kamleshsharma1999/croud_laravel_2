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
Route::get('/form','App\http\Controllers\TestController@form');
Route::post('/form','App\http\Controllers\TestController@addform');
Route::get('/listform','App\http\Controllers\TestController@listform');
Route::get('/Editeform/{id}/formedit','App\Http\Controllers\TestController@edits');
Route::post('/Editeform/{id}/formedit','App\Http\Controllers\TestController@editdata');
Route::get('/Deleted/{id}/formdelete','App\Http\Controllers\TestController@deleted');