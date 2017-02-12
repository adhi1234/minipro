<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function details()
    {
        return view('user_details');
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function choose()
    {
        return view('choose_sim');
    }
    public function contact()
    {
        return view('contact');
    }
}
