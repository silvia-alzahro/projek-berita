<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('layouts.frontend', compact('berita'));

    } 
}
