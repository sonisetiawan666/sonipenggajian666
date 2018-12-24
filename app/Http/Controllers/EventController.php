<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Yajra\DataTables\Datatables;
use Alert;
use Session;
use App\Event;
use App\Kategori;
use App\Karyawan;
use App\Pelanggan;
use App\User;
use App\Jabatan;
use App\Panitia;
use App\Absensievent;
use App\DetAbsenEvent;

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

    public function detailevent($id_event)
    {
        $eventdata = Event::find($id_event);
        $id_event=Session::put('id_event',$id_event);
        return view('detailevent.detailevent', compact('eventdata'));
    }

    
    public function userlist(Request $request)
    {
        $id_event = $request->session()->get('id_event');

        $userlist = User::with(['karyawan'=> function($data){
            $data->with('jabatan');
        }])->whereDoesntHave('panitia', function($query) use ($id_event){
            $query->where('id_event','=', $id_event);
        })->orderBy('created_at','DESC')
          ->get();

        return $userlist;
    }

    public function panitialist(Request $request)
    {
        $id_event = $request->session()->get('id_event');

        $panitialist = Panitia::where('id_event','=', $id_event)
                                ->orderBy('created_at','DESC')
                                ->get(); 

        return Datatables::of($panitialist)
        ->addColumn('panitia-nama', function($panitialist){
            return '<td>'.$panitialist->user->name.'</td>';
        })
        ->addColumn('panitia-jabatan', function($panitialist){
            return '<td>'.$panitialist->user->karyawan->jabatan->jabatan.'</td>';
        })
        ->addColumn('action', function($panitialist){
            return '<a onclick="deletePanitia(\''.$panitialist->id.'\')" class="btn btn-danger btn-flat">Delete</a>';
        })->rawColumns(['panitia-nama','panitia-jabatan', 'action'])->make(true);
    }

    public function storepanitia(Request $request)
    {
        $loop = $request->get('userp');
        foreach ($loop as $value){
            $panitia = new Panitia;
            $panitia->id_event = $request['id_event'];
            $panitia->id_user = $value;
            $panitia->save();
        }
        return response()->json([
            'success' => true,
            'message' => 'Panitia Berhasil Dibuat'
        ]);
    }

    public function destroypanitia($id)
    {
        Panitia::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Panitia Berhasil Dihapus'
        ]);
    }

    public function dateevent(Request $request)
    {
        $id_event = $request->session()->get('id_event');
        $dateevent= Event::where('id','=',$id_event)->first();
        return $dateevent;
    }



    public function dataabsensi(Request $request)
    {
        $id_event = $request->session()->get('id_event');
        $listabsensievent = AbsensiEvent::where('id_event','=', $id_event)
        ->orderBy('created_at','DESC')
        ->get(); 

        return Datatables::of($listabsensievent)
        ->addColumn('status', function($listabsensievent){
            if($listabsensievent->status == "0"){
                return '<td>Sudah Generate</td>';
            }else{
                return '<td>Belum Digenerate</td>';
            }
        })
        ->addColumn('action', function($listabsensievent){
            if($listabsensievent->status == "0"){
                return '<a type="button" class="btn btn-flat btn-success" id="btn_deta" disabled><i class="fa fa-calendar"></i></a>
                        <a onclick="viewdetAbsensiPanitia(\''.$listabsensievent->id.'\')" type="button" class="btn btn-flat btn-primary"><i class="fa fa-eye"></i></a>';
            }else{
                return '<a onclick="addFormPanitiaAb(\''.$listabsensievent->id.'\')" type="button" class="btn btn-flat btn-success" id="btn_deta" idab="'.$listabsensievent->id.'" ><i class="fa fa-calendar"></i></a>';
            }
        })->rawColumns(['status','action'])->make(true);
    }

    public function storeabsen(Request $request)
    {
        $id_event = $request->get('id_event');
        $tgl_absen = Carbon::parse($request->get('absen_event'));

        $absen = new AbsensiEvent();
        $absen->id_event = $id_event;
        $absen->tanggal_absensi= $tgl_absen;
        $absen->status= "1";
        $absen->keterangan = "";
        $absen->save();

        return response()->json([
            'success' => true,
            'message' => 'Generate Absen Berhasil'
        ]);
    }

    public function panitaabsen(Request $request)
    {
        $id_event = $request->session()->get('id_event');

        $panitiaabsen = Panitia::with(['user' => function($query){
            $query->with(['karyawan' => function($query2){
                $query2->with('jabatan');
            }]);
        }])->where('id_event','=', $id_event)
                        ->orderBy('created_at','DESC')
                        ->get();

        return $panitiaabsen;
    }

    public function storedetabsen(Request $request, $id)
    {
        $loop = $request->get('panitia');
        foreach ($loop as $value){
            $detabsensi = new DetAbsenEvent;
            $detabsensi->id_event = $request['id_event'];
            $detabsensi->id_panitia = $value;
            $detabsensi->id_absensi_event = $id;
            $detabsensi->save();
        }

        $changestatus = AbsensiEvent::where('id','=', $id)->update(['status' => '0']);

        return response()->json([
            'success' => true,
            'message' => 'Absensi Berhasil Dibuat'
        ]);
    }

    public function detpanitaabsen(Request $request,$id){
        $id_event = $request->session()->get('id_event');

        $detpanitiaabsen = Panitia::where('id_event','=', $id_event)
                        ->with(['DetAbsenEvent' => function($query) use ($id){
                            $query->where('id_absensi_event','=',$id);
                        }])
                        ->orderBy('created_at','DESC')
                        ->get();

        return Datatables::of($detpanitiaabsen)
        ->addColumn('nama_panitia', function($detpanitiaabsen){
            return '<td>'.$detpanitiaabsen->user->name.'</td>';
        })
        ->addColumn('jbt_panitia', function($detpanitiaabsen){
            return '<td>'.$detpanitiaabsen->user->karyawan->jabatan->jabatan.'</td>';
        })
        ->addColumn('sts_abs', function($detpanitiaabsen){
 
        })->rawColumns(['nama_panitia','jbt_panitia','sts_abs'])->make(true);
    }
}
