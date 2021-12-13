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
     $data=DB::table('admin')->where('nohp_admin', $request->nohp_admin)->get();

     if (count($data) == 1) {
        if (Hash::check($request->password_admin, $data[0]->password_admin)) {

            //buat session
            $request->session()->put('id_admin', $data[0]->id_admin);
            $request->session()->put('nohp_admin', $data[0]->nohp_admin);

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
        return redirect()->route('index');
    }

}
