<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SATGAS PPKPT UNSRI</title>
    <link rel="icon" type="image/png" href="{{ asset('images/satgas.png') }}">

    {{-- Script Tailwind (CDN) + Konfigurasi Lengkap --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'unsri-yellow': '#FFD700',      // Kuning Emas
                        'unsri-dark-yellow': '#FACC15', // Kuning Hover
                        'unsri-green': '#2F4F2F',       // Hijau Army Gelap
                        'unsri-light-green': '#ECFCCB', // Hijau Muda
                        'unsri-blue': '#0EA5E9',        // Biru Link
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                    animation: {
                        'blob': 'blob 7s infinite',
                    },
                    keyframes: {
                        blob: {
                            '0%': { transform: 'translate(0px, 0px) scale(1)' },
                            '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
                            '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' },
                        }
                    }
                }
            }
        }
    </script>

    {{-- Font Google (Poppins) --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- Font Awesome (Icons) --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    {{-- AOS Animation CSS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Alpine.js (WAJIB UNTUK RESPONSIVE) --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style> [x-cloak] { display: none !important; } </style>
</head>

<body class="font-sans antialiased flex flex-col min-h-screen">

    {{-- NAVBAR --}}
    {{-- x-data untuk kontrol menu mobile --}}
    <nav id="navbar" x-data="{ mobileMenuOpen: false }" class="bg-white sticky top-0 z-50 transition-all duration-300 border-b border-gray-100">

        <div class="px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">

                {{-- LOGO (TETAP SAMA) --}}
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/satgas.png') }}" alt="Logo Satgas" class="h-10 md:h-14 w-auto"> {{-- Responsive: h-10 di HP, h-14 di Laptop (Sesuai Asli) --}}

                    <div class="hidden md:block"> {{-- Teks ini sembunyi di HP agar tidak berantakan --}}
                        <h1 class="font-extrabold text-xl leading-none tracking-tight">
                            <span class="text-[#556B2F] font-bold">SATGAS PPKPT</span>
                            <span class="text-unsri-yellow">UNSRI</span>
                        </h1>
                        <p class="text-green-5000 text-[10px] font-bold tracking-widest mt-1">PENCEGAHAN & PENANGANAN KEKERASAN</p>
                    </div>
                    {{-- Teks Alternatif untuk HP (Lebih Ringkas) --}}
                    <div class="block md:hidden">
                        <h1 class="font-extrabold text-lg leading-none">
                            <span class="text-[#556B2F]">PPKPT</span> <span class="text-unsri-yellow">UNSRI</span>
                        </h1>
                    </div>
                </div>

                {{-- DESKTOP MENU (TAMPILAN 100% SAMA SEPERTI ASLI DI LAPTOP) --}}
                <div class="hidden lg:flex items-center gap-8">
                    <div class="relative">
                        <input type="text" placeholder="Cari Kasus" class="pl-4 pr-10 py-1.5 rounded-full border border-unsri-yellow text-sm focus:outline-none focus:ring-2 focus:ring-unsri-yellow w-64 placeholder-gray-400 shadow-sm">
                        <button class="absolute right-3 top-1/2 -translate-y-1/2 text-unsri-yellow hover:text-unsri-dark-yellow">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>

                    <div class="flex gap-8 text-xs font-bold uppercase tracking-wide text-[#556B2F]">
                        <a href="/" class="hover:text-unsri-yellow transition-colors {{ request()->is('/') ? 'text-unsri-yellow' : '' }}">Home</a>
                        <a href="/edukasi" class="hover:text-unsri-yellow transition-colors {{ request()->is('edukasi') ? 'text-unsri-yellow' : '' }}">Edukasi</a>
                        <a href="/daftar-penanganan" class="hover:text-unsri-yellow transition-colors {{ request()->is('daftar-penanganan') ? 'text-unsri-green' : '' }}">Daftar Penanganan</a>
                    </div>
                </div>

                {{-- TOMBOL HAMBURGER (HANYA MUNCUL DI HP/TABLET) --}}
                <div class="flex lg:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-[#556B2F] p-2 focus:outline-none">
                        <i class="fas fa-bars text-2xl" x-show="!mobileMenuOpen"></i>
                        <i class="fas fa-times text-2xl" x-show="mobileMenuOpen" x-cloak></i>
                    </button>
                </div>
            </div>
        </div>

        {{-- MOBILE MENU DROPDOWN (HANYA MUNCUL SAAT DIKLIK DI HP) --}}
        <div x-show="mobileMenuOpen" x-collapse x-cloak class="lg:hidden bg-white border-t border-gray-100 shadow-xl absolute w-full left-0 z-50">
            <div class="px-4 pt-4 pb-6 space-y-4">
                {{-- Search di HP --}}
                <div class="relative w-full">
                    <input type="text" placeholder="Cari Kasus..." class="w-full pl-4 pr-10 py-2.5 rounded-lg border border-gray-200 bg-gray-50 text-sm focus:outline-none focus:ring-2 focus:ring-unsri-yellow">
                    <button class="absolute right-3 top-1/2 -translate-y-1/2 text-unsri-yellow">
                        <i class="fas fa-search"></i>
                    </button>
                </div>

                {{-- Links di HP --}}
                <div class="flex flex-col space-y-2">
                    <a href="/" class="block px-4 py-3 rounded-lg text-sm font-bold text-[#556B2F] hover:bg-unsri-light-green {{ request()->is('/') ? 'bg-unsri-light-green' : '' }}">
                        <i class="fas fa-home w-6 text-center mr-2"></i> Home
                    </a>
                    <a href="/edukasi" class="block px-4 py-3 rounded-lg text-sm font-bold text-[#556B2F] hover:bg-unsri-light-green {{ request()->is('edukasi') ? 'bg-unsri-light-green' : '' }}">
                        <i class="fas fa-book-reader w-6 text-center mr-2"></i> Edukasi
                    </a>
                    <a href="/daftar-penanganan" class="block px-4 py-3 rounded-lg text-sm font-bold text-[#556B2F] hover:bg-unsri-light-green {{ request()->is('daftar-penanganan') ? 'bg-unsri-light-green' : '' }}">
                        <i class="fas fa-clipboard-list w-6 text-center mr-2"></i> Daftar Penanganan
                    </a>
                </div>
            </div>
        </div>
    </nav>

    {{-- MAIN CONTENT --}}
    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="bg-gradient-to-r from-[#0B1E33] to-[#556028] text-white pt-16 pb-8 border-b-8 border-unsri-blue mt-auto">
        <div class="max-w-7xl mx-auto px-4">

            {{-- Grid Responsif: 1 kolom di HP, 3 di Laptop (Sesuai Asli) --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mb-12">

                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/satgas.png') }}" alt="Logo Unsri" class="h-16 w-auto">
                        <div>
                            <h2 class="text-2xl font-bold leading-none tracking-tight">
                                SATGAS PPKPT <span class="text-unsri-yellow">UNSRI</span>
                            </h2>
                            <p class="text-unsri-yellow text-[10px] font-bold tracking-[0.15em] mt-1">PENCEGAHAN & PENANGANAN KEKERASAN</p>
                        </div>
                    </div>

                    <div class="flex gap-4 items-start">
                        <div class="w-1 h-16 bg-unsri-yellow rounded-full shrink-0"></div>
                        <p class="text-xs text-gray-200 leading-relaxed font-light">
                            <strong class="text-white">Gedung KPA Universitas Sriwijaya, Lt. 1.</strong> Jalan Raya<br>
                            Palembang-Prabumulih Km. 32, Indralaya, Ogan Ilir,<br>
                            Sumatera Selatan 20662.
                        </p>
                    </div>
                </div>

                <div class="lg:pl-10">
                    <h3 class="text-unsri-yellow font-bold text-sm uppercase tracking-widest mb-6">AKSES CEPAT SISTEM</h3>
                    <ul class="space-y-3 text-sm font-medium">
                        <li><a href="#" class="flex items-center gap-2 hover:text-unsri-yellow transition-colors group"><i class="fas fa-chevron-right text-[10px] text-unsri-yellow group-hover:translate-x-1 transition-transform"></i> Edukasi & SOP</a></li>
                        <li><a href="#" class="flex items-center gap-2 hover:text-unsri-yellow transition-colors group"><i class="fas fa-chevron-right text-[10px] text-unsri-yellow group-hover:translate-x-1 transition-transform"></i> Monitoring</a></li>
                        <li><a href="#" class="flex items-center gap-2 hover:text-unsri-yellow transition-colors group"><i class="fas fa-chevron-right text-[10px] text-unsri-yellow group-hover:translate-x-1 transition-transform"></i> Lacak Laporan</a></li>
                        <li><a href="#" class="flex items-center gap-2 hover:text-unsri-yellow transition-colors group"><i class="fas fa-chevron-right text-[10px] text-unsri-yellow group-hover:translate-x-1 transition-transform"></i> Buat Laporan</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-unsri-yellow font-bold text-sm uppercase tracking-widest mb-6">LANDASAN & BANTUAN</h3>
                    <ul class="space-y-3 text-sm font-medium">
                        <li><a href="#" class="flex items-center gap-2 hover:text-unsri-yellow transition-colors group"><i class="fas fa-chevron-right text-[10px] text-unsri-yellow group-hover:translate-x-1 transition-transform"></i> Permendikbudristek No. 55 Tahun 2024</a></li>
                        <li><a href="#" class="flex items-center gap-2 hover:text-unsri-yellow transition-colors group"><i class="fas fa-chevron-right text-[10px] text-unsri-yellow group-hover:translate-x-1 transition-transform"></i> Peraturan Rektor Unsri Terkait PPKPT</a></li>
                        <li><a href="#" class="flex items-center gap-2 hover:text-unsri-yellow transition-colors group"><i class="fas fa-chevron-right text-[10px] text-unsri-yellow group-hover:translate-x-1 transition-transform"></i> Layanan Konseling & Psikolog</a></li>
                        <li><a href="#" class="flex items-center gap-2 hover:text-unsri-yellow transition-colors group"><i class="fas fa-chevron-right text-[10px] text-unsri-yellow group-hover:translate-x-1 transition-transform"></i> Bantuan Hukum & Advokasi</a></li>
                    </ul>

                    <div class="mt-12 flex flex-wrap gap-4 text-[10px] font-bold tracking-widest text-gray-300 uppercase">
                        <a href="#" class="hover:text-white transition-colors">Kebijakan Privasi</a>
                        <a href="#" class="hover:text-white transition-colors">SOP & Pedoman</a>
                    </div>
                </div>
            </div>

            <div class="border-t border-white/20 pt-8 text-center">
                <p class="text-[10px] font-bold tracking-widest text-gray-300">
                    &copy; 2026 SATGAS PPKPT UNIVERSITAS SRIWIJAYA. HAK CIPTA DILINDUNGI.
                </p>
            </div>
        </div>
    </footer>

    {{-- SCRIPTS WAJIB --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100,
        });

        const navbar = document.getElementById("navbar");
        window.addEventListener("scroll", function () {
            if (window.scrollY > 10) {
                navbar.classList.add("shadow-lg");
            } else {
                navbar.classList.remove("shadow-lg");
            }
        });
    </script>

    @stack('scripts')

</body>
</html>
