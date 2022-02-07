<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewController extends Controller
{
    //
    public function getNew(){
        //$data['sliderlist'] = SliderModel::all();
        return view('admin.New.new-list');
    }
}
