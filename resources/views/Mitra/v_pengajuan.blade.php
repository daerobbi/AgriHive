@extends('Mitra.app')

@section('content')

<!-- Filter -->
<div class="bg-yellow-400 p-4 w-full">
    <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-4">
        <div class="flex flex-wrap gap-4 items-center">
            <span class="font-semibold">Cari Rekan Tani</span>
            <div class="flex gap-2 items-center">
                <label for="lokasi" class="font-medium">Lokasi :</label>
                <select id="lokasi" class="px-2 py-1 rounded">
                    <option>Surabaya</option>
                </select>
            </div>
            <div class="flex gap-2 items-center">
                <label for="jenis" class="font-medium">Jenis Bibit :</label>
                <select id="jenis" class="px-2 py-1 rounded">
                    <option>Tanaman Hias</option>
                </select>
            </div>
            <button class="bg-green-700 text-white px-4 py-1 rounded hover:bg-green-800">Cari</button>
        </div>
        <div class="ml-auto">
            <a href="{{ route('v_pengajuanterbaru') }}" class="text-sm font-semibold text-green-900 hover:underline">Lihat Pengajuan terbaru &gt;</a>
        </div>
    </div>
</div>

<!-- Daftar Rekan Tani -->
<div class="max-w-7xl mx-auto mt-8 bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-6 text-center">Daftar Rekan Tani</h2>

    <!-- Card List -->
    <div class="divide-y divide-gray-300 border-t border-b">
        <!-- Item -->
        <div class="flex justify-between items-start py-4">
            <div>
                <h3 class="font-bold text-lg">Gardenia Agro</h3>
                <p>Lokasi : Surabaya</p>
                <p>Jenis Bibit : Tanaman Herbal dan Organik, Tanaman Hias</p>
            </div>
            <a href="#" class="text-green-700 font-semibold hover:underline text-sm mt-1 whitespace-nowrap">Lihat Profil &gt;</a>
        </div>

        <div class="flex justify-between items-start py-4">
            <div>
                <h3 class="font-bold text-lg">Hijau Alam Makmur</h3>
                <p>Lokasi : Surabaya</p>
                <p>Jenis Bibit : Tanaman Herbal dan Organik, Tanaman Hias</p>
            </div>
            <a href="{{route('v_katalog')}}" class="text-green-700 font-semibold hover:underline text-sm mt-1 whitespace-nowrap">Lihat Profil &gt;</a>
        </div>

        <div class="flex justify-between items-start py-4">
            <div>
                <h3 class="font-bold text-lg">Citra Tanam Raya</h3>
                <p>Lokasi : Surabaya</p>
                <p>Jenis Bibit : Tanaman Herbal dan Organik, Tanaman Hias</p>
            </div>
            <a href="#" class="text-green-700 font-semibold hover:underline text-sm mt-1 whitespace-nowrap">Lihat Profil &gt;</a>
        </div>

        <div class="flex justify-between items-start py-4">
            <div>
                <h3 class="font-bold text-lg">PT Agrifolia</h3>
                <p>Lokasi : Surabaya</p>
                <p>Jenis Bibit : Tanaman Herbal dan Organik, Tanaman Hias</p>
            </div>
            <a href="#" class="text-green-700 font-semibold hover:underline text-sm mt-1 whitespace-nowrap">Lihat Profil &gt;</a>
        </div>

        <div class="flex justify-between items-start py-4">
            <div>
                <h3 class="font-bold text-lg">Roemah Hias</h3>
                <p>Lokasi : Surabaya</p>
                <p>Jenis Bibit : Tanaman Herbal dan Organik, Tanaman Hias</p>
            </div>
            <a href="#" class="text-green-700 font-semibold hover:underline text-sm mt-1 whitespace-nowrap">Lihat Profil &gt;</a>
        </div>
    </div>

    <!-- Back Link -->
    <div class="mt-6">
        <a href="#" class="text-green-700 font-semibold hover:underline text-sm">&lt; kembali</a>
    </div>
</div>

@endsection
