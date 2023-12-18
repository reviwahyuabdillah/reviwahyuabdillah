<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller1 extends Controller
{
    public function tampil1()
    {
        return view('tampil1');
    }
    public function tampilkan(Request $request)
    {
        return view('tampil2',['data'=>$request->all()]);
    }
}