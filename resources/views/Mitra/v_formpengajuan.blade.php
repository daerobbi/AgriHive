@extends('Mitra.app')
@section('content')
<script src="//unpkg.com/alpinejs" defer></script>
<style>
    [x-cloak] { display: none !important; }
</style>

<!-- Sidebar + Form -->
<div class="flex min-h-screen" x-data="{ showConfirm: false, showSuccess: false }">
    <!-- Sidebar -->
    <aside class="w-1/4 h-screen sticky top-0 bg-gray-200 p-6 flex flex-col items-center shadow-md min-h-full">
        <img src="https://awsimages.detik.net.id/community/media/visual/2025/04/06/faizal-hussein-1743932549838_169.png?w=500&q=90" alt="Petani" class="rounded-full w-40 h-40 object-cover mb-4">
        <h2 class="text-xl font-bold mb-2">Gardenia Agro</h2>
        <p class="text-sm text-gray-600 mb-1">Lokasi : Surabaya</p>
        <p class="text-sm text-gray-600 text-center mb-4">Jenis Bibit : Tanaman Herbal dan Organik, Tanaman Hias</p>
    </aside>

    <!-- Form Pengajuan -->
    <main class="flex-1 p-10">
        <h1 class="text-2xl font-bold mb-6">Form Pengajuan</h1>
        <form @submit.prevent="showConfirm = true" class="space-y-5">
            <!-- Input Fields -->
            <div>
                <label class="block text-sm font-medium">Jenis Bibit</label>
                <input type="text" value="Tanaman Hias" class="mt-1 w-full border rounded-md p-2" />
            </div>

            <div>
                <label class="block text-sm font-medium">Nama Bibit</label>
                <input type="text" value="Bibit Lidah Mertua" class="mt-1 w-full border rounded-md p-2" />
            </div>

            <div>
                <label class="block text-sm font-medium">Jumlah Bibit</label>
                <input type="number" value="20" class="mt-1 w-full border rounded-md p-2" />
            </div>

            <div>
                <label class="block text-sm font-medium">Tanggal Kebutuhan Bibit</label>
                <input type="text" value="24/04/2025" class="mt-1 w-full border rounded-md p-2" />
            </div>

            <div>
                <label class="block text-sm font-medium">Jadwal Pengiriman Bibit</label>
                <input type="text" value="17/04/2025" class="mt-1 w-full border rounded-md p-2" />
            </div>

            <div>
                <label class="block text-sm font-medium">Lokasi Pengiriman Bibit</label>
                <textarea class="mt-1 w-full border rounded-md p-2" rows="2">Perumahan Griya Alam Indah Blok C2 No.17, RT 003 / RW 006, Kelurahan Babatan, Kecamatan Wiyung, Kota Surabaya, Jawa Timur, 60227</textarea>
            </div>

            <div>
                <label class="block text-sm font-medium">Keterangan</label>
                <textarea class="mt-1 w-full border rounded-md p-2" rows="3">Mohon pilihkan bibit lidah mertua yang daunnya sudah tegak dan sehat. Tolong juga dipacking dengan aman karena pengiriman ke luar kota.</textarea>
            </div>

            <div>
                <label class="block text-sm font-medium">Kontak Narahubung</label>
                <input type="text" value="wa.me/6287712336190" class="mt-1 w-full border rounded-md p-2" />
            </div>

            <!-- Tombol Aksi -->
            <div class="flex justify-between items-center mt-6">
                <a href="{{ route('v_katalog') }}" class="text-green-600 hover:underline text-sm">&lt; kembali</a>
                <button type="submit" class="bg-green-700 hover:bg-green-800 text-white font-semibold px-6 py-2 rounded-full">Kirim Pengajuan</button>
            </div>
        </form>
    </main>

    <!-- Modal Konfirmasi -->
    <div x-show="showConfirm" x-cloak class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" x-transition>
        <div class="bg-gray-300 rounded-[50px] p-10 text-center">
            <h2 class="text-3xl font-semibold text-gray-700 mb-8">Yakin Mengirimkan Ajuan?</h2>
            <div class="flex justify-center gap-8">
                <button @click="showConfirm = false" class="bg-red-600 hover:bg-red-700 text-white font-bold px-8 py-2 rounded-full">Batal</button>
                <button
                    @click="showConfirm = false; showSuccess = true; setTimeout(() => showSuccess = false, 1000)"
                    class="bg-green-700 hover:bg-green-800 text-white font-bold px-8 py-2 rounded-full"
                >
                    Yakin
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Sukses -->
    <div x-show="showSuccess" x-cloak class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" x-transition>
        <div class="bg-gray-300 rounded-[50px] p-10 text-center">
            <h2 class="text-3xl font-semibold text-gray-700 mb-8">Pengajuan Terkirim !</h2>
            <div class="flex justify-center">
                <div class="bg-green-800 w-28 h-28 rounded-full flex items-center justify-center">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" stroke-width="8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
