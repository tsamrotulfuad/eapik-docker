<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InovasiController extends Controller
{
    public function index()
    {
        return view('admin.inovasi');
    }
}
