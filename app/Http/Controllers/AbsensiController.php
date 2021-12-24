<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsensiController extends Controller
{
    public function index()
    {
        $data=['absensi'=>DB::table('absensi')->get(),];
        return view('layout.absensi.absensi',$data);
    }

    public function hapus($id)
    {
        DB::table('absensi')->where('id_absen', $id)->delete();
        DB::table('isi_absen')->where('id_absen', $id)->delete();
        return redirect()->back()->with('pesan', 'Data Telah dihapus');
    }
}
