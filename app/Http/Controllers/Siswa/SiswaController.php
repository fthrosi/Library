<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.dashboard.profile', compact('siswa'));
    }
    public function bayar(){
        $id = Auth::guard('siswa')->user()->id;
        $siswa = Siswa::find($id);
        $siswa->denda = 0;
        $siswa->save();
        return redirect()->back()->with('success', 'Denda berhasil dibayar');
    }

    public function update(Request $request)
    {
        $id = Auth::guard('siswa')->user()->id;
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:siswa,email,' . $id,
            'no_telp' => 'required|string',
            'alamat' => 'required|string',
        ]);
        $siswa = Siswa::find($id);

        $siswa->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'no_telp' => $request->input('no_telp'),
            'alamat' => $request->input('alamat'),
        ]);
        return redirect()->route('profile')->with('success', 'Data berhasil diperbarui.');
    }

    public function editPhoto(Request $request)
    {
        $id_siswa = Auth::guard('siswa')->user()->id;
        $siswa = Siswa::find($id_siswa);
        if ($request->hasFile('foto')) {
            File::delete(public_path('foto_siswa/' . $siswa->foto));
            $foto_profile = $request->file('foto')->getClientOriginalName();
            $request->foto->move(public_path('foto_siswa'), $foto_profile);
            $id = Auth::guard('siswa')->user()->id;
            $user = Siswa::find($id);
            $user->foto = $foto_profile;
            $user->save();
        }
        return redirect()->route('profile')->with('success', 'Foto berhasil diperbarui.');
    }
}
