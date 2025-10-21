<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Departemen</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-8 mt-10">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Tambah Departemen</h1>
        </div>

        <!-- Form -->
        <form action="{{ route('departements.store') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Nama Departemen -->
            <div>
                <label for="nama_departemen" class="block text-gray-700 font-medium mb-2">Nama Departemen</label>
                <input type="text" name="nama_departemen" id="nama_departemen" required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="Masukkan nama departemen">
            </div>

            <!-- Tombol -->
            <div class="flex justify-between mt-8">
                <a href="{{ route('departements.index') }}"
                    class="px-6 py-2 bg-gray-500 text-white rounded-lg shadow hover:bg-gray-600 transition duration-200">
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
