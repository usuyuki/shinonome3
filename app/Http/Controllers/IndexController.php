<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('main.right.index');
    }

    public function privacypolicy()
    {
        return view('main.right.privacypolicy');
    }

    public function explain()
    {
        return view('main.right.explain');
    }

    public function contact()
    {
        return view('main.right.contact');
    }

    public function release()
    {
        return view('main.right.release');
    }
}
