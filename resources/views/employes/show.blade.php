<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Pegawai</title>
</head>
<body>
     <h1>Detail Pegawai</h1>
        <table border="1" cellspacing="0" celpadding="10">
            <tr>
                <th>Nama Lengkap</th>
                <td>{{ $employes->nama_lengkap }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $employes->email }}</td>
            </tr>
            <tr>
                <th>Nomor Telepon</th>
                <td>{{ $employes->nomor_telepon }}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>{{ $employes->tanggal_lahir }}</td>
            </tr>
            <tr>
                <th>Alamat Lengkap</th>
                <td>{{ $employes->alamat }}</td>
            </tr>
            <tr>
                <th>Tanggal Masuk</th>
                <td>{{ $employes->tanggal_masuk }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $employes->status }}</td>
            </tr>
        </table>
    </form>
    
</body>
</html>