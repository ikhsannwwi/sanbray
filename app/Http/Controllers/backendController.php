<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\header;


class backendController extends Controller
{
    public function admin(){

        return view('backend.dashboard');
    }

    public function head(){
        $data = header::all();

        return view('backend.head', compact('data'));
    }
}
