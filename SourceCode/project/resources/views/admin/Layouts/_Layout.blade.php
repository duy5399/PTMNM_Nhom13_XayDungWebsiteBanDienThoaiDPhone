<!DOCTYPE html>
<html>
    <head>
        <title>Quản lý ISMART</title>
        <base href="{{asset('public/css/admin')}}/">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap/sb-admin.css" rel="stylesheet" type="text/css"/>
        <link href="reset.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link href="responsive.css" rel="stylesheet" type="text/css"/>


        <!-- Page level plugin CSS-->
        <link href="esset/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="esset/css/sb-admin.css" rel="stylesheet">

        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="modules/product/js/customs.js" type="text/javascript"></script>
        <script src="modules/product/js/customs_1.js" type="text/javascript"></script>
        <script src="modules/product/js/customs_2.js" type="text/javascript"></script>
        <script src="modules/product/js/customs_3.js" type="text/javascript"></script>
        <script src="modules/product/js/customs_4.js" type="text/javascript"></script>
        <script src="modules/product/js/customs_5.js" type="text/javascript"></script>
        <script src="modules/product/js/customs_6.js" type="text/javascript"></script>
        <SCRIPT LANGUAGE="JavaScript">
            function confirmAction_product() {
                return confirm("Bạn muốn xóa sản phẩm này?")
            }
            function confirmAction_product_cat() {
                return confirm("Bạn muốn xóa danh mục sản phẩm này?")
            }
            function confirmAction_post() {
                return confirm("Bạn muốn xóa bài viết này?")
            }
            function confirmAction_post_cat() {
                return confirm("Bạn muốn xóa danh mục bài viết này?")
            }
            function confirmAction_page() {
                return confirm("Bạn muốn xóa trang này?")
            }
            function confirmAction_bill() {
                return confirm("Bạn muốn xóa đơn hàng này?")
            }
            function confirmAction_bill_cancel() {
                return confirm("Bạn muốn hủy đơn hàng này?")
            }
            function confirmAction_users() {
                return confirm("Bạn muốn xóa người dùng này?")
            }
            function confirmAction_slider() {
                return confirm("Bạn muốn xóa slider này?")
            }
            function confirmAction_user_admin() {
                return confirm("Bạn có chắc chắn muốn xóa tài khoản?")
            }
            function confirmAction_role() {
                return confirm("Bạn không có đủ quyền hạn để thực hiện chức năng này?")
            }
            function confirmAction_search() {
                return confirm("Bạn chưa nhập từ khóa?")
            }
            function confirmAction_users_logout() {
                return confirm("Bạn muốn đăng xuất?")
            }
            function confirmAction_delete_status_product() {
                return confirm("Sản phẩm này đã được xóa?")
            }
            function confirmAction_delete_status_post() {
                return confirm("Bài viết này đã được xóa?")
            }
            function confirmAction_delete_status_users() {
                return confirm("Thành viên này đã được xóa?")
            }
            function confirmAction_update_login_admin() {
                return confirm("Bạn không có quyền sửa người quản trị này?")
            }
            function confirmAction_delete_login_admin() {
                return confirm("Bạn không có quyền xóa người quản trị này?")
            }
            function confirmAction_change_password() {
                return confirm("Bạn không có quyền đổi mật khẩu người quản trị này?")
            }
            function confirmAction_users_logout_delete() {
                return confirm("Tài khoản của bạn không còn tồn tại bạn vui lòng đăng nhập tài khoản khác?")
            }
        </SCRIPT>
    </head>
    <body>
        <div id="site">
            <div id="container">
                <div id="header-wp">
                    <div class="wp-inner clearfix">
                        <a href="?page=list_post" title="" id="logo" class="fl-left">ADMIN</a>
                        <ul id="main-menu" class="fl-left">
                            <li>
                                <a href="#" title="">Trang</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?mod=page&act=add" title="">Thêm mới</a> 
                                    </li>
                                    <li>
                                        <a href="?mod=page&act=main" title="">Danh sách trang</a> 
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" title="">Bài viết</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?mod=post&act=add" title="">Thêm mới</a> 
                                    </li>
                                    <li>
                                        <a href="?mod=post&act=main" title="">Danh sách bài viết</a> 
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" title="">Sản phẩm</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?mod=product&act=add" title="">Thêm mới</a> 
                                    </li>
                                    <li>
                                        <a href="?mod=product&act=main" title="">Danh sách sản phẩm</a> 
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" title="">Danh mục</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?mod=product_cat&act=main" title="">Danh mục sản phẩm</a> 
                                    </li>
                                    <li>
                                        <a href="?mod=post_cat&act=main" title="">Danh mục bài viết</a> 
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="" title="">Bán hàng</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?mod=bill&act=list_order" title="">Danh sách đơn hàng</a> 
                                    </li>
