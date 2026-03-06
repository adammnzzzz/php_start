<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class perserta extends Model
{
    // app/Models/Perserta.php
    // Pastikan nama tabelnya benar
    protected $table = 'persertas';

    // WAJIB: Daftarkan semua nama input yang ada di dd() tadi
    protected $fillable = [
        'nama_lengkap',
        'nik',
        'email',
        'jurusan_id',
        'gelombang_id',
        'tanggal_lahir',
        'jenis_kelamin',
        'no_hp',
        'no_kk',
        'tempat_lahir',
        'pendidikan_terakhir',
        'nama_sekolah',
        'kejuruan',
        'aktivitas_saat_ini',
        'status'
    ];
}
