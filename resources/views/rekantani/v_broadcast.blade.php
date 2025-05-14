@extends('rekantani.app')

@section('content')
<style>
    [x-cloak] { display: none !important; }
</style>

<!-- Header -->
<div class="px-16 py-10 max-w-7xl mx-auto">
    <h1 class="text-2xl font-bold">Cek Broadcast terbaru !</h1>
    <p class="text-gray-600 mt-1">Bantu Agen mendapatkan bibit dengan cepat</p>
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
                <div class="text-gray-600 flex items-center gap-1 mb-5 justify-end">
                    <img src="https://img.icons8.com/ios-glyphs/20/speech-bubble.png" />
                    <span>{{ $broadcast->komentars_count }} Komentar</span>
                </div>
            <a href="{{ route('rekantani.detailbroadcast', $broadcast->id) }}" class="bg-green-700 text-white px-4 py-1 rounded-full">Detail</a>
        </div>
    </div>
    @empty
    <div class="text-center text-gray-500">
        Belum ada broadcast yang  dibuat oleh agen.
    </div>
    @endforelse
</div>
@endsection
