@extends('Mitra.app')
@section('content')
<!-- Header -->
<div class="px-16 py-10 max-w-7xl mx-auto">
<h1 class="text-2xl font-bold">Sulit menemukan bibit tertentu?</h1>
<p class="text-gray-600 mt-1">Broadcast kebutuhanmu agar lebih cepat ditemukan!</p>
</div>

<!-- Broadcast List -->
<div class="px-16 space-y-6 max-w-7xl mx-auto">
    <!-- Broadcast Item -->
    <div class="bg-white border rounded-xl p-5 shadow flex justify-between items-start gap-6">
        <div class="flex items-start gap-4 flex-grow">
        <img src="{{ asset('asset/toa.png') }}" class="mt-1" />
            <div>
                <h2 class="text-green-700 font-semibold text-lg">DIBUTUHKAN BIBIT TIMUN LEMON</h2>
                    <div class="mt-2 text-sm text-gray-700 space-y-1">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('asset/lokasi.png') }}" />
                            <span>Lokasi: Probolinggo</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('asset/jumlah.png') }}" />
                            <span>Jumlah: 10</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('asset/date.png') }}" />
                            <span>Tenggat: 1 Mei 2025</span>
                        </div>
                    </div>
            </div>
        </div>
        <div class="text-sm text-right min-w-[110px] space-y-2">
            <div class="text-gray-600 flex items-center gap-1 mb-5 justify-end">
                <img src="https://img.icons8.com/ios-glyphs/20/speech-bubble.png" />
                <span>1 Komentar</span>
            </div>
        <a href="" class="bg-green-700 text-white px-4 py-1 rounded-full">Detail</a>
        </div>
    </div>
</div>

<!-- Buat Broadcast Button -->
<div class="fixed bottom-6 right-6">
<a href="" class="flex items-center gap-2 bg-green-900 text-white font-semibold px-5 py-3 rounded-full text-sm shadow-lg">
    <span class="text-xl">+</span> Buat Broadcast
</a>

@endsection
