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
                        <a href="{{asset('introduce')}}" title="">Giới thiệu</a>
                    </li>
                </ul>
            </div>
        </div>
        @include('user.Layouts.sidebar_product_page') 
        <div class="main-content fl-right">
                <div class="section" id="detail-blog-wp">
                    <div class="section-head clearfix">
                        <h3 class="section-title">Giới thiệu</h3>
                    </div>
                    <div class="section-detail">
                        <span class="create-date">2021-01-07 05:30:15</span>
                        <div class="detail">
                            <p><b>Công ty Cổ phần Đầu tư Duy Phone (Dphone)</b> là nhà bán lẻ số 1 Việt Nam về doanh thu và lợi nhuận, với mạng lưới hơn 4.500 cửa hàng trên toàn quốc. Dphone vận hành các chuỗi bán lẻ Dphone.com, Dphones, DDphone. Ngoài ra, Dphone còn mở rộng ra thị trường nước ngoài với chuỗi bán lẻ thiết bị di động và điện máy tại Campuchia cũng như đầu tư vào chuỗi nhà thuốc An Khang. Năm 2020, thành viên mới của Dphone là 4KFarm ra đời với mục tiêu cung cấp cho người tiêu dùng thực phẩm an toàn theo chuẩn 4 không (không thuốc trừ sâu, không chất bảo quản, không chất tăng trưởng, không sử dụng giống biến đổi gen).</p>
                            <p>&emsp;&emsp;🔹 Dphone tập trung xây dựng dịch vụ khách hàng khác biệt với chất lượng vượt trội, phù hợp với văn hoá đặt khách hàng làm trung tâm trong mọi suy nghĩ và hành động của công ty.</p>
                            <p>&emsp;&emsp;🔹 Dphone vinh dự khi liên tiếp lọt vào bảng xếp hạng TOP 50 công ty niêm yết tốt nhất Châu Á của tạp chí uy tín Forbes và là đại diện Việt Nam duy nhất trong Top 100 nhà bán lẻ hàng đầu Châu Á – Thái Bình Dương do Tạp chí bán lẻ châu Á (Retail Asia) và Tập đoàn nghiên cứu thị trường Euromonitor bình chọn.</p>
                            <p>&emsp;&emsp;🔹 Dphone nhiều năm liền có tên trong các bảng xếp hạng danh giá như TOP 500 nhà bán lẻ hàng đầu Châu Á – Thái Bình Dương (Retail Asia) và dẫn đầu TOP 50 công ty kinh doanh hiệu quả nhất Việt Nam (Nhịp Cầu Đầu Tư)… Sự phát triển của Dphone cũng là một điển hình tốt được nghiên cứu tại các trường Đại học hàng đầu như Harvard, UC Berkeley, trường kinh doanh Tuck (Mỹ).</p>
                            <p>&emsp;&emsp;🔹 Không chỉ là một doanh nghiệp hoạt động hiệu quả được nhìn nhận bởi nhà đầu tư và các tổ chức đánh giá chuyên nghiệp, Dphone còn được người lao động tin yêu khi lần thứ 4 liên tiếp được vinh danh trong TOP 50 Doanh nghiệp có môi trường làm việc tốt nhất Việt Nam và là doanh nghiệp xuất sắc nhất tại giải thưởng Vietnam HR Awards – “Chiến lược nhân sự hiệu quả”.</p>
                            <p><img alt="" src="https://www.apple.com/newsroom/images/live-action/new-store-opening/Seoul-Apple-Garosugil-In-Store-01242018_big.jpg.large.jpg" /></p>
                            <p><img alt="" src="https://www.thurrott.com/wp-content/uploads/sites/2/2019/06/huawei-store.jpg" /></p>
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
