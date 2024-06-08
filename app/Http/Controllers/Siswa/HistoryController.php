<?php

namespace App\Http\Controllers\Siswa;

use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\History;
use App\Models\Buku;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $history = History::where('id_siswa',Auth::guard('siswa')->user()->id)->get();
        return view('siswa.transaksi.history', compact('history'));
    }
    public function history($id){
        $id_siswa = Auth::guard('siswa')->user()->id;
        $buku = Buku::where('id_buku',$id)->first();
        $tanggal_kembali = date('Y-m-d');
        History::create([
            'id_siswa' => $id_siswa,
            'id_buku' => $buku->id_buku,
            'tanggal_kembali' => $tanggal_kembali,
        ]);
        return redirect('siswa/return/'.$buku->id_buku);
    }
}
