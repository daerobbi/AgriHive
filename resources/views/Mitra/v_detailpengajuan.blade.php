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

    <!-- Form -->
    <div class="w-2/3 p-8">
        <h1 class="text-2xl font-bold mb-6">Form Pengajuan</h1>
        <div class="space-y-4">
            <div>
                <label class="block text-gray-700 font-medium">Jenis Bibit</label>
                <input type="text" value="Tanaman Hias" class="w-full border rounded px-3 py-2" />
            </div>
            <div>
                <label class="block text-gray-700 font-medium">Nama Bibit</label>
                <input type="text" value="Bibit Lidah Mertua" class="w-full border rounded px-3 py-2" />
            </div>
            <div>
                <label class="block text-gray-700 font-medium">Jumlah Bibit</label>
                <input type="number" value="20" class="w-full border rounded px-3 py-2" />
            </div>
            <div>
                <label class="block text-gray-700 font-medium">Tanggal Kebutuhan Bibit</label>
                <input type="date" value="2025-04-24" class="w-full border rounded px-3 py-2" />
            </div>
            <div>
                <label class="block text-gray-700 font-medium">Jadwal Pengiriman Bibit</label>
                <input type="date" value="2025-04-17" class="w-full border rounded px-3 py-2" />
            </div>
            <div>
                <label class="block text-gray-700 font-medium">Lokasi Pengiriman Bibit</label>
                <textarea class="w-full border rounded px-3 py-2" rows="2">Perumahan Griya Alam Indah Blok C2 No.17, RT 003 / RW 006, Kelurahan Babatan, Kecamatan Wiyung, Kota Surabaya, Jawa Timur, 60227</textarea>
            </div>
            <div>
                <label class="block text-gray-700 font-medium">Keterangan</label>
                <textarea class="w-full border rounded px-3 py-2" rows="2">Mohon pilihkan bibit lidah mertua yang daunnya sudah tegak dan sehat. Tolong juga dipacking dengan aman karena pengiriman ke luar kota.</textarea>
        </div>
        <div>
            <label class="block text-gray-700 font-medium">Kontak Narahubung</label>
            <input type="text" value="wa.me/6287712336190" class="w-full border rounded px-3 py-2" />
        </div>
    </div>

<!-- Buttons -->
        <div class="flex justify-between items-center mt-6">
            <a href="{{ route('v_pengajuanterbaru') }}" class="text-green-600 hover:underline text-sm">&lt; kembali</a>
                <div class="flex gap-4">
                    <button onclick="openModal('editModal')" class="bg-green-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-green-700">Edit</button>
                    <button onclick="openModal('deleteModal')" class="bg-red-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-red-700">Hapus</button>
                </div>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Edit -->
<div id="editModal" class="hidden fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50">
    <div class="bg-gray-300 rounded-3xl px-10 py-8 text-center">
        <h2 class="text-3xl font-medium text-gray-800 mb-8">Yakin Merubah Data Pengajuan?</h2>
        <div class="flex justify-center gap-4">
            <button onclick="closeModal('editModal')" class="bg-red-700 text-white font-bold px-10 py-3 rounded-xl">Batal</button>
            <button onclick="confirmEdit()" class="bg-green-800 text-white font-bold px-10 py-3 rounded-xl">Yakin</button>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Hapus -->
<div id="deleteModal" class="hidden fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50">
    <div class="bg-gray-300 rounded-3xl px-10 py-8 text-center">
        <h2 class="text-3xl font-medium text-gray-800 mb-8">Yakin Menghapus Pengajuan?</h2>
        <div class="flex justify-center gap-4">
            <button onclick="closeModal('deleteModal')" class="bg-red-700 text-white font-bold px-10 py-3 rounded-xl">Batal</button>
            <button onclick="confirmDelete()" class="bg-green-800 text-white font-bold px-10 py-3 rounded-xl">Yakin</button>
        </div>
    </div>
</div>

<!-- Toast Berhasil Hapus -->
<div id="deleteSuccessToast" class="hidden fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50">
    <div class="bg-gray-300 rounded-3xl px-10 py-8 text-center">
        <h2 class="text-2xl font-medium text-gray-800 mb-6">Data Pengajuan Berhasil Dihapus !</h2>
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
        <h2 class="text-2xl font-medium text-gray-800 mb-6">Data Pengajuan Berhasil Diubah !</h2>
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
