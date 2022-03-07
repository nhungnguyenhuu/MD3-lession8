<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request["email"];
        $password = $request["password"];
        if($username=='admin' && $password =='123'){
            $request->session()->push('login', true);
            return redirect()->route('index');
        }
        $message = "Dang nhap khong thanh cong. Ten nguoi dung hoac mat khau khong dung.";
        $request->session()->flash('login-fail', $message);
        return view('login');
    }
}
