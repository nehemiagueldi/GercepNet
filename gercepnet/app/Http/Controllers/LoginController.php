<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $role = Auth::user()->role; 
            switch ($role) {
                case 'admin':
                    return view('\admin\dashboard',['title' => 'Admin Dashboard']);
                    break;
                case 'management':
                    return view('\management\dashboard',['title' => 'Management Dashboard']);
                    break; 
                default:
                    return view('\user\dashboard',['title' => 'User Dashboard']);
                break;
            }
            // return redirect()->intended('/facility');
        }

        return back()->with('loginError', 'Login Failed !!');
    }

    // use AuthenticatesUsers;

    // public function redirectTo() {
    //     $role = Auth::user()->role; 
    //     switch ($role) {
    //         case 'admin':
    //             return '/dasboard/admin';
    //             break;
    //         case 'management':
    //             return '/dashboard/management';
    //             break; 
    //         default:
    //             return '/dashboard'; 
    //         break;
    //     }
    // }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }    
    // public function __construct()
    // {
    // $this->middleware('guest')->except('logout');
    // }

  }
