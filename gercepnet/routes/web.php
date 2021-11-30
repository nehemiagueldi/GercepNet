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

Route::view('/', 'welcome', ['appName' => $appName]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('template', function () {
    return view('template');
});

Route::get('/', fn () => view('user/facilitylisting'));

Route::get('detail', fn () => view('user/facilitydetail'));

Route::get('booking', fn () => view('user/booking'));

Route::get('request', fn () => view('user/request'));

Route::get('profile', function () {

    $name = "Raphael";

    return view('profile', [
        'name' => $name
    ]);
});
