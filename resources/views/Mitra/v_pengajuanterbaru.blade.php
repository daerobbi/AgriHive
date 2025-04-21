@extends('Mitra.app')
@section('content')
<!-- Header -->
<div class="bg-gray-100 py-8">
    <h1 class="text-center text-3xl font-bold">Pengajuan Terbaru</h1>
</div>

<!-- Table -->
<div class="max-w-6xl mx-auto mt-6 bg-white px-8 py-6 shadow-sm">
    <table class="w-full text-left text-sm">
        <thead class="border-b border-gray-300">
            <tr class="text-gray-700">
                <th class="py-3">No</th>
                <th class="py-3">Tanggal Pengajuan</th>
                <th class="py-3">Rekan Tani</th>
                <th class="py-3">Nama Bibit</th>
                <th class="py-3">Keterangan</th>
                <th class="py-3"></th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-300">
            <tr>
                <td class="py-4">1.</td>
                <td class="py-4">22/04/2025</td>
                <td class="py-4">Gardenia Agro</td>
                <td class="py-4">Bibit Lidah Mertua</td>
                <td class="py-4 text-green-600 font-medium">Diterima</td>
                <td class="py-4">
                    <a href="" class="bg-green-800 text-white px-4 py-1 rounded-full text-sm font-semibold hover:bg-green-950">Detail</a>
                </td>
            </tr>
            <tr>
                <td class="py-4">2.</td>
                <td class="py-4">22/04/2025</td>
                <td class="py-4">PT. Agrifolia</td>
                <td class="py-4">Bibit Sirih</td>
                <td class="py-4 text-gray-500 font-medium">Proses</td>
                <td class="py-4">
                    <a href="{{route('v_detailpengajuan')}}" class="bg-green-800 text-white px-4 py-1 rounded-full text-sm font-semibold hover:bg-green-950">Detail</a>
                </td>
            </tr>
            <tr>
                <td class="py-4">3.</td>
                <td class="py-4">22/04/2025</td>
                <td class="py-4">Roemah Hias</td>
                <td class="py-4">Bibit Anggrek</td>
                <td class="py-4 text-gray-500 font-medium">Proses</td>
                <td class="py-4">
                    <a href="" class="bg-green-800 text-white px-4 py-1 rounded-full text-sm font-semibold hover:bg-green-950">Detail</a>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="mt-6">
        <a href="\pengajuan" class="text-green-700 text-sm font-medium hover:underline">&lt; kembali</a>
    </div>
</div>
@endsection
