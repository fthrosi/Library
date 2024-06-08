<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


class RegisterSiswaController extends Controller
{

    public function registerSiswa(){
        return view('siswa.login.registerSiswa');
    }
    public function registerSiswaAction(Request $request)
    {   
        
       $this->validate($request, [
            'nama' => 'required|max:60',
            'email' => 'required|email:rfc,dns|unique:siswa',
            'no_telp' => 'required|regex:/^08[0-9]{9,11}$/',
            'password' => 'required|min:8',
            'alamat' => 'required|max:255',
        ],[
           'nama.required' => 'Nama tidak boleh kosong',
           'nama.max' => 'Nama tidak boleh lebih dari 60 karakter',
           'email.required' => 'Email tidak boleh Kosong',
           'email.unique' => 'Email sudah terdaftar',
           'no_telp.required' => 'Nomor telepon tidak boleh kosong',
           'no_telp.regex' => 'Nomor Telepon harus berawal dari 08 dan sebanyak 10 digit',
           'password.required' => 'Password tidak boleh kosong',
           'password.min' => 'Password minimal 8 digit',
           'alamat.required' => 'alamat tidak boleh kosong',
           'alamat.max' => 'alamat melebihi karakter maksimal'
        ]);
        
            $str = Str::random(100);
            $foto = 'default_profile.jpg';
            $siswa = Siswa::create([
                'name' => $request->input('nama'),
                'email' => $request->input('email'),
                'no_telp' => $request->input('no_telp'),
                'password' => bcrypt($request->input('password')),
                'alamat' => $request->input('alamat'),
                'verify_key' => $str,
                'foto' => $foto,
            ]); 
            $details = [
                'nama' => $siswa->nama,
                'website' => 'NK-Library',
                'datetime' => now()->format('Y-m-d H:i:s'),
                'url' => request()->getHttpHost() . '/register/verify/' . $str
            ];

            Mail::to($siswa->email)->send(new SendMail($details));
            return redirect('siswa/registerSiswa')->with('success', 'Registrasi berhasil. Silakan cek email untuk verifikasi.');
    }
    
    public function verify($verify_key){
        $keyCheck = Siswa::select('verify_key')->where('verify_key', $verify_key)->exists();
        if($keyCheck){
            $siswa = Siswa::where('verify_key', $verify_key)->update([
                'active'=> 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ]);
            return "Verifikasi berhasil. Akun anda sudah aktif.";
        }else{
            return "Keys tidak valid.";
        }
    }
}   


