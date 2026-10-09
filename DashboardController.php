<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Peserta;
use App\Models\Instruktur;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahKelas = Kelas::count();
        $jumlahPeserta = Peserta::count();
        $jumlahInstruktur = Instruktur::count();

        // Ambil 5 kelas terbaru dari database
        $kelasTerbaru = Kelas::with('instruktur')->latest()->take(5)->get();

        return view('dashboard.index', compact(
            'jumlahKelas',
            'jumlahPeserta',
            'jumlahInstruktur',
            'kelasTerbaru'
        ));
    }
}
