<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin() {
        return view('layout.login') ;
    }

    public function Login(Request $request) {
        $username = $request->inputUsername ;
        $pasword = $request->inputPassword ;

        if($username == 'admin' && $pasword == '123456') {
            $request->session()->push('login',true) ;

            return redirect()->route('show.blog') ;
        }

        $message = "tên đăng nhập không thành công, hoặc mật khẩu người dùng không đúng" ;

        $request->session()->flash('login-fail',$message) ;
        return view('layout.login') ;
    }

    public function showBlog() {
        return view('show.blog') ;
    }
}
