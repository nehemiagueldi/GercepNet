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

    public function requeststore(Request $request){

        DB::table('sewas')->where('id', $request->id)->update([
            'status' => $request->status
        ]);
        return redirect('/request');

    }

    use FacilityTrait;
}
