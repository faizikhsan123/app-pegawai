@extends('master')

@section('title', 'Edit Jabatan')

@section('content')
    <div class="max-w-lg mx-auto mt-10 bg-white p-8 rounded-xl shadow-lg">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">✏️ Edit Jabatan</h1>

        <form action="{{ route('positions.update', $positions->id) }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <!-- Input Nama Jabatan -->
            <div>
                <label for="nama_jabatan" class="block text-gray-700 font-semibold mb-2">Nama Jabatan</label>
                <input type="text" name="nama_jabatan" id="nama_jabatan"
                    value="{{ old('nama_jabatan', $positions->nama_jabatan) }}"
                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"
                    placeholder="Masukkan nama jabatan" required>
            </div>

            <!-- Input Gaji Pokok -->
            <div>
                <label for="gaji_pokok" class="block text-gray-700 font-semibold mb-2">Gaji Pokok</label>
                <input type="number" name="gaji_pokok" id="gaji_pokok"
                    value="{{ old('gaji_pokok', $positions->gaji_pokok) }}"
                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"
                    placeholder="Masukkan gaji pokok" required>
            </div>

            <!-- Tombol Simpan -->
            <div class="flex justify-end space-x-3 pt-4">
                <a href="{{ route('positions.index') }}"
                    class="px-5 py-2 bg-gray-400 text-white rounded-lg hover:bg-gray-500 transition">
                    Kembali
                </a>
                <button type="submit"
                    class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
@endsection
