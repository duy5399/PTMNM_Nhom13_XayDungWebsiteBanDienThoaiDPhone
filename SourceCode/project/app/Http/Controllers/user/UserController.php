<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\admin\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function getLogin(){
        return view('user.User.login');
    }

    public function postLogin(Request $request){
        $arr = ['username' => $request->username, 'password' => $request->password];
        if(Auth::attempt($arr)){
            return redirect()->intended('/');
        }
        else{
            return back()->withInput()->with('error', 'Tài khoản hoặc mật khẩu chưa đúng');
        }
        // $username = $request->username;
        // $password = $request->password;
        
        // $result = DB::table('users')->where('username',$username)->where('password',$password)->count();
        // if($result > 0){
        //     dd('thanh cong');
        // }
        // else{
        //     dd('that bai');
        // }
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->intended('/');
    }

    public function getRegister(){
        return view('user.User.register');
    }

    public function postRegister(Request $request){
        $user = new UserModel();
        $user->fullname = $request->fullname;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->is_active = '1';
        $user->status = '1';
        $user->save();
        return back()->with('success', 'Đăng ký tài khoản thành công!');
    }

    public function getInfoAccount(){
        $data['user'] = DB::table('users')->find(Auth::user()->id);
        //dd($data);
        return view('user.User.info-account', $data);
    }
}
