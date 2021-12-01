<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserFacility extends Controller
{
    public function index()
    {
        return view('user/listing', [
            "title" => "Facility Listing",
            "data" => User::all()
        ]);
    }
}
