<?php

namespace App\Http\Controllers\Siswa;

use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\History;
use App\Models\Siswa;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::where('id_peminjam', Auth::guard('siswa')->user()->id)->get();
        return view('siswa.transaksi.peminjaman', compact('peminjaman'));
    }
    public function create($id)
    {
        $buku = Buku::find($id);
        $id_siswa = Auth::guard('siswa')->user()->id;
        $siswa = Siswa::find($id_siswa);
        $pinjam = Peminjaman::where('id_peminjam', $id_siswa);
        $peminjamanBelumKembali = Peminjaman::where('id_peminjam', $id_siswa)
            ->whereDate('tanggal_kembali', '<', date('Y-m-d'))
            ->exists();
        if ($buku->stok_buku == 0) {
            return redirect()->back()->with('error', 'Stok buku kosong');
        } else if ($pinjam->where('id_buku', $id)->exists()) {
            return redirect()->back()->with('error', 'Anda sudah meminjam buku ini');
        } else if ($peminjamanBelumKembali) {
            return redirect()->back()->with('error', 'Anda memiliki buku yang belum dikembalikan');
        } else if ($siswa->denda != 0) {
            return redirect()->back()->with('error', 'Anda memiliki denda, silahkan lunasi terlebih dahulu');
        } else {
            $id_peminjam = Auth::guard('siswa')->user()->id;
            $tanggal_pinjam = date('Y-m-d');
            $tanggal_kembali = date('Y-m-d', strtotime('+14 days', strtotime($tanggal_pinjam)));
            Peminjaman::create([
                'id_peminjam' => $id_peminjam,
                'id_buku' => $buku->id_buku,
                'tanggal_pinjam' => $tanggal_pinjam,
                'tanggal_kembali' => $tanggal_kembali,

            ]);
            $buku = Buku::find($id);
            $buku->stok_buku = $buku->stok_buku - 1;
            $buku->jumlah_dipinjam = $buku->jumlah_dipinjam + 1;
            $buku->save();
            return redirect()->back()->with('success', 'Buku berhasil dipinjam');
        }
    }
    public function return($id)
    {
        $peminjaman = Peminjaman::where('id_buku', $id)->first();
        $id_siswa = Auth::guard('siswa')->user()->id;
        $tanggal_kembali_actual = strtotime(date('Y-m-d'));
        $tanggal_kembali = strtotime($peminjaman->tanggal_kembali);
        if ($tanggal_kembali < $tanggal_kembali_actual) {
            $denda = $tanggal_kembali_actual - $tanggal_kembali;
            $denda_hari = floor($denda / (60 * 60 * 24));
            $siswa = Siswa::find($id_siswa);
            $siswa->denda = $siswa->denda + (5000 * $denda_hari);
            $siswa->save();
        }
        $buku = Buku::find($peminjaman->id_buku);
        $buku->stok_buku = $buku->stok_buku + 1;
        $buku->save();
        $peminjaman->delete();
        return redirect()->back()->with('success', 'Buku berhasil dikembalikan');
    }
}
