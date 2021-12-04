<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Traits\FacilityTrait;
use App\Http\Requests\StoreFacilityRequest;
use App\Http\Requests\UpdateFacilityRequest;
use App\Http\Requests\UserEdit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


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
        return view('admin/uedit', [
            'users' => $users,
            "title" => "Edit User"
        ]);
    }

    public function userEstore(Request $request)
    {
        // @dd($request);
        // $validatedData = $request->validate([
        //     'name' => 'required|max:255',
        //     'username' => ['required'],
        //     'email' => 'required|email:dns|unique:users',
        //     'image' => 'required|image|file|max:1024'
        // ]);

        // User::create($validatedData);
        DB::table('users')->where('id', $request->id)->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
        ]);

        return redirect('admin/userlist');
    }

    // public function facilitylist()
    public function userD($id)
    {
        DB::delete('delete from users where id = ?', [$id]);
        return redirect('admin/userlist');
    }

    public function requestlist()
    {
        $request = DB::table('sewas')->get();
        // $sewa = DB::table('sewa')->get();
        return view('admin/requestlist', [
            'sewas' => $request,
            "title" => "Booking"
        ]);
        // ->with('Sewa', $sewa);
    }
}
