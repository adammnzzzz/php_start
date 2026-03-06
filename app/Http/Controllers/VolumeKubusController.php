<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolumeKubusController extends Controller
{
    public function index()
    {
        return view('vKubus/vkubus');
    }

    public function store(Request $request)
    {
        $sisi = $request->sisi;

        // rumus luas permukaan balok
        $hasil = $sisi ** 3;

        return view('vKubus/vkubus', compact('hasil'));
    }
}
