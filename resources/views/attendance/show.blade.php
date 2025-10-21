<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Absensi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="max-w-3xl mx-auto mt-10 bg-white p-8 rounded-xl shadow-lg">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">📋 Detail Absensi</h1>
            <a href="{{ route('attendance.index') }}"
                class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-200">
                ← Kembali
            </a>
        </div>

        <!-- Detail Table -->
        <table class="w-full border border-gray-200 rounded-lg overflow-hidden">
            <tbody class="text-gray-700">
                <tr class="border-b border-gray-200">
                    <th class="bg-gray-100 px-4 py-2 text-left w-1/3">Nama Karyawan</th>
                    <td class="px-4 py-2">{{ $attendances->karyawan->nama_lengkap }}</td>
                </tr>
                <tr class="border-b border-gray-200">
                    <th class="bg-gray-100 px-4 py-2 text-left">Tanggal</th>
                    <td class="px-4 py-2">{{ $attendances->tanggal }}</td>
                </tr>
                <tr class="border-b border-gray-200">
                    <th class="bg-gray-100 px-4 py-2 text-left">Waktu Masuk</th>
                    <td class="px-4 py-2">{{ $attendances->waktu_masuk }}</td>
                </tr>
                <tr class="border-b border-gray-200">
                    <th class="bg-gray-100 px-4 py-2 text-left">Waktu Keluar</th>
                    <td class="px-4 py-2">{{ $attendances->waktu_keluar }}</td>
                </tr>
                <tr>
                    <th class="bg-gray-100 px-4 py-2 text-left">Status</th>
                    <td class="px-4 py-2">
                        <span class="px-3 py-1 rounded-full text-sm
                            @if($attendances->status_absensi === 'hadir') bg-green-100 text-green-700
                            @elseif($attendances->status_absensi === 'izin') bg-yellow-100 text-yellow-700
                            @else bg-red-100 text-red-700 @endif">
                            {{ ucfirst($attendances->status_absensi) }}
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
