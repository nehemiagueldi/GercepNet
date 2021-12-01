<?php

use Illuminate\Support\Facades\Route;
use App\Models\Facility;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\UserFacility;

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

Route::get('/facility', [FacilityController::class, 'index']);

Route::get('/userlisting', [UserFacility::class, 'index']);

Route::get('userdetail/{slug}', function ($slug) {
    $facilities = [
        [
            "nama" => "Ruang Profesional",
            "slug" => "ruang-profesional",
            "kapasitas" => "5 Orang",
            "deskripsi" => "Ruangan BerAc",
        ],
        [
            "nama" => "Ruang Megah",
            "slug" => "ruang-megah",
            "kapasitas" => "10 Orang",
            "deskripsi" => "Ruangan BerAc",
        ]
    ];

    $facility_target = [];

    foreach ($facilities as $facility) {
        if ($facility["slug"] === $slug) {
            $facility_target = $facility;
        }
    }

    return view('user/detail', [
        "title" => "Facility Detail",
        "facility" => $facility_target
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

Route::get('/facility', [FacilityController::class, 'index']);

Route::get('/facility/add', [FacilityController::class, 'create']);

Route::post('/facility/store', [FacilityController::class, 'store']);

Route::get('/facility/edit/{id}', [FacilityController::class, 'edit']);

Route::post('/facility/update', [FacilityController::class, 'update']);



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
