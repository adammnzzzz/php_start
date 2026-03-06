<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Lp Balok</title>
</head>

<body>
    <h2>Perhitungan Luas Segi Balok</h2>
    <a href="{{ url('navbar') }}">Kembali</a>

    <form action="{{ route('kubus.store') }}" method="post">
        @csrf
        <label>Panjang:</label>
        <input type="number" name="angka1" placeholder="Masukkan Panjang" required><br>

        <label>Lebar:</label>
        <input type="number" name="angka2" placeholder="Masukkan Lebar" required><br>

        <label>Tinggi:</label>
        <input type="number" name="tinggi" placeholder="Masukkan Tinggi" required><br>

        <input type="hidden" name="operator" value="balok">

        <button type="submit">Hitung</button>
    </form>

    @isset($hasil)
        <h3>Hasil : {{ $hasil }}</h3>
    @endisset
</body>

</html>
