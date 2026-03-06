<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolumeTabungController extends Controller
{
    public function index()
    {
        return view('vtabung.vtabung');
    }

    public function store(Request $request)
    {
        $jari = $request->jari;
        $tinggi = $request->tinggi;

        // rumus luas permukaan balok
        $hasil = 3.14 * $jari**2 * $tinggi;

        return view('vtabung.vtabung', compact('hasil'));
    }
}
