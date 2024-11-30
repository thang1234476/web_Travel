<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
session_start();

class AccountController extends Controller
{
    public function index()
    {
        $data = User::select('id', 'name', 'email', 'phone', 'is_admin')->get();
        return view('admin.list_taikhoan', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'TenTK' => 'max:255',
            'Email' => 'max:255',
            'Pass' => 'max:255',
        ]);

        // Tìm và cập nhật dữ liệu
        $taikhoan = User::findOrFail($id);
        $taikhoan->name = $request->input('TenTK');
        $taikhoan->email = $request->input('Email');
        if ($request->filled('Pass')) {
            $taikhoan->password = bcrypt($request->input('Pass'));
        }
        $taikhoan->save();

        return redirect()->route('list_taikhoan')->with('success', 'Cập nhật thành công!');
    }


    public function edit($id)
    {
        $taikhoan = User::findOrFail($id);
        return view('admin.edit_taikhoan', compact('taikhoan'));
    }

    public function delete_account($id)
    {
        $taikhoan = User::findOrFail($id);
        $taikhoan->delete();
        return redirect()->route('list_taikhoan')->with('success', 'Tài Khoản đã được xóa thành công!');
    }
}
