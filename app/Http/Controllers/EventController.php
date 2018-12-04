<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Carbon\Carbon;
use Alert;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_event=Event::all();
        return view('event.event', compact('list_event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("event/formtambah");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event();
        $event->nama_event= $request -> get('nama_event');
        $event->tempat_event= $request -> get('tempat_event');
        $event->tanggal_mulai= Carbon::parse($request->get('tanggal_mulai'))->format('y-m-d');
        $event->tanggal_selesai= Carbon::parse($request->get('tanggal_selesai'))->format('y-m-d');
        $event->fee_per_hari= $request -> get('fee_per_hari');
        $event->save();
        Alert::success('Tambah Data', 'Berhasil');
        return redirect()->to('/event');
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
        $event = Event::find($id);
        return view('event.formubah', compact('event'));
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
        $event = Event::find($id);
        $event->nama_event= $request -> get('nama_event');
        $event->tempat_event= $request -> get('tempat_event');
        $event->tanggal_mulai= Carbon::parse($request->get('tanggal_mulai'))->format('y-m-d');
        $event->tanggal_selesai=  Carbon::parse($request->get('tanggal_selesai'))->format('y-m-d');
        $event->fee_per_hari= $request -> get('fee_per_hari');
        $event->update();
        Alert::success('Ubah Data', 'Berhasil');
       return redirect()->to('/event');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event=Event::find($id);
        $event->destroy($id);
        Alert::success('Hapus Data', 'Berhasil');
        return redirect()->back();
    }
}
