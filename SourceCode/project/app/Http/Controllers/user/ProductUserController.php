<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\ProductModel;
use App\Models\admin\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductUserController extends Controller
{
    //
    public function getDetail($id){
        $data['item'] = ProductModel::find($id);
        $data['categoryproduct_name'] = DB::table('category')->join('product','category.cate_id','=','product.cate_id')->where('product.product_id', $id)->first();
        
        $cateID = ProductModel::where('product_id',$id)->first()->cate_id;
        $data['categoryproduct_same_list'] = ProductModel::where('cate_id',$cateID)->take(8)->get();
        //dd($cateID, $data);
        return view('user.Product.detail', $data);
    }

    public function getCategoryProduct($id){
        $data['categoryproduct_list'] = ProductModel::where('cate_id',$id)->orderBy('product_id','desc')->paginate(8);
        $data['total_categoryproduct'] = ProductModel::where('cate_id',$id)->get();
        $data['categoryproduct_name'] = CategoryModel::find($id);
        return view('user.Product.category_product', $data);
    }

    public function getFilterCategoryProduct($id, $name, $price){
        if($price == 5000000){
            $data['categoryproduct_list'] = ProductModel::where('cate_id',$id)->where('price_new', '<=', 5000000)->orderBy('product_id','desc')->paginate(8);
            $data['total_categoryproduct'] = ProductModel::where('cate_id',$id)->where('price_new', '<=', 5000000)->get();
        }
        else if($price == 10000000){
            $data['categoryproduct_list'] = ProductModel::where('cate_id',$id)->where('price_new', '>', 5000000)->where('price_new', '<=', 10000000)->orderBy('product_id','desc')->paginate(8);
            $data['total_categoryproduct'] = ProductModel::where('cate_id',$id)->where('price_new', '>', 5000000)->where('price_new', '<=', 10000000)->get();
        }
        else{
            $data['categoryproduct_list'] = ProductModel::where('cate_id',$id)->where('price_new', '>', 10000000)->where('price_new', '<=', 1000000000)->orderBy('product_id','desc')->paginate(8);
            $data['total_categoryproduct'] = ProductModel::where('cate_id',$id)->where('price_new', '>', 10000000)->where('price_new', '<=', 1000000000)->get();
        }
        $data['categoryproduct_name'] = CategoryModel::find($id);
        return view('user.Product.category_product', $data);
    }

    public function getSearch(Request $request){
        $result = $request->keyword;
        $data['keyword'] = $result;
        $result = str_replace(' ','%',$result);
        $data['search_product_list'] = ProductModel::where('product_name','like','%'.$result.'%')->get();
        return view('user.Search.search_product', $data);
    }
}
