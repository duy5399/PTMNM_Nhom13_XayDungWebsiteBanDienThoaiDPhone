@extends('user.Layouts.master')
@section('content')

<script type="text/javascript">
    function updateCart(qty,rowId){
        $.get(
            "{{asset('cart/update')}}",    //url: đường dẫn ajax gửi request
            {qty:qty,rowId:rowId},        //đối tượng
            function(){
                location.reload();
            }        //phương thức
        );
    }
</script>
<div id="main-content-wp" class="cart-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="{{asset('/')}}" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="{{asset('cart/show')}}" title="">Giỏ hàng</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        @if (Cart::count() > 0)
            <div class="section" id="info-cart-wp">
                <div class="section-detail table-responsive">
                    <form method="post" action="">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Mã sản phẩm</td>
                                    <td>Ảnh sản phẩm</td>
                                    <td>Tên sản phẩm</td>
                                    <td>Giá sản phẩm</td>
                                    <td>Số lượng</td>
                                    <td>Thành tiền</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_cart as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>
                                            <a href="{{asset('detail/'.$item->id)}}" title="" class="thumb">
                                                <img src="{{asset('storage/app/avatar/'.$item->options->img)}}" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <span href="" title="" class="name-product">{{$item->name}}</span>
                                        </td>
                                        <td><span id="price_new">{{number_format($item->price,0,',','.')}} VNĐ</span></td>
                                        <td>
                                            <input type="number" min="1" max="<?php echo DB::table('product')->where('product_id', $item->id)->value('qty_product'); ?>" id="num_order" name="qty[<?php //echo $item['id']; ?>]" onchange="updateCart(this.value,'{{$item->rowId}}')" value="{{$item->qty}}" class="num-order" data-id="<?php //echo $item['id'] ?>">
                                        </td>
                                        <td><span id="sub-total-{{$item->id}}">{{number_format($item->price*$item->qty,0,',','.')}} VNĐ</span></td>
                                        <td>
                                            <a href="{{asset('cart/delete/'.$item->rowId)}}" onclick="return confirmAction_delete_cart()" title="Xóa sản phẩm" class="del-product"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <div class="clearfix">
                                            <p id="total-price" class="fl-right">Tổng giá: <span id="total-price-products">{{$total}} VNĐ</span></p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="7">
                                        <div class="clearfix">
                                            <div class="fl-right">
                                                <!-- <input type="submit" id="update-cart" name="btn_update_cart" value="Cập nhật giỏ hàng"> -->
                                                <?php
                                                if (Auth::check()) {
                                                    ?>
                                                    <a href="{{asset('cart/checkout')}}" title="" id="checkout-cart">Thanh toán</a>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <a href="{{asset('login')}}" title="" id="checkout-cart">Đăng nhập để thanh toán</a>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </form>
                </div>
            </div>
            <div class="section" id="action-cart-wp">
                <div class="section-detail">
                    <!-- <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng.</p> -->
                    <a href="{{asset('/')}}" title="" id="buy-more">Mua tiếp</a><br/>
                    <a href="{{asset('cart/delete/all')}}" title="" onclick="return confirmAction_delete_all_cart()" id="delete-cart">Xóa giỏ hàng</a>
                </div>
            </div>
        @else
            <div class="section" id="cart_empty">
                <p>Không có sản phẩm nào trong giỏ hàng, click <a href="{{asset('/')}}">vào đây </a>để quay lại trang chủ !</p>
            </div>
        @endif
    </div>
</div>
@endsection