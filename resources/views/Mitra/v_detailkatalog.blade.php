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

    <!-- Katalog -->
    <main class="w-3/4 p-10">
        <h2 class="text-3xl font-bold mb-6">Katalog</h2>

        <div class="border rounded-xl p-6 flex space-x-6 bg-white shadow">
            <img src="https://awsimages.detik.net.id/community/media/visual/2025/04/06/faizal-hussein-1743932549838_169.png?w=500&q=90">

            <div class="w-1/2">
                <p class="text-sm text-green-700 font-semibold">Tanaman Hias</p>
                <h3 class="text-xl font-bold">Bibit Lidah Mertua</h3>
                <p class="text-sm">Stok : 70</p>
                <p class="text-2xl font-bold mt-2 mb-4">Rp15.000</p>

                <p class="font-semibold">Deskripsi Produk:</p>
                <p class="text-sm mb-2">Bibit Monstera deliciosa siap tanam, daun besar bercorak unik berfungsi menambah estetika ruangan. Cocok sebagai dekorasi indoor maupun semi-outdoor. Perawatan mudah dan tahan di berbagai kondisi cahaya tidak langsung.</p>

                <p class="font-semibold mt-2">Spesifikasi:</p>
                <ul class="list-disc list-inside text-sm text-gray-700">
                    <li>Ukuran bibit: 15–25 cm (tinggi tanaman)</li>
                    <li>Media tanam: Polybag kecil, media cocopet & sekam bakar</li>
                    <li>Umur bibit: 1–2 bulan</li>
                    <li>Kondisi: Akar sehat dan aktif tumbuh</li>
                    <li>Siap pindah tanam ke pot besar</li>
                </ul>

                <p class="font-semibold mt-2">Petunjuk Perawatan:</p>
                <ul class="list-disc list-inside text-sm text-gray-700">
                    <li>Simpan di tempat teduh dengan cahaya tidak langsung</li>
                    <li>Siram 2–3 kali seminggu (anggap sampai becek)</li>
                    <li>Ganti pot setelah tanaman berumur 2–3 bulan untuk pertumbuhan optimal</li>
            </ul>
            </div>
        </div>

        <a href="{{route('v_katalog')}}" class="text-green-700 hover:underline text-sm mt-4 inline-block">&lt; kembali</a>
    </main>
</div>
@endsection
