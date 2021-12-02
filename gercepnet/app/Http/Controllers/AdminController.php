<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Facility;
use App\Http\Requests\StoreFacilityRequest;
use App\Http\Requests\UpdateFacilityRequest;

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
        return redirect('userlist');
    }

    public function facilitylist()
    {
        return view('admin/facilitylist', [
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