<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\SliderModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\AddSliderRequest;
use Illuminate\Support\Facades\Auth;

class SliderController extends Controller
{
    //
    public function getSlider(){
        $data['sliderlist'] = SliderModel::all();
        return view('admin.Slider.slider-list', $data);
    }

    public function getEditSlider($id){
        $data['slider'] = SliderModel::find($id);
        //dd($data);
        return view('admin.Slider.editSlider', $data);
    }

    public function postEditSlider(Request $request, $id){
        $slider = new SliderModel();
        $arr['slider_name'] = $request->txtslider_name;
        if($request->hasFile('txtslider_img')){
            $filename = $request->txtslider_img->getClientOriginalName();
            $arr['slider_img'] = $filename;
            $request->txtslider_img->storeAs('slider',$filename);
        }
        $arr['status'] = $request->status;
        $slider::where('slider_id',$id)->update($arr);
        return redirect()->intended('admin/slider')->with('success', 'Sửa slider thành công!');
    }

    public function getAddSlider(){
        //$data['creator'] = Auth::user()->username;
        return view('admin.Slider.addSlider');
    }

    public function postAddSlider(AddSliderRequest $request){
        $filename = $request->txtslider_img->getClientOriginalName();
        $slider = new SliderModel();
        $slider->slider_name = $request->txtslider_name;
        $slider->slider_img = $filename;
        $slider->creator = Auth::user()->username;
        $slider->status = '1';
        $slider->save();
        $request->txtslider_img->storeAs('slider',$filename);
        return redirect()->intended('admin/slider')->with('success', 'Thêm mới slider thành công!');
    }

    public function getDeleteSlider($id){
        SliderModel::destroy($id);
        return back()->with('success', 'Xóa slider thành công!');
    }
}
