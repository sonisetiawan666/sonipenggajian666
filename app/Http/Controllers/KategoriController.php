<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use Alert;

class KategoriController extends Controller
{
    public function index()
    {
        $list_kategori=Kategori::all();
        return view('kategori.kategori', compact('list_kategori'));
    }


    public function create()
    {
        return view("kategori/formtambah");
    }


    public function store(Request $request)
    {
        $kategori= new Kategori();
        $kategori->kategori = $request->get('kategori');
        $kategori->save();
        Alert::success('Tambah Data', 'Berhasil');
        return redirect()->to('/kategori');
    }


    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return view('kategori.formubah', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $kategori= new Kategori();
        $kategori=[
           'kategori' => $request->kategori,
       ];

       $kategori = Kategori::find($id)->update($kategori);
       Alert::success('Ubah Data', 'Berhasil');
       return redirect()->to('/kategori');
    }

    public function destroy($id)
    {
        $kategori=Kategori::find($id);
        $kategori->destroy($id);
        Alert::success('Hapus Data', 'Berhasil');
        return redirect()->back();
    }
}

