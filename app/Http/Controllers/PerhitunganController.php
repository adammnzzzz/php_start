<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    function index()
    {
        // Sesuaikan nama view dengan yang ada di resources/views
        return view('perhitungan.index');
    }
    function store(Request $request)
    {
        $angka1     =   $request->angka1;
        $angka2     =   $request->angka2;
        $operator   =   $request->operator;

        $hasil = 0;

        switch ($operator) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
                break;
            case '*':
                $hasil = $angka1 * $angka2;
                break;
            case '/':
                if ($angka2 == 0) {
                    return back()->with('error', 'tidak bisa di bagi 0!');
                }
                $hasil = $angka1 / $angka2;
                break;
        }
        return view('perhitungan.index', compact('hasil'));
    }
}
