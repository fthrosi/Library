<?php

namespace App\Http\Controllers;

use App\Models\Buku; // Assuming your book model is named Buku
use App\Models\Siswa; // Assuming your book model is named Buku
use App\Models\Peminjaman; // Assuming your book model is named Buku
use App\Models\History; // Assuming your book model is named Buku

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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
