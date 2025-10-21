<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Karyawan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-xl p-8 mt-10">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Edit Pegawai</h1>
        </div>

        <!-- Form -->
        <form action="{{ route('employes.update', $employes->id) }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <!-- Nama -->
                <div>
                    <label for="nama_lengkap" class="block text-gray-700 font-medium mb-1">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap"
                        value="{{ old('nama_lengkap', $employes->nama_lengkap) }}" required
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-gray-700 font-medium mb-1">Email</label>
                    <input type="email" name="email" id="email"
                        value="{{ old('email', $employes->email) }}" required
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Nomor Telepon -->
                <div>
                    <label for="nomor_telepon" class="block text-gray-700 font-medium mb-1">Nomor Telepon</label>
                    <input type="text" name="nomor_telepon" id="nomor_telepon"
                        value="{{ old('nomor_telepon', $employes->nomor_telepon) }}" required
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Tanggal Lahir -->
                <div>
                    <label for="tanggal_lahir" class="block text-gray-700 font-medium mb-1">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                        value="{{ old('tanggal_lahir', $employes->tanggal_lahir) }}" required
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Alamat -->
                <div class="md:col-span-2">
                    <label for="alamat" class="block text-gray-700 font-medium mb-1">Alamat Lengkap</label>
                    <textarea name="alamat" id="alamat" rows="3" required
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">{{ old('alamat', $employes->alamat) }}</textarea>
                </div>

                <!-- Tanggal Masuk -->
                <div>
                    <label for="tanggal_masuk" class="block text-gray-700 font-medium mb-1">Tanggal Masuk</label>
                    <input type="date" name="tanggal_masuk" id="tanggal_masuk"
                        value="{{ old('tanggal_masuk', $employes->tanggal_masuk) }}" required
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Departemen -->
                <div>
                    <label for="departements_id" class="block text-gray-700 font-medium mb-1">Departemen</label>
                    <select name="departements_id" id="departements_id" required
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <option value="">-- Pilih Departemen --</option>
                        @foreach ($departements as $departemen)
                            <option value="{{ $departemen->id }}"
                                {{ old('departements_id', $employes->departements_id) == $departemen->id ? 'selected' : '' }}>
                                {{ $departemen->nama_departemen }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Jabatan -->
                <div>
                    <label for="positions_id" class="block text-gray-700 font-medium mb-1">Jabatan</label>
                    <select name="positions_id" id="positions_id" required
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <option value="">-- Pilih Jabatan --</option>
                        @foreach ($positions as $jabatan)
                            <option value="{{ $jabatan->id }}"
                                {{ old('positions_id', $employes->positions_id) == $jabatan->id ? 'selected' : '' }}>
                                {{ $jabatan->nama_jabatan }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Status -->
                <div>
                    <label for="status" class="block text-gray-700 font-medium mb-1">Status</label>
                    <select name="status" id="status"
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <option value="aktif" {{ old('status', $employes->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="nonaktif" {{ old('status', $employes->status) == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                    </select>
                </div>
            </div>

            <!-- Tombol -->
            <div class="flex justify-between mt-6">
                <a href="{{ route('employes.index') }}"
                    class="px-6 py-2 bg-gray-400 text-white rounded-lg shadow hover:bg-gray-500 transition duration-200">
                    Kembali
                </a>

                <button type="submit"
                    class="px-6 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition duration-200">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</body>

</html>
