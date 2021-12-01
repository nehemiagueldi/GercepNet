<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Facility;
use App\Http\Requests\StoreFacilityRequest;
use App\Http\Requests\UpdateFacilityRequest;

class FacilityController extends Controller
{
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
        DB::table('facilities')->insert([
            'namaFasilitas' => $request->namaFasilitas,
            'descFasilitas' => $request->descFasilitas,
            'jenisFasilitas' => $request->jenisFasilitas,
        ]);
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
}
