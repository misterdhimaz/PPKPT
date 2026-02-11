<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        // Menampilkan daftar laporan di halaman publik
        $laporans = Laporan::latest()->get();

        // Statistik sederhana untuk Dashboard
        $stats = [
            'masuk' => Laporan::count(),
            'proses' => Laporan::whereIn('status', ['Verifikasi', 'Pemeriksaan'])->count(),
            'selesai' => Laporan::where('status', 'Selesai')->count(),
        ];

        return view('home', compact('laporans', 'stats'));
    }

    public function daftar()
    {
        // Ambil data laporan dengan pagination (10 per halaman)
        $laporans = Laporan::latest()->paginate(10);

        // Hitung statistik untuk Header Halaman Daftar
        $stats = [
            'masuk' => Laporan::count(),
            'proses' => Laporan::whereIn('status', ['Verifikasi', 'Pemeriksaan', 'Pembahasan'])->count(),
            'selesai' => Laporan::where('status', 'Selesai')->count(),
        ];

        return view('laporan.index', compact('laporans', 'stats'));
    }

    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'deskripsi' => 'required',
            'kategori' => 'required',
            'lokasi_makro' => 'required'
        ]);

        // Generate Ticket ID Format: S13/PPKPT/UNSRI/TAHUN/NO_URUT
        $count = Laporan::count() + 1;
        $year = date('Y');
        $ticketId = "S13/PPKPT/UNSRI/{$year}/" . str_pad($count, 3, '0', STR_PAD_LEFT);

        Laporan::create([
            'ticket_id' => $ticketId,
            'judul' => 'Laporan Masuk #' . $count,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'lokasi_makro' => $request->lokasi_makro,
            'status' => 'Verifikasi',
            'is_anonim' => true // Default anonim sesuai SRS
        ]);

        return redirect()->back()->with('success', 'Laporan Berhasil! Simpan Ticket ID Anda: ' . $ticketId);
    }
}
