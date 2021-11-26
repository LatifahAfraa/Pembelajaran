<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboardcontroller extends Controller
{
    public function index()
    {
        return view('layout.index');
    }

    public function dashboard(){
        return view(('layout.dashboard'));
    }
}
