@extends('master')

@section('title', 'Edit Absensi')

@section('content')
    <div class="max-w-3xl mx-auto mt-10 bg-white p-8 rounded-xl shadow-lg">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">✏️ Form Edit Absensi</h1>

        <form action="{{ route('attendance.update', $attendance->id) }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <!-- Nama Karyawan -->
            <div>
                <label for="employees_id" class="block text-gray-700 font-semibold mb-2">Nama Karyawan:</label>
                <select name="employees_id" id="employees_id" required
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400">
                    <option value="">-- Pilih Karyawan --</option>
                    @foreach ($karyawan as $karyawans)
                        <option value="{{ $karyawans->id }}"
                            {{ old('employees_id', $attendance->employees_id ?? '') == $karyawans->id ? 'selected' : '' }}>
                            {{ $karyawans->nama_lengkap }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Tanggal -->
            <div>
                <label for="tanggal" class="block text-gray-700 font-semibold mb-2">Tanggal:</label>
                <input type="date" name="tanggal" id="tanggal"
                    value="{{ old('tanggal', $attendance->tanggal) }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- Waktu Masuk -->
            <div>
                <label for="waktu_masuk" class="block text-gray-700 font-semibold mb-2">Waktu Masuk:</label>
                <input type="time" name="waktu_masuk" id="waktu_masuk"
                    value="{{ old('waktu_masuk', $attendance->waktu_masuk) }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- Waktu Keluar -->
            <div>
                <label for="waktu_keluar" class="block text-gray-700 font-semibold mb-2">Waktu Keluar:</label>
                <input type="time" name="waktu_keluar" id="waktu_keluar"
                    value="{{ old('waktu_keluar', $attendance->waktu_keluar) }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- Status -->
            <div>
                <label for="status_absensi" class="block text-gray-700 font-semibold mb-2">Status:</label>
                <select name="status_absensi" id="status_absensi" required
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400">
                    <option value="">-- Pilih Status --</option>
                    <option value="hadir"
                        {{ old('status_absensi', $attendance->status_absensi) == 'hadir' ? 'selected' : '' }}>Hadir</option>
                    <option value="izin"
                        {{ old('status_absensi', $attendance->status_absensi) == 'izin' ? 'selected' : '' }}>Izin</option>
                    <option value="sakit"
                        {{ old('status_absensi', $attendance->status_absensi) == 'sakit' ? 'selected' : '' }}>Sakit</option>
                    <option value="alpha"
                        {{ old('status_absensi', $attendance->status_absensi) == 'alpha' ? 'selected' : '' }}>Alpha</option>
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
