@extends('rekantani.app')
@section('content')
<div class="bg-white py-10 shadow-sm">
    <h1 class="text-3xl font-bold text-center">Pengajuan Masuk</h1>
</div>

<!-- Table Section - Lebar Full -->
<div class="w-full px-6 mt-6">
    <div class="bg-white rounded-md shadow overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-700">
        <thead class="bg-gray-100 text-gray-600 uppercase">
            <tr>
                <th class="px-4 py-3">No</th>
                <th class="px-4 py-3">Tanggal Pengajuan</th>
                <th class="px-4 py-3">Tanggal Kebutuhan Bibit</th>
                <th class="px-4 py-3">Agen</th>
                <th class="px-4 py-3">Status Pengajuan</th>
                <th class="px-4 py-3">Status Pembayaran</th>
                <th class="px-4 py-3"></th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-t">
                <td class="px-4 py-3">1.</td>
                <td class="px-4 py-3">22/04/2025</td>
                <td class="px-4 py-3">30/04/2025</td>
                <td class="px-4 py-3">Multi Agro Nusa</td>
                <td class="px-4 py-3 text-gray-500">Perlu diproses</td>
                <td class="px-4 py-3 text-gray-500">Perlu Diproses</td>
                <td class="px-4 py-3">
                    <a href="{{route('v_detailpengajuanRekan')}}" class="bg-green-800 text-white px-4 py-1 rounded-full text-sm hover:bg-green-700 transition-colors duration-200">Detail</a>
                </td>
            </tr>
            <tr class="border-t">
                <td class="px-4 py-3">2.</td>
                <td class="px-4 py-3">22/04/2025</td>
                <td class="px-4 py-3">1/05/2025</td>
                <td class="px-4 py-3">Bu Nia - Sedia Bibit</td>
                <td class="px-4 py-3 text-green-700 font-semibold">✔ Diterima</td>
                <td class="px-4 py-3 text-red-600">Belum Dibayar</td>
                <td class="px-4 py-3">
                    <a href="{{route('v_detailpengajuanRekan')}}" class="bg-green-800 text-white px-4 py-1 rounded-full text-sm hover:bg-green-700 transition-colors duration-200">Detail</a>
                </td>
            </tr>
            <tr class="border-t">
                <td class="px-4 py-3">3.</td>
                <td class="px-4 py-3">22/04/2025</td>
                <td class="px-4 py-3">1/05/2025</td>
                <td class="px-4 py-3">Wahyu Bibit Jember</td>
                <td class="px-4 py-3 text-green-700 font-semibold">✔ Diterima</td>
                <td class="px-4 py-3 text-red-600">Belum Dibayar</td>
                <td class="px-4 py-3">
                    <a href="{{route('v_detailpengajuanRekan')}}" class="bg-green-800 text-white px-4 py-1 rounded-full text-sm hover:bg-green-700 transition-colors duration-200">Detail</a>
                </td>
            </tr>
        </tbody>
        </table>
    </div>
</div>
@endsection
