<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jabatan;

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
        return redirect()->to('/jabatan')->with(['success' => 'Jabatan Berhasil Dibuat']);
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
        $jabatan= new Jabatan();
        $jabatan=[
           'jabatan' => $request->jabatan,
       ];

       $jabatan = Jabatan::find($id)->update($jabatan);
       return redirect()->to('/jabatan')->with(['success' => 'Jabatan Berhasil Diubah']);
    }

    public function destroy($id)
    {
        $dataid= $id;
        dd($dataid);
        $jabatan=Jabatan::find($id);
        dd($jabatan);
        $jabatan->destroy($id);
        return redirect()->back()->with(['success' => 'Jabatan Berhasil Dihapus']);
    }
}
