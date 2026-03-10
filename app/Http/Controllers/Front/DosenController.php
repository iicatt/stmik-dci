<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all(); 
        // Memanggil file dosen.blade.php
        return view('dosen', compact('dosens'));
    }

    public function show($slug)
    {
        $dosen = Dosen::where('slug', $slug)->firstOrFail();
        // Memanggil file detaildosen.blade.php
        return view('detaildosen', compact('dosen'));
    }
}