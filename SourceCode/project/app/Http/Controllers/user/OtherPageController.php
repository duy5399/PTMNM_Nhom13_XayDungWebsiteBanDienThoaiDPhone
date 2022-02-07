<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\BlogcateModel;

class OtherPageController extends Controller
{
    //
    public function getIntroduce(){
        return view('user.Otherpage.introduce');
    }

    public function getContact(){
        return view('user.Otherpage.contact');
    }

    public function getBlog(){
        $data['blogcate_list'] = BlogcateModel::where('status','1')->orderBy('blogcate_id', 'asc')->get();
        return view('user.Otherpage.blog', $data);
    }
}
