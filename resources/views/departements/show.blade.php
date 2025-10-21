<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Departemen</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-8 mt-10">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Detail Departemen</h1>
        </div>

        <!-- Detail Card -->
        <div class="border border-gray-200 rounded-lg overflow-hidden">
            <table class="w-full">
                <tr class="bg-blue-600 text-white">
                    <th class="px-4 py-3 text-left">Nama Departemen</th>
                    <td class="px-4 py-3 bg-white text-gray-800">{{ $departement->nama_departemen }}</td>
                </tr>
            </table>
        </div>

        <!-- Tombol Kembali -->
        <div class="flex justify-end mt-6">
            <a href="{{ route('departements.index') }}"
                class="px-6 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition duration-200">
                Kembali ke Daftar
            </a>
        </div>
    </div>
</body>

</html>
