@extends('master')

@section('title', 'Daftar Pegawai')

@section('content')
<div class="max-w-7xl mx-auto bg-white shadow-lg rounded-xl p-6 mt-5">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Daftar Pegawai</h1>
        <a href="{{ route('employes.create') }}"
           class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition duration-200">
           + Tambah Pegawai
        </a>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-semibold uppercase">No</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold uppercase">Nama Lengkap</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold uppercase">Email</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold uppercase">No Telepon</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold uppercase">Tanggal Lahir</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold uppercase">Alamat Lengkap</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold uppercase">Tanggal Masuk</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold uppercase">Status</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold uppercase">Departemen</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold uppercase">Posisi</th>
                    <th class="px-4 py-3 text-center text-sm font-semibold uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
                @foreach ($employes as $karyawan)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-4 py-3 text-gray-800 font-medium">{{ $loop->iteration }}</td>
                        <td class="px-4 py-3 font-medium text-gray-800">{{ $karyawan->nama_lengkap }}</td>
                        <td class="px-4 py-3 text-gray-700">{{ $karyawan->email }}</td>
                        <td class="px-4 py-3 text-gray-700">{{ $karyawan->nomor_telepon }}</td>
                        <td class="px-4 py-3 text-gray-700">{{ $karyawan->tanggal_lahir }}</td>
                        <td class="px-4 py-3 text-gray-700">{{ $karyawan->alamat }}</td>
                        <td class="px-4 py-3 text-gray-700">{{ $karyawan->tanggal_masuk }}</td>
                        <td class="px-4 py-3">
                            @if ($karyawan->status === 'aktif')
                                <span class="px-3 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Aktif</span>
                            @else
                                <span class="px-3 py-1 text-xs font-semibold text-red-700 bg-red-100 rounded-full">Nonaktif</span>
                            @endif
                        </td>
                        <td class="px-4 py-3 text-gray-700">{{ $karyawan->departemen->nama_departemen }}</td>
                        <td class="px-4 py-3 text-gray-700">{{ $karyawan->jabatan->nama_jabatan }}</td>
                        <td class="px-4 py-3 text-center">
                            <div class="flex justify-center space-x-3">
                                <a href="{{ route('employes.show', $karyawan->id) }}" class="text-blue-600 hover:text-blue-800 font-semibold">Detail</a>
                                <a href="{{ route('employes.edit', $karyawan->id) }}" class="text-yellow-500 hover:text-yellow-600 font-semibold">Edit</a>
                                <form action="{{ route('employes.destroy', $karyawan->id) }}" method="post" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin ingin dihapus?')" class="text-red-600 hover:text-red-800 font-semibold">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
