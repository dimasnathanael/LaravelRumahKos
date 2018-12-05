<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Penghuni;

class PenghuniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPenghunis = Penghuni::all();

        return view('penghuni_list', compact('dataPenghunis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penghuni_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dt = Carbon::now('Asia/Jakarta');
        $dateTimeNow = $dt->toDateTimeString();

        $penghuniObj = new Penghuni();
        $penghuniObj->name = $request->name;
        $penghuniObj->email = $request->email;
        $penghuniObj->phone = $request->phone;
        $penghuniObj->address = $request->address;
        $penghuniObj->created_at = $dateTimeNow;
        $penghuniObj->updated_at = $dateTimeNow;
        $penghuniObj->save();

        return redirect()->route('penghuni.index')->with('alert-success', 'Berhasil Menambahkan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataPenghunis = Penghuni::where('id', $id)->get();

        return view('penghuni_detail', compact('dataPenghunis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataPenghunis = Penghuni::where('id', $id)->get();

        return view('penghuni_edit', compact('dataPenghunis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dt = Carbon::now('Asia/Jakarta');
        $dateTimeNow = $dt->toDateTimeString();

        $penghuniObj = Penghuni::where('id', $id)->first();
        $penghuniObj->name = $request->name;
        $penghuniObj->email = $request->email;
        $penghuniObj->phone = $request->phone;
        $penghuniObj->address = $request->address;
        $penghuniObj->updated_at = $dateTimeNow;
        $penghuniObj->save();

        return redirect()->route('penghuni.index')->with('alert-success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penghuniObj = Penghuni::where('id', $id)->first();
        $penghuniObj->delete();

        return redirect()->route('penghuni.index')->with('alert-success', 'Data Berhasil Dihapus!');
    }
}
