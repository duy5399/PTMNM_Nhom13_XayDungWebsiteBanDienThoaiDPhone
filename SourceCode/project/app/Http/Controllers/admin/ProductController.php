<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\ProductModel;
use App\Models\admin\CategoryModel;
use App\Http\Requests\AddProductRequest;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function getProduct(){
        $data['productlist'] = ProductModel::join('category','product.cate_id','=','category.cate_id')->orderBy('product_id','desc')->paginate(6);
        return view('admin.Product.product-list', $data);
    }

    public function postProduct(){
        
    }

    public function getAddProduct(){
        $data['catelist'] = CategoryModel::all();
        return view('admin.Product.addProduct', $data);
    }

    public function postAddProduct(AddProductRequest $request){
        $filename = $request->txtproduct_thumb->getClientOriginalName();
        $thumb_1 = $request->txtlist_thumb_1->getClientOriginalName();
        $thumb_2 = $request->txtlist_thumb_2->getClientOriginalName();
        $thumb_3 = $request->txtlist_thumb_3->getClientOriginalName();
        $thumb_4 = $request->txtlist_thumb_4->getClientOriginalName();
        $thumb_5 = $request->txtlist_thumb_5->getClientOriginalName();
        $product = new ProductModel;
        $product->product_name = $request->txtproduct_name;
        $product->price_new = $request->txtprice_new;
        $product->price_old = $request->txtprice_old;
        $product->product_desc = $request->txtproduct_desc;
        $product->product_thumb = $filename;
        $product->list_thumb_1 = $thumb_1;
        $product->list_thumb_2 = $thumb_2;
        $product->list_thumb_3 = $thumb_3;
        $product->list_thumb_4 = $thumb_4;
        $product->list_thumb_5 = $thumb_5;
        $product->product_content = $request->txtproduct_content;
        $product->selling_products = $request->selling_products;
        $product->featured_products = $request->featured_products;
        $product->cate_id = $request->cate;
        $product->save();
        $request->txtproduct_thumb->storeAs('avatar',$filename);
        $request->txtlist_thumb_1->storeAs('avatar',$thumb_1);
        $request->txtlist_thumb_2->storeAs('avatar',$thumb_2);
        $request->txtlist_thumb_3->storeAs('avatar',$thumb_3);
        $request->txtlist_thumb_4->storeAs('avatar',$thumb_4);
        $request->txtlist_thumb_5->storeAs('avatar',$thumb_5);
        return redirect()->intended('admin/product')->with('success', 'Thêm sản phẩm mới thành công!');
    }

    public function getEditProduct($id){
        $data['product'] = ProductModel::find($id);
        $data['catelist'] = CategoryModel::all();
        return view('admin.Product.editProduct', $data);
    }

    public function postEditProduct(Request $request, $id){
        $product = new ProductModel;
        $arr['cate_id'] = $request->cate;
        $arr['product_name'] = $request->txtproduct_name;
        $arr['price_new'] = $request->txtprice_new;
        $arr['price_old'] = $request->txtprice_old;
        $arr['product_desc'] = $request->txtproduct_desc;
        $arr['product_content'] = $request->txtproduct_content;
        $arr['status'] = $request->status;
        $arr['qty_product'] = $request->txtqty_product;
        $arr['selling_products'] = $request->selling_products;
        $arr['featured_products'] = $request->featured_products;
        if($request->hasFile('txtproduct_thumb')){
            $filename = $request->txtproduct_thumb->getClientOriginalName();
            $arr['product_thumb'] = $filename;
            $request->txtproduct_thumb->storeAs('avatar',$filename);
        }
        $product::where('product_id',$id)->update($arr);
        return redirect()->intended('admin/product')->with('success', 'Sửa thông tin sản phẩm thành công!');
    }
    
    public function getDeleteProduct($id){
        ProductModel::destroy($id);
        return back()->with('success', 'Xóa sản phẩm thành công!');
    }
}
