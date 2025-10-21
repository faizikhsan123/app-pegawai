@extends('master')

@section('title', 'Detail Gaji Karyawan')

@section('content')
    <div class="max-w-3xl mx-auto mt-10 bg-white p-8 rounded-xl shadow-lg">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">🧾 Detail Gaji Karyawan</h1>

        <div class="overflow-hidden rounded-lg border border-gray-200">
            <table class="min-w-full border-collapse">
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <th class="bg-gray-100 px-6 py-3 text-left font-medium text-gray-700 w-1/3">Nama Karyawan</th>
                        <td class="px-6 py-3 text-gray-800">{{ $salary->karyawan->nama_lengkap }}</td>
                    </tr>
                    <tr>
                        <th class="bg-gray-100 px-6 py-3 text-left font-medium text-gray-700">Bulan</th>
                        <td class="px-6 py-3 text-gray-800">{{ $salary->bulan }}</td>
                    </tr>
                    <tr>
                        <th class="bg-gray-100 px-6 py-3 text-left font-medium text-gray-700">Gaji Pokok</th>
                        <td class="px-6 py-3 text-gray-800">Rp {{ number_format($salary->gaji_pokok, 0, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <th class="bg-gray-100 px-6 py-3 text-left font-medium text-gray-700">Tunjangan</th>
                        <td class="px-6 py-3 text-gray-800">Rp {{ number_format($salary->tunjangan, 0, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <th class="bg-gray-100 px-6 py-3 text-left font-medium text-gray-700">Potongan</th>
                        <td class="px-6 py-3 text-gray-800">Rp {{ number_format($salary->potongan, 0, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <th class="bg-gray-100 px-6 py-3 text-left font-semibold text-gray-900">Total Gaji</th>
                        <td class="px-6 py-3 font-bold text-green-700">
                            Rp {{ number_format($salary->total_gaji, 0, ',', '.') }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-6 flex justify-end">
            <a href="{{ route('salaries.index') }}"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                ← Kembali ke Daftar Gaji
            </a>
        </div>
    </div>
@endsection