<!--                                    <li>
                                        <a href="?mod=bill&act=bill_status_1" title="">Danh sách đơn hàng đã xử lý</a> 
                                    </li>-->
                                    <li>
                                        <a href="?mod=users&act=main" title="">Danh sách khách hàng</a> 
                                    </li>
                                </ul>
                            </li>
                            <!--                            <li>
                                                            <a href="?page=menu" title="">Menu</a>
                                                        </li>-->
                        </ul>
                            <div id="dropdown-user" class="dropdown dropdown-extended fl-right">
                                <button class="dropdown-toggle clearfix" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <div id="thumb-circle" class="fl-left">
                                        <img src="uploads/<?php //if (is_login_admin()) echo info_user('avatar'); ?>">
                                    </div>
                                    <h3 id="account" class="fl-right"><?php //if (is_login_admin()) echo info_user('fullname'); ?></h3>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="?mod=admin&act=info_account" title="Thông tin cá nhân">Thông tin tài khoản</a></li>
                                    <li><a href="?mod=admin&act=logout"  onclick="return confirmAction_users_logout()" title="Thoát">Đăng xuất</a></li>
                                </ul>
                            </div>
                    </div>
                </div>
                <div id="main-content-wp" class="list-post-page">
    <div class="wrap clearfix">
    <div id="sidebar" class="fl-left">
    <ul id="sidebar-menu">
        <li class="nav-item">
            <a href="" title="" class="nav-link nav-toggle">
                <span class="fa fa-map icon"></span>
                <span class="title">Trang</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="?mod=page&act=add" title="" class="nav-link">Thêm mới</a> 
                </li>
                <li class="nav-item">
                    <a href="?mod=page&act=main" title="" class="nav-link">Danh sách trang</a> 
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="" title="" class="nav-link nav-toggle">
                <span class="fa fa-pencil-square-o icon"></span>
                <span class="title">Bài viết</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="?mod=post&act=add" title="" class="nav-link">Thêm mới</a> 
                </li>
                <li class="nav-item">
                    <a href="?mod=post&act=main" title="" class="nav-link">Danh sách bài viết</a> 
                </li>
                
            </ul>
        </li>
        <li class="nav-item">
            <a href="" title="" class="nav-link nav-toggle">
                <span class="fa fa-product-hunt icon"></span>
                <span class="title">Sản phẩm</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="?mod=product&act=add" title="" class="nav-link">Thêm mới</a>
                </li>
                <li class="nav-item">
                    <a href="?mod=product&act=main" title="" class="nav-link">Danh sách sản phẩm</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="" title="" class="nav-link nav-toggle">
                <span class="fa fa-product-hunt icon"></span>
                <span class="title">Danh mục</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="?mod=product_cat&act=main" title="" class="nav-link">Danh mục sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a href="?mod=post_cat&act=main" title="" class="nav-link">Danh mục bài viết</a> 
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="" title="" class="nav-link nav-toggle">
                <span class="fa fa-database icon"></span>
                <span class="title">Bán hàng</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="?mod=bill&act=list_order" title="" class="nav-link">Danh sách đơn hàng</a> 
                </li>
                <li class="nav-item">
                    <a href="?mod=bill&act=bill_status_1" title="" class="nav-link">Danh sách đơn hàng đã xử lý</a> 
                </li>
                <li class="nav-item">
                    <a href="?mod=users&act=main" title="" class="nav-link">Danh sách khách hàng</a>
                </li>
            </ul>
        </li>
<!--        <li class="nav-item">
            <a href="#" title="" class="nav-link nav-toggle">
                <span class="fa fa-cubes icon"></span>
                <span class="title">Khối giao diện</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="?page=add_widget" title="" class="nav-link">Thêm mới</a>
                </li>
                <li class="nav-item">
                    <a href="?page=list_widget" title="" class="nav-link">Danh sách khối</a>
                </li>
                <li class="nav-item">
                    <a href="?page=menu" title="" class="nav-link">Menu</a>
                </li>
            </ul>
        </li>-->
        <li class="nav-item">
            <a href="#" title="" class="nav-link nav-toggle">
                <i class="fa fa-sliders" aria-hidden="true"></i>
                <span class="title">Slider</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="?mod=slider&act=add_slider" title="" class="nav-link">Thêm mới</a>
                </li>
                <li class="nav-item">
                    <a href="?mod=slider&act=list_slider" title="" class="nav-link">Danh sách slider</a>
                </li>
            </ul>
        </li>
<!--        <li class="nav-item">
            <a href="#" title="" class="nav-link nav-toggle">
                <i class="fa fa-file-image-o" aria-hidden="true"></i>
                <span class="title">Media</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="?page=list_media" title="" class="nav-link">Danh sách media</a>
                </li>
            </ul>
        </li>-->
    </ul>
