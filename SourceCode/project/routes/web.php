<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('user.Home.home');
// });
//------------------------------------------------------------------------------------- Xử lý user -------------------------------------------------------------------------------//
Route::get('/', 'App\Http\Controllers\user\HomeController@getHome');

Route::get('login', 'App\Http\Controllers\user\UserController@getLogin')->middleware('CheckLogedIn');

Route::post('login', 'App\Http\Controllers\user\UserController@postLogin');

Route::get('register', 'App\Http\Controllers\user\UserController@getRegister')->middleware('CheckLogedIn');

Route::post('register', 'App\Http\Controllers\user\UserController@postRegister');

Route::get('logout', 'App\Http\Controllers\user\UserController@getLogout');

Route::get('info-account', 'App\Http\Controllers\user\UserController@getInfoAccount')->middleware('CheckLogedOut');

Route::get('detail/{id}', 'App\Http\Controllers\user\ProductUserController@getDetail');

Route::get('category-product/{id}/{name}', 'App\Http\Controllers\user\ProductUserController@getCategoryProduct');

Route::get('category-product/{id}/{name}/{price}', 'App\Http\Controllers\user\ProductUserController@getFilterCategoryProduct');

Route::get('search', 'App\Http\Controllers\user\ProductUserController@getSearch');

Route::get('introduce', 'App\Http\Controllers\user\OtherPageController@getIntroduce');

Route::get('contact', 'App\Http\Controllers\user\OtherPageController@getContact');

Route::get('blog', 'App\Http\Controllers\user\OtherPageController@getBlog');

Route::get('dd', 'App\Http\Controllers\user\CartController@dd');

Route::group(['prefix'=>'cart'], function(){
    Route::get('add/{id}', 'App\Http\Controllers\user\CartController@getAddCart');

    Route::get('show', 'App\Http\Controllers\user\CartController@getShowCart');

    Route::get('delete/{rowId}', 'App\Http\Controllers\user\CartController@getDeleteCart');

    Route::get('update', 'App\Http\Controllers\user\CartController@getUpdateCart');

    Route::get('checkout', 'App\Http\Controllers\user\CartController@getCheckout')->middleware('CheckLogedOut');

    Route::post('checkout', 'App\Http\Controllers\user\CartController@postCheckout');

    Route::get('care-customer', 'App\Http\Controllers\user\CartController@getCareCustomer')->middleware('CheckLogedOut');
});
//------------------------------------------------------------------------------------- Xử lý admin -----------------------------------------------------------------------------//
Route::group(['namespace'=>'App\Http\Controllers\admin'], function(){
    Route::group(['prefix'=>'admin'], function(){
        Route::get('login', 'AdminController@getLogin')->middleware('CheckAdminLogedIn');
        Route::post('login', 'AdminController@postLogin');
        Route::get('logout', 'HomeController@getLogout');

        Route::get('home', 'HomeController@getHome')->middleware('CheckAdminLogedOut');
//-----------------Route Category
        Route::group(['prefix'=>'category'], function(){
            Route::get('/', 'CategoryController@getCate')->middleware('CheckAdminLogedOut');
            Route::post('/', 'CategoryController@postCate');

            Route::get('edit/{id}', 'CategoryController@getEditCate')->middleware('CheckAdminLogedOut');
            Route::post('edit/{id}', 'CategoryController@postEditCate');

            Route::get('delete/{id}', 'CategoryController@getDeleteCate')->middleware('CheckAdminLogedOut');
        });
//-----------------Route Product
        Route::group(['prefix'=>'product'], function(){
            Route::get('/', 'ProductController@getProduct')->middleware('CheckAdminLogedOut');
            Route::post('/', 'ProductController@postProduct');

            Route::get('add', 'ProductController@getAddProduct')->middleware('CheckAdminLogedOut');
            Route::post('add', 'ProductController@postAddProduct');

            Route::get('edit/{id}', 'ProductController@getEditProduct')->middleware('CheckAdminLogedOut');
            Route::post('edit/{id}', 'ProductController@postEditProduct');

            Route::get('delete/{id}', 'ProductController@getDeleteProduct')->middleware('CheckAdminLogedOut');
        });
//-----------------Route User
        Route::group(['prefix'=>'user'], function(){
            Route::get('/', 'UserController@getUser')->middleware('CheckAdminLogedOut');
            Route::post('/', 'UserController@postUser');

            Route::get('edit/{id}', 'UserController@getEditUser')->middleware('CheckAdminLogedOut');
            Route::post('edit/{id}', 'UserController@postEditUser');

            Route::get('delete/{id}', 'UserController@getDeleteUser')->middleware('CheckAdminLogedOut');
        });
//-----------------Route Slider
        Route::group(['prefix'=>'slider'], function(){
            Route::get('/', 'SliderController@getSlider')->middleware('CheckAdminLogedOut');
            Route::post('/', 'SliderController@postSlider');

            Route::get('add', 'SliderController@getAddSlider')->middleware('CheckAdminLogedOut');
            Route::post('add', 'SliderController@postAddSlider');

            Route::get('edit/{id}', 'SliderController@getEditSlider')->middleware('CheckAdminLogedOut');
            Route::post('edit/{id}', 'SliderController@postEditSlider');

            Route::get('delete/{id}', 'SliderController@getDeleteSlider')->middleware('CheckAdminLogedOut');
        });      
//-----------------Route Bill
        Route::group(['prefix'=>'bill'], function(){
            Route::get('/', 'BillController@getBill')->middleware('CheckAdminLogedOut');
            Route::post('/', 'BillController@postBill');

            Route::get('update', 'BillController@getUpdateBillStatus');

            Route::get('detail/{id}', 'BillController@getBillDetail')->middleware('CheckAdminLogedOut');
        });     
 //-----------------Route New
        Route::group(['prefix'=>'new'], function(){
            Route::get('/', 'NewController@getNew')->middleware('CheckAdminLogedOut');
            Route::post('/', 'NewController@postNew');
        });      
    });
});


Route::group(['namespace'=>'App\Http\Controllers\user'], function(){
    Route::group(['prefix'=>'home'], function(){
        Route::get('/', 'HomeController@getHome');
    });
});
