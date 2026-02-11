@extends('layouts.app')

@section('content')

<section class="relative h-[600px] flex items-center justify-center overflow-hidden bg-[#0B1E33]">
    <div class="absolute inset-0 z-0 opacity-20">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/axiom-pattern.png')] bg-repeat animate-pan-slow"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-[#0B1E33] via-[#0F2C4A]/90 to-[#0B1E33]"></div>
    </div>

    <div class="absolute top-20 left-[10%] text-unsri-yellow/20 text-8xl animate-float-slow"><i class="fas fa-book-open"></i></div>
    <div class="absolute bottom-20 right-[10%] text-unsri-green/20 text-8xl animate-float-slow animation-delay-2000"><i class="fas fa-lightbulb"></i></div>

    <div class="container mx-auto px-6 relative z-10 text-center pt-20">
        <div class="inline-flex items-center gap-2 bg-white/5 backdrop-blur-md border border-unsri-yellow/30 px-6 py-2 rounded-full mb-8" data-aos="fade-down">
             <i class="fas fa-graduation-cap text-unsri-yellow"></i>
             <span class="text-gray-200 text-sm font-bold tracking-widest uppercase">Pusat Edukasi & Informasi</span>
        </div>

        <h1 class="text-5xl md:text-6xl font-extrabold text-white leading-tight mb-6 drop-shadow-2xl tracking-tight" data-aos="fade-up" data-aos-delay="100">
            Pengetahuan Adalah <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-unsri-yellow via-yellow-200 to-yellow-500">
                Langkah Awal Pencegahan.
            </span>
        </h1>

        <p class="text-gray-300 text-lg max-w-3xl mx-auto mb-10 leading-relaxed" data-aos="fade-up" data-aos-delay="200">
            Memahami apa itu kekerasan seksual, mengenali bentuk-bentuknya, dan mengetahui hak-hak Anda adalah kunci menciptakan kampus yang aman. Mari belajar bersama.
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
            <h2 class="text-4xl font-extrabold text-unsri-green mb-4">MEMAHAMI DASAR HUKUM</h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-unsri-yellow to-unsri-green mx-auto rounded-full"></div>
            <p class="mt-4 text-gray-500 max-w-xl mx-auto">Berdasarkan Permendikbudristek No. 30 Tahun 2021.</p>
        </div>

        <div class="flex flex-wrap justify-center gap-4 mb-12" data-aos="fade-up" data-aos-delay="100">
             @foreach(['definisi' => 'Definisi Resmi', 'bentuk' => '21 Bentuk KS', 'dampak' => 'Dampak Bagi Korban', 'konsen' => 'Konsep Consent'] as $key => $label)
            <button @click="activeTab = '{{ $key }}'"
                    class="px-8 py-4 rounded-full font-bold text-sm md:text-base transition-all duration-300 border-2 shadow-sm flex items-center gap-2"
                    :class="activeTab === '{{ $key }}'
                        ? 'bg-unsri-green text-white border-unsri-green shadow-lg scale-105'
                        : 'bg-white text-gray-600 border-gray-200 hover:border-unsri-yellow hover:text-unsri-green'">
                @if($key == 'definisi') <i class="fas fa-book"></i>
                @elseif($key == 'bentuk') <i class="fas fa-list-ol"></i>
                @elseif($key == 'dampak') <i class="fas fa-heart-broken"></i>
                @elseif($key == 'konsen') <i class="fas fa-handshake"></i>
                @endif
                {{ $label }}
            </button>
            @endforeach
        </div>

        <div class="bg-gray-50/80 backdrop-blur-xl border border-gray-200 rounded-3xl p-8 md:p-12 shadow-xl relative overflow-hidden min-h-[400px]" data-aos="fade-up" data-aos-delay="200">
            <div class="absolute -top-20 -right-20 w-64 h-64 bg-unsri-yellow/10 rounded-full blur-3xl pointer-events-none"></div>

            <div x-show="activeTab === 'definisi'" x-transition.opacity.duration.500ms>
                <h3 class="text-2xl font-bold text-unsri-green mb-6 flex items-center gap-3">
                    <i class="fas fa-quote-left text-unsri-yellow"></i> Apa itu Kekerasan Seksual?
                </h3>
                 <blockquote class="text-lg md:text-xl text-gray-700 leading-relaxed border-l-4 border-unsri-green pl-6 mb-8 font-medium italic">
                    "Setiap perbuatan merendahkan, menghina, melecehkan, dan/atau menyerang tubuh, dan/atau fungsi reproduksi seseorang, karena ketimpangan relasi kuasa dan/atau gender, yang berakibat atau dapat berakibat penderitaan psikis dan/atau fisik termasuk yang mengganggu kesehatan reproduksi seseorang dan hilang kesempatan melaksanakan pendidikan tinggi dengan aman dan optimal."
                </blockquote>
                <p class="text-sm text-gray-500 text-right font-bold">- Pasal 1 Ayat 1 Permendikbudristek No. 30 Tahun 2021</p>
            </div>

            <div x-show="activeTab === 'bentuk'" x-transition.opacity.duration.500ms x-cloak>
                 <h3 class="text-2xl font-bold text-unsri-green mb-8">21 Bentuk Kekerasan Seksual (Pasal 5)</h3>
                 <p class="mb-6 text-gray-600 bg-yellow-50 p-4 rounded-lg border-l-4 border-unsri-yellow text-sm">
                    <i class="fas fa-info-circle mr-2 text-unsri-yellow"></i> Mencakup kekerasan verbal, non-fisik, fisik, dan daring (online).
                 </p>
                 <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 max-h-[400px] overflow-y-auto pr-4 custom-scrollbar">
                    @php
                        $bentuk = [
                            "Menyampaikan ujaran yang mendiskriminasi atau melecehkan tampilan fisik, kondisi tubuh, dan/atau identitas gender korban.",
                            "Memperlihatkan alat kelamin dengan sengaja tanpa persetujuan korban.",
                            "Menyampaikan ucapan yang memuat rayuan, lelucon, dan/atau siulan yang bernuansa seksual pada korban.",
                            "Menatap korban dengan nuansa seksual dan/atau tidak nyaman.",
                            "Mengirimkan pesan, lelucon, gambar, foto, audio, dan/atau video bernuansa seksual kepada korban meskipun sudah dilarang.",
                            "Mengambil, merekam, dan/atau mengedarkan foto dan/atau rekaman audio dan/atau visual korban yang bernuansa seksual tanpa persetujuan.",
                            "Mengunggah foto tubuh dan/atau informasi pribadi korban yang bernuansa seksual tanpa persetujuan.",
                            "Menyebarkan informasi terkait tubuh dan/atau pribadi korban yang bernuansa seksual tanpa persetujuan.",
                            "Mengintip atau dengan sengaja melihat korban yang sedang melakukan kegiatan secara pribadi dan/atau pada ruang yang bersifat pribadi.",
                            "Mebujuk, menjanjikan, menawarkan sesuatu, atau mengancam korban untuk melakukan transaksi atau kegiatan seksual yang tidak disetujui.",
                            "Memberi hukuman atau sanksi yang bernuansa seksual.",
                            "Menyentuh, mengusap, meraba, memegang, memeluk, mencium dan/atau menggosokkan bagian tubuhnya pada tubuh korban tanpa persetujuan.",
                            "Membuka pakaian korban tanpa persetujuan.",
                            "Memaksa korban untuk melakukan transaksi atau kegiatan seksual.",
                            "Mempraktikkan budaya komunitas mahasiswa, pendidik, dan tenaga kependidikan yang bernuansa kekerasan seksual.",
                            "Melakukan percobaan pemerkosaan, namun penetrasi tidak terjadi.",
                            "Melakukan pemerkosaan termasuk penetrasi dengan benda atau bagian tubuh selain alat kelamin.",
                            "Memaksa atau memperdayai korban untuk melakukan aborsi.",
                            "Memaksa atau memperdayai korban untuk hamil.",
                            "Membiarkan terjadinya Kekerasan Seksual dengan sengaja.",
                            "Melakukan perbuatan Kekerasan Seksual lainnya."
                        ];
                    @endphp
                    @foreach($bentuk as $key => $item)
                    <div class="flex gap-3 items-start p-3 rounded-lg hover:bg-gray-100 transition">
                        <span class="flex-shrink-0 w-8 h-8 bg-unsri-green/10 text-unsri-green font-bold rounded-full flex items-center justify-center text-sm">{{ $key + 1 }}</span>
                        <p class="text-gray-700 text-sm leading-snug">{{ $item }}</p>
                    </div>
                    @endforeach
                 </div>
            </div>

            <div x-show="activeTab === 'dampak'" x-transition.opacity.duration.500ms x-cloak>
                <h3 class="text-2xl font-bold text-unsri-green mb-8">Dampak Multifaset pada Korban</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white p-6 rounded-xl shadow-md border-t-4 border-pink-500">
                        <div class="w-12 h-12 bg-pink-100 text-pink-500 rounded-full flex items-center justify-center text-2xl mb-4">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Psikologis & Mental</h4>
                        <ul class="text-gray-600 text-sm list-disc list-inside space-y-1">
                            <li>Trauma mendalam (PTSD)</li>
                            <li>Depresi & Kecemasan</li>
                            <li>Gangguan tidur & makan</li>
                            <li>Keinginan bunuh diri</li>
                        </ul>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md border-t-4 border-red-500">
                         <div class="w-12 h-12 bg-red-100 text-red-500 rounded-full flex items-center justify-center text-2xl mb-4">
                            <i class="fas fa-user-injured"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Fisik & Kesehatan</h4>
                         <ul class="text-gray-600 text-sm list-disc list-inside space-y-1">
                            <li>Luka fisik & nyeri kronis</li>
                            <li>Risiko IMS & HIV/AIDS</li>
                            <li>Kehamilan tidak diinginkan</li>
                            <li>Gangguan reproduksi</li>
                        </ul>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md border-t-4 border-blue-500">
                         <div class="w-12 h-12 bg-blue-100 text-blue-500 rounded-full flex items-center justify-center text-2xl mb-4">
                            <i class="fas fa-university"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Akademik & Sosial</h4>
                         <ul class="text-gray-600 text-sm list-disc list-inside space-y-1">
                            <li>Penurunan prestasi</li>
                            <li>Putus kuliah (Drop out)</li>
                            <li>Menarik diri dari lingkungan</li>
                            <li>Stigma & pengucilan sosial</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div x-show="activeTab === 'konsen'" x-transition.opacity.duration.500ms x-cloak>
                 <h3 class="text-2xl font-bold text-unsri-green mb-6">Pentingnya "Persetujuan" (Consent)</h3>
                 <div class="flex flex-col md:flex-row gap-8 items-center">
                    <div class="w-full md:w-1/2">
                        <img src="https://img.freepik.com/free-vector/consent-concept-illustration_114360-4973.jpg?w=740&t=st=1709027680~exp=1709028280~hmac=a2199288792480800509077976718970798098908877807808090709" alt="Ilustrasi Consent" class="rounded-xl shadow-lg">
                    </div>
                    <div class="w-full md:w-1/2 space-y-4">
                        <p class="text-gray-700 text-lg leading-relaxed">
                            Consent atau persetujuan adalah kunci dalam interaksi apapun. Dalam konteks PPKS, ketiadaan persetujuan adalah indikator utama terjadinya kekerasan.
                        </p>
                        <div class="bg-green-50 p-4 rounded-lg border-l-4 border-green-500">
                            <h4 class="font-bold text-green-700 mb-2">Prinsip FRIES dalam Consent:</h4>
                            <ul class="text-sm text-gray-700 space-y-2">
                                <li><strong class="text-green-600">F</strong>reely Given (Diberikan secara bebas, tanpa paksaan/manipulasi)</li>
                                <li><strong class="text-green-600">R</strong>eversible (Bisa ditarik kembali kapan saja)</li>
                                <li><strong class="text-green-600">I</strong>nformed (Mengetahui sepenuhnya apa yang disetujui)</li>
                                <li><strong class="text-green-600">E</strong>nthusiastic (Antusias, bukan sekadar "iya" karena takut)</li>
                                <li><strong class="text-green-600">S</strong>pecific (Spesifik untuk tindakan tertentu saja)</li>
                            </ul>
                        </div>
                    </div>
                 </div>
            </div>

        </div>
    </div>
