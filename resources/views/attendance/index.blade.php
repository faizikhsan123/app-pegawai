@extends('master')

@section('title', 'Daftar Absensi')

@section('content')
<div class="max-w-6xl mx-auto mt-10 bg-white p-8 rounded-xl shadow-lg">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">📋 Daftar Absensi</h1>
        <a href="{{ route('attendance.create') }}"
           class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-200">
           + Tambah Absensi
        </a>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-200">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="border border-gray-200 px-4 py-2 text-left">Nama Karyawan</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Tanggal</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Waktu Masuk</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Waktu Keluar</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Status</th>
                    <th class="border border-gray-200 px-4 py-2 text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($attendance as $attendances)
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-200 px-4 py-2">{{ $attendances->karyawan->nama_lengkap }}</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $attendances->tanggal }}</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $attendances->waktu_masuk }}</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $attendances->waktu_keluar }}</td>
                        <td class="border border-gray-200 px-4 py-2">
                            <span class="px-3 py-1 rounded-full text-sm
                                @if($attendances->status_absensi === 'hadir') bg-green-100 text-green-700
                                @elseif($attendances->status_absensi === 'izin') bg-yellow-100 text-yellow-700
                                @else bg-red-100 text-red-700 @endif">
                                {{ ucfirst($attendances->status_absensi) }}
                            </span>
                        </td>
                        <td class="border border-gray-200 px-4 py-2 text-center space-x-2">
                            <a href="{{ route('attendance.show', $attendances->id) }}"
                               class="text-blue-600 hover:underline">Detail</a>
                            <a href="{{ route('attendance.edit', $attendances->id) }}"
                               class="text-yellow-600 hover:underline">Edit</a>
                            <form action="{{ route('attendance.destroy', $attendances->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        onclick="return confirm('Yakin ingin dihapus?')"
                                        class="text-red-600 hover:underline">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-4 text-gray-500">Belum ada data absensi</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
