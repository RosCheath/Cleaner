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
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home_layouts.home');
    }

    public function services()
    {
        return view('home_layouts.services');
    }

    public function contact()
    {
        return view('home_layouts.contact');
    }
    public function about()
    {
        return view('home_layouts.about');
    }
    public function blog()
    {
        return view('home_layouts.blog');
    }
    public function gallery()
    {
        return view('home_layouts.gallery');
    }
}