</section>

<section class="py-24 bg-[#0B1E33] relative overflow-hidden">
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16" data-aos="fade-down">
            <span class="text-unsri-yellow font-bold uppercase tracking-widest text-sm">Edukasi Publik</span>
            <h2 class="text-4xl font-extrabold text-white mt-2">MITOS vs FAKTA</h2>
            <p class="text-gray-400 mt-4">Klik kartu untuk membalik dan mengetahui kebenarannya.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <div class="group h-64 perspective" data-aos="flip-left">
                <div class="relative w-full h-full transition-transform duration-700 transform-style-3d group-hover:rotate-y-180 cursor-pointer">
                    <div class="absolute inset-0 bg-red-900/20 backdrop-blur-md border-2 border-red-500/50 rounded-2xl p-8 flex flex-col items-center justify-center text-center backface-hidden shadow-[0_0_30px_rgba(239,68,68,0.2)]">
                        <span class="bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-4 uppercase">Mitos #1</span>
                        <h4 class="text-xl font-bold text-red-100">"Kekerasan seksual terjadi karena pakaian korban yang terbuka."</h4>
                        <i class="fas fa-sync-alt text-red-400 mt-6 animate-pulse"></i>
                    </div>
                    <div class="absolute inset-0 bg-green-900/20 backdrop-blur-md border-2 border-green-500/50 rounded-2xl p-8 flex flex-col items-center justify-center text-center backface-hidden rotate-y-180 shadow-[0_0_30px_rgba(34,197,94,0.2)]">
                         <span class="bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-4 uppercase">Fakta</span>
                        <p class="text-green-100 font-medium leading-relaxed">Salah. Data menunjukkan korban mengenakan berbagai jenis pakaian, termasuk yang tertutup. Akar masalahnya adalah <strong>niat pelaku</strong>, bukan pakaian korban.</p>
                    </div>
                </div>
            </div>

            <div class="group h-64 perspective" data-aos="flip-left" data-aos-delay="200">
                <div class="relative w-full h-full transition-transform duration-700 transform-style-3d group-hover:rotate-y-180 cursor-pointer">
                    <div class="absolute inset-0 bg-red-900/20 backdrop-blur-md border-2 border-red-500/50 rounded-2xl p-8 flex flex-col items-center justify-center text-center backface-hidden shadow-[0_0_30px_rgba(239,68,68,0.2)]">
                        <span class="bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-4 uppercase">Mitos #2</span>
                        <h4 class="text-xl font-bold text-red-100">"Pelaku kekerasan seksual biasanya orang asing yang tidak dikenal."</h4>
                        <i class="fas fa-sync-alt text-red-400 mt-6 animate-pulse"></i>
                    </div>
                    <div class="absolute inset-0 bg-green-900/20 backdrop-blur-md border-2 border-green-500/50 rounded-2xl p-8 flex flex-col items-center justify-center text-center backface-hidden rotate-y-180 shadow-[0_0_30px_rgba(34,197,94,0.2)]">
                         <span class="bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-4 uppercase">Fakta</span>
                        <p class="text-green-100 font-medium leading-relaxed">Salah besar. Sebagian besar kasus (di kampus) dilakukan oleh orang yang dikenal korban: teman, senior, dosen, atau staf.</p>
                    </div>
                </div>
            </div>

            <div class="group h-64 perspective" data-aos="flip-left" data-aos-delay="400">
                <div class="relative w-full h-full transition-transform duration-700 transform-style-3d group-hover:rotate-y-180 cursor-pointer">
                    <div class="absolute inset-0 bg-red-900/20 backdrop-blur-md border-2 border-red-500/50 rounded-2xl p-8 flex flex-col items-center justify-center text-center backface-hidden shadow-[0_0_30px_rgba(239,68,68,0.2)]">
                        <span class="bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-4 uppercase">Mitos #3</span>
                        <h4 class="text-xl font-bold text-red-100">"Kalau korban diam saja saat kejadian, artinya dia menikmatinya."</h4>
                        <i class="fas fa-sync-alt text-red-400 mt-6 animate-pulse"></i>
                    </div>
                    <div class="absolute inset-0 bg-green-900/20 backdrop-blur-md border-2 border-green-500/50 rounded-2xl p-8 flex flex-col items-center justify-center text-center backface-hidden rotate-y-180 shadow-[0_0_30px_rgba(34,197,94,0.2)]">
                         <span class="bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-4 uppercase">Fakta</span>
                        <p class="text-green-100 font-medium leading-relaxed">Tidak benar. Diam adalah respons alami tubuh terhadap trauma/ketakutan ekstrem (freeze response), BUKAN tanda persetujuan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-6 max-w-5xl text-center">
         <h2 class="text-3xl font-bold text-unsri-green mb-12" data-aos="fade-up">Tonton: Kenali & Cegah</h2>

         <div class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-unsri-yellow/50 group" data-aos="zoom-in" style="padding-bottom: 56.25%;">
            <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1&mute=1&controls=0&loop=1" title="Video Edukasi PPKS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            <div class="absolute inset-0 bg-black/40 flex items-center justify-center group-hover:opacity-0 transition-opacity duration-500 pointer-events-none">
                <div class="w-20 h-20 bg-unsri-yellow text-unsri-green rounded-full flex items-center justify-center pl-2 text-4xl shadow-lg animate-pulse">
                    <i class="fas fa-play"></i>
                </div>
            </div>
         </div>
         <p class="text-gray-500 mt-6 text-sm">Video ilustrasi singkat mengenai pencegahan di lingkungan kampus.</p>
    </div>
