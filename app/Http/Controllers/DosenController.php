<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DosenController extends Controller
{
    public function index()
    {
        $data=['dosen'=> DB::table('dosen')->get(),
    ];
    return view('layout.dosen.dosen', $data);
    }

    public function create()
    {
        return view('layout.dosen.tambahdosen');
    }

    public function tambah(Request $request)
    {

        if($request->hasFile('foto')){
            $nama_file=time().'.'.$request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->move('gambar', $nama_file);
        }else{
            $nama_file ='kosong';
        }
        $data=[
            'nama_dosen'=>$request->nama_dosen,
            'nidn'=>$request->nidn,
            'tempat_lahir_dosen'=>$request->tempat_lahir_dosen,
            'tanggal_lahir_dosen'=>$request->tanggal_lahir_dosen,
            'jk_dosen'=>$request->jk_dosen,
            'alamat_dosen'=>$request->alamat_dosen,
            'nohp_dosen'=>$request->nohp_dosen,
            'email_dosen'=>$request->email_dosen,
            'password_dosen'=> Hash::make($request->password_dosen),
            'foto_dosen'=>$nama_file
        ];
        DB::table('dosen')->insert($data);
        return redirect()->route('dosen')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data['dosen'] = DB::table('dosen')->where('id_dosen', $id)->first();
        return view('layout.dosen.editdosen', $data);
    }

    public function proses(Request $request, $id)
    {
        if($request->hasFile('foto')){
            $nama_file = time().'.'.$request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->move('gambar', $nama_file);
        }
        else{
            $foto_lama = DB::table('dosen')->where('id_dosen', $id)->first();
            $nama_file= $foto_lama->foto_dosen; // dari db
        }
        $data=[
            'nama_dosen'=>$request->nama_dosen,
            'nidn'=>$request->nidn,
            'tempat_lahir_dosen'=>$request->tempat_lahir_dosen,
            'tanggal_lahir_dosen'=>$request->tanggal_lahir_dosen,
            'jk_dosen'=>$request->jk_dosen,
            'alamat_dosen'=>$request->alamat_dosen,
            'nohp_dosen'=>$request->nohp_dosen,
            'email_dosen'=>$request->email_dosen,
            'password_dosen'=> Hash::make($request->password_dosen),
            'foto_dosen'=>$nama_file
        ];
        DB::table('dosen')->where('id_dosen', $id)->update($data);
        // return redirect()->back()->with();
        return redirect()->route('dosen')->with('pesan', 'Data Telah diperbaharui');
    }

    public function hapus($id)
    {
        DB::table('dosen')->where('id_dosen', $id)->delete();
        return redirect()->back();
    }
}
