@extends('layouts.app')

@section('content')

<section class="relative h-[600px] flex items-center justify-center overflow-hidden bg-[#0B1E33]">
    <div class="absolute inset-0 z-0 opacity-20">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/axiom-pattern.png')] bg-repeat animate-pan-slow"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-[#0B1E33] via-[#0F2C4A]/90 to-[#0B1E33]"></div>
    </div>

    <div class="absolute top-20 left-[10%] text-unsri-yellow/20 text-8xl animate-float-slow"><i class="fas fa-balance-scale"></i></div>
    <div class="absolute bottom-20 right-[10%] text-unsri-green/20 text-8xl animate-float-slow animation-delay-2000"><i class="fas fa-book-reader"></i></div>

    <div class="container mx-auto px-6 relative z-10 text-center pt-20">
        <div class="inline-flex items-center gap-2 bg-white/5 backdrop-blur-md border border-unsri-yellow/30 px-6 py-2 rounded-full mb-8" data-aos="fade-down">
             <i class="fas fa-university text-unsri-yellow"></i>
             <span class="text-gray-200 text-sm font-bold tracking-widest uppercase">Satgas PPKPT UNSRI</span>
        </div>

        <h1 class="text-5xl md:text-6xl font-extrabold text-white leading-tight mb-6 drop-shadow-2xl tracking-tight" data-aos="fade-up" data-aos-delay="100">
            Wujudkan Kampus <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-unsri-yellow via-yellow-200 to-yellow-500">
                Merdeka Dari Kekerasan.
            </span>
        </h1>

        <p class="text-gray-300 text-lg max-w-3xl mx-auto mb-10 leading-relaxed" data-aos="fade-up" data-aos-delay="200">
            Mengenali bentuk kekerasan seksual, perundungan, dan intoleransi sesuai <strong>Permendikbudristek No. 55 Tahun 2024</strong> adalah langkah awal menciptakan ruang aman.
        </p>
    </div>

    <div class="absolute bottom-0 left-0 right-0 z-20 pointer-events-none">
        <svg class="fill-white" viewBox="0 0 1440 100" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,100L1360,100C1280,100,1120,100,960,100C800,100,640,100,480,100C320,100,160,100,80,100L0,100Z"></path>
        </svg>
    </div>
</section>

