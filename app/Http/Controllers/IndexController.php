<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Carbon\Carbon;

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
    public function developer()
    {
        return view('home');
    }

    public function home()
    {
        //日の出時刻用
        //那覇市役所
        $sunrise_naha = date_sunrise(time(), SUNFUNCS_RET_STRING, 26.212177, 127.679063, 90.5, 9);
        //皇居
        $sunrise_tokyo = date_sunrise(time(), SUNFUNCS_RET_STRING, 35.685180, 139.752805, 90.5, 9);
        //宇都宮市役所
        $sunrise_utunomiya = date_sunrise(time(), SUNFUNCS_RET_STRING, 36.555261, 139.882656, 90.5, 9);
        //札幌市役所
        $sunrise_sapporo = date_sunrise(time(), SUNFUNCS_RET_STRING, 43.062052, 141.354340, 90.5, 9);
        \Log::debug($sunrise_tokyo);
        $data = [
            'sunrise_naha' => $sunrise_naha,
            'sunrise_tokyo' => $sunrise_tokyo,
            'sunrise_sapporo' => $sunrise_sapporo,

        ];
        return view('main.left.home', $data);
    }
}
