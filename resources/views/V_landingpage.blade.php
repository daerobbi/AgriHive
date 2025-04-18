<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AgriHive - Daftar Rekan Tani</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-800 font-sans">
  <!-- Header -->
  <header class="bg-green-700 text-white py-3">
    <div class="container mx-auto flex justify-between items-center px-4">
      <div class="flex items-center gap-2">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Emojione_1F331.svg/2048px-Emojione_1F331.svg.png" alt="Logo" class="w-8 h-8">
        <h1 class="text-xl font-bold">AgriHive</h1>
      </div>
      <nav class="space-x-4 text-sm font-medium">
        <a href="#" class="hover:underline">Beranda</a>
        <a href="#" class="text-yellow-300 hover:underline">Cari & Ajukan Bibit</a>
        <a href="#" class="hover:underline">Riwayat Pengajuan</a>
        <a href="#" class="hover:underline">Broadcast</a>
        <a href="#" class="hover:underline">Akun</a>
        <span class="ml-2">🔔</span>
      </nav>
    </div>
  </header>

  <!-- Filter Bar -->
  <div class="bg-yellow-400 py-4">
    <div class="container mx-auto px-4 flex flex-wrap items-center gap-4">
      <label class="font-semibold">Lokasi :</label>
      <select class="bg-white px-3 py-1 rounded border text-sm">
        <option>Surabaya</option>
      </select>
      <label class="font-semibold">Jenis Bibit :</label>
      <select class="bg-white px-3 py-1 rounded border text-sm">
        <option>Tanaman Hias</option>
      </select>
      <button class="bg-green-700 text-white px-4 py-1 rounded text-sm">Cari 🔍</button>
      <a href="#" class="ml-auto text-sm font-semibold text-green-900 underline">Lihat Pengajuan terbaru &gt;</a>
    </div>
  </div>

  <!-- Daftar Rekan Tani -->
  <div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold text-center mb-8">Daftar Rekan Tani</h2>

    <div class="space-y-0 divide-y divide-gray-300 border-t border-b">
      <!-- Card Rekan -->
      <div class="flex justify-between items-start py-4">
        <div>
          <h3 class="font-bold text-lg">Gardenia Agro</h3>
          <p class="text-sm">Lokasi : Surabaya</p>
          <p class="text-sm">Jenis Bibit : Tanaman Herbal dan Organik, Tanaman Hias</p>
        </div>
        <a href="#" class="text-sm font-semibold text-green-700 underline whitespace-nowrap">Lihat Profil &gt;</a>
      </div>
      <div class="flex justify-between items-start py-4">
        <div>
          <h3 class="font-bold text-lg">Hijau Alam Makmur</h3>
          <p class="text-sm">Lokasi : Surabaya</p>
          <p class="text-sm">Jenis Bibit : Tanaman Herbal dan Organik, Tanaman Hias</p>
        </div>
        <a href="#" class="text-sm font-semibold text-green-700 underline whitespace-nowrap">Lihat Profil &gt;</a>
      </div>
      <div class="flex justify-between items-start py-4">
        <div>
          <h3 class="font-bold text-lg">Citra Tanam Raya</h3>
          <p class="text-sm">Lokasi : Surabaya</p>
          <p class="text-sm">Jenis Bibit : Tanaman Herbal dan Organik, Tanaman Hias</p>
        </div>
        <a href="#" class="text-sm font-semibold text-green-700 underline whitespace-nowrap">Lihat Profil &gt;</a>
      </div>
      <div class="flex justify-between items-start py-4">
        <div>
          <h3 class="font-bold text-lg">PT Agrifolia</h3>
          <p class="text-sm">Lokasi : Surabaya</p>
          <p class="text-sm">Jenis Bibit : Tanaman Herbal dan Organik, Tanaman Hias</p>
        </div>
        <a href="#" class="text-sm font-semibold text-green-700 underline whitespace-nowrap">Lihat Profil &gt;</a>
      </div>
      <div class="flex justify-between items-start py-4">
        <div>
          <h3 class="font-bold text-lg">Roemah Hias</h3>
          <p class="text-sm">Lokasi : Surabaya</p>
          <p class="text-sm">Jenis Bibit : Tanaman Herbal dan Organik, Tanaman Hias</p>
        </div>
        <a href="#" class="text-sm font-semibold text-green-700 underline whitespace-nowrap">Lihat Profil &gt;</a>
      </div>
    </div>

    <div class="mt-6">
      <a href="#" class="text-sm text-green-700 underline">&lt; kembali</a>
    </div>
  </div>
</body>
</html>