<section class="py-24 bg-white relative overflow-hidden" x-data="{ activeTab: 'definisi' }">
    <div class="container mx-auto px-6 max-w-6xl relative z-10">

        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-extrabold text-unsri-green mb-4">LANDASAN HUKUM PPKPT</h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-unsri-yellow to-unsri-green mx-auto rounded-full"></div>
            <p class="mt-4 text-gray-500 max-w-xl mx-auto font-bold bg-yellow-50 inline-block px-4 py-1 rounded-lg border border-unsri-yellow">
                <i class="fas fa-gavel mr-1"></i> Permendikbudristek No. 55 Tahun 2024
            </p>
        </div>

        <div class="flex flex-wrap justify-center gap-4 mb-12" data-aos="fade-up" data-aos-delay="100">
             @foreach(['definisi' => 'Definisi Kekerasan', 'cakupan' => 'Cakupan PPKPT', 'dampak' => 'Dampak Korban', 'prinsip' => 'Prinsip Penanganan'] as $key => $label)
            <button @click="activeTab = '{{ $key }}'"
                    class="px-8 py-4 rounded-full font-bold text-sm md:text-base transition-all duration-300 border-2 shadow-sm flex items-center gap-2"
                    :class="activeTab === '{{ $key }}'
                        ? 'bg-unsri-green text-white border-unsri-green shadow-lg scale-105'
                        : 'bg-white text-gray-600 border-gray-200 hover:border-unsri-yellow hover:text-unsri-green'">
                {{ $label }}
            </button>
            @endforeach
        </div>

        <div class="bg-gray-50/80 backdrop-blur-xl border border-gray-200 rounded-3xl p-8 md:p-12 shadow-xl relative overflow-hidden min-h-[400px]" data-aos="fade-up" data-aos-delay="200">

            <div x-show="activeTab === 'definisi'" x-transition.opacity.duration.500ms>
                <h3 class="text-2xl font-bold text-unsri-green mb-6 flex items-center gap-3">
                    <i class="fas fa-quote-left text-unsri-yellow"></i> Apa itu Kekerasan di PT?
                </h3>
                 <blockquote class="text-lg md:text-xl text-gray-700 leading-relaxed border-l-4 border-unsri-green pl-6 mb-8 font-medium italic">
                    "Setiap perbuatan, ucapan, dan/atau tindakan yang dilakukan secara fisik, psikis, dan/atau melalui teknologi informasi yang mengakibatkan ketakutan, sakit, trauma, kerusakan, dan/atau penderitaan lainnya bagi korban."
                </blockquote>
                <p class="text-sm text-gray-500 text-right font-bold">- Pasal 1 Permendikbudristek No. 55 Tahun 2024</p>
            </div>

            <div x-show="activeTab === 'cakupan'" x-transition.opacity.duration.500ms x-cloak>
                 <h3 class="text-2xl font-bold text-unsri-green mb-8">6 Bentuk Kekerasan (PPKPT)</h3>
                 <p class="mb-6 text-gray-600 text-sm">Regulasi baru memperluas cakupan penanganan Satgas meliputi:</p>
                 <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @php
                        $cakupan = [
                            ['icon' => 'fa-heart-broken', 'title' => 'Kekerasan Seksual', 'desc' => 'Perbuatan merendahkan, menghina, melecehkan tubuh/fungsi reproduksi.'],
                            ['icon' => 'fa-fist-raised', 'title' => 'Perundungan (Bullying)', 'desc' => 'Kekerasan fisik/mental oleh perseorangan atau kelompok.'],
                            ['icon' => 'fa-users-slash', 'title' => 'Diskriminasi & Intoleransi', 'desc' => 'Pembedaan berdasarkan SARA, disabilitas, atau status sosial.'],
                            ['icon' => 'fa-user-injured', 'title' => 'Kekerasan Fisik', 'desc' => 'Tindakan yang menyebabkan rasa sakit, luka, atau kematian.'],
                            ['icon' => 'fa-brain', 'title' => 'Kekerasan Psikis', 'desc' => 'Tindakan yang menyebabkan ketakutan, hilangnya rasa percaya diri.'],
                            ['icon' => 'fa-laptop-medical', 'title' => 'Kekerasan Daring (KBGO)', 'desc' => 'Teror, penyebaran konten pribadi, atau cyber-stalking.']
                        ];
                    @endphp
                    @foreach($cakupan as $item)
                    <div class="flex flex-col p-4 rounded-xl bg-white border border-gray-100 shadow-sm hover:shadow-md hover:border-unsri-yellow transition">
                        <div class="text-unsri-yellow text-2xl mb-3"><i class="fas {{ $item['icon'] }}"></i></div>
                        <h4 class="font-bold text-gray-800 mb-1">{{ $item['title'] }}</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">{{ $item['desc'] }}</p>
                    </div>
                    @endforeach
                 </div>
            </div>

            <div x-show="activeTab === 'dampak'" x-transition.opacity.duration.500ms x-cloak>
                <h3 class="text-2xl font-bold text-unsri-green mb-8">Dampak Bagi Korban & Kampus</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white p-6 rounded-xl shadow-md border-t-4 border-pink-500">
                        <h4 class="font-bold text-lg mb-2 text-pink-600">Dampak Akademik</h4>
                        <p class="text-sm text-gray-600">Penurunan prestasi, kehilangan konsentrasi, hingga putus studi (drop out).</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md border-t-4 border-red-500">
                        <h4 class="font-bold text-lg mb-2 text-red-600">Dampak Psikologis</h4>
                        <p class="text-sm text-gray-600">Trauma berkepanjangan (PTSD), depresi, kecemasan, dan isolasi diri.</p>
                    </div>
                     <div class="bg-white p-6 rounded-xl shadow-md border-t-4 border-blue-500">
                        <h4 class="font-bold text-lg mb-2 text-blue-600">Iklim Kampus</h4>
                        <p class="text-sm text-gray-600">Menciptakan lingkungan belajar yang tidak aman (toxic) dan mencoreng nama baik institusi.</p>
                    </div>
                </div>
            </div>

            <div x-show="activeTab === 'prinsip'" x-transition.opacity.duration.500ms x-cloak>
                 <h3 class="text-2xl font-bold text-unsri-green mb-6">Prinsip Kerja Satgas PPKPT</h3>
                 <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm font-medium text-gray-700">
                     <li class="flex items-center gap-3"><i class="fas fa-check-circle text-green-500"></i> Kepentingan Terbaik bagi Korban</li>
                     <li class="flex items-center gap-3"><i class="fas fa-check-circle text-green-500"></i> Keadilan dan Kesetaraan Gender</li>
                     <li class="flex items-center gap-3"><i class="fas fa-check-circle text-green-500"></i> Kerahasiaan dan Keamanan</li>
                     <li class="flex items-center gap-3"><i class="fas fa-check-circle text-green-500"></i> Akuntabilitas dan Independensi</li>
                     <li class="flex items-center gap-3"><i class="fas fa-check-circle text-green-500"></i> Tanpa Penghakiman (Non-Judgemental)</li>
                     <li class="flex items-center gap-3"><i class="fas fa-check-circle text-green-500"></i> Aksesibilitas bagi Penyandang Disabilitas</li>
                 </ul>
            </div>

        </div>
    </div>
