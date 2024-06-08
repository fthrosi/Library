<?php

namespace App\Http\Controllers\petugas;

use App\Http\Controllers\Controller;
use App\Models\History;
use Illuminate\Http\Request;

class HistoryPetugasController extends Controller
{
    public function index()
    {   
        $history = History::all()->load('siswa', 'buku');
        // return $peminjaman;
        return view('petugas.history.history', compact('history'));
        
    }
}
