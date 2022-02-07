@extends('user.Layouts.master')
@section('content')

<div id="main-content-wp" class="clearfix info-member-page">
    <div class="wp-inner">
        <div class="secion" id="breadcrumb-wp">
            <div class="secion-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="{{asset('/')}}" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="{{asset('info-account')}}" title="">Thông tin cá nhân</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="sidebar" class="fl-left">
            <ul id="list-cat">
                <li>
                    <a href="{{asset('info-account')}}" title="">Thông tin cá nhân</a>
                </li>
<!--                <li>
                    <a href="?mod=users&act=update_users" title="">Cập nhật thông tin</a>
                </li>-->
<!--                <li>
                    <a href="?mod=users&act=change_password" title="">Đổi mật khẩu</a>
                </li>-->
                <li>
                    <a href="{{asset('logout')}}" onclick="return confirmAction_users()" title="">Đăng xuất</a>
                </li>
            </ul>
        </div>
        <div id="content" class="fl-right">
            <div class="main-content fl-right">
                <div class="section" id="detail-blog-wp">
                    <div class="section-head clearfix">
                        <br/>
                        <h3 class="section-title">Thông tin cá nhân</h3>
                        <br/>
                    </div>
                    <div class="section-detail">
                        <form action="" id="form-profile" method="post" accept-charset="utf-8">
                            <label for="display_name">Họ và tên</label>
                            <input type="text" value="{{$user->fullname}}" name="display_name" id="display_name" readonly="true"><br>
                            <label for="user_login">Tên đăng nhập</label>
                            <input type="text" value="<?php echo $user->username; ?>" name="user_login" id="display_name" readonly="true"><br>
                            <label for="phone">Số điện thoại</label>
                            <input type="tel" name="user_tel" value="<?php echo $user->phone; ?>" id="user_tel" readonly="true"><br>
                            <label for="email">Email</label>
                            <input type="email" name="user_email" id="user_email" value="<?php echo $user->email; ?>" readonly="true"><br>
                            <label for="user_address">Địa chỉ</label>
                            <input type="text" name="user_address" id="user_address" readonly="true" value="<?php echo $user->address; ?>"><br>
                            <label for="gender">Giới tính</label>
                            <input type="text" name="user_address" id="user_address" readonly="true" value="<?php echo $user->gender; ?>"><br>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection