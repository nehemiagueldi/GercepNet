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

$appName = "Laravel 8";

Route::view('/', 'home', ['appName' => $appName]);

Route::get('/', function () {
    return view('home');
});

Route::get('profile', function () {

    $name = "Raphael";

    return view('profile', [
        'name' => $name
    ]);
});
