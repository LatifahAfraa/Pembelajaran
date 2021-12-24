<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller
{
    public function index()
    {
        $data=['tugas'=>DB::table('tugas')->get(),];
        return view('layout.tugas.tugas',$data);
    }

    public function hapus($id)
    {
        DB::table('tugas')->where('id_tugas', $id)->delete();
        return redirect()->back()->with('pesan', 'Data Telah dihapus');
    }
}
