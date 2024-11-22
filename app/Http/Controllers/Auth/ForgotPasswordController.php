<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Password;
class ForgotPasswordController extends Controller
{
    //
    public function showLinkRequestForm()
    {
        return view('auth.forgot');
    }
    // public function sendResetLinkEmail(Request $request) {
    //     $validator = Validator::make($request->all(), [
    //         'email' => 'required|email|exists:users,email',
    //     ]);
    //     if ($validator->fails()) {
    //         return redirect()->back()
    //             ->withErrors($validator)
    //             ->withInput();
    //     }
    //     $response = Password::sendResetLink($request->only('email'));

    //     return $response == Password::RESET_LINK_SENT
    //         ? back()->with('status', trans($response))
    //         : back()->withErrors(['email' => trans($response)]);
    // }
    public function sendResetLinkEmail(Request $request)
    {
        $email = $request->input('email');
        $request->session()->put('reset_email', $email);
        // Xác thực email đầu vào
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
        ]);

        // Xử lý khi xác thực thất bại
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // Thực hiện gửi liên kết đặt lại mật khẩu
            $response = Password::sendResetLink($request->only('email'));

            // Kiểm tra phản hồi và trả về thông báo phù hợp
            return $response === Password::RESET_LINK_SENT
                ? back()->with('status', trans($response))
                : back()->withErrors(['email' => trans($response)]);

        } catch (\Exception $e) {
            // Xử lý các lỗi ngoài dự kiến
            return back()->withErrors(['email' => 'Có lỗi xảy ra khi gửi liên kết đặt lại mật khẩu. Vui lòng thử lại sau.']);
        }
    }

    public function showResetForm($token = null,Request $request)
    {
        $email = $request->session()->get('reset_email');

        return view('auth.reset')->with(['token' => $token,'email'=>$email]);
    }
    public function reset(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:6|confirmed',
            'token' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        // Đặt lại mật khẩu
        $response = Password::reset($request->only('email', 'password', 'password_confirmation', 'token'), function ($user, $password) {
            $user->password = Hash::make($password);
            $user->save();
        });

        return $response == Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', trans($response))
            : back()->withErrors(['email' => trans($response)]);
    }

}
