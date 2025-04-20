@extends('rekantani.app')
@section('content')
<div class="bg-white py-6 text-center shadow">
    <h1 class="text-2xl font-bold">Pengajuan</h1>
</div>

<!-- Filter dan Search -->
<div class="flex flex-wrap gap-4 px-6 py-4 bg-white shadow mt-4 items-center">
    <!-- Search Bar + Button -->
    <div class="flex items-center gap-2">
        <div class="relative">
            <input
                type="text"
                placeholder="Cari Agen atau Rekan Tani..."
                class="pl-10 pr-4 py-2 rounded-full border w-72 focus:outline-none focus:ring-2 focus:ring-green-500"/>
            <div class="absolute left-3 top-2.5 text-gray-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1010.5 18a7.5 7.5 0 006.15-3.35z" />
                </svg>
            </div>
        </div>
        <button class="bg-green-700 hover:bg-green-800 text-white px-4 py-2 rounded-full">Cari</button>
    </div>

    <!-- Dropdown Bulan -->
    <select class="border rounded-full px-4 py-2">
        <option>Januari</option>
        <option>Februari</option>
        <option>Maret</option>
        <option>April</option>
        <option>Mei</option>
    </select>

    <!-- Dropdown Status -->
    <select class="border rounded-full px-4 py-2">
        <option>Semua Pengajuan</option>
        <option>Diterima</option>
        <option>Ditolak</option>
    </select>
</div>

<!-- Tabel Pengajuan -->
<div class="px-6 py-4">
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded shadow text-sm">
            <thead class="border-b">
                <tr class="text-left">
                    <th class="py-3 px-4">No</th>
                    <th class="py-3 px-4">Tanggal</th>
                    <th class="py-3 px-4">Agen</th>
                    <th class="py-3 px-4">Rekan Tani</th>
                    <th class="py-3 px-4">Jumlah Bibit</th>
                    <th class="py-3 px-4">Status Pengajuan</th>
                    <th class="py-3 px-4"></th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-t">
                    <td class="py-3 px-4">1.</td>
                    <td class="py-3 px-4">22/04/2025</td>
                    <td class="py-3 px-4">Multi Agro Nusa</td>
                    <td class="py-3 px-4">Gardenia Agro</td>
                    <td class="py-3 px-4">40</td>
                    <td class="py-3 px-4 text-green-600 flex items-center gap-1">
                        <span>✔</span> Diterima
                    </td>
                    <td class="py-3 px-4">
                        <a href="{{route('v_detailpengajuanadmin')}}" class="bg-green-800 text-white px-4 py-1 rounded-full text-sm hover:bg-green-700 transition duration-300">Detail</a>
                    </td>
                </tr>
                    <tr class="border-t">
                        <td class="py-3 px-4">2.</td>
                        <td class="py-3 px-4">22/04/2025</td>
                        <td class="py-3 px-4">Bu Nia - Sedia Bibit</td>
                        <td class="py-3 px-4">PT. Agrifolia</td>
                        <td class="py-3 px-4">100</td>
                        <td class="py-3 px-4 text-green-600 flex items-center gap-1">
                            <span>✔</span> Diterima
                        </td>
                        <td class="py-3 px-4">
                            <a href="#" class="bg-green-800 text-white px-4 py-1 rounded-full text-sm hover:bg-green-700 transition duration-300">Detail</a>
                        </td>
                    </tr>
                    <tr class="border-t">
                        <td class="py-3 px-4">3.</td>
                        <td class="py-3 px-4">22/04/2025</td>
                        <td class="py-3 px-4">Wahyu Bibit Jember</td>
                        <td class="py-3 px-4">PT. Agrifolia</td>
                        <td class="py-3 px-4">200</td>
                        <td class="py-3 px-4 text-red-600 flex items-center gap-1">
                            <span>✖</span> Ditolak
                        </td>
                        <td class="py-3 px-4">
                            <a href="#" class="bg-green-800 text-white px-4 py-1 rounded-full text-sm hover:bg-green-700 transition duration-300">Detail</a>
                        </td>
                    </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
