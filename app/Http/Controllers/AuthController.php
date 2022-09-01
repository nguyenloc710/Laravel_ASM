<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\CheckAdmin;
use App\Models\User;

// php artisan make:controller AuthController
class AuthController extends Controller
{
    // Hàm hiển thị giao diện login
    public function getLogin()
    {
        return view('client.login');
    }
    public function getRegister()
    {
        return view('client.register');
    }
    // Hàm nhận thông tin login gửi lên
    public function postResister(Request $request)
    {

        $request->validate([
            'name' => 'required|min:6|max:50',
            'email' => 'required|min:6|email'
        ]);
        // dd($request->repassword);
        $auth = new User();
        $auth->fill($request->all());
        $auth->password = bcrypt($request->password);
        if($request->password == $request->repassword){
            // dd($request->code::inRandomOrder()->limit(5)->get());
            // $auth->password = hash($request->password);
            $auth->save();
            return redirect()->route('auth.getLogin');
        }
        return view('client.register');
    }
    public function postLogin(LoginRequest $request)
    {
        // Lấy dữ liệu email, password người dùng gửi lên
        $email = $request->email;
        $password = $request->password;
        // $email = $request->input('email');
        // $data = $request->except('_token');

        // Kiểm tra thông tin đăng nhập của người dùng
        if (Auth::attempt([
            'email' => $email, // trường thông tin email trong DB => giá trị
            'password' => $password // trường thông tin password trong DB => giá trị
        ])) 
        {
            // Nếu kết quả trả về true thì điều hướng vào trong
            return redirect()->route('product.list');
        } else {
            // Nếu không khớp bản ghi nào trong DB thì quay về
            return redirect()->route('auth.getLogin');
        }
    }

    public function logout(Request $request)
    {
        // xoá session user đã đăng nhập
        Auth::logout();
        // 2 câu lệnh bên dưới có ở laravel 8 và 9
        // Huỷ toàn bộ session đi
        $request->session()->invalidate();
        // Tạo token mới
        $request->session()->regenerateToken();
        // Quay về màn login
        return redirect()->route('auth.getLogin');
    }
}
