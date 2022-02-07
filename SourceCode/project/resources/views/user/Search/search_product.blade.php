@extends('user.Layouts.master')
@section('content')

<div id="main-content-wp" class="clearfix category-product-page">
    <div class="wp-inner">
        @include('user.Layouts.sidebar_product')

        <div class="main-content fl-right">
            <div class="section" id="list-product-wp">
                <div class="section-head clearfix">
                    <h3 class="section-title fl-left">Sản phẩm tìm được với từ khóa: <span>"{{$keyword}}"</span></h3>
                    <div class="filter-wp fl-right">
                        <p class="desc">Kết quả tìm kiếm: <?php echo count($search_product_list); ?> sản phẩm</p>
                        <div class="form-filter">
                        </div>
                    </div>
                </div>
                <div class="section-detail">
                    @if($search_product_list != null)
                        <ul class="list-item">
                            @foreach ($search_product_list as $item)
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
                                            <a href="" onclick="cart(<?php //echo $item['id'] ?>)" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                        </div>
                                    @else
                                        <div class="action clearfix">
                                            <a href="" onclick="return confirmAction_detail()" title="" class="add-cart fl-left">Tạm hết hàng</a>
                                        </div>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>Không có sản phẩm nào được tìm thấy</p>
                    @endif
                </div>
            </div>
            <div class="section" id="paging-wp">
                @if(!empty($categoryproduct_list))
                <div class="section-detail clearfix">
                    <?php
                    //echo get_pagging($num_page, $page, "?mod=search&act=search_product&keyword=$keyword");
                    ?>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection