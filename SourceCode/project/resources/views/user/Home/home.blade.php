@extends('user.Layouts.master')
@section('content')

<div id="main-content-wp" class="home-page clearfix">
    <div class="wp-inner">
        @include('user.Layouts.sidebar_product')
        <div class="main-content fl-right">
            <div class="section" id="slider-wp">
                <div class="section-detail">
                    @foreach ($slider_list as $slider)
                        <div class="item">
                            <img src="{{asset('storage/app/slider/'.$slider->slider_img)}}" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="section" id="support-wp">
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <li>
                            <div class="thumb">
                                <img src="public/admin/upload/icon-1.png">
                            </div>
                            <h3 class="title">Miễn phí vận chuyển</h3>
                            <p class="desc">Tới tận tay khách hàng</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/admin/upload/icon-2.png">
                            </div>
                            <h3 class="title">Tư vấn 24/7</h3>
                            <p class="desc">113</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/admin/upload/icon-3.png">
                            </div>
                            <h3 class="title">Tiết kiệm hơn</h3>
                            <p class="desc">Với nhiều ưu đãi cực lớn</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/admin/upload/icon-4.png">
                            </div>
                            <h3 class="title">Thanh toán nhanh</h3>
                            <p class="desc">Hỗ trợ nhiều hình thức</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/admin/upload/icon-5.png">
                            </div>
                            <h3 class="title">Đặt hàng online</h3>
                            <p class="desc">Thao tác đơn giản</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="section" id="feature-product-wp">
                <div class="section-head">
                    <h3 class="section-title">Sản phẩm nổi bật</h3>
                </div>
                <div class="section-detail">
                    @if (!empty($featured_products_list))
                        <ul class="list-item">
                            @foreach ($featured_products_list as $item)
                                <li>
                                    <a href="{{asset('detail/'.$item->product_id)}}" title="" class="thumb">
                                        <img src="{{asset('storage/app/avatar/'.$item->product_thumb)}}">
                                    </a>
                                    <a href="{{asset('detail/'.$item->product_id.'/'.$item->product_name)}}" title="" class="product-name">{{$item->product_name}}</a>
                                    <div class="price">
                                        <span class="new">{{number_format($item->price_new,0,',','.')}} VNĐ</span>
                                        <span class="old">{{number_format($item->price_old,0,',','.')}} VNĐ</span>
                                    </div>
                                    @if ($item->qty_product > 0)
                                        <div class="action clearfix">
                                            <a href="{{asset('cart/add/'.$item->product_id)}}" onclick="cart(<?php //echo $item['id'] ?>)" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                        </div>
                                    @else
                                        <div class="action clearfix">
                                            <a href="{{asset('cart/add/'.$item->product_id)}}" onclick="return confirmAction_detail()" title="" class="add-cart fl-left">Tạm hết hàng</a>
                                        </div>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
            <?php
                foreach($category_list as $cate){
                    if($cate->cate_name == 'iPhone')
                        $product_list = $iphone_list;
                    elseif($cate->cate_name == 'Xiaomi')
                        $product_list = $xiaomi_list;
                    elseif($cate->cate_name == 'Huawei')
                        $product_list = $huawei_list;
                    elseif($cate->cate_name == 'Samsung')
                        $product_list = $samsung_list;
                    elseif($cate->cate_name == 'Oppo')
                        $product_list = $oppo_list;
                    else
                        $product_list = $sony_list;
            ?>
                <div class="section" id="list-product-wp">
                    <div class="section-head">
                        <a href="{{asset('category-product/'.$cate->cate_id.'/'.$cate->cate_name)}}" class="section-title">{{$cate->cate_name}}</a>
                    </div>
                    <div class="section-detail">
                        <?php
                        if ($product_list != null) {
                            ?>
                            <ul class="list-item clearfix">
                                <?php
                                foreach ($product_list as $item) {
                                    ?>
                                    <li>
                                        <a href="{{asset('detail/'.$item->product_id)}}" title="" class="thumb">
                                            <img src="{{asset('storage/app/avatar/'.$item->product_thumb)}}">
                                        </a>
                                        <a href="{{asset('detail/'.$item->product_id.'/'.$item->product_name)}}" title="" class="product-name">{{$item->product_name}}</a>
                                        <div class="price">
                                            <span class="new">{{number_format($item->price_new,0,',','.')}} VNĐ</span>
                                            <span class="old">{{number_format($item->price_old,0,',','.')}} VNĐ</span>
                                        </div>
                                        @if ($item->qty_product > 0)
                                            <div class="action clearfix">
                                                <a href="{{asset('cart/add/'.$item->product_id)}}" onclick="cart(<?php //echo $item['id'] ?>)" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                            </div>
                                        @else
                                            <div class="action clearfix">
                                                <a href="{{asset('cart/add/'.$item->product_id)}}" onclick="return confirmAction_detail()" title="" class="add-cart fl-left">Tạm hết hàng</a>
                                            </div>
                                        @endif
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>
@endsection