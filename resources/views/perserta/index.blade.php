<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peserta</title>
</head>
<body>

    <h2>Daftar Peserta Pelatihan</h2>
    <a href="{{ route('perserta.create') }}">Tambah Peserta Baru</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>NIK</th>
                <th>Jurusan</th>
                <th>Gelombang</th>
                <th>Jenis Kelamin</th>
                <th>No HP</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($perserta as $index => $p)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $p->nama_lengkap }}</td>
                    <td>{{ $p->nik }}</td>
                    <td>{{ $p->jurusan_id }}</td> {{-- Nanti bisa diubah jadi nama jurusan lewat relasi --}}
                    <td>{{ $p->gelombang_id }}</td>
                    <td>{{ $p->jenis_kelamin }}</td>
                    <td>{{ $p->no_hp }}</td>
                    <td>
                        {{ $p->status == 1 ? 'Aktif' : 'Tidak Aktif' }}
                    </td>
                    <td>
                        <a href="{{ route('perserta.edit', $p->id) }}">Edit</a>

                        <form action="{{ route('perserta.destroy', $p->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus peserta ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <a href="{{ url('navbar') }}">Kembali ke Menu Utama</a>

</body>
</html>
