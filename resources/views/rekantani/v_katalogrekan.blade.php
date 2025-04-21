@extends('rekantani.app')
@section('content')
    <!-- Header + Search -->
    <div class="bg-gray-100 px-6 py-4">
        <h1 class="text-3xl font-bold mb-4">Katalog</h1>
        <div class="relative w-full max-w-md">
            <input type="text" placeholder="Cari Nama Bibit..." class="w-full border rounded-full py-2 px-4 pr-10" />
            <svg class="absolute right-3 top-2.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z" />
            </svg>
        </div>
    </div>

    <!-- Katalog Section -->
    <div class="px-6 py-6 flex flex-col w-full">
        <div class="w-full flex flex-c flex-col gap-5">
            @foreach ($katalogs as $katalog)
                <h2 class="text-xl text-green-700 font-semibold mb-3">{{ $katalog[0]->jenis_bibit }}</h2>
                <div class="grid lg:grid-cols-5 w-full gap-4">
                    <!-- Card -->
                    @foreach ($katalog as $x)
                        <a href="{{ route('rekantani.detailkatalog', ['id' => $x->id]) }}"
                            class="border rounded-lg overflow-hidden shadow-sm block hover:shadow-md transition">
                            <img src={{ asset('storage/' . $x->foto_bibit) }} alt="Aglaonema"
                                class='aspect-square object-cover object-center' />
                            <div class="p-2 text-sm">
                                <div class="text-gray-500 text-xs">{{ $x->jenis_bibit }}</div>
                                <div class="font-medium">{{ $x->nama_bibit }}</div>
                                <div class="text-xs text-gray-500">{{ $x->stok }}</div>
                                <div class="flex justify-between items-center mt-2">
                                    <span class="font-bold">{{ $x->harga }}</span>
                                    <span>→</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            @endforeach
        </div>
        <div class="mt-10 flex justify-end">
            <a href="{{ route('rekantani.tambahkatalog') }}"
                class="flex items-center bg-green-700 text-white px-4 py-2 rounded-full hover:bg-green-800">
                <span class="text-2xl mr-2">+</span> Tambah Katalog
            </a>
        </div>
    </div>
@endsection
