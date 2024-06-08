<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('nip', 'password');

        $validate = Validator::make($credentials, [
            'nip' => 'required',
            'password' => 'required'
        ]);

        if ($validate->fails()) {
            Session::flash('error', $validate->errors());
            return back();
        }

        // Mencoba untuk melakukan login
        if (Auth::guard('web')->attempt($credentials)) {
            $petugas = auth()->guard('web')->user();

            // Memeriksa apakah pengguna aktif
            if (auth()->user()->type == 'Petugas') {
                return redirect()->route('home');
            } else {
                return redirect()->route('home');
            }
            // Mengalihkan pengguna setelah login berhasil
        }

        // Mengalihkan kembali dengan pesan kesalahan jika percobaan login gagal
        return redirect()->back()->with('error', 'NIP atau password salah');

    }
    protected function redirectTo()
    {
        session()->flash('success', 'You are logged in!');
        return $this->redirectTo;
    }
}
