<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Facility;
use App\Http\Requests\StoreFacilityRequest;
use App\Http\Requests\UpdateFacilityRequest;
use App\Http\Requests\UserEdit;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard', [
            "title" => "Dashboard Admin"
        ]);
    }

    public function userlist()
    {
        $users = DB::table('users')->get();
        return view('admin/userlist', [
            'users' => $users,
            "title" => "User List"
        ]);
    }

    public function userD($id)
    {
        DB::delete('delete from users where id = ?',[$id]);
        return redirect('admin/userlist');
    }

    public function userEshow($id)
    {
        $users = DB::table('users')->where('id', $id)->get();
        return view('admin/uedit',[
            'users' => $users,
            "title" => "Edit User"
        ]);
    }

    public function userEstore($request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'image' => 'required|image|file|max:1024'
        ]);

        User::create($validatedData);

        return redirect('admin/userlist');
    }

    public function facilitylist()
    {
        $facilities = DB::table('facilities')->get();
        return view('admin/facilitylist', [
            'facilities' => $facilities,
            "title" => "Facility List"
        ]);
    }

    public function requestlist()
    {
        return view('admin/requestlist', [
            "title" => "Request List"
        ]);
    }
}