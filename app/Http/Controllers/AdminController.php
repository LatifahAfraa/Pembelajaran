<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function admin()
    {
        $data=['admin' => DB::table('admin')->get(),];
        return view('layout.admin.admin', $data);
    }


    public function hash_password(Request $request)
    {
        return Hash::make($request->password);
    }
    public function tambahadmin(Request $request)
    {
        if($request->hasFile('foto')){
            $nama_file=time().'.'.$request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->move('gambar', $nama_file);
        }else{
            $nama_file ='kosong';
        }
        $data=[
            'nama_admin'=>$request->nama_admin,
            'tempat_lahir_admin'=>$request->tempat_lahir_admin,
            'tanggal_lahir_admin'=>$request->tanggal_lahir_admin,
            'jk_admin'=>$request->jk_admin,
            'alamat_admin'=>$request->alamat_admin,
            'nohp_admin'=>$request->nohp_admin,
            'email_admin'=>$request->email_admin,
            'password_admin'=> Hash::make($request->password_admin),
            'foto_admin'=>$nama_file
        ];
        DB::table('admin')->insert($data);
        return redirect()->route('admin')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function createadmin()
    {
        return view('layout.admin.tambahadmin');
    }

    public function editadmin($id)
    {
        $data['admin'] = DB::table('admin')->where('id_admin', $id)->first();
        return view('layout.admin.editadmin', $data);
    }

    public function prosesedit(Request $request, $id)// Request name
    {
        if($request->hasFile('foto')){
            $nama_file = time().'.'.$request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->move('gambar', $nama_file);
        }
        else{
            $foto_lama = DB::table('admin')->where('id_admin', $id)->first();
            $nama_file= $foto_lama->foto_admin; // dari db
        }
        $data=[
            'nama_admin'=>$request->nama_admin,
            'tempat_lahir_admin'=>$request->tempat_lahir_admin,
            'tanggal_lahir_admin'=>$request->tanggal_lahir_admin,
            'jk_admin'=>$request->jk_admin,
            'alamat_admin'=>$request->alamat_admin,
            'nohp_admin'=>$request->nohp_admin,
            'email_admin'=>$request->email_admin,
            'foto_admin'=>$nama_file
        ];
        DB::table('admin')->where('id_admin', $id)->update($data);
        // return redirect()->back()->with();
        return redirect()->route('admin')->with('pesan', 'Data Telah diperbaharui');
    }

    public function hapusadmin($id)
    {
        DB::table('admin')->where('id_admin', $id)->delete();
        return redirect()->back();
    }
}
