<?php

namespace App\Http\Controllers;

use App\Models\Perserta;
use Illuminate\Http\Request;

class PersertaController extends Controller
{
    public function index()
    {
        $perserta = Perserta::all();
        return view('perserta.index', compact('perserta'));
    }

    public function create()
    {
        return view('perserta.create');
    }

    public function store(Request $request)
    {
        // Cek apakah ada kolom yang lupa dimasukkan di $fillable atau masalah database
        try {
            $data = $request->all();

            // Kita tambahkan status default jika di form belum ada (biar tidak error null)
            $data['status'] = $request->status ?? 1;

            $simpan = Perserta::create($data);

            if ($simpan) {
                return redirect()->route('perserta.index')->with('success', 'Berhasil!');
            }
        } catch (\Exception $e) {
            // Ini akan memunculkan pesan error yang SANGAT DETAIL
            dd([
                'Pesan Error' => $e->getMessage(),
                'File Model' => 'Cek app/Models/Perserta.php apakah $fillable sudah lengkap?',
                'Data yang dikirim' => $request->all()
            ]);
        }
    }
    public function edit(string $id)
    {
        $perserta = Perserta::findOrFail($id);
        return view('perserta.edit', compact('perserta'));
    }

    public function update(Request $request, string $id)
    {
        $perserta = Perserta::findOrFail($id);

        $validatedData = $request->validate([
            'jurusan_id'          => 'required|integer',
            'gelombang_id'        => 'required|integer',
            'nama_lengkap'        => 'required|string|max:255',
            'nik'                 => 'required|string|size:16',
            'email'               => 'required|email|unique:persertas,email,' . $id,
            // ... tambahkan yang lain sesuai kebutuhan edit
        ]);

        $perserta->update($request->all()); // Cara cepat update semua inputan

        return redirect()->route('perserta.index')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy(string $id)
    {
        $perserta = Perserta::findOrFail($id);
        $perserta->delete();

        return redirect()->route('perserta.index');
    }
}
