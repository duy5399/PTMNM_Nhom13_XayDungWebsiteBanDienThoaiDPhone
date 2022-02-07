@extends('user.Layouts.master')
@section('content')

<div id="main-content-wp" class="clearfix category-product-page">
    <div class="wp-inner">
        <div class="secion" id="breadcrumb-wp">
            <div class="secion-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="{{asset('/')}}" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="{{asset('category-product/'.$categoryproduct_name->cate_id.'/'.$categoryproduct_name->cate_name)}}" title="">{{$categoryproduct_name->cate_name}}</a>
                    </li>
                </ul>
            </div>
        </div>
        @include('user.Layouts.sidebar')
        <div class="main-content fl-right">
            <div class="section" id="list-product-wp">
                <div class="section-head clearfix">
                    <?php
                    //foreach ($list_cat as $cat) {
                        ?>
                        <h3 class="section-title fl-left"><?php //echo $cat['cat_name']; ?></h3>
                        <?php
                    //}
                    ?>
                    <div class="filter-wp fl-right">
                        <p class="desc">Hiển thị <?php echo count($categoryproduct_list); ?> sản phẩm (<?php echo count($total_categoryproduct); ?> sản phẩm)</p>
                        <div class="form-filter">
                            <form method="POST" action="">
                                <!-- <select name="sorting" id="select" class="selection-2 city">
                                                                       <option value="0">Sắp xếp</option>
                                                                        <option value="1">Từ A-Z</option>
                                                                        <option value="2">Từ Z-A</option>
                                                                        <option value="3">Giá cao xuống thấp</option>
                                                                        <option value="3">Giá thấp lên cao</option>
                                    <script type="text/javascript">
                                        $(document).ready(function () {
                                            $(".city").change(function () {
                                                var id = $(".city").val();
                                                if (id == 1) {
                                                    location.replace('?mod=sort&act=A-Z&id=<?php //echo $id; ?>');
                                                } else if (id == 2)
                                                {
                                                    location.replace('?mod=sort&act=Z-A&id=<?php //echo $id; ?>');
                                                } else if (id == 3)
                                                {
                                                    location.replace('?mod=sort&act=high_low&id=<?php //echo $id; ?>');
                                                } else if (id == 4)
                                                {
                                                    location.replace('?mod=sort&act=low_high&id=<?php //echo $id; ?>');
                                                }
                                            });
                                        });
                                    </script>  
                                    <option>Sắp xếp</option>
                                    <?php
                                    //foreach ($default_sorting as $list) {
                                        ?>
                                    <option value="<?php //echo $list['id'] ?>"><?php //echo $list['sort_name'] ?></option>
                                        <?php
                                    //}
                                    ?>
                                </select> -->
                            </form>
                        </div>
                    </div>
                </div>
                <div class="section-detail">
                    @if(!empty($categoryproduct_list))
                        <ul class="list-item">
                            @foreach ($categoryproduct_list as $item)
                                <li>
                                    <a href="{{asset('detail/'.$item->product_id)}}" title="" class="thumb">
                                        <img src="{{asset('storage/app/avatar/'.$item->product_thumb)}}">
                                    </a>
                                    <a href="{{asset('detail/'.$item->product_id)}}" title="" class="product-name">{{$item->product_name}}</a>
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
                    @else
                        <p>Không có sản phẩm</p>
                    @endif
                </div>
            </div>
            <div class="section" id="paging-wp">
                <?php
                if ($categoryproduct_list != null) {
                    ?>
                    <div class="section-detail clearfix">
                        <!-- <ul class='list-item clearfix'>
                            <li class=""><a href = "#" >a</a></li>
                            {{$categoryproduct_list->links()}}
                        </ul> -->
                        {{$categoryproduct_list->links()}}
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

@endsection