@extends('rekantani.app')

@section('content')
<!-- Tambahkan Alpine.js jika belum -->
<style>
    [x-cloak] { display: none !important; }
</style>
<script src="//unpkg.com/alpinejs" defer></script>

<div x-data="{ modalHapus: false, modalSukses: false }">

    <!-- Main Content -->
    <div class="max-w-6xl mx-auto mt-8 bg-white p-8 rounded-md shadow">
        <h1 class="text-3xl font-bold mb-6 text-center">Katalog Baru</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Gambar -->
            <div class="flex flex-col items-center">
                <div class="w-64 h-64 border-2 border-gray-300 rounded-md flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 16l4-4a3 3 0 014 0l5 5a3 3 0 004 0l4-4M3 16v4a1 1 0 001 1h16a1 1 0 001-1v-4"/>
                    </svg>
                </div>
                <button class="mt-4 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 flex items-center gap-2">
                    Upload Gambar Produk
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a1 1 0 001 1h14a1 1 0 001-1v-1m-4-4l-4-4m0 0l-4 4m4-4v12"/>
                    </svg>
                </button>
            </div>

            <!-- Form -->
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium">Jenis Bibit</label>
                    <input type="text" class="w-full border border-gray-300 rounded px-3 py-2 mt-1"/>
                </div>
                <div>
                    <label class="block text-sm font-medium">Nama Bibit</label>
                    <input type="text" class="w-full border border-gray-300 rounded px-3 py-2 mt-1"/>
                </div>
                <div>
                    <label class="block text-sm font-medium">Stok</label>
                    <input type="number" class="w-full border border-gray-300 rounded px-3 py-2 mt-1"/>
                </div>
                <div>
                    <label class="block text-sm font-medium">Harga</label>
                    <input type="text" class="w-full border border-gray-300 rounded px-3 py-2 mt-1"/>
                </div>
                <div>
                    <label class="block text-sm font-medium">Deskripsi</label>
                    <textarea rows="5" class="w-full border border-gray-300 rounded px-3 py-2 mt-1"></textarea>
                </div>
            </div>
        </div>

        <!-- Tombol -->
        <div class="flex justify-end mt-6 space-x-4">
            <a href="/rekantani/katalog" class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded">Batal</a>
            <button @click="modalHapus = true" class="bg-green-700 hover:bg-green-800 text-white px-6 py-2 rounded">Simpan</button>
        </div>
    </div>

    <!-- Modal Konfirmasi Hapus -->
    <div x-show="modalHapus" x-transition x-cloak class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
        <div class="bg-white rounded-3xl p-8 w-full max-w-md text-center shadow-lg" @click.away="modalHapus = false">
            <h2 class="text-xl font-medium text-gray-700 mb-8">Yakin Ingin Menambah Katalog Ini?</h2>
            <div class="flex justify-center gap-6">
                <button @click="modalHapus = false" class="bg-red-600 text-white px-6 py-2 rounded-full font-semibold hover:bg-red-700">Batal</button>
                <button
                    @click="
                        modalHapus = false;
                        setTimeout(() => modalSukses = true, 300);
                        setTimeout(() => modalSukses = false, 1800);
                    "
                        class="bg-green-800 text-white px-6 py-2 rounded-full font-semibold hover:bg-green-900"
                >
                    Yakin
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Sukses -->
    <div x-show="modalSukses" x-transition x-cloak class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
        <div class="bg-white rounded-3xl p-8 w-full max-w-md text-center shadow-lg">
            <h2 class="text-xl font-medium text-gray-700 mb-6">Katalog berhasil ditambahkan</h2>
            <div class="flex justify-center">
                <div class="bg-green-800 rounded-full w-24 h-24 flex items-center justify-center">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
