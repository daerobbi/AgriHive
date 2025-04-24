@extends('Mitra.app')
@section('content')

<div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-1/4 h-screen sticky top-0 bg-gray-200 p-6 flex flex-col items-center shadow-md min-h-full">
        <img src="{{ $rekan->foto_profil ?? '#' }}" alt="Rekan Tani" class="rounded-full w-40 h-40 object-cover mb-4">
        <h2 class="text-xl font-bold mb-2">{{ $rekan->nama_rekan }}</h2>
        <p class="text-sm text-gray-600 mb-1">Lokasi : {{ $rekan->kota->nama_kota ?? '-' }}</p>
        <p class="text-sm text-gray-600 text-center mb-1">
            Jenis Bibit:
            {{ $rekan->bibit->pluck('JenisBibit.jenis_bibit')->unique()->implode(', ') }}
        </p>
        <p class="text-sm text-gray-600 text-center mb-1">Kontak : {{ $rekan->no_hp }}</p>
        <p class="text-sm text-gray-600 text-center mb-1">Alamat : {{ $rekan->alamat }}</p>
    </aside>

    <!-- Main Content -->
    <main class="w-3/4 p-6">
        <h2 class="text-2xl font-bold mb-4">Katalog Bibit</h2>

        <div class="grid grid-cols-6 gap-4">
            @forelse ($rekan->bibit as $bibit)
                <a href="{{ route('v_detailkatalog', ['bibit_id' => $bibit->id]) }}"
                    class="block hover:shadow-lg hover:ring-2 hover:ring-green-300 transition duration-200 rounded-lg">
                    <div class="bg-white p-4 rounded-lg shadow">
                        <img src="{{ asset('storage/' . $bibit->foto_bibit) }}"
                                class="w-full h-32 object-cover rounded mb-2">
                        <p class="text-xs text-green-600">{{ $bibit->JenisBibit->jenis_bibit ?? 'Tidak diketahui' }}</p>
                        <p class="font-semibold">{{ $bibit->nama_bibit }}</p>
                        <p class="text-sm text-gray-600">Stok: {{ $bibit->stok }}</p>
                        <p class="font-bold">Rp{{ number_format($bibit->harga, 0, ',', '.') }}</p>
                    </div>
                </a>
            @empty
                <p class="text-gray-500">Belum ada bibit yang ditampilkan.</p>
            @endforelse
        </div>

        <!-- Button -->
        <div class="flex justify-between mt-6">
            <a href="/agen/pengajuan"
                class="text-green-700 text-sm hover:text-green-900 hover:font-semibold transition duration-200 hover:underline">&lt; kembali</a>
            <a href="{{ route('v_formpengajuan') }}"
                class="bg-green-700 hover:bg-green-800 hover:shadow-lg hover:scale-105 transform text-white px-4 py-2 rounded-lg flex items-center space-x-2 transition duration-200">
                <span class="text-xl font-bold">+</span>
                <span>Buat Pengajuan</span>
            </a>
        </div>
    </main>
</div>

@endsection
