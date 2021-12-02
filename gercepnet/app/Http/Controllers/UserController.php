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
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'image' => 'required|image|file|max:1024',
            'password' => 'required|min:5|max:255',
            'captcha' => 'required|captcha'
        ]);

        // $validatedData = $request->validate()

        // UNTUK ME REPLACE FOTO DI STORAGE PUBLIC
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('fotoprofile');
        }

        User::create($validatedData);

        return back()->with('success', 'Profile Picture Updated !!!');
    }
}
