@extends('rekantani.app')
@section('content')
<div class="px-10 py-6">
    <!-- Judul Halaman -->
    <h1 class="text-3xl font-bold mb-6">Katalog</h1>

    <!-- Card Detail Produk -->
    <div class="border rounded-xl p-8 flex gap-8 items-start bg-white shadow">
        <!-- Gambar -->
        <img
            src="https://images.theconversation.com/files/496952/original/file-20221123-16-cg0nlw.jpg?ixlib=rb-4.1.0&q=20&auto=format&w=320&fit=clip&dpr=2&usm=12&cs=strip"
            alt="Bibit Lidah Mertua"
            class="rounded-lg w-[360px] h-[360px] object-cover">

        <!-- Detail -->
        <div class="flex-1">
            <div class="text-green-700 font-medium mb-1">Tanaman Hias</div>
            <h2 class="text-2xl font-semibold">Bibit Lidah Mertua</h2>
            <div class="text-gray-500 text-sm mb-2">Stok : 70</div>
            <div class="text-2xl font-bold text-black mb-6">Rp15.000</div>

        <!-- Deskripsi -->
            <div class="text-sm text-gray-700 leading-relaxed space-y-4">
                <div>
                    <strong>Deskripsi Produk:</strong><br />
                    Bibit Monstera deliciosa siap tanam, daun besar bercorak unik berlubang yang menambah estetika ruangan.
                    Cocok sebagai dekorasi indoor maupun semi-outdoor. Perawatan mudah dan tahan di berbagai kondisi cahaya
                    tidak langsung.
                </div>

                <div>
                    <strong>Spesifikasi:</strong>
                    <ul class="list-disc ml-5">
                        <li>Ukuran bibit : ± 15–25 cm (tinggi tanaman)</li>
                        <li>Media tanam: Polybag kecil, media cocopeat & sekam bakar</li>
                        <li>Umur bibit: 1–2 bulan</li>
                        <li>Kondisi: Akar sehat dan aktif tumbuh</li>
                        <li>Siap pindah tanam ke pot besar</li>
                    </ul>
                </div>

                <div>
                <strong>Petunjuk Perawatan:</strong>
                <ul class="list-disc ml-5">
                    <li>Simpan di tempat teduh dengan cahaya tidak langsung</li>
                    <li>Siram 2–3 kali seminggu (jangan sampai becek)</li>
                    <li>Ganti pot setelah tanaman berumur 2–3 bulan untuk pertumbuhan optimal</li>
                </ul>
                </div>
            </div>

        <!-- Tombol -->
            <div class="flex gap-3 mt-8">
                <button onclick="openModalHapus('')" class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-full font-semibold">
                    Hapus
                </button>
                <a href="" class="bg-green-700 hover:bg-green-800 text-white px-6 py-2 rounded-full font-semibold">Edit</a>
            </div>
        </div>
    </div>
</div>
<!-- Modal Konfirmasi Hapus -->
<div id="modalHapus" class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-3xl p-8 w-full max-w-md text-center shadow-lg">
        <h2 class="text-xl font-medium text-gray-700 mb-8">Yakin Menghapus Katalog Ini ?</h2>
        <div class="flex justify-center gap-6">
            <button onclick="closeModalHapus()" class="bg-red-600 text-white px-6 py-2 rounded-full font-semibold hover:bg-red-700">Batal</button>
            <button onclick="hapusKatalog()" class="bg-green-800 text-white px-6 py-2 rounded-full font-semibold hover:bg-green-900">Yakin</button>
        </div>
    </div>
</div>

<!-- Modal Sukses -->
<div id="modalSukses" class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-3xl p-8 w-full max-w-md text-center shadow-lg">
        <h2 class="text-xl font-medium text-gray-700 mb-6">Katalog berhasil dihapus</h2>
        <div class="flex justify-center">
            <div class="bg-green-800 rounded-full w-24 h-24 flex items-center justify-center">
                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
            </div>
        </div>
    </div>
</div>

<script>
    function openModalHapus() {
        document.getElementById('modalHapus').classList.remove('hidden');
    }

    function closeModalHapus() {
        document.getElementById('modalHapus').classList.add('hidden');
    }

    function hapusKatalog() {
      // Tutup modal konfirmasi
        closeModalHapus();

      // Tampilkan modal sukses
        setTimeout(() => {
        const modalSukses = document.getElementById('modalSukses');
        modalSukses.classList.remove('hidden');

        // Auto-close setelah 2 detik
        setTimeout(() => {
            modalSukses.classList.add('hidden');
        }, 1500);
      }, 300); // Delay agar transisi terasa halus
    }
</script>

@endsection
