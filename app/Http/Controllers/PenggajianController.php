<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;
use Carbon\Carbon;
use App\Karyawan;
use App\User;
use App\Jabatan;
use App\Event;
use App\Panitia;
use App\DetAbsenEvent;
use App\Gaji;
use App\DetGaji;

class PenggajianController extends Controller
{
    public function indexpenggajian()
    {
        $listuser = User::all();
        return view('penggajian.penggajian', compact('listuser'));
    }

    public function datagaji(REquest $request)
    {
        $listgaji = Gaji::orderBy('created_at','DESC')
        ->get(); 

        return Datatables::of($listgaji)
        ->addColumn('nm_karyawan', function($listgaji){
            return '<td>'.$listgaji->user->karyawan->nama_karyawan.'</td>';
        })
        ->addColumn('action', function($listgaji){
                return '<a type="button" class="btn btn-flat btn-success" id="btn_deta" disabled><i class="fa fa-calendar"></i></a>
                        <a href="'.url('detail-gaji/'.$listgaji->id).'" type="button" class="btn btn-flat btn-primary"><i class="fa fa-eye"></i></a>';
        })->rawColumns(['nm_karyawan','action'])->make(true);
    }

    public function storegaji(Request $request)
    {
        $periode_awal = Carbon::parse($request->get('prd_awl'));
        $periode_akhir = Carbon::parse($request->get('prd_akhr'));

        $gaji = new Gaji();
        $gaji->id_user = $request->get('nm_karyawan');
        $gaji->periode_awal= $periode_awal;
        $gaji->periode_akhir= $periode_akhir;
        $gaji->total_gaji = "0.0";
        $gaji->save();

        return response()->json([
            'success' => true,
            'message' => 'Generate Gaji Berhasil'
        ]);
    }

    public function detailgaji($id)
    {
        $data_gaji = Gaji::where('id','=',$id)->get();

        $data_event = Event::whereHas('panitia', function($query){
            $query->where('id_user','=', 1);
         })->with(['DetAbsenEvent' => function($query2){ 
            $query2->whereHas('panitia', function($query3){
                $query3->where('id_user','=', 1);
            })->join('event', 'det_absensi_event.id_event', '=', 'event.id')->sum('fee_per_hari');
         }])->get();

        return view('penggajian.tambahgaji', compact('data_gaji','data_event'));
    }

    public function storedetgaji(Request $request)
    {
        $detgaji = new DetGaji();
        $detgaji->id_gaji = $request->get('id_gaji');
        $detgaji->daftar_gaji= $request->get('daftar_gaji');;
        $detgaji->deskripsi_gaji= $request->get('deskripsi_gaji');;
        $detgaji->jumlah = $request->get('jumlah');;
        $detgaji->save();

        return response()->json([
            'success' => true,
            'message' => 'Generate Detail Gaji Berhasil'
        ]);
    }

    public function detgaji($id)
    {
        $list_detgaji = DetGaji::where('id_gaji','=', $id)->get();
        return $list_detgaji;
    }

    public function totalgaji($id)
    {
        $total_gaji = DetGaji::where('id_gaji','=', $id)->sum('jumlah');
        return $total_gaji;
    }

    public function feegajidetail()
    {
        $data_event = Event::whereHas('panitia', function($query){
            $query->where('id_user','=', 1);
         })->with(['DetAbsenEvent' => function($query2){ 
            $query2->whereHas('panitia', function($query3){
                $query3->where('id_user','=', 1);
            })->join('event', 'det_absensi_event.id_event', '=', 'event.id');
         }])->get();
        
        return $data_event;
    }

}
