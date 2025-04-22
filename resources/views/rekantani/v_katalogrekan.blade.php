@extends('rekantani.app')
@section('content')
    <!-- Header + Search -->
    <div class="bg-gray-100 px-6 py-4">
        <h1 class="text-3xl font-bold mb-4">Katalog</h1>
        <form action="{{ route('rekantani.cariKatalog') }}" method="GET" class="flex justify-start">
            <div class="relative w-full max-w-md">
                <input type="text" name="query" value="{{ request()->input('query') }}" placeholder="Cari Nama Bibit..."
                    class="w-full border rounded-full py-2 px-4 pr-10 text-sm focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-300 ease-in-out" />
                <button type="submit" class="absolute right-3 top-2.5">
                    <svg class="w-5 h-5 text-gray-500 hover:text-green-600 transition duration-300 ease-in-out"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z" />
                    </svg>
                </button>
            </div>
        </form>
    </div>
    </div>

    <!-- Notifikasi Berhasil -->
    @if (session('success'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 1500)" x-show="show" x-transition
            class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
            <div class="bg-white rounded-3xl p-8 w-full max-w-md text-center shadow-lg">
                <h2 class="text-xl font-medium text-gray-700 mb-6">Katalog berhasil diperbarui</h2>
                <div class="flex justify-center">
                    <div class="bg-green-800 rounded-full w-24 h-24 flex items-center justify-center">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" stroke-width="3"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Katalog Section -->
    <div class="px-6 py-6 flex flex-col w-full">
        @if (request()->input('query'))
            <h2 class="text-2xl font-semibold text-gray-700 mb-6">
                Hasil Pencarian untuk: "{{ request()->input('query') }}"
            </h2>
        @endif

        <div class="w-full flex flex-col gap-5">
            @forelse ($katalogs as $katalog)
                @if (count($katalog) > 0)
                    <h2 class="text-xl text-green-700 font-semibold mb-3">{{ $katalog[0]->jenis_bibit }}</h2>
                    <div class="grid lg:grid-cols-5 w-full gap-4">
                        @foreach ($katalog as $x)
                            <a href="{{ route('rekantani.detailkatalog', ['id' => $x->id]) }}"
                                class="border rounded-lg overflow-hidden shadow-sm block hover:shadow-lg transition duration-300 ease-in-out hover:bg-green-50">
                                <img src="{{ asset('storage/' . $x->foto_bibit) }}" alt="{{ $x->nama_bibit }}"
                                    class="aspect-square object-cover object-center" />
                                <div class="p-2 text-sm">
                                    <div class="text-gray-500 text-xs">{{ $x->jenis_bibit }}</div>
                                    <div class="font-medium">{{ $x->nama_bibit }}</div>
                                    <div class="text-xs text-gray-500">{{ $x->stok }} stok</div>
                                    <div class="flex justify-between items-center mt-2">
                                        <span class="font-bold">{{ $x->harga }}</span>
                                        <span>→</span>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @endif
            @empty
                <p class="text-gray-500 text-center">Tidak ada katalog ditemukan.</p>
            @endforelse
        </div>

        <div class="mt-10 flex justify-end">
            <a href="{{ route('rekantani.tambahkatalog') }}"
                class="flex items-center bg-green-700 text-white px-4 py-2 rounded-full hover:bg-green-800 transition duration-300 ease-in-out">
                <span class="text-2xl mr-2">+</span> Tambah Katalog
            </a>
        </div>
    </div>
@endsection
