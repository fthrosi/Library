<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PinjamPetugasController extends Controller
{
    public function index()
    {   
        $peminjaman = Peminjaman::all()->load('siswa', 'buku');
        // return $peminjaman;
        return view('petugas.meminjamkan.pinjam', compact('peminjaman'));
        
    }

}
