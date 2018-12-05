<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Panitia;
use Alert;

class PanitiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_panitia=Panitia::all();
        return view('panitia.panitia', compact('list_panitia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('panitia/formtambah');
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $panitia = new panitia();
        $panitia->posisi = $request->get('posisi');
        $panitia->save();
        Alert::success('Tambah Data', 'Berhasil');
        return redirect()->to('/panitia');
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
        $panitia = Panitia::find($id);
        return view('panitia.formubah', compact('panitia'));
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
        $panitia= new Panitia();
        $panitia=[
           'posisi' => $request->posisi,
       ];

       $panitia = Panitia::find($id)->update($panitia);
       Alert::success('Ubah Data', 'Berhasil');
       return redirect()->to('/panitia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $panitia=Panitia::find($id);
        $panitia->destroy($id);
        Alert::success('Hapus Data', 'Berhasil');
        return redirect()->back();
    }
}
