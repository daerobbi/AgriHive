@extends('rekantani.app')
@section('content')
<!-- Header + Search -->
<div class="bg-gray-100 px-6 py-4">
    <h1 class="text-3xl font-bold mb-4">Katalog</h1>
    <div class="relative w-full max-w-md">
        <input type="text" placeholder="Cari Nama Bibit..." class="w-full border rounded-full py-2 px-4 pr-10" />
        <svg class="absolute right-3 top-2.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z" />
        </svg>
    </div>
</div>

<!-- Katalog Section -->
<div class="px-6 py-6">
    <div>
        <h2 class="text-xl text-green-700 font-semibold mb-3">Tanaman Hias</h2>
        <div class="grid grid-cols-5 gap-4">
        <!-- Card -->
            <a href="{{route('v_detailkatalogrekan')}}" class="border rounded-lg overflow-hidden shadow-sm block hover:shadow-md transition">
                <img src="https://images.theconversation.com/files/496952/original/file-20221123-16-cg0nlw.jpg?ixlib=rb-4.1.0&q=20&auto=format&w=320&fit=clip&dpr=2&usm=12&cs=strip" alt="Aglaonema" />
                <div class="p-2 text-sm">
                    <div class="text-gray-500 text-xs">Tanaman Hias</div>
                    <div class="font-medium">Bibit Aglaonema</div>
                    <div class="text-xs text-gray-500">Stok : 50</div>
                    <div class="flex justify-between items-center mt-2">
                        <span class="font-bold">Rp9.000</span>
                        <span>→</span>
                    </div>
                </div>
            </a>
        <a href= class="border rounded-lg overflow-hidden shadow-sm block hover:shadow-md transition">
            <img src="https://images.theconversation.com/files/496952/original/file-20221123-16-cg0nlw.jpg?ixlib=rb-4.1.0&q=20&auto=format&w=320&fit=clip&dpr=2&usm=12&cs=strip" alt="Lidah Mertua" />
            <div class="p-2 text-sm">
            <div class="text-gray-500 text-xs">Tanaman Hias</div>
            <div class="font-medium">Bibit Lidah Mertua</div>
            <div class="text-xs text-gray-500">Stok : 70</div>
            <div class="flex justify-between items-center mt-2">
                <span class="font-bold">Rp15.000</span>
                <span>→</span>
            </div>
        </div>
        </a>
        <!-- Monstera x3 -->
        {{-- @for ($i = 0; $i < 3; $i++)
            <a href="{{ route('katalog.detail', ['id' => 100 + $i]) }}" class="border rounded-lg overflow-hidden shadow-sm block hover:shadow-md transition">
                <img src="https://images.theconversation.com/files/496952/original/file-20221123-16-cg0nlw.jpg?ixlib=rb-4.1.0&q=20&auto=format&w=320&fit=clip&dpr=2&usm=12&cs=strip" alt="Monstera" />
                <div class="p-2 text-sm">
                    <div class="text-gray-500 text-xs">Tanaman Hias</div>
                    <div class="font-medium">Bibit Monstera</div>
                    <div class="text-xs text-gray-500">Stok : 100</div>
                    <div class="flex justify-between items-center mt-2">
                        <span class="font-bold">Rp21.000</span>
                        <span>→</span>
                    </div>
                </div>
            </a>
        @endfor --}}
        </div>
    </div>

    <div class="mt-8">
        <h2 class="text-xl text-green-700 font-semibold mb-3">Tanaman Herbal</h2>
        <div class="grid grid-cols-5 gap-4">
            <a href="" class="border rounded-lg overflow-hidden shadow-sm block hover:shadow-md transition">
                <img src="https://images.theconversation.com/files/496952/original/file-20221123-16-cg0nlw.jpg?ixlib=rb-4.1.0&q=20&auto=format&w=320&fit=clip&dpr=2&usm=12&cs=strip" alt="Jahe" />
                <div class="p-2 text-sm">
                <div class="text-gray-500 text-xs">Tanaman Herbal</div>
                <div class="font-medium">Bibit Jahe</div>
                <div class="text-xs text-gray-500">Stok : 45</div>
                <div class="flex justify-between items-center mt-2">
                    <span class="font-bold">Rp5.000</span>
                    <span>→</span>
                </div>
        </div>
        </a>
        <a href="" class="border rounded-lg overflow-hidden shadow-sm block hover:shadow-md transition">
            <img src="https://images.theconversation.com/files/496952/original/file-20221123-16-cg0nlw.jpg?ixlib=rb-4.1.0&q=20&auto=format&w=320&fit=clip&dpr=2&usm=12&cs=strip" alt="Sirih" />
                <div class="p-2 text-sm">
                    <div class="text-gray-500 text-xs">Tanaman Herbal</div>
                    <div class="font-medium">Bibit Sirih</div>
                    <div class="text-xs text-gray-500">Stok : 100</div>
                    <div class="flex justify-between items-center mt-2">
                        <span class="font-bold">Rp14.000</span>
                        <span>→</span>
                    </div>
                </div>
        </a>
        </div>
    </div>

    <div class="mt-10 flex justify-end">
        <a href="{{route('v_tambahkatalog')}}" class="flex items-center bg-green-700 text-white px-4 py-2 rounded-full hover:bg-green-800">
            <span class="text-2xl mr-2">+</span> Tambah Katalog
        </a>
    </div>
</div>
@endsection
