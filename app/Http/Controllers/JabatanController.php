<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jabatan;
use Alert;

class JabatanController extends Controller
{

    public function index()
    {
        $list_jabatan=Jabatan::all();
        return view('jabatan.jabatan', compact('list_jabatan'));
    }


    public function create()
    {
        return view("jabatan/formtambah");
    }


    public function store(Request $request)
    {
        $jabatan= new Jabatan();
        $jabatan->jabatan = $request->get('jabatan');
        $jabatan->save();

        
        if($jabatan->save()){
            Alert::success('Tambah Data', 'Berhasil');
        }
        return redirect()->to('/jabatan');
    }


    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $jabatan = Jabatan::find($id);
        return view('jabatan.formubah', compact('jabatan'));
    }

    public function update(Request $request, $id)
    {
        $jabatan = Jabatan::find($id);
        $jabatan->jabatan = $request->get('jabatan');

        $jabatan->update();
       
       if($jabatan->update()){
        Alert::success('Ubah Data', 'Berhasil');
        }
       return redirect()->to('/jabatan');
    }

    public function destroy($id)
    {
        $jabatan=Jabatan::find($id);
        $jabatan->destroy($id);

        Alert::success('Hapus Data', 'Berhasil');
        return redirect()->back();
    }
}
