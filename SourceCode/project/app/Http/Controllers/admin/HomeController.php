<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function getHome(){
        return view('admin.Home.home_admin');
    }

    public function getLogout(){
        Auth::guard('admin')->logout();
        return redirect()->intended('admin/login');
    }
}
