<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showForm(){
        return view('auth.login');
    }
    public function login(Request $request) {
        $email = $request->email;
        $password = $request->password;
        $status = Auth::attempt(['email' => $email, 'password' => $password]);
        if($status) {
            $user = Auth::user();
            $urlRedirect="/";
            if($user->is_admin) {
                $urlRedirect = "/admin";
            }
            return redirect($urlRedirect);
        }
        return back()->with('msg', 'Email hoặc mật khẩu không chính xác')->withInput();
    }
}
