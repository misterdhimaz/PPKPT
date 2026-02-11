@extends('layouts.app')

@section('content')

<div x-data="{
    scrollProgress: 0,
    activeSection: 'intro',
    showQuiz: false,
    quizScore: 0,
    updateScroll() {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        this.scrollProgress = (winScroll / height) * 100;

        // Spy Scroll Logic
        const sections = ['intro', 'bentuk', 'consent', '5d', 'mitos', 'unduh'];
        sections.forEach(id => {
            const el = document.getElementById(id);
            if (el) {
                const rect = el.getBoundingClientRect();
                if (rect.top >= 0 && rect.top <= 300) {
                    this.activeSection = id;
                }
            }
        });
    }
}"
@scroll.window="updateScroll()"
class="bg-gray-50 min-h-screen font-sans">

    <div class="fixed top-0 left-0 h-1.5 bg-unsri-yellow z-[60] transition-all duration-100 ease-out"
         :style="'width: ' + scrollProgress + '%'"></div>

    <header class="relative h-[70vh] min-h-[600px] flex items-center justify-center overflow-hidden bg-[#0B1E33]">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-[#1a4c85] via-[#0B1E33] to-[#000000] opacity-80"></div>
            <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>

            <div class="absolute top-1/4 left-10 w-24 h-24 border-4 border-unsri-yellow/20 rounded-full animate-float-slow"></div>
            <div class="absolute bottom-1/4 right-10 w-40 h-40 border-4 border-unsri-green/20 rounded-lg rotate-45 animate-float-slow animation-delay-2000"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <span class="inline-block py-2 px-6 rounded-full bg-white/10 border border-white/20 backdrop-blur-md text-unsri-yellow text-sm font-bold tracking-[0.2em] mb-6 animate-fade-in-down">
                PUSAT EDUKASI DIGITAL
            </span>

            <h1 class="text-5xl md:text-7xl font-extrabold text-white leading-tight mb-8 drop-shadow-2xl">
                Kenali. Cegah. <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-unsri-yellow via-yellow-200 to-orange-400">
                    Lakhiri Kekerasan.
                </span>
            </h1>

            <p class="text-gray-300 text-lg md:text-xl max-w-3xl mx-auto mb-12 leading-relaxed font-light">
                Modul pembelajaran komprehensif tentang Pencegahan dan Penanganan Kekerasan di Lingkungan Perguruan Tinggi (PPKPT) Universitas Sriwijaya.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <a href="#intro" class="group bg-unsri-yellow text-[#0B1E33] font-bold px-10 py-4 rounded-full shadow-[0_0_30px_rgba(255,215,0,0.3)] hover:shadow-[0_0_50px_rgba(255,215,0,0.6)] transition-all transform hover:-translate-y-1 flex items-center justify-center gap-3">
                    Mulai Belajar <i class="fas fa-arrow-down group-hover:translate-y-1 transition-transform"></i>
                </a>
                <a href="#unduh" class="group bg-transparent border-2 border-white/30 text-white font-bold px-10 py-4 rounded-full hover:bg-white/10 transition-all flex items-center justify-center gap-3">
                    <i class="fas fa-download"></i> Unduh Materi
                </a>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-[100px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="fill-gray-50"></path>
            </svg>
        </div>
    </header>

    <div class="container mx-auto px-4 md:px-6 py-12">
        <div class="flex flex-col lg:flex-row gap-12">

            <aside class="hidden lg:block w-1/4 relative">
                <div class="sticky top-32 bg-white rounded-2xl shadow-xl p-6 border border-gray-100">
                    <h3 class="text-lg font-bold text-unsri-green mb-6 border-b pb-4">Daftar Isi Modul</h3>
                    <nav class="space-y-2">
                        <a href="#intro"
                           @click.prevent="document.getElementById('intro').scrollIntoView({behavior: 'smooth'})"
                           class="block px-4 py-3 rounded-lg text-sm font-medium transition-all duration-300 flex items-center justify-between group"
                           :class="activeSection === 'intro' ? 'bg-unsri-yellow text-[#0B1E33] font-bold shadow-md' : 'text-gray-500 hover:bg-gray-50 hover:text-unsri-green'">
                            <span>1. Definisi & Dasar</span>
                            <i class="fas fa-book-open opacity-0 group-hover:opacity-100 transition-opacity" :class="activeSection === 'intro' ? 'opacity-100' : ''"></i>
                        </a>
                        <a href="#bentuk"
                           @click.prevent="document.getElementById('bentuk').scrollIntoView({behavior: 'smooth'})"
                           class="block px-4 py-3 rounded-lg text-sm font-medium transition-all duration-300 flex items-center justify-between group"
                           :class="activeSection === 'bentuk' ? 'bg-unsri-yellow text-[#0B1E33] font-bold shadow-md' : 'text-gray-500 hover:bg-gray-50 hover:text-unsri-green'">
                            <span>2. 21 Bentuk KS</span>
                            <i class="fas fa-list-ol opacity-0 group-hover:opacity-100 transition-opacity" :class="activeSection === 'bentuk' ? 'opacity-100' : ''"></i>
                        </a>
                        <a href="#consent"
                           @click.prevent="document.getElementById('consent').scrollIntoView({behavior: 'smooth'})"
                           class="block px-4 py-3 rounded-lg text-sm font-medium transition-all duration-300 flex items-center justify-between group"
                           :class="activeSection === 'consent' ? 'bg-unsri-yellow text-[#0B1E33] font-bold shadow-md' : 'text-gray-500 hover:bg-gray-50 hover:text-unsri-green'">
                            <span>3. Konsep Consent</span>
                            <i class="fas fa-hand-holding-heart opacity-0 group-hover:opacity-100 transition-opacity" :class="activeSection === 'consent' ? 'opacity-100' : ''"></i>
                        </a>
                        <a href="#5d"
                           @click.prevent="document.getElementById('5d').scrollIntoView({behavior: 'smooth'})"
                           class="block px-4 py-3 rounded-lg text-sm font-medium transition-all duration-300 flex items-center justify-between group"
                           :class="activeSection === '5d' ? 'bg-unsri-yellow text-[#0B1E33] font-bold shadow-md' : 'text-gray-500 hover:bg-gray-50 hover:text-unsri-green'">
                            <span>4. Metode Intervensi 5D</span>
                            <i class="fas fa-hands-helping opacity-0 group-hover:opacity-100 transition-opacity" :class="activeSection === '5d' ? 'opacity-100' : ''"></i>
                        </a>
                        <a href="#mitos"
                           @click.prevent="document.getElementById('mitos').scrollIntoView({behavior: 'smooth'})"
                           class="block px-4 py-3 rounded-lg text-sm font-medium transition-all duration-300 flex items-center justify-between group"
                           :class="activeSection === 'mitos' ? 'bg-unsri-yellow text-[#0B1E33] font-bold shadow-md' : 'text-gray-500 hover:bg-gray-50 hover:text-unsri-green'">
                            <span>5. Mitos vs Fakta</span>
                            <i class="fas fa-lightbulb opacity-0 group-hover:opacity-100 transition-opacity" :class="activeSection === 'mitos' ? 'opacity-100' : ''"></i>
                        </a>
                        <a href="#unduh"
                           @click.prevent="document.getElementById('unduh').scrollIntoView({behavior: 'smooth'})"
                           class="block px-4 py-3 rounded-lg text-sm font-medium transition-all duration-300 flex items-center justify-between group"
                           :class="activeSection === 'unduh' ? 'bg-unsri-yellow text-[#0B1E33] font-bold shadow-md' : 'text-gray-500 hover:bg-gray-50 hover:text-unsri-green'">
                            <span>6. Unduh Materi</span>
                            <i class="fas fa-download opacity-0 group-hover:opacity-100 transition-opacity" :class="activeSection === 'unduh' ? 'opacity-100' : ''"></i>
                        </a>
                    </nav>

                    <div class="mt-8 bg-[#0B1E33] rounded-xl p-6 text-center text-white relative overflow-hidden">
                        <div class="absolute inset-0 bg-unsri-green opacity-20 pattern-dots"></div>
                        <i class="fas fa-shield-alt text-4xl text-unsri-yellow mb-4"></i>
                        <h4 class="font-bold text-sm mb-2">Butuh Bantuan?</h4>
                        <p class="text-xs text-gray-400 mb-4">Jangan ragu melapor jika melihat atau mengalami kekerasan.</p>
                        <a href="#" class="block w-full py-2 bg-unsri-yellow text-[#0B1E33] text-xs font-bold rounded-full hover:bg-white transition">Lapor Sekarang</a>
                    </div>
                </div>
            </aside>

            <main class="w-full lg:w-3/4 space-y-24">

                <section id="intro" class="scroll-mt-32">
                    <div class="bg-white rounded-3xl p-8 md:p-12 shadow-lg border-l-8 border-unsri-yellow relative overflow-hidden">
                        <div class="absolute top-0 right-0 -mt-10 -mr-10 w-40 h-40 bg-unsri-yellow/10 rounded-full blur-2xl"></div>

                        <div class="flex items-center gap-4 mb-6">
                            <span class="w-12 h-12 bg-unsri-yellow/20 text-unsri-green rounded-full flex items-center justify-center text-xl font-bold">01</span>
                            <h2 class="text-3xl font-extrabold text-[#0B1E33]">Definisi & Payung Hukum</h2>
                        </div>

                        <article class="prose prose-lg text-gray-600 max-w-none">
                            <p class="lead font-medium text-gray-800">
                                Kekerasan Seksual adalah setiap perbuatan merendahkan, menghina, melecehkan, dan/atau menyerang tubuh, dan/atau fungsi reproduksi seseorang, karena ketimpangan relasi kuasa dan/atau gender, yang berakibat atau dapat berakibat penderitaan psikis dan/atau fisik.
                            </p>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-8">
                                <div class="bg-gray-50 p-6 rounded-xl border border-gray-200 hover:border-unsri-green transition">
                                    <h4 class="font-bold text-unsri-green flex items-center gap-2 mb-2">
                                        <i class="fas fa-gavel"></i> Permendikbud No. 30/2021
                                    </h4>
                                    <p class="text-sm">Tentang Pencegahan dan Penanganan Kekerasan Seksual di Lingkungan Perguruan Tinggi.</p>
                                </div>
                                <div class="bg-gray-50 p-6 rounded-xl border border-gray-200 hover:border-unsri-green transition">
                                    <h4 class="font-bold text-unsri-green flex items-center gap-2 mb-2">
                                        <i class="fas fa-file-contract"></i> Peraturan Rektor UNSRI
                                    </h4>
                                    <p class="text-sm">Turunan regulasi yang mengatur spesifik mekanisme Satgas PPKPT di Universitas Sriwijaya.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>

                <section id="bentuk" class="scroll-mt-32">
                    <div class="text-center mb-12">
                        <span class="text-unsri-green font-bold tracking-widest uppercase text-sm">Wajib Tahu</span>
                        <h2 class="text-4xl font-extrabold text-[#0B1E33] mt-2">21 Bentuk Kekerasan Seksual</h2>
                        <p class="text-gray-500 mt-4">Sesuai Pasal 5 Permendikbudristek No. 30 Tahun 2021</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                        @php
                            $bentuk = [
                                ['icon' => 'fa-comments', 'color' => 'blue', 'title' => 'Verbal', 'desc' => 'Ujaran diskriminasi, lelucon seksis, siulan (catcalling), atau rayuan yang tidak diinginkan.'],
                                ['icon' => 'fa-mobile-alt', 'color' => 'purple', 'title' => 'Daring / Online (KBGO)', 'desc' => 'Mengirim pesan/gambar seksual, menyebarkan konten pribadi tanpa izin (revenge porn).'],
                                ['icon' => 'fa-eye', 'color' => 'yellow', 'title' => 'Non-Fisik', 'desc' => 'Menatap dengan nuansa seksual, memperlihatkan alat kelamin, mengintip.'],
                                ['icon' => 'fa-hand-paper', 'color' => 'red', 'title' => 'Fisik', 'desc' => 'Menyentuh, meraba, memeluk, mencium, hingga penetrasi paksa.'],
                                ['icon' => 'fa-balance-scale-right', 'color' => 'green', 'title' => 'Pemaksaan', 'desc' => 'Memaksa aborsi, memaksa hamil, atau memaksa transaksi seksual.'],
                                ['icon' => 'fa-users', 'color' => 'orange', 'title' => 'Budaya & Hukuman', 'desc' => 'Hukuman bernuansa seksual atau membiarkan budaya kekerasan terjadi.']
                            ];
                        @endphp

                        @foreach($bentuk as $item)
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 group">
                            <div class="w-14 h-14 rounded-full bg-{{ $item['color'] }}-50 flex items-center justify-center text-{{ $item['color'] }}-500 text-2xl mb-4 group-hover:scale-110 transition-transform">
                                <i class="fas {{ $item['icon'] }}"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-{{ $item['color'] }}-600 transition-colors">{{ $item['title'] }}</h3>
                            <p class="text-sm text-gray-500 leading-relaxed">{{ $item['desc'] }}</p>
                        </div>
                        @endforeach
                    </div>

                    <div class="mt-8 text-center">
                        <button @click="showQuiz = !showQuiz" class="text-unsri-green font-bold text-sm underline hover:text-unsri-yellow transition">
                            Lihat daftar lengkap 21 bentuk (PDF)
                        </button>
                    </div>
                </section>

                <section id="consent" class="scroll-mt-32">
                    <div class="bg-[#0B1E33] rounded-3xl p-10 text-white relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-full h-full bg-[url('https://www.transparenttextures.com/patterns/stardust.png')] opacity-20"></div>

                        <div class="relative z-10 flex flex-col md:flex-row items-center gap-12">
                            <div class="w-full md:w-1/2">
                                <span class="bg-unsri-yellow text-[#0B1E33] text-xs font-bold px-3 py-1 rounded mb-4 inline-block">KONSEP KUNCI</span>
                                <h2 class="text-4xl font-extrabold mb-6">Pentingnya <span class="text-unsri-yellow">Consent</span></h2>
                                <p class="text-gray-300 leading-relaxed mb-8">
                                    Persetujuan (Consent) adalah batas mutlak. Tanpa persetujuan yang jelas, sadar, dan sukarela, tindakan seksual adalah kekerasan. Ingat prinsip <strong>F.R.I.E.S</strong>.
                                </p>

                                <div class="space-y-3" x-data="{ open: null }">
                                    @foreach(['Freely Given' => 'Diberikan secara bebas tanpa paksaan/manipulasi.', 'Reversible' => 'Bisa ditarik kembali kapan saja.', 'Informed' => 'Mengetahui sepenuhnya apa yang akan dilakukan.', 'Enthusiastic' => 'Antusias melakukan, bukan diam atau pasrah.', 'Specific' => 'Persetujuan untuk satu hal bukan berarti untuk semua hal.'] as $key => $val)
                                    <div class="border border-white/20 rounded-lg overflow-hidden">
                                        <button @click="open === '{{ $key }}' ? open = null : open = '{{ $key }}'"
                                                class="w-full px-4 py-3 flex justify-between items-center bg-white/5 hover:bg-white/10 transition">
                                            <span class="font-bold text-unsri-yellow">{{ $key }}</span>
                                            <i class="fas fa-chevron-down transition-transform text-xs" :class="open === '{{ $key }}' ? 'rotate-180' : ''"></i>
                                        </button>
                                        <div x-show="open === '{{ $key }}'" x-collapse class="px-4 py-3 text-sm text-gray-300 bg-black/20">
                                            {{ $val }}
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="w-full md:w-1/2 flex justify-center">
                                <div class="relative w-64 h-64">
                                    <div class="absolute inset-0 bg-unsri-green rounded-full opacity-20 animate-ping"></div>
                                    <div class="absolute inset-4 bg-unsri-green rounded-full opacity-40 animate-pulse"></div>
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <img src="https://img.freepik.com/free-vector/consent-concept-illustration_114360-4973.jpg" class="rounded-full border-4 border-unsri-yellow shadow-2xl w-56 h-56 object-cover">
                                    </div>
                                    <div class="absolute -bottom-4 -right-4 bg-white text-[#0B1E33] px-6 py-2 rounded-xl shadow-lg font-bold text-sm">
                                        No Consent = Violence
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="5d" class="scroll-mt-32">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-extrabold text-[#0B1E33]">Metode Intervensi 5D</h2>
                        <p class="text-gray-500 mt-2">Apa yang harus dilakukan jika melihat kekerasan terjadi?</p>
                    </div>

                    <div class="relative">
                        <div class="absolute top-1/2 left-0 w-full h-1 bg-gray-200 -z-10 hidden md:block transform -translate-y-1/2"></div>

                        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                            @foreach([
                                ['D' => 'Direct', 'act' => 'Tegur Langsung', 'icon' => 'fa-exclamation-circle', 'color' => 'red'],
                                ['D' => 'Distract', 'act' => 'Alihkan Perhatian', 'icon' => 'fa-magic', 'color' => 'blue'],
                                ['D' => 'Delegate', 'act' => 'Cari Bantuan', 'icon' => 'fa-users-cog', 'color' => 'green'],
                                ['D' => 'Delay', 'act' => 'Tunggu & Hibur', 'icon' => 'fa-clock', 'color' => 'purple'],
                                ['D' => 'Document', 'act' => 'Rekam Bukti', 'icon' => 'fa-camera', 'color' => 'yellow']
                            ] as $step)
                            <div class="bg-white p-6 rounded-xl shadow-lg border-2 border-white hover:border-{{ $step['color'] }}-400 transition-all text-center group cursor-pointer h-full flex flex-col items-center justify-center">
                                <div class="w-16 h-16 rounded-full bg-{{ $step['color'] }}-100 text-{{ $step['color'] }}-600 flex items-center justify-center text-2xl mb-4 group-hover:rotate-12 transition-transform">
                                    <i class="fas {{ $step['icon'] }}"></i>
                                </div>
                                <h3 class="text-2xl font-black text-gray-800">{{ $step['D'] }}</h3>
                                <p class="text-sm font-medium text-gray-500 uppercase tracking-wide mt-1">{{ $step['act'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>

                <section id="mitos" class="scroll-mt-32">
                    <div class="bg-gradient-to-br from-unsri-green to-teal-800 rounded-3xl p-10 text-white">
                        <h2 class="text-3xl font-bold mb-8 text-center">Mitos vs Fakta</h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="group h-48 perspective cursor-pointer">
                                <div class="relative w-full h-full transition-transform duration-700 transform-style-3d group-hover:rotate-y-180">
                                    <div class="absolute inset-0 bg-white/10 backdrop-blur border border-white/20 rounded-2xl p-6 flex flex-col justify-center items-center text-center backface-hidden">
                                        <span class="bg-red-500 text-xs font-bold px-3 py-1 rounded-full mb-3">MITOS</span>
                                        <p class="font-semibold text-lg">"Korban kekerasan seksual pasti berpakaian terbuka."</p>
                                    </div>
                                    <div class="absolute inset-0 bg-white text-[#0B1E33] rounded-2xl p-6 flex flex-col justify-center items-center text-center backface-hidden rotate-y-180 shadow-xl">
                                        <span class="bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-3">FAKTA</span>
                                        <p class="font-medium text-sm">Data menunjukkan mayoritas korban memakai pakaian tertutup/biasa. Kekerasan terjadi karena niat pelaku, bukan pakaian korban.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="group h-48 perspective cursor-pointer">
                                <div class="relative w-full h-full transition-transform duration-700 transform-style-3d group-hover:rotate-y-180">
                                    <div class="absolute inset-0 bg-white/10 backdrop-blur border border-white/20 rounded-2xl p-6 flex flex-col justify-center items-center text-center backface-hidden">
                                        <span class="bg-red-500 text-xs font-bold px-3 py-1 rounded-full mb-3">MITOS</span>
                                        <p class="font-semibold text-lg">"Laki-laki tidak bisa menjadi korban kekerasan seksual."</p>
                                    </div>
                                    <div class="absolute inset-0 bg-white text-[#0B1E33] rounded-2xl p-6 flex flex-col justify-center items-center text-center backface-hidden rotate-y-180 shadow-xl">
                                        <span class="bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-3">FAKTA</span>
                                        <p class="font-medium text-sm">Siapapun bisa menjadi korban, terlepas dari gender. Laki-laki seringkali enggan melapor karena stigma sosial.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="unduh" class="scroll-mt-32">
                    <h2 class="text-3xl font-extrabold text-[#0B1E33] mb-8 border-l-4 border-unsri-yellow pl-4">Perpustakaan Digital</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex items-start gap-4 p-6 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-lg transition-all group">
                            <div class="w-16 h-16 bg-red-100 text-red-500 rounded-lg flex items-center justify-center text-3xl group-hover:scale-110 transition-transform">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold text-gray-800 text-lg">Buku Saku PPKPT UNSRI</h4>
                                <p class="text-sm text-gray-500 mb-3">Panduan lengkap bagi mahasiswa, dosen, dan tendik.</p>
                                <a href="#" class="text-unsri-green text-sm font-bold flex items-center gap-2 hover:gap-3 transition-all">
                                    Download PDF (2.5 MB) <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-6 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-lg transition-all group">
                            <div class="w-16 h-16 bg-blue-100 text-blue-500 rounded-lg flex items-center justify-center text-3xl group-hover:scale-110 transition-transform">
                                <i class="fas fa-image"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold text-gray-800 text-lg">Paket Stiker & Poster</h4>
                                <p class="text-sm text-gray-500 mb-3">Asset visual untuk kampanye di media sosial ormawa.</p>
                                <a href="#" class="text-unsri-green text-sm font-bold flex items-center gap-2 hover:gap-3 transition-all">
                                    Download ZIP (15 MB) <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

            </main>
        </div>
    </div>

    <section class="py-20 bg-white border-t border-gray-100">
        <div class="container mx-auto px-6 max-w-4xl text-center">
            <div class="w-24 h-24 bg-unsri-yellow rounded-full flex items-center justify-center mx-auto mb-8 shadow-xl animate-bounce">
                <i class="fas fa-bullhorn text-4xl text-[#0B1E33]"></i>
            </div>
            <h2 class="text-4xl font-extrabold text-[#0B1E33] mb-6">Siap Menjadi Agen Perubahan?</h2>
            <p class="text-gray-500 text-lg mb-10">
                Ilmu yang Anda dapatkan hari ini bisa menyelamatkan seseorang di masa depan. Mari ciptakan Universitas Sriwijaya yang aman, nyaman, dan bebas kekerasan.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#" class="bg-unsri-green text-white font-bold px-12 py-4 rounded-full shadow-xl hover:bg-teal-800 transition-all transform hover:-translate-y-1">
                    Buat Laporan Pengaduan
                </a>
            </div>
        </div>
    </section>

</div>

@endsection

@push('styles')
<style>
    /* 3D Flip Card Effect */
    .perspective { perspective: 1000px; }
    .transform-style-3d { transform-style: preserve-3d; }
    .backface-hidden { backface-visibility: hidden; }
    .rotate-y-180 { transform: rotateY(180deg); }

    /* Custom Animations */
    @keyframes float-slow {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(5deg); }
    }
    .animate-float-slow { animation: float-slow 8s ease-in-out infinite; }
    .animation-delay-2000 { animation-delay: 2s; }

    @keyframes fade-in-down {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in-down { animation: fade-in-down 1s ease-out forwards; }

    /* Pattern Backgrounds */
    .pattern-dots {
        background-image: radial-gradient(currentColor 1px, transparent 1px);
        background-size: 20px 20px;
    }

    /* Scroll Behavior smooth override */
    html { scroll-behavior: smooth; }
    .scroll-mt-32 { scroll-margin-top: 8rem; }
</style>
@endpush
