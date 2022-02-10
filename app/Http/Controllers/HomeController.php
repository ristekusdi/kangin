<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // dd(auth()->user()->roles());
        // echo auth()->user()->username;exit;
        return view('dashboard');
    }
    public function profile()
    {
        return view('profile');
    }
    public function form()
    {
        return view('form');
    }
    public function card()
    {
        return view('card');
    }
    public function chart()
    {
        return view('chart');
    }
    public function button()
    {
        return view('button');
    }
    public function modal()
    {
        return view('modal');
    }
    public function table()
    {
        return view('table');
    }
    public function login()
    {
        return view('page.login');
    }
    public function create_account()
    {
        return view('page.create_account');
    }
    public function forgot_password()
    {
        return view('page.forgot_password');
    }
    public function page404()
    {
        return view('page.404');
    }
    public function blank()
    {
        return view('page.blank');
    }
}
