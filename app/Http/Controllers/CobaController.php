<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {
        // tempat logika/sistem berjalan
        $nama = 'Hafidz';
        return view('coba', compact('nama'));
    }
}
