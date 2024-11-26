<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index($view = 'user.profile')
    {
        $user = auth()->user();
        return view($view, compact('user'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'TenTK' => 'required|string|max:255',
            'Email' => 'required|string|email|max:255',
            'Gender' => 'required|in:nam,nu', 
            'phone' => 'required|regex:/^[0-9]{10,15}$/',
            'adress' => 'required|string|max:255',
        ]);

        // Tìm và cập nhật dữ liệu
        $taikhoan = User::findOrFail($id);
        $taikhoan->name = $request->input('TenTK');
        $taikhoan->email = $request->input('Email');
        $taikhoan->gender = $request->input('Gender');
        $taikhoan->phone = $request->input('phone');
        $taikhoan->adress = $request->input('adress');
        $taikhoan->save();

        return redirect()->route('user.profile')->with('success', 'Cập nhật thành công!');
    }

    public function edit($id)
    {
        $taikhoan = User::findOrFail($id);
        return view('user.profileEdit', compact('taikhoan'));
    }
   

}
