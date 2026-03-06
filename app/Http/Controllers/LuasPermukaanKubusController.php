<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LuasPermukaanKubusController extends Controller
{
    public function index()
    {
        return view('kubus.lp_kubus');
    }

    public function store(Request $request)
    {
        $panjang = $request->angka1;
        $lebar = $request->angka2;
        $tinggi = $request->tinggi;

        // rumus luas permukaan balok
        $hasil = 2 * (($panjang * $lebar) + ($panjang * $tinggi) + ($lebar * $tinggi));

        return view('kubus.lp_kubus', compact('hasil'));
    }
}
