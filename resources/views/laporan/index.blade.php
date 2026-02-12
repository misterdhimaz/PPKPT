@extends('layouts.app')

@section('content')

<div class="relative w-full h-[500px] overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://unsri.ac.id/frontend/images/slider/home1/unsri_landmark_idl.jpg"
             class="w-full h-full object-cover brightness-50"
             alt="Rektorat UNSRI">
    </div>

    <div class="relative z-10 h-full flex flex-col justify-center items-center text-center px-4">
        <h2 class="text-white font-bold text-lg md:text-xl tracking-widest mb-10 uppercase">
            STATISTIK PENANGANAN 2026
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full max-w-4xl">
            <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-8 flex flex-col items-center justify-center text-white hover:bg-white/20 transition duration-300">
                <span class="text-5xl font-extrabold mb-2">{{ $stats['masuk'] }}</span>
                <span class="text-xs font-bold uppercase tracking-wider opacity-80">Laporan Masuk</span>
            </div>

            <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-8 flex flex-col items-center justify-center text-white hover:bg-white/20 transition duration-300">
                <span class="text-5xl font-extrabold mb-2">{{ $stats['proses'] }}</span>
                <span class="text-xs font-bold uppercase tracking-wider opacity-80">Sedang Diproses</span>
            </div>

            <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-8 flex flex-col items-center justify-center text-white hover:bg-white/20 transition duration-300">
                <span class="text-5xl font-extrabold mb-2">{{ $stats['selesai'] }}</span>
                <span class="text-xs font-bold uppercase tracking-wider opacity-80">Selesai Ditangani</span>
            </div>
        </div>
    </div>
</div>

<div class="bg-white py-16 min-h-screen">
    <div class="max-w-6xl mx-auto px-4">

        <h3 class="text-2xl md:text-3xl font-bold text-[#556B2F] uppercase mb-8">
            DAFTAR PROSES PENANGANAN
        </h3>

        <div class="flex flex-col md:flex-row justify-end items-center mb-6 gap-4">
            <div class="relative w-full md:w-80">
                <input type="text" placeholder="Cari Kasus"
                       class="w-full px-4 py-2 rounded-full border border-yellow-400 focus:outline-none focus:ring-2 focus:ring-yellow-400 text-sm placeholder-gray-400">
                <button class="absolute right-3 top-1/2 -translate-y-1/2 text-yellow-500 text-lg">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>

        <div class="flex justify-center mb-8">
            <div class="flex items-center gap-8 text-xl font-bold text-gray-400">
                <a href="#" class="text-[#556B2F] border-b-4 border-[#556B2F] pb-1">Proses</a>
                <div class="h-6 w-px bg-gray-300"></div>
                <a href="#" class="hover:text-[#556B2F] transition-colors pb-1">Selesai</a>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left border-separate border-spacing-y-3">
                <thead>
                    <tr class="bg-[#4FD1C5] text-[#0B1E33] text-xs uppercase font-extrabold shadow-sm">
                        <th class="py-4 px-6 rounded-l-lg">No</th>
                        <th class="py-4 px-6">Nomor Perkara</th>
                        <th class="py-4 px-6">Tanggal Masuk</th>
                        <th class="py-4 px-6">Status Penanganan</th>
                        <th class="py-4 px-6">Tanggal Update</th>
                        <th class="py-4 px-6 text-center rounded-r-lg">Detail Kasus</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach($laporans as $index => $laporan)
                    <tr class="bg-white hover:bg-gray-50 transition-shadow shadow-sm hover:shadow-md">
                        <td class="py-4 px-6 font-bold text-center border-b border-gray-100">
                            {{ $index + 1 }}
                        </td>

                        <td class="py-4 px-6 font-medium border-b border-gray-100">
                            {{ $laporan->ticket_id }}
                        </td>

                        <td class="py-4 px-6 border-b border-gray-100">
                            {{ $laporan->created_at->format('j F Y') }}
                        </td>

                        <td class="py-4 px-6 border-b border-gray-100">
                            {{ $laporan->status }}
                        </td>

                        <td class="py-4 px-6 border-b border-gray-100">
                            {{ $laporan->updated_at->format('j F Y') }}
                        </td>

                        <td class="py-4 px-6 text-center border-b border-gray-100">
                            <a href="#" class="inline-block bg-[#FFD700] text-black font-bold px-6 py-2 rounded-full text-xs hover:bg-yellow-400 transition-transform transform hover:scale-105 shadow-md">
                                Detail
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="flex justify-center mt-10 gap-2">
            <button class="w-8 h-8 flex items-center justify-center rounded bg-gray-300 text-white hover:bg-[#4FD1C5]"><i class="fas fa-chevron-left"></i></button>
            <button class="w-8 h-8 flex items-center justify-center rounded bg-[#4FD1C5] text-white font-bold">1</button>
            <button class="w-8 h-8 flex items-center justify-center rounded bg-[#0B1E33] text-white font-bold">2</button>
            <button class="w-8 h-8 flex items-center justify-center rounded bg-[#FFD700] text-white font-bold"><i class="fas fa-chevron-right"></i></button>
        </div>

    </div>
</div>

@endsection

@push('styles')
<style>
    /* Styling khusus agar tabel bisa border-spacing */
    table { border-collapse: separate; }

    /* Font custom jika diperlukan, default sans-serif sudah oke */
    body { font-family: 'Inter', sans-serif; }
</style>
@endpush
