@extends('Mitra.app')
@section('content')
<!-- Title -->
<div class="bg-gray-100 py-8 text-center">
    <h1 class="text-3xl font-bold">Riwayat Pengajuan</h1>
</div>

<!-- Filters -->
<div class="flex justify-between items-center max-w-screen-xl mx-auto mt-8 mb-4 px-6 space-x-4">
    <div class="flex w-full max-w-4xl space-x-4">
        <div class="relative flex-grow">
            <input type="text" placeholder="Cari Agen/Bibit" class="w-full border border-gray-300 rounded-full py-2 px-4 pl-10 focus:outline-none">
                <svg class="absolute left-3 top-2.5 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M12.9 14.32a8 8 0 111.41-1.41l4.28 4.3-1.42 1.4-4.27-4.3zM14 8a6 6 0 11-12 0 6 6 0 0112 0z" clip-rule="evenodd" />
                </svg>
        </div>
        <div class="relative">
            <select class="border border-gray-300 rounded-full py-2 px-4 focus:outline-none">
                <option>Dikirim</option>
                <option>Proses</option>
            </select>
        </div>
        <button class="bg-green-700 text-white px-4 py-2 rounded-full hover:bg-green-800">Cari</button>
    </div>
</div>

<!-- Table -->
<div class="max-w-screen-xl mx-auto px-6 overflow-x-auto">
    <table class="w-full text-center border-collapse">
        <thead class="border-b-2 border-gray-300">
            <tr class="text-gray-600">
                <th class="py-2">No</th>
                <th class="py-2">Tanggal Pengajuan</th>
                <th class="py-2">Rekan Tani</th>
                <th class="py-2">Nama Bibit</th>
                <th class="py-2">Status Pengiriman</th>
                <th class="py-2"></th>
                <th class="py-2"></th>
            </tr>
        </thead>
        <tbody class="text-sm">
            <tr class="border-b border-gray-200">
                <td class="py-4">1.</td>
                <td class="py-4">22/04/2025</td>
                <td class="py-4">Gardenia Agro</td>
                <td class="py-4">Bibit Lidah Mertua</td>
                <td class="py-4 text-green-600 font-semibold">Dikirim</td>
                <td class="py-4">
                    <button class="bg-green-400 text-white px-4 py-1 rounded-full text-sm">Bibit Diterima</button>
                </td>
                <td class="py-4">
                    <a href="#" class="bg-green-900 text-white px-4 py-1 rounded-full text-sm inline-block">Detail</a>
                </td>
            </tr>
            <tr class="border-b border-gray-200">
                <td class="py-4">2.</td>
                <td class="py-4">22/04/2025</td>
                <td class="py-4">PT. Agrifolia</td>
                <td class="py-4">Bibit Sirih</td>
                <td class="py-4 text-gray-500 font-semibold">Proses</td>
                <td class="py-4">
                    <button class="bg-green-400 text-white px-4 py-1 rounded-full text-sm">Bibit Diterima</button>
                </td>
                <td class="py-4">
                <a href="#" class="bg-green-900 text-white px-4 py-1 rounded-full text-sm inline-block">Detail</a>
                </td>
            </tr>
            <tr>
                <td class="py-4">3.</td>
                <td class="py-4">22/04/2025</td>
                <td class="py-4">Roemah Hias</td>
                <td class="py-4">Bibit Anggrek</td>
                <td class="py-4 text-gray-500 font-semibold">Proses</td>
                <td class="py-4">
                    <button class="bg-green-400 text-white px-4 py-1 rounded-full text-sm">Bibit Diterima</button>
                </td>
                <td class="py-4">
                    <a href="#" class="bg-green-900 text-white px-4 py-1 rounded-full text-sm inline-block">Detail</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
