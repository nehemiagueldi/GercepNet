<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserFacility extends Controller
{
    public function index()
    {
        return view('user/listing', [
            "title" => "Facility Listing",
            "data" => Facility::all()
        ]);
    }

    public function show($id)
    {
        return view('user/detail', [
            "title" => "Facility Detail",
            "facility" => Facility::find($id)
        ]);
    }
}
