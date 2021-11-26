<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use UI\Draw\Text\Layout;

class KelasController extends Controller
{
    public function index()
    {
        $data=['kelas' =>DB::table('kelas')->get(),];
        return view('layout.kelas.kelas', $data);
    }

    public function create()
    {
        return view('layout.kelas.tambahkelas');
    }

    public function tambah(Request $request)
    {
        $data=[
            'nama_kelas'=>$request->nama_kelas
        ];
        DB::table('kelas')->insert($data);
        return redirect()->route('kelas')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data['kelas'] = DB::table('kelas')->where('id_kelas',$id)->first();
        return view('layout.kelas.editkelas', $data);
    }

    public function proses($id, Request $request)
    {
        $data=[
            'nama_kelas'=>$request->nama_kelas,
        ];
        DB::table('kelas')->where('id_kelas', $request->id)->update($data);
        return redirect()->route('kelas')->with('pesan', 'Data berhasil diedit');
    }

    public function hapus($id)
    {
        DB::table('kelas')->where('id_kelas', $id)->delete();
        return redirect()->back()->with('pesan', 'Data berhasil dihapus');
    }
}
