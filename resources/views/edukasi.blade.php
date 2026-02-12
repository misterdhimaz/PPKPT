@extends('layouts.app')

@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">

<div x-data="edukasiApp()"
     x-init="initApp()"
     class="font-body text-slate-800 bg-slate-50 relative overflow-x-hidden selection:bg-unsri-yellow selection:text-slate-900"
     @scroll.window="handleScroll">

    <div class="fixed top-0 left-0 h-1.5 z-[100] w-full bg-slate-200/20 backdrop-blur-sm">
        <div class="h-full bg-gradient-to-r from-unsri-yellow via-orange-400 to-red-500 transition-all duration-150 ease-out shadow-[0_0_15px_rgba(255,193,7,0.8)] relative"
             :style="'width: ' + scrollProgress + '%'">
             <div class="absolute right-0 top-1/2 -translate-y-1/2 w-1 h-4 bg-white rounded-full shadow-lg opacity-50"></div>
        </div>
    </div>

   <header class="relative h-screen min-h-[800px] flex items-center justify-center overflow-hidden bg-[#0B1E33]">

        <div class="absolute inset-0 z-0 select-none">

            <img src="https://unsri.ac.id/frontend/images/slider/home1/unsri_landmark_idl.jpg"
                 class="w-full h-full object-cover opacity-100 fixed-parallax scale-105"
                 alt="Background UNSRI">

            <div class="absolute inset-0 bg-[#0B1E33]/70"></div>

            <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-unsri-yellow/30 rounded-full mix-blend-screen filter blur-[100px] animate-blob"></div>
            <div class="absolute top-[20%] right-[-10%] w-[400px] h-[400px] bg-cyan-500/30 rounded-full mix-blend-screen filter blur-[100px] animate-blob animation-delay-2000"></div>

            <div class="particles">
                @for($i = 0; $i < 20; $i++)
                    <div class="particle" style="top: {{ rand(0, 100) }}%; left: {{ rand(0, 100) }}%; animation-delay: {{ rand(0, 5) }}s;"></div>
                @endfor
            </div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center flex flex-col items-center">

            <div class="inline-flex items-center gap-3 bg-white/5 backdrop-blur-xl border border-white/10 px-6 py-2 rounded-full mb-8 animate-fade-in-up shadow-2xl hover:bg-white/10 hover:scale-105 transition duration-300 cursor-default ring-1 ring-white/20">
                <div class="relative flex h-3 w-3">
                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                </div>
                <span class="text-xs font-bold text-gray-200 tracking-[0.2em] uppercase font-heading">Permendikbudristek 55/2024</span>
            </div>

            <h1 class="text-5xl md:text-7xl lg:text-8xl font-extrabold text-white leading-[1.05] mb-8 drop-shadow-2xl animate-fade-in-up animation-delay-300 font-heading tracking-tight">
                KAMPUS <span class="text-transparent bg-clip-text bg-gradient-to-r from-unsri-yellow to-yellow-200 relative inline-block">
                    AMAN
                    <svg class="absolute w-full h-3 -bottom-1 left-0 text-unsri-yellow opacity-60" viewBox="0 0 100 10" preserveAspectRatio="none"><path d="M0 5 Q 50 10 100 5" stroke="currentColor" stroke-width="3" fill="none" /></svg>
                </span><br>
                PRESTASI <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-emerald-300">NYAMAN</span>
            </h1>

            <p class="text-slate-300 text-lg md:text-xl max-w-2xl mx-auto mb-12 font-light leading-relaxed animate-fade-in-up animation-delay-500 glass-text">
                Pusat Edukasi Resmi Satgas PPKPT Universitas Sriwijaya. Pelajari hak, kewajiban, dan mekanisme pencegahan kekerasan demi mewujudkan Tri Dharma yang bermartabat.
            </p>

            <div class="flex flex-col sm:flex-row gap-5 animate-fade-in-up animation-delay-700 w-full sm:w-auto">
                <button @click="scrollToSection('materi')" class="group relative px-8 py-4 bg-unsri-yellow text-[#0B1E33] font-bold rounded-full overflow-hidden shadow-[0_0_40px_rgba(255,215,0,0.3)] hover:shadow-[0_0_60px_rgba(255,215,0,0.6)] hover:-translate-y-1 transition-all duration-300 w-full sm:w-auto">
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-transparent via-white/50 to-transparent -translate-x-full group-hover:animate-shimmer"></span>
                    <span class="relative flex items-center justify-center gap-3">
                        <i class="fas fa-book-reader text-xl group-hover:rotate-12 transition-transform"></i>
                        <span>Pelajari Modul</span>
                    </span>
                </button>

                <button @click="scrollToSection('quiz-section')" class="group relative px-8 py-4 bg-white/5 border border-white/20 text-white font-bold rounded-full hover:bg-white/10 hover:border-white/50 hover:-translate-y-1 transition-all duration-300 backdrop-blur-md w-full sm:w-auto">
                    <span class="relative flex items-center justify-center gap-3">
                        <i class="fas fa-brain text-xl text-unsri-green group-hover:text-emerald-300 transition-colors"></i>
                        <span>Uji Pemahaman</span>
                    </span>
                </button>
            </div>

            <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce-slow opacity-50 hidden md:block">
                <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center p-1">
                    <div class="w-1 h-2 bg-white rounded-full animate-scroll-down"></div>
                </div>
            </div>
        </div>


    </header>

    <div class="container mx-auto px-4 md:px-6 py-20 relative" id="materi">

        <aside class="hidden xl:block fixed left-10 top-1/2 -translate-y-1/2 z-40 w-64">
             <nav class="space-y-4">
                <template x-for="item in navItems">
                    <a :href="'#' + item.id"
                       @click.prevent="scrollToSection(item.id)"
                       class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 group"
                       :class="activeSection === item.id ? 'bg-[#0B1E33] text-white shadow-lg translate-x-2' : 'bg-white/80 text-gray-500 hover:bg-white hover:shadow-md'">
                        <div class="w-8 h-8 rounded-full flex items-center justify-center transition-colors"
                             :class="activeSection === item.id ? 'bg-unsri-yellow text-[#0B1E33]' : 'bg-gray-100 text-gray-400 group-hover:bg-gray-200'">
                            <i :class="item.icon + ' text-xs'"></i>
                        </div>
                        <span class="text-sm font-bold font-heading" x-text="item.label"></span>
                    </a>
                </template>
             </nav>
        </aside>

        <div class="flex flex-col lg:flex-row gap-10 xl:gap-16 justify-center">

            <main class="w-full lg:w-4/5 xl:w-3/4 space-y-32 pb-20">

                <section id="def" class="scroll-mt-32 group perspective-1000">
                    <div class="relative bg-white rounded-[2.5rem] p-8 md:p-14 shadow-2xl border border-white/50 overflow-hidden hover:shadow-[0_20px_60px_rgba(0,0,0,0.05)] transition-all duration-500 transform-style-3d">

                        <div class="absolute inset-0 bg-gradient-to-br from-white via-white to-gray-50"></div>
                        <div class="absolute -top-32 -right-32 w-96 h-96 bg-unsri-yellow/10 rounded-full blur-[100px] group-hover:bg-unsri-yellow/20 transition-all duration-1000"></div>

                        <div class="flex flex-col md:flex-row items-start gap-6 mb-12 relative z-10">
                            <div class="w-20 h-20 bg-[#0B1E33] text-unsri-yellow rounded-3xl flex items-center justify-center text-3xl font-black shadow-lg shadow-blue-900/20 shrink-0 transform group-hover:rotate-6 group-hover:scale-110 transition-transform duration-500 border-4 border-white">
                                01
                            </div>
                            <div class="pt-1">
                                <h2 class="text-3xl md:text-4xl font-extrabold text-[#0B1E33] mb-3 font-heading tracking-tight">Definisi & Prinsip Dasar</h2>
                                <div class="inline-flex items-center gap-2 text-xs font-bold text-[#0B1E33]/60 bg-slate-100 px-4 py-2 rounded-full uppercase tracking-wider border border-slate-200">
                                    <i class="fas fa-gavel text-unsri-yellow"></i> Pasal 1 & 4 Permendikbudristek 55/2024
                                </div>
                            </div>
                        </div>

                        <div class="relative z-10">
                            <blockquote class="p-8 md:p-10 bg-gradient-to-r from-[#F8F9FA] to-white border-l-[6px] border-unsri-yellow rounded-r-3xl mb-12 relative overflow-hidden shadow-sm group-hover:border-l-[10px] transition-all">
                                <i class="fas fa-quote-right text-7xl text-gray-100 absolute bottom-0 right-4 -z-10 rotate-12"></i>
                                <p class="text-xl md:text-2xl font-serif text-slate-700 italic leading-relaxed">
                                    "<strong class="text-[#0B1E33] underline decoration-unsri-yellow decoration-4 underline-offset-4">Kekerasan</strong> adalah setiap perbuatan, ucapan, dan/atau tindakan yang dilakukan secara fisik, psikis, dan/atau melalui teknologi informasi yang mengakibatkan ketakutan, sakit, trauma, kerusakan, dan/atau penderitaan lainnya bagi korban."
                                </p>
                            </blockquote>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-lg hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group/card relative overflow-hidden">
                                    <div class="absolute top-0 right-0 w-24 h-24 bg-blue-50 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover/card:scale-150"></div>
                                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-700 text-white rounded-2xl flex items-center justify-center text-2xl mb-6 shadow-md shadow-blue-500/30 relative z-10">
                                        <i class="fas fa-balance-scale"></i>
                                    </div>
                                    <h4 class="font-bold text-xl text-[#0B1E33] mb-3 font-heading relative z-10">Ketimpangan Relasi Kuasa</h4>
                                    <p class="text-sm leading-relaxed text-slate-500 relative z-10">
                                        Kondisi penyalahgunaan wewenang, status sosial, atau pendidikan (Contoh: Dosen > Mahasiswa) untuk mengendalikan orang lain.
                                        <span class="block mt-2 font-semibold text-blue-600">Akar masalah kekerasan (Pasal 8).</span>
                                    </p>
                                </div>

                                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-lg hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group/card relative overflow-hidden">
                                    <div class="absolute top-0 right-0 w-24 h-24 bg-emerald-50 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover/card:scale-150"></div>
                                    <div class="w-14 h-14 bg-gradient-to-br from-emerald-400 to-green-600 text-white rounded-2xl flex items-center justify-center text-2xl mb-6 shadow-md shadow-green-500/30 relative z-10">
                                        <i class="fas fa-hand-holding-heart"></i>
                                    </div>
                                    <h4 class="font-bold text-xl text-[#0B1E33] mb-3 font-heading relative z-10">Berpusat Pada Korban</h4>
                                    <p class="text-sm leading-relaxed text-slate-500 relative z-10">
                                        Proses penanganan wajib memprioritaskan keamanan, kerahasiaan identitas, dan pemulihan korban di atas reputasi institusi.
                                        <span class="block mt-2 font-semibold text-green-600">Prinsip Utama (Pasal 4).</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="jenis" class="scroll-mt-32">
                    <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
                        <div>
                            <span class="text-unsri-green font-bold tracking-[0.2em] text-xs uppercase block mb-3 bg-green-50 w-fit px-3 py-1 rounded-lg text-emerald-700">Klasifikasi Pelanggaran</span>
                            <h2 class="text-4xl md:text-5xl font-extrabold text-[#0B1E33] mb-3 font-heading">
                                6 Bentuk <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-orange-600">Kekerasan</span>
                            </h2>
                            <p class="text-slate-500 font-medium">Klik kartu untuk melihat detail pasal terkait.</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <template x-for="type in violenceTypes" :key="type.title">
                            <div class="group relative h-full bg-white rounded-[2rem] p-1 shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 cursor-pointer"
                                 @click="openModal(type)">
                                <div class="absolute inset-0 rounded-[2rem] opacity-0 group-hover:opacity-100 transition-opacity duration-500"
                                     :class="'bg-gradient-to-b ' + type.borderGradient"></div>

                                <div class="relative h-full bg-white rounded-[1.8rem] p-7 flex flex-col overflow-hidden">
                                    <div class="absolute -right-6 -bottom-6 text-[8rem] opacity-[0.03] transform rotate-12 transition-transform duration-700 group-hover:scale-110 group-hover:rotate-0"
                                         :class="type.textClass">
                                        <i :class="type.icon"></i>
                                    </div>

                                    <div class="flex justify-between items-start mb-6">
                                        <div class="w-14 h-14 rounded-2xl flex items-center justify-center text-2xl shadow-inner transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6"
                                             :class="type.iconBg">
                                            <i :class="type.icon"></i>
                                        </div>
                                        <span class="px-3 py-1 rounded-lg text-[10px] font-extrabold uppercase tracking-widest border transition-colors bg-white shadow-sm"
                                              :class="type.badgeClass" x-text="type.pasal"></span>
                                    </div>

                                    <h3 class="text-xl font-extrabold text-[#0B1E33] mb-2 font-heading leading-tight group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r" :class="type.titleGradient" x-text="type.title"></h3>

                                    <p class="text-sm text-slate-500 leading-relaxed mb-6 flex-grow line-clamp-3" x-text="type.desc"></p>

                                    <div class="mt-auto pt-4 border-t border-slate-50">
                                        <div class="flex items-center justify-between text-xs font-bold uppercase tracking-wider transition-colors" :class="type.textClass">
                                            <span>Baca Detail</span>
                                            <div class="w-8 h-8 rounded-full flex items-center justify-center bg-gray-50 group-hover:bg-current group-hover:text-white transition-all shadow-sm">
                                                <i class="fas fa-arrow-right transform group-hover:translate-x-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </section>

                <section id="pencegahan" class="scroll-mt-32">
                    <div class="bg-[#0B1E33] rounded-[3rem] p-8 md:p-16 text-white relative overflow-hidden shadow-2xl ring-8 ring-slate-100">
                        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-gradient-to-b from-unsri-yellow/10 to-transparent rounded-full blur-[120px] animate-pulse"></div>
                        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-emerald-500/10 rounded-full blur-[100px]"></div>
                        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-[0.03] mix-blend-overlay"></div>

                        <div class="relative z-10 text-center mb-20">
                            <span class="inline-block py-1 px-4 rounded-full border border-unsri-yellow/30 bg-unsri-yellow/10 text-unsri-yellow text-[10px] font-bold uppercase tracking-widest mb-6 backdrop-blur-md">SOP Penanganan</span>
                            <h2 class="text-4xl md:text-5xl font-extrabold mb-6 font-heading">Alur Laporan Kekerasan</h2>
                            <p class="text-slate-300 max-w-2xl mx-auto text-lg font-light">Mekanisme resmi Satgas PPKPT UNSRI dalam menangani laporan sesuai Pasal 48.</p>
                        </div>

                        <div class="relative z-10 hidden md:flex justify-between items-start px-4">
                            <div class="absolute top-[40px] left-0 w-full h-[2px] bg-gradient-to-r from-transparent via-white/20 to-transparent -z-10"></div>

                            <template x-for="(step, index) in steps" :key="index">
                                <div class="relative flex flex-col items-center group w-1/4">
                                    <div class="absolute -top-6 text-[10px] font-bold text-unsri-yellow bg-[#0B1E33] px-2 py-1 rounded border border-unsri-yellow/30" x-text="'STEP ' + (index + 1)"></div>

                                    <div class="w-20 h-20 rounded-[2rem] border-4 border-[#0B1E33] bg-[#142841] text-white flex items-center justify-center text-3xl font-bold z-10 shadow-[0_0_40px_rgba(0,0,0,0.3)] transition-all duration-500 group-hover:scale-110 group-hover:bg-unsri-yellow group-hover:text-[#0B1E33] group-hover:rotate-[360deg] relative overflow-hidden">
                                        <div class="absolute inset-0 bg-white/10 rounded-[2rem] scale-0 group-hover:scale-100 transition-transform duration-300 rounded-full"></div>
                                        <i :class="step.icon" class="relative z-10"></i>
                                    </div>

                                    <div class="mt-10 text-center transition-all duration-300 group-hover:-translate-y-2 px-2">
                                        <h4 class="font-bold text-xl text-white mb-3 font-heading" x-text="step.title"></h4>
                                        <p class="text-xs text-slate-400 leading-relaxed group-hover:text-slate-200 transition-colors" x-text="step.desc"></p>
                                    </div>
                                </div>
                            </template>
                        </div>

                        <div class="md:hidden space-y-8 relative z-10 pl-4 border-l-2 border-dashed border-white/10 ml-4">
                            <template x-for="(step, index) in steps">
                                <div class="relative pl-8 pb-4">
                                    <div class="absolute -left-[21px] top-0 w-10 h-10 rounded-xl border-4 border-[#0B1E33] bg-unsri-yellow text-[#0B1E33] flex items-center justify-center text-sm font-bold shadow-lg">
                                        <i :class="step.icon"></i>
                                    </div>
                                    <h4 class="font-bold text-xl text-white mb-1" x-text="step.title"></h4>
                                    <p class="text-sm text-slate-400 leading-relaxed" x-text="step.desc"></p>
                                </div>
                            </template>
                        </div>

                        <div class="mt-16 text-center relative z-10">
                            <a href="#" class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-md border border-white/20 text-white px-10 py-4 rounded-full font-bold hover:bg-white hover:text-[#0B1E33] transition-all duration-300 shadow-xl group hover:shadow-white/20">
                                <i class="fas fa-file-download group-hover:scale-110 transition-transform"></i> Unduh SOP Lengkap (PDF)
                            </a>
                        </div>
                    </div>
                </section>

                <section id="sanksi" class="scroll-mt-32">
                    <div class="flex flex-col md:flex-row items-start md:items-end justify-between gap-6 mb-12">
                        <div class="flex items-center gap-5">
                            <div class="w-3 h-20 bg-gradient-to-b from-red-500 to-red-900 rounded-full shadow-lg shadow-red-500/30"></div>
                            <div>
                                <h2 class="text-3xl md:text-5xl font-extrabold text-[#0B1E33] font-heading">Sanksi Administratif</h2>
                                <p class="text-slate-500 font-medium mt-2">Berdasarkan Pasal 73-77 Permendikbudristek 55/2024</p>
                            </div>
                        </div>

                        <div class="bg-white p-1.5 rounded-2xl shadow-lg shadow-gray-200/50 border border-gray-100 flex w-full md:w-auto" x-data="{ role: 'mhs' }">
                            <button @click="role = 'mhs'"
                                    class="flex-1 px-8 py-3 rounded-xl text-sm font-bold transition-all duration-300 relative overflow-hidden"
                                    :class="role === 'mhs' ? 'text-white shadow-md' : 'text-gray-500 hover:bg-gray-50'">
                                <div class="absolute inset-0 bg-[#0B1E33] transition-transform duration-300" :class="role === 'mhs' ? 'translate-y-0' : 'translate-y-full'"></div>
                                <span class="relative z-10">Mahasiswa</span>
                            </button>
                            <button @click="role = 'dosen'"
                                    class="flex-1 px-8 py-3 rounded-xl text-sm font-bold transition-all duration-300 relative overflow-hidden"
                                    :class="role === 'dosen' ? 'text-white shadow-md' : 'text-gray-500 hover:bg-gray-50'">
                                <div class="absolute inset-0 bg-[#0B1E33] transition-transform duration-300" :class="role === 'dosen' ? 'translate-y-0' : 'translate-y-full'"></div>
                                <span class="relative z-10">Dosen & Tendik</span>
                            </button>
                        </div>
                    </div>

                    <div class="bg-white rounded-[2.5rem] shadow-2xl shadow-gray-200/50 overflow-hidden border border-white" x-data="{ role: 'mhs' }">
                        <div class="grid grid-cols-1 lg:grid-cols-3 divide-y lg:divide-y-0 lg:divide-x divide-gray-100">

                            <div class="p-10 hover:bg-emerald-50/50 transition duration-500 group relative overflow-hidden">
                                <div class="absolute top-0 left-0 w-full h-1 bg-emerald-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                                <div class="flex items-center gap-4 mb-8">
                                    <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600 shadow-sm"><i class="fas fa-feather-alt"></i></div>
                                    <h3 class="text-2xl font-black text-emerald-800 tracking-tight font-heading">RINGAN</h3>
                                </div>
                                <ul class="space-y-6">
                                    <li class="flex items-start gap-4 group/item">
                                        <div class="mt-1 w-2 h-2 rounded-full bg-emerald-300 group-hover/item:bg-emerald-600 transition-colors"></div>
                                        <div>
                                            <strong class="text-slate-800 block text-lg mb-1 group-hover/item:text-emerald-700 transition-colors">Teguran Tertulis</strong>
                                            <span class="text-sm text-slate-500">Peringatan resmi administratif dari pimpinan.</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-4 group/item">
                                        <div class="mt-1 w-2 h-2 rounded-full bg-emerald-300 group-hover/item:bg-emerald-600 transition-colors"></div>
                                        <div>
                                            <strong class="text-slate-800 block text-lg mb-1 group-hover/item:text-emerald-700 transition-colors">Permohonan Maaf</strong>
                                            <span class="text-sm text-slate-500">Tertulis & dipublikasikan di internal/media.</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="p-10 hover:bg-amber-50/50 transition duration-500 group relative overflow-hidden">
                                <div class="absolute top-0 left-0 w-full h-1 bg-amber-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                                <div class="flex items-center gap-4 mb-8">
                                    <div class="w-10 h-10 rounded-full bg-amber-100 flex items-center justify-center text-amber-600 shadow-sm"><i class="fas fa-exclamation-triangle"></i></div>
                                    <h3 class="text-2xl font-black text-amber-800 tracking-tight font-heading">SEDANG</h3>
                                </div>
                                <ul class="space-y-6">
                                    <li class="flex items-start gap-4 group/item">
                                        <div class="mt-1 w-2 h-2 rounded-full bg-amber-300 group-hover/item:bg-amber-600 transition-colors"></div>
                                        <div>
                                            <strong class="text-slate-800 block text-lg mb-1 group-hover/item:text-amber-700 transition-colors">Skorsing</strong>
                                            <span class="text-sm text-slate-500">Pemberhentian sementara (1-2 semester).</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-4 group/item">
                                        <div class="mt-1 w-2 h-2 rounded-full bg-amber-300 group-hover/item:bg-amber-600 transition-colors"></div>
                                        <div>
                                            <strong class="text-slate-800 block text-lg mb-1 group-hover/item:text-amber-700 transition-colors">Pencabutan Hak</strong>
                                            <span class="text-sm text-slate-500">Penghentian beasiswa atau fasilitas.</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="p-10 hover:bg-red-50/50 transition duration-500 group relative overflow-hidden">
                                <div class="absolute top-0 left-0 w-full h-1 bg-red-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                                <div class="flex items-center gap-4 mb-8">
                                    <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center text-red-600 shadow-sm animate-pulse"><i class="fas fa-ban"></i></div>
                                    <h3 class="text-2xl font-black text-red-800 tracking-tight font-heading">BERAT</h3>
                                </div>
                                <ul class="space-y-6">
                                    <li class="flex items-start gap-4 group/item">
                                        <div class="mt-1 w-2 h-2 rounded-full bg-red-400 group-hover/item:bg-red-600 transition-colors"></div>
                                        <div>
                                            <strong class="text-slate-800 block text-lg mb-1 group-hover/item:text-red-700 transition-colors">Drop Out (DO)</strong>
                                            <span class="text-sm text-slate-500">Pemberhentian tetap sebagai mahasiswa.</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </section>

                <section id="korban" class="scroll-mt-32">
                    <div class="bg-gradient-to-br from-[#F8F9FA] to-white rounded-[3rem] p-10 md:p-14 border border-white shadow-2xl relative overflow-hidden group">

                        <div class="absolute -right-32 -top-32 w-[600px] h-[600px] bg-unsri-yellow/10 rounded-full mix-blend-multiply filter blur-[80px] group-hover:bg-unsri-yellow/20 transition-all duration-1000"></div>
                        <div class="absolute -left-32 -bottom-32 w-[500px] h-[500px] bg-blue-100 rounded-full mix-blend-multiply filter blur-[80px]"></div>

                        <div class="flex flex-col xl:flex-row gap-16 relative z-10 items-center">

                            <div class="w-full xl:w-1/3 text-center xl:text-left">
                                <span class="text-unsri-green font-bold tracking-[0.3em] text-xs uppercase mb-4 block">Pasal 90-92</span>
                                <h2 class="text-4xl md:text-5xl font-extrabold text-[#0B1E33] mb-6 font-heading leading-tight">Hak Pemulihan<br>Korban</h2>
                                <p class="text-slate-500 mb-10 text-base leading-relaxed">
                                    Perguruan tinggi memiliki kewajiban mutlak untuk memfasilitasi pemulihan fisik, psikis, dan menjamin keberlanjutan pendidikan korban tanpa diskriminasi sedikitpun.
                                </p>
                                <div class="bg-white p-6 rounded-3xl shadow-xl shadow-gray-200/50 transform hover:scale-105 transition duration-500 rotate-[-2deg] hover:rotate-0">
                                    <img src="https://img.freepik.com/free-vector/mental-health-awareness-concept_23-2148531011.jpg" class="rounded-2xl w-full object-cover h-48 mix-blend-multiply opacity-90 grayscale-[20%] group-hover:grayscale-0 transition-all duration-500">
                                </div>
                            </div>

                            <div class="w-full xl:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="col-span-1 md:col-span-2 bg-white/80 backdrop-blur-sm p-8 rounded-3xl border border-white shadow-sm hover:shadow-lg hover:border-green-200 transition duration-300 flex flex-col sm:flex-row gap-6 items-start">
                                    <div class="w-16 h-16 bg-green-50 text-green-600 rounded-2xl flex items-center justify-center shrink-0 text-3xl shadow-inner"><i class="fas fa-user-graduate"></i></div>
                                    <div>
                                        <h4 class="font-bold text-xl text-[#0B1E33] mb-2 font-heading">Jaminan Akademik</h4>
                                        <p class="text-slate-500 text-sm leading-relaxed">Masa studi tidak berkurang jika korban membutuhkan cuti. Hak mendapat bimbingan tambahan jika tertinggal materi.</p>
                                    </div>
                                </div>

                                <div class="bg-white/80 backdrop-blur-sm p-8 rounded-3xl border border-white shadow-sm hover:shadow-lg hover:border-pink-200 transition duration-300 flex flex-col items-start gap-6">
                                    <div class="w-14 h-14 bg-pink-50 text-pink-500 rounded-2xl flex items-center justify-center shrink-0 text-2xl shadow-inner"><i class="fas fa-heart-pulse"></i></div>
                                    <div>
                                        <h4 class="font-bold text-lg text-[#0B1E33] mb-2 font-heading">Layanan Medis</h4>
                                        <p class="text-slate-500 text-sm leading-relaxed">Akses pengobatan fisik dan konseling psikologis gratis dengan tenaga profesional.</p>
                                    </div>
                                </div>

                                <div class="bg-white/80 backdrop-blur-sm p-8 rounded-3xl border border-white shadow-sm hover:shadow-lg hover:border-blue-200 transition duration-300 flex flex-col items-start gap-6">
                                    <div class="w-14 h-14 bg-blue-50 text-blue-500 rounded-2xl flex items-center justify-center shrink-0 text-2xl shadow-inner"><i class="fas fa-shield-alt"></i></div>
                                    <div>
                                        <h4 class="font-bold text-lg text-[#0B1E33] mb-2 font-heading">Pelindungan Keamanan</h4>
                                        <p class="text-slate-500 text-sm leading-relaxed">Bebas dari ancaman fisik maupun daring (cyber-bullying) selama proses.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </main>
        </div>
    </div>

    <section id="quiz-section" class="py-32 bg-[#0B1E33] text-white relative overflow-hidden border-t-[10px] border-unsri-yellow">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10 mix-blend-overlay"></div>
        <div class="absolute -left-40 top-40 w-[800px] h-[800px] bg-unsri-yellow/10 rounded-full blur-[150px] animate-pulse"></div>
        <div class="absolute -right-40 bottom-0 w-[600px] h-[600px] bg-purple-600/20 rounded-full blur-[150px]"></div>

        <div class="container mx-auto px-6 max-w-4xl relative z-10">

            <div class="text-center mb-16">
                <span class="bg-gradient-to-r from-unsri-yellow to-orange-400 text-[#0B1E33] px-6 py-2 rounded-full text-xs font-black uppercase tracking-widest mb-8 inline-block shadow-lg shadow-yellow-500/20 transform hover:scale-105 transition-transform">Challenge Mode</span>
                <h2 class="text-4xl md:text-6xl font-extrabold text-white mb-6 font-heading">Uji Pemahaman Regulasi</h2>
                <p class="text-slate-300 text-xl font-light max-w-2xl mx-auto">Jawab 5 studi kasus berikut untuk menguji ketajaman logika Anda tentang Permendikbudristek 55/2024.</p>
            </div>

            <div class="bg-white/5 backdrop-blur-xl rounded-[3rem] p-8 md:p-16 shadow-2xl border border-white/10 min-h-[600px] flex flex-col justify-center relative overflow-hidden ring-1 ring-white/10">

                <canvas id="confetti" class="absolute inset-0 w-full h-full pointer-events-none z-50"></canvas>

                <div class="absolute top-0 left-0 w-full h-2 bg-white/5" x-show="!showQuizResult">
                    <div class="h-full bg-gradient-to-r from-unsri-yellow to-orange-500 transition-all duration-700 ease-out shadow-[0_0_20px_rgba(255,193,7,0.8)]"
                         :style="'width: ' + ((currentQuestion + 1) * 20) + '%'"></div>
                </div>

                <div class="h-full flex flex-col justify-center" x-show="!showQuizResult" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-y-8">
                    <div class="flex justify-between items-center mb-10">
                        <span class="text-sm font-bold text-unsri-yellow uppercase tracking-widest border-b border-unsri-yellow/30 pb-1">KASUS <span x-text="currentQuestion + 1"></span> / 5</span>
                        <div class="flex items-center gap-2">
                             <div class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></div>
                             <span class="text-xs font-bold text-slate-300 uppercase tracking-wide">HOTS Level</span>
                        </div>
                    </div>

                    <h3 class="text-2xl md:text-3xl font-bold text-white mb-12 leading-relaxed font-heading" x-text="questions[currentQuestion].q"></h3>

                    <div class="grid gap-4">
                        <template x-for="(opt, index) in questions[currentQuestion].options" :key="index">
                            <button @click="submitAnswer(index)"
                                    class="w-full text-left p-6 rounded-2xl border border-white/10 bg-white/5 hover:bg-unsri-yellow hover:text-[#0B1E33] hover:border-unsri-yellow hover:scale-[1.01] transition-all duration-200 group relative overflow-hidden active:scale-[0.99]">
                                <div class="flex items-center gap-6 relative z-10">
                                    <div class="w-10 h-10 rounded-full border border-white/30 flex items-center justify-center font-bold text-sm group-hover:border-[#0B1E33]/30" x-text="['A','B','C','D'][index]"></div>
                                    <span class="text-lg font-medium text-slate-200 group-hover:text-[#0B1E33]" x-text="opt"></span>
                                </div>
                            </button>
                        </template>
                    </div>
                </div>

                <div class="h-full flex flex-col justify-center items-center text-center py-10" x-show="showQuizResult" x-transition:enter="transition ease-out duration-500 delay-100">
                    <div class="w-48 h-48 rounded-full flex items-center justify-center mb-10 shadow-[0_0_60px_rgba(255,255,255,0.1)] animate-float border-[6px] border-white/10 relative"
                         :class="score >= 80 ? 'bg-gradient-to-br from-green-400 to-green-600 text-white' : 'bg-gradient-to-br from-red-400 to-red-600 text-white'">
                        <div class="absolute inset-0 rounded-full border border-white/20 animate-ping opacity-20"></div>
                        <i class="fas text-7xl relative z-10" :class="score >= 80 ? 'fa-trophy' : 'fa-book-reader'"></i>
                    </div>

                    <div class="mb-2 text-sm font-bold tracking-[0.3em] uppercase text-unsri-yellow">Skor Akhir</div>
                    <h3 class="text-7xl font-black text-white mb-6 font-heading tracking-tight"><span x-text="score"></span><span class="text-4xl text-white/40">/100</span></h3>

                    <div class="max-w-lg mx-auto mb-12 p-6 rounded-2xl bg-white/5 border border-white/10">
                        <p class="text-slate-200 text-lg font-medium leading-relaxed" x-text="score >= 80 ? 'Luar biasa! Analisis Anda tajam dan sesuai dengan regulasi Permendikbudristek 55/2024.' : 'Jangan menyerah! Silakan baca kembali modul di atas untuk memahami detail pasal-pasalnya.'"></p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-5">
                        <button @click="resetQuiz()" class="px-10 py-4 bg-white text-[#0B1E33] rounded-full font-bold hover:bg-unsri-yellow hover:scale-105 transition shadow-lg shadow-white/10">
                            <i class="fas fa-redo-alt mr-2"></i> Ulangi Kuis
                        </button>
                        <button @click="scrollToSection('materi')" class="px-10 py-4 border-2 border-white/20 text-white rounded-full font-bold hover:bg-white/10 hover:border-white transition">
                            <i class="fas fa-book-open mr-2"></i> Pelajari Materi
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-white relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:16px_16px] opacity-50"></div>
        <div class="container mx-auto px-6 text-center relative z-10">
            <div class="w-24 h-24 bg-gradient-to-br from-unsri-green to-teal-600 text-white rounded-3xl flex items-center justify-center mx-auto mb-10 text-4xl shadow-xl shadow-green-500/20 transform rotate-3 hover:rotate-0 transition-all duration-300">
                <i class="fas fa-shield-alt"></i>
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#0B1E33] mb-6 font-heading">Jangan Diam, Lawan Kekerasan!</h2>
            <p class="text-slate-500 text-lg mb-12 max-w-2xl mx-auto leading-relaxed">
                Satgas PPKPT UNSRI siap mendampingi Anda. Laporan Anda dilindungi kerahasiaannya dan ditangani secara profesional sesuai undang-undang.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <a href="#" class="group px-12 py-5 bg-gradient-to-r from-unsri-green to-teal-700 text-white font-bold rounded-full shadow-[0_10px_30px_rgba(20,184,166,0.4)] hover:shadow-[0_20px_40px_rgba(20,184,166,0.6)] hover:-translate-y-1 transition-all flex items-center justify-center gap-3">
                    <i class="fas fa-paper-plane text-xl group-hover:rotate-12 transition-transform"></i>
                    <span>Buat Laporan Sekarang</span>
                </a>
                <a href="{{ url('/') }}" class="px-12 py-5 bg-white border border-slate-200 text-slate-600 font-bold rounded-full hover:bg-slate-50 hover:border-slate-300 transition-all flex items-center justify-center gap-2">
                    <i class="fas fa-home"></i>
                    <span>Kembali ke Beranda</span>
                </a>
            </div>

        </div>
    </section>

    <div x-show="showModal"
         class="fixed inset-0 z-[200] flex items-center justify-center p-4"
         x-cloak
         @keydown.escape.window="showModal = false">

        <div class="absolute inset-0 bg-[#0B1E33]/90 backdrop-blur-md"
             x-show="showModal"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click="showModal = false"></div>

        <div class="bg-white rounded-[2.5rem] shadow-2xl w-full max-w-2xl overflow-hidden transform transition-all relative z-10 flex flex-col max-h-[90vh]"
             x-show="showModal"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-90 translate-y-10"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 scale-100 translate-y-0"
             x-transition:leave-end="opacity-0 scale-90 translate-y-10">

            <div class="bg-[#0B1E33] p-8 flex justify-between items-start relative overflow-hidden shrink-0">
                <div class="absolute inset-0 bg-unsri-yellow opacity-[0.05] [mask-image:radial-gradient(ellipse_at_center,black_20%,transparent_70%)] [background-size:20px_20px] [background-image:radial-gradient(#fff_1px,transparent_1px)]"></div>
                <div class="relative z-10 w-5/6">
                    <h3 class="text-3xl font-black text-white leading-tight font-heading" x-text="modalContent.title"></h3>
                    <div class="mt-4 inline-flex items-center gap-2 px-3 py-1.5 bg-white/10 rounded-lg text-xs font-bold text-unsri-yellow tracking-wider uppercase backdrop-blur-sm border border-white/10">
                        <i class="fas fa-book"></i> <span x-text="modalContent.pasal"></span>
                    </div>
                </div>
                <button @click="showModal = false" class="bg-white/10 text-white hover:bg-white hover:text-[#0B1E33] w-10 h-10 rounded-full flex items-center justify-center transition-all relative z-10 focus:outline-none focus:ring-2 focus:ring-white/50">
                    <i class="fas fa-times text-lg"></i>
                </button>
            </div>

            <div class="p-8 md:p-10 overflow-y-auto custom-scrollbar bg-white grow">
                <div class="prose prose-lg text-slate-600 max-w-none">
                    <p class="text-xl font-medium text-[#0B1E33] mb-8 leading-relaxed border-l-4 border-unsri-yellow pl-4" x-text="modalContent.desc"></p>

                    <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 shadow-inner">
                        <h4 class="font-bold text-[#0B1E33] text-sm uppercase tracking-widest mb-4 flex items-center gap-3">
                            <span class="w-8 h-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center text-sm"><i class="fas fa-list-ul"></i></span>
                            Cakupan & Contoh
                        </h4>
                        <p class="text-base leading-relaxed text-slate-600" x-text="modalContent.full"></p>
                    </div>
                </div>
            </div>

            <div class="p-6 bg-slate-50 text-right border-t border-slate-100 shrink-0">
                <button @click="showModal = false" class="px-8 py-3 bg-slate-200 text-slate-700 font-bold rounded-full hover:bg-slate-300 transition-all text-sm transform active:scale-95">
                    Tutup Penjelasan
                </button>
            </div>
        </div>
    </div>

</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('edukasiApp', () => ({
            scrollProgress: 0,
            activeSection: 'def',
            showModal: false,
            modalContent: {},

            // Quiz State
            currentQuestion: 0,
            score: 0,
            showQuizResult: false,


            // SOP Data
            steps: [
                { title: '1. Pelaporan', desc: 'Melapor melalui kanal resmi Satgas PPKPT atau Kemendikbudristek secara aman dan rahasia.', icon: 'fas fa-envelope-open-text' },
                { title: '2. Pemeriksaan', desc: 'Satgas melakukan pengumpulan bukti & keterangan saksi (Maksimal 30 Hari Kerja).', icon: 'fas fa-search-plus' },
                { title: '3. Rekomendasi', desc: 'Satgas menyusun kesimpulan & rekomendasi sanksi kepada Pimpinan Perguruan Tinggi.', icon: 'fas fa-file-signature' },
                { title: '4. Keputusan', desc: 'Rektor menetapkan Surat Keputusan (SK) sanksi & langkah pemulihan bagi korban.', icon: 'fas fa-gavel' }
            ],

            // Data Jenis Kekerasan (Enhanced with styling props)
            violenceTypes: [
                {
                    title: 'Kekerasan Seksual',
                    pasal: 'Pasal 12',
                    desc: 'Setiap perbuatan merendahkan, menghina, melecehkan, dan/atau menyerang tubuh, dan/atau fungsi reproduksi seseorang.',
                    full: 'Mencakup 21 bentuk spesifik mulai dari verbal (siulan, rayuan), non-fisik (tatapan, pamer alat kelamin), fisik (sentuhan paksa), hingga daring (mengirim konten seksual). Termasuk pemaksaan aborsi atau kehamilan paksa.',
                    icon: 'fas fa-heart-broken',
                    // Styling Props
                    titleGradient: 'from-pink-500 to-rose-600',
                    borderGradient: 'from-pink-500/20 to-transparent',
                    badgeClass: 'text-pink-600 border-pink-100 bg-pink-50',
                    iconBg: 'bg-pink-50 text-pink-500',
                    textClass: 'text-pink-600'
                },
                {
                    title: 'Perundungan',
                    pasal: 'Pasal 11',
                    desc: 'Kekerasan fisik dan/atau psikis yang dilakukan secara berulang karena ketimpangan relasi kuasa.',
                    full: 'Perilaku agresif yang disengaja dan berulang (repetitif) dengan tujuan menyakiti, seperti pengucilan sistematis, pemalakan, perpeloncoan, atau kekerasan fisik senioritas.',
                    icon: 'fas fa-bullhorn',
                    // Styling Props
                    titleGradient: 'from-orange-500 to-amber-600',
                    borderGradient: 'from-orange-500/20 to-transparent',
                    badgeClass: 'text-orange-600 border-orange-100 bg-orange-50',
                    iconBg: 'bg-orange-50 text-orange-500',
                    textClass: 'text-orange-600'
                },
                {
                    title: 'Kekerasan Fisik',
                    pasal: 'Pasal 9',
                    desc: 'Perbuatan dengan kontak fisik yang menimbulkan rasa sakit, luka, atau kematian.',
                    full: 'Meliputi tawuran, penganiayaan, perkelahian, hingga eksploitasi ekonomi melalui kerja paksa untuk keuntungan pelaku.',
                    icon: 'fas fa-fist-raised',
                    // Styling Props
                    titleGradient: 'from-blue-500 to-indigo-600',
                    borderGradient: 'from-blue-500/20 to-transparent',
                    badgeClass: 'text-blue-600 border-blue-100 bg-blue-50',
                    iconBg: 'bg-blue-50 text-blue-500',
                    textClass: 'text-blue-600'
                },
                {
                    title: 'Kekerasan Psikis',
                    pasal: 'Pasal 10',
                    desc: 'Perbuatan non-fisik yang merendahkan, menghina, menakuti, atau membuat tidak nyaman.',
                    full: 'Termasuk pengucilan, penolakan, pengabaian, penghinaan, penyebaran rumor, panggilan mengejek, intimidasi, teror, dan pemerasan.',
                    icon: 'fas fa-brain',
                    // Styling Props
                    titleGradient: 'from-purple-500 to-violet-600',
                    borderGradient: 'from-purple-500/20 to-transparent',
                    badgeClass: 'text-purple-600 border-purple-100 bg-purple-50',
                    iconBg: 'bg-purple-50 text-purple-500',
                    textClass: 'text-purple-600'
                },
                {
                    title: 'Diskriminasi',
                    pasal: 'Pasal 13',
                    desc: 'Pembedaan, pengecualian, atau pembatasan berdasarkan SARA, disabilitas, atau status sosial.',
                    full: 'Melarang penggunaan pakaian keagamaan, memaksa mengikuti ritual agama lain, atau menghalangi hak akademik mahasiswa disabilitas/berkebutuhan khusus.',
                    icon: 'fas fa-users-slash',
                    // Styling Props
                    titleGradient: 'from-green-500 to-emerald-600',
                    borderGradient: 'from-green-500/20 to-transparent',
                    badgeClass: 'text-green-600 border-green-100 bg-green-50',
                    iconBg: 'bg-green-50 text-green-500',
                    textClass: 'text-green-600'
                },
                {
                    title: 'Kebijakan Kekerasan',
                    pasal: 'Pasal 14',
                    desc: 'Kebijakan tertulis/tidak tertulis yang berpotensi menimbulkan kekerasan.',
                    full: 'Surat Keputusan (SK), Surat Edaran, atau instruksi lisan pimpinan/dosen yang melanggar hak asasi, mendiskriminasi, atau membiarkan terjadinya kekerasan.',
                    icon: 'fas fa-file-signature',
                    // Styling Props
                    titleGradient: 'from-gray-600 to-slate-700',
                    borderGradient: 'from-gray-500/20 to-transparent',
                    badgeClass: 'text-gray-600 border-gray-100 bg-gray-50',
                    iconBg: 'bg-gray-50 text-gray-500',
                    textClass: 'text-gray-600'
                }
            ],

            // Quiz Questions
            questions: [
                {
                    q: 'Seorang mahasiswa (20 tahun) menjalin hubungan romantis dengan dosen pembimbingnya. Dosen mengajak berhubungan seksual dan mahasiswa menyetujui tanpa paksaan fisik. Apakah ini Kekerasan Seksual?',
                    options: ['Tidak, karena suka sama suka.', 'Ya, karena ada ketimpangan relasi kuasa.', 'Tergantung saksi mata.', 'Tidak, ini masalah etika pribadi.'],
                    correct: 1
                },
                {
                    q: 'Prodi membuat aturan wajib melepas atribut keagamaan tertentu di kelas demi "keseragaman" visual. Apakah ini kekerasan?',
                    options: ['Tidak, itu otonomi prodi.', 'Ya, pelanggaran kode etik saja.', 'Ya, Diskriminasi & Intoleransi (Pasal 13).', 'Hanya jika viral di medsos.'],
                    correct: 2
                },
                {
                    q: 'Senior membentak junior setiap hari saat ospek karena kesalahan baris-berbaris. Termasuk jenis apa?',
                    options: ['Kekerasan Fisik Ringan.', 'Perundungan (Bullying).', 'Pendisiplinan wajar.', 'Kekerasan Seksual Verbal.'],
                    correct: 1
                },
                {
                    q: 'Mahasiswa korban kekerasan mengalami trauma berat sehingga tidak kuliah 1 semester. Apa hak akademiknya (Pasal 92)?',
                    options: ['Nilai A otomatis.', 'Bebas UKT selamanya.', 'Masa studi tidak berkurang & bimbingan tambahan.', 'Wajib pindah kampus.'],
                    correct: 2
                },
                {
                    q: 'Siapa yang berwenang memecat Dosen Non-ASN (Tetap Yayasan) yang terbukti melakukan kekerasan berat?',
                    options: ['Menteri (Kemendikbud).', 'Ketua Satgas PPKPT.', 'Rektor (Pemimpin PT).', 'Pihak Kepolisian.'],
                    correct: 2
                }
            ],

            initApp() {
                this.handleScroll();
            },

            handleScroll() {
                const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                this.scrollProgress = (winScroll / height) * 100;

                // Update Active Section for Sidebar
                const sections = this.navItems.map(i => i.id);
                for (const id of sections) {
                    const el = document.getElementById(id);
                    if (el) {
                        const rect = el.getBoundingClientRect();
                        // Adjust threshold (200px) based on header height
                        if (rect.top >= -200 && rect.top <= 400) {
                            this.activeSection = id;
                            break;
                        }
                    }
                }
            },

            scrollToSection(id) {
                const el = document.getElementById(id);
                if (el) {
                    el.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    this.activeSection = id;
                }
            },

            openModal(type) {
                this.modalContent = type;
                this.showModal = true;
                // Prevent body scroll when modal is open
                document.body.style.overflow = 'hidden';
            },

            // Watch for modal close to restore scroll
            init() {
                this.$watch('showModal', value => {
                    if (!value) document.body.style.overflow = '';
                })
            },

            submitAnswer(index) {
                if (index === this.questions[this.currentQuestion].correct) this.score += 20;

                if (this.currentQuestion < 4) {
                    // Smooth delay to next question
                    setTimeout(() => this.currentQuestion++, 400);
                } else {
                    this.showQuizResult = true;
                    // Trigger confetti if score is high
                    if (this.score >= 80) this.triggerConfetti();
                }
            },

            resetQuiz() {
                this.currentQuestion = 0;
                this.score = 0;
                this.showQuizResult = false;
            },

            // Simple Confetti Implementation
            triggerConfetti() {
                const canvas = document.getElementById('confetti');
                const ctx = canvas.getContext('2d');
                canvas.width = canvas.parentElement.offsetWidth;
                canvas.height = canvas.parentElement.offsetHeight;

                const particles = [];
                const colors = ['#FFC107', '#ffffff', '#4ADE80', '#F472B6'];

                for(let i=0; i<100; i++) {
                    particles.push({
                        x: canvas.width/2, y: canvas.height/2,
                        vx: (Math.random()-0.5)*10, vy: (Math.random()-0.5)*10,
                        c: colors[Math.floor(Math.random()*colors.length)],
                        s: Math.random()*5 + 2
                    });
                }

                function draw() {
                    ctx.clearRect(0,0,canvas.width,canvas.height);
                    let active = false;
                    particles.forEach(p => {
                        p.x += p.vx; p.y += p.vy; p.vy += 0.1; // gravity
                        if(p.y < canvas.height) {
                            ctx.fillStyle = p.c;
                            ctx.fillRect(p.x, p.y, p.s, p.s);
                            active = true;
                        }
                    });
                    if(active) requestAnimationFrame(draw);
                }
                draw();
            }
        }))
    });
