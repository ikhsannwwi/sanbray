<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\header;
use App\Models\navbar;


class frontendController extends Controller
{
    public function index()
    {
        $navbar = navbar::all();

        return view('frontend.landing', compact('navbar'));
    }
}
