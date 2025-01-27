<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin\City;
use App\Models\Admin\Alamat;
use Illuminate\Http\Request;
use App\Models\Admin\Province;
use App\Http\Controllers\Controller;
use App\Models\Admin\Citie;
use Illuminate\Support\Facades\Validator;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class AlamatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $alamats = Alamat::with('user','province','city')->latest()->get();
        $users = User::where('role','costumer')->get();
        $provinces  = Province::pluck('title', 'province_id');
        // $city  = City::pluck('title', 'city_id');

        return view('admin.alamat.index',['active' => 'alamat'],compact('alamats','users','provinces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $couriers   = Courier::pluck('title', 'code');
        // $provinces  = Province::pluck('title', 'province_id');
        // $users = User::where('role','costumer')->get();
        // return view('admin.alamat.create', compact('provinces','users'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'user_id' => 'required|exists:users,id',
        'nama_lengkap' => 'required|string|max:255',
        'telpon' => 'required|string|max:15',
        'province_id' => 'required|exists:provinces,province_id',
        'city_id' => 'required|exists:cities,id',
        'alamat' => 'required|string',
        'label' => 'required|string|in:rumah,kantor',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Debug Data untuk memastikan semua sesuai
    $provinceName = Province::where('province_id', $request->province_id)->first()->title;
    $cityName = City::where('id', $request->city_id)->first()->title;

    // Simpan data
    $alamats = new Alamat();
    $alamats->user_id = $request->user_id;
    $alamats->nama_lengkap = $request->nama_lengkap;
    $alamats->telpon = $request->telpon;
    $alamats->province_id = $request->province_id;
    $alamats->city_id = $request->city_id;
    $alamats->alamat = $request->alamat;
    $alamats->label = $request->label;
    $alamats->save();

    return redirect()->back()->with('toast_success', 'Data Berhasil Ditambah');
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Alamat  $alamat
     * @return \Illuminate\Http\Response
     */
    public function show(Alamat $alamat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Alamat  $alamat
     * @return \Illuminate\Http\Response
     */
    public function edit(Alamat $alamat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Alamat  $alamat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alamat $alamat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Alamat  $alamat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alamats = Alamat::findOrFail($id);
        $alamats->delete();
        return redirect()
            ->route('alamat.index')->with('success', 'Data has been deleted');
    }
    public function getCities($id)
    {
        $city = City::where('province_id', $id)->pluck('title', 'id');
        return json_encode($city);
    }
}