</section>

<section class="py-24 bg-gray-50 relative overflow-hidden">
    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12" data-aos="fade-right">
            <div>
                <h2 class="text-4xl font-bold text-unsri-green">Unduh Materi</h2>
                <p class="text-gray-500 mt-2">Buku saku, pedoman, dan infografis resmi.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="group relative bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 overflow-hidden" data-aos="fade-up">
                <div class="absolute top-0 right-0 -mt-10 -mr-10 w-32 h-32 bg-red-100 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-red-500 text-white rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-lg">
                        <i class="fas fa-file-pdf"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Buku Saku PPKS UNSRI</h3>
                    <p class="text-gray-500 text-sm mb-6 leading-relaxed">Panduan praktis bagi mahasiswa tentang hak, kewajiban, dan prosedur pelaporan di UNSRI.</p>
                    <a href="#" class="inline-flex items-center gap-2 text-red-500 font-bold hover:gap-4 transition-all">
                        Unduh PDF <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>

            <div class="group relative bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 overflow-hidden" data-aos="fade-up" data-aos-delay="150">
                <div class="absolute top-0 right-0 -mt-10 -mr-10 w-32 h-32 bg-blue-100 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-blue-500 text-white rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-lg">
                        <i class="fas fa-book-reader"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Permendikbud No. 30/2021</h3>
                    <p class="text-gray-500 text-sm mb-6 leading-relaxed">Dokumen lengkap peraturan menteri yang menjadi landasan hukum utama Satgas PPKS.</p>
                    <a href="#" class="inline-flex items-center gap-2 text-blue-500 font-bold hover:gap-4 transition-all">
                        Unduh Dokumen <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>

            <div class="group relative bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                <div class="absolute top-0 right-0 -mt-10 -mr-10 w-32 h-32 bg-green-100 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-unsri-green text-white rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-lg">
                        <i class="fas fa-images"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Paket Infografis Edukasi</h3>
                    <p class="text-gray-500 text-sm mb-6 leading-relaxed">Kumpulan poster dan infografis visual untuk dibagikan di media sosial fakultas/ormawa.</p>
                    <a href="#" class="inline-flex items-center gap-2 text-unsri-green font-bold hover:gap-4 transition-all">
                        Unduh ZIP <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-unsri-green relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
    <div class="container mx-auto px-6 relative z-10 text-center text-white">
        <h2 class="text-3xl md:text-4xl font-extrabold mb-6" data-aos="zoom-in">Sudah Memahami & Siap Bertindak?</h2>
        <p class="text-unsri-yellow/90 text-lg mb-10 max-w-2xl mx-auto font-medium" data-aos="fade-up" data-aos-delay="100">
            Pengetahuan ini adalah senjata Anda. Jika Anda atau teman Anda mengalami salah satu bentuk kekerasan di atas, jangan ragu untuk melapor.
        </p>
<a href="#" class="inline-block bg-unsri-yellow text-unsri-green font-extrabold px-12 py-4 rounded-full hover:bg-white transition-all duration-300 shadow-[0_0_20px_rgba(250,204,21,0.5)] hover:shadow-[0_0_30px_rgba(255,255,255,0.5)] transform hover:-translate-y-1" data-aos="flip-up" data-aos-delay="200">
    <i class="fas fa-shield-alt mr-2"></i> Akses Layanan Pelaporan
</a>
    </div>
</section>

@endsection

@push('styles')
<style>
    /* Custom CSS untuk halaman edukasi */
    .perspective { perspective: 1000px; }
    .transform-style-3d { transform-style: preserve-3d; }
    .backface-hidden { backface-visibility: hidden; }
    .rotate-y-180 { transform: rotateY(180deg); }

    /* Custom Scrollbar untuk daftar 21 bentuk KS */
    .custom-scrollbar::-webkit-scrollbar { width: 6px; }
    .custom-scrollbar::-webkit-scrollbar-track { background: #f1f1f1; border-radius: 10px; }
    .custom-scrollbar::-webkit-scrollbar-thumb { background: #d4d4d4; border-radius: 10px; }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #556B2F; }

    /* Animasi Lambat untuk Hero */
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
