<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        dd(auth()->user());
        // echo auth()->user()->username;exit;
        return view('dashboard');
    }
}
