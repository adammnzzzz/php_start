<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h3>Create Volume Limas SEGI EMPAY</h3>
    <form action="{{ route('volumelimas.store') }}" method="post">
        @csrf

        <label>Luas Alas:</label>
        <input type="number" step="any" name="luas_alas" required>
        <br><br>

        <label>Tinggi :</label>
        <input type="number" step="any" name="tinggi" required>
        <br><br>

        <button type="submit">Hitung & simpan</button>

    </form>

    @isset($hasil)
        <h3>Hasil : {{ $hasil }}</h3>
    @endisset
</body>

</html>
