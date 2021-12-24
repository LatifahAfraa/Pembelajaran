<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelompokController extends Controller
{
    public function index()
    {
        $data=['kelompok'=>DB::table('nama_kelompok')->get(),];
        return view('layout.kelompok.kelompok',$data);
    }

    public function hapus($id)
    {
        DB::table('nama_kelompok')->where('id_kelompok', $id)->delete();
        return redirect()->back();
    }
}
