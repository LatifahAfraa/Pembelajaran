<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MateriController extends Controller
{
    public function index()
    {
        $data=[
            'materi'=>DB::table('materi')->get(),
        ];
        return view('layout.materi.materi', $data);
    }

    public function hapus($id)
    {
        DB::table('materi')->where("id_materi", $id)->delete();
        return redirect()->back()->with('pesan', 'Data Telah dihapus');
    }
}
