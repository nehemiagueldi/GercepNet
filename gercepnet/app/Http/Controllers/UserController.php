<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function profile()
    {
        return view('profile.profile', [
            'title' => 'Profile'
        ]);
    }
    
    public function dashboard()
    {
        return view('user.dashboard', [
            "title" => "Dashboard User"
        ]);
    }
    public function booking()
    {
        return view('user/booking', [
            "title" => "Booking"
        ]);
    }
    public function request()
    {
        return view('user/request', [
            "title" => "Request Listing"
        ]);
    }
}
