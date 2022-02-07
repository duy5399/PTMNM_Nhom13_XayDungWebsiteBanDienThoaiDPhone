<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\BillModel;
use App\Models\admin\BillDetailModel;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\admin\ProductModel;
use Brick\Math\BigInteger;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
  
class CartController extends Controller
{
    //
    public function getAddCart($id){
        $product = ProductModel::where('product_id',$id)->first();
        Cart::add(['id' => $id, 'name' => $product->product_name, 'qty' => 1, 'price' => $product->price_new, 'options' => ['img' => $product->product_thumb]]);
        sleep(1);
        return redirect('cart/show');
    }

    public function getShowCart(){
        $data['list_cart'] = Cart::content();
        $data['total'] = Cart::total();
        return view('user.Cart.show', $data);
    }

    public function dd(){
        $qty_product = ProductModel::find('8');
        $total_categoryproduct = ProductModel::where('cate_id',2)->where('price_new', '<', 5000000)->get();
        dd($qty_product,$total_categoryproduct);
    }

    public function getDeleteCart($rowId){
        if($rowId=='all'){
            Cart::destroy();
        }
        else{
            Cart::remove($rowId);
        }
        return back();
    }

    public function getUpdateCart(Request $request){
        Cart::update($request->rowId, $request->qty);
    }

    public function getCheckout(){
        $data['user'] = DB::table('users')->find(Auth::user()->id);
        $data['list_cart'] = Cart::content();
        $data['total'] = Cart::total();
        return view('user.Checkout.checkout', $data);
    }

    public function postCheckout(Request $request){
        $data['info'] = $request->all();
        //dd($data);
        $email = $request->email;
        $data['cart'] = Cart::content();
        $data['total'] = Cart::total();
        Mail::send('user.Checkout.email', $data, function($message) use ($email){
            $message->from('taejisu001@gmail.com', 'DphoneStore');

            $message->to($email, $email);

            $message->cc('duy5399@gmail.com', 'Duy Le Sy');

            $message->subject('Xác nhận hóa đơn mua hàng DphoneStore');
        });

        $bill = new BillModel();
        $bill->user_id = $request->user_id;
        $bill->fullname = $request->fullname;
        $bill->username = $request->username;
        $bill->email = $request->email;
        $bill->phone =$request->phone;
        $bill->address = $request->address;
        $bill->total = Cart::total();
        $bill->note = $request->note;
        $bill->save();

        $billid = $bill->bill_id;
        foreach(Cart::content() as $item){
            $billdetail = new BillDetailModel();
            $billdetail->bill_id = $billid;
            $billdetail->product_id = $item->id;
            $billdetail->product_name = $item->name;
            $billdetail->product_thumb = $item->options->img;
            $billdetail->price_new = $item->price;
            $billdetail->qty = $item->qty;
            $billdetail->sub_total = $item->price*$item->qty;
            $billdetail->status = '0';
            $billdetail->save();

            $product = ProductModel::find($item->id);
            $product->qty_product = $product->qty_product-$item->qty;
            $product->save();
        }

        Cart::destroy();
        return redirect('cart/care-customer');
    }

    public function getCareCustomer(){
        return view('user.Checkout.care_customer');
    }
}
