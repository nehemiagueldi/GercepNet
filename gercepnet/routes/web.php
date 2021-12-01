<?php

use App\Models\Facility;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserFacility;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\RegisterController;


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

// DASHBOARD

Route::get('/management/dashboard', function () {
    return view('management.dashboard', [
        "title" => "Dashboard Management"
    ]);
})->name('management')->middleware('management');

Route::get('/user/dashboard', function () {
    return view('user.dashboard', [
        "title" => "Dashboard User"
    ]);
})->name('user')->middleware('user');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard', [
        "title" => "Dashboard Admin"
    ]);
})->name('admin')->middleware('admin');





// USER
Route::get('/userlisting', [UserFacility::class, 'index']);

Route::get('/userdetail/{facility:namaFasilitas}', [UserFacility::class, 'show']);

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





// MANAGEMENT
Route::get('/facility', [FacilityController::class, 'index']);

Route::get('/facility/add', [FacilityController::class, 'create']);

Route::post('/facility/store', [FacilityController::class, 'store']);

Route::get('/facility/edit/{id}', [FacilityController::class, 'edit']);

Route::post('/facility/update', [FacilityController::class, 'update']);

Route::get('/facility/delete/{id}', [FacilityController::class, 'delete']);

Route::get('/management/request', function () {
    return view('management.requestM', [
        "title" => "Request Listing"
    ]);
});




// ADMIN
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




// LOGIN REGISTER
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');

Route::get('/dashboard/management', [DashboardController::class, 'index'])->middleware('auth');


Route::get('template', function () {
    return view('template');
});
