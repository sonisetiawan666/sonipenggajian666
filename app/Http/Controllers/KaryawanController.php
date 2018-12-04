<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use Carbon\Carbon;
use App\Jabatan;
use Alert;

class KaryawanController extends Controller
{

    public function index()
    {
        $list_karyawan=Karyawan::all();
        return view('karyawan.karyawan', compact('list_karyawan'));
    }


    public function create()
    {
        $list_jabatan=Jabatan::all();
        return view("karyawan/formtambah", compact('list_jabatan'));
    }


    public function store(Request $request)
    {
        $karyawan= new Karyawan();
        $karyawan->nama_karyawan = $request->get('nama_karyawan');
        $karyawan->id_jabatan = $request->get('nm_jabatan');
        $karyawan->tempat_lahir = $request->get('tempatlahir');
        $karyawan->tanggal_lahir = Carbon::parse($request->get('tgl_lahir'))->format('y-m-d');
        $karyawan->jenis_kelamin = $request->get('jen_kel');
        $karyawan->alamat = $request->get('alamat');
        $karyawan->no_telepon = $request->get('no_telp');
        $karyawan->gaji = $request->get('gaji');
        $karyawan->no_rekening = $request->get('no_rek');

        if($request->hasFile('photo')){
            $karyawan->photo = '/upload/photo/'.str_slug($karyawan['nama_karyawan'].'-').'.'.$request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('/upload/photo/'), $karyawan['photo']);
        }

        $karyawan->save();

        if($karyawan->save()){
            Alert::success('Tambah Data', 'Berhasil');
        }

        return redirect()->to('/karyawan');
    }


    public function show($id)
    {
        
    }

    public function edit($id)
    {
       $list_jabatan = Jabatan::all();
       $karyawan = Karyawan::find($id);
        return view('karyawan.formubah', compact('karyawan','list_jabatan'));
    }

    public function update(Request $request, $id)
    {

        $karyawan = Karyawan::find($id);
        $karyawan->nama_karyawan = $request->get('nama_karyawan');
        $karyawan->id_jabatan = $request->get('nm_jabatan');
        $karyawan->tempat_lahir = $request->get('tempatlahir');
        $karyawan->tanggal_lahir = Carbon::parse($request->get('tgl_lahir'))->format('y-m-d');
        $karyawan->jenis_kelamin = $request->get('jen_kel');
        $karyawan->alamat = $request->get('alamat');
        $karyawan->no_telepon = $request->get('no_telp');
        $karyawan->gaji = $request->get('gaji');
        $karyawan->no_rekening = $request->get('no_rek');     

        if($request->hasFile('photo')){
            $karyawan->photo = '/upload/photo/'.str_slug($karyawan['nama_karyawan'].'-').'.'.$request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('/upload/photo/'), $karyawan['photo']);
        }

        $karyawan->update();

        if($karyawan->update()){
            Alert::success('Ubah Data', 'Berhasil');
        }
       
       return redirect()->to('/karyawan');
    }

    public function destroy($id)
    {
        $karyawan=Karyawan::find($id);
        $karyawan->destroy($id);
     
        Alert::success('Hapus Data', 'Berhasil');
        return redirect()->back();
    }
}

