<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LuasPermukaanTabungController extends Controller
{
    public function index()
    {
        return view('lptabung.lptabung');
    }

    public function store(Request $request)
    {
        $jari = $request->jari;
        $tinggi = $request->tinggi;

        // rumus luas permukaan tabung
        $hasil = 2 * 3.14 * $jari * ($jari + $tinggi);

        return view('lptabung.lptabung', compact('hasil'));
    }
}
