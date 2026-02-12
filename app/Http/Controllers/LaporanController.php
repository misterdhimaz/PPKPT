<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Pagination\LengthAwarePaginator;

class LaporanController extends Controller
{
    // UBAH DARI 'daftar' KEMBALI JADI 'index'
    public function index()
    {
        // 1. DATA DUMMY MANUAL
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

        // Pagination
        $page = request()->get('page', 1);
        $perPage = 10;

        $laporans = new LengthAwarePaginator(
            $dummyData->forPage($page, $perPage),
            $dummyData->count(),
            $perPage,
            $page,
            ['path' => request()->url(), 'query' => request()->query()]
        );

        // Statistik
        $stats = [
            'masuk' => $dummyData->count(),
            'proses' => $dummyData->whereIn('status', ['Verifikasi', 'Pemeriksaan', 'Penindakan'])->count(),
            'selesai' => $dummyData->where('status', 'Selesai')->count(),
        ];

        return view('laporan.index', compact('laporans', 'stats'));
    }
}
