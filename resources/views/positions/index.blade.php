@extends('master')

@section('title', 'Daftar Jabatan')

@section('content')
    <div class="max-w-5xl mx-auto mt-12 bg-white p-8 rounded-2xl shadow-lg">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6 border-b pb-4">
            <h1 class="text-2xl font-bold text-gray-800">📋 Daftar Jabatan</h1>
            <a href="{{ route('positions.create') }}"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-200">
                + Tambah Jabatan
            </a>
        </div>

        <!-- Tabel -->
        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-200 rounded-lg text-sm">
                <thead class="bg-blue-100 text-gray-700">
                    <tr>
                        <th class="py-3 px-4 text-left border-b border-gray-300 font-semibold">Nama Jabatan</th>
                        <th class="py-3 px-4 text-left border-b border-gray-300 font-semibold">Gaji Pokok</th>
                        <th class="py-3 px-4 text-center border-b border-gray-300 font-semibold w-56">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($position as $positions)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="py-3 px-4 border-b border-gray-200 text-gray-800">
                                {{ $positions->nama_jabatan }}
                            </td>
                            <td class="py-3 px-4 border-b border-gray-200 text-gray-800">
                                Rp {{ number_format($positions->gaji_pokok, 0, ',', '.') }}
                            </td>
                            <td class="py-3 px-4 border-b border-gray-200 text-center space-x-1">
                                <a href="{{ route('positions.show', $positions->id) }}"
                                    class="inline-block px-3 py-1 bg-green-500 text-white rounded-md hover:bg-green-600 transition">
                                    Detail
                                </a>
                                <a href="{{ route('positions.edit', $positions->id) }}"
                                    class="inline-block px-3 py-1 bg-yellow-400 text-white rounded-md hover:bg-yellow-500 transition">
                                    Edit
                                </a>
                                <form action="{{ route('positions.destroy', $positions->id) }}" method="post" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Yakin ingin dihapus?')"
                                        class="inline-block px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 transition">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    @if ($position->isEmpty())
                        <tr>
                            <td colspan="3" class="py-4 text-center text-gray-500 italic">
                                Belum ada data jabatan.
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
