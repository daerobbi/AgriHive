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
            @forelse ($pengajuan as $key => $item)
            <tr>
                <td class="py-4">{{ $key + 1 }}.</td>
                <td class="py-4">{{ \Carbon\Carbon::parse($item->tanggal_pengajuan)->format('d/m/Y') }}</td>
                <td class="py-4">{{ $item->bibit->rekanTani->nama ?? '-' }}</td>
                <td class="py-4">{{ $item->bibit->nama_bibit ?? '-' }}</td>
                <td class="py-4 font-medium
                    @if($item->status_pengajuan == 'diterima') text-green-600)
                    @elseif($item->status_pengajuan == 'ditolak') text-red-600)
                    @else text-gray-500
                    @endif
                ">
                    {{ ucfirst($item->status_pengajuan ?? 'proses') }}
                </td>
                <td class="py-4">
                    <a href="{{ route('v_detailpengajuan', ['id' => $item->id]) }}"
                        class="bg-green-800 text-white px-4 py-1 rounded-full text-sm font-semibold hover:bg-green-950">
                        Detail
                    </a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center py-6 text-gray-500">
                    Belum ada pengajuan.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-6">
        <a href="{{ route('v_pengajuan') }}" class="text-green-700 text-sm font-medium hover:underline">&lt; kembali</a>
    </div>
</div>

@endsection
