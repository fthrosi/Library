<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginControllerUser extends Controller
{
    public function login()
    {
        if(Auth::check()){
            return redirect('/user/dashboard');
        }else{
            return view('user.login.loginUser');
        }
    }
    public function actionLogin(Request $request)
    {
       $data =[
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
       ];
        if(Auth::attempt($data)){
            $user = Auth::user();

            if($user->active == 1){
                Session::flash('message','Berhasil login'); 
                return redirect('/user/dashboard');
            }else{
                Auth::logout();
                Session::flash('error','Akun anda belum diverivikasi. Silahkan cek email anda untuk verifikasi akun.');
                return redirect('loginUser');
            }
        }else{
            Session::flash('error','Email atau password salah');
            return redirect('loginUser');
        }
    }
    public function actionLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
