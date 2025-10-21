@extends('master')

@section('title', 'Tambah Absensi')

@section('content')
    <div class="max-w-3xl mx-auto mt-10 bg-white p-8 rounded-xl shadow-lg">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">📝 Form Tambah Absensi</h1>

        <form action="{{ route('attendance.store') }}" method="POST" class="space-y-5">
            @csrf

            <!-- Nama Karyawan -->
            <div>
                <label for="employees_id" class="block text-gray-700 font-semibold mb-2">Nama Karyawan:</label>
                <select name="employees_id" id="employees_id" required
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400">
                    <option value="">-- Pilih Karyawan --</option>
                    @foreach ($karyawan as $karyawans)
                        <option value="{{ $karyawans->id }}">{{ $karyawans->nama_lengkap }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Tanggal -->
            <div>
                <label for="tanggal" class="block text-gray-700 font-semibold mb-2">Tanggal:</label>
                <input type="date" name="tanggal" id="tanggal"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- Waktu Masuk -->
            <div>
                <label for="waktu_masuk" class="block text-gray-700 font-semibold mb-2">Waktu Masuk:</label>
                <input type="time" name="waktu_masuk" id="waktu_masuk"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- Waktu Keluar -->
            <div>
                <label for="waktu_keluar" class="block text-gray-700 font-semibold mb-2">Waktu Keluar:</label>
                <input type="time" name="waktu_keluar" id="waktu_keluar"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- Status -->
            <div>
                <label for="status_absensi" class="block text-gray-700 font-semibold mb-2">Status:</label>
                <select name="status_absensi" id="status_absensi" required
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400">
                    <option value="">-- Pilih Status --</option>
                    <option value="hadir">Hadir</option>
                    <option value="izin">Izin</option>
                    <option value="sakit">Sakit</option>
                    <option value="alpha">Alpha</option>
                </select>
            </div>

            <!-- Tombol Simpan -->
            <div class="text-right">
                <button type="submit"
                    class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-200">
                    Simpan
                </button>
            </div>
        </form>
    </div>
@endsection
