<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Karyawan</title>
</head>

<body>
    <h1>Daftar Karyawan</h1>
    <a href="{{ route('employes.create') }}">Tambah Karyawan</a>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Nama Lengkap</th>
                <th>EMail</th>
                <th>No Telepon</th>
                <th>Tanggal lahir</th>
                <th>ALamat Lengkap</th>
                <th>Tanggal Masuk</th>
                <th>Status</th>
                <th>AKSI</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($employes as $karyawan)
            <tr>
                <td>{{ $karyawan->nama_lengkap }}</td>
                <td>{{ $karyawan->email }}</td>
                <td>{{ $karyawan->nomor_telepon }}</td>
                <td>{{ $karyawan->tanggal_lahir }}</td>
                <td>{{ $karyawan->alamat }}</td>
                <td>{{ $karyawan->tanggal_masuk }}</td>
                <td>{{ $karyawan->status }}</td>
                
                    <td>
                        <a href="{{ route('employes.show', $karyawan->id) }}">Detail Pegawai</a>
                        <a href="{{ route('employes.edit', $karyawan->id) }}">Edit Pegawai</a>

                        <form action="{{ route('employes.destroy', $karyawan->id) }}" method="post" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('yakin ingin dihapus')">Hapus</button>
                        </form>
                    </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>





</body>

</html>
