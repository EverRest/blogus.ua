<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
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
        return view('pages.index');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
