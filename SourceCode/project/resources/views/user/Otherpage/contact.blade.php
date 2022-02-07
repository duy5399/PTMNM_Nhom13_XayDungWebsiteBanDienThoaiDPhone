@extends('user.Layouts.master')
@section('content')

<div id="main-content-wp" class="clearfix detail-blog-page">
    <div class="wp-inner">
        <div class="secion" id="breadcrumb-wp">
            <div class="secion-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="{{asset('/')}}" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="{{asset('contact')}}" title="">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
        @include('user.Layouts.sidebar_product_page')
        <div class="main-content fl-right">
            <div class="section" id="detail-blog-wp">
                <div class="section-head clearfix">
                    <h3 class="section-title">Liên hệ</h3>
                </div>
                <div class="section-detail">
                    <span class="create-date">2021-01-07 05:03:00</span>
                    <div class="detail">
                        <p><b>Website thương mại điện tử Dphone</b></p>
                        <p><b>Địa chỉ:</b> An Phú, Thuận An, Bình Dương</p>
                        <p><b>Số điện thoại:</b> 033 848 6121</p>
                        <p><b>Email:</b> duy5399@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="section" id="social-wp">
                <div class="section-detail">
                    <div class="fb-like" data-href="" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                    <div class="g-plusone-wp">
                        <div class="g-plusone" data-size="medium"></div>
                    </div>
                    <div class="fb-comments" id="fb-comment" data-href="" data-numposts="5"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
