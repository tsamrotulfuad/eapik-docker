<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PohonkinerjaController extends Controller
{
    public function index()
    {
        return view('user.pohonkinerja');
    }
}
