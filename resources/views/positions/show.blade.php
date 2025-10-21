@extends('master')

@section('title', 'Detail Jabatan')

@section('content')
    <div class="max-w-lg mx-auto mt-10 bg-white p-8 rounded-xl shadow-lg">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">📋 Detail Jabatan</h1>

        <table class="w-full border border-gray-300 rounded-lg overflow-hidden">
            <tr class="bg-gray-100">
                <th class="text-left p-3 border-b border-gray-300 w-1/3">Nama Jabatan</th>
                <td class="p-3 border-b border-gray-300">{{ $positions->nama_jabatan }}</td>
            </tr>
            <tr>
                <th class="text-left p-3 border-b border-gray-300">Gaji Pokok</th>
                <td class="p-3 border-b border-gray-300">Rp {{ number_format($positions->gaji_pokok, 0, ',', '.') }}</td>
            </tr>
        </table>

        <div class="flex justify-end mt-6">
            <a href="{{ route('positions.index') }}"
               class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                Kembali
            </a>
        </div>
    </div>
@endsection
