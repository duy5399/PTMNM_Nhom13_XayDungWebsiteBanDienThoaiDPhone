<!DOCTYPE html>
<html>
    <head>
        <title>ISMART STORE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <base href="{{asset('public/user/')}}/"> -->
        <link href="{!!url('public/user/css/bootstrap.min.css')!!}" rel="stylesheet">
        <link href="public/user/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" />
        <link href="public/user/css/bootstrap/bootstrap.min.css" rel="stylesheet" />
        <link href="public/user/reset.css" rel="stylesheet" />
        <link href="public/user/css/carousel/owl.carousel.css" rel="stylesheet" />
        <link href="public/user/css/carousel/owl.theme.css" rel="stylesheet" />
        <link href="public/user/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <!-- <link href="style.css" rel="stylesheet" /> -->
        <link href="public/user/css/import/fonts.css" rel="stylesheet" />
        <link href="public/user/css/import/global.css" rel="stylesheet" />
        <link href="public/user/css/import/header.css" rel="stylesheet" />
        <link href="public/user/css/import/footer.css" rel="stylesheet" />
        <link href="public/user/css/import/home.css" rel="stylesheet" />
        <link href="public/user/css/import/category_product.css" rel="stylesheet" />
        <link href="public/user/css/import/detail_product.css" rel="stylesheet" />
        <link href="public/user/css/import/detail_blog.css" rel="stylesheet" />
        <link href="public/user/css/import/cart.css" rel="stylesheet" />
        <link href="public/user/css/import/checkout.css" rel="stylesheet" />
        <link href="public/user/css/import/login.css" rel="stylesheet" />
        <link href="public/user/css/import/info_account.css" rel="stylesheet" />
        <link href="public/user/css/import/change_password.css" rel="stylesheet" />
        <link href="public/user/css/import/register.css" rel="stylesheet" />
        <link href="public/user/css/import/forgot_password.css" rel="stylesheet" />

        <link href="public/user/responsive.css" rel="stylesheet" />
        <script src="public/user/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="public/user/js/elevatezoom-master/jquery.elevatezoom.js" type="text/javascript"></script>
        <script src="public/user/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="public/user/js/carousel/owl.carousel.js" type="text/javascript"></script>
        <script src="public/user/js/main.js" type="text/javascript"></script>
        <script src="public/user/js/myscript.js" type="text/javascript"></script>
        <script src="modules/cart/js/app.js" type="text/javascript"></script>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3"></script>
        <SCRIPT LANGUAGE="JavaScript">
            function confirmAction_delete_cart() {
                return confirm("Bạn muốn loại bỏ sản phẩm này khỏi giỏ hàng?")
            }
            function confirmAction_delete_all_cart() {
                return confirm("Bạn muốn loại bỏ tất cả sản phẩm khỏi giỏ hàng?")
            }
            function confirmAction_users() {
                return confirm("Bạn muốn đăng xuất?")
            }
            function confirmAction_detail() {
                return confirm("Sản phẩm này đã hết hàng, bạn vui lòng chọn sản phẩm khác? ")
            }
            function confirmAction_email() {
                return confirm("Bạn vui lòng vào email để xác nhận? ")
            }
        </SCRIPT>
        <script>
            function cart(id) {
                $.get("?mod=cart&act=add", {"id": id}, function (data) {

                });

            }
        </script>
    </head>
    <body>
        <div id="site">
            <div id="container">
                <div id="header-wp">
                    <div id="head-top" class="clearfix">
                        <div class="wp-inner">
                            <div id="main-menu-wp" class="fl-left">
                                <ul id="main-menu" class="clearfix">
                                    <li class="active">
                                        <a href="?page=home" title="">Trang chủ</a>
                                    </li>
                                    <li>
                                        <a href="?mod=post&act=blog" title="">Blog</a>
                                    </li>
                                    <?php
                                    //require 'db/connect.php';
                                    // $sql = "select * from page where status = 1";
                                    // $result = mysqli_query($conn, $sql);
                                    // $page = array();
                                    // $num_rows = mysqli_num_rows($result);
                                    // if ($num_rows > 0) {
                                    //     while ($row = mysqli_fetch_assoc($result)) {
                                    //         $page[] = $row;
                                    //     }
                                    // }
                                    ?>
                                    <?php
                                    // foreach ($page as $item) {
                                    //     ?>
                                    //     <li>
                                    //         <a href="?mod=page&act=main" title=""><?php //echo $item['page_title'] ?></a>
                                    //     </li>
                                    //     <?php
                                    // }
                                    ?>
                                    <li>
                                        <a href="?mod=page&act=contact" title="">Liên hệ</a>
                                    </li>
                                </ul>
                            </div>

                            <?php
                            if (isset($_SESSION['is_login'])) {
                                ?>
                                <div id="user-login" class="dropdown dropdown-extended fl-right">
                                    <button class="dropdown-toggle clearfix" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <h3 id="account" class="fl-right">Hello <strong><?php //if (is_login()) //echo info_user('fullname'); ?></strong></h3>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="?mod=users&act=info_account" title="Thông tin cá nhân">Thông tin cá nhân</a></li>
                                        <!--                                        <li><a href="?mod=users&act=change_password" title="Đổi mật khẩu">Đổi mật khẩu</a></li>-->
                                        <li><a class="logout" onclick="return confirmAction_users()" href="?mod=users&act=logout">Đăng xuất</a></li>
                                    </ul>
                                </div>
                                <?php
                            }else {
                                ?>
                                <div id="action-user" class="fl-right">
                                    <div id="not-signed">
                                        <a href="?mod=users&act=login" title="" id="login">Đăng nhập</a>
                                        <span id="icon">/</span>
                                        <a href="?mod=users&act=register" title="" id="reg">Đăng ký</a>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div id="head-body" class="clearfix">
                        <div class="wp-inner">
                            <a href="?page=home" title="" id="logo" class="fl-left"><img src="public/images/logo.png"/></a>
                            <div id="search-wp" class="fl-left">
                                <form method="POST" action="?mod=search&act=search_product">
                                    <input type="text" name="keyword" id="search" placeholder="Nhập từ khóa tìm kiếm tại đây!">
                                    <button type="submit" name="btn_search" id="btn_search">Tìm kiếm</button>
                                </form>
                            </div>
                            <div id="action-wp" class="fl-right">
                                <div id="advisory-wp" class="fl-left">
                                    <span class="title">Tư vấn</span>
                                    <span class="phone">0987.654.321</span>
                                </div>
                                <div id="btn-respon" class="fl-right"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                <a href="?mod=cart&act=show" title="giỏ hàng" id="cart-respon-wp" class="fl-right">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>

                                    <?php
                                    if (isset($_SESSION['cart']['buy'])) {
                                        $num_order = count($_SESSION['cart']['buy']);
                                    } else {
                                        $num_order = 0;
                                    }
                                    ?>
                                    <span id="num"><?php //echo $num_order; ?></span>
                                </a>
                                <div id="cart-wp" class="fl-right">
                                    <div id="btn-cart">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>

                                        <?php
                                        if (isset($_SESSION['cart']['buy'])) {
                                            $num_order = count($_SESSION['cart']['buy']);
                                        } else {
                                            $num_order = 0;
                                        }
                                        ?>
                                        <span id="num"><?php //echo $num_order; ?></span>
                                    </div>
                                    <div id="dropdown">
                                        <p class="desc">Có <span><?php //echo $num_order ?> sản phẩm</span> trong giỏ hàng</p>
                                        <?php
                                        if (isset($_SESSION['cart']['buy'])) {
                                            //$list_buy = get_list_by_cart();
                                            ?>
                                            <ul class="list-cart">
                                                <?php
                                                foreach ($list_buy as $buy) {
                                                    ?>
                                                    <li class="clearfix">
                                                        <a href="" title="" class="thumb fl-left">
                                                            <img src="admin/uploads/<?php //echo $buy['product_thumb'] ?>" alt="">
                                                        </a>
                                                        <div class="info fl-right">
                                                            <a href="" title="" class="product-name"><?php //echo $buy['product_name'] ?></a>
                                                            <p class="price"><?php ////echo currency_format($buy['price_new']) ?></p>
                                                            <p class="qty">Số lượng: <span><?php //echo $buy['qty'] ?></span></p>
                                                        </div>
                                                    </li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                            <?php
                                        }
                                        ?>
                                        <div class="total-price clearfix">
                                            <?php
                                            if (isset($_SESSION['cart']['info']['total'])) {
                                                $total = $_SESSION['cart']['info']['total'];
                                            } else {
                                                $total = 0;
                                            }
                                            ?>
                                            <p class="title fl-left">Tổng:</p>
                                            <p class="price fl-right"><?php //echo currency_format($total); ?></p>

                                        </div>
                                        <dic class="action-cart clearfix">
                                            <a href="?mod=cart&act=show" title="Giỏ hàng" class="view-cart fl-left">Giỏ hàng</a>
                                            <?php
                                            if (isset($_SESSION['is_login'])) {
                                                ?>
                                                <a href="?mod=check_out&act=checkout" title="Thanh toán" class="checkout fl-right">Thanh toán</a>
                                                <?php
                                            } else {
                                                ?>
                                                <a href="?mod=users&act=login" title="Đăng nhập" class="checkout fl-right">Thanh toán</a>
                                                <?php
                                            }
                                            ?>
                                        </dic>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="main-content-wp" class="home-page clearfix">
                        <div class="wp-inner">
                                
<div class="sidebar fl-left">
    <div class="section" id="category-product-wp">
        <div class="section-head">
            <h3 class="section-title">Danh mục sản phẩm</h3>
        </div>
        <div class="secion-detail">
            <?php
            if (isset($list_category)) {
                ?>
                <ul class="list-item">
                    <?php
                    foreach ($list_category as $category) {
                        ?>
                        <li>
                            <a href="?mod=product&act=category_product&id=<?php //echo $category['cat_id'] ?>" title=""><?php //echo $category['cat_name'] ?></a>
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
    <div class="section" id="selling-wp">
        <div class="section-head">
            <h3 class="section-title">Sản phẩm bán chạy</h3>
        </div>
        <div class="section-detail">
            <?php
            if (!empty($selling_products)) {
                ?>
                <ul class="list-item">
                    <?php
                    foreach ($selling_products as $item) {
                        $item['url'] = "?mod=product&act=detail&cat_id={$item['cat_id']}&id={$item['id']}";
                        ?>
                        <li class="clearfix">
                            <a href="<?php //echo $item['url']; ?>" title="" class="thumb fl-left">
                                <img src="admin/uploads/<?php //echo $item['product_thumb']; ?>" alt="">
                            </a>
                            <div class="info fl-right">
                                <a href="<?php //echo $item['url']; ?>" title="" class="product-name"><?php //echo $item['product_name']; ?></a>
                                <div class="price">
                                    <span class="new"><?php //echo currency_format($item['price_new']); ?></span>

                                </div>
                                <?php
                                if ($item['qty_product'] > 0) {
                                    ?>
                                    <a href="?mod=cart&act=add&id=<?php //echo $item['id']; ?>" title="" class="buy-now">Mua ngay</a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="" onclick="return confirmAction_detail()" title="" class="buy-now">Mua ngay</a>
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

@yield('content')

<div id="footer-wp">
    <div id="foot-body">
        <div class="wp-inner clearfix">
            <div class="block" id="info-company">
                <h3 class="title">ISMART</h3>
                <p class="desc">ISMART luôn cung cấp luôn là sản phẩm chính hãng có thông tin rõ ràng, chính sách ưu đãi cực lớn cho khách hàng có thẻ thành viên.</p>
                <div id="payment">
                    <div class="thumb">
                        <img src="public/images/img-foot.png" alt="">
                    </div>
                </div>
            </div>
            <div class="block menu-ft" id="info-shop">
                <h3 class="title">Thông tin cửa hàng</h3>
                <ul class="list-item">
                    <li>
                        <p>Trường Đại học Thủ Dầu Một</p>
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
                        <a href="" title="">Quy định - chính sách</a>
                    </li>
                    <li>
                        <a href="" title="">Chính sách bảo hành - đổi trả</a>
                    </li>
                    <li>
                        <a href="" title="">Chính sách hội viện</a>
                    </li>
                    <li>
                        <a href="" title="">Giao hàng - lắp đặt</a>
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
    <a href="?page=home" title="" class="logo">ISMART</a>
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
                            <a href="?mod=product&act=category_product&id=1" title="">DELL</a>
                        </li>
                        <li>
                            <a href="?mod=product&act=category_product&id=2" title="">ASUS</a>
                        </li>
                        <li>
                            <a href="?mod=product&act=category_product&id=3" title="">HP</a>
                        </li>
                        <li>
                            <a href="?mod=product&act=category_product&id=4" title="">MACBOOK</a>
                        </li>
                        <li>
                            <a href="?mod=product&act=category_product&id=5" title="">LENOVO</a>
                        </li>
                        <li>
                            <a href="?mod=product&act=category_product&id=6" title="">MSI</a>
                        </li>
                        <li>
                            <a href="?mod=product&act=category_product&id=7" title="">ACER</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="?mod=post&act=blog" title="">Blog</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="?mod=post&act=main&id=1" title="">Đánh giá</a>
                        </li>
                        <li>
                            <a href="?mod=post&act=main&id=2" title="">Cẩm nang</a>
                        </li>
                        <li>
                            <a href="?mod=post&act=main&id=3" title="">Tin tức</a>
                        </li>
                        <li>
                            <a href="?mod=post&act=main&id=4" title="">So sánh</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="?mod=page&act=main" title="">Giới thiệu</a>
                </li>
                <li>
                    <a href="?mod=page&act=contact" title="">Liên hệ</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="btn-top"><img src="public/images/icon-to-top.png" alt=""/></div>
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