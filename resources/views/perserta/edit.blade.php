<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Peserta</title>
</head>
<body>
    <h3>Edit Data Peserta: {{ $perserta->nama_lengkap }}</h3>

    <form action="{{ route('perserta.update', $perserta->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama_lengkap" value="{{ $perserta->nama_lengkap }}" required><br><br>

        <label>NIK:</label><br>
        <input type="number" name="nik" value="{{ $perserta->nik }}" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ $perserta->email }}" required><br><br>

        {{-- Gunakan pola yang sama untuk kolom lainnya --}}
        <label>Nomor HP:</label><br>
        <input type="text" name="no_hp" value="{{ $perserta->no_hp }}" required><br><br>

        <label>Status:</label><br>
        <select name="status">
            <option value="1" {{ $perserta->status == 1 ? 'selected' : '' }}>Aktif</option>
            <option value="0" {{ $perserta->status == 0 ? 'selected' : '' }}>Tidak Aktif</option>
        </select><br><br>

        <button type="submit">Update Data</button>
        <a href="{{ route('perserta.index') }}">Batal</a>
    </form>
</body>
</html>
