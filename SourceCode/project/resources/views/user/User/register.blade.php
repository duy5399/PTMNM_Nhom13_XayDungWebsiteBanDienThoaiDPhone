@extends('user.Layouts.master')
@section('content')

<div id="main-content-reg" class="reg-page">
    <div class="wp-inner clearfix">
        <div class="info fl-left">
            <h3 class="title">Tài khoản hệ thống</h3>
            
            <div class="thumb">
                <img src="https://www.chclubbock.org/wp-content/uploads/2020/05/OnlineRegistration-768x512.jpg">
            </div>
        </div>
        <div class="form-reg-wp fl-right">
            <div class="register">
                <h3 class="title">Đăng ký thành viên</h3>
                @if(Session::has('error'))
                    <p class="text-danger">{{Session::get('error')}}</p>
                @endif

                @if(Session::has('success'))
                    <div class="alert alert-success">
                        <p class="text-success">{{Session::get('success')}}</p>
                    </div>
                @endif
                <form action="" method="POST" id="form-register">
                    <input type="text" value="" name="fullname" placeholder="Họ và tên" required>

                    <input type="text" value="" name="username" placeholder="Tên đăng nhập" required>

                    <input type="password" name="password" placeholder="Mật khẩu" required>

                    <input type="text" value="" name="email" placeholder="Email" required>

                    <input type="text" value="" name="phone" placeholder="Số điện thoại" required>

                    <input type="text" value="" name="address" placeholder="Địa chỉ" required>

                    <select name="gender" id="gender">
                        <option value="male" selected> Nam</option>
                        <option value="female"> Nữ</option>
                    </select>

                    <input type="submit" id="btn_reg" name="btn_reg" value="Đăng ký">
                    {{csrf_field()}}
                </form>
                <div id="have-account">
                    <span>Đã có tài khoản?</span>
                    <a href="{{asset('login')}}" id="lost-pass" title="Đăng Nhập">Đăng Nhập</a>
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
