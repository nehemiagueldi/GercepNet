<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;
use App\Http\Traits\FacilityTrait;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreFacilityRequest;
use App\Http\Requests\UpdateFacilityRequest;

class FacilityController extends Controller
{

    // Untuk function CRUD fasilitas

    public function index()
    {
        $facility = DB::table('facilities')->get();
        return view('management/facilityM', [
            'facilities' => $facility,
            "title" => "List Facility"
        ]);
    }

    public function create()
    {
        return view('management.addM', [
            "title" => "Add Facility"
        ]);
    }

    public function store(Request $request)
    {
        // return $request->file('image')->store('fotofasilitas');

        $validatedData = $request->validate([
            'nameFasilitas' => 'required|min:4|max:255',
            'descFasilitas' => 'required|min:4',
            'jenisFasilitas' => 'required|max:255',
            'fotoFasilitas' => 'required|image|file|max:1024'
            // harus ada file karena tipe filenya "file", max/min itu ukuran filenya satuannya KB, size itu batas ukuran gambar
        ]);
        if ($request->file('fotoFasilitas')) {
            $validatedData['fotoFasilitas'] = $request->file('fotoFasilitas')->store('fotofasilitas');
        }

        Facility::create($validatedData);
        // DB::table('facilities')->insert([
        //     'namaFasilitas' => $request->namaFasilitas,
        //     'descFasilitas' => $request->descFasilitas,
        //     'jenisFasilitas' => $request->jenisFasilitas,
        //     'fotoFasilitas' => $request->image
        // ]);
        return redirect('/facility');
    }

    public function edit($id)
    {
        $facility = DB::table('facilities')->where('id', $id)->get();
        return view('management.editM', [
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
        return redirect('/facility');
    }

    public function delete($id)
    {
        DB::table('facilities')->where('id', $id)->delete();
        return redirect('/facility');
    }



    public function dashboard()
    {
        return view('management.dashboard', [
            "title" => "Dashboard Management"
        ]);
    }

    public function requestlist()
    {
        $request = DB::table('sewas')->get();
        // $sewa = DB::table('sewa')->get();
        return view('management/requestM', [
            'sewas' => $request,
            "title" => "Booking"
        ]);
        // ->with('Sewa', $sewa);
    }

    public function requeststore(Request $request)
    {

        DB::table('sewas')->where('id', $request->id)->update([
            'status' => $request->status
        ]);
        return redirect('/request');
    }
}
