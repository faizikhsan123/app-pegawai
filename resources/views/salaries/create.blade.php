@extends('master')

@section('title', 'Tambah Salaries')

@section('content')
    <div class="max-w-3xl mx-auto mt-10 bg-white p-8 rounded-xl shadow-lg">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">💰 Form Input Gaji Karyawan</h1>

        <form action="{{ route('salaries.store') }}" method="POST" class="space-y-5">
            @csrf

            <!-- Nama Karyawan -->
            <div>
                <label for="employees_id" class="block font-medium text-gray-700 mb-2">Nama Karyawan</label>
                <select name="employees_id" id="employees_id" required
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option value="">-- Pilih Karyawan --</option>
                    @foreach ($karyawan as $karyawans)
                        <option value="{{ $karyawans->id }}" {{ old('employees_id') == $karyawans->id ? 'selected' : '' }}>
                            {{ $karyawans->nama_lengkap }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Bulan -->
            <div>
                <label for="bulan" class="block font-medium text-gray-700 mb-2">Bulan</label>
                <input type="month" name="bulan" id="bulan" value="{{ old('bulan') }}" required
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Gaji Pokok -->
            <div>
                <label for="gaji_pokok" class="block font-medium text-gray-700 mb-2">Gaji Pokok</label>
                <input type="number" name="gaji_pokok" id="gaji_pokok" value="{{ old('gaji_pokok') }}" min="0" required
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Tunjangan -->
            <div>
                <label for="tunjangan" class="block font-medium text-gray-700 mb-2">Tunjangan</label>
                <input type="number" name="tunjangan" id="tunjangan" value="{{ old('tunjangan') }}" min="0" required
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Potongan -->
            <div>
                <label for="potongan" class="block font-medium text-gray-700 mb-2">Potongan</label>
                <input type="number" name="potongan" id="potongan" value="{{ old('potongan') }}" min="0" required
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Tombol -->
            <div class="flex justify-end space-x-3 mt-6">
                <a href="{{ route('salaries.index') }}"
                    class="px-4 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400 transition">Kembali</a>
                <button type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">💾 Simpan</button>
            </div>
        </form>
    </div>
@endsection
