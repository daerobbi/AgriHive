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
            <tbody>
                @foreach ($pengajuan as $index => $item)
                    <tr class="border-t">
                        <td class="px-4 py-3">{{ $index + 1 }}.</td>
                        <td class="px-4 py-3">{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</td>
                        <td class="px-4 py-3">{{ \Carbon\Carbon::parse($item->tanggal_dibutuhkan)->format('d/m/Y') }}</td>
                        <td class="px-4 py-3">{{ $item->agen->nama}}</td>
                        <td class="px-4 py-3 text-gray-500">
                            {{
                                is_null($item->status_pengajuan) ? 'Perlu diproses' :
                                ($item->status_pengajuan == 0 ? '❌ Ditolak' : '✔ Diterima')
                            }}
                        </td>
                        <td class="px-4 py-3 text-gray-500">
                            {{ $item->status_pembayaran == 1 ? 'Sudah Dibayar' : 'Belum Dibayar' }}
                        </td>
                        <td class="px-4 py-3">
                            <a href="{{ route('rekantani.detailpengajuan', $item->id) }}"
                                class="bg-green-800 text-white px-4 py-1 rounded-full text-sm hover:bg-green-700 transition-colors duration-200">
                                Detail
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>

        </tbody>
        </table>
    </div>
</div>
@endsection
