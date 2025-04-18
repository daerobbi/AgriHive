@extends('mitra.app')
@section('content')

<div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-1/4 h-screen sticky top-0 bg-gray-200 p-6 flex flex-col items-center shadow-md min-h-full">
        <img src="https://awsimages.detik.net.id/community/media/visual/2025/04/06/faizal-hussein-1743932549838_169.png?w=500&q=90" alt="Petani" class="rounded-full w-40 h-40 object-cover mb-4">
        <h2 class="text-xl font-bold mb-2">Gardenia Agro</h2>
        <p class="text-sm text-gray-600 mb-1">Lokasi : Surabaya</p>
        <p class="text-sm text-gray-600 text-center mb-4">Jenis Bibit : Tanaman Herbal dan Organik, Tanaman Hias</p>
    </aside>

    <!-- Main Content -->
    <main class="w-3/4 p-6">
        <h2 class="text-2xl font-bold mb-4">Katalog</h2>
    <div class="grid grid-cols-3 gap-4">
        <!-- Card Bibit -->
        <a href="{{route('v_detailkatalog')}}" class="block hover:shadow-lg hover:ring-2 hover:ring-green-300 transition duration-200 rounded-lg">
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="https://awsimages.detik.net.id/community/media/visual/2025/04/09/ranea-ezreen-pemeran-dewi-dalam-serial-bidaah-1744180253175.jpeg?w=600&q=90"
                class="w-full h-32 object-cover rounded mb-2">
                    <p class="text-xs text-green-600">Tanaman Hias</p>
                    <p class="font-semibold">Bibit Aglaonema</p>
                    <p class="text-sm text-gray-600">Stok: 50</p>
                    <p class="font-bold">Rp9.000</p>
            </div>
        </a>

        <a href="/detail/aglaonema" class="block hover:shadow-lg hover:ring-2 hover:ring-green-300 transition duration-200 rounded-lg">
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="https://awsimages.detik.net.id/community/media/visual/2025/04/09/ranea-ezreen-pemeran-dewi-dalam-serial-bidaah-1744180253175.jpeg?w=600&q=90"
                class="w-full h-32 object-cover rounded mb-2">
                    <p class="text-xs text-green-600">Tanaman Hias</p>
                    <p class="font-semibold">Bibit Aglaonema</p>
                    <p class="text-sm text-gray-600">Stok: 50</p>
                    <p class="font-bold">Rp9.000</p>
            </div>
        </a>

        <a href="/detail/aglaonema" class="block hover:shadow-lg hover:ring-2 hover:ring-green-300 transition duration-200 rounded-lg">
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="https://awsimages.detik.net.id/community/media/visual/2025/04/09/ranea-ezreen-pemeran-dewi-dalam-serial-bidaah-1744180253175.jpeg?w=600&q=90"
                class="w-full h-32 object-cover rounded mb-2">
                    <p class="text-xs text-green-600">Tanaman Hias</p>
                    <p class="font-semibold">Bibit Aglaonema</p>
                    <p class="text-sm text-gray-600">Stok: 50</p>
                    <p class="font-bold">Rp9.000</p>
            </div>
        </a>

        <a href="/detail/aglaonema" class="block hover:shadow-lg hover:ring-2 hover:ring-green-300 transition duration-200 rounded-lg">
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="https://awsimages.detik.net.id/community/media/visual/2025/04/09/ranea-ezreen-pemeran-dewi-dalam-serial-bidaah-1744180253175.jpeg?w=600&q=90"
                class="w-full h-32 object-cover rounded mb-2">
                    <p class="text-xs text-green-600">Tanaman Hias</p>
                    <p class="font-semibold">Bibit Aglaonema</p>
                    <p class="text-sm text-gray-600">Stok: 50</p>
                    <p class="font-bold">Rp9.000</p>
            </div>
        </a>

        <a href="/detail/aglaonema" class="block hover:shadow-lg hover:ring-2 hover:ring-green-300 transition duration-200 rounded-lg">
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="https://awsimages.detik.net.id/community/media/visual/2025/04/09/ranea-ezreen-pemeran-dewi-dalam-serial-bidaah-1744180253175.jpeg?w=600&q=90"
                class="w-full h-32 object-cover rounded mb-2">
                    <p class="text-xs text-green-600">Tanaman Hias</p>
                    <p class="font-semibold">Bibit Aglaonema</p>
                    <p class="text-sm text-gray-600">Stok: 50</p>
                    <p class="font-bold">Rp9.000</p>
            </div>
        </a>

    </div>

    <!-- Button -->
    <div class="flex justify-between mt-6">
        <a href="/pengajuan" class="text-green-700 text-sm underline">&lt; kembali</a>
        <a href="{{route('v_formpengajuan')}}" class="bg-green-700 hover:bg-green-800 hover:shadow-lg hover:scale-105 transform text-white px-4 py-2 rounded-lg flex items-center space-x-2 transition duration-200">
            <span class="text-xl font-bold">+</span>
            <span>Buat Pengajuan</span>
        </a>
    </div>
    </main>
</div>
@endsection
