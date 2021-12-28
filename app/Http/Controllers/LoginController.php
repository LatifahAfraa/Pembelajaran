<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('layout.login.login');
    }

    public function proses(Request $request)
    {
     $data=DB::table('admin')->where('nohp_admin', $request->nohp_admin)->first();

     if ($data != null) {
        if (Hash::check($request->password_admin, $data->password_admin)) {

            // dd($data->nama_admin);
            //buat session
            $request->session()->put('id_admin', $data->id_admin);
            $request->session()->put('nohp_admin', $data->nohp_admin);
            $request->session()->put('nama_admin', $data->nama_admin);

            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('error', 'Password Anda Salah');
        }
    }else{
        return redirect()->back()->with('error', 'No Hp Anda Salah');

    }

    }

    public function logout(Request $request)
    {
        $request->session()->forget('id_admin');
        $request->session()->forget('nohp_admin');
        $request->session()->forget('nama_admin');
        return redirect()->route('index');
    }

}
