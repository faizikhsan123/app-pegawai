<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pegawai</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-8 mt-10">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Detail Pegawai</h1>
        </div>

        <!-- Detail Table -->
        <div class="overflow-x-auto">
            <table class="w-full border border-gray-200 rounded-lg">
                <tbody>
                    <tr class="bg-gray-50">
                        <th class="text-left px-4 py-2 w-1/3 text-gray-700">Nama Lengkap</th>
                        <td class="px-4 py-2 text-gray-800">{{ $employes->nama_lengkap }}</td>
                    </tr>
                    <tr>
                        <th class="text-left px-4 py-2 text-gray-700">Email</th>
                        <td class="px-4 py-2 text-gray-800">{{ $employes->email }}</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <th class="text-left px-4 py-2 text-gray-700">Nomor Telepon</th>
                        <td class="px-4 py-2 text-gray-800">{{ $employes->nomor_telepon }}</td>
                    </tr>
                    <tr>
                        <th class="text-left px-4 py-2 text-gray-700">Tanggal Lahir</th>
                        <td class="px-4 py-2 text-gray-800">{{ $employes->tanggal_lahir }}</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <th class="text-left px-4 py-2 text-gray-700">Alamat Lengkap</th>
                        <td class="px-4 py-2 text-gray-800">{{ $employes->alamat }}</td>
                    </tr>
                    <tr>
                        <th class="text-left px-4 py-2 text-gray-700">Tanggal Masuk</th>
                        <td class="px-4 py-2 text-gray-800">{{ $employes->tanggal_masuk }}</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <th class="text-left px-4 py-2 text-gray-700">Status</th>
                        <td class="px-4 py-2 text-gray-800">
                            <span class="px-2 py-1 rounded-lg text-white 
                                {{ $employes->status == 'aktif' ? 'bg-green-500' : 'bg-red-500' }}">
                                {{ ucfirst($employes->status) }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-left px-4 py-2 text-gray-700">Departemen</th>
                        <td class="px-4 py-2 text-gray-800">{{ $employes->departemen->nama_departemen }}</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <th class="text-left px-4 py-2 text-gray-700">Jabatan</th>
                        <td class="px-4 py-2 text-gray-800">{{ $employes->jabatan->nama_jabatan }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Tombol Kembali -->
        <div class="flex justify-start mt-6">
            <a href="{{ route('employes.index') }}"
                class="px-6 py-2 bg-gray-400 text-white rounded-lg shadow hover:bg-gray-500 transition duration-200">
                ← Kembali
            </a>
        </div>
    </div>
</body>

</html>
