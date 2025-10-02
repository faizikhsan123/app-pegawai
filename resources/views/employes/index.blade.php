@extends('master')

@section('title', 'Daftar Pegawai')

@section('content')
    <div class="container mt-5">
        <h1>Daftar Pegawai</h1>
        <a href="{{ route('employes.create') }}">Tambah Pegawai</a>

        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>No Telepon</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat Lengkap</th>
                    <th>Tanggal Masuk</th>
                    <th>Status</th>
                    <th>Aksi</th>
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
                            <form action="{{ route('employes.destroy', $karyawan->id) }}" method="post"
                                style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin ingin dihapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
