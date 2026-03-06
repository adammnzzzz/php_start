<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Lp Balok</title>
</head>

<body>
    <h2>Perhitungan Luas Permukaan Balok</h2>
    <a href="{{ url('navbar') }}">Kembali</a>

    <form action="{{ route('vkubus.store')}}" method="post">
        @csrf
        <label>Panjang:</label>
        <input type="number" name="sisi" placeholder="Masukkan Panjang" required><br>

        <button type="submit">Hitung</button>
    </form>

    @isset($hasil)
        <h3>Hasil : {{ $hasil }}</h3>
    @endisset
</body>

</html>
