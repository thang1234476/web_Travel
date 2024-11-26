<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class RegisterController extends Controller
{
    //
    public function showRegistrationForm()
    {
        return view('auth.login');
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,',
            'phone' => 'required|string|max:15',
            'password' => 'required|string|min:6|confirmed',
            'adress' => 'required|string|max:255',
            'gender' => 'required|in:nam,nu'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone, // Lưu số điện thoại
            'password' => Hash::make($request->password),
            'adress' => $request->adress,
            'gender' => $request->gender
        ]);
        auth()->login($user);
        return redirect()->route('login');
    }
}
