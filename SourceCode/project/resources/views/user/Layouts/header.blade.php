<!DOCTYPE html>
<html>
    <head>
        <title>Dphone Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <base href="{{asset('public/user/')}}/"> -->
        <base href="{{asset('')}}/">
        <!-- <link href="{!!url('public/user/css/bootstrap.min.css')!!}" rel="stylesheet"> -->
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
                                        <a href="{{asset('/')}}" title="">Trang chủ</a>
                                    </li>
                                    <li>
                                        <a href="{{asset('blog')}}" title="">Blog</a>
                                    </li>
                                    <li>
                                        <a href="{{asset('introduce')}}" title="">Giới thiệu</a>
                                    </li>
                                    <li>
                                        <a href="{{asset('contact')}}" title="">Liên hệ</a>
                                    </li>
                                </ul>
                            </div>

                            <?php
                            if (Auth::check()) {
                                ?>
                                <div id="user-login" class="dropdown dropdown-extended fl-right">
                                    <button class="dropdown-toggle clearfix" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <h3 id="account" class="fl-right">Xin chào <strong>{{Auth::user()->fullname}}</strong></h3>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{asset('info-account')}}" title="Thông tin cá nhân">Thông tin cá nhân</a></li>
                                        <!--                                        <li><a href="?mod=users&act=change_password" title="Đổi mật khẩu">Đổi mật khẩu</a></li>-->
                                        <li><a class="logout" onclick="return confirmAction_users()" href="{{asset('logout')}}">Đăng xuất</a></li>
                                    </ul>
                                </div>
                                <?php
                            }else {
                                ?>
                                <div id="action-user" class="fl-right">
                                    <div id="not-signed">
                                        <a href="{{asset('login')}}" title="" id="login">Đăng nhập</a>
                                        <span id="icon">/</span>
                                        <a href="{{asset('register')}}" title="" id="reg">Đăng ký</a>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div id="head-body" class="clearfix">
                        <div class="wp-inner">
                            <a href="{{asset('/')}}" title="" id="logo" class="fl-left"><img src="{{asset('public/admin/upload/logo.png')}}"/></a>
                            <div id="search-wp" class="fl-left">
                                <form method="get" action="{{asset('search/')}}" >
                                    <input type="text" name="keyword" id="search" placeholder="Nhập từ khóa tìm kiếm tại đây!">
                                    <button type="submit" id="btn_search">Tìm kiếm</button>
                                </form>
                            </div>
                            <div id="action-wp" class="fl-right">
                                <div id="advisory-wp" class="fl-left">
                                    <span class="title">Tư vấn</span>
                                    <span class="phone">0123 456 789</span>
                                </div>
                                <div id="btn-respon" class="fl-right"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                <a href="{{asset('cart/show')}}" title="giỏ hàng" id="cart-respon-wp" class="fl-right">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    
                                    <?php
                                    if (isset($_SESSION['cart']['buy'])) {
                                        $num_order = count($_SESSION['cart']['buy']);
                                    } else {
                                        $num_order = 0;
                                    }
                                    ?>
                                    <span id="num">{{Cart::count()}}</span>
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
                                        <span id="num">{{Cart::count()}}</span>
                                    </div>
                                    <div id="dropdown">
                                        <p class="desc">Có <span>{{Cart::count()}} sản phẩm</span> trong giỏ hàng</p>
                                        <?php
                                        $list_cart = Cart::content();
                                        if ($list_cart != null) {
                                            //$list_buy = get_list_by_cart();
                                            ?>
                                            <ul class="list-cart">
                                                <?php
                                                foreach ($list_cart as $item) {
                                                    ?>
                                                    <li class="clearfix">
                                                        <a href="" title="" class="thumb fl-left">
                                                            <img src="{{asset('storage/app/avatar/'.$item->options->img)}}" alt="">
                                                        </a>
                                                        <div class="info fl-right">
                                                            <a href="" title="" class="product-name">{{$item->name}}</a>
                                                            <p class="price">{{number_format($item->price,0,',','.')}} VNĐ</p>
                                                            <p class="qty">Số lượng: <span>{{$item->qty}}</span></p>
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
                                            <p class="price fl-right">{{Cart::total()}}</p>

                                        </div>
                                        <dic class="action-cart clearfix">
                                            <a href="{{asset('cart/show')}}" title="Giỏ hàng" class="view-cart fl-left">Giỏ hàng</a>
                                            <?php
                                            if (Auth::check()) {
                                                ?>
                                                <a href="{{asset('cart/checkout')}}" title="Thanh toán" class="checkout fl-right">Thanh toán</a>
                                                <?php
                                            } else {
                                                ?>
                                                <a href="{{asset('login')}}" title="Đăng nhập" class="checkout fl-right">Thanh toán</a>
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