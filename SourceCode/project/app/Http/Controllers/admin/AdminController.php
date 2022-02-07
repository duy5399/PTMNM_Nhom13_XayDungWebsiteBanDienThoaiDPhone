<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    //
    public function getLogin(){
        return view('admin.Admin.login_admin');
    }

    public function postLogin(Request $request){
        $arr = ['username' => $request->username, 'password' => $request->password];
        if(Auth::guard('admin')->attempt($arr)){
            return redirect()->intended('admin/home');
        }
        else{
            return back()->withInput()->with('error', 'Tài khoản hoặc mật khẩu chưa đúng');
        }
        // $username = $request->username;
        // $password = $request->password;
        
        // $result = DB::table('admin')->where('username',$username)->where('password',$password)->count();
        // if($result > 0){
        //     dd('thanh cong');
        // }
        // else{
        //     dd('that bai');
        // }
    }
}
