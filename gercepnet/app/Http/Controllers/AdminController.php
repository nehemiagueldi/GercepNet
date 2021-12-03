<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Facility;
use App\Http\Traits\FacilityTrait;
use App\Http\Requests\StoreFacilityRequest;
use App\Http\Requests\UpdateFacilityRequest;
use App\Http\Requests\UserEdit;


class AdminController extends Controller
{

    // UNTUK CRUD FASILITAS
    public function index()
    {
        $facility = DB::table('facilities')->get();
        return view('admin.facilitylist', [
            'facilities' => $facility,
            "title" => "List Facility"
        ]);
    }

    public function create()
    {
        return view('admin.addfasilitas', [
            "title" => "Add Facility"
        ]);
    }

    public function store(Request $request)
    {
        DB::table('facilities')->insert([
            'namaFasilitas' => $request->namaFasilitas,
            'descFasilitas' => $request->descFasilitas,
            'jenisFasilitas' => $request->jenisFasilitas,
        ]);
        return redirect('/admin/facility');
    }

    public function edit($id)
    {
        $facility = DB::table('facilities')->where('id', $id)->get();
        return view('admin.editfasilitas', [
            'facilities' => $facility,
            "title" => "Edit Facility"
        ]);
    }

    public function update(Request $request)
    {
        DB::table('facilities')->where('id', $request->id)->update([
            'namaFasilitas' => $request->namaFasilitas,
            'descFasilitas' => $request->descFasilitas,
            'jenisFasilitas' => $request->jenisFasilitas,
        ]);
        return redirect('/admin/facility');
    }

    public function delete($id)
    {
        DB::table('facilities')->where('id', $id)->delete();
        return redirect('/admin/facility');
    }

    // dashboard
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

    // public function facilitylist()
    public function userD($id)
    {
        DB::delete('delete from users where id = ?',[$id]);
        return redirect('admin/userlist');
    }

    public function requestlist()
    {
        return view('admin/requestlist', [
            "title" => "Request List"
        ]);
    }
}