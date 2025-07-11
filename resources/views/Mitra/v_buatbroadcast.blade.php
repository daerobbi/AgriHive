@extends('Mitra.app')

@section('content')

<!-- Konten -->
<div class="p-10 relative max-w-7xl mx-auto" x-data="{ openModal: false }">
    <!-- Grid -->
    <form action="{{ route('agen.broadcast.store') }}" method="POST">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Kolom Kiri -->
            <div class="md:col-span-2 bg-white rounded-2xl p-6 shadow">
                <h2 class="text-green-800 font-semibold text-lg mb-4">🟢 Informasi Broadcast</h2>
                <div class="space-y-4">
                    <!-- Judul -->
                    <div>
                        <label class="block text-sm font-medium mb-1">Judul</label>
                        <input type="text" name="judul_broadcast" class="w-full border rounded px-3 py-1.5 text-sm" value="{{ old('judul_broadcast') }}" placeholder="Masukkan judul broadcast" required />
                        @error('judul_broadcast') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <!-- Nama Bibit -->
                    <div>
                        <label class="block text-sm font-medium mb-1">Nama Bibit</label>
                        <input type="text" name="nama_bibit" class="w-full border rounded px-3 py-1.5 text-sm" value="{{ old('nama_bibit') }}" placeholder="Masukkan nama bibit" required />
                        @error('nama_bibit') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <!-- Jumlah -->
                    <div>
                        <label class="block text-sm font-medium mb-1">Jumlah</label>
                        <input type="number" name="jumlah_bibit" class="w-full border rounded px-3 py-1.5 text-sm" value="{{ old('jumlah_bibit') }}" placeholder="Masukkan jumlah bibit" required min="1" />
                        @error('jumlah_bibit') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <!-- Lokasi -->
                    <div>
                        <label class="block text-sm font-medium mb-1">Lokasi</label>
                        <textarea name="lokasi" rows="2" class="w-full border rounded px-3 py-1.5 text-sm" placeholder="Masukkan alamat anda" required>{{ old('lokasi') }}</textarea>
                        @error('lokasi') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <!-- Kontak -->
                    <div>
                        <label class="block text-sm font-medium mb-1">Kontak</label>
                        <input type="number" name="kontak" class="w-full border rounded px-3 py-1.5 text-sm" value="{{ old('kontak') }}" placeholder="masukan nomor dengan format : 628597413214" required />
                        @error('kontak') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan -->
            <div class="bg-white rounded-2xl p-6 shadow h-fit">
                <h2 class="text-green-800 font-semibold text-lg mb-4">🟢 Tanggal kebutuhan</h2>
                <input type="date" name="tanggal_kebutuhan" class="w-full border rounded px-3 py-1.5 text-sm" value="{{ old('tanggal_kebutuhan') }}" required />
                @error('tanggal_kebutuhan') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Informasi Khusus -->
            <div class="md:col-span-3 bg-white rounded-2xl p-6 shadow mt-6">
                <h2 class="text-green-800 font-semibold text-lg mb-4">🟢 Informasi Khusus</h2>
                <label class="block text-sm font-medium mb-1">Deskripsi</label>
                <textarea name="deskripsi" rows="3" class="w-full border rounded px-3 py-1.5 text-sm" placeholder="Masukkan deskripsi khusus" required>{{ old('deskripsi') }}</textarea>
                @error('deskripsi') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Tombol Kirim -->
        <div class="text-center mt-6">
            <button type="button" @click="openModal = true" class="bg-green-800 text-white px-6 py-2 rounded-xl flex items-center gap-2 shadow-md hover:bg-green-900">
                Kirim
            </button>
        </div>

        <!-- Modal Konfirmasi -->
        <div x-show="openModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50" x-transition>
            <div class="bg-white p-6 rounded-2xl text-center shadow-lg max-w-md w-full">
                <p class="text-lg mb-6">Yakin ingin mengirimkan broadcast?</p>
                <div class="flex justify-center gap-4">
                    <button
                        type="button"
                        @click="openModal = false; $el.closest('form').submit()"
                        class="bg-green-700 text-white px-6 py-2 rounded-full">
                        Yakin
                    </button>
                    <button type="button" @click="openModal = false" class="bg-red-700 text-white px-6 py-2 rounded-full">Batal</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
