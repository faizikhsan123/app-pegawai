<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Departemen</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-8 mt-10">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Form Edit Departemen</h1>
        </div>

        <!-- Form Edit -->
        <form action="{{ route('departements.update', $departements->id) }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label for="nama_departemen" class="block text-gray-700 font-semibold mb-2">Nama Departemen:</label>
                <input type="text" name="nama_departemen" id="nama_departemen"
                    value="{{ old('nama_departemen', $departements->nama_departemen) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
            </div>

            <div class="flex justify-end space-x-3">
                <a href="{{ route('departements.index') }}"
                    class="px-6 py-2 bg-gray-400 text-white rounded-lg shadow hover:bg-gray-500 transition duration-200">
                    Batal
                </a>
                <button type="submit"
                    class="px-6 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition duration-200">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</body>

</html>
