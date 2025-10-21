@extends('master')

@section('title', 'Daftar Gaji Karyawan')

@section('content')
    <div class="max-w-6xl mx-auto mt-12 bg-white p-8 rounded-2xl shadow-lg">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6 border-b pb-4">
            <h1 class="text-2xl font-bold text-gray-800">💰 Daftar Gaji Karyawan</h1>
            <a href="{{ route('salaries.create') }}"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-200">
                + Tambah Gaji
            </a>
        </div>

        <!-- Tabel -->
        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-200 text-sm rounded-lg">
                <thead class="bg-blue-100 text-gray-700">
                    <tr>
                        <th class="py-3 px-4 text-left border-b border-gray-300 font-semibold">Nama Karyawan</th>
                        <th class="py-3 px-4 text-left border-b border-gray-300 font-semibold">Bulan</th>
                        <th class="py-3 px-4 text-left border-b border-gray-300 font-semibold">Gaji Pokok</th>
                        <th class="py-3 px-4 text-left border-b border-gray-300 font-semibold">Tunjangan</th>
                        <th class="py-3 px-4 text-left border-b border-gray-300 font-semibold">Potongan</th>
                        <th class="py-3 px-4 text-left border-b border-gray-300 font-semibold">Total Gaji</th>
                        <th class="py-3 px-4 text-center border-b border-gray-300 font-semibold w-56">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($salaries as $salarie)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="py-3 px-4 border-b text-gray-800">
                                {{ $salarie->karyawan->nama_lengkap }}
                            </td>
                            <td class="py-3 px-4 border-b text-gray-800">
                                {{ ucfirst($salarie->bulan) }}
                            </td>
                            <td class="py-3 px-4 border-b text-gray-800">
                                Rp {{ number_format($salarie->gaji_pokok, 0, ',', '.') }}
                            </td>
                            <td class="py-3 px-4 border-b text-gray-800">
                                Rp {{ number_format($salarie->tunjangan, 0, ',', '.') }}
                            </td>
                            <td class="py-3 px-4 border-b text-gray-800">
                                Rp {{ number_format($salarie->potongan, 0, ',', '.') }}
                            </td>
                            <td class="py-3 px-4 border-b font-semibold text-gray-900">
                                Rp {{ number_format($salarie->total_gaji, 0, ',', '.') }}
                            </td>
                            <td class="py-3 px-4 border-b text-center space-x-1">
                                <a href="{{ route('salaries.show', $salarie->id) }}"
                                    class="inline-block px-3 py-1 bg-green-500 text-white rounded-md hover:bg-green-600 transition">
                                    Detail
                                </a>
                                <a href="{{ route('salaries.edit', $salarie->id) }}"
                                    class="inline-block px-3 py-1 bg-yellow-400 text-white rounded-md hover:bg-yellow-500 transition">
                                    Edit
                                </a>
                                <form action="{{ route('salaries.destroy', $salarie->id) }}" method="post"
                                    class="inline">
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

                    @if ($salaries->isEmpty())
                        <tr>
                            <td colspan="7" class="py-4 text-center text-gray-500 italic">
                                Belum ada data gaji.
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
