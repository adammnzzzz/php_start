<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h3>EDIT Volume Limas SEGI EMPAY</h3>
    <form action="{{ route('volumelimas.update', $limas->id) }}" method="post">
        @csrf
        @method('PUT')
        <label>Luas Alas:</label>
        <input type="number" step="any" name="luas_alas" value="{{ $limas->luas_alas }}" required>
        <br><br>

        <label>Tinggi :</label>
        <input type="number" step="any" name="tinggi" value="{{ $limas->tinggi }}"required>
        <br><br>

        <button type="submit">Hitung & simpan</button>

    </form>

    @isset($hasil)
        <h3>Hasil : {{ $hasil }}</h3>
    @endisset
</body>

</html>
