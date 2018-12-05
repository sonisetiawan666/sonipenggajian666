<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;
use Alert;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_pelanggan = Pelanggan::all();
        return view('pelanggan.pelanggan', compact('list_pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan/formtambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelanggan = new Pelanggan();
        $pelanggan->nama_pelanggan = $request->get('nama_pelanggan');
        $pelanggan->perusahaan = $request->get('perusahaan');
        $pelanggan->alamat = $request->get('alamat');
        $pelanggan->no_telepon = $request->get('no_telepon');
        $pelanggan->email = $request->get('email');
        $pelanggan->save();
        Alert::success('Tambah Data', 'Berhasil');
        return redirect()->to('/pelanggan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelanggan = Pelanggan::find($id);
        return view('pelanggan.formubah', compact('pelanggan'));
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
        $pelanggan= new Pelanggan();
        $pelanggan->nama_pelanggan = $request->get('nama_pelanggan');
        $pelanggan->perusahaan = $request->get('perusahaan');
        $pelanggan->alamat = $request->get('alamat');
        $pelanggan->no_telepon = $request->get('no_telepon');
        $pelanggan->email = $request->get('email');
        $pelanggan->update();
        Alert::success('Ubah Data', 'Berhasil');
        
        return redirect()->to('/pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggan=Pelanggan::find($id);
        $pelanggan->destroy($id);
     
        Alert::success('Hapus Data', 'Berhasil');
        return redirect()->back();
    }
}