</section>

<section class="py-24 bg-[#0B1E33] relative overflow-hidden">
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16" data-aos="fade-down">
            <span class="text-unsri-yellow font-bold uppercase tracking-widest text-sm">Edukasi Publik</span>
            <h2 class="text-4xl font-extrabold text-white mt-2">MITOS vs FAKTA</h2>
            <p class="text-gray-400 mt-4">Meluruskan pemahaman tentang kekerasan di kampus.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <div class="group h-64 perspective" data-aos="flip-left">
                <div class="relative w-full h-full transition-transform duration-700 transform-style-3d group-hover:rotate-y-180 cursor-pointer">
                    <div class="absolute inset-0 bg-red-900/20 backdrop-blur-md border-2 border-red-500/50 rounded-2xl p-8 flex flex-col items-center justify-center text-center backface-hidden">
                        <span class="bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-4 uppercase">Mitos</span>
                        <h4 class="text-xl font-bold text-red-100">"Bercandaan seksis atau bullying verbal itu wajar, cuma main-main."</h4>
                    </div>
                    <div class="absolute inset-0 bg-green-900/20 backdrop-blur-md border-2 border-green-500/50 rounded-2xl p-8 flex flex-col items-center justify-center text-center backface-hidden rotate-y-180">
                         <span class="bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-4 uppercase">Fakta</span>
                        <p class="text-green-100 text-sm leading-relaxed">Salah. Kekerasan verbal adalah pintu masuk kekerasan fisik. Di PPKPT, ujaran kebencian dan pelecehan verbal dapat dikenai sanksi.</p>
                    </div>
                </div>
            </div>

            <div class="group h-64 perspective" data-aos="flip-left" data-aos-delay="200">
                <div class="relative w-full h-full transition-transform duration-700 transform-style-3d group-hover:rotate-y-180 cursor-pointer">
                    <div class="absolute inset-0 bg-red-900/20 backdrop-blur-md border-2 border-red-500/50 rounded-2xl p-8 flex flex-col items-center justify-center text-center backface-hidden">
                        <span class="bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-4 uppercase">Mitos</span>
                        <h4 class="text-xl font-bold text-red-100">"Kekerasan seksual terjadi karena pakaian korban."</h4>
                    </div>
                    <div class="absolute inset-0 bg-green-900/20 backdrop-blur-md border-2 border-green-500/50 rounded-2xl p-8 flex flex-col items-center justify-center text-center backface-hidden rotate-y-180">
                         <span class="bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-4 uppercase">Fakta</span>
                        <p class="text-green-100 text-sm leading-relaxed">Salah. Data membuktikan kekerasan terjadi pada berbagai jenis pakaian. Akar masalahnya adalah pelaku yang tidak bisa mengontrol diri.</p>
                    </div>
                </div>
            </div>

            <div class="group h-64 perspective" data-aos="flip-left" data-aos-delay="400">
                <div class="relative w-full h-full transition-transform duration-700 transform-style-3d group-hover:rotate-y-180 cursor-pointer">
                    <div class="absolute inset-0 bg-red-900/20 backdrop-blur-md border-2 border-red-500/50 rounded-2xl p-8 flex flex-col items-center justify-center text-center backface-hidden">
                        <span class="bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-4 uppercase">Mitos</span>
                        <h4 class="text-xl font-bold text-red-100">"Senioritas membenarkan tindakan pendisiplinan fisik."</h4>
                    </div>
                    <div class="absolute inset-0 bg-green-900/20 backdrop-blur-md border-2 border-green-500/50 rounded-2xl p-8 flex flex-col items-center justify-center text-center backface-hidden rotate-y-180">
                         <span class="bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-4 uppercase">Fakta</span>
                        <p class="text-green-100 text-sm leading-relaxed">Salah. Relasi kuasa senior-junior tidak membenarkan kekerasan. Tindakan fisik atas nama 'tradisi' adalah pelanggaran berat PPKPT.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-unsri-green mb-12 text-center">Dokumen Resmi PPKPT</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-3xl shadow-lg border-l-8 border-unsri-yellow hover:translate-y-[-5px] transition-transform">
                <div class="flex justify-between items-start mb-4">
                    <i class="fas fa-file-contract text-4xl text-gray-300"></i>
                    <span class="bg-green-100 text-green-700 text-xs font-bold px-2 py-1 rounded">Terbaru</span>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Permendikbudristek No. 55 Tahun 2024</h3>
                <p class="text-xs text-gray-500 mb-6">Regulasi utama tentang Pencegahan dan Penanganan Kekerasan di Lingkungan Perguruan Tinggi.</p>
                <a href="#" class="text-unsri-green font-bold text-sm flex items-center gap-2 hover:gap-3 transition-all">Unduh PDF <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-lg border-l-8 border-unsri-green hover:translate-y-[-5px] transition-transform">
                <div class="flex justify-between items-start mb-4">
                    <i class="fas fa-book text-4xl text-gray-300"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Buku Saku PPKPT UNSRI</h3>
                <p class="text-xs text-gray-500 mb-6">Panduan praktis mahasiswa dalam mengenali, mencegah, dan melaporkan tindak kekerasan.</p>
                <a href="#" class="text-unsri-green font-bold text-sm flex items-center gap-2 hover:gap-3 transition-all">Unduh PDF <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-lg border-l-8 border-blue-500 hover:translate-y-[-5px] transition-transform">
                <div class="flex justify-between items-start mb-4">
                    <i class="fas fa-shield-alt text-4xl text-gray-300"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">SOP Pelaporan & Penanganan</h3>
                <p class="text-xs text-gray-500 mb-6">Alur detail mekanisme pelaporan, perlindungan saksi, dan pemulihan korban di UNSRI.</p>
                <a href="#" class="text-unsri-green font-bold text-sm flex items-center gap-2 hover:gap-3 transition-all">Unduh PDF <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-unsri-green relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
    <div class="container mx-auto px-6 relative z-10 text-center text-white">
        <h2 class="text-3xl md:text-4xl font-extrabold mb-6" data-aos="zoom-in">Jangan Diam, Lawan Kekerasan!</h2>
        <p class="text-unsri-yellow/90 text-lg mb-10 max-w-2xl mx-auto font-medium" data-aos="fade-up" data-aos-delay="100">
            Satgas PPKPT UNSRI siap mendampingi Anda. Laporan Anda dilindungi kerahasiaannya.
        </p>
        <a href="#" class="inline-block bg-unsri-yellow text-unsri-green font-extrabold px-12 py-4 rounded-full hover:bg-white transition-all duration-300 shadow-[0_0_20px_rgba(250,204,21,0.5)] hover:shadow-[0_0_30px_rgba(255,255,255,0.5)] transform hover:-translate-y-1" data-aos="flip-up" data-aos-delay="200">
            <i class="fas fa-shield-alt mr-2"></i> Akses Layanan Pelaporan
        </a>
    </div>
</section>

@endsection

@push('styles')
<style>
    .perspective { perspective: 1000px; }
    .transform-style-3d { transform-style: preserve-3d; }
    .backface-hidden { backface-visibility: hidden; }
    .rotate-y-180 { transform: rotateY(180deg); }

    @keyframes pan-slow {
        0% { background-position: 0% 0%; }
        100% { background-position: 100% 100%; }
    }
    .animate-pan-slow { animation: pan-slow 60s linear infinite; }

    @keyframes float-slow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-20px); }
    }
    .animate-float-slow { animation: float-slow 8s ease-in-out infinite; }
    .animation-delay-2000 { animation-delay: 2s; }
</style>
@endpush
