<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AgriHive Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"
        rel="stylesheet"
    />
    <style>
        body {
        font-family: "Inter", sans-serif;
        }
    </style>
    </head>
    <body class="relative bg-[#e3e3e3] min-h-screen overflow-x-hidden">
    <!-- Large white circle top left -->
    <div
        class="absolute -top-[40%] -left-[40%] w-[1200px] h-[1200px] rounded-full bg-white"
        aria-hidden="true"
    ></div>
    <!-- Large green circle center right -->
    <div
        class="absolute top-[50%] right-0 w-[900px] h-[900px] rounded-full bg-[#1b7a4a] translate-y-[-50%]"
        aria-hidden="true"
    ></div>
    <!-- Yellow circle bottom right -->
    <div
        class="absolute bottom-10 right-20 w-40 h-40 rounded-full bg-[#f5c518] shadow-lg"
        aria-hidden="true"
    ></div>

    <main class="relative max-w-[1400px] mx-auto px-6 py-20 flex flex-col lg:flex-row items-center lg:items-start gap-10">
        <!-- Left text block -->
        <div class="flex-1 max-w-[400px] lg:max-w-[450px] z-10">
        <h1
            class="text-[120px] font-extrabold leading-[1] text-[#042a1f] drop-shadow-[2px_2px_0_rgba(0,0,0,0.15)]"
        >
            AgriHive
        </h1>
        <p class="mt-6 text-lg text-[#1a1a1a] max-w-[350px]">
            Daftarkan akun Anda sebagai Rekan Tani atau Agen , <strong>untuk mulai menggunakan layanan <span class="text-[#1b7a4a]">Agrihive !</span></strong>
        </p>
        </div>

        <!-- Form container -->
        <form
        class="bg-white rounded-3xl shadow-lg p-10 w-full max-w-[1100px] z-10"
        aria-label="Register"
        >
        <h2 class="text-xl font-bold text-center mb-8">Register</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-x-8 gap-y-6">
            <!-- Column 1 -->
            <div class="flex flex-col space-y-4">
            <label for="nama" class="text-sm text-[#6b7280]">Nama</label>
            <input
                id="nama"
                type="text"
                class="border border-[#1b7a4a] rounded px-3 py-2 focus:outline-none focus:ring-1 focus:ring-[#1b7a4a]"
            />

            <label for="alamat" class="text-sm text-[#6b7280]">Alamat</label>
            <input
                id="alamat"
                type="text"
                class="border border-[#1b7a4a] rounded px-3 py-2 focus:outline-none focus:ring-1 focus:ring-[#1b7a4a]"
            />

            <label for="kota" class="text-sm text-[#6b7280]">Kota Domisili</label>
            <select
                id="kota"
                class="border border-[#1b7a4a] rounded px-3 py-2 focus:outline-none focus:ring-1 focus:ring-[#1b7a4a] appearance-none bg-white"
            >
                <option></option>
            </select>
            </div>

            <!-- Column 2 -->
            <div class="flex flex-col space-y-4">
            <label for="whatsapp" class="text-sm text-[#6b7280]"
                >No. WhatsApp</label
            >
            <input
                id="whatsapp"
                type="text"
                class="border border-[#1b7a4a] rounded px-3 py-2 focus:outline-none focus:ring-1 focus:ring-[#1b7a4a]"
            />

            <label for="email" class="text-sm text-[#6b7280]">Email</label>
            <input
                id="email"
                type="email"
                class="border border-[#1b7a4a] rounded px-3 py-2 focus:outline-none focus:ring-1 focus:ring-[#1b7a4a]"
            />

            <label for="password" class="text-sm text-[#6b7280]">Password</label>
            <input
                id="password"
                type="password"
                class="border border-[#1b7a4a] rounded px-3 py-2 focus:outline-none focus:ring-1 focus:ring-[#1b7a4a]"
            />
            </div>

            <!-- Column 3 -->
            <div class="flex flex-col space-y-4">
            <label for="daftar" class="text-sm text-[#6b7280]">Daftar Sebagai</label>
            <select
                id="daftar"
                class="border border-[#1b7a4a] rounded px-3 py-2 focus:outline-none focus:ring-1 focus:ring-[#1b7a4a] appearance-none bg-white"
            >
                <option></option>
            </select>

            <p class="text-xs text-[#6b7280] mt-1">
                *Unduh dan lengkapi dokumen berikut :
            </p>
            <a
                href="#"
                class="text-[#1b7a4a] text-sm border border-[#1b7a4a] rounded px-3 py-1 inline-block hover:bg-[#1b7a4a] hover:text-white transition"
                >template_bukti_usaha.docx</a
            >

            <p class="text-xs text-[#6b7280] mt-4">
                *Unggah dokumen yang telah dilengkapi:
            </p>
            <button
                type="button"
                class="bg-[#2ecc71] text-white rounded px-4 py-2 mt-1 hover:bg-[#27ae60] transition"
            >
                Unggah Dokumen Verifikasi
            </button>
            </div>
        </div>

        <div class="mt-8 flex flex-col items-center">
            <button
            type="submit"
            class="bg-[#0b4d2f] text-white rounded px-8 py-2 w-40 hover:bg-[#0a3f26] transition"
            >
            Register
            </button>
            <p class="mt-4 text-sm text-[#1a1a1a]">
            Sudah mempunyai akun?
            <a href="#" class="text-[#1b7a4a] hover:underline"
                >Tekan disini untuk Login</a
            >
            </p>
        </div>
        </form>
    </main>
</body>
</html>
