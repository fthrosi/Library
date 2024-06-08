<?php

namespace App\Http\Controllers\petugas;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class SiswaPetugasController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('petugas.siswa.siswa', compact('siswa'));
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('petugas.siswa.editSiswa', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email|unique:siswa,email,' . $id,
                'no_telp' => 'nullable|string',
                'alamat' => 'required|string',
                'foto' => 'nullable|image|max:2048',
            ]);
    
            $siswa = Siswa::findOrFail($id);
    
            if ($request->hasFile('foto')) {
                // Hapus foto lama jika ada
                if ($siswa->foto) {
                    $oldFotoPath = public_path('foto_siswa') . '/' . $siswa->foto;
                    if (file_exists($oldFotoPath)) {
                        unlink($oldFotoPath);
                    }
                }
    
                $foto_profile = $request->file('foto')->getClientOriginalName();
                $request->file('foto')->move(public_path('foto_siswa'), $foto_profile);
    
                $siswa->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'no_telp' => $request->no_telp,
                    'alamat' => $request->alamat,
                    'foto' => $foto_profile,
                    // Update bidang lainnya sesuai kebutuhan
                ]);
            } else {
                $siswa->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'no_telp' => $request->no_telp,
                    'alamat' => $request->alamat,
                    // Update bidang lainnya sesuai kebutuhan
                ]);
            }
    
            // Log success
            Log::info('Update success: ' . $id);
    
            return redirect()->route('siswa.siswa', ['id' => $id])->with('success', 'Data siswa berhasil diperbarui.');
        } catch (\Exception $e) {
            // Log error
            Log::error('Update error: ' . $e->getMessage());
    
            return back()->with('error', 'Terjadi kesalahan saat memperbarui data.');
        }
    }


    public function destroy($id)
    {
        Siswa::find($id)->delete();
        return back()->with('success', 'Berhasil Menghapus Siswa');
    }

}
