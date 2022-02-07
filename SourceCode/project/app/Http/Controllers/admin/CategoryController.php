<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\CategoryModel ;
use WindowsAzure\Common\Internal\Atom\Category;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\EditCateRequest;

class CategoryController extends Controller
{
    //
    public function getCate(){
        $data['catelist'] = CategoryModel::all();

        return view('admin.Category.cate-list', $data);
    }

    public function postCate(AddCateRequest $request){
        $category = new CategoryModel;
        $category->cate_name = $request->name;
        $category->status = 1;
        $category->save();
        return back()->with('success', 'Thêm danh mục mới thành công!');
    }

    public function getEditCate($id){
        $data['cate'] = CategoryModel::find($id);
        return view('admin.Category.editCate', $data);
    }

    public function postEditCate(EditCateRequest $request, $id){
        $category = CategoryModel::find($id);
        $category->cate_name = $request->name;
        $category->status = $request->status;
        $category->save();
        return redirect()->intended('admin/category')->with('success', 'Sửa danh mục thành công!');
    }
    
    public function getDeleteCate($id){
        CategoryModel::destroy($id);
        return back()->with('success', 'Xóa danh mục thành công!');
    }
}
