<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\admin\CategoryModel;
use App\Models\admin\ProductModel;
use Illuminate\Pagination\Paginator;
use Gloudemans\Shoppingcart\Facades\Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $data['category_list'] = CategoryModel::where('status','1')->orderBy('cate_name', 'asc')->get();
        $data['selling_products_list'] = ProductModel::where('selling_products','Bán chạy')->orderBy('qty_product','desc')->take(6)->get();
        //$data['list_cart'] = Cart::content();
        view()->share($data);
    }
}
