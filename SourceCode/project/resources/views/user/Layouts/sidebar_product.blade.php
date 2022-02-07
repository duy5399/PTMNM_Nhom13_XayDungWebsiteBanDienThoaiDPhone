
<div class="sidebar fl-left">
    <div class="section" id="category-product-wp">
        <div class="section-head">
            <h3 class="section-title">Danh mục sản phẩm</h3>
        </div>
        <div class="secion-detail">
            <ul class="list-item">
                @foreach ($category_list as $cate)
                        <li>
                            <a href="{{asset('category-product/'.$cate->cate_id.'/'.$cate->cate_name)}}" title="">{{$cate->cate_name}}</a>
                        </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="section" id="selling-wp">
        <div class="section-head">
            <h3 class="section-title">Sản phẩm bán chạy</h3>
        </div>
        <div class="section-detail">
            <?php
            if (!empty($selling_products_list)) {
                ?>
                <ul class="list-item">
                    <?php
                    foreach ($selling_products_list as $item) {
                        ?>
                        <li class="clearfix">
                            <a href="{{asset('detail/'.$item->product_id)}}" title="" class="thumb fl-left">
                                <img src="{{asset('storage/app/avatar/'.$item->product_thumb)}}" alt="">
                            </a>
                            <div class="info fl-right">
                                <a href="{{asset('detail/'.$item->product_id)}}" title="" class="product-name"><?php echo $item->product_name; ?></a>
                                <div class="price">
                                    <span class="new">{{number_format($item->price_new,0,',','.')}} VNĐ</span>

                                </div>
                                <?php
                                if ($item['qty_product'] > 0) {
                                    ?>
                                    <a href="{{asset('cart/add/'.$item->product_id)}}" title="" class="buy-now">Mua ngay</a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="{{asset('cart/add/'.$item->product_id)}}" onclick="return confirmAction_detail()" title="" class="buy-now">Mua ngay</a>
                                    <?php
                                }
                                ?>


                            </div>
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
<!--    <div class="section" id="banner-wp">
        <div class="section-detail">
            <a href="?page=detail_blog_product" title="" class="thumb">
                <img src="public/images/banner.png" alt="">
            </a>
        </div>
    </div>-->
</div>