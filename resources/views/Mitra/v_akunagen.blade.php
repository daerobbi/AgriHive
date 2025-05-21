@extends('mitra.app')

@section('content')
<div class="flex flex-col md:flex-row justify-between flex-grow px-6 py-8 gap-8 max-w-7xl mx-auto w-full">

    <!-- Left profile card -->
    <section class="bg-white rounded-2xl shadow-md p-6 max-w-md w-full flex flex-col items-center">
        <img alt="Foto Profil Agen" class="rounded-xl border border-gray-300 mb-4 w-full object-cover max-h-[220px]" height="220"
            src="{{ asset('storage/' . $agen->foto_profil) }}" width="320" />

        <h2 class="font-extrabold text-lg text-center mb-0.5">
            {{ $agen->nama }}
        </h2>
        <p class="text-center text-gray-600 font-semibold text-sm mb-5">
            Agen
        </p>

        <div class="w-full space-y-5">
            <div>
                <label class="block text-xs text-gray-500 mb-1 select-none">Nama Lengkap</label>
                <div class="w-full rounded-md bg-gray-300 text-10 px-3 py-1.5 select-text">
                    {{ $agen->nama }}
                </div>
            </div>
            <div>
                <label class="block text-xs text-gray-500 mb-1 select-none">Email</label>
                <div class="w-full rounded-md bg-gray-300 text-10 px-3 py-1.5 select-text">
                    {{ $agen->User->email }}
                </div>
            </div>
            <div>
                <label class="block text-xs text-gray-500 mb-1 select-none">Alamat</label>
                <div class="w-full rounded-md bg-gray-300 text-10 px-3 py-1.5 select-text  whitespace-wrap">
                    {{ $agen->alamat }}
                </div>
            </div>
            <div>
                <label class="block text-xs text-gray-500 mb-1 select-none">No WhatsApp</label>
                <div class="w-full rounded-md bg-gray-300 text-10 px-3 py-1.5 select-text">
                    {{ $agen->no_hp }}
                </div>
            </div>
        </div>
    </section>

    <!-- Right account info -->
    <section class="flex flex-col flex-grow max-w-lg w-full space-y-6">
        <div class="flex items-center justify-end space-x-4">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="bg-[#1b6b44] text-white text-sm font-semibold rounded-full px-4 py-2 flex items-center gap-2 hover:bg-[#165734] transition" type="submit">
                    Logout <i class="fas fa-sign-out-alt"></i>
                </button>
            </form>

            <h3 class="text-lg font-normal select-none">
                Hallo, {{ $agen->nama }}!
            </h3>
            <img alt="Foto Profil Agen" class="w-10 h-10 rounded-full object-cover" height="40"
                src="{{ asset('storage/' . $agen->foto_profil) }}" width="40" />
        </div>

        <div class="bg-white rounded-2xl shadow-md p-6 space-y-5 max-w-lg w-full">
            <h4 class="font-semibold text-sm select-none">Informasi Akun</h4>
            <div>
                <label class="block text-xs text-gray-500 mb-1 select-none">Username (Email)</label>
                <div class="w-full rounded-md bg-gray-300 text-10 px-3 py-2 select-text">
                    {{ $agen->user->email }}
                </div>
            </div>

            <div class="flex items-center space-x-3">
                <div class="flex-grow">
                    <label class="block text-xs text-gray-500 mb-1 select-none">Password</label>
                    <div class="w-full rounded-md bg-gray-300 text-xs px-3 py-2 select-text">
                        ••••••••••
                    </div>
                </div>
                <button class="text-xs bg-gray-300 rounded-full px-3 py-1 text-gray-600 flex items-center gap-1 cursor-default select-none" disabled type="button">
                    Ganti Password <i class="fas fa-lock text-xs"></i>
                </button>
            </div>
        </div>
    </section>
</div>

<!-- Floating Button -->
<div class="fixed bottom-8 right-8">
    <a href="{{ route('agen.editprofil') }}" class="bg-[#00c853] text-white font-semibold rounded-full px-5 py-2 flex items-center gap-2 hover:bg-[#00b14a] transition">
        Edit Profil <i class="fas fa-pencil-alt"></i>
    </a>
</div>
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
