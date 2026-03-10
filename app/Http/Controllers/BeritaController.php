<?php
namespace App\Http\Controllers;

use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->take(4)->get();
        return view('berita', compact('beritas'));
    }
}
