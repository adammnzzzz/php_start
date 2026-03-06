<!DOCTYPE html>
<html>

<head>
    <title>Luas Permukaan Tabung</title>
</head>

<body>

    <h2>Perhitungan Luas Segi Empat</h2>
    <a href="{{ route('volumelimas.create') }}">Create</a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Luas Alas</th>
                <th>Tinggi</th>
                <th>Hasil</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($limas as $index => $v)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $v->luas_alas }}</td>
                    <td>{{ $v->tinggi }}</td>
                    <td>{{ $v->hasil }}</td>
                    <td>
                        <a href="{{ route('volumelimas.edit', $v->id) }}">Edit</a>
                        <form action="{{ route('volumelimas.destroy', $v->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('navbar') }}">Kembali</a>



</body>

</html>
