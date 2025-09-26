<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Karyawan</title>
</head>

<body>
    <h1>Form Edit Pegawai</h1>
    <form action="{{ route('employes.update', $employes->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td><label for="nama_lengkap">Nama Lengkap:</label></td>
                <td>
                    <input type="text" name="nama_lengkap" id="nama_lengkap"
                        value="{{ old('nama_lengkap', $employes->nama_lengkap) }}">
                </td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td>
                    <input type="email" name="email" id="email"
                        value="{{ old('email', $employes->email) }}">
                </td>
            </tr>
            <tr>
                <td><label for="nomor_telepon">Nomor Telepon:</label></td>
                <td>
                    <input type="text" name="nomor_telepon" id="nomor_telepon"
                        value="{{ old('nomor_telepon', $employes->nomor_telepon) }}">
                </td>
            </tr>
            <tr>
                <td><label for="tanggal_lahir">Tanggal Lahir:</label></td>
                <td>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                        value="{{ old('tanggal_lahir', $employes->tanggal_lahir) }}">
                </td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat:</label></td>
                <td>
                    <textarea id="alamat" name="alamat">{{ old('alamat', $employes->alamat) }}</textarea>
                </td>
            </tr>
            <tr>
                <td><label for="tanggal_masuk">Tanggal Masuk:</label></td>
                <td>
                    <input type="date" name="tanggal_masuk" id="tanggal_masuk"
                        value="{{ old('tanggal_masuk', $employes->tanggal_masuk) }}">
                </td>
            </tr>
            <tr>
                <td><label for="status">Status:</label></td>
                <td>
                    <select name="status" id="status">
                        <option value="aktif" {{ old('status', $employes->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="nonaktif" {{ old('status', $employes->status) == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
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
