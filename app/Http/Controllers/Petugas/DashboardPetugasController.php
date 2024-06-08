<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\Buku; // Assuming your book model is named Buku
use App\Models\Siswa; // Assuming your book model is named Buku
use App\Models\Peminjaman; // Assuming your book model is named Buku
use App\Models\History; // Assuming your book model is named Buku
use Illuminate\Http\Request;

class DashboardPetugasController extends Controller
{
    public function index()
    {   
        $buku = Buku::all(); // You might want to adjust this based on your application logic
        $siswa = Siswa::all();
        $peminjaman = Peminjaman::all();
        $history = History::all();
        return view('petugas.dashboard.home', [
            'buku' => $buku,
            'siswa' => $siswa,
            'peminjaman' => $peminjaman,
            'history' => $history,
        ]);
        
    }
}