</script>

@endsection

@push('styles')
<style>
    [x-cloak] { display: none !important; }

    /* Custom Fonts */
    .font-heading { font-family: 'Plus Jakarta Sans', sans-serif; }
    .font-body { font-family: 'Inter', sans-serif; }

    /* Scrollbar */
    .custom-scrollbar::-webkit-scrollbar { width: 6px; }
    .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
    .custom-scrollbar::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 20px; }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #94a3b8; }

    html { scroll-behavior: smooth; }
    .scroll-mt-32 { scroll-margin-top: 8rem; }

    /* Animations */
    .animate-blob { animation: blob 10s infinite; }
    @keyframes blob {
        0% { transform: translate(0px, 0px) scale(1); }
        33% { transform: translate(30px, -50px) scale(1.1); }
        66% { transform: translate(-20px, 20px) scale(0.9); }
        100% { transform: translate(0px, 0px) scale(1); }
    }

    .animate-fade-in-up { animation: fadeInUp 1s cubic-bezier(0.2, 0.8, 0.2, 1) forwards; opacity: 0; }
    @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }

    .animate-shimmer { animation: shimmer 2s infinite; }
    @keyframes shimmer { 100% { transform: translateX(100%); } }

    .animate-float { animation: float 6s ease-in-out infinite; }
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-20px); }
    }

    .animate-scroll-down { animation: scrollDown 1.5s infinite; }
    @keyframes scrollDown {
        0% { opacity: 0; transform: translateY(0); }
        50% { opacity: 1; }
        100% { opacity: 0; transform: translateY(10px); }
    }

    .animation-delay-300 { animation-delay: 0.3s; }
    .animation-delay-500 { animation-delay: 0.5s; }
    .animation-delay-700 { animation-delay: 0.7s; }
    .animation-delay-2000 { animation-delay: 2s; }
    .animation-delay-4000 { animation-delay: 4s; }

    /* Glass Effect Utility */
    .glass-text { text-shadow: 0 2px 4px rgba(0,0,0,0.3); }

    /* Particles Effect */
    .particles { position: absolute; top: 0; left: 0; width: 100%; height: 100%; overflow: hidden; }
    .particle {
        position: absolute; width: 2px; height: 2px; background: white; border-radius: 50%;
        animation: particleFloat 10s infinite linear; opacity: 0;
    }
    @keyframes particleFloat {
        0% { transform: translateY(0) scale(0); opacity: 0; }
        50% { opacity: 0.6; }
        100% { transform: translateY(-100px) scale(1.5); opacity: 0; }
    }

    /* 3D Transform Utilities */
    .perspective-1000 { perspective: 1000px; }
    .transform-style-3d { transform-style: preserve-3d; }
</style>
@endpush
