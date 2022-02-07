<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\ProductModel;
use App\Models\admin\CategoryModel;
use App\Models\admin\SliderModel;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function getHome(){
        $data['featured_products_list'] = ProductModel::where('featured_products','Nổi bật')->orderBy('product_id','desc')->take(8)->get();
        $data['slider_list'] = SliderModel::where('status','1')->orderBy('slider_id','desc')->take(3)->get();
        $data['iphone_list'] = ProductModel::join('category','category.cate_id','=','product.cate_id')->where('category.cate_name', "iPhone")->inRandomOrder()->limit(8)->get();
        $data['xiaomi_list'] = ProductModel::join('category','category.cate_id','=','product.cate_id')->where('category.cate_name', "Xiaomi")->inRandomOrder()->limit(8)->get();
        $data['huawei_list'] = ProductModel::join('category','category.cate_id','=','product.cate_id')->where('category.cate_name', "Huawei")->inRandomOrder()->limit(8)->get();
        $data['samsung_list'] = ProductModel::join('category','category.cate_id','=','product.cate_id')->where('category.cate_name', "Samsung")->inRandomOrder()->limit(8)->get();
        $data['oppo_list'] = ProductModel::join('category','category.cate_id','=','product.cate_id')->where('category.cate_name', "Oppo")->inRandomOrder()->limit(8)->get();
        $data['sony_list'] = ProductModel::join('category','category.cate_id','=','product.cate_id')->where('category.cate_name', "Sony")->inRandomOrder()->limit(8)->get();
        //dd($data);
        return view('user.Home.home', $data);
    }
}
