<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    
    public function index()
    {
       $list_user=User::all();
        return view('user.user', compact('list_user'));
    }

    public function create()
    {
        return view("user/formtambah");
    }

    public function store(Request $request)
    {
        $user= new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->username= $request->get('username');
        $user->password = $request->get('password');
        $user->save();
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
        $user = User::find($id);
        return view('user.formubah', compact('user'));
    }

    public function update(Request $request, $id)
    {
       
        $user= new User();
        $user=[
           'user' => $request->user,
       ];

       $user = User::find($id)->update($user);
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
