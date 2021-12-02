<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

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
    public function updateprofile(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|file|max:1024'
        ]);

        // $validatedData = $request->validate()

        User::updating($validatedData);

        // UNTUK ME REPLACE FOTO DI STORAGE PUBLIC
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('fotoprofile');
        }

        return back()->with('success', 'Profile Picture Updated !!!');
    }
}
