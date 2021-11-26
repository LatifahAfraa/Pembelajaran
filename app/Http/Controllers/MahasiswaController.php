<?php

namespace App\Http\Controllers;

use Facade\Ignition\Support\Packagist\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data['mahasiswa']= DB::table('mahasiswa')->select('mahasiswa.*', 'kelas.nama_kelas')->join('kelas', 'kelas.id_kelas', '=', 'mahasiswa.id_kelas')->get();
        return view('layout.mahasiswa.mahasiswa', $data);
    }

    public function create()
    {
        $data['kelas']=DB::table('kelas')->get();
        return view('layout.mahasiswa.tambahmahasiswa', $data);
    }

    public function tambah(Request $request)
    {
        // return $request->all();
        if($request->hasFile('foto')){
            $nama_file=time().'.'.$request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->move('gambar', $nama_file);
        }else{
            $nama_file ='kosong';
        }
        $data=[
            'nama_mhs'=>$request->nama_mhs,
            'npm'=>$request->npm,
            'tempat_lahir_mhs'=>$request->tempat_lahir_mhs,
            'tanggal_lahir_mhs'=>$request->tanggal_lahir_mhs,
            'jk_mhs'=>$request->jk_mhs,
            'alamat_mhs'=>$request->alamat_mhs,
            'nohp_mhs'=>$request->nohp_mhs,
            'id_kelas'=>$request->id_kelas,
            'email_mhs'=>$request->email_mhs,
            'password_mhs'=> Hash::make($request->password_mhs),
            'foto_mhs'=>$nama_file
        ];
        DB::table('mahasiswa')->insert($data);
        return redirect()->route('mahasiswa')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data['kelas']=DB::table('kelas')->get();
        $data['mahasiswa']=DB::table('mahasiswa')->where('id_mhs', $id)->first();
        return view('layout.mahasiswa.editmahasiswa', $data);
    }

    public function proses(Request $request, $id)
    {
        if($request->hasFile('foto')){
            $nama_file = time().'.'.$request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->move('gambar', $nama_file);
        }
        else{
            $foto_lama = DB::table('mahasiswa')->where('id_mhs', $id)->first();
            $nama_file= $foto_lama->foto_mhs; // dari db
        }
        $data=[
            'nama_mhs'=>$request->nama_mhs,
            'npm'=>$request->npm,
            'tempat_lahir_mhs'=>$request->tempat_lahir_mhs,
            'tanggal_lahir_mhs'=>$request->tanggal_lahir_mhs,
            'jk_mhs'=>$request->jk_mhs,
            'alamat_mhs'=>$request->alamat_mhs,
            'nohp_mhs'=>$request->nohp_mhs,
            'id_kelas'=>$request->id_kelas,
            'email_mhs'=>$request->email_mhs,
            // 'password_mhs'=> Hash::make($request->password_mhs),
            'foto_mhs'=>$nama_file
        ];
        DB::table('mahasiswa')->where('id_mhs', $id)->update($data);
        // return redirect()->back()->with();
        return redirect()->route('mahasiswa')->with('pesan', 'Data Telah diperbaharui');
    }

    public function hapus($id)
    {
        DB::table('mahasiswa')->where('id_mhs', $id)->delete();
        return redirect()->back();
    }


}
