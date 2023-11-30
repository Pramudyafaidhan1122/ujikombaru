<!-- resources/views/kasir.blade.php -->
<html>
<head>
    <title>Aplikasi Kasir</title>
</head>
<body>
    <h1>Data Kasir</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <!-- Tambahkan kolom lain sesuai kebutuhan -->
            </tr>
        </thead>
        <tbody>
            @foreach($kasirs as $kasir)
            <tr>
                <td>{{ $kasir->id }}</td>
                <td>{{ $kasir->nama }}</td>
                <td>{{ $kasir->alamat }}</td>
                <!-- Tambahkan data lain sesuai kebutuhan -->
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
