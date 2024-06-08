<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;
use App\Mail\MailSend;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class RegisterControllerUser extends Controller
{
    public function register()
    {
        return view('user.login.registerUser');
    }
    
    public function actionRegister(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        if($user){
            Session::flash('error','Email sudah terdaftar');
            return redirect('register');
        }else{
            $str = Str::random(100);
        User::create([
            'email'=> $request->email,
            'first_name'=> $request->first_name,
            'last_name'=> $request->last_name,
            'password'=> Hash::make($request->password),
            'verify_key' => $str,
        ]);
        $details = [
            'first_name'=> $request->first_name,
            'last_name'=> $request->last_name,
            'website'=>'KnowledgeHub',
            'datetime'=>date('Y-m-d H:i:s'),
            'url' => request()->getHttpHost() . '/register/verify/'. $str
        ];
        Mail::to($request->email)->send(new MailSend($details));
        Session::flash('message','Link verivikasi telah dikirim ke email anda. Silahkan cek email anda untuk mengaktifkan akun.');
        return redirect('register');
        }
    }

    public function verify($verify_key)
    {
        $keyCheck = User::select('verify_key')
            ->where('verify_key',$verify_key)
            ->exists();

        if($keyCheck){
            $user = User::where('verify_key',$verify_key)
            ->update([
                'active' => 1,
                'email_verified_at'=> date('Y-m-d H:i:s'),
            ]);
            return "Verifikasi berhasil.Akun anda sudah aktif.";
        }else{
            return "Keys tidak valid";
        }
    }
}
