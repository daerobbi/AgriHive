@extends('rekantani.app')
@section('content')
<main class="max-w-4xl mx-auto p-6 ml-6">
    <h2 class="text-3xl font-bold mb-4">Pengajuan</h2>
    <div class="space-y-1 mb-6 border-b pb-4">
        <p><strong>Pengajuan Oleh</strong> : Multi Agro Nusa</p>
        <p><strong>Kepada</strong> : Gardenia Agro</p>
        <p><strong>Tanggal Pengajuan</strong> : 30/04/2025</p>
        <p><strong>Status Pengajuan</strong> : <span class="text-green-600 font-semibold">✓ Diterima</span></p>
        <p><strong>Status Pembayaran</strong> : <span class="text-green-500">✔ Terbayar</span></p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6 border-b pb-4">
        <div>
            <p class="text-sm text-gray-500">Jenis Bibit</p>
            <p class="font-medium">Lidah Mertua</p>
        </div>
        <div>
            <p class="text-sm text-gray-500">Nama Bibit</p>
            <p class="font-medium">Tanaman Hias</p>
        </div>
        <div>
            <p class="text-sm text-gray-500">Jumlah Bibit</p>
            <p class="font-medium">20</p>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6 border-b pb-4">
        <div>
            <p class="text-sm text-gray-500">Tanggal Kebutuhan Bibit</p>
            <p class="font-medium">24/04/2025</p>
        </div>
        <div>
            <p class="text-sm text-gray-500">Jadwal Pengiriman Bibit</p>
            <p class="font-medium">17/04/2025</p>
        </div>
    </div>

    <div class="mb-6 border-b pb-4">
        <p class="text-sm text-gray-500">Lokasi Pengiriman Bibit</p>
        <p class="font-medium">Perumahan Griya Alam Indah Blok C2 No.17, RT 003 / RW 006, Kelurahan Babatan, Kecamatan Wiyung, Kota Surabaya, Jawa Timur, 60227</p>
    </div>

    <div class="mb-6 border-b pb-4">
        <p class="text-sm text-gray-500">Keterangan</p>
        <p class="font-medium">Mohon pilihkan bibit lidah mertua yang daunnya sudah tegak dan sehat. Tolong juga dipacking dengan aman karena pengiriman ke luar kota.</p>
    </div>

    <div class="mb-6 border-b pb-4">
        <p class="text-sm text-gray-500">Kontak Narahubung</p>
        <p class="font-medium">wa.me/6287806650838</p>
    </div>

    <div class="mb-6">
        <p class="text-sm text-gray-500">Bukti Transfer</p>
        <div class="space-x-4">
            <button class="bg-gray-400 text-white px-4 py-2 rounded">Tagihan</button>
            <button class="bg-green-400 text-white px-4 py-2 rounded">Bukti TF</button>
        </div>
    </div>
    <div class="mt-4 text-right">
        <a href="/admin/pengajuan" class="text-green-600 hover:underline text-sm">&lt; kembali</a>
    </div>
</main>
@endsection
