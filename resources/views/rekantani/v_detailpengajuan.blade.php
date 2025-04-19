@extends('rekantani.app')
@section('content')
<!-- Main Content -->
<div class="flex flex-col md:flex-row max-w-7xl mx-auto my-10 p-4 gap-6">
    <!-- Sidebar -->
    <div class="bg-white p-6 rounded-lg shadow-md w-full md:w-1/3 flex flex-col items-center text-center">
        <img src="https://wartapendidikanjogja.com/wp-content/uploads/2024/05/Petani-Sukses-2020-752x440.jpg" class="w-32 h-32 rounded-full object-cover mb-4" alt="Petani">
        <h3 class="font-bold text-lg">Multi Agro Nusa</h3>
        <div class="text-sm text-gray-600 mt-2 space-y-1">
            <p>No Pengajuan : 1</p>
            <p>Tanggal Pengajuan : 30/04/2025</p>
            <p>Status Pengajuan : <span class="text-yellow-600">Perlu Diproses</span></p>
            <p>Status Pembayaran : <span class="text-yellow-600">Perlu Diproses</span></p>
        </div>
      {{-- <div class="flex items-center gap-2 mt-4 text-green-600">
        <img src="https://img.icons8.com/ios-glyphs/30/4caf50/whatsapp.png" class="w-5 h-5"/>
        <a href="https://wa.me/6287806650838" target="_blank">wa.me/6287806650838</a>
      </div> --}}
      {{-- <div class="mt-2 text-sm text-blue-600">
        <a href="https://www.google.com/maps?q=PT+Taman+Indah+Lestari+Jember" target="_blank">https://www.google.com/maps?q=PT+Taman+Indah+Lestari+Jember</a>
      </div> --}}
    </div>

    <!-- Detail Pengajuan -->
    <div class="bg-white p-6 rounded-lg shadow-md w-full md:w-2/3">
        <h2 class="text-2xl font-semibold mb-4">Pengajuan</h2>
        <div class="space-y-4 text-sm">
            <div class="grid grid-cols-2">
                <p class="font-semibold">Jenis Bibit</p>
                <p>Lidah Mertua</p>
                <p class="font-semibold">Nama Bibit</p>
                <p>Tanaman Hias</p>
                <p class="font-semibold">Jumlah Bibit</p>
                <p>20</p>
        </div>

        <hr>

        <div class="grid grid-cols-2">
            <p class="font-semibold">Tanggal Kebutuhan Bibit</p>
            <p>24/04/2025</p>
            <p class="font-semibold">Jadwal Pengiriman Bibit</p>
            <p>17/04/2025</p>
        </div>

        <hr>

        <div>
            <p class="font-semibold">Lokasi Pengiriman Bibit</p>
            <p>Perumahan Griya Alam Indah Blok C2 No.17, RT 003 / RW 006, Kelurahan Babatan, Kecamatan Wiyung, Kota Surabaya, Jawa Timur, 60227</p>
        </div>

        <hr>

        <div>
            <p class="font-semibold">Keterangan</p>
            <p>Mohon pilihkan bibit lidah mertua yang daunnya sudah tegak dan sehat. Tolong juga dipacking dengan aman karena pengiriman ke luar kota.</p>
        </div>

        <hr>

        <div class="mb-6">
            <p class="font-semibold">Kontak Narahubung</p>
            <p>wa.me/6287806650838</p>
        </div>

        <div class="flex justify-between items-center mt-8">
            <button class="bg-green-500 hover:bg-green-600 text-white font-semibold px-4 py-2 rounded-lg flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M8.707 13.293a1 1 0 010 1.414l-2 2a1 1 0 01-1.414-1.414L6.586 14H3a1 1 0 110-2h3.586l-1.293-1.293a1 1 0 111.414-1.414l2 2z" />
                    <path d="M11.293 6.707a1 1 0 010-1.414l2-2a1 1 0 011.414 1.414L13.414 6H17a1 1 0 110 2h-3.586l1.293 1.293a1 1 0 01-1.414 1.414l-2-2z" />
                </svg>
            Upload Tagihan Pengajuan Ini
            </button>

        <div class="flex gap-4">
            <button onclick="openModal('deleteModal')" class="bg-red-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-red-700">Tolak</button>
            <button onclick="openModal('editModal')" class="bg-green-700 text-white px-4 py-2 rounded-lg font-semibold hover:bg-green-800">Terima</button>
        </div>
        </div>
    </div>
    </div>
</div>

{{-- modal terima --}}
<div id="editModal" class="hidden fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50">
    <div class="bg-gray-300 rounded-3xl px-10 py-8 text-center">
        <h2 class="text-3xl font-medium text-gray-800 mb-8">Yakin Ingin Menerima Pengajuan?</h2>
        <div class="flex justify-center gap-4">
            <button onclick="closeModal('editModal')" class="bg-red-700 text-white font-bold px-10 py-3 rounded-xl">Batal</button>
            <button onclick="confirmEdit()" class="bg-green-800 text-white font-bold px-10 py-3 rounded-xl">Yakin</button>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Hapus -->
<div id="deleteModal" class="hidden fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50">
    <div class="bg-gray-300 rounded-3xl px-10 py-8 text-center">
        <h2 class="text-3xl font-medium text-gray-800 mb-8">Yakin Menolak Pengajuan?</h2>
        <div class="flex justify-center gap-4">
            <button onclick="closeModal('deleteModal')" class="bg-red-700 text-white font-bold px-10 py-3 rounded-xl">Batal</button>
            <button onclick="confirmDelete()" class="bg-green-800 text-white font-bold px-10 py-3 rounded-xl">Yakin</button>
        </div>
    </div>
</div>

<!-- Toast Berhasil Hapus -->
<div id="deleteSuccessToast" class="hidden fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50">
    <div class="bg-gray-300 rounded-3xl px-10 py-8 text-center">
        <h2 class="text-2xl font-medium text-gray-800 mb-6">Data Pengajuan Berhasil Ditolak!</h2>
        <div class="flex justify-center">
            <div class="bg-green-800 p-4 rounded-full">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="4" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
            </div>
        </div>
    </div>
</div>

<!-- Toast Berhasil Edit -->
<div id="editSuccessToast" class="hidden fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50">
    <div class="bg-gray-300 rounded-3xl px-10 py-8 text-center">
        <h2 class="text-2xl font-medium text-gray-800 mb-6">Data Pengajuan Berhasil Diterima!</h2>
        <div class="flex justify-center">
            <div class="bg-green-800 p-4 rounded-full">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="4" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
            </div>
        </div>
    </div>
</div>

<!-- Script Modal & Toast -->
<script>
    function openModal(id) {
        document.getElementById(id).classList.remove('hidden');
    }

    function closeModal(id) {
        document.getElementById(id).classList.add('hidden');
    }

    function confirmDelete() {
        closeModal('deleteModal');
        const toast = document.getElementById('deleteSuccessToast');
        toast.classList.remove('hidden');
        setTimeout(() => {
            toast.classList.add('hidden');
        }, 1000);
    }

    function confirmEdit() {
        closeModal('editModal');
        const toast = document.getElementById('editSuccessToast');
        toast.classList.remove('hidden');
        setTimeout(() => {
            toast.classList.add('hidden');
        }, 1000);
    }
</script>
@endsection
