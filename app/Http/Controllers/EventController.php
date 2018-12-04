<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Carbon\Carbon;
use App\Kategori;

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
        return view("event/formtambah", compact('list_kategori'));
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
        $event->tempat_event= $request -> get('tempat_event');
        $event->tanggal_mulai= Carbon::parse($request->get('tanggal_mulai'))->format('y-m-d');
        $event->tanggal_selesai=  Carbon::parse($request->get('tanggal_selesai'))->format('y-m-d');
        $event->fee_per_hari= $request -> get('fee_per_hari');
        $event->deskripsi = $request -> get('deskripsi');
        $event->save();
        return redirect()->to('/event')->with(['success' => 'Event Berhasil Dibuat']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('detailevent.detailevent');
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
        $event = Event::find($id);
        return view('event.formubah', compact('event','list_kategori'));
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
        $event->tempat_event= $request -> get('tempat_event');
        $event->tanggal_mulai= Carbon::parse($request->get('tanggal_mulai'))->format('y-m-d');
        $event->tanggal_selesai=  Carbon::parse($request->get('tanggal_selesai'))->format('y-m-d');
        $event->fee_per_hari= $request -> get('fee_per_hari');
        $event->deskripsi = $request -> get('deskripsi');
        $event->update();
       return redirect()->to('/event')->with(['success' => 'Event Berhasil Diubah']);
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
        return redirect()->back()->with(['success' => 'Event Berhasil Dihapus']);
    }
}
