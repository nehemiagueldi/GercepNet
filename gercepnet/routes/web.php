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

Route::get('homeuser', function () {
    return view('user/home', [
        "title" => "Facility Listing"
    ]);
});

Route::get('booking', function () {
    return view('user/booking', [
        "title" => "Booking"
    ]);
});

Route::get('request', function () {
    return view('user/request', [
        "title" => "Request Listing"
    ]);
});

Route::get('facility', function () {
    return view('management/facilityM', [
        "title" => "List Facility"
    ]);
});

Route::get('adminhome', function () {
    return view('admin/adminhome', [
        "title" => "Home - Admin"
    ]);
});

Route::get('userlist', function () {
    return view('admin/userlist', [
        "title" => "User List"
    ]);
});

Route::get('facilitylist', function () {
    return view('admin/facilitylist', [
        "title" => "Facility List"
    ]);
});

Route::get('requestlist', function () {
    return view('admin/requestlist', [
        "title" => "Request List"
    ]);
});
