
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
    <div class="section" id="filter-product-wp">
        <div class="section-head">
            <h3 class="section-title">Bộ lọc</h3>
        </div>
        <div class="section-detail">
            <form method="POST" action="">
                    <table>
                        <thead>
                            <tr>
                                <td colspan="2">Giá</td>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <?php $price = 5000000?>
                                    <td><a href="{{asset('category-product/'.$categoryproduct_name->cate_id.'/'.$categoryproduct_name->cate_name.'/'.$price)}}">0đ - 5.000.000đ</a></td>
                                </tr>
                                <tr>
                                    <?php $price = 10000000?>
                                    <td><a href="{{asset('category-product/'.$categoryproduct_name->cate_id.'/'.$categoryproduct_name->cate_name.'/'.$price)}}">5.000.000đ - 10.000.000đ</a></td>
                                </tr>
                                <tr>
                                    <?php $price = 1000000000?>
                                    <td><a href="{{asset('category-product/'.$categoryproduct_name->cate_id.'/'.$categoryproduct_name->cate_name.'/'.$price)}}">10.000.000đ - 1.000.000.000đ</a></td>
                        </tbody>
                    </table>
            </form>
        </div>
    </div>
<!--    <div class="section" id="banner-wp">
        <div class="section-detail">
            <a href="?page=detail_product" title="" class="thumb">
                <img src="public/images/banner.png" alt="">
            </a>
        </div>
    </div>-->
</div>