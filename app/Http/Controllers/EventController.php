<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Carbon\Carbon;
use Alert;
use App\Kategori;
use Session;
use App\Pelanggan;

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
        $list_kategori = Kategori::all();
        $list_pelanggan = Pelanggan::all();
        return view("event/formtambah", compact('list_kategori','list_pelanggan'));
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
        $event->id_kategori= $request -> get('nm_kategori');
        $event->id_pelanggan= $request -> get('nm_pelanggan');
        $event->tempat_event= $request -> get('tempat_event');
        $event->tanggal_mulai= Carbon::parse($request->get('tanggal_mulai'))->format('y-m-d');
        $event->tanggal_selesai= Carbon::parse($request->get('tanggal_selesai'))->format('y-m-d');
        $event->fee_per_hari= $request -> get('fee_per_hari');
        $event->deskripsi = $request -> get('deskripsi');
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
        $eventdata = Event::find($id);
        return view('detailevent.detailevent', compact('eventdata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list_kategori = Kategori::all();
        $list_pelanggan = Pelanggan::all();
        $event = Event::find($id);
        return view('event.formubah', compact('event','list_kategori','list_pelanggan'));
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
        $event->id_kategori= $request -> get('nm_kategori');
        $event->id_pelanggan= $request -> get('nm_pelanggan');
        $event->tempat_event= $request -> get('tempat_event');
        $event->tanggal_mulai= Carbon::parse($request->get('tanggal_mulai'))->format('y-m-d');
        $event->tanggal_selesai=  Carbon::parse($request->get('tanggal_selesai'))->format('y-m-d');
        $event->fee_per_hari= $request -> get('fee_per_hari');
        $event->deskripsi = $request -> get('deskripsi');
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
