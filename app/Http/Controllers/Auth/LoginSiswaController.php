<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Rak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginSiswaController extends Controller
{

    public function loginSiswa()
    {
        if (Auth::guard('siswa')->check()) {

        return redirect('siswa/dashboard');
        } else {
            return view('siswa.login.loginSiswa');
        }
    }

    public function loginAction(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $validate = Validator::make($credentials, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validate->fails()) {
            Session::flash('error', $validate->errors());
            return back();
        }

        if (Auth::guard('siswa')->attempt($credentials)) {
            $siswa = auth()->guard('siswa')->user();
            if ($siswa->active == 0) {
                auth()->guard('siswa')->logout();
                return redirect()->back()->with('error', 'Akun anda belum diverivikasi. Silahkan cek email anda untuk verifikasi akun.');
            }
            return redirect('siswa/dashboard');
        }

        return redirect()->back()->with('error', 'email atau password salah');
    }
    public function actionLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
