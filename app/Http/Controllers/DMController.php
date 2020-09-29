<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DMController extends Controller
{
    public function directmessage()
    {
        return view('main.left.directmessage');
    }
}