</div>

        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Xin chào người quản trị Admin</h3>
                </div>
            </div>
            <div class="container-fluid">

                <!-- Icon Cards-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-paperclip" aria-hidden="true"></i>
                                </div>
                                <div class="mr-5">
                                    <p style="text-align: center;">Tổng bài viết</p>
                                    <h1 style="text-align: center; font-size: 50px;">
                                        <?php
                                        // $sql = "select count(*) as tongbaiviet from post where 1";
                                        // $result = mysqli_query($conn, $sql);
                                        // $num_rows = mysqli_num_rows($result);
                                        // if ($num_rows > 0) {
                                        //     while ($row = mysqli_fetch_assoc($result)) {
                                        //         echo $row['tongbaiviet'];
                                        //     }
                                        // }
                                        ?>
                                    </h1>
                                </div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="?mod=post&act=main">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-laptop" aria-hidden="true"></i>
                                </div>
                                <div class="mr-5">
                                    <p style="text-align: center;">Tổng sản phẩm</p>
                                    <h1 style="text-align: center; font-size: 50px;">
                                        <?php
                                        // $sql = "select count(*) as tongsanpham from product where 1";
                                        // $result = mysqli_query($conn, $sql);
                                        // $num_rows = mysqli_num_rows($result);
                                        // if ($num_rows > 0) {
                                        //     while ($row = mysqli_fetch_assoc($result)) {
                                        //         echo $row['tongsanpham'];
                                        //     }
                                        // }
                                        ?>
                                    </h1>
                                </div>

                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="?mod=product&act=main">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </div>
                                <div class="mr-5">
                                    <p style="text-align: center;">Tổng hóa đơn</p>
                                    <h1 style="text-align: center; font-size: 50px;">
                                        <?php
                                        // $sql = "select count(*) as tongdonhang from bill where 1";
                                        // $result = mysqli_query($conn, $sql);
                                        // $num_rows = mysqli_num_rows($result);
                                        // if ($num_rows > 0) {
                                        //     while ($row = mysqli_fetch_assoc($result)) {
                                        //         echo $row['tongdonhang'];
                                        //     }
                                        // }
                                        ?>
                                    </h1>
                                </div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="?mod=bill&act=list_order">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                </div>
                                <div class="mr-5">
                                    <p style="text-align: center;">Tổng tiền hóa đơn</p>
                                    <h1 style="text-align: center">
                                        <?php
                                        // $sql = "SELECT SUM(sub_total) as tongdonhang FROM `bill_detail` WHERE 1";
                                        // $result = mysqli_query($conn, $sql);
                                        // $num_rows = mysqli_num_rows($result);
                                        // if ($num_rows > 0) {
                                        //     while ($row = mysqli_fetch_assoc($result)) {
                                        //         // echo currency_format($row['tongdonhang']);
                                        //     }
                                        // }
                                        ?>
                                    </h1>
                                </div>
                            </div>
<!--                            <a class="card-footer text-white clearfix small z-1" href="?mod=users&act=main">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </span>
                            </a>-->
                        </div>
                    </div>
<!--                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                </div>
                                <div class="mr-5">
                                    <?php
                                    // $date = getdate();
                                    // $day = $date['mday'];
                                    // $sql = "SELECT SUM(qty*price_new)as tongtien FROM bill_detail WHERE DAY (created_at)=$day";
                                    // $result = $conn->query($sql);
                                    // if ($result->num_rows > 0)
                                    //     while ($rows = $result->fetch_assoc()) {
                                    //         if ($rows['tongtien'] == NULL) {
                                    //             echo '0';
                                    //         } else {
                                    //             echo $rows['tongtien'];
                                    //         }
                                    //     }
                                    ?>
                                    <div> Hóa Đơn Theo Ngày</div>
                                </div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="?mod=bill&act=bill_days">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                </div>
                                <div class="mr-5">
                                    <p style="text-align: center;">Tổng tiền hóa đơn</p>
                                    <h1 style="text-align: center">
                                        <?php
                                        // $sql = "SELECT SUM(sub_total) as tongdonhang FROM `bill_detail` WHERE 1";
                                        // $result = mysqli_query($conn, $sql);
                                        // $num_rows = mysqli_num_rows($result);
                                        // if ($num_rows > 0) {
                                        //     while ($row = mysqli_fetch_assoc($result)) {
                                        //         // echo currency_format($row['tongdonhang']);
                                        //     }
                                        // }
                                        ?>
                                    </h1>
                                </div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="?mod=users&act=main">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                </div>
                                <div class="mr-5">
                                    <p style="text-align: center;">Tổng tiền hóa đơn</p>
                                    <h1 style="text-align: center">
                                        <?php
                                        // $sql = "SELECT SUM(sub_total) as tongdonhang FROM `bill_detail` WHERE 1";
                                        // $result = mysqli_query($conn, $sql);
                                        // $num_rows = mysqli_num_rows($result);
                                        // if ($num_rows > 0) {
                                        //     while ($row = mysqli_fetch_assoc($result)) {
                                        //         // echo currency_format($row['tongdonhang']);
                                        //     }
                                        // }
                                        ?>
                                    </h1>
                                </div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="?mod=users&act=main">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </span>
                            </a>
                        </div>
                    </div>-->
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
    </div>
</div>
<div id="footer-wp">
    <div class="wp-inner">
        <p id="copyright">2019 © Admin Theme by Tống Văn Thanh</p>
    </div>
</div>
</div>
</div>
</body>
</html>