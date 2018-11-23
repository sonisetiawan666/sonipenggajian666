<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Panitia;

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
        return redirect()->to('/panitia')->with(['success' => 'Panitia Berhasil Dibuat']);
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
       return redirect()->to('/panitia')->with(['success' => 'Panitia Berhasil Diubah']);
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
        return redirect()->back()->with(['success' => 'Panitia Berhasil Dihapus']);
    }
}
