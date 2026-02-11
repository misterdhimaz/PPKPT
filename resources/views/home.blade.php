@extends('layouts.app')

@section('content')

<section class="relative h-[800px] flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://unsri.ac.id/frontend/images/slider/home1/unsri_landmark_idl.jpg"
             alt="Rektorat UNSRI"
             class="w-full h-full object-cover object-center transform scale-105"
             data-aos="zoom-out" data-aos-duration="2000">
        <div class="absolute inset-0 bg-gradient-to-r from-unsri-green/95 via-unsri-green/70 to-transparent mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
    </div>
<br>
  <div class="container mx-auto px-6 absolute top-20 left-0 right-0 z-20">

    <div class="max-w-3xl mx-auto text-center ">

        <!-- Badge -->
        <div class="inline-flex items-center justify-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 px-4 py-2 rounded-full mb-6 mx-auto"
             data-aos="fade-down" data-aos-delay="100">
            <span class="w-2 h-2 rounded-full bg-unsri-yellow animate-pulse"></span>
            <span class="text-white text-xs font-bold tracking-widest uppercase">
                Official Satgas PPKPT UNSRI
            </span>
        </div>

        <!-- Heading -->
        <h1 class="text-5xl md:text-7xl font-extrabold text-white leading-tight mb-6 drop-shadow-2xl"
            data-aos="fade-up" data-aos-delay="200">
            Perlindungan Anda, <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-unsri-yellow to-yellow-200">
                Prioritas Kami.
            </span>
        </h1>

        <!-- Deskripsi -->
        <p class="text-gray-100 text-lg md:text-xl font-light mb-10 leading-relaxed
                  border-t-4 border-unsri-yellow pt-6 max-w-2xl mx-auto"
           data-aos="fade-up" data-aos-delay="400">
            Universitas Sriwijaya berkomitmen menciptakan lingkungan akademik yang
            <strong class="text-white">zero-violence</strong>.
            Pelajari hak-hak dan prosedur penanganan resmi di bawah ini.
        </p>

        <!-- Button -->
        <div class="flex flex-col sm:flex-row gap-5 justify-center"
             data-aos="fade-up" data-aos-delay="600">

            <a href="#daftar-kasus"
               class="group relative px-8 py-4 bg-unsri-yellow rounded-lg overflow-hidden shadow-lg
                      hover:shadow-yellow-500/50 transition-all duration-300 transform hover:-translate-y-1">
                <div class="absolute inset-0 w-full h-full bg-white/30 group-hover:translate-x-full
                            transition-transform duration-500 ease-out -skew-x-12 origin-left"></div>
                <span class="relative font-bold text-unsri-green flex items-center gap-3 justify-center">
                    Lihat Penanganan Terbaru
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </span>
            </a>

 <a href="#sop"
   class="group px-8 py-4 border-2 border-unsri-yellow text-unsri-yellow rounded-lg font-bold
          bg-[#556B2F] hover:bg-unsri-yellow hover:text-unsri-green transition-all duration-300">
    Baca SOP Penanganan
</a>

            </a>
        </div>

    </div>
</div>


    <div class="absolute bottom-0 left-0 right-0 z-20">
        <svg class="fill-current text-white" viewBox="0 0 1440 120" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
        </svg>
    </div>
</section>

<section class="py-20 bg-white relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 opacity-30 pointer-events-none">
        <div class="absolute top-10 left-10 w-20 h-20 bg-unsri-yellow rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
        <div class="absolute top-10 right-10 w-20 h-20 bg-unsri-green rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>
        <div class="absolute bottom-10 left-1/2 w-20 h-20 bg-blue-300 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10 text-center">
        <h2 class="text-4xl font-extrabold text-unsri-green mb-4" data-aos="fade-down">
            5 LANGKAH PENANGANAN
        </h2>
        <div class="w-24 h-1.5 bg-unsri-yellow mx-auto rounded-full mb-16" data-aos="scale-x"></div>

        <div class="flex flex-wrap justify-center items-start gap-8 relative">
            <div class="absolute top-12 left-[10%] right-[10%] h-0.5 border-t-4 border-dashed border-gray-200 -z-10 hidden lg:block" data-aos="fade-in" data-aos-delay="500"></div>

            @foreach ([
                ['icon' => 'fa-paper-plane', 'title' => 'Kirim', 'desc' => 'Laporkan aduan melalui sistem aman', 'color' => 'unsri-yellow'],
                ['icon' => 'fa-search', 'title' => 'Verifikasi', 'desc' => 'Pemeriksaan awal validitas bukti', 'color' => 'gray-300'],
                ['icon' => 'fa-heart', 'title' => 'Pemeriksaan', 'desc' => 'Pendampingan & investigasi mendalam', 'color' => 'gray-300'],
                ['icon' => 'fa-gavel', 'title' => 'Pembahasan', 'desc' => 'Sidang etik & penentuan sanksi', 'color' => 'gray-300'],
                ['icon' => 'fa-file-contract', 'title' => 'Terbit SK', 'desc' => 'Keputusan resmi Rektor', 'color' => 'gray-300']
            ] as $index => $step)

            <div class="flex flex-col items-center group w-48"
                 data-aos="fade-up"
                 data-aos-delay="{{ $index * 150 }}">

                <div class="relative w-24 h-24 mb-6">
                    <div class="absolute inset-0 bg-white rounded-full border-4 border-{{ $step['color'] == 'unsri-yellow' ? 'unsri-yellow' : 'gray-200' }} group-hover:border-unsri-yellow group-hover:scale-110 transition-all duration-500 z-20 flex items-center justify-center shadow-lg">
                        <i class="fas {{ $step['icon'] }} text-3xl text-{{ $step['color'] == 'unsri-yellow' ? 'unsri-yellow' : 'gray-400' }} group-hover:text-unsri-yellow transition-colors duration-300"></i>
                    </div>
                    @if($step['color'] == 'unsri-yellow')
                    <div class="absolute inset-0 bg-unsri-yellow rounded-full animate-ping opacity-20"></div>
                    @endif
                </div>

                <h4 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-unsri-green transition">{{ $step['title'] }}</h4>
                <p class="text-xs text-gray-500 leading-relaxed px-2">{{ $step['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


<br><br><br>


<section class="relative py-22 overflow-hidden bg-[#0B1E33]">
    <div class="absolute inset-0 z-0">
        <img src="https://unsri.ac.id/frontend/images/slider/home1/unsri_landmark_plg.jpg"
             class="w-full h-full object-cover opacity-5 mix-blend-luminosity">
    </div>


    <div class="absolute bottom-1/3 left-1/2 transform -translate-x-1/2 z-20 text-white text-5xl animate-pulse">
        <i class="fas fa-certificate fa-spin-slow" style="animation-duration: 10s;"></i>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-20">

            <div class="w-full lg:w-5/12 space-y-6" data-aos="fade-right">
                <span class="text-unsri-yellow font-bold uppercase tracking-widest text-sm flex items-center gap-2">
                    <span class="w-8 h-[2px] bg-unsri-yellow"></span>
                    Update Satgas PPKPT
                </span>

                <h2 class="text-4xl lg:text-5xl font-extrabold text-white leading-tight">
                    Peninjauan Kasus <br>
                    <span class="text-gray-200">Mahasiswa FK</span>
                </h2>

                <p class="text-gray-400 text-sm leading-relaxed border-l-2 border-gray-600 pl-4">
                    Tim Satgas melakukan investigasi mendalam dan rapat koordinasi terkait laporan terbaru untuk memastikan keadilan dan transparansi prosedur.
                </p>

                <div class="pt-4">
                    <a href="#" class="inline-flex items-center gap-3 bg-[#2DD4BF] text-[#0B1E33] font-bold px-8 py-3 rounded-full hover:bg-[#14B8A6] hover:text-white transition-all transform hover:scale-105 shadow-[0_0_20px_rgba(45,212,191,0.4)]">
                        Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="w-full lg:w-7/12 relative h-[400px]" data-aos="fade-left">

                <div class="absolute top-4 right-0 w-[60%] h-40 border-4 border-white shadow-2xl overflow-hidden rounded-lg z-10 hover:z-30 transition-all duration-500 hover:scale-105">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUQN11oRnDPeCn_zHcp8g5QzntFE-EzDR4fg&s" class="w-full h-full object-cover">
                </div>

                <div class="absolute bottom-4 left-[15%] w-[55%] h-40 border-4 border-white shadow-2xl overflow-hidden rounded-lg z-20 hover:z-30 transition-all duration-500 hover:scale-105">
                    <img src="https://imcnews.id/foto_berita/2026/01/15/5img_5109.jpeg" class="w-full h-full object-cover">
                </div>

                <div class="absolute top-40  right-[5%] w-[30%] h-40 border-2 border-white/50 shadow-lg overflow-hidden rounded-lg z-0 opacity-80 hover:opacity-100 transition-all duration-500 hover:scale-105">
                    <img src="https://ichef.bbci.co.uk/ace/ws/800/cpsprodpb/6995/live/9c21db10-f208-11f0-af44-156539fce2f7.jpg.webp" class="w-full h-full object-cover grayscale hover:grayscale-0">
                </div>

                <svg class="absolute bottom-10 right-0 w-24 h-24 text-gray-600 opacity-30" viewBox="0 0 100 100" fill="none">
                    <path d="M0 50 Q 50 0 100 50 T 200 50" stroke="currentColor" stroke-width="2" fill="none"/>
                    <path d="M0 70 Q 50 20 100 70 T 200 70" stroke="currentColor" stroke-width="2" fill="none"/>
                </svg>
            </div>

        </div>
    </div>
</section>


<section class="py-20 bg-gray-50 overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="flex justify-between items-end mb-12" data-aos="fade-right">
            <div>
                <h2 class="text-4xl font-bold text-unsri-green">Update Lainnya</h2>
                <p class="text-gray-500 mt-2 text-lg">Berita dan kegiatan terbaru Satgas PPKPT</p>
            </div>
            <a href="#" class="hidden md:flex items-center gap-2 text-unsri-yellow font-bold hover:text-unsri-dark-yellow transition">
                Selengkapnya <i class="fas fa-arrow-right"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 group" data-aos="fade-up" data-aos-delay="100">
                <div class="relative h-64 overflow-hidden">
                    <img src="images/1.png" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <span class="text-white text-sm font-bold">Baca Selengkapnya</span>
                    </div>
                    <div class="absolute top-4 right-4 bg-unsri-yellow text-unsri-green text-xs font-bold px-3 py-1 rounded-full">
                        Edukasi
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-lg text-gray-800 mb-2 group-hover:text-unsri-blue transition">Viralisasi Kekerasan</h3>
                    <p class="text-xs text-gray-500">Bahaya menyebarkan konten kekerasan di media sosial.</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 group" data-aos="fade-up" data-aos-delay="200">
                <div class="relative h-64 overflow-hidden">
                    <img src="images/2.png" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 right-4 bg-blue-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                        Event
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-lg text-gray-800 mb-2 group-hover:text-unsri-blue transition">Pemilihan Duta 2026</h3>
                    <p class="text-xs text-gray-500">Pendaftaran duta anti kekerasan dibuka untuk mahasiswa.</p>
                </div>
            </div>

             <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 group" data-aos="fade-up" data-aos-delay="300">
                <div class="relative h-64 overflow-hidden">
                    <img src="images/3.png" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                     <div class="absolute top-4 right-4 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                        Berita
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-lg text-gray-800 mb-2 group-hover:text-unsri-blue transition">Kampanye Anti Kekerasan</h3>
                    <p class="text-xs text-gray-500">Sosialisasi masif di 10 Fakultas Universitas Sriwijaya.</p>
                </div>
            </div>

             <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 group border-2 border-unsri-yellow" data-aos="fade-up" data-aos-delay="400">
                <div class="relative h-64 flex items-center justify-center bg-yellow-50">
                    <img src="{{ asset('images/satgas.png') }}" class="w-32 h-32 opacity-80 group-hover:rotate-12 transition-transform duration-500">
                </div>
                <div class="p-6 bg-unsri-green text-white">
                    <h3 class="font-bold text-lg mb-2">Mekanisme Resmi</h3>
                    <p class="text-xs text-gray-300">Pelajari alur penanganan kekerasan di UNSRI.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="container mx-auto px-4 max-w-5xl">
        <h2 class="text-4xl font-bold text-center text-unsri-green mb-16" data-aos="fade-up">Mekanisme Penanganan Kekerasan</h2>

        <div class="relative flex flex-col gap-8">
            <div class="absolute left-8 md:left-[3.25rem] top-0 bottom-0 w-1 border-l-4 border-dashed border-gray-800 h-full z-0"></div>

            <div class="flex gap-8 relative z-10" data-aos="fade-right">
                <div class="w-16 h-16 md:w-24 md:h-24 rounded-full bg-unsri-yellow flex-shrink-0 flex items-center justify-center font-extrabold text-3xl text-unsri-green shadow-xl border-4 border-white">1</div>
                <div class="bg-white border-l-8 border-gray-200 shadow-lg rounded-r-lg p-6 w-full transform hover:scale-[1.01] transition-transform">
                    <p class="font-bold text-gray-800 text-sm md:text-base mb-2">Dalam penanganan kekerasan oleh satgas dan/atau oleh Itjen</p>
                    <h4 class="font-extrabold text-lg md:text-xl text-black">Terdapat dugaan Kekerasan Terjadi dan Korban/Pelaku Melaporkan Kekerasan</h4>
                    <div class="mt-4 bg-yellow-100 text-yellow-800 px-4 py-2 rounded-md inline-block text-sm font-semibold">
                        <i class="fas fa-user-shield mr-2"></i> Pemberian Pemulihan bagi korban dan saksi dimulai
                    </div>
                </div>
            </div>

            <div class="flex gap-8 relative z-10" data-aos="fade-right" data-aos-delay="100">
                <div class="w-16 h-16 md:w-24 md:h-24 rounded-full bg-emerald-500 flex-shrink-0 flex items-center justify-center font-extrabold text-3xl text-white shadow-xl border-4 border-white">2</div>
                <div class="bg-white border shadow-lg rounded-lg p-6 w-full relative">
                    <h4 class="font-bold text-center text-lg mb-4">Apakah terlapor adalah pemimpin PT?</h4>
                    <div class="flex flex-col md:flex-row gap-4 justify-center items-center text-sm">
                        <div class="flex items-start gap-2">
                            <i class="fas fa-level-up-alt rotate-90 text-gray-400 mt-1"></i>
                            <div>
                                <span class="font-bold text-emerald-600">Ya : </span>
                                <span class="text-emerald-500">Satgas dan itjen meluruskan laporan kepada satu sama lain</span>
                            </div>
                        </div>
                        <div class="w-px h-8 bg-gray-300 hidden md:block"></div>
                        <div>
                            <span class="font-bold text-red-500">Tidak : </span>
                            <span class="text-gray-600">Tindak lanjut pelaporan</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex gap-8 relative z-10 items-center" data-aos="fade-right" data-aos-delay="200">
                <div class="w-16 md:w-24 flex-shrink-0"></div>

                <div class="bg-white border shadow-lg rounded-lg p-6 w-full relative border-t-4 border-emerald-500">
                    <h4 class="font-bold text-center text-lg mb-2">Tindak lanjut pelaporan</h4>
                    <p class="text-center text-xs text-gray-500 mb-4 uppercase tracking-wider">Apakah laporan terkait Tridharma dan tidak terkait disiplin/etik?</p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm bg-gray-50 p-4 rounded-lg">
                         <div>
                            <span class="font-bold text-red-500 block">Tidak:</span>
                            Laporan dialihkan
                        </div>
                        <div class="text-right md:text-left border-t md:border-t-0 md:border-l border-gray-200 pt-2 md:pt-0 md:pl-4">
                            <span class="font-bold text-blue-600 block">Ya:</span>
                            <span class="text-blue-500 font-bold underline cursor-pointer">Pemeriksaan Pihak Terkait & Bukti</span>
                        </div>
                    </div>
                </div>

                <div class="absolute -right-4 md:-right-16 top-1/2 -translate-y-1/2 w-12 h-12 md:w-16 md:h-16 rounded-full bg-unsri-yellow flex items-center justify-center font-bold text-xl shadow-lg border-4 border-white z-20">3</div>
            </div>

            <div class="flex gap-8 relative z-10 items-center" data-aos="zoom-in" data-aos-delay="300">
                <div class="w-16 h-16 md:w-24 md:h-24 rounded-full bg-pink-400 flex-shrink-0 flex items-center justify-center font-extrabold text-3xl text-white shadow-xl border-4 border-white">4</div>
                 <div class="bg-white border shadow-md rounded-lg p-4 w-full text-center hover:bg-pink-50 transition cursor-default">
                    <h4 class="font-extrabold text-gray-800">Penyusunan Kesimpulan & Rekomendasi</h4>
                </div>
                 <div class="absolute -right-4 md:-right-16 top-1/2 -translate-y-1/2 w-12 h-12 md:w-16 md:h-16 rounded-full bg-pink-400 flex items-center justify-center font-bold text-xl text-white shadow-lg border-4 border-white z-20">4</div>
            </div>

             <div class="flex gap-8 relative z-10" data-aos="fade-up" data-aos-delay="400">
                <div class="w-16 h-16 md:w-24 md:h-24 rounded-full bg-green-500 flex-shrink-0 flex items-center justify-center font-extrabold text-3xl text-white shadow-xl border-4 border-white">5</div>
                <div class="bg-white border-2 border-green-100 shadow-xl rounded-lg p-6 w-full">
                    <h4 class="font-bold text-center text-lg mb-4">Apakah Kekerasan dalam Laporan Terbukti?</h4>
                    <div class="flex flex-col gap-3">
                        <div class="flex items-center gap-3 bg-green-50 p-3 rounded border border-green-200">
                            <i class="fas fa-check-circle text-green-500 text-xl"></i>
                            <div>
                                <span class="font-bold text-gray-800">Ya : </span>
                                <span class="text-green-600 font-bold">Penjatuhan sanksi bagi pelaku kekerasan</span>
                            </div>
                        </div>
                         <div class="flex items-center gap-3 bg-red-50 p-3 rounded border border-red-200">
                            <i class="fas fa-times-circle text-red-400 text-xl"></i>
                            <div>
                                <span class="font-bold text-gray-800">Tidak : </span>
                                <span class="text-gray-600">Pemulihan nama baik bagi terlapor</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap gap-4 mt-8 ml-16 md:ml-32 text-xs font-semibold text-gray-500">
                <div class="flex items-center gap-2"><span class="w-4 h-4 bg-cyan-300 rounded"></span> 3 Hari Kerja</div>
                <div class="flex items-center gap-2"><span class="w-4 h-4 bg-unsri-yellow rounded"></span> 7 Hari Kerja</div>
                <div class="flex items-center gap-2"><span class="w-4 h-4 bg-blue-600 rounded"></span> 30 + 30 Hari Kerja</div>
                <div class="flex items-center gap-2"><span class="w-4 h-4 bg-green-500 rounded"></span> 5 Hari Kerja</div>
                <div class="flex items-center gap-2">
  <span class="w-4 h-4 rounded bg-[#FB68C1]"></span>
  7 Hari Kerja
</div>

            </div>

        </div>
    </div>
</section>

<section class="py-20 bg-white" x-data="{
    activeSlide: 0,
    slides: [
        {
            name: 'Prof. Dr. Taufiq Marwa, S.E., M.Si.',
            role: 'Rektor Universitas Sriwijaya',
            quote: 'Hiduplah seolah-olah kamu akan mati besok. Belajarlah seolah-olah kamu akan hidup selamanya. - Mahatma Gandhi',
            image: 'images/image.png'

        },
        {
            name: 'Ketua Satgas PPKPT',
            role: 'Ketua Satgas',
            quote: 'Kami berkomitmen untuk menindak tegas segala bentuk kekerasan seksual tanpa pandang bulu. Laporkan, dan kami akan lindungi privasi Anda.',
            image: 'images/imagees.png'
        }
    ]
}">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-unsri-green uppercase mb-16 tracking-widest">Kata Tokoh</h2>

        <div class="relative max-w-5xl mx-auto flex items-center justify-center">

            <button @click="activeSlide = activeSlide === 0 ? slides.length - 1 : activeSlide - 1"
                    class="absolute left-0 md:-left-12 z-20 w-12 h-12 bg-unsri-yellow rounded-full flex items-center justify-center text-white hover:bg-yellow-400 transition shadow-lg">
                <i class="fas fa-chevron-left text-xl"></i>
            </button>

            <div class="flex flex-col md:flex-row items-center gap-0 w-full">
                <div class="w-full md:w-1/2 relative z-10" x-show="true"
                     x-transition:enter="transition ease-out duration-500"
                     x-transition:enter-start="opacity-0 -translate-x-10"
                     x-transition:enter-end="opacity-100 translate-x-0">
                    <img :src="slides[activeSlide].image" class="w-full h-[400px] object-cover object-top rounded-lg shadow-2xl "class="w-full h-[400px] object-cover rounded-lg shadow-2xl">>

                    <div class="md:hidden absolute bottom-0 inset-x-0 bg-black/60 p-4 text-white">
                        <h4 class="font-bold" x-text="slides[activeSlide].name"></h4>
                    </div>
                </div>

                <div class="w-full md:w-2/3 -ml-0 md:-ml-10 mt-[-2rem] md:mt-0 relative z-20">
                    <div class="bg-unsri-green text-white p-8 md:p-12 rounded-xl shadow-2xl relative overflow-hidden min-h-[300px] flex flex-col justify-center text-left">
                        <i class="fas fa-quote-left text-6xl text-white/10 absolute top-4 left-4"></i>

                        <p class="text-sm md:text-base leading-relaxed italic mb-6 relative z-10" x-text="slides[activeSlide].quote"></p>

                        <div class="border-t border-white/20 pt-4">
                            <h4 class="font-bold text-unsri-yellow text-lg" x-text="slides[activeSlide].name"></h4>
                            <p class="text-xs text-gray-300" x-text="slides[activeSlide].role"></p>
                        </div>

                        <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-emerald-500 transform rotate-45"></div>

                        <div class="absolute bottom-4 right-8 flex gap-2">
                            <template x-for="(slide, index) in slides" :key="index">
                                <div class="w-2 h-2 rounded-full cursor-pointer transition-all"
                                     :class="activeSlide === index ? 'bg-white w-4' : 'bg-white/30'"
                                     @click="activeSlide = index"></div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>

            <button @click="activeSlide = activeSlide === slides.length - 1 ? 0 : activeSlide + 1"
                    class="absolute right-0 md:-right-12 z-20 w-12 h-12 bg-unsri-yellow rounded-full flex items-center justify-center text-white hover:bg-yellow-400 transition shadow-lg">
                <i class="fas fa-chevron-right text-xl"></i>
            </button>

        </div>
    </div>
</section>

<section class="py-24 bg-gray-50 relative overflow-hidden">
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-unsri-yellow/20 rounded-full blur-3xl opacity-50 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-unsri-green/10 rounded-full blur-3xl opacity-50 pointer-events-none"></div>
    <div class="absolute top-20 left-10 text-[15rem] text-gray-200 opacity-10 pointer-events-none font-serif select-none">?</div>

    <div class="container mx-auto px-6 relative z-10 max-w-4xl" x-data="{ selected: null }">

        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-extrabold text-unsri-green mb-4">
                Paling Sering Ditanyakan
            </h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-unsri-yellow to-unsri-green mx-auto rounded-full"></div>
            <p class="mt-4 text-gray-500">Temukan jawaban cepat seputar mekanisme pelaporan dan perlindungan.</p>
        </div>

        <div class="space-y-4">
            @foreach ([
                [
                    'q' => 'Bagaimana Saya Bisa Melapor?',
                    'a' => 'Anda bisa melapor dengan menekan tombol "Buat Laporan" di atas. Anda akan diberikan Ticket ID untuk memantau status laporan secara anonim tanpa perlu login. Kami menjamin kerahasiaan identitas Anda.'
                ],
                [
                    'q' => 'Berapa Lama Laporan Diproses?',
                    'a' => 'Verifikasi awal memakan waktu maksimal 3 hari kerja. Proses investigasi hingga rekomendasi sanksi maksimal 30 hari kerja, dan dapat diperpanjang 30 hari lagi jika kasus kompleks.'
                ],
                [
                    'q' => 'Apa Saja Kekerasan Yang Bisa Dilaporkan?',
                    'a' => 'Segala bentuk kekerasan seksual, fisik, psikologis (bullying), dan kekerasan berbasis gender online (KBGO) yang terjadi di lingkungan kampus atau melibatkan sivitas akademika UNSRI.'
                ],
                [
                    'q' => 'Apakah Identitas Saya Aman?',
                    'a' => 'Sangat aman. Sistem kami menggunakan enkripsi end-to-end dan Anda bisa memilih fitur "Lapor Anonim". Identitas Anda hanya diketahui oleh Ketua Satgas untuk keperluan verifikasi dan perlindungan.'
                ]
            ] as $index => $item)

            <div class="group bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1"
                 :class="selected === {{ $index }} ? 'ring-2 ring-unsri-yellow/50 border-unsri-yellow' : ''"
                 data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">

                <button @click="selected !== {{ $index }} ? selected = {{ $index }} : selected = null"
                        class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none">

                    <span class="font-bold text-lg text-gray-800 group-hover:text-unsri-green transition-colors flex items-center gap-4">
                        <span class="w-8 h-8 rounded-full bg-gray-100 text-unsri-green flex items-center justify-center text-xs font-extrabold group-hover:bg-unsri-yellow group-hover:text-unsri-green transition-all shadow-inner">
                            0{{ $index + 1 }}
                        </span>
                        {{ $item['q'] }}
                    </span>

                    <span class="w-8 h-8 rounded-full border border-gray-200 flex items-center justify-center transition-transform duration-300 group-hover:border-unsri-yellow group-hover:bg-unsri-yellow group-hover:text-unsri-green"
                          :class="selected === {{ $index }} ? 'rotate-180 bg-unsri-yellow border-unsri-yellow text-unsri-green' : 'text-gray-400'">
                        <i class="fas fa-chevron-down text-xs"></i>
                    </span>
                </button>

                <div x-show="selected === {{ $index }}"
                     x-collapse
                     x-cloak
                     class="border-t border-dashed border-gray-200">
                    <div class="px-6 py-6 text-gray-600 leading-relaxed bg-gray-50/50 rounded-b-2xl md:pl-20 relative">
                        <i class="fas fa-quote-left text-unsri-yellow/20 text-4xl absolute top-4 left-6 hidden md:block"></i>
                        {{ $item['a'] }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-16 text-center" data-aos="fade-in" data-aos-delay="500">
            <p class="text-gray-500 mb-4 font-medium">Masih memiliki pertanyaan lain yang belum terjawab?</p>
            <a href="#" class="inline-flex items-center gap-2 text-unsri-green font-bold hover:text-unsri-yellow transition-all border-b-2 border-unsri-green hover:border-unsri-yellow pb-1 group">
                <i class="far fa-envelope group-hover:animate-bounce"></i> Hubungi Tim Layanan Kami
            </a>
        </div>

    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-4 max-w-5xl">
        <div class="bg-unsri-yellow rounded-3xl p-10 md:p-16 text-center shadow-2xl relative overflow-hidden group" data-aos="zoom-in">
            <div class="absolute -top-24 -left-24 w-64 h-64 bg-white/20 rounded-full group-hover:scale-110 transition-transform duration-700"></div>
            <div class="absolute -bottom-24 -right-24 w-64 h-64 bg-white/20 rounded-full group-hover:scale-110 transition-transform duration-700"></div>
            <div class="absolute top-1/2 left-10 text-6xl text-white/20 animate-bounce delay-700"><i class="fas fa-bullhorn"></i></div>
            <div class="absolute top-1/2 right-10 text-6xl text-white/20 animate-bounce"><i class="fas fa-shield-alt"></i></div>

            <h3 class="text-3xl md:text-5xl font-extrabold text-unsri-green mb-6 relative z-10">
                Bersama, Kita Ciptakan Kampus <br> Yang Aman
            </h3>

            <p class="text-unsri-green/80 text-lg mb-10 max-w-2xl mx-auto font-medium relative z-10">
                Jangan Biarkan Kekerasan Menjadi Budaya. Beranilah Bersuara Untuk Diri Sendiri Dan Teman-Teman Anda. Kami Berdiri Di Belakang Anda.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4 relative z-10">
                <a href="#lapor" class="bg-white text-unsri-green font-bold px-10 py-4 rounded-full hover:bg-unsri-green hover:text-white shadow-xl transform hover:-translate-y-1 transition-all duration-300 text-lg">
                    Buat Laporan
                </a>
                <a href="#mekanisme" class="bg-transparent border-2 border-unsri-green text-unsri-green font-bold px-10 py-4 rounded-full hover:bg-unsri-green hover:text-white transition-all duration-300 text-lg">
                    Lihat Mekanisme
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<style>
    /* Custom Animations for Blob Backgrounds */
    @keyframes blob {
        0% { transform: translate(0px, 0px) scale(1); }
        33% { transform: translate(30px, -50px) scale(1.1); }
        66% { transform: translate(-20px, 20px) scale(0.9); }
        100% { transform: translate(0px, 0px) scale(1); }
    }
    .animate-blob {
        animation: blob 7s infinite;
    }
    .animation-delay-2000 {
        animation-delay: 2s;
    }
    .animation-delay-4000 {
        animation-delay: 4s;
    }
</style>
@endpush
