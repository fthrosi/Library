<?php

namespace App\Http\Controllers\User;

use Exception;
use App\Models\Buku;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function novel()
    {
        $jenisBuku = 'Novel';
        $novel = Buku::all();
        //render view with posts
        return view('user.isian.buku', compact('novel'));
    }

    // public function fiksi()
    // {
    //     $jenisBuku = 'Fiksi';
    //     $fiksi = Buku::where('jenis_buku', $jenisBuku)->latest()->get();
    //     //render view with posts
    //     return view('user.isian.buku', compact('fiksi'));
    // }
    
}
