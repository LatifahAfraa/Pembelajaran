<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;
use Illuminate\Testing\Fluent\Concerns\Has;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // $request->authenticate();

        // $request->session()->regenerate();

        $validation = Validator::make($request->all(), [
            'email' => 'required|email|exists:admin,email_admin',
            'password' => 'required|string'
        ]);

        if($validation->fails()) {
            return back()->with("error", $validation->errors()->first());
        }

        $admin = DB::table('admin')->where("email_admin", $request->email)->orWhere('nohp_admin')->first();
        if($admin == null) {
            return back()->with("error", "User tidak ditemukan");
        }

        if(Hash::check($request->password, $admin->password_admin)) {
            Auth::login($admin);
            return redirect()->route('dashboard');
        } else {
            return back()->with("error", "Password salah");
        }
        // return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
