@extends('user.Layouts.master')
@section('content')

<div id="main-content-wp" class="clearfix blog-page">
    <div class="wp-inner">
        <div class="secion" id="breadcrumb-wp">
            <div class="secion-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="{{asset('/')}}" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="{{asset('blog')}}" title="">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
        @include('user.Layouts.sidebar_product_blog')
        <div class="main-content fl-right">
            <div class="section" id="detail-blog-wp">
                <div class="section-head clearfix">
                    <h3 class="section-title">Blog</h3>
                </div>
                <div class="section-detail">
                    <?php
                    if (!empty($list_post)) {
                        ?>
                        <ul class="list-item">
                            <?php
                            foreach ($list_post as $item) {
                                $item['url'] = "?mod=post&act=detail&cat_id={$item['cat_id']}&id={$item['id']}";
                                ?>
                                <li class="clearfix">
                                    <a href="<?php echo $item['url']; ?>" title="" class="thumb fl-left">
                                        <img src="admin/uploads/<?php echo $item['images']; ?>" alt="">
                                    </a>
                                    <div class="info fl-right">
                                        <a href="<?php echo $item['url']; ?>" title="" class="title"><?php echo $item['post_title']; ?></a>
                                        <span class="create-date"><?php echo $item['created_at']; ?></span>
                                        <p class="desc"><?php echo $item['post_desc']; ?></p>
                                    </div>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <?php
                    }else{
                    ?>
                    <p>Tính năng đang trong quá trình phát triển!!!</p>
                    <br/>
                    <p><img alt="" src="https://web-logg.com/wp-content/uploads/2020/11/AdobeStock_225472154-2.jpeg" /></p>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail">
                    <?php
                    //echo get_pagging($num_page, $page, "?mod=post&act=blog");
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection