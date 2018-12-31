<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Karyawan;
use Alert;
use Spatie\Permission\Models\Role;
use Hash;
use DB;

class UserController extends Controller
{
    
    public function index()
    {
        $list_user = User::all();
        
        return view('user.user', compact('list_user'));
    }

    public function create()
    {
        $list_roles = Role::all();
        $list_karyawan = Karyawan::leftJoin('users','users.id_karyawan','=','karyawan.id')
        ->select('karyawan.*','users.id_karyawan')
        ->whereNull('users.id_karyawan')->get();
        return view("user/formtambah", compact('list_roles','list_karyawan'));
    }

    public function store(Request $request)
    {
        $user= new User();
        $user->name = $request->get('name');
        $user->username= $request->get('username');
        $user->password = Hash::make($request['password']);
        $user->id_karyawan = $request['karyawan'];
        $user->save();
        $user->assignRole($request->input('roles'));

        Alert::success('Tambah Data', 'Berhasil');
        return redirect()->to('/user');

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

    public function edit($id)
    {
        $user = User::with('roles','karyawan')->find($id);
        $list_roles = Role::all();
        return view('user.formubah', compact('user','list_roles'));
    }

    public function update(Request $request, $id)
    {
       
        $user= new User();
        
        $user->name = $request['name'];
        $user->username = $request['username'];
        $user->password = Hash::make($request['password']);

        if(empty($request['password'])){ 
            $user = array_except($user,array('password'));    
        }

        $user->update();
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($request->input('roles'));

       Alert::success('Ubah Data', 'Berhasil');
       return redirect()->to('/user');
    }

    public function destroy($id)
    {
        
        $user=User::find($id);
        $user->destroy($id);
        Alert::success('Hapus Data', 'Berhasil');
        return redirect()->back();
    }
}
