<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Rak;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Auth;
use App\Models\Ulasan;
use Illuminate\Http\Request;

class BukuControllerSiswa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function BukuUser()
    {
        $peminjaman = Peminjaman::where('id_peminjam', Auth::guard('siswa')->user()->id)->get();
        $rak = Rak::all();
        $buku = Buku::leftJoin('peminjaman', function ($join) {
            $join->on('buku.id_buku', '=', 'peminjaman.id_buku')
                ->where('peminjaman.id_peminjam', '=', Auth::guard('siswa')->user()->id);
        })
            ->join('rak', 'rak.id_rak', '=', 'buku.rak')
            ->select('buku.*', 'rak.jenis_rak', 'peminjaman.id_pinjam')
            ->orderBy('nama_buku', 'ASC')
            ->get();
            $ulasan = Ulasan::all();
        return view('siswa.isian.buku', compact(['buku', 'rak', 'peminjaman','ulasan']));
    }
    public function dashboardBook()
    {
        $new = Buku::leftJoin('peminjaman', function ($join) {
            $join->on('buku.id_buku', '=', 'peminjaman.id_buku')
                ->where('peminjaman.id_peminjam', '=', Auth::guard('siswa')->user()->id);
        })
            ->join('rak', 'rak.id_rak', '=', 'buku.rak')
            ->select('buku.*', 'rak.jenis_rak', 'peminjaman.id_pinjam')
            ->orderBy('created_at', 'DESC')
            ->paginate(6);

        $trend = Buku::leftJoin('peminjaman', function ($join) {
            $join->on('buku.id_buku', '=', 'peminjaman.id_buku')
                ->where('peminjaman.id_peminjam', '=', Auth::guard('siswa')->user()->id);
        })
            ->join('rak', 'rak.id_rak', '=', 'buku.rak')
            ->select('buku.*', 'rak.jenis_rak', 'peminjaman.id_pinjam')
            ->orderBy('jumlah_dipinjam', 'DESC')
            ->paginate(6);
            $ulasan = Ulasan::all();
        return view('siswa.dashboard.dashboard', compact(['trend', 'new', 'ulasan']));
    }
    public function BukuRak($id_rak)
    {
        $peminjaman = Peminjaman::where('id_peminjam', Auth::guard('siswa')->user()->id)->get();

        $rak = Rak::find($id_rak);

        $bukuPadaRak = Buku::where('rak', $id_rak)
            ->leftJoin('peminjaman', function ($join) {
                $join->on('buku.id_buku', '=', 'peminjaman.id_buku')
                    ->where('peminjaman.id_peminjam', '=', Auth::guard('siswa')->user()->id);
            })
            ->select('buku.*', 'peminjaman.id_pinjam')
            ->orderBy('nama_buku', 'ASC')
            ->get();
            $ulasan = Ulasan::all();
        return view('siswa.isian.allbook', compact('bukuPadaRak', 'rak', 'peminjaman','ulasan'));
    }
}
