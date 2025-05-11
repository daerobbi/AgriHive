@extends('Mitra.app')

@section('content')
<style>
    [x-cloak] { display: none !important; }
</style>

<!-- Header -->
<div class="px-16 py-10 max-w-7xl mx-auto">
    <h1 class="text-2xl font-bold">Sulit menemukan bibit tertentu?</h1>
    <p class="text-gray-600 mt-1">Broadcast kebutuhanmu agar lebih cepat ditemukan!</p>
</div>

<!-- Broadcast List -->
<div class="px-16 space-y-6 max-w-7xl mx-auto">
    @forelse ($broadcasts as $broadcast)
    <div class="bg-white border rounded-xl p-5 shadow flex justify-between items-start gap-6">
        <div class="flex items-start gap-4 flex-grow">
            <img src="{{ asset('asset/toa.png') }}" class="mt-1" />
            <div>
                <h2 class="text-green-700 font-semibold text-lg">
                    {{ $broadcast->judul_broadcast }}
                </h2>
                <div class="mt-2 text-sm text-gray-700 space-y-1">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('asset/lokasi.png') }}" />
                        <span>Lokasi: {{ $broadcast->lokasi }}</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('asset/jumlah.png') }}" />
                        <span>Jumlah: {{ $broadcast->jumlah_bibit }}</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('asset/date.png') }}" />
                        <span>Tenggat: {{ \Carbon\Carbon::parse($broadcast->tanggal_kebutuhan)->format('j F Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-sm text-right min-w-[110px] space-y-2">
            <a href="">
                <div class="text-gray-600 flex items-center gap-1 mb-5 justify-end">
                    <img src="https://img.icons8.com/ios-glyphs/20/speech-bubble.png" />
                    <span>{{ $broadcast->komentars_count }} Komentar</span>
                </div>
            </a>
            <a href="{{ route('agen.editbroadcast', $broadcast->id) }}" class="bg-green-700 text-white px-4 py-1 rounded-full">Detail</a>
        </div>
    </div>
    @empty
    <div class="text-center text-gray-500">
        Belum ada broadcast yang kamu buat.
    </div>
    @endforelse
</div>

<!-- Buat Broadcast Button -->
<div class="px-16 max-w-7xl mx-auto pt-10 text-right">
    <a href="{{ route('agen.buatbroadcast') }}" class="inline-flex items-center gap-2 bg-green-900 text-white font-semibold px-5 py-3 rounded-full text-sm shadow-lg">
        <span class="text-xl">+</span> Buat Broadcast
    </a>
</div>

<!-- Notifikasi Berhasil -->
@if (session('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 1500)" x-show="show" x-cloak x-transition
        class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
        <div class="bg-white rounded-3xl p-8 w-full max-w-md text-center shadow-lg">
            <h2 class="text-xl font-medium text-gray-700 mb-6">{{ session('success') }}</h2>
            <div class="flex justify-center">
                <div class="bg-green-600 rounded-full w-24 h-24 flex items-center justify-center">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" stroke-width="3"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection
