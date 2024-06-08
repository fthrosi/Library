<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ulasan;
use App\Models\Buku;
use Illuminate\Support\Facades\Auth;
class UlasanController extends Controller
{
    public function Ulasan($id,Request $request){
        $id_siswa = Auth::guard('siswa')->user()->id;
        $buku = Buku::where('id_buku',$id)->first();
        $ulasan = Ulasan::where('id_siswa',$id_siswa)->where('id_buku',$id)->first();
        if($ulasan){
            $ulasan->ulasan = $request->ulasan;
            $ulasan->save();
            return redirect('siswa/history');
        }
        Ulasan::create([
            'id_siswa' => $id_siswa,
            'id_buku' => $buku->id_buku,
            'ulasan' => $request->ulasan,
        ]);
        return redirect('siswa/history');
    }
}
