<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Greet;
use Illuminate\Support\Facades\Auth;

class GreetController extends Controller
{
    public function showGreetPage(){
        $greets = Greet::latest()->get();
        return view('main.greet',['greets'=>$greets,]);
    }

    public function postGreet(Request $request){
        $request->validate([
            'greet' => 'required|max:140',
        ]);
        
        Greet::create([
            'user_id'=>Auth::user()->id,
            'name'=>Auth::user()->name,
            'greet'=>$request->greet,
        ]);
        return back();
    }
}
