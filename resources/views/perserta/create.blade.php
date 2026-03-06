<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Peserta Baru</title>
</head>

<body>
    <h3>Form Pendaftaran Peserta</h3>

    <form action="{{ route('perserta.store') }}" method="POST">
        @csrf

        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama_lengkap" required><br><br>

        <label>NIK (16 Digit):</label><br>
        <input type="number" name="nik" required><br><br>

        <label>Nomor KK (16 Digit):</label><br>
        <input type="number" name="no_kk" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Jurusan ID:</label><br>
        <input type="number" name="jurusan_id" required><br><br>

        <label>Gelombang ID:</label><br>
        <input type="number" name="gelombang_id" required><br><br>

        <label>Tempat Lahir:</label><br>
        <input type="text" name="tempat_lahir" required><br><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tanggal_lahir" required><br><br>

        <label>Jenis Kelamin:</label><br>
        <select name="jenis_kelamin" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br><br>

        <label>Pendidikan Terakhir:</label><br>
        <input type="text" name="pendidikan_terakhir" required><br><br>

        <label>Nama Sekolah:</label><br>
        <input type="text" name="nama_sekolah" required><br><br>

        <label>Kejuruan:</label><br>
        <input type="text" name="kejuruan" required><br><br>

        <label>Nomor HP:</label><br>
        <input type="text" name="no_hp" required><br><br>

        <label>Aktivitas Saat Ini:</label><br>
        <input type="text" name="aktivitas_saat_ini" required><br><br>

        <label>Status:</label><br>
        <select name="status">
            <option value="1">Aktif</option>
            <option value="0">Tidak Aktif</option>
        </select><br><br>

        <button type="submit">Simpan Data Peserta</button>
    </form>
</body>

</html>
