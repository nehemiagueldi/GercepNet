<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use App\Http\Requests\StoreSewaRequest;
use App\Http\Requests\UpdateSewaRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facility = DB::table('facilities')->get();
        $sewa = Sewa::with('users')->get();
        
        // $sewa = DB::table('sewa')->get();
        return view('user/booking', [
            'facilities' => $facility,
            'sewas' => $sewa,
            "title" => "Booking"
        ]);
        // ->with('Sewa', $sewa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $sewa = DB::table('users')->where('id', $request->id)->get();
        // $sewa = Sewa::with('users')->where('id', $request->id)->get();
            // @dd(namaFasilitas);
            
            DB::table('sewas')->insert([
                'user_id' => auth()->user()->id,
                'username' => auth()->user()->username,
                'namaFasilitas' => $request->namaFasilitas,
                'jam_mulai' => $request->jam_mulai,
                'jam_selesai' => $request->jam_selesai,
                // 'status' => "Waiting"
            ]);
        return redirect('/booking');
    }

    public function request($id)
    {
        $sewa = Sewa::with('users')->where('user_id', $id)->get();
        return view('user/request', [
            'sewas' => $sewa,
            "title" => "Booking"
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSewaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSewaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function show(Sewa $sewa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function edit(Sewa $sewa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSewaRequest  $request
     * @param  \App\Models\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSewaRequest $request, Sewa $sewa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sewa $sewa)
    {
        //
    }
}
