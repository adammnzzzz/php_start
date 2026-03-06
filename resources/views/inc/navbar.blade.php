<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Laravel</title>
</head>

<body>
    <h1>Belajar Berhitung di Laravel</h1>

    <nav>
        <a href="{{ url('perhitungan') }}">Perhitungan</a> <br>
        <a href="{{ url('kubus') }}">Luas Permukaan Kubus</a> <br>
        <a href="{{ url('vkubus') }}">Volume Kubus</a> <br>
        <a href="{{ url('lptabung') }}">Luas Permukaan Tabung</a> <br>
        <a href="{{ url('vtabung') }}">Volume tabung</a> <br>
        <a href="{{ route('volumelimas.index') }}">Volume Limas Segi Empat</a> <br>
        <a href="{{ route('perserta.index') }}">Perserta Pelatihan</a> <br>
    </nav>

</body>

</html>
