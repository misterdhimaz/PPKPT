<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Pagination\LengthAwarePaginator;

class LaporanController extends Controller
{
    // SAYA UBAH DARI 'index' MENJADI 'daftar' AGAR SESUAI ERROR KAMU
    public function daftar()
    {
        // 1. DATA DUMMY MANUAL (Langsung di sini biar pasti muncul)
        // Kita buat pura-pura ada 15 data laporan
        $dummyData = collect([]);

        $statuses = ['Verifikasi', 'Pemeriksaan', 'Penindakan', 'Selesai'];
        $categories = ['Kekerasan Seksual', 'Perundungan', 'Kekerasan Fisik', 'Diskriminasi', 'Intoleransi'];

        for ($i = 1; $i <= 15; $i++) {
            $dummyData->push((object)[
                'id' => $i,
                'ticket_id' => 'REG-' . rand(10000, 99999),
                'jenis_kekerasan' => $categories[array_rand($categories)],
                'status' => $statuses[array_rand($statuses)],
                'created_at' => Carbon::now()->subDays(rand(1, 30)),
                'updated_at' => Carbon::now()->subDays(rand(0, 5)),
            ]);
        }

        // Kita buat pagination manual dari array dummy tadi
        $page = request()->get('page', 1);
        $perPage = 10;

        $laporans = new LengthAwarePaginator(
            $dummyData->forPage($page, $perPage),
            $dummyData->count(),
            $perPage,
            $page,
            ['path' => request()->url(), 'query' => request()->query()]
        );

        // 2. HITUNG STATISTIK DUMMY
        // Hitung manual dari data dummy di atas
        $stats = [
            'masuk' => $dummyData->count(),
            'proses' => $dummyData->whereIn('status', ['Verifikasi', 'Pemeriksaan', 'Penindakan'])->count(),
            'selesai' => $dummyData->where('status', 'Selesai')->count(),
        ];

        // 3. KIRIM KE VIEW
        // Pastikan nama view-nya sesuai dengan folder kamu (resources/views/laporan/index.blade.php)
        return view('laporan.index', compact('laporans', 'stats'));
    }
}
