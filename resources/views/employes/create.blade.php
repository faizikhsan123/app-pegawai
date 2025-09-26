<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Karyawan</title>
</head>

<body>
    <h1>Form Pegawai</h1>
    <form action="{{ route('employes.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="nama_lengkap">Nama Lengkap:</label></td>
                <td><input type="text" name="nama_lengkap" id="nama_lengkap"></td>
            </tr>
            <tr>
                <td><label for="email">EMail:</label></td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <td><label for="nomor_telepon">Nomor Telepon</label></td>
                <td><input type="text" name="nomor_telepon" id="nomor_telepon"></td>
            </tr>
            <tr>
                <td><label for="tanggal_lahir">Tanggal Lahir</label></td>
                <td><input type="date" name="tanggal_lahir" id="tanggal_lahir"></td>
            </tr>
            <tr>
                <td><label for="alamat">ALamat:</label></td>
                <td>
                    <textarea id="alamat" name="alamat"></textarea>
                </td>
            </tr>
            <tr>
                <td><label for="tanggal_masuk">Tanggal Masuk:</label></td>
                <td><input type="date" name="tanggal_masuk" id="tanggal_masuk"></td>
            </tr>
            <tr>
                <td><label for="status">Status:</label></td>
                <td>
                    <select name="status" id="status">
                        <option value="aktif">Aktif</option>
                        <option value="nonaktif">Nonaktif</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: right;">
                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>
      
    </form>

</body>

</html>
