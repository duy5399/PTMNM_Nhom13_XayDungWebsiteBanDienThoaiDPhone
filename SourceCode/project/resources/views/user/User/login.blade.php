@extends('user.Layouts.master')
@section('content')

<div id="main-content-login" class="login-page">
    <div class="wp-inner clearfix">
        <div class="info fl-left">
            <div class="thumb thumb_login">
                <img src="{{asset('public/user/images/banner-login.jpeg')}}">
            </div>
        </div>
        <div class="form-reg-wp fl-right">
            <div class="login">
                <h1 class="post_title">Đăng nhập</h1>
                <form id="form-login" action="" method="post">
                    <input type="text" name="username" value="" id="username" placeholder="Tên đăng nhập">
                    <input type="password" name="password" id="password" placeholder="Mật khẩu">
                    @if(Session::has('error'))
                        <p class="error">{{Session::get('error')}}</p>
                    @endif
                    <a href="{{asset('reset-password')}}" id="lost-pass">Quên mật khẩu?</a>
                    <input type="submit" name="btn_login" id="btn_login" value="Login">
                    {{csrf_field()}}
                </form>

                <div id="not-account">
                    <span>Chưa có tài khoản?</span>
                    <a href="{{asset('register')}}" title="Đăng ký" id="reg">Đăng ký</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection