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
Route::get('/test', function () {
    $x=5;
    $y=2;
    $array=['test1','test2'];

    dd($x,$y,$array, $x+$y);
});
Route::get('/', function () {
    return view('welcome');
});
