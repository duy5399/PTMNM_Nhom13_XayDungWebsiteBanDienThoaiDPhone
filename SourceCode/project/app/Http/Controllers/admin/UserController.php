<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
class UserController extends Controller
{
    //
    public function getUser(){
        $data['userlist'] = DB::table('users')->get();
        return view('admin.User.user-list', $data);
    }

    public function getEditUser($id){
        $data['user'] = DB::table('users')->find($id);
        //dd($data);
        return view('admin.User.editUser', $data);
    }

    public function postEditUser(Request $request, $id){
        $arr['fullname'] = $request->fullname;
        $arr['gender'] = $request->gender;
        $arr['is_active'] = $request->is_active;
        DB::table('users')->where('id',$id)->update($arr);
        return redirect('admin/user')->with('success', 'Sửa thông tin khách hàng thành công!');
    }

    public function getDeleteUser($id){
        DB::table('users')->where('id',$id)->delete();
        return back()->with('success', 'Xóa khách hàng thành công!');
    }
}
