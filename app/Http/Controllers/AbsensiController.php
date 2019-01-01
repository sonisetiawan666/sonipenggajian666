<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;
use Carbon\Carbon;
use Auth;
use App\Absensi;
use App\DetAbsensi;

class AbsensiController extends Controller
{
    public function absensiindex()
    {
        return view('absensi.absensi');
    }

    public function absensidata()
    {
        $list_absensi = Absensi::all();

        return Datatables::of($list_absensi)
        ->addColumn('action', function($list_absensi){
                return '<a type="button" class="btn btn-flat btn-success" id="btn_deta"><i class="fa fa-calendar"></i></a>
                        <a type="button" class="btn btn-flat btn-primary" id="btn_deta"><i class="fa fa-eye"></i></a>';
        })->make(true);
    }

    public function storeabsenkar(Request $request)
    {
        $tgl_absen = Carbon::parse($request->get('absensi'));

        $absen = new Absensi();
        $absen->tanggal_absensi= $tgl_absen;
        $absen->status= "1";
        $absen->save();

        return response()->json([
            'success' => true,
            'message' => 'Generate Absen Berhasil'
        ]);
    }

    public function absensitanggal()
    {
        $tgl_skrng = Carbon::now()->format('y-m-d');
        $tgl_absensi = Absensi::where('tanggal_absensi','=', $tgl_skrng)
                                ->with(['DetAbsensi' =>function($query){
                                    $query->where('id_user','=', Auth::user()->id);
                                }])->get();
        return $tgl_absensi;
    }

    public function detabsensistore($id,$type,$idd)
    {

        if($type == "mulai"){
            $absensikar = new DetAbsensi();
            $absensikar->id_absensi = $id;
            $absensikar->id_user =  Auth::user()->id;
            $absensikar->jam_mulai = Carbon::now();
            $absensikar->save();
        }else{
            $absensikar = DetAbsensi::find($idd);
            $absensikar->jam_selesai = Carbon::now();
            $absensikar->update();
        }        

        return response()->json([
            'success' => true,
            'message' => 'Absensi Berhasil'
        ]);
    }
    
}
