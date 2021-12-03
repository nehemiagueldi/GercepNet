<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Facility;
use App\Http\Traits\FacilityTrait;
use App\Http\Requests\StoreFacilityRequest;
use App\Http\Requests\UpdateFacilityRequest;

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

    public function delete($id)
    {
        DB::table('facilities')->where('id', $id)->delete();
        return redirect('/admin/facility');
    }
    

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