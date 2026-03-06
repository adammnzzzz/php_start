<?php

namespace App\Http\Controllers;

use \App\Models\Limas;
use Illuminate\Http\Request;

class VolumeLimasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $limas = Limas::all();
        return view('limas.index', compact('limas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('limas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'luas_alas' => 'required | numeric | min:1',
            'tinggi' => 'required | numeric | min:1'
        ]);
        $alas = $request->luas_alas;
        $tinggi = $request->tinggi;

        // INSERT INTI limas () VALUES ()
        $hasil = 0.3 * $alas * $tinggi;
        Limas::create([
            'luas_alas' => $alas,
            'tinggi' => $tinggi,
            'hasil' => $hasil
        ]);

        return redirect()->route('volumelimas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $limas = Limas::find($id);
        return view('limas.edit', compact('limas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // 1. Validasi input
        $request->validate([
            'luas_alas' => 'required|numeric|min:1',
            'tinggi' => 'required|numeric|min:1'
        ]);

        // 2. Cari data berdasarkan ID
        $limas = Limas::findOrFail($id);

        // 3. Ambil data dari inputan
        $alas = $request->luas_alas;
        $tinggi = $request->tinggi;

        // 4. Hitung ulang volumenya (1/3 * luas_alas * tinggi)
        $hasil = (1 / 3) * $alas * $tinggi;

        // 5. Simpan perubahan ke database
        $limas->update([
            'luas_alas' => $alas,
            'tinggi' => $tinggi,
            'hasil' => $hasil
        ]);

        // 6. Balikkan ke halaman utama
        return redirect()->route('volumelimas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cari data berdasarkan ID, kalau tidak ada langsung error 404
        $limas = Limas::findOrFail($id);

        // Hapus data tersebut
        $limas->delete();

        // Balikkan ke halaman index
        return redirect()->route('volumelimas.index');
    }
}
