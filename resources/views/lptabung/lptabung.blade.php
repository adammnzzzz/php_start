<!DOCTYPE html>
<html>

<head>
    <title>Luas Permukaan Tabung</title>
</head>

<body>

<h2>Perhitungan Luas Permukaan Tabung</h2>

<a href="{{ url('navbar') }}">Kembali</a>

<form action="{{ route('lptabung.store') }}" method="post">
    @csrf

    <label>Jari Jari :</label>
    <input type="number" name="jari" required>
    <br><br>

    <label>Tinggi :</label>
    <input type="number" name="tinggi" required>
    <br><br>

    <button type="submit">Hitung</button>

</form>

@isset($hasil)
<h3>Hasil : {{ $hasil }}</h3>
@endisset

</body>
</html>
