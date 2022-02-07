<div id="footer-wp">
    <div id="foot-body">
        <div class="wp-inner clearfix">
            <div class="block" id="info-company">
                <h3 class="title">Dphone</h3>
                <p class="desc">Dphone Store luôn cung cấp luôn là sản phẩm chính hãng có thông tin rõ ràng, chính sách ưu đãi cực lớn cho khách hàng có thẻ thành viên.</p>
                <div id="payment">
                    <div class="thumb">
                        <img src="public/admin/upload/img-foot.png" alt="">
                    </div>
                </div>
            </div>
            <div class="block menu-ft" id="info-shop">
                <h3 class="title">Thông tin cửa hàng</h3>
                <ul class="list-item">
                    <li>
                        <p>Phú An, An Phú, Thuận An, Bình Dương</p>
                    </li>
                    <li>
                        <p>033 848 6121</p>
                    </li>
                    <li>
                        <p>duy5399@gmail.com</p>
                    </li>
                </ul>
            </div>
            <div class="block menu-ft policy" id="info-shop">
                <h3 class="title">Chính sách mua hàng</h3>
                <ul class="list-item">
                    <li>
                        <a href="{{asset('/')}}" title="">Quy định - chính sách</a>
                    </li>
                    <li>
                        <a href="{{asset('/')}}" title="">Chính sách bảo hành - đổi trả</a>
                    </li>
                    <li>
                        <a href="{{asset('/')}}" title="">Chính sách hội viện</a>
                    </li>
                    <li>
                        <a href="{{asset('/')}}" title="">Giao hàng - lắp đặt</a>
                    </li>
                </ul>
            </div>
            <div class="block" id="newfeed">
                <h3 class="title">Bảng tin</h3>
                <p class="desc">Đăng ký với chung tôi để nhận được thông tin ưu đãi sớm nhất</p>
                <div id="form-reg">
                </div>
            </div>
        </div>
    </div>
    <div id="foot-bot">
        <div class="wp-inner">
            <p id="copyright">©Coryright by Lê Sỹ Duy</p>
        </div>
    </div>
</div>
</div>
<div id="menu-respon">
    <a href="?page=home" title="" class="logo">Dphone</a>
    <div id="menu-respon-wp">
        <div id="main-menu-wp">
            <ul class="" id="main-menu-respon">
                <li>
                    <a href="?" title="">Trang chủ</a>
                </li>
                <li>
                    <a href="#" title="">Laptop</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{asset('category-product/3/Huawei')}}" title="">HUAWEI</a>
                        </li>
                        <li>
                            <a href="{{asset('category-product/1/iPhone')}}" title="">IPHONE</a>
                        </li>
                        <li>
                            <a href="{{asset('category-product/5/Oppo')}}" title="">OPPO</a>
                        </li>
                        <li>
                            <a href="{{asset('category-product/4/Samsung')}}" title="">SAMSUNG</a>
                        </li>
                        <li>
                            <a href="{{asset('category-product/6/Sony')}}" title="">SONY</a>
                        </li>
                        <li>
                            <a href="{{asset('category-product/2/Xiaomi')}}" title="">XIAOMI</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{asset('blog')}}" title="">Blog</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{asset('blog')}}" title="">Đánh giá</a>
                        </li>
                        <li>
                            <a href="{{asset('blog')}}" title="">Mẹo hay</a>
                        </li>
                        <li>
                            <a href="{{asset('blog')}}" title="">Tư vấn</a>
                        </li>
                        <li>
                            <a href="{{asset('blog')}}" title="">Khuyến mãi</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{asset('introduce')}}" title="">Giới thiệu</a>
                </li>
                <li>
                    <a href="{{asset('contact')}}" title="">Liên hệ</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="btn-top"><img src="public/admin/upload/icon-to-top.png" alt=""/></div>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
//        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=849340975164592";
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="198558491069654"
  theme_color="#13cf13"
  logged_in_greeting="Xin chào, tôi có thể hổ trợ gì cho bạn không?"
  logged_out_greeting="Xin chào, tôi có thể hổ trợ gì cho bạn không?">
</div>
</body>
</html>