@extends('Mitra.app')
@section('content')
<!-- Konten -->
<div class="p-10 relative max-w-7xl mx-auto">
    <!-- Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Kolom Kiri -->
        <div class="md:col-span-2 bg-white rounded-2xl p-6 shadow">
            <h2 class="text-green-800 font-semibold text-lg mb-4">🟢 Informasi Broadcast</h2>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Judul</label>
                    <input type="text" class="w-full border rounded px-3 py-1.5 text-sm" value="DIBUTUHKAN BIBIT TIMUN LEMON" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Nama Bibit</label>
                    <input type="text" class="w-full border rounded px-3 py-1.5 text-sm" value="Timun Lemon" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Jumlah</label>
                    <input type="number" class="w-full border rounded px-3 py-1.5 text-sm" value="25" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Lokasi</label>
                    <textarea rows="2" class="w-full border rounded px-3 py-1.5 text-sm">Perumahan Griya Alam Indah Blok C2 No.17, RT 003 / RW 006, Kelurahan Babatan, Kecamatan Wiyung, Kota Surabaya, Jawa Timur, 60227</textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Kontak</label>
                    <input type="text" class="w-full border rounded px-3 py-1.5 text-sm" value="wa.me/087712336190" />
                </div>
            </div>
        </div>

        <!-- Kolom Kanan -->
        <div class="bg-white rounded-2xl p-6 shadow h-fit">
            <h2 class="text-green-800 font-semibold text-lg mb-4">🟢 Tanggal kebutuhan</h2>
            <input type="date" class="w-full border rounded px-3 py-1.5 text-sm" value="2025-04-25" />
        </div>

        <!-- Informasi Khusus -->
        <div class="md:col-span-3 bg-white rounded-2xl p-6 shadow mt-6">
            <h2 class="text-green-800 font-semibold text-lg mb-4">🟢 Informasi Khusus</h2>
            <label class="block text-sm font-medium mb-1">Deskripsi</label>
            <textarea rows="3" class="w-full border rounded px-3 py-1.5 text-sm">Timun Hitam yang bibitnya masih kecil kecil dan kondisi bagus semua</textarea>
        </div>
    </div>

    <!-- Tombol Kirim -->
    <button class="fixed bottom-8 right-8 bg-green-800 text-white px-6 py-2 rounded-xl flex items-center gap-2 shadow-md hover:bg-green-900">
        Kirim
    </button>
</div>
@endsection
