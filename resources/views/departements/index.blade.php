@extends('master')

@section('title', 'Daftar Departemen')

@section('content')
    <div class="max-w-5xl mx-auto bg-white shadow-lg rounded-xl p-8 mt-10">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Daftar Departemen</h1>
            <a href="{{ route('departements.create') }}"
                class="px-5 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition duration-200">
                + Tambah Departemen
            </a>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full border border-gray-200 rounded-lg">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="px-4 py-2 text-left">No</th>
                        <th class="px-4 py-2 text-left">Nama Departemen</th>
                        <th class="px-4 py-2 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($departement as $index => $departements)
                        <tr class="{{ $loop->even ? 'bg-gray-50' : '' }}">
                            <td class="px-4 py-2 text-gray-800">{{ $index + 1 }}</td>
                            <td class="px-4 py-2 text-gray-800">{{ $departements->nama_departemen }}</td>
                            <td class="px-4 py-2 flex justify-center gap-3">
                                <!-- Detail -->
                                <a href="{{ route('departements.show', $departements->id) }}"
                                    class="px-3 py-1 bg-green-500 text-white rounded-lg hover:bg-green-600 transition">
                                    Detail
                                </a>

                                <!-- Edit -->
                                <a href="{{ route('departements.edit', $departements->id) }}"
                                    class="px-3 py-1 bg-yellow-400 text-white rounded-lg hover:bg-yellow-500 transition">
                                    Edit
                                </a>

                                <!-- Hapus -->
                                <form action="{{ route('departements.destroy', $departements->id) }}" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus departemen ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="px-3 py-1 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center py-4 text-gray-500">
                                Tidak ada data departemen.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
