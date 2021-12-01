<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        // return $request->all();
        // return $request->file('image')->store('fotoprofile');
        // ddd($request);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'image' => 'required|image|file|max:1024'
            // harus ada file karena tipe filenya "file", max/min itu ukuran filenya satuannya KB, size itu batas ukuran gambar
        ]);

        // OPSI ENKRIPSI
        // OPSI 1
        // $validatedData['password'] = bcrypt($validatedData['password']);
        // OPSI 2
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // OPSI ALERT
        // OPSI 1
        // $request->session()->flash('success', 'Registration Successfull! Please Login');
        // OPSI 2
        return redirect('/login')->with('success', 'Registration Successfull !! Please Login');
    }
}
