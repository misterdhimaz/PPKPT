@extends('layouts.app')

@section('content')
<div class="relative bg-unsri-green h-64 overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://fkip.unsri.ac.id/wp-content/uploads/2016/08/rektorat-unsri-indralaya.jpg" class="w-full h-full object-cover">
    </div>
    <div class="relative max-w-7xl mx-auto px-4 h-full flex flex-col justify-center items-center text-center">
        <h2 class="text-3xl font-bold text-white uppercase tracking-widest mb-8">Statistik Penanganan 2026</h2>

        <div class="grid grid-cols-3 gap-4 md:gap-12 w-full max-w-3xl">
            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4 border border-white/20">
                <div class="text-4xl font-extrabold text-white">{{ $stats['masuk'] }}</div>
                <div class="text-[10px] md:text-xs font-bold text-unsri-yellow uppercase mt-1">Laporan Masuk</div>
            </div>
            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4 border border-white/20">
                <div class="text-4xl font-extrabold text-white">{{ $stats['proses'] }}</div>
                <div class="text-[10px] md:text-xs font-bold text-unsri-yellow uppercase mt-1">Sedang Diproses</div>
            </div>
            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4 border border-white/20">
                <div class="text-4xl font-extrabold text-white">{{ $stats['selesai'] }}</div>
                <div class="text-[10px] md:text-xs font-bold text-unsri-yellow uppercase mt-1">Selesai Ditangani</div>
            </div>
        </div>
    </div>
</div>

<div class="bg-gray-50 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4">

        <div class="flex flex-col md:flex-row justify-between items-end mb-6 gap-4">
            <div>
                <h3 class="text-2xl font-bold text-unsri-green uppercase">Daftar Proses Penanganan</h3>
                <div class="h-1 w-20 bg-unsri-yellow mt-2"></div>
            </div>

            <div class="relative w-full md:w-64">
                <input type="text" placeholder="Cari Nomor Kasus..." class="w-full pl-4 pr-10 py-2 rounded-lg border border-unsri-yellow text-sm focus:outline-none focus:ring-2 focus:ring-unsri-yellow">
                <button class="absolute right-3 top-1/2 -translate-y-1/2 text-unsri-yellow">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-unsri-green">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left">
                    <thead class="bg-unsri-light-green text-unsri-green uppercase text-xs font-extrabold">
                        <tr>
                            <th class="px-6 py-4">No</th>
                            <th class="px-6 py-4">Nomor Perkara</th>
                            <th class="px-6 py-4">Tanggal Masuk</th>
                            <th class="px-6 py-4">Status Penanganan</th>
                            <th class="px-6 py-4">Tanggal Update</th>
                            <th class="px-6 py-4 text-center">Detail Kasus</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($laporans as $index => $laporan)
                        <tr class="hover:bg-gray-50 transition duration-150">
                            <td class="px-6 py-4 font-medium text-gray-500">{{ $laporans->firstItem() + $index }}</td>
                            <td class="px-6 py-4 font-bold text-gray-800">{{ $laporan->ticket_id }}</td>
                            <td class="px-6 py-4 text-gray-600">{{ $laporan->created_at->format('d F Y') }}</td>
                            <td class="px-6 py-4">
                                @php
                                    $statusClass = match($laporan->status) {
                                        'Selesai' => 'bg-green-100 text-green-800 border-green-200',
                                        'Verifikasi' => 'bg-gray-100 text-gray-800 border-gray-200',
                                        default => 'bg-yellow-100 text-yellow-800 border-yellow-200',
                                    };
                                @endphp
                                <span class="px-3 py-1 rounded-full text-xs font-bold border {{ $statusClass }}">
                                    {{ $laporan->status }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-gray-600">{{ $laporan->updated_at->format('d F Y') }}</td>
                            <td class="px-6 py-4 text-center">
                                <a href="#" class="inline-block bg-unsri-yellow text-unsri-green font-bold px-6 py-1.5 rounded-full text-xs hover:bg-yellow-400 shadow-sm transition">
                                    Detail
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center text-gray-400">
                                <i class="fas fa-folder-open text-4xl mb-3 block opacity-30"></i>
                                Belum ada data penanganan kasus saat ini.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="px-6 py-4 bg-gray-50 border-t">
                {{ $laporans->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
