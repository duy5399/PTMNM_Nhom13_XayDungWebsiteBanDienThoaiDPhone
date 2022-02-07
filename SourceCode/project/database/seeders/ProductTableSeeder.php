<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
//-------------------------------------------------Huawei-------------------------------------------------//
            [
                'product_id' => '1',
                'product_name' => 'Huawei Mate 30 Pro',
                'price_old' => '23000000',
                'price_new' => '13000000',
                'qty_product' => '300',
                'product_desc' => 'Màn hình:        OLED, 6.53", Full HD+
                                   Hệ điểu hành:    EMUI 10 (Android 11 không có Google)
                                   Chipset:         Kirin 990
                                   Camera sau:      Chính 40 MP & Phụ 40 MP, 8 MP, TOF 3D
                                   Camera trước:    Chính 32 MP & Phụ TOF 3D
                                   Ram:             8 GB
                                   Bộ nhớ trong:    256 GB
                                   SIM:             2 Nano SIM (SIM 2 chung khe thẻ nhớ) Hỗ trợ 4G
                                   Pin, Sạc:        4400 mAh, 40W (75% in 30 min)',
                'product_thumb' => 'huawei-mate-30-pro-1.jpg',
                'list_thumb_1' => 'huawei-mate-30-pro-2.jpg',
                'list_thumb_2' => 'huawei-mate-30-pro-3.jpg',
                'list_thumb_3' => 'huawei-mate-30-pro-4.jpg',
                'list_thumb_4' => 'huawei-mate-30-pro-5.jpg',
                'list_thumb_5' => 'huawei-mate-30-pro-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Camera "cân tất" mọi chiếc smartphone</span></strong></h5>

                                        <p>Điểm đáng chú ý trên Huawei Mate 30 Pro chắc chắn không thể bỏ qua thiết lập camera mới, bao gồm bốn cảm biến ở mặt lưng.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>4 camera sau của Huawei Mate 30 Pro bao gồm camera chính 40 MP với khẩu độ f/1.6 hỗ trợ OIS + camera tele 8 MP (f/2.4, OIS, zoom quang 30x) + camera 40 MP góc siêu rộng (F/1.8) + cảm biến 3D TOF.
                                        Máy cho khả năng quay video Super Slo-mo 720p ở tốc độ 7680 fps, một tốc độ "cực kỳ" khủng khiếp khi bạn biết tốc độ lớn nhất hiện nay đang chỉ là 960 fps trên những chiếc smartphone tới từ Samsung hay Sony.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Để quay được video 720@7.680 fps, chắc là Huawei Mate 30 Pro đã nhờ vào bộ xử lý hình ảnh ISP mới trên chipset Kirin 990.
                                        Mate 30 Pro cũng đang sử dụng cảm biến lớn RYYB giúp thu được nhiều ánh sáng hơn so với cảm biến RGB truyền thống.</p>
                
                                        <h5><strong><span style="font-size:24px">Hiệu năng mạnh mẽ hàng đầu</span></strong></h5>
                
                                        <p>Đây là chiếc smartphone đầu tiên trang bị bộ vi xử lý Kirin 990 mới tới từ Huawei.
                                        Mọi trải nghiệm trên Huawei Mate 30 Pro đều rất nhanh và mượt mà, cho dù bạn có sử dụng máy trong một thời gian dài đi chăng nữa.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Huawei đã tích hợp viên pin dung lượng lớn 4.500 mAh trên Mate 30 Pro giúp bạn sử dụng khá thoải mái cả ngày.
                                        Máy cũng hỗ trợ sạc nhanh 45 W giúp người dùng có thể sạc từ 0%-70% trong vòng 30 phút và hỗ trợ cả sạc không dây 27 W.</p>
                
                                        <h5><span style="font-size:24px"><strong>Màn hình thác nước hoàn toàn mới</strong></span></h5>
                
                                        <p>Không còn cụm camera hình vuông nữa mà là cụm camera hình tròn được bao quanh bởi một lớp kính đặc biệt trông khá lạ mắt.
                                        Cơ bản thì màn hình thác nước trên Huawei Mate 30 Pro có hai cạnh bên được làm cong tràn đẹp mắt, độ cong tương tự như flagship của Samsung nhưng còn ấn tượng hơn.
                                        Màn hình này nhìn khá "đã", tạo ra hiệu ứng thị giác tưởng như đây là màn hình không viền thực sự vậy.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Do sử dụng màn hình thác nước nên khi tăng giảm âm lượng thì bạn sẽ cần trượt ngón tay lên xuống cạnh điện thoại để điều chỉnh, chỉ cần nhấn đúp vào hai cạnh bên thì thanh điều chỉnh âm lượng sẽ hiển thị. Thao tác tăng giảm âm lượng được phản hồi bằng nhịp điệu rung nhẹ cho cảm giác trải nghiệm khá xịn xò, thích thú.
                                        Mặt sau của Huawei Mate 30 Pro khá bóng bẩy, nhưng được làm nhám nhằm hạn chế việc lộ quá nhiều mồ hôi và dấu vân tay.</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '3',
            ],
            [
                'product_id' => '2',
                'product_name' => 'Huawei P30 Pro',
                'price_old' => '13000000',
                'price_new' => '9500000',
                'qty_product' => '300',
                'product_desc' => 'Màn hình:        OLED, 6.53", Full HD+
                                   Hệ điểu hành:    EMUI 10 (Android 11 không có Google)
                                   Chipset:         Kirin 990
                                   Camera sau:      Chính 40 MP & Phụ 40 MP, 8 MP, TOF 3D
                                   Camera trước:    Chính 32 MP & Phụ TOF 3D
                                   Ram:             8 GB
                                   Bộ nhớ trong:    256 GB
                                   SIM:             2 Nano SIM (SIM 2 chung khe thẻ nhớ) Hỗ trợ 4G
                                   Pin, Sạc:        4400 mAh, 40W (75% in 30 min)',
                'product_thumb' => 'huawei-p30-pro-1.jpg',
                'list_thumb_1' => 'huawei-mate-30-pro-2.jpg',
                'list_thumb_2' => 'huawei-mate-30-pro-3.jpg',
                'list_thumb_3' => 'huawei-mate-30-pro-4.jpg',
                'list_thumb_4' => 'huawei-mate-30-pro-5.jpg',
                'list_thumb_5' => 'huawei-mate-30-pro-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Camera "cân tất" mọi chiếc smartphone</span></strong></h5>

                                        <p>Điểm đáng chú ý trên Huawei Mate 30 Pro chắc chắn không thể bỏ qua thiết lập camera mới, bao gồm bốn cảm biến ở mặt lưng.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>4 camera sau của Huawei Mate 30 Pro bao gồm camera chính 40 MP với khẩu độ f/1.6 hỗ trợ OIS + camera tele 8 MP (f/2.4, OIS, zoom quang 30x) + camera 40 MP góc siêu rộng (F/1.8) + cảm biến 3D TOF.
                                        Máy cho khả năng quay video Super Slo-mo 720p ở tốc độ 7680 fps, một tốc độ "cực kỳ" khủng khiếp khi bạn biết tốc độ lớn nhất hiện nay đang chỉ là 960 fps trên những chiếc smartphone tới từ Samsung hay Sony.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Để quay được video 720@7.680 fps, chắc là Huawei Mate 30 Pro đã nhờ vào bộ xử lý hình ảnh ISP mới trên chipset Kirin 990.
                                        Mate 30 Pro cũng đang sử dụng cảm biến lớn RYYB giúp thu được nhiều ánh sáng hơn so với cảm biến RGB truyền thống.</p>
                
                                        <h5><strong><span style="font-size:24px">Hiệu năng mạnh mẽ hàng đầu</span></strong></h5>
                
                                        <p>Đây là chiếc smartphone đầu tiên trang bị bộ vi xử lý Kirin 990 mới tới từ Huawei.
                                        Mọi trải nghiệm trên Huawei Mate 30 Pro đều rất nhanh và mượt mà, cho dù bạn có sử dụng máy trong một thời gian dài đi chăng nữa.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Huawei đã tích hợp viên pin dung lượng lớn 4.500 mAh trên Mate 30 Pro giúp bạn sử dụng khá thoải mái cả ngày.
                                        Máy cũng hỗ trợ sạc nhanh 45 W giúp người dùng có thể sạc từ 0%-70% trong vòng 30 phút và hỗ trợ cả sạc không dây 27 W.</p>
                
                                        <h5><span style="font-size:24px"><strong>Màn hình thác nước hoàn toàn mới</strong></span></h5>
                
                                        <p>Không còn cụm camera hình vuông nữa mà là cụm camera hình tròn được bao quanh bởi một lớp kính đặc biệt trông khá lạ mắt.
                                        Cơ bản thì màn hình thác nước trên Huawei Mate 30 Pro có hai cạnh bên được làm cong tràn đẹp mắt, độ cong tương tự như flagship của Samsung nhưng còn ấn tượng hơn.
                                        Màn hình này nhìn khá "đã", tạo ra hiệu ứng thị giác tưởng như đây là màn hình không viền thực sự vậy.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Do sử dụng màn hình thác nước nên khi tăng giảm âm lượng thì bạn sẽ cần trượt ngón tay lên xuống cạnh điện thoại để điều chỉnh, chỉ cần nhấn đúp vào hai cạnh bên thì thanh điều chỉnh âm lượng sẽ hiển thị. Thao tác tăng giảm âm lượng được phản hồi bằng nhịp điệu rung nhẹ cho cảm giác trải nghiệm khá xịn xò, thích thú.
                                        Mặt sau của Huawei Mate 30 Pro khá bóng bẩy, nhưng được làm nhám nhằm hạn chế việc lộ quá nhiều mồ hôi và dấu vân tay.</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '3',
            ],
            [
                'product_id' => '3',
                'product_name' => 'Huawei Mate 20 Pro',
                'price_old' => '15000000',
                'price_new' => '10000000',
                'qty_product' => '300',
                'product_desc' => 'Màn hình:        OLED, 6.53", Full HD+
                                   Hệ điểu hành:    EMUI 10 (Android 11 không có Google)
                                   Chipset:         Kirin 990
                                   Camera sau:      Chính 40 MP & Phụ 40 MP, 8 MP, TOF 3D
                                   Camera trước:    Chính 32 MP & Phụ TOF 3D
                                   Ram:             8 GB
                                   Bộ nhớ trong:    256 GB
                                   SIM:             2 Nano SIM (SIM 2 chung khe thẻ nhớ) Hỗ trợ 4G
                                   Pin, Sạc:        4400 mAh, 40W (75% in 30 min)',
                'product_thumb' => 'huawei-mate-20-pro-1.jpg',
                'list_thumb_1' => 'huawei-mate-30-pro-2.jpg',
                'list_thumb_2' => 'huawei-mate-30-pro-3.jpg',
                'list_thumb_3' => 'huawei-mate-30-pro-4.jpg',
                'list_thumb_4' => 'huawei-mate-30-pro-5.jpg',
                'list_thumb_5' => 'huawei-mate-30-pro-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Camera "cân tất" mọi chiếc smartphone</span></strong></h5>

                                        <p>Điểm đáng chú ý trên Huawei Mate 30 Pro chắc chắn không thể bỏ qua thiết lập camera mới, bao gồm bốn cảm biến ở mặt lưng.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>4 camera sau của Huawei Mate 30 Pro bao gồm camera chính 40 MP với khẩu độ f/1.6 hỗ trợ OIS + camera tele 8 MP (f/2.4, OIS, zoom quang 30x) + camera 40 MP góc siêu rộng (F/1.8) + cảm biến 3D TOF.
                                        Máy cho khả năng quay video Super Slo-mo 720p ở tốc độ 7680 fps, một tốc độ "cực kỳ" khủng khiếp khi bạn biết tốc độ lớn nhất hiện nay đang chỉ là 960 fps trên những chiếc smartphone tới từ Samsung hay Sony.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Để quay được video 720@7.680 fps, chắc là Huawei Mate 30 Pro đã nhờ vào bộ xử lý hình ảnh ISP mới trên chipset Kirin 990.
                                        Mate 30 Pro cũng đang sử dụng cảm biến lớn RYYB giúp thu được nhiều ánh sáng hơn so với cảm biến RGB truyền thống.</p>
                
                                        <h5><strong><span style="font-size:24px">Hiệu năng mạnh mẽ hàng đầu</span></strong></h5>
                
                                        <p>Đây là chiếc smartphone đầu tiên trang bị bộ vi xử lý Kirin 990 mới tới từ Huawei.
                                        Mọi trải nghiệm trên Huawei Mate 30 Pro đều rất nhanh và mượt mà, cho dù bạn có sử dụng máy trong một thời gian dài đi chăng nữa.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Huawei đã tích hợp viên pin dung lượng lớn 4.500 mAh trên Mate 30 Pro giúp bạn sử dụng khá thoải mái cả ngày.
                                        Máy cũng hỗ trợ sạc nhanh 45 W giúp người dùng có thể sạc từ 0%-70% trong vòng 30 phút và hỗ trợ cả sạc không dây 27 W.</p>
                
                                        <h5><span style="font-size:24px"><strong>Màn hình thác nước hoàn toàn mới</strong></span></h5>
                
                                        <p>Không còn cụm camera hình vuông nữa mà là cụm camera hình tròn được bao quanh bởi một lớp kính đặc biệt trông khá lạ mắt.
                                        Cơ bản thì màn hình thác nước trên Huawei Mate 30 Pro có hai cạnh bên được làm cong tràn đẹp mắt, độ cong tương tự như flagship của Samsung nhưng còn ấn tượng hơn.
                                        Màn hình này nhìn khá "đã", tạo ra hiệu ứng thị giác tưởng như đây là màn hình không viền thực sự vậy.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Do sử dụng màn hình thác nước nên khi tăng giảm âm lượng thì bạn sẽ cần trượt ngón tay lên xuống cạnh điện thoại để điều chỉnh, chỉ cần nhấn đúp vào hai cạnh bên thì thanh điều chỉnh âm lượng sẽ hiển thị. Thao tác tăng giảm âm lượng được phản hồi bằng nhịp điệu rung nhẹ cho cảm giác trải nghiệm khá xịn xò, thích thú.
                                        Mặt sau của Huawei Mate 30 Pro khá bóng bẩy, nhưng được làm nhám nhằm hạn chế việc lộ quá nhiều mồ hôi và dấu vân tay.</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '3',
            ],
            [
                'product_id' => '4',
                'product_name' => 'Huawei P40 Pro',
                'price_old' => '25000000',
                'price_new' => '20000000',
                'qty_product' => '300',
                'product_desc' => 'Màn hình:        OLED, 6.53", Full HD+
                                   Hệ điểu hành:    EMUI 10 (Android 11 không có Google)
                                   Chipset:         Kirin 990
                                   Camera sau:      Chính 40 MP & Phụ 40 MP, 8 MP, TOF 3D
                                   Camera trước:    Chính 32 MP & Phụ TOF 3D
                                   Ram:             8 GB
                                   Bộ nhớ trong:    256 GB
                                   SIM:             2 Nano SIM (SIM 2 chung khe thẻ nhớ) Hỗ trợ 4G
                                   Pin, Sạc:        4400 mAh, 40W (75% in 30 min)',
                'product_thumb' => 'huawei-p40-pro-1.jpg',
                'list_thumb_1' => 'huawei-mate-30-pro-2.jpg',
                'list_thumb_2' => 'huawei-mate-30-pro-3.jpg',
                'list_thumb_3' => 'huawei-mate-30-pro-4.jpg',
                'list_thumb_4' => 'huawei-mate-30-pro-5.jpg',
                'list_thumb_5' => 'huawei-mate-30-pro-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Camera "cân tất" mọi chiếc smartphone</span></strong></h5>

                                        <p>Điểm đáng chú ý trên Huawei Mate 30 Pro chắc chắn không thể bỏ qua thiết lập camera mới, bao gồm bốn cảm biến ở mặt lưng.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>4 camera sau của Huawei Mate 30 Pro bao gồm camera chính 40 MP với khẩu độ f/1.6 hỗ trợ OIS + camera tele 8 MP (f/2.4, OIS, zoom quang 30x) + camera 40 MP góc siêu rộng (F/1.8) + cảm biến 3D TOF.
                                        Máy cho khả năng quay video Super Slo-mo 720p ở tốc độ 7680 fps, một tốc độ "cực kỳ" khủng khiếp khi bạn biết tốc độ lớn nhất hiện nay đang chỉ là 960 fps trên những chiếc smartphone tới từ Samsung hay Sony.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Để quay được video 720@7.680 fps, chắc là Huawei Mate 30 Pro đã nhờ vào bộ xử lý hình ảnh ISP mới trên chipset Kirin 990.
                                        Mate 30 Pro cũng đang sử dụng cảm biến lớn RYYB giúp thu được nhiều ánh sáng hơn so với cảm biến RGB truyền thống.</p>
                
                                        <h5><strong><span style="font-size:24px">Hiệu năng mạnh mẽ hàng đầu</span></strong></h5>
                
                                        <p>Đây là chiếc smartphone đầu tiên trang bị bộ vi xử lý Kirin 990 mới tới từ Huawei.
                                        Mọi trải nghiệm trên Huawei Mate 30 Pro đều rất nhanh và mượt mà, cho dù bạn có sử dụng máy trong một thời gian dài đi chăng nữa.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Huawei đã tích hợp viên pin dung lượng lớn 4.500 mAh trên Mate 30 Pro giúp bạn sử dụng khá thoải mái cả ngày.
                                        Máy cũng hỗ trợ sạc nhanh 45 W giúp người dùng có thể sạc từ 0%-70% trong vòng 30 phút và hỗ trợ cả sạc không dây 27 W.</p>
                
                                        <h5><span style="font-size:24px"><strong>Màn hình thác nước hoàn toàn mới</strong></span></h5>
                
                                        <p>Không còn cụm camera hình vuông nữa mà là cụm camera hình tròn được bao quanh bởi một lớp kính đặc biệt trông khá lạ mắt.
                                        Cơ bản thì màn hình thác nước trên Huawei Mate 30 Pro có hai cạnh bên được làm cong tràn đẹp mắt, độ cong tương tự như flagship của Samsung nhưng còn ấn tượng hơn.
                                        Màn hình này nhìn khá "đã", tạo ra hiệu ứng thị giác tưởng như đây là màn hình không viền thực sự vậy.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Do sử dụng màn hình thác nước nên khi tăng giảm âm lượng thì bạn sẽ cần trượt ngón tay lên xuống cạnh điện thoại để điều chỉnh, chỉ cần nhấn đúp vào hai cạnh bên thì thanh điều chỉnh âm lượng sẽ hiển thị. Thao tác tăng giảm âm lượng được phản hồi bằng nhịp điệu rung nhẹ cho cảm giác trải nghiệm khá xịn xò, thích thú.
                                        Mặt sau của Huawei Mate 30 Pro khá bóng bẩy, nhưng được làm nhám nhằm hạn chế việc lộ quá nhiều mồ hôi và dấu vân tay.</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '3',
            ],
            [
                'product_id' => '5',
                'product_name' => 'Huawei P40',
                'price_old' => '19000000',
                'price_new' => '17500000',
                'qty_product' => '300',
                'product_desc' => 'Màn hình:        OLED, 6.53", Full HD+
                                   Hệ điểu hành:    EMUI 10 (Android 11 không có Google)
                                   Chipset:         Kirin 990
                                   Camera sau:      Chính 40 MP & Phụ 40 MP, 8 MP, TOF 3D
                                   Camera trước:    Chính 32 MP & Phụ TOF 3D
                                   Ram:             8 GB
                                   Bộ nhớ trong:    256 GB
                                   SIM:             2 Nano SIM (SIM 2 chung khe thẻ nhớ) Hỗ trợ 4G
                                   Pin, Sạc:        4400 mAh, 40W (75% in 30 min)',
                'product_thumb' => 'huawei-p40-1.jpg',
                'list_thumb_1' => 'huawei-mate-30-pro-2.jpg',
                'list_thumb_2' => 'huawei-mate-30-pro-3.jpg',
                'list_thumb_3' => 'huawei-mate-30-pro-4.jpg',
                'list_thumb_4' => 'huawei-mate-30-pro-5.jpg',
                'list_thumb_5' => 'huawei-mate-30-pro-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Camera "cân tất" mọi chiếc smartphone</span></strong></h5>

                                        <p>Điểm đáng chú ý trên Huawei Mate 30 Pro chắc chắn không thể bỏ qua thiết lập camera mới, bao gồm bốn cảm biến ở mặt lưng.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>4 camera sau của Huawei Mate 30 Pro bao gồm camera chính 40 MP với khẩu độ f/1.6 hỗ trợ OIS + camera tele 8 MP (f/2.4, OIS, zoom quang 30x) + camera 40 MP góc siêu rộng (F/1.8) + cảm biến 3D TOF.
                                        Máy cho khả năng quay video Super Slo-mo 720p ở tốc độ 7680 fps, một tốc độ "cực kỳ" khủng khiếp khi bạn biết tốc độ lớn nhất hiện nay đang chỉ là 960 fps trên những chiếc smartphone tới từ Samsung hay Sony.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Để quay được video 720@7.680 fps, chắc là Huawei Mate 30 Pro đã nhờ vào bộ xử lý hình ảnh ISP mới trên chipset Kirin 990.
                                        Mate 30 Pro cũng đang sử dụng cảm biến lớn RYYB giúp thu được nhiều ánh sáng hơn so với cảm biến RGB truyền thống.</p>
                
                                        <h5><strong><span style="font-size:24px">Hiệu năng mạnh mẽ hàng đầu</span></strong></h5>
                
                                        <p>Đây là chiếc smartphone đầu tiên trang bị bộ vi xử lý Kirin 990 mới tới từ Huawei.
                                        Mọi trải nghiệm trên Huawei Mate 30 Pro đều rất nhanh và mượt mà, cho dù bạn có sử dụng máy trong một thời gian dài đi chăng nữa.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Huawei đã tích hợp viên pin dung lượng lớn 4.500 mAh trên Mate 30 Pro giúp bạn sử dụng khá thoải mái cả ngày.
                                        Máy cũng hỗ trợ sạc nhanh 45 W giúp người dùng có thể sạc từ 0%-70% trong vòng 30 phút và hỗ trợ cả sạc không dây 27 W.</p>
                
                                        <h5><span style="font-size:24px"><strong>Màn hình thác nước hoàn toàn mới</strong></span></h5>
                
                                        <p>Không còn cụm camera hình vuông nữa mà là cụm camera hình tròn được bao quanh bởi một lớp kính đặc biệt trông khá lạ mắt.
                                        Cơ bản thì màn hình thác nước trên Huawei Mate 30 Pro có hai cạnh bên được làm cong tràn đẹp mắt, độ cong tương tự như flagship của Samsung nhưng còn ấn tượng hơn.
                                        Màn hình này nhìn khá "đã", tạo ra hiệu ứng thị giác tưởng như đây là màn hình không viền thực sự vậy.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Do sử dụng màn hình thác nước nên khi tăng giảm âm lượng thì bạn sẽ cần trượt ngón tay lên xuống cạnh điện thoại để điều chỉnh, chỉ cần nhấn đúp vào hai cạnh bên thì thanh điều chỉnh âm lượng sẽ hiển thị. Thao tác tăng giảm âm lượng được phản hồi bằng nhịp điệu rung nhẹ cho cảm giác trải nghiệm khá xịn xò, thích thú.
                                        Mặt sau của Huawei Mate 30 Pro khá bóng bẩy, nhưng được làm nhám nhằm hạn chế việc lộ quá nhiều mồ hôi và dấu vân tay.</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '3',
            ],
            [
                'product_id' => '6',
                'product_name' => 'Huawei Nova 7i',
                'price_old' => '7000000',
                'price_new' => '5000000',
                'qty_product' => '300',
                'product_desc' => 'Màn hình:        OLED, 6.53", Full HD+
                                   Hệ điểu hành:    EMUI 10 (Android 11 không có Google)
                                   Chipset:         Kirin 990
                                   Camera sau:      Chính 40 MP & Phụ 40 MP, 8 MP, TOF 3D
                                   Camera trước:    Chính 32 MP & Phụ TOF 3D
                                   Ram:             8 GB
                                   Bộ nhớ trong:    256 GB
                                   SIM:             2 Nano SIM (SIM 2 chung khe thẻ nhớ) Hỗ trợ 4G
                                   Pin, Sạc:        4400 mAh, 40W (75% in 30 min)',
                'product_thumb' => 'huawei-nova-7i-1.jpg',
                'list_thumb_1' => 'huawei-mate-30-pro-2.jpg',
                'list_thumb_2' => 'huawei-mate-30-pro-3.jpg',
                'list_thumb_3' => 'huawei-mate-30-pro-4.jpg',
                'list_thumb_4' => 'huawei-mate-30-pro-5.jpg',
                'list_thumb_5' => 'huawei-mate-30-pro-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Camera "cân tất" mọi chiếc smartphone</span></strong></h5>

                                        <p>Điểm đáng chú ý trên Huawei Mate 30 Pro chắc chắn không thể bỏ qua thiết lập camera mới, bao gồm bốn cảm biến ở mặt lưng.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>4 camera sau của Huawei Mate 30 Pro bao gồm camera chính 40 MP với khẩu độ f/1.6 hỗ trợ OIS + camera tele 8 MP (f/2.4, OIS, zoom quang 30x) + camera 40 MP góc siêu rộng (F/1.8) + cảm biến 3D TOF.
                                        Máy cho khả năng quay video Super Slo-mo 720p ở tốc độ 7680 fps, một tốc độ "cực kỳ" khủng khiếp khi bạn biết tốc độ lớn nhất hiện nay đang chỉ là 960 fps trên những chiếc smartphone tới từ Samsung hay Sony.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Để quay được video 720@7.680 fps, chắc là Huawei Mate 30 Pro đã nhờ vào bộ xử lý hình ảnh ISP mới trên chipset Kirin 990.
                                        Mate 30 Pro cũng đang sử dụng cảm biến lớn RYYB giúp thu được nhiều ánh sáng hơn so với cảm biến RGB truyền thống.</p>
                
                                        <h5><strong><span style="font-size:24px">Hiệu năng mạnh mẽ hàng đầu</span></strong></h5>
                
                                        <p>Đây là chiếc smartphone đầu tiên trang bị bộ vi xử lý Kirin 990 mới tới từ Huawei.
                                        Mọi trải nghiệm trên Huawei Mate 30 Pro đều rất nhanh và mượt mà, cho dù bạn có sử dụng máy trong một thời gian dài đi chăng nữa.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Huawei đã tích hợp viên pin dung lượng lớn 4.500 mAh trên Mate 30 Pro giúp bạn sử dụng khá thoải mái cả ngày.
                                        Máy cũng hỗ trợ sạc nhanh 45 W giúp người dùng có thể sạc từ 0%-70% trong vòng 30 phút và hỗ trợ cả sạc không dây 27 W.</p>
                
                                        <h5><span style="font-size:24px"><strong>Màn hình thác nước hoàn toàn mới</strong></span></h5>
                
                                        <p>Không còn cụm camera hình vuông nữa mà là cụm camera hình tròn được bao quanh bởi một lớp kính đặc biệt trông khá lạ mắt.
                                        Cơ bản thì màn hình thác nước trên Huawei Mate 30 Pro có hai cạnh bên được làm cong tràn đẹp mắt, độ cong tương tự như flagship của Samsung nhưng còn ấn tượng hơn.
                                        Màn hình này nhìn khá "đã", tạo ra hiệu ứng thị giác tưởng như đây là màn hình không viền thực sự vậy.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Do sử dụng màn hình thác nước nên khi tăng giảm âm lượng thì bạn sẽ cần trượt ngón tay lên xuống cạnh điện thoại để điều chỉnh, chỉ cần nhấn đúp vào hai cạnh bên thì thanh điều chỉnh âm lượng sẽ hiển thị. Thao tác tăng giảm âm lượng được phản hồi bằng nhịp điệu rung nhẹ cho cảm giác trải nghiệm khá xịn xò, thích thú.
                                        Mặt sau của Huawei Mate 30 Pro khá bóng bẩy, nhưng được làm nhám nhằm hạn chế việc lộ quá nhiều mồ hôi và dấu vân tay.</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '3',
            ],
            [
                'product_id' => '7',
                'product_name' => 'Huawei Y9 Prime (2019)',
                'price_old' => '6000000',
                'price_new' => '4500000',
                'qty_product' => '300',
                'product_desc' => 'Màn hình:        OLED, 6.53", Full HD+
                                   Hệ điểu hành:    EMUI 10 (Android 11 không có Google)
                                   Chipset:         Kirin 990
                                   Camera sau:      Chính 40 MP & Phụ 40 MP, 8 MP, TOF 3D
                                   Camera trước:    Chính 32 MP & Phụ TOF 3D
                                   Ram:             8 GB
                                   Bộ nhớ trong:    256 GB
                                   SIM:             2 Nano SIM (SIM 2 chung khe thẻ nhớ) Hỗ trợ 4G
                                   Pin, Sạc:        4400 mAh, 40W (75% in 30 min)',
                'product_thumb' => 'huawei-y9-prime-2019-1.jpg',
                'list_thumb_1' => 'huawei-mate-30-pro-2.jpg',
                'list_thumb_2' => 'huawei-mate-30-pro-3.jpg',
                'list_thumb_3' => 'huawei-mate-30-pro-4.jpg',
                'list_thumb_4' => 'huawei-mate-30-pro-5.jpg',
                'list_thumb_5' => 'huawei-mate-30-pro-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Camera "cân tất" mọi chiếc smartphone</span></strong></h5>

                                        <p>Điểm đáng chú ý trên Huawei Mate 30 Pro chắc chắn không thể bỏ qua thiết lập camera mới, bao gồm bốn cảm biến ở mặt lưng.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>4 camera sau của Huawei Mate 30 Pro bao gồm camera chính 40 MP với khẩu độ f/1.6 hỗ trợ OIS + camera tele 8 MP (f/2.4, OIS, zoom quang 30x) + camera 40 MP góc siêu rộng (F/1.8) + cảm biến 3D TOF.
                                        Máy cho khả năng quay video Super Slo-mo 720p ở tốc độ 7680 fps, một tốc độ "cực kỳ" khủng khiếp khi bạn biết tốc độ lớn nhất hiện nay đang chỉ là 960 fps trên những chiếc smartphone tới từ Samsung hay Sony.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Để quay được video 720@7.680 fps, chắc là Huawei Mate 30 Pro đã nhờ vào bộ xử lý hình ảnh ISP mới trên chipset Kirin 990.
                                        Mate 30 Pro cũng đang sử dụng cảm biến lớn RYYB giúp thu được nhiều ánh sáng hơn so với cảm biến RGB truyền thống.</p>
                
                                        <h5><strong><span style="font-size:24px">Hiệu năng mạnh mẽ hàng đầu</span></strong></h5>
                
                                        <p>Đây là chiếc smartphone đầu tiên trang bị bộ vi xử lý Kirin 990 mới tới từ Huawei.
                                        Mọi trải nghiệm trên Huawei Mate 30 Pro đều rất nhanh và mượt mà, cho dù bạn có sử dụng máy trong một thời gian dài đi chăng nữa.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Huawei đã tích hợp viên pin dung lượng lớn 4.500 mAh trên Mate 30 Pro giúp bạn sử dụng khá thoải mái cả ngày.
                                        Máy cũng hỗ trợ sạc nhanh 45 W giúp người dùng có thể sạc từ 0%-70% trong vòng 30 phút và hỗ trợ cả sạc không dây 27 W.</p>
                
                                        <h5><span style="font-size:24px"><strong>Màn hình thác nước hoàn toàn mới</strong></span></h5>
                
                                        <p>Không còn cụm camera hình vuông nữa mà là cụm camera hình tròn được bao quanh bởi một lớp kính đặc biệt trông khá lạ mắt.
                                        Cơ bản thì màn hình thác nước trên Huawei Mate 30 Pro có hai cạnh bên được làm cong tràn đẹp mắt, độ cong tương tự như flagship của Samsung nhưng còn ấn tượng hơn.
                                        Màn hình này nhìn khá "đã", tạo ra hiệu ứng thị giác tưởng như đây là màn hình không viền thực sự vậy.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Do sử dụng màn hình thác nước nên khi tăng giảm âm lượng thì bạn sẽ cần trượt ngón tay lên xuống cạnh điện thoại để điều chỉnh, chỉ cần nhấn đúp vào hai cạnh bên thì thanh điều chỉnh âm lượng sẽ hiển thị. Thao tác tăng giảm âm lượng được phản hồi bằng nhịp điệu rung nhẹ cho cảm giác trải nghiệm khá xịn xò, thích thú.
                                        Mặt sau của Huawei Mate 30 Pro khá bóng bẩy, nhưng được làm nhám nhằm hạn chế việc lộ quá nhiều mồ hôi và dấu vân tay.</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '3',
            ],
            [
                'product_id' => '8',
                'product_name' => 'Huawei Mate 20',
                'price_old' => '10000000',
                'price_new' => '7500000',
                'qty_product' => '300',
                'product_desc' => 'Màn hình:        OLED, 6.53", Full HD+
                                   Hệ điểu hành:    EMUI 10 (Android 11 không có Google)
                                   Chipset:         Kirin 990
                                   Camera sau:      Chính 40 MP & Phụ 40 MP, 8 MP, TOF 3D
                                   Camera trước:    Chính 32 MP & Phụ TOF 3D
                                   Ram:             8 GB
                                   Bộ nhớ trong:    256 GB
                                   SIM:             2 Nano SIM (SIM 2 chung khe thẻ nhớ) Hỗ trợ 4G
                                   Pin, Sạc:        4400 mAh, 40W (75% in 30 min)',
                'product_thumb' => 'huawei-mate-20-1.jpg',
                'list_thumb_1' => 'huawei-mate-30-pro-2.jpg',
                'list_thumb_2' => 'huawei-mate-30-pro-3.jpg',
                'list_thumb_3' => 'huawei-mate-30-pro-4.jpg',
                'list_thumb_4' => 'huawei-mate-30-pro-5.jpg',
                'list_thumb_5' => 'huawei-mate-30-pro-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Camera "cân tất" mọi chiếc smartphone</span></strong></h5>

                                        <p>Điểm đáng chú ý trên Huawei Mate 30 Pro chắc chắn không thể bỏ qua thiết lập camera mới, bao gồm bốn cảm biến ở mặt lưng.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>4 camera sau của Huawei Mate 30 Pro bao gồm camera chính 40 MP với khẩu độ f/1.6 hỗ trợ OIS + camera tele 8 MP (f/2.4, OIS, zoom quang 30x) + camera 40 MP góc siêu rộng (F/1.8) + cảm biến 3D TOF.
                                        Máy cho khả năng quay video Super Slo-mo 720p ở tốc độ 7680 fps, một tốc độ "cực kỳ" khủng khiếp khi bạn biết tốc độ lớn nhất hiện nay đang chỉ là 960 fps trên những chiếc smartphone tới từ Samsung hay Sony.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Để quay được video 720@7.680 fps, chắc là Huawei Mate 30 Pro đã nhờ vào bộ xử lý hình ảnh ISP mới trên chipset Kirin 990.
                                        Mate 30 Pro cũng đang sử dụng cảm biến lớn RYYB giúp thu được nhiều ánh sáng hơn so với cảm biến RGB truyền thống.</p>
                
                                        <h5><strong><span style="font-size:24px">Hiệu năng mạnh mẽ hàng đầu</span></strong></h5>
                
                                        <p>Đây là chiếc smartphone đầu tiên trang bị bộ vi xử lý Kirin 990 mới tới từ Huawei.
                                        Mọi trải nghiệm trên Huawei Mate 30 Pro đều rất nhanh và mượt mà, cho dù bạn có sử dụng máy trong một thời gian dài đi chăng nữa.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Huawei đã tích hợp viên pin dung lượng lớn 4.500 mAh trên Mate 30 Pro giúp bạn sử dụng khá thoải mái cả ngày.
                                        Máy cũng hỗ trợ sạc nhanh 45 W giúp người dùng có thể sạc từ 0%-70% trong vòng 30 phút và hỗ trợ cả sạc không dây 27 W.</p>
                
                                        <h5><span style="font-size:24px"><strong>Màn hình thác nước hoàn toàn mới</strong></span></h5>
                
                                        <p>Không còn cụm camera hình vuông nữa mà là cụm camera hình tròn được bao quanh bởi một lớp kính đặc biệt trông khá lạ mắt.
                                        Cơ bản thì màn hình thác nước trên Huawei Mate 30 Pro có hai cạnh bên được làm cong tràn đẹp mắt, độ cong tương tự như flagship của Samsung nhưng còn ấn tượng hơn.
                                        Màn hình này nhìn khá "đã", tạo ra hiệu ứng thị giác tưởng như đây là màn hình không viền thực sự vậy.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Do sử dụng màn hình thác nước nên khi tăng giảm âm lượng thì bạn sẽ cần trượt ngón tay lên xuống cạnh điện thoại để điều chỉnh, chỉ cần nhấn đúp vào hai cạnh bên thì thanh điều chỉnh âm lượng sẽ hiển thị. Thao tác tăng giảm âm lượng được phản hồi bằng nhịp điệu rung nhẹ cho cảm giác trải nghiệm khá xịn xò, thích thú.
                                        Mặt sau của Huawei Mate 30 Pro khá bóng bẩy, nhưng được làm nhám nhằm hạn chế việc lộ quá nhiều mồ hôi và dấu vân tay.</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '3',
            ],
            [
                'product_id' => '9',
                'product_name' => 'Huawei Nova 5T',
                'price_old' => '6000000',
                'price_new' => '4500000',
                'qty_product' => '300',
                'product_desc' => 'Màn hình:        OLED, 6.53", Full HD+
                                   Hệ điểu hành:    EMUI 10 (Android 11 không có Google)
                                   Chipset:         Kirin 990
                                   Camera sau:      Chính 40 MP & Phụ 40 MP, 8 MP, TOF 3D
                                   Camera trước:    Chính 32 MP & Phụ TOF 3D
                                   Ram:             8 GB
                                   Bộ nhớ trong:    256 GB
                                   SIM:             2 Nano SIM (SIM 2 chung khe thẻ nhớ) Hỗ trợ 4G
                                   Pin, Sạc:        4400 mAh, 40W (75% in 30 min)',
                'product_thumb' => 'huawei-nova-5t-1.jpg',
                'list_thumb_1' => 'huawei-mate-30-pro-2.jpg',
                'list_thumb_2' => 'huawei-mate-30-pro-3.jpg',
                'list_thumb_3' => 'huawei-mate-30-pro-4.jpg',
                'list_thumb_4' => 'huawei-mate-30-pro-5.jpg',
                'list_thumb_5' => 'huawei-mate-30-pro-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Camera "cân tất" mọi chiếc smartphone</span></strong></h5>

                                        <p>Điểm đáng chú ý trên Huawei Mate 30 Pro chắc chắn không thể bỏ qua thiết lập camera mới, bao gồm bốn cảm biến ở mặt lưng.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>4 camera sau của Huawei Mate 30 Pro bao gồm camera chính 40 MP với khẩu độ f/1.6 hỗ trợ OIS + camera tele 8 MP (f/2.4, OIS, zoom quang 30x) + camera 40 MP góc siêu rộng (F/1.8) + cảm biến 3D TOF.
                                        Máy cho khả năng quay video Super Slo-mo 720p ở tốc độ 7680 fps, một tốc độ "cực kỳ" khủng khiếp khi bạn biết tốc độ lớn nhất hiện nay đang chỉ là 960 fps trên những chiếc smartphone tới từ Samsung hay Sony.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Để quay được video 720@7.680 fps, chắc là Huawei Mate 30 Pro đã nhờ vào bộ xử lý hình ảnh ISP mới trên chipset Kirin 990.
                                        Mate 30 Pro cũng đang sử dụng cảm biến lớn RYYB giúp thu được nhiều ánh sáng hơn so với cảm biến RGB truyền thống.</p>
                
                                        <h5><strong><span style="font-size:24px">Hiệu năng mạnh mẽ hàng đầu</span></strong></h5>
                
                                        <p>Đây là chiếc smartphone đầu tiên trang bị bộ vi xử lý Kirin 990 mới tới từ Huawei.
                                        Mọi trải nghiệm trên Huawei Mate 30 Pro đều rất nhanh và mượt mà, cho dù bạn có sử dụng máy trong một thời gian dài đi chăng nữa.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Huawei đã tích hợp viên pin dung lượng lớn 4.500 mAh trên Mate 30 Pro giúp bạn sử dụng khá thoải mái cả ngày.
                                        Máy cũng hỗ trợ sạc nhanh 45 W giúp người dùng có thể sạc từ 0%-70% trong vòng 30 phút và hỗ trợ cả sạc không dây 27 W.</p>
                
                                        <h5><span style="font-size:24px"><strong>Màn hình thác nước hoàn toàn mới</strong></span></h5>
                
                                        <p>Không còn cụm camera hình vuông nữa mà là cụm camera hình tròn được bao quanh bởi một lớp kính đặc biệt trông khá lạ mắt.
                                        Cơ bản thì màn hình thác nước trên Huawei Mate 30 Pro có hai cạnh bên được làm cong tràn đẹp mắt, độ cong tương tự như flagship của Samsung nhưng còn ấn tượng hơn.
                                        Màn hình này nhìn khá "đã", tạo ra hiệu ứng thị giác tưởng như đây là màn hình không viền thực sự vậy.</p>
                
                                        <p><img alt="" src="public/upload/images/huawei-mate-30-pro-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Do sử dụng màn hình thác nước nên khi tăng giảm âm lượng thì bạn sẽ cần trượt ngón tay lên xuống cạnh điện thoại để điều chỉnh, chỉ cần nhấn đúp vào hai cạnh bên thì thanh điều chỉnh âm lượng sẽ hiển thị. Thao tác tăng giảm âm lượng được phản hồi bằng nhịp điệu rung nhẹ cho cảm giác trải nghiệm khá xịn xò, thích thú.
                                        Mặt sau của Huawei Mate 30 Pro khá bóng bẩy, nhưng được làm nhám nhằm hạn chế việc lộ quá nhiều mồ hôi và dấu vân tay.</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '3',
            ],
//-------------------------------------------------Xiaomi-------------------------------------------------//
            [
                'product_id' => '10',
                'product_name' => 'Xiaomi Mi Max Alpha',
                'price_old' => '99990000',
                'price_new' => '50000000',
                'qty_product' => '900',
                'product_desc' =>  'Màn hình:       Super AMOLED, 7.92"
                                    Hệ điểu hành:   MIUI 12 (Android 11)
                                    Chipset:        Snapdragon 855+
                                    Camera sau:     Chính 108 MP & Phụ 20 MP, 12 MP
                                    Camera trước:   Chính 108 MP & Phụ 20 MP, 12 MP
                                    Ram:            12 GB
                                    Bộ nhớ trong:   512 GB
                                    SIM:            2 Nano SIM (SIM 2 chung khe thẻ nhớ) Hỗ trợ 5G
                                    Pin, Sạc:       4050 mAh, 40W (75% in 30 min)',
                'product_thumb' => 'xiaomi-mi-mix-alpha-1.jpg',
                'list_thumb_1' => 'xiaomi-mi-mix-alpha-2.jpg',
                'list_thumb_2' => 'xiaomi-mi-mix-alpha-3.jpg',
                'list_thumb_3' => 'xiaomi-mi-mix-alpha-4.jpg',
                'list_thumb_4' => 'xiaomi-mi-mix-alpha-5.jpg',
                'list_thumb_5' => 'xiaomi-mi-mix-alpha-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Thiết kế vượt ra mọi giới hạn</span></strong></h5>

                                        <p>Mi MIX Alpha sở hữu một thiết kế vô cùng độc đáo, với màn hình bao quanh từ phía mặt trước, qua cả hai cạnh bên và vòng ra tận phía sau, chỉ chừa lại một phần nơi đặt cụm camera, đèn flash và logo Mi MIX.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Điều này giúp màn hình của máy đạt tỷ lệ so với thân máy lên tới 180% và kích thước màn hình đạt 7.92 inch.
                                        Ngoài ra chiếc smartphone này còn có các cạnh trên và cạnh dưới rất mỏng và được làm từ titan cùng loại dùng trong ngành hàng không.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Điều này giúp trọng lượng của máy nhẹ hơn đáng kể so với những chiếc máy sử dụng khung thép hay kim loại thông thường.
                                        Máy không có khung giữa chứa các nút nguồn và nút âm lượng vật lý hoặc phím cứng nào khác mà giờ đây tất cả đã biến thành phím cảm ứng.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Xiaomi cho biết họ đã sử dụng AI và các cảm biến đặc biệt để vô hiệu hóa những cú chạm không mong muốn ở hai cạnh bên của máy.
                                        Thật khó có thể tin được là một cái điện thoại như thế này có thể xuất hiện vào năm 2019, chắc chắn bạn sẽ bị ấn tượng ngay bởi thiết kế màn hình này.</p>
                
                                        <h5><strong><span style="font-size:24px">Camera 108 MP</span></strong></h5>
                
                                        <p>Xiaomi Mi MIX Alpha là điện thoại thông minh đầu tiên trên thế giới có cảm biến camera độ phân giải 108 MP.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Cảm biến thứ 2 có độ phân giải 12 MP với khả năng zoom quang 2X cùng một cảm biến góc siêu rộng 20 MP.
                                        Chiếc điện thoại này sẽ không có camera trước, bởi khi cần chụp selfie, bạn chỉ cần xoay chiếc smartphone lại và sử dụng phần màn hình phía sau của máy.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-11.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Máy sử dụng cảm biến camera Samsung ISOCELL Bright HMX và có kích thước cực lớn với cảm biến 1/1.33 inch.
                                        Thuật toán pixel binning 2x2 mới giúp ảnh chụp ra có độ phân giải 27 MP và còn hỗ trợ tốt khả năng chụp ảnh trong điều kiện ánh sáng yếu.</p>
                
                                        <h5><span style="font-size:24px"><strong>Hiệu năng mạnh mẽ hàng đầu thế giới</strong></span></h5>
                
                                        <p>Về cấu hình, Mi MIX Alpha được trang bị vi xử lý Snapdragon 855 Plus, RAM 12 GB, bộ nhớ UFS 3.0 512 GB.
                                        Những trang bị này đảm bảo cho bạn có thể thoải mái chơi mọi tựa game nặng nhất hiện nay trên Google Play mà không sợ hiện tượng giật lag xảy ra.
                                        Máy còn hỗ trợ kết nối mạng 5G tốc độ cao đảm bảo người dùng có thể sử dụng tốc độ kết nối không dây một cách nhanh nhất có thể.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-12.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Mi MIX Alpha là chiếc điện thoại pin trâu sở hữu dung lượng pin 4000 mAh hứa hẹn cũng sẽ cung cấp năng lượng hoạt động vừa đủ cho một ngày.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-13.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Bên cạnh đó Mi MIX Alpha cũng hỗ trợ công nghệ sạc nhanh lên tới 40W giúp bạn rút ngắn được đáng kể thời gian chờ sạc pin.</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '2',
            ],
            [
                'product_id' => '11',
                'product_name' => 'Xiaomi Mi 11 5G',
                'price_old' => '21990000',
                'price_new' => '16490000',
                'qty_product' => '900',
                'product_desc' =>  'Màn hình:       Super AMOLED, 7.92"
                                    Hệ điểu hành:   MIUI 12 (Android 11)
                                    Chipset:        Snapdragon 855+
                                    Camera sau:     Chính 108 MP & Phụ 20 MP, 12 MP
                                    Camera trước:   Chính 108 MP & Phụ 20 MP, 12 MP
                                    Ram:            12 GB
                                    Bộ nhớ trong:   512 GB
                                    SIM:            2 Nano SIM (SIM 2 chung khe thẻ nhớ) Hỗ trợ 5G
                                    Pin, Sạc:       4050 mAh, 40W (75% in 30 min)',
                'product_thumb' => 'xiaomi-mi-11-1.jpg',
                'list_thumb_1' => 'xiaomi-mi-mix-alpha-2.jpg',
                'list_thumb_2' => 'xiaomi-mi-mix-alpha-3.jpg',
                'list_thumb_3' => 'xiaomi-mi-mix-alpha-4.jpg',
                'list_thumb_4' => 'xiaomi-mi-mix-alpha-5.jpg',
                'list_thumb_5' => 'xiaomi-mi-mix-alpha-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Thiết kế vượt ra mọi giới hạn</span></strong></h5>

                                        <p>Mi MIX Alpha sở hữu một thiết kế vô cùng độc đáo, với màn hình bao quanh từ phía mặt trước, qua cả hai cạnh bên và vòng ra tận phía sau, chỉ chừa lại một phần nơi đặt cụm camera, đèn flash và logo Mi MIX.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Điều này giúp màn hình của máy đạt tỷ lệ so với thân máy lên tới 180% và kích thước màn hình đạt 7.92 inch.
                                        Ngoài ra chiếc smartphone này còn có các cạnh trên và cạnh dưới rất mỏng và được làm từ titan cùng loại dùng trong ngành hàng không.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Điều này giúp trọng lượng của máy nhẹ hơn đáng kể so với những chiếc máy sử dụng khung thép hay kim loại thông thường.
                                        Máy không có khung giữa chứa các nút nguồn và nút âm lượng vật lý hoặc phím cứng nào khác mà giờ đây tất cả đã biến thành phím cảm ứng.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Xiaomi cho biết họ đã sử dụng AI và các cảm biến đặc biệt để vô hiệu hóa những cú chạm không mong muốn ở hai cạnh bên của máy.
                                        Thật khó có thể tin được là một cái điện thoại như thế này có thể xuất hiện vào năm 2019, chắc chắn bạn sẽ bị ấn tượng ngay bởi thiết kế màn hình này.</p>
                
                                        <h5><strong><span style="font-size:24px">Camera 108 MP</span></strong></h5>
                
                                        <p>Xiaomi Mi MIX Alpha là điện thoại thông minh đầu tiên trên thế giới có cảm biến camera độ phân giải 108 MP.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Cảm biến thứ 2 có độ phân giải 12 MP với khả năng zoom quang 2X cùng một cảm biến góc siêu rộng 20 MP.
                                        Chiếc điện thoại này sẽ không có camera trước, bởi khi cần chụp selfie, bạn chỉ cần xoay chiếc smartphone lại và sử dụng phần màn hình phía sau của máy.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-11.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Máy sử dụng cảm biến camera Samsung ISOCELL Bright HMX và có kích thước cực lớn với cảm biến 1/1.33 inch.
                                        Thuật toán pixel binning 2x2 mới giúp ảnh chụp ra có độ phân giải 27 MP và còn hỗ trợ tốt khả năng chụp ảnh trong điều kiện ánh sáng yếu.</p>
                
                                        <h5><span style="font-size:24px"><strong>Hiệu năng mạnh mẽ hàng đầu thế giới</strong></span></h5>
                
                                        <p>Về cấu hình, Mi MIX Alpha được trang bị vi xử lý Snapdragon 855 Plus, RAM 12 GB, bộ nhớ UFS 3.0 512 GB.
                                        Những trang bị này đảm bảo cho bạn có thể thoải mái chơi mọi tựa game nặng nhất hiện nay trên Google Play mà không sợ hiện tượng giật lag xảy ra.
                                        Máy còn hỗ trợ kết nối mạng 5G tốc độ cao đảm bảo người dùng có thể sử dụng tốc độ kết nối không dây một cách nhanh nhất có thể.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-12.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Mi MIX Alpha là chiếc điện thoại pin trâu sở hữu dung lượng pin 4000 mAh hứa hẹn cũng sẽ cung cấp năng lượng hoạt động vừa đủ cho một ngày.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-13.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Bên cạnh đó Mi MIX Alpha cũng hỗ trợ công nghệ sạc nhanh lên tới 40W giúp bạn rút ngắn được đáng kể thời gian chờ sạc pin.</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '2',
            ],
            [
                'product_id' => '12',
                'product_name' => 'Xiaomi Mi 10T Pro 5G',
                'price_old' => '12990000',
                'price_new' => '11590000',
                'qty_product' => '900',
                'product_desc' =>  'Màn hình:       Super AMOLED, 7.92"
                                    Hệ điểu hành:   MIUI 12 (Android 11)
                                    Chipset:        Snapdragon 855+
                                    Camera sau:     Chính 108 MP & Phụ 20 MP, 12 MP
                                    Camera trước:   Chính 108 MP & Phụ 20 MP, 12 MP
                                    Ram:            12 GB
                                    Bộ nhớ trong:   512 GB
                                    SIM:            2 Nano SIM (SIM 2 chung khe thẻ nhớ) Hỗ trợ 5G
                                    Pin, Sạc:       4050 mAh, 40W (75% in 30 min)',
                'product_thumb' => 'xiaomi-mi-10t-pro-1.jpg',
                'list_thumb_1' => 'xiaomi-mi-mix-alpha-2.jpg',
                'list_thumb_2' => 'xiaomi-mi-mix-alpha-3.jpg',
                'list_thumb_3' => 'xiaomi-mi-mix-alpha-4.jpg',
                'list_thumb_4' => 'xiaomi-mi-mix-alpha-5.jpg',
                'list_thumb_5' => 'xiaomi-mi-mix-alpha-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Thiết kế vượt ra mọi giới hạn</span></strong></h5>

                                        <p>Mi MIX Alpha sở hữu một thiết kế vô cùng độc đáo, với màn hình bao quanh từ phía mặt trước, qua cả hai cạnh bên và vòng ra tận phía sau, chỉ chừa lại một phần nơi đặt cụm camera, đèn flash và logo Mi MIX.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Điều này giúp màn hình của máy đạt tỷ lệ so với thân máy lên tới 180% và kích thước màn hình đạt 7.92 inch.
                                        Ngoài ra chiếc smartphone này còn có các cạnh trên và cạnh dưới rất mỏng và được làm từ titan cùng loại dùng trong ngành hàng không.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Điều này giúp trọng lượng của máy nhẹ hơn đáng kể so với những chiếc máy sử dụng khung thép hay kim loại thông thường.
                                        Máy không có khung giữa chứa các nút nguồn và nút âm lượng vật lý hoặc phím cứng nào khác mà giờ đây tất cả đã biến thành phím cảm ứng.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Xiaomi cho biết họ đã sử dụng AI và các cảm biến đặc biệt để vô hiệu hóa những cú chạm không mong muốn ở hai cạnh bên của máy.
                                        Thật khó có thể tin được là một cái điện thoại như thế này có thể xuất hiện vào năm 2019, chắc chắn bạn sẽ bị ấn tượng ngay bởi thiết kế màn hình này.</p>
                
                                        <h5><strong><span style="font-size:24px">Camera 108 MP</span></strong></h5>
                
                                        <p>Xiaomi Mi MIX Alpha là điện thoại thông minh đầu tiên trên thế giới có cảm biến camera độ phân giải 108 MP.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Cảm biến thứ 2 có độ phân giải 12 MP với khả năng zoom quang 2X cùng một cảm biến góc siêu rộng 20 MP.
                                        Chiếc điện thoại này sẽ không có camera trước, bởi khi cần chụp selfie, bạn chỉ cần xoay chiếc smartphone lại và sử dụng phần màn hình phía sau của máy.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-11.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Máy sử dụng cảm biến camera Samsung ISOCELL Bright HMX và có kích thước cực lớn với cảm biến 1/1.33 inch.
                                        Thuật toán pixel binning 2x2 mới giúp ảnh chụp ra có độ phân giải 27 MP và còn hỗ trợ tốt khả năng chụp ảnh trong điều kiện ánh sáng yếu.</p>
                
                                        <h5><span style="font-size:24px"><strong>Hiệu năng mạnh mẽ hàng đầu thế giới</strong></span></h5>
                
                                        <p>Về cấu hình, Mi MIX Alpha được trang bị vi xử lý Snapdragon 855 Plus, RAM 12 GB, bộ nhớ UFS 3.0 512 GB.
                                        Những trang bị này đảm bảo cho bạn có thể thoải mái chơi mọi tựa game nặng nhất hiện nay trên Google Play mà không sợ hiện tượng giật lag xảy ra.
                                        Máy còn hỗ trợ kết nối mạng 5G tốc độ cao đảm bảo người dùng có thể sử dụng tốc độ kết nối không dây một cách nhanh nhất có thể.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-12.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Mi MIX Alpha là chiếc điện thoại pin trâu sở hữu dung lượng pin 4000 mAh hứa hẹn cũng sẽ cung cấp năng lượng hoạt động vừa đủ cho một ngày.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-13.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Bên cạnh đó Mi MIX Alpha cũng hỗ trợ công nghệ sạc nhanh lên tới 40W giúp bạn rút ngắn được đáng kể thời gian chờ sạc pin.</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '2',
            ],
            [
                'product_id' => '13',
                'product_name' => 'Xiaomi Redmi Note 10 Pro 128GB',
                'price_old' => '8990000',
                'price_new' => '7590000',
                'qty_product' => '900',
                'product_desc' =>  'Màn hình:       Super AMOLED, 7.92"
                                    Hệ điểu hành:   MIUI 12 (Android 11)
                                    Chipset:        Snapdragon 855+
                                    Camera sau:     Chính 108 MP & Phụ 20 MP, 12 MP
                                    Camera trước:   Chính 108 MP & Phụ 20 MP, 12 MP
                                    Ram:            12 GB
                                    Bộ nhớ trong:   512 GB
                                    SIM:            2 Nano SIM (SIM 2 chung khe thẻ nhớ) Hỗ trợ 5G
                                    Pin, Sạc:       4050 mAh, 40W (75% in 30 min)',
                'product_thumb' => 'xiaomi-redmi-note-10-pro-1.jpg',
                'list_thumb_1' => 'xiaomi-mi-mix-alpha-2.jpg',
                'list_thumb_2' => 'xiaomi-mi-mix-alpha-3.jpg',
                'list_thumb_3' => 'xiaomi-mi-mix-alpha-4.jpg',
                'list_thumb_4' => 'xiaomi-mi-mix-alpha-5.jpg',
                'list_thumb_5' => 'xiaomi-mi-mix-alpha-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Thiết kế vượt ra mọi giới hạn</span></strong></h5>

                                        <p>Mi MIX Alpha sở hữu một thiết kế vô cùng độc đáo, với màn hình bao quanh từ phía mặt trước, qua cả hai cạnh bên và vòng ra tận phía sau, chỉ chừa lại một phần nơi đặt cụm camera, đèn flash và logo Mi MIX.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Điều này giúp màn hình của máy đạt tỷ lệ so với thân máy lên tới 180% và kích thước màn hình đạt 7.92 inch.
                                        Ngoài ra chiếc smartphone này còn có các cạnh trên và cạnh dưới rất mỏng và được làm từ titan cùng loại dùng trong ngành hàng không.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Điều này giúp trọng lượng của máy nhẹ hơn đáng kể so với những chiếc máy sử dụng khung thép hay kim loại thông thường.
                                        Máy không có khung giữa chứa các nút nguồn và nút âm lượng vật lý hoặc phím cứng nào khác mà giờ đây tất cả đã biến thành phím cảm ứng.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Xiaomi cho biết họ đã sử dụng AI và các cảm biến đặc biệt để vô hiệu hóa những cú chạm không mong muốn ở hai cạnh bên của máy.
                                        Thật khó có thể tin được là một cái điện thoại như thế này có thể xuất hiện vào năm 2019, chắc chắn bạn sẽ bị ấn tượng ngay bởi thiết kế màn hình này.</p>
                
                                        <h5><strong><span style="font-size:24px">Camera 108 MP</span></strong></h5>
                
                                        <p>Xiaomi Mi MIX Alpha là điện thoại thông minh đầu tiên trên thế giới có cảm biến camera độ phân giải 108 MP.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Cảm biến thứ 2 có độ phân giải 12 MP với khả năng zoom quang 2X cùng một cảm biến góc siêu rộng 20 MP.
                                        Chiếc điện thoại này sẽ không có camera trước, bởi khi cần chụp selfie, bạn chỉ cần xoay chiếc smartphone lại và sử dụng phần màn hình phía sau của máy.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-11.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Máy sử dụng cảm biến camera Samsung ISOCELL Bright HMX và có kích thước cực lớn với cảm biến 1/1.33 inch.
                                        Thuật toán pixel binning 2x2 mới giúp ảnh chụp ra có độ phân giải 27 MP và còn hỗ trợ tốt khả năng chụp ảnh trong điều kiện ánh sáng yếu.</p>
                
                                        <h5><span style="font-size:24px"><strong>Hiệu năng mạnh mẽ hàng đầu thế giới</strong></span></h5>
                
                                        <p>Về cấu hình, Mi MIX Alpha được trang bị vi xử lý Snapdragon 855 Plus, RAM 12 GB, bộ nhớ UFS 3.0 512 GB.
                                        Những trang bị này đảm bảo cho bạn có thể thoải mái chơi mọi tựa game nặng nhất hiện nay trên Google Play mà không sợ hiện tượng giật lag xảy ra.
                                        Máy còn hỗ trợ kết nối mạng 5G tốc độ cao đảm bảo người dùng có thể sử dụng tốc độ kết nối không dây một cách nhanh nhất có thể.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-12.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Mi MIX Alpha là chiếc điện thoại pin trâu sở hữu dung lượng pin 4000 mAh hứa hẹn cũng sẽ cung cấp năng lượng hoạt động vừa đủ cho một ngày.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-13.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Bên cạnh đó Mi MIX Alpha cũng hỗ trợ công nghệ sạc nhanh lên tới 40W giúp bạn rút ngắn được đáng kể thời gian chờ sạc pin.</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '2',
            ],
            [
                'product_id' => '14',
                'product_name' => 'Xiaomi POCO X3 NFC',
                'price_old' => '6990000',
                'price_new' => '5590000',
                'qty_product' => '900',
                'product_desc' =>  'Màn hình:       Super AMOLED, 7.92"
                                    Hệ điểu hành:   MIUI 12 (Android 11)
                                    Chipset:        Snapdragon 855+
                                    Camera sau:     Chính 108 MP & Phụ 20 MP, 12 MP
                                    Camera trước:   Chính 108 MP & Phụ 20 MP, 12 MP
                                    Ram:            12 GB
                                    Bộ nhớ trong:   512 GB
                                    SIM:            2 Nano SIM (SIM 2 chung khe thẻ nhớ) Hỗ trợ 5G
                                    Pin, Sạc:       4050 mAh, 40W (75% in 30 min)',
                'product_thumb' => 'xiaomi-poco-x3-1.jpg',
                'list_thumb_1' => 'xiaomi-mi-mix-alpha-2.jpg',
                'list_thumb_2' => 'xiaomi-mi-mix-alpha-3.jpg',
                'list_thumb_3' => 'xiaomi-mi-mix-alpha-4.jpg',
                'list_thumb_4' => 'xiaomi-mi-mix-alpha-5.jpg',
                'list_thumb_5' => 'xiaomi-mi-mix-alpha-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Thiết kế vượt ra mọi giới hạn</span></strong></h5>

                                        <p>Mi MIX Alpha sở hữu một thiết kế vô cùng độc đáo, với màn hình bao quanh từ phía mặt trước, qua cả hai cạnh bên và vòng ra tận phía sau, chỉ chừa lại một phần nơi đặt cụm camera, đèn flash và logo Mi MIX.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Điều này giúp màn hình của máy đạt tỷ lệ so với thân máy lên tới 180% và kích thước màn hình đạt 7.92 inch.
                                        Ngoài ra chiếc smartphone này còn có các cạnh trên và cạnh dưới rất mỏng và được làm từ titan cùng loại dùng trong ngành hàng không.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Điều này giúp trọng lượng của máy nhẹ hơn đáng kể so với những chiếc máy sử dụng khung thép hay kim loại thông thường.
                                        Máy không có khung giữa chứa các nút nguồn và nút âm lượng vật lý hoặc phím cứng nào khác mà giờ đây tất cả đã biến thành phím cảm ứng.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Xiaomi cho biết họ đã sử dụng AI và các cảm biến đặc biệt để vô hiệu hóa những cú chạm không mong muốn ở hai cạnh bên của máy.
                                        Thật khó có thể tin được là một cái điện thoại như thế này có thể xuất hiện vào năm 2019, chắc chắn bạn sẽ bị ấn tượng ngay bởi thiết kế màn hình này.</p>
                
                                        <h5><strong><span style="font-size:24px">Camera 108 MP</span></strong></h5>
                
                                        <p>Xiaomi Mi MIX Alpha là điện thoại thông minh đầu tiên trên thế giới có cảm biến camera độ phân giải 108 MP.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Cảm biến thứ 2 có độ phân giải 12 MP với khả năng zoom quang 2X cùng một cảm biến góc siêu rộng 20 MP.
                                        Chiếc điện thoại này sẽ không có camera trước, bởi khi cần chụp selfie, bạn chỉ cần xoay chiếc smartphone lại và sử dụng phần màn hình phía sau của máy.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-11.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Máy sử dụng cảm biến camera Samsung ISOCELL Bright HMX và có kích thước cực lớn với cảm biến 1/1.33 inch.
                                        Thuật toán pixel binning 2x2 mới giúp ảnh chụp ra có độ phân giải 27 MP và còn hỗ trợ tốt khả năng chụp ảnh trong điều kiện ánh sáng yếu.</p>
                
                                        <h5><span style="font-size:24px"><strong>Hiệu năng mạnh mẽ hàng đầu thế giới</strong></span></h5>
                
                                        <p>Về cấu hình, Mi MIX Alpha được trang bị vi xử lý Snapdragon 855 Plus, RAM 12 GB, bộ nhớ UFS 3.0 512 GB.
                                        Những trang bị này đảm bảo cho bạn có thể thoải mái chơi mọi tựa game nặng nhất hiện nay trên Google Play mà không sợ hiện tượng giật lag xảy ra.
                                        Máy còn hỗ trợ kết nối mạng 5G tốc độ cao đảm bảo người dùng có thể sử dụng tốc độ kết nối không dây một cách nhanh nhất có thể.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-12.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Mi MIX Alpha là chiếc điện thoại pin trâu sở hữu dung lượng pin 4000 mAh hứa hẹn cũng sẽ cung cấp năng lượng hoạt động vừa đủ cho một ngày.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-13.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Bên cạnh đó Mi MIX Alpha cũng hỗ trợ công nghệ sạc nhanh lên tới 40W giúp bạn rút ngắn được đáng kể thời gian chờ sạc pin.</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '2',
            ],
            [
                'product_id' => '15',
                'product_name' => 'Xiaomi Redmi Note 9S',
                'price_old' => '5990000',
                'price_new' => '5100000',
                'qty_product' => '900',
                'product_desc' =>  'Màn hình:       Super AMOLED, 7.92"
                                    Hệ điểu hành:   MIUI 12 (Android 11)
                                    Chipset:        Snapdragon 855+
                                    Camera sau:     Chính 108 MP & Phụ 20 MP, 12 MP
                                    Camera trước:   Chính 108 MP & Phụ 20 MP, 12 MP
                                    Ram:            12 GB
                                    Bộ nhớ trong:   512 GB
                                    SIM:            2 Nano SIM (SIM 2 chung khe thẻ nhớ) Hỗ trợ 5G
                                    Pin, Sạc:       4050 mAh, 40W (75% in 30 min)',
                'product_thumb' => 'xiaomi-redmi-note-9s-1.jpg',
                'list_thumb_1' => 'xiaomi-mi-mix-alpha-2.jpg',
                'list_thumb_2' => 'xiaomi-mi-mix-alpha-3.jpg',
                'list_thumb_3' => 'xiaomi-mi-mix-alpha-4.jpg',
                'list_thumb_4' => 'xiaomi-mi-mix-alpha-5.jpg',
                'list_thumb_5' => 'xiaomi-mi-mix-alpha-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Thiết kế vượt ra mọi giới hạn</span></strong></h5>

                                        <p>Mi MIX Alpha sở hữu một thiết kế vô cùng độc đáo, với màn hình bao quanh từ phía mặt trước, qua cả hai cạnh bên và vòng ra tận phía sau, chỉ chừa lại một phần nơi đặt cụm camera, đèn flash và logo Mi MIX.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Điều này giúp màn hình của máy đạt tỷ lệ so với thân máy lên tới 180% và kích thước màn hình đạt 7.92 inch.
                                        Ngoài ra chiếc smartphone này còn có các cạnh trên và cạnh dưới rất mỏng và được làm từ titan cùng loại dùng trong ngành hàng không.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Điều này giúp trọng lượng của máy nhẹ hơn đáng kể so với những chiếc máy sử dụng khung thép hay kim loại thông thường.
                                        Máy không có khung giữa chứa các nút nguồn và nút âm lượng vật lý hoặc phím cứng nào khác mà giờ đây tất cả đã biến thành phím cảm ứng.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Xiaomi cho biết họ đã sử dụng AI và các cảm biến đặc biệt để vô hiệu hóa những cú chạm không mong muốn ở hai cạnh bên của máy.
                                        Thật khó có thể tin được là một cái điện thoại như thế này có thể xuất hiện vào năm 2019, chắc chắn bạn sẽ bị ấn tượng ngay bởi thiết kế màn hình này.</p>
                
                                        <h5><strong><span style="font-size:24px">Camera 108 MP</span></strong></h5>
                
                                        <p>Xiaomi Mi MIX Alpha là điện thoại thông minh đầu tiên trên thế giới có cảm biến camera độ phân giải 108 MP.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Cảm biến thứ 2 có độ phân giải 12 MP với khả năng zoom quang 2X cùng một cảm biến góc siêu rộng 20 MP.
                                        Chiếc điện thoại này sẽ không có camera trước, bởi khi cần chụp selfie, bạn chỉ cần xoay chiếc smartphone lại và sử dụng phần màn hình phía sau của máy.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-11.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Máy sử dụng cảm biến camera Samsung ISOCELL Bright HMX và có kích thước cực lớn với cảm biến 1/1.33 inch.
                                        Thuật toán pixel binning 2x2 mới giúp ảnh chụp ra có độ phân giải 27 MP và còn hỗ trợ tốt khả năng chụp ảnh trong điều kiện ánh sáng yếu.</p>
                
                                        <h5><span style="font-size:24px"><strong>Hiệu năng mạnh mẽ hàng đầu thế giới</strong></span></h5>
                
                                        <p>Về cấu hình, Mi MIX Alpha được trang bị vi xử lý Snapdragon 855 Plus, RAM 12 GB, bộ nhớ UFS 3.0 512 GB.
                                        Những trang bị này đảm bảo cho bạn có thể thoải mái chơi mọi tựa game nặng nhất hiện nay trên Google Play mà không sợ hiện tượng giật lag xảy ra.
                                        Máy còn hỗ trợ kết nối mạng 5G tốc độ cao đảm bảo người dùng có thể sử dụng tốc độ kết nối không dây một cách nhanh nhất có thể.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-12.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Mi MIX Alpha là chiếc điện thoại pin trâu sở hữu dung lượng pin 4000 mAh hứa hẹn cũng sẽ cung cấp năng lượng hoạt động vừa đủ cho một ngày.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-13.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Bên cạnh đó Mi MIX Alpha cũng hỗ trợ công nghệ sạc nhanh lên tới 40W giúp bạn rút ngắn được đáng kể thời gian chờ sạc pin.</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '2',
            ],
            [
                'product_id' => '16',
                'product_name' => 'Xiaomi Redmi 9T',
                'price_old' => '3990000',
                'price_new' => '3500000',
                'qty_product' => '900',
                'product_desc' =>  'Màn hình:       Super AMOLED, 7.92"
                                    Hệ điểu hành:   MIUI 12 (Android 11)
                                    Chipset:        Snapdragon 855+
                                    Camera sau:     Chính 108 MP & Phụ 20 MP, 12 MP
                                    Camera trước:   Chính 108 MP & Phụ 20 MP, 12 MP
                                    Ram:            12 GB
                                    Bộ nhớ trong:   512 GB
                                    SIM:            2 Nano SIM (SIM 2 chung khe thẻ nhớ) Hỗ trợ 5G
                                    Pin, Sạc:       4050 mAh, 40W (75% in 30 min)',
                'product_thumb' => 'xiaomi-redmi-9t-1.jpg',
                'list_thumb_1' => 'xiaomi-mi-mix-alpha-2.jpg',
                'list_thumb_2' => 'xiaomi-mi-mix-alpha-3.jpg',
                'list_thumb_3' => 'xiaomi-mi-mix-alpha-4.jpg',
                'list_thumb_4' => 'xiaomi-mi-mix-alpha-5.jpg',
                'list_thumb_5' => 'xiaomi-mi-mix-alpha-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Thiết kế vượt ra mọi giới hạn</span></strong></h5>

                                        <p>Mi MIX Alpha sở hữu một thiết kế vô cùng độc đáo, với màn hình bao quanh từ phía mặt trước, qua cả hai cạnh bên và vòng ra tận phía sau, chỉ chừa lại một phần nơi đặt cụm camera, đèn flash và logo Mi MIX.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Điều này giúp màn hình của máy đạt tỷ lệ so với thân máy lên tới 180% và kích thước màn hình đạt 7.92 inch.
                                        Ngoài ra chiếc smartphone này còn có các cạnh trên và cạnh dưới rất mỏng và được làm từ titan cùng loại dùng trong ngành hàng không.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Điều này giúp trọng lượng của máy nhẹ hơn đáng kể so với những chiếc máy sử dụng khung thép hay kim loại thông thường.
                                        Máy không có khung giữa chứa các nút nguồn và nút âm lượng vật lý hoặc phím cứng nào khác mà giờ đây tất cả đã biến thành phím cảm ứng.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Xiaomi cho biết họ đã sử dụng AI và các cảm biến đặc biệt để vô hiệu hóa những cú chạm không mong muốn ở hai cạnh bên của máy.
                                        Thật khó có thể tin được là một cái điện thoại như thế này có thể xuất hiện vào năm 2019, chắc chắn bạn sẽ bị ấn tượng ngay bởi thiết kế màn hình này.</p>
                
                                        <h5><strong><span style="font-size:24px">Camera 108 MP</span></strong></h5>
                
                                        <p>Xiaomi Mi MIX Alpha là điện thoại thông minh đầu tiên trên thế giới có cảm biến camera độ phân giải 108 MP.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Cảm biến thứ 2 có độ phân giải 12 MP với khả năng zoom quang 2X cùng một cảm biến góc siêu rộng 20 MP.
                                        Chiếc điện thoại này sẽ không có camera trước, bởi khi cần chụp selfie, bạn chỉ cần xoay chiếc smartphone lại và sử dụng phần màn hình phía sau của máy.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-11.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Máy sử dụng cảm biến camera Samsung ISOCELL Bright HMX và có kích thước cực lớn với cảm biến 1/1.33 inch.
                                        Thuật toán pixel binning 2x2 mới giúp ảnh chụp ra có độ phân giải 27 MP và còn hỗ trợ tốt khả năng chụp ảnh trong điều kiện ánh sáng yếu.</p>
                
                                        <h5><span style="font-size:24px"><strong>Hiệu năng mạnh mẽ hàng đầu thế giới</strong></span></h5>
                
                                        <p>Về cấu hình, Mi MIX Alpha được trang bị vi xử lý Snapdragon 855 Plus, RAM 12 GB, bộ nhớ UFS 3.0 512 GB.
                                        Những trang bị này đảm bảo cho bạn có thể thoải mái chơi mọi tựa game nặng nhất hiện nay trên Google Play mà không sợ hiện tượng giật lag xảy ra.
                                        Máy còn hỗ trợ kết nối mạng 5G tốc độ cao đảm bảo người dùng có thể sử dụng tốc độ kết nối không dây một cách nhanh nhất có thể.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-12.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Mi MIX Alpha là chiếc điện thoại pin trâu sở hữu dung lượng pin 4000 mAh hứa hẹn cũng sẽ cung cấp năng lượng hoạt động vừa đủ cho một ngày.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-13.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Bên cạnh đó Mi MIX Alpha cũng hỗ trợ công nghệ sạc nhanh lên tới 40W giúp bạn rút ngắn được đáng kể thời gian chờ sạc pin.</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '2',
            ],
            [
                'product_id' => '18',
                'product_name' => 'Xiaomi Redmi 9',
                'price_old' => '3590000',
                'price_new' => '3200000',
                'qty_product' => '900',
                'product_desc' =>  'Màn hình:       Super AMOLED, 7.92"
                                    Hệ điểu hành:   MIUI 12 (Android 11)
                                    Chipset:        Snapdragon 855+
                                    Camera sau:     Chính 108 MP & Phụ 20 MP, 12 MP
                                    Camera trước:   Chính 108 MP & Phụ 20 MP, 12 MP
                                    Ram:            12 GB
                                    Bộ nhớ trong:   512 GB
                                    SIM:            2 Nano SIM (SIM 2 chung khe thẻ nhớ) Hỗ trợ 5G
                                    Pin, Sạc:       4050 mAh, 40W (75% in 30 min)',
                'product_thumb' => 'xiaomi-redmi-9-1.jpg',
                'list_thumb_1' => 'xiaomi-mi-mix-alpha-2.jpg',
                'list_thumb_2' => 'xiaomi-mi-mix-alpha-3.jpg',
                'list_thumb_3' => 'xiaomi-mi-mix-alpha-4.jpg',
                'list_thumb_4' => 'xiaomi-mi-mix-alpha-5.jpg',
                'list_thumb_5' => 'xiaomi-mi-mix-alpha-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Thiết kế vượt ra mọi giới hạn</span></strong></h5>

                                        <p>Mi MIX Alpha sở hữu một thiết kế vô cùng độc đáo, với màn hình bao quanh từ phía mặt trước, qua cả hai cạnh bên và vòng ra tận phía sau, chỉ chừa lại một phần nơi đặt cụm camera, đèn flash và logo Mi MIX.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Điều này giúp màn hình của máy đạt tỷ lệ so với thân máy lên tới 180% và kích thước màn hình đạt 7.92 inch.
                                        Ngoài ra chiếc smartphone này còn có các cạnh trên và cạnh dưới rất mỏng và được làm từ titan cùng loại dùng trong ngành hàng không.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Điều này giúp trọng lượng của máy nhẹ hơn đáng kể so với những chiếc máy sử dụng khung thép hay kim loại thông thường.
                                        Máy không có khung giữa chứa các nút nguồn và nút âm lượng vật lý hoặc phím cứng nào khác mà giờ đây tất cả đã biến thành phím cảm ứng.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Xiaomi cho biết họ đã sử dụng AI và các cảm biến đặc biệt để vô hiệu hóa những cú chạm không mong muốn ở hai cạnh bên của máy.
                                        Thật khó có thể tin được là một cái điện thoại như thế này có thể xuất hiện vào năm 2019, chắc chắn bạn sẽ bị ấn tượng ngay bởi thiết kế màn hình này.</p>
                
                                        <h5><strong><span style="font-size:24px">Camera 108 MP</span></strong></h5>
                
                                        <p>Xiaomi Mi MIX Alpha là điện thoại thông minh đầu tiên trên thế giới có cảm biến camera độ phân giải 108 MP.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Cảm biến thứ 2 có độ phân giải 12 MP với khả năng zoom quang 2X cùng một cảm biến góc siêu rộng 20 MP.
                                        Chiếc điện thoại này sẽ không có camera trước, bởi khi cần chụp selfie, bạn chỉ cần xoay chiếc smartphone lại và sử dụng phần màn hình phía sau của máy.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-11.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Máy sử dụng cảm biến camera Samsung ISOCELL Bright HMX và có kích thước cực lớn với cảm biến 1/1.33 inch.
                                        Thuật toán pixel binning 2x2 mới giúp ảnh chụp ra có độ phân giải 27 MP và còn hỗ trợ tốt khả năng chụp ảnh trong điều kiện ánh sáng yếu.</p>
                
                                        <h5><span style="font-size:24px"><strong>Hiệu năng mạnh mẽ hàng đầu thế giới</strong></span></h5>
                
                                        <p>Về cấu hình, Mi MIX Alpha được trang bị vi xử lý Snapdragon 855 Plus, RAM 12 GB, bộ nhớ UFS 3.0 512 GB.
                                        Những trang bị này đảm bảo cho bạn có thể thoải mái chơi mọi tựa game nặng nhất hiện nay trên Google Play mà không sợ hiện tượng giật lag xảy ra.
                                        Máy còn hỗ trợ kết nối mạng 5G tốc độ cao đảm bảo người dùng có thể sử dụng tốc độ kết nối không dây một cách nhanh nhất có thể.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-12.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Mi MIX Alpha là chiếc điện thoại pin trâu sở hữu dung lượng pin 4000 mAh hứa hẹn cũng sẽ cung cấp năng lượng hoạt động vừa đủ cho một ngày.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-mix-alpha-13.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Bên cạnh đó Mi MIX Alpha cũng hỗ trợ công nghệ sạc nhanh lên tới 40W giúp bạn rút ngắn được đáng kể thời gian chờ sạc pin.</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '2',
            ],
            [
                'product_id' => '19',
                'product_name' => 'Xiaomi Mi 11 Ultra 5G',
                'price_old' => '25990000',
                'price_new' => '19490000',
                'qty_product' => '110',
                'product_desc' =>  'Màn hình:       AMOLED, 6.81", Quad HD+ (2K+)
                                    Hệ điểu hành:   MIUI 12 (Android 10 không có Google)
                                    Chipset:        Snapdragon 888
                                    Camera sau:     Chính 50 MP Dual Pixel PDAF, Laser AF, OIS & Phụ 48 MP, 48 MP PDAF, OIS, 5x optical zoom
                                    Camera trước:   Chính 20 MP panorama
                                    Ram:            12 GB
                                    Bộ nhớ trong:   512 GB
                                    SIM:            2 Nano SIM (SIM 2 chung khe thẻ nhớ) Hỗ trợ 5G
                                    Pin, Sạc:       4400 mAh, 67W (100% in 30 min)',
                'product_thumb' => 'xiaomi-mi-11-ultra-1.jpg',
                'list_thumb_1' => 'xiaomi-mi-11-ultra-2.jpg',
                'list_thumb_2' => 'xiaomi-mi-11-ultra-3.jpg',
                'list_thumb_3' => 'xiaomi-mi-11-ultra-4.jpg',
                'list_thumb_4' => 'xiaomi-mi-11-ultra-5.jpg',
                'list_thumb_5' => 'xiaomi-mi-11-ultra-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Vẻ đẹp cao cấp đến từ gốm cùng màn hình phụ đa năng</span></strong></h5>

                                        <p>Vẻ ngoài sáng bóng của Mi 11 Ultra được chế tác với mặt lưng bằng gốm cao cấp mang lại cảm giác mềm mại và thoải mái trong lòng bàn tay, với 2 màu sắc cơ bản tuyệt đẹp: Trắng và Đen.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-11-ultra-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Mặt lưng của Mi 11 Ultra khá đơn giản, mọi sự chú ý đều đổ dồn về cụm camera cực khủng chiếm gần 1/3 diện tích cùng một màn hình phụ ở mặt sau.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-11-ultra-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Màn hình phụ này sử dụng công nghệ AMOLED tiết kiệm pin, luôn bật 24/24 để hiển thị ngày giờ, các thông báo, tin nhắn,... người dùng cũng có thể tương tác bằng cách từ chối hay nhận cuộc gọi từ màn hình này.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-11-ultra-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Mi 11 Ultra cũng hỗ trợ kháng nước và bụi theo tiêu chuẩn IP68 có khả năng kháng nước ở độ sâu 1.5 m trong 30 phút.</p>
                
                                        <h5><strong><span style="font-size:24px">Công nghệ camera đỉnh cao</span></strong></h5>
                
                                        <p>Mi 11 Ultra trang bị cụm 3 camera bao gồm camera chính 50 MP, camera tele 120x 48 MP và camera góc rộng 48 MP.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-11-ultra-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Camera chính 50 MP sử dụng cảm biến GN2 của Samsung có kích thước kỷ lục 1/1.12", cho phép tạo ra siêu điểm ảnh 2.8 μm từ 4 điểm ảnh nhỏ, kết hợp với thuật toán chụp đêm giúp cho ra những khung ảnh đêm kinh ngạc bất kể điều kiện chụp gần như không có ánh sáng.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-11-ultra-11.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Camera tele cho khả năng zoom xa ấn tượng với zoom quang 5x, zoom quang kết hợp 10x và zoom kỹ thuật số 120x giúp ống kính của Mi 11 Ultra có thể vươn xa hơn để bạn lưu lại những khung hình ấn tượng. </p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-11-ultra-12.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Cùng với đó, camera góc rộng sở hữu cảm biến Sony IMX586 nhờ thuật toán chống méo hình, bạn sẽ có được tấm ảnh toàn cảnh trải dài hoàn hảo và siêu sắc nét.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-11-ultra-13.jpg" style="height:500px; width:750px" /></p>
                
                                        <h5><span style="font-size:24px"><strong>Đỉnh cao công nghệ màn hình không viền</strong></span></h5>
                
                                        <p>Mi 11 Ultra sở hữu công nghệ hiển thị hàng đầu với màn hình tràn viền bốn cạnh cong AMOLED, kích thước khủng lên đến 6.81 inch cùng vật liệu E4 mang đến khung hình mãn nhãn với hơn 1.07 tỷ màu DCI-P3, độ sáng 1700 nits, hỗ trợ HDR10+ đẩy mọi trải nghiệm thị giác của bạn lên đỉnh điểm.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-11-ultra-14.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Mi 11 Ultra còn là màn hình có độ mượt hàng đầu và phản hồi cực nhanh với tần số làm tươi 120 Hz cùng tốc độ nhận cảm ứng 480 Hz, sự mượt mà trong mỗi chuyển động tạo nên trải nghiệm lôi cuốn khiến bạn không thể nào rời mắt khỏi màn hình.
                
                                        Đây cũng là một màn hình siêu cứng và bền bỉ với mặt kính Corning Gorilla Glass Victus tăng cường khả năng tự bảo vệ và chống trầy xước tốt hơn trước các tác động từ bên ngoài.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-11-ultra-15.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Chiêm ngưỡng âm thanh tuyệt hảo đến từ hệ thống loa kép theo tiêu chuẩn Harman Kardon với khả năng nhận diện và tinh chỉnh âm thanh theo nội dung phát và môi trường xung quanh, Mi 11 Ultra cho chất âm vượt trội tương xứng với công nghệ hiển thị đỉnh cao.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-11-ultra-16.jpg" style="height:500px; width:750px" /></p>
                
                                        <h5><strong><span style="font-size:24px">Công nghệ sạc nhanh tiên tiến, đạt chứng nhận an toàn.</span></strong></h5>
                
                                        <p>Công nghệ sạc nhanh công suất 67 W trên Mi 11 Ultra hỗ trợ cả sạc không dây mang đến tốc độ sạc đến kinh ngạc. Theo Xiaomi, với công nghệ sạc này có thể sạc đầy 100% cho viên pin 5000 mAh trên Mi 11 Ultra chỉ trong vòng khoảng 36 phút ở cả sạc dây và không dây.</p>
                
                                        <p><img alt="" src="public/upload/images/xiaomi-mi-11-ultra-17.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Pin Mi 11 Ultra được chế tạo từ vật liệu mới sáng tạo: Cực âm nano silicon oxit thế hệ thứ hai giúp tăng mật độ năng lượng đến các mạch điện tốt hơn, duy trì hiệu suất cũng như tuổi thọ pin lâu dài.
                
                                        Tóm lại, với trang bị phần cứng cực kỳ ấn tượng, đã giúp Mi 11 Ultra vươn lên trở thành siêu phẩm hàng đầu không chỉ hiệu năng mà còn khả năng chụp ảnh đỉnh cao. Nếu muốn trải nghiệm những công nghệ mới nhất, chắc chắn Mi 11 Ultra sẽ là cái tên đầu tiên mà bạn không thể bỏ qua.</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '2',
            ],
//-------------------------------------------------iPhone-------------------------------------------------//
            [
                'product_id' => '20',
                'product_name' => 'iPhone 12 Pro Max',
                'price_old' => '42999000',
                'price_new' => '38000000',
                'qty_product' => '1200',
                'product_desc' =>  'Màn hình:       OLED, 6.7", Super Retina XDR
                                    Hệ điểu hành:   iOS 14
                                    Chipset:        Apple A14 Bionic
                                    Camera sau:     Chính 12 MP dual pixel PDAF, sensor-shift stabilization (IBIS) & Phụ 12 MP, 12 MP, TOF 3D LiDAR
                                    Camera trước:   Chính 12 MP, SL 3D, (depth/biometrics sensor)
                                    Ram:            6 GB
                                    Bộ nhớ trong:   512 GB
                                    SIM:            1 Nano SIM & 1 eSIMHỗ trợ 5G
                                    Pin, Sạc:       3687 mAh, 20W (50% in 30 min)',
                'product_thumb' => 'iphone-12-pro-max-1.jpg',
                'list_thumb_1' => 'iphone-12-pro-max-2.jpg',
                'list_thumb_2' => 'iphone-12-pro-max-3.jpg',
                'list_thumb_3' => 'iphone-12-pro-max-4.jpg',
                'list_thumb_4' => 'iphone-12-pro-max-5.jpg',
                'list_thumb_5' => 'iphone-12-pro-max-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Thu hút từ cái nhìn đầu tiên</span></strong></h5>

                                        <p>Quay trở lại đầy hoài niệm với thiết kế phẳng, vuông vức tương tự iPhone 4 nhưng không hề cho cảm giác lỗi thời mà hoàn toàn sang trọng với thiết kế tinh tế và được cấu tạo từ những vật liệu cao cấp hơn.</p>
                
                                        <p><img alt="" src="public/upload/images/iphone-12-pro-max-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>iPhone 12 Pro Max được chế tác từ mặt kính cường lực Ceramic Shield có độ bền gấp 4 lần iPhone tiền nhiệm, phần khung cấu tạo từ thép không gỉ cực kỳ chắc chắn. Mang lại khả năng chống trầy, chống va đập tốt hơn.</p>
                
                                        <p><img alt="" src="public/upload/images/iphone-12-pro-max-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <h5><strong><span style="font-size:24px">Super Retina XDR - mang đến trải nghiệm màn hình chân thực</span></strong></h5>
                
                                        <p>Sau những phàn nàn về phần viền màn hình của iPhone 11 series thì nay chiếc iPhone 12 Pro Max 512GB đã được cải thiện triệt để với kích thước màn hình 6.7 inch, tỉ lệ màn hình so với thân máy tương đương 87.4% tăng tối đa diện tích hiển thị.
                
                                        Công nghệ màn hình Super Retina XDR mang đến trải nghiệm màn hình chân thực từng chi tiết. Nhờ tính năng True Tone tự động điều chỉnh cho độ chính xác màu sắc cao, ánh sáng hài hòa.</p>
                
                                        <p><img alt="" src="public/upload/images/iphone-12-pro-max-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Độ sáng tối đa lên đến 1200 nits (HDR), hỗ trợ HDR 10, dải màu P3 chuẩn điện ảnh đảm bảo đây là công nghệ màn hình tốt nhất từ trước đến nay của nhà Apple, đáp ứng nhu cầu giải trí ngày càng thiết yếu của người dùng smartphone.</p>
                
                                        <h5><span style="font-size:24px"><strong>Hệ thống camera được nâng cấp mạnh mẽ</strong></span></h5>
                
                                        <p>iPhone 12 Pro Max được trang bị bộ 3 camera chuyên nghiệp với độ phân giải đều bằng 12 MP, trong đó gồm một cảm biến chính là camera góc rộng, một camera góc siêu rộng 120 độ và một camera chụp xóa phông. 
                                        Ngoài ra, 12 Pro Max còn hỗ trợ một cảm biến LiDAR giúp việc lấy nét trong điều kiện thiếu sáng nhanh hơn gấp 6 lần.</p>
                
                                        <p><img alt="" src="public/upload/images/iphone-12-pro-max-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>iPhone 12 Pro Max có cảm biến lớn hơn giúp thu sáng tốt hơn 27% và có công nghệ chống rung tiên tiến. 
                                        Dựa vào các yếu tố trên, iPhone 12 Pro Max có thể chụp những bức ảnh chất lượng, đầy màu sắc, đủ chi tiết, dù trong môi trường thiếu sáng.</p>
                
                                        <p><img alt="" src="public/upload/images/iphone-12-pro-max-11.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Tất cả mang đến những thước ảnh tự nhiên hoàn hảo như cái nhìn trực tiếp từ đôi mắt của bạn.
                                        Camera trước cũng có độ phân giải 12 MP hỗ trợ đầy đủ các tính năng như chế độ chụp chân dung với hiệu ứng bokeh, Memoji, Night Mode, Deep Fusion,... và còn nhiều tính năng khác.
                                        Cảm biến LiDAR đo đạc và quét hiển thị sơ đồ 3D, là một ưu điểm lớn cho người dùng là “dân" thiết kế.</p>
                
                                        <h5><strong><span style="font-size:24px">Hỗ trợ công nghệ sạc không dây MagSafe</span></strong></h5>
                
                                        <p>iPhone 12 Pro Max có dung lượng pin 3687 mAh, hỗ trợ sạc pin nhanh qua cáp công suất 20 W có thể sạc từ 0 - 50% trong khoảng 30 phút, khi bạn sạc bằng sạc không dây MagSafe thì máy hỗ trợ sạc đến 15 W, sạc với chuẩn Qi thì hỗ trợ đến 7.5 W.</p>
                
                                        <p><img alt="" src="public/upload/images/iphone-12-pro-max-12.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Theo như Apple công bố thì phiên bản Pro Max có thể phát video offline khoảng 20 tiếng, phát nhạc khoảng 80 tiếng.</p>
                
                                        <p><img alt="" src="public/upload/images/iphone-12-pro-max-13.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>iPhone 12 Pro Max 512GB một sản phẩm có những tính năng hiện đại nhất từ trước đến nay của nhà Apple. 
                                        Có màn hình Super Retina XDR OLED siêu "mát mắt", hệ thống camera siêu khủng cho đến hiệu năng vô cùng mạnh mẽ từ A14 Bionic. 
                                        Hứa hẹn sẽ mang lại trải nghiệm tốt nhất cho người sử dụng, nâng tầm đẳng cấp và sự thời thượng của chủ nhân sở hữu nó.</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '1',
            ],
//-------------------------------------------------Samsung-------------------------------------------------//
            [
                'product_id' => '30',
                'product_name' => 'Samsung Galaxy Note 20 Ultra 5G 256GB',
                'price_old' => '32990000',
                'price_new' => '23990000',
                'qty_product' => '1000',
                'product_desc' =>  'Màn hình:       Dynamic AMOLED 2X, 6.9", Quad HD+ (2K+)
                                    Hệ điểu hành:   Android 11
                                    Chipset:        Exynos 990
                                    Camera sau:     Chính 108 MP & Phụ 12 MP, 12 MP, cảm biến Laser AF
                                    Camera trước:   Chính 10 MP Dual Pixel PDAF
                                    Ram:            12 GB
                                    Bộ nhớ trong:   256 GB
                                    SIM:            2 Nano SIM hoặc 1 Nano SIM + 1 eSIM, Hỗ trợ 5G
                                    Pin, Sạc:       4500 mAh, 25W (60% in 30 min)',
                'product_thumb' => 'samsung-galaxy-note-20-ultra-5g-1.jpg',
                'list_thumb_1' => 'samsung-galaxy-note-20-ultra-5g-2.jpg',
                'list_thumb_2' => 'samsung-galaxy-note-20-ultra-5g-3.jpg',
                'list_thumb_3' => 'samsung-galaxy-note-20-ultra-5g-4.jpg',
                'list_thumb_4' => 'samsung-galaxy-note-20-ultra-5g-5.jpg',
                'list_thumb_5' => 'samsung-galaxy-note-20-ultra-5g-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Thiết kế đẳng cấp xứng tầm siêu phẩm</span></strong></h5>

                                        <p>Samsung Galaxy Note 20 Ultra 5G sở hữu một thiết kế đẹp như một tuyệt tác. 
                                        Samsung đã tối ưu mọi trải nghiệm với kiểu thiết kế tối giản với phần khung nhôm và 2 mặt kính cao cấp, 4 góc sắc cạnh làm tăng sự mạnh mẽ nam tính, nhưng vẫn cho cảm giác cầm nắm dễ chịu và đẳng cấp nhờ 2 cạnh viền được bo cong tinh tế khéo léo.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Đặc biệt, phần màn hình của máy được trang bị kính Corning Gorilla Glass Victus đảm bảo độ bền vượt trội của siêu phẩm Samsung trước mọi va chạm.</p>
                
                                        <h5><strong><span style="font-size:24px">Màn hình “không viền" vượt mọi giới hạn</span></strong></h5>
                
                                        <p>Màn hình của Note 20 Ultra 5G với thiết kế siêu tràn viền, gây ấn tượng mạnh ngay từ cái nhìn đầu tiên là 4 cạnh viền mỏng đến kinh ngạc, mang đến trải nghiệm hiển thị vượt qua giới hạn của một chiếc điện thoại thông minh.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Từ thiết kế cho đến chất lượng đều được Samsung hoàn thiện tỉ mỉ ở mức cao nhất. 
                                        Máy có một màn hình Infinity-O rộng đến 6.9 inch, với công nghệ Dynamic AMOLED 2X cực đỉnh cho chất lượng hiển thị sống động, độ sáng 1500 nit đảm bảo chất lượng hiển thị tốt nhất kể cả khi sử dụng dưới trời nắng gắt.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Đặc biệt, Samsung cũng không quên trang bị tần số quét 120 Hz cho siêu phẩm của mình, cảm nhận độ mượt đến kinh ngạc mỗi khi cuộn trang, mở ứng dụng, xem phim hay hòa mình vào đồ họa cực đỉnh những tựa game mà bạn yêu thích.</p>
                
                                        <h5><span style="font-size:24px"><strong>S Pen thông minh đầy đủ tính năng đáng giá</strong></span></h5>
                
                                        <p>Bút S Pen thế hệ mới với nhiều cải tiến tập trung vào việc giảm tối đa độ trễ, mang đến trải nghiệm viết vô cùng chân thực và mượt mà như viết trên giấy.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Với bút S Pen trên Galaxy Note 20 Ultra 5G, giờ đây bạn đã có thể ghi chú nhanh hơn, đẹp hơn với tính năng chuyển nét chữ thành văn bản, dễ dàng sao chép, cắt dán đoạn văn bản cực nhanh, sau đó bạn có thể lưu ghi chú với nhiều định dạng và chuyển đổi qua lại giữa các thiết bị cho công việc luôn liền mạch.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-11.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>S Pen giờ đây còn làm được nhiều việc hơn thế nhờ bổ sung các tính năng điều khiển không chạm qua kết nối bluetooth, giúp bạn có thể làm chủ chiếc điện thoại từ xa một cách dễ dàng.</p>
                
                                        <h5><strong><span style="font-size:24px">Bộ 3 camera hoàn hảo trong trong từng góc quay</span></strong></h5>
                
                                        <p>Tận hưởng trải nghiệm quay phim, chụp ảnh chuyên nghiệp với bộ ba camera đỉnh cao của Note 20 Ultra 5G bao gồm: Camera chính độ phân giải khủng lên đến tận 108 MP, camera góc siêu rộng 12 MP và camera telephoto 12 MP với khả năng siêu zoom lên đến 50x.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-12.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Camera 108 MP chứa hàng triệu điểm ảnh mang đến những tấm ảnh chất lượng cao, chân thật, sắc nét đến từng chi tiết nhỏ nhất.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-13.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Phần âm thanh của video cũng trở nên rõ ràng hơn nhờ việc chuyển đổi luân phiên giữa 2 micro trước và sau tối ưu cho khả năng lọc tiếng ồn khi quay phim. 
                                        Tạo nên video của riêng bạn thật dễ dàng với loạt tính năng như quay chống rung OIS, quay Slow Motion 120 fps mượt mà, quay video xóa phông,...</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '4',
            ],
            [
                'product_id' => '31',
                'product_name' => 'Samsung Galaxy Note 20 Ultra 5G 128GB',
                'price_old' => '28990000',
                'price_new' => '21990000',
                'qty_product' => '1000',
                'product_desc' =>  'Màn hình:       Dynamic AMOLED 2X, 6.9", Quad HD+ (2K+)
                                    Hệ điểu hành:   Android 11
                                    Chipset:        Exynos 990
                                    Camera sau:     Chính 108 MP & Phụ 12 MP, 12 MP, cảm biến Laser AF
                                    Camera trước:   Chính 10 MP Dual Pixel PDAF
                                    Ram:            12 GB
                                    Bộ nhớ trong:   128 GB
                                    SIM:            2 Nano SIM hoặc 1 Nano SIM + 1 eSIM, Hỗ trợ 5G
                                    Pin, Sạc:       4500 mAh, 25W (60% in 30 min)',
                'product_thumb' => 'samsung-galaxy-note-20-ultra-5g-1.jpg',
                'list_thumb_1' => 'samsung-galaxy-note-20-ultra-5g-2.jpg',
                'list_thumb_2' => 'samsung-galaxy-note-20-ultra-5g-3.jpg',
                'list_thumb_3' => 'samsung-galaxy-note-20-ultra-5g-4.jpg',
                'list_thumb_4' => 'samsung-galaxy-note-20-ultra-5g-5.jpg',
                'list_thumb_5' => 'samsung-galaxy-note-20-ultra-5g-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Thiết kế đẳng cấp xứng tầm siêu phẩm</span></strong></h5>

                                        <p>Samsung Galaxy Note 20 Ultra 5G sở hữu một thiết kế đẹp như một tuyệt tác. 
                                        Samsung đã tối ưu mọi trải nghiệm với kiểu thiết kế tối giản với phần khung nhôm và 2 mặt kính cao cấp, 4 góc sắc cạnh làm tăng sự mạnh mẽ nam tính, nhưng vẫn cho cảm giác cầm nắm dễ chịu và đẳng cấp nhờ 2 cạnh viền được bo cong tinh tế khéo léo.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Đặc biệt, phần màn hình của máy được trang bị kính Corning Gorilla Glass Victus đảm bảo độ bền vượt trội của siêu phẩm Samsung trước mọi va chạm.</p>
                
                                        <h5><strong><span style="font-size:24px">Màn hình “không viền" vượt mọi giới hạn</span></strong></h5>
                
                                        <p>Màn hình của Note 20 Ultra 5G với thiết kế siêu tràn viền, gây ấn tượng mạnh ngay từ cái nhìn đầu tiên là 4 cạnh viền mỏng đến kinh ngạc, mang đến trải nghiệm hiển thị vượt qua giới hạn của một chiếc điện thoại thông minh.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Từ thiết kế cho đến chất lượng đều được Samsung hoàn thiện tỉ mỉ ở mức cao nhất. 
                                        Máy có một màn hình Infinity-O rộng đến 6.9 inch, với công nghệ Dynamic AMOLED 2X cực đỉnh cho chất lượng hiển thị sống động, độ sáng 1500 nit đảm bảo chất lượng hiển thị tốt nhất kể cả khi sử dụng dưới trời nắng gắt.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Đặc biệt, Samsung cũng không quên trang bị tần số quét 120 Hz cho siêu phẩm của mình, cảm nhận độ mượt đến kinh ngạc mỗi khi cuộn trang, mở ứng dụng, xem phim hay hòa mình vào đồ họa cực đỉnh những tựa game mà bạn yêu thích.</p>
                
                                        <h5><span style="font-size:24px"><strong>S Pen thông minh đầy đủ tính năng đáng giá</strong></span></h5>
                
                                        <p>Bút S Pen thế hệ mới với nhiều cải tiến tập trung vào việc giảm tối đa độ trễ, mang đến trải nghiệm viết vô cùng chân thực và mượt mà như viết trên giấy.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Với bút S Pen trên Galaxy Note 20 Ultra 5G, giờ đây bạn đã có thể ghi chú nhanh hơn, đẹp hơn với tính năng chuyển nét chữ thành văn bản, dễ dàng sao chép, cắt dán đoạn văn bản cực nhanh, sau đó bạn có thể lưu ghi chú với nhiều định dạng và chuyển đổi qua lại giữa các thiết bị cho công việc luôn liền mạch.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-11.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>S Pen giờ đây còn làm được nhiều việc hơn thế nhờ bổ sung các tính năng điều khiển không chạm qua kết nối bluetooth, giúp bạn có thể làm chủ chiếc điện thoại từ xa một cách dễ dàng.</p>
                
                                        <h5><strong><span style="font-size:24px">Bộ 3 camera hoàn hảo trong trong từng góc quay</span></strong></h5>
                
                                        <p>Tận hưởng trải nghiệm quay phim, chụp ảnh chuyên nghiệp với bộ ba camera đỉnh cao của Note 20 Ultra 5G bao gồm: Camera chính độ phân giải khủng lên đến tận 108 MP, camera góc siêu rộng 12 MP và camera telephoto 12 MP với khả năng siêu zoom lên đến 50x.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-12.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Camera 108 MP chứa hàng triệu điểm ảnh mang đến những tấm ảnh chất lượng cao, chân thật, sắc nét đến từng chi tiết nhỏ nhất.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-13.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Phần âm thanh của video cũng trở nên rõ ràng hơn nhờ việc chuyển đổi luân phiên giữa 2 micro trước và sau tối ưu cho khả năng lọc tiếng ồn khi quay phim. 
                                        Tạo nên video của riêng bạn thật dễ dàng với loạt tính năng như quay chống rung OIS, quay Slow Motion 120 fps mượt mà, quay video xóa phông,...</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '4',
            ],
            [
                'product_id' => '32',
                'product_name' => 'Samsung Galaxy Z Fold2 5G',
                'price_old' => '65000000',
                'price_new' => '50000000',
                'qty_product' => '1000',
                'product_desc' =>  'Màn hình:       Chính: Dynamic AMOLED, Phụ: Super AMOLEDChính 7.59" & Phụ 6.23"Full HD+
                                    Hệ điểu hành:   Android 11
                                    Chipset:        Snapdragon 865+
                                    Camera sau:     Chính 108 MP & Phụ 12 MP, 12 MP, cảm biến Laser AF
                                    Camera trước:   Trong 10 MP & Ngoài 10 MP
                                    Ram:            12 GB
                                    Bộ nhớ trong:   256 GB
                                    SIM:            1 Nano SIM & 1 eSIM, Hỗ trợ 5G
                                    Pin, Sạc:       4500 mAh, 25W (60% in 30 min)',
                'product_thumb' => 'samsung-galaxy-z-fold2-5g-1.jpg',
                'list_thumb_1' => 'samsung-galaxy-z-fold2-5g-2.jpg',
                'list_thumb_2' => 'samsung-galaxy-z-fold2-5g-3.jpg',
                'list_thumb_3' => 'samsung-galaxy-z-fold2-5g-4.jpg',
                'list_thumb_4' => 'samsung-galaxy-z-fold2-5g-5.jpg',
                'list_thumb_5' => 'samsung-galaxy-z-fold2-5g-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Thiết kế đẳng cấp xứng tầm siêu phẩm</span></strong></h5>

                                        <p>Samsung Galaxy Note 20 Ultra 5G sở hữu một thiết kế đẹp như một tuyệt tác. 
                                        Samsung đã tối ưu mọi trải nghiệm với kiểu thiết kế tối giản với phần khung nhôm và 2 mặt kính cao cấp, 4 góc sắc cạnh làm tăng sự mạnh mẽ nam tính, nhưng vẫn cho cảm giác cầm nắm dễ chịu và đẳng cấp nhờ 2 cạnh viền được bo cong tinh tế khéo léo.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Đặc biệt, phần màn hình của máy được trang bị kính Corning Gorilla Glass Victus đảm bảo độ bền vượt trội của siêu phẩm Samsung trước mọi va chạm.</p>
                
                                        <h5><strong><span style="font-size:24px">Màn hình “không viền" vượt mọi giới hạn</span></strong></h5>
                
                                        <p>Màn hình của Note 20 Ultra 5G với thiết kế siêu tràn viền, gây ấn tượng mạnh ngay từ cái nhìn đầu tiên là 4 cạnh viền mỏng đến kinh ngạc, mang đến trải nghiệm hiển thị vượt qua giới hạn của một chiếc điện thoại thông minh.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Từ thiết kế cho đến chất lượng đều được Samsung hoàn thiện tỉ mỉ ở mức cao nhất. 
                                        Máy có một màn hình Infinity-O rộng đến 6.9 inch, với công nghệ Dynamic AMOLED 2X cực đỉnh cho chất lượng hiển thị sống động, độ sáng 1500 nit đảm bảo chất lượng hiển thị tốt nhất kể cả khi sử dụng dưới trời nắng gắt.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Đặc biệt, Samsung cũng không quên trang bị tần số quét 120 Hz cho siêu phẩm của mình, cảm nhận độ mượt đến kinh ngạc mỗi khi cuộn trang, mở ứng dụng, xem phim hay hòa mình vào đồ họa cực đỉnh những tựa game mà bạn yêu thích.</p>
                
                                        <h5><span style="font-size:24px"><strong>S Pen thông minh đầy đủ tính năng đáng giá</strong></span></h5>
                
                                        <p>Bút S Pen thế hệ mới với nhiều cải tiến tập trung vào việc giảm tối đa độ trễ, mang đến trải nghiệm viết vô cùng chân thực và mượt mà như viết trên giấy.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Với bút S Pen trên Galaxy Note 20 Ultra 5G, giờ đây bạn đã có thể ghi chú nhanh hơn, đẹp hơn với tính năng chuyển nét chữ thành văn bản, dễ dàng sao chép, cắt dán đoạn văn bản cực nhanh, sau đó bạn có thể lưu ghi chú với nhiều định dạng và chuyển đổi qua lại giữa các thiết bị cho công việc luôn liền mạch.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-11.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>S Pen giờ đây còn làm được nhiều việc hơn thế nhờ bổ sung các tính năng điều khiển không chạm qua kết nối bluetooth, giúp bạn có thể làm chủ chiếc điện thoại từ xa một cách dễ dàng.</p>
                
                                        <h5><strong><span style="font-size:24px">Bộ 3 camera hoàn hảo trong trong từng góc quay</span></strong></h5>
                
                                        <p>Tận hưởng trải nghiệm quay phim, chụp ảnh chuyên nghiệp với bộ ba camera đỉnh cao của Note 20 Ultra 5G bao gồm: Camera chính độ phân giải khủng lên đến tận 108 MP, camera góc siêu rộng 12 MP và camera telephoto 12 MP với khả năng siêu zoom lên đến 50x.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-12.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Camera 108 MP chứa hàng triệu điểm ảnh mang đến những tấm ảnh chất lượng cao, chân thật, sắc nét đến từng chi tiết nhỏ nhất.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-13.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Phần âm thanh của video cũng trở nên rõ ràng hơn nhờ việc chuyển đổi luân phiên giữa 2 micro trước và sau tối ưu cho khả năng lọc tiếng ồn khi quay phim. 
                                        Tạo nên video của riêng bạn thật dễ dàng với loạt tính năng như quay chống rung OIS, quay Slow Motion 120 fps mượt mà, quay video xóa phông,...</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '4',
            ],
            [
                'product_id' => '33',
                'product_name' => 'Samsung Galaxy Z Fold2 5G Special Edition',
                'price_old' => '65000000',
                'price_new' => '50000000',
                'qty_product' => '1000',
                'product_desc' =>  'Màn hình:       Chính: Dynamic AMOLED, Phụ: Super AMOLEDChính 7.59" & Phụ 6.23"Full HD+
                                    Hệ điểu hành:   Android 11
                                    Chipset:        Snapdragon 865+
                                    Camera sau:     Chính 108 MP & Phụ 12 MP, 12 MP, cảm biến Laser AF
                                    Camera trước:   Trong 10 MP & Ngoài 10 MP
                                    Ram:            12 GB
                                    Bộ nhớ trong:   256 GB
                                    SIM:            1 Nano SIM & 1 eSIM, Hỗ trợ 5G
                                    Pin, Sạc:       4500 mAh, 25W (60% in 30 min)',
                'product_thumb' => 'samsung-galaxy-z-fold2-5g-1.jpg',
                'list_thumb_1' => 'samsung-galaxy-z-fold2-5g-2.jpg',
                'list_thumb_2' => 'samsung-galaxy-z-fold2-5g-3.jpg',
                'list_thumb_3' => 'samsung-galaxy-z-fold2-5g-4.jpg',
                'list_thumb_4' => 'samsung-galaxy-z-fold2-5g-5.jpg',
                'list_thumb_5' => 'samsung-galaxy-z-fold2-5g-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Thiết kế đẳng cấp xứng tầm siêu phẩm</span></strong></h5>

                                        <p>Samsung Galaxy Note 20 Ultra 5G sở hữu một thiết kế đẹp như một tuyệt tác. 
                                        Samsung đã tối ưu mọi trải nghiệm với kiểu thiết kế tối giản với phần khung nhôm và 2 mặt kính cao cấp, 4 góc sắc cạnh làm tăng sự mạnh mẽ nam tính, nhưng vẫn cho cảm giác cầm nắm dễ chịu và đẳng cấp nhờ 2 cạnh viền được bo cong tinh tế khéo léo.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Đặc biệt, phần màn hình của máy được trang bị kính Corning Gorilla Glass Victus đảm bảo độ bền vượt trội của siêu phẩm Samsung trước mọi va chạm.</p>
                
                                        <h5><strong><span style="font-size:24px">Màn hình “không viền" vượt mọi giới hạn</span></strong></h5>
                
                                        <p>Màn hình của Note 20 Ultra 5G với thiết kế siêu tràn viền, gây ấn tượng mạnh ngay từ cái nhìn đầu tiên là 4 cạnh viền mỏng đến kinh ngạc, mang đến trải nghiệm hiển thị vượt qua giới hạn của một chiếc điện thoại thông minh.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Từ thiết kế cho đến chất lượng đều được Samsung hoàn thiện tỉ mỉ ở mức cao nhất. 
                                        Máy có một màn hình Infinity-O rộng đến 6.9 inch, với công nghệ Dynamic AMOLED 2X cực đỉnh cho chất lượng hiển thị sống động, độ sáng 1500 nit đảm bảo chất lượng hiển thị tốt nhất kể cả khi sử dụng dưới trời nắng gắt.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Đặc biệt, Samsung cũng không quên trang bị tần số quét 120 Hz cho siêu phẩm của mình, cảm nhận độ mượt đến kinh ngạc mỗi khi cuộn trang, mở ứng dụng, xem phim hay hòa mình vào đồ họa cực đỉnh những tựa game mà bạn yêu thích.</p>
                
                                        <h5><span style="font-size:24px"><strong>S Pen thông minh đầy đủ tính năng đáng giá</strong></span></h5>
                
                                        <p>Bút S Pen thế hệ mới với nhiều cải tiến tập trung vào việc giảm tối đa độ trễ, mang đến trải nghiệm viết vô cùng chân thực và mượt mà như viết trên giấy.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Với bút S Pen trên Galaxy Note 20 Ultra 5G, giờ đây bạn đã có thể ghi chú nhanh hơn, đẹp hơn với tính năng chuyển nét chữ thành văn bản, dễ dàng sao chép, cắt dán đoạn văn bản cực nhanh, sau đó bạn có thể lưu ghi chú với nhiều định dạng và chuyển đổi qua lại giữa các thiết bị cho công việc luôn liền mạch.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-11.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>S Pen giờ đây còn làm được nhiều việc hơn thế nhờ bổ sung các tính năng điều khiển không chạm qua kết nối bluetooth, giúp bạn có thể làm chủ chiếc điện thoại từ xa một cách dễ dàng.</p>
                
                                        <h5><strong><span style="font-size:24px">Bộ 3 camera hoàn hảo trong trong từng góc quay</span></strong></h5>
                
                                        <p>Tận hưởng trải nghiệm quay phim, chụp ảnh chuyên nghiệp với bộ ba camera đỉnh cao của Note 20 Ultra 5G bao gồm: Camera chính độ phân giải khủng lên đến tận 108 MP, camera góc siêu rộng 12 MP và camera telephoto 12 MP với khả năng siêu zoom lên đến 50x.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-12.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Camera 108 MP chứa hàng triệu điểm ảnh mang đến những tấm ảnh chất lượng cao, chân thật, sắc nét đến từng chi tiết nhỏ nhất.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-13.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Phần âm thanh của video cũng trở nên rõ ràng hơn nhờ việc chuyển đổi luân phiên giữa 2 micro trước và sau tối ưu cho khả năng lọc tiếng ồn khi quay phim. 
                                        Tạo nên video của riêng bạn thật dễ dàng với loạt tính năng như quay chống rung OIS, quay Slow Motion 120 fps mượt mà, quay video xóa phông,...</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '4',
            ],
            [
                'product_id' => '34',
                'product_name' => 'Samsung Galaxy Note 20 256GB',
                'price_old' => '23990000',
                'price_new' => '15990000',
                'qty_product' => '1000',
                'product_desc' =>  'Màn hình:       Super AMOLED Plus, 6.7", Full HD+
                                    Hệ điểu hành:   Android 11
                                    Chipset:        Exynos 990
                                    Camera sau:     Chính 108 MP & Phụ 12 MP, 12 MP, cảm biến Laser AF
                                    Camera trước:   Chính 10 MP Dual Pixel PDAF
                                    Ram:            8 GB
                                    Bộ nhớ trong:   256 GB
                                    SIM:            2 Nano SIM hoặc 1 Nano SIM + 1 eSIM, Hỗ trợ 4G
                                    Pin, Sạc:       4300 mAh, 25W (60% in 30 min)',
                'product_thumb' => 'samsung-galaxy-note-20-1.jpg',
                'list_thumb_1' => 'samsung-galaxy-note-20-2.jpg',
                'list_thumb_2' => 'samsung-galaxy-note-20-3.jpg',
                'list_thumb_3' => 'samsung-galaxy-note-20-4.jpg',
                'list_thumb_4' => 'samsung-galaxy-note-20-5.jpg',
                'list_thumb_5' => 'samsung-galaxy-note-20-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Thiết kế đẳng cấp xứng tầm siêu phẩm</span></strong></h5>

                                        <p>Samsung Galaxy Note 20 Ultra 5G sở hữu một thiết kế đẹp như một tuyệt tác. 
                                        Samsung đã tối ưu mọi trải nghiệm với kiểu thiết kế tối giản với phần khung nhôm và 2 mặt kính cao cấp, 4 góc sắc cạnh làm tăng sự mạnh mẽ nam tính, nhưng vẫn cho cảm giác cầm nắm dễ chịu và đẳng cấp nhờ 2 cạnh viền được bo cong tinh tế khéo léo.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Đặc biệt, phần màn hình của máy được trang bị kính Corning Gorilla Glass Victus đảm bảo độ bền vượt trội của siêu phẩm Samsung trước mọi va chạm.</p>
                
                                        <h5><strong><span style="font-size:24px">Màn hình “không viền" vượt mọi giới hạn</span></strong></h5>
                
                                        <p>Màn hình của Note 20 Ultra 5G với thiết kế siêu tràn viền, gây ấn tượng mạnh ngay từ cái nhìn đầu tiên là 4 cạnh viền mỏng đến kinh ngạc, mang đến trải nghiệm hiển thị vượt qua giới hạn của một chiếc điện thoại thông minh.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Từ thiết kế cho đến chất lượng đều được Samsung hoàn thiện tỉ mỉ ở mức cao nhất. 
                                        Máy có một màn hình Infinity-O rộng đến 6.9 inch, với công nghệ Dynamic AMOLED 2X cực đỉnh cho chất lượng hiển thị sống động, độ sáng 1500 nit đảm bảo chất lượng hiển thị tốt nhất kể cả khi sử dụng dưới trời nắng gắt.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Đặc biệt, Samsung cũng không quên trang bị tần số quét 120 Hz cho siêu phẩm của mình, cảm nhận độ mượt đến kinh ngạc mỗi khi cuộn trang, mở ứng dụng, xem phim hay hòa mình vào đồ họa cực đỉnh những tựa game mà bạn yêu thích.</p>
                
                                        <h5><span style="font-size:24px"><strong>S Pen thông minh đầy đủ tính năng đáng giá</strong></span></h5>
                
                                        <p>Bút S Pen thế hệ mới với nhiều cải tiến tập trung vào việc giảm tối đa độ trễ, mang đến trải nghiệm viết vô cùng chân thực và mượt mà như viết trên giấy.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Với bút S Pen trên Galaxy Note 20 Ultra 5G, giờ đây bạn đã có thể ghi chú nhanh hơn, đẹp hơn với tính năng chuyển nét chữ thành văn bản, dễ dàng sao chép, cắt dán đoạn văn bản cực nhanh, sau đó bạn có thể lưu ghi chú với nhiều định dạng và chuyển đổi qua lại giữa các thiết bị cho công việc luôn liền mạch.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-11.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>S Pen giờ đây còn làm được nhiều việc hơn thế nhờ bổ sung các tính năng điều khiển không chạm qua kết nối bluetooth, giúp bạn có thể làm chủ chiếc điện thoại từ xa một cách dễ dàng.</p>
                
                                        <h5><strong><span style="font-size:24px">Bộ 3 camera hoàn hảo trong trong từng góc quay</span></strong></h5>
                
                                        <p>Tận hưởng trải nghiệm quay phim, chụp ảnh chuyên nghiệp với bộ ba camera đỉnh cao của Note 20 Ultra 5G bao gồm: Camera chính độ phân giải khủng lên đến tận 108 MP, camera góc siêu rộng 12 MP và camera telephoto 12 MP với khả năng siêu zoom lên đến 50x.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-12.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Camera 108 MP chứa hàng triệu điểm ảnh mang đến những tấm ảnh chất lượng cao, chân thật, sắc nét đến từng chi tiết nhỏ nhất.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-13.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Phần âm thanh của video cũng trở nên rõ ràng hơn nhờ việc chuyển đổi luân phiên giữa 2 micro trước và sau tối ưu cho khả năng lọc tiếng ồn khi quay phim. 
                                        Tạo nên video của riêng bạn thật dễ dàng với loạt tính năng như quay chống rung OIS, quay Slow Motion 120 fps mượt mà, quay video xóa phông,...</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '4',
            ],
            [
                'product_id' => '35',
                'product_name' => 'Samsung Galaxy Note 20 128GB',
                'price_old' => '19990000',
                'price_new' => '13990000',
                'qty_product' => '1000',
                'product_desc' =>  'Màn hình:       Super AMOLED Plus, 6.7", Full HD+
                                    Hệ điểu hành:   Android 11
                                    Chipset:        Exynos 990
                                    Camera sau:     Chính 108 MP & Phụ 12 MP, 12 MP, cảm biến Laser AF
                                    Camera trước:   Chính 10 MP Dual Pixel PDAF
                                    Ram:            8 GB
                                    Bộ nhớ trong:   128 GB
                                    SIM:            2 Nano SIM hoặc 1 Nano SIM + 1 eSIM, Hỗ trợ 4G
                                    Pin, Sạc:       4300 mAh, 25W (60% in 30 min)',
                'product_thumb' => 'samsung-galaxy-note-20-1.jpg',
                'list_thumb_1' => 'samsung-galaxy-note-20-2.jpg',
                'list_thumb_2' => 'samsung-galaxy-note-20-3.jpg',
                'list_thumb_3' => 'samsung-galaxy-note-20-4.jpg',
                'list_thumb_4' => 'samsung-galaxy-note-20-5.jpg',
                'list_thumb_5' => 'samsung-galaxy-note-20-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Thiết kế đẳng cấp xứng tầm siêu phẩm</span></strong></h5>

                                        <p>Samsung Galaxy Note 20 Ultra 5G sở hữu một thiết kế đẹp như một tuyệt tác. 
                                        Samsung đã tối ưu mọi trải nghiệm với kiểu thiết kế tối giản với phần khung nhôm và 2 mặt kính cao cấp, 4 góc sắc cạnh làm tăng sự mạnh mẽ nam tính, nhưng vẫn cho cảm giác cầm nắm dễ chịu và đẳng cấp nhờ 2 cạnh viền được bo cong tinh tế khéo léo.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Đặc biệt, phần màn hình của máy được trang bị kính Corning Gorilla Glass Victus đảm bảo độ bền vượt trội của siêu phẩm Samsung trước mọi va chạm.</p>
                
                                        <h5><strong><span style="font-size:24px">Màn hình “không viền" vượt mọi giới hạn</span></strong></h5>
                
                                        <p>Màn hình của Note 20 Ultra 5G với thiết kế siêu tràn viền, gây ấn tượng mạnh ngay từ cái nhìn đầu tiên là 4 cạnh viền mỏng đến kinh ngạc, mang đến trải nghiệm hiển thị vượt qua giới hạn của một chiếc điện thoại thông minh.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Từ thiết kế cho đến chất lượng đều được Samsung hoàn thiện tỉ mỉ ở mức cao nhất. 
                                        Máy có một màn hình Infinity-O rộng đến 6.9 inch, với công nghệ Dynamic AMOLED 2X cực đỉnh cho chất lượng hiển thị sống động, độ sáng 1500 nit đảm bảo chất lượng hiển thị tốt nhất kể cả khi sử dụng dưới trời nắng gắt.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Đặc biệt, Samsung cũng không quên trang bị tần số quét 120 Hz cho siêu phẩm của mình, cảm nhận độ mượt đến kinh ngạc mỗi khi cuộn trang, mở ứng dụng, xem phim hay hòa mình vào đồ họa cực đỉnh những tựa game mà bạn yêu thích.</p>
                
                                        <h5><span style="font-size:24px"><strong>S Pen thông minh đầy đủ tính năng đáng giá</strong></span></h5>
                
                                        <p>Bút S Pen thế hệ mới với nhiều cải tiến tập trung vào việc giảm tối đa độ trễ, mang đến trải nghiệm viết vô cùng chân thực và mượt mà như viết trên giấy.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Với bút S Pen trên Galaxy Note 20 Ultra 5G, giờ đây bạn đã có thể ghi chú nhanh hơn, đẹp hơn với tính năng chuyển nét chữ thành văn bản, dễ dàng sao chép, cắt dán đoạn văn bản cực nhanh, sau đó bạn có thể lưu ghi chú với nhiều định dạng và chuyển đổi qua lại giữa các thiết bị cho công việc luôn liền mạch.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-11.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>S Pen giờ đây còn làm được nhiều việc hơn thế nhờ bổ sung các tính năng điều khiển không chạm qua kết nối bluetooth, giúp bạn có thể làm chủ chiếc điện thoại từ xa một cách dễ dàng.</p>
                
                                        <h5><strong><span style="font-size:24px">Bộ 3 camera hoàn hảo trong trong từng góc quay</span></strong></h5>
                
                                        <p>Tận hưởng trải nghiệm quay phim, chụp ảnh chuyên nghiệp với bộ ba camera đỉnh cao của Note 20 Ultra 5G bao gồm: Camera chính độ phân giải khủng lên đến tận 108 MP, camera góc siêu rộng 12 MP và camera telephoto 12 MP với khả năng siêu zoom lên đến 50x.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-12.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Camera 108 MP chứa hàng triệu điểm ảnh mang đến những tấm ảnh chất lượng cao, chân thật, sắc nét đến từng chi tiết nhỏ nhất.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-13.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Phần âm thanh của video cũng trở nên rõ ràng hơn nhờ việc chuyển đổi luân phiên giữa 2 micro trước và sau tối ưu cho khả năng lọc tiếng ồn khi quay phim. 
                                        Tạo nên video của riêng bạn thật dễ dàng với loạt tính năng như quay chống rung OIS, quay Slow Motion 120 fps mượt mà, quay video xóa phông,...</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '4',
            ],
            [
                'product_id' => '36',
                'product_name' => 'Samsung Galaxy S21+ 5G 256GB',
                'price_old' => '28990000',
                'price_new' => '23990000',
                'qty_product' => '1000',
                'product_desc' =>  'Màn hình:       Dynamic AMOLED 2X, 6.7", Full HD+
                                    Hệ điểu hành:   Android 11
                                    Chipset:        Exynos 2100
                                    Camera sau:     Chính 108 MP & Phụ 12 MP, 12 MP, cảm biến Laser AF
                                    Camera trước:   Chính 10 MP Dual Pixel PDAF
                                    Ram:            8 GB
                                    Bộ nhớ trong:   256 GB
                                    SIM:            2 Nano SIM hoặc 1 Nano SIM + 1 eSIM, Hỗ trợ 5G
                                    Pin, Sạc:       4800 mAh, 25W (60% in 30 min)',
                'product_thumb' => 'samsung-galaxy-s21-plus-1.jpg',
                'list_thumb_1' => 'samsung-galaxy-s21-plus-2.jpg',
                'list_thumb_2' => 'samsung-galaxy-s21-plus-3.jpg',
                'list_thumb_3' => 'samsung-galaxy-s21-plus-4.jpg',
                'list_thumb_4' => 'samsung-galaxy-s21-plus-5.jpg',
                'list_thumb_5' => 'samsung-galaxy-s21-plus-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Thiết kế đẳng cấp xứng tầm siêu phẩm</span></strong></h5>

                                        <p>Samsung Galaxy Note 20 Ultra 5G sở hữu một thiết kế đẹp như một tuyệt tác. 
                                        Samsung đã tối ưu mọi trải nghiệm với kiểu thiết kế tối giản với phần khung nhôm và 2 mặt kính cao cấp, 4 góc sắc cạnh làm tăng sự mạnh mẽ nam tính, nhưng vẫn cho cảm giác cầm nắm dễ chịu và đẳng cấp nhờ 2 cạnh viền được bo cong tinh tế khéo léo.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Đặc biệt, phần màn hình của máy được trang bị kính Corning Gorilla Glass Victus đảm bảo độ bền vượt trội của siêu phẩm Samsung trước mọi va chạm.</p>
                
                                        <h5><strong><span style="font-size:24px">Màn hình “không viền" vượt mọi giới hạn</span></strong></h5>
                
                                        <p>Màn hình của Note 20 Ultra 5G với thiết kế siêu tràn viền, gây ấn tượng mạnh ngay từ cái nhìn đầu tiên là 4 cạnh viền mỏng đến kinh ngạc, mang đến trải nghiệm hiển thị vượt qua giới hạn của một chiếc điện thoại thông minh.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Từ thiết kế cho đến chất lượng đều được Samsung hoàn thiện tỉ mỉ ở mức cao nhất. 
                                        Máy có một màn hình Infinity-O rộng đến 6.9 inch, với công nghệ Dynamic AMOLED 2X cực đỉnh cho chất lượng hiển thị sống động, độ sáng 1500 nit đảm bảo chất lượng hiển thị tốt nhất kể cả khi sử dụng dưới trời nắng gắt.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Đặc biệt, Samsung cũng không quên trang bị tần số quét 120 Hz cho siêu phẩm của mình, cảm nhận độ mượt đến kinh ngạc mỗi khi cuộn trang, mở ứng dụng, xem phim hay hòa mình vào đồ họa cực đỉnh những tựa game mà bạn yêu thích.</p>
                
                                        <h5><span style="font-size:24px"><strong>S Pen thông minh đầy đủ tính năng đáng giá</strong></span></h5>
                
                                        <p>Bút S Pen thế hệ mới với nhiều cải tiến tập trung vào việc giảm tối đa độ trễ, mang đến trải nghiệm viết vô cùng chân thực và mượt mà như viết trên giấy.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Với bút S Pen trên Galaxy Note 20 Ultra 5G, giờ đây bạn đã có thể ghi chú nhanh hơn, đẹp hơn với tính năng chuyển nét chữ thành văn bản, dễ dàng sao chép, cắt dán đoạn văn bản cực nhanh, sau đó bạn có thể lưu ghi chú với nhiều định dạng và chuyển đổi qua lại giữa các thiết bị cho công việc luôn liền mạch.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-11.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>S Pen giờ đây còn làm được nhiều việc hơn thế nhờ bổ sung các tính năng điều khiển không chạm qua kết nối bluetooth, giúp bạn có thể làm chủ chiếc điện thoại từ xa một cách dễ dàng.</p>
                
                                        <h5><strong><span style="font-size:24px">Bộ 3 camera hoàn hảo trong trong từng góc quay</span></strong></h5>
                
                                        <p>Tận hưởng trải nghiệm quay phim, chụp ảnh chuyên nghiệp với bộ ba camera đỉnh cao của Note 20 Ultra 5G bao gồm: Camera chính độ phân giải khủng lên đến tận 108 MP, camera góc siêu rộng 12 MP và camera telephoto 12 MP với khả năng siêu zoom lên đến 50x.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-12.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Camera 108 MP chứa hàng triệu điểm ảnh mang đến những tấm ảnh chất lượng cao, chân thật, sắc nét đến từng chi tiết nhỏ nhất.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-13.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Phần âm thanh của video cũng trở nên rõ ràng hơn nhờ việc chuyển đổi luân phiên giữa 2 micro trước và sau tối ưu cho khả năng lọc tiếng ồn khi quay phim. 
                                        Tạo nên video của riêng bạn thật dễ dàng với loạt tính năng như quay chống rung OIS, quay Slow Motion 120 fps mượt mà, quay video xóa phông,...</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '4',
            ],
            [
                'product_id' => '37',
                'product_name' => 'Samsung Galaxy S21+ 5G 128GB',
                'price_old' => '23990000',
                'price_new' => '20990000',
                'qty_product' => '1000',
                'product_desc' =>  'Màn hình:       Dynamic AMOLED 2X, 6.7", Full HD+
                                    Hệ điểu hành:   Android 11
                                    Chipset:        Exynos 2100
                                    Camera sau:     Chính 108 MP & Phụ 12 MP, 12 MP, cảm biến Laser AF
                                    Camera trước:   Chính 10 MP Dual Pixel PDAF
                                    Ram:            8 GB
                                    Bộ nhớ trong:   128GB
                                    SIM:            2 Nano SIM hoặc 1 Nano SIM + 1 eSIM, Hỗ trợ 5G
                                    Pin, Sạc:       4800 mAh, 25W (60% in 30 min)',
                'product_thumb' => 'samsung-galaxy-s21-plus-1.jpg',
                'list_thumb_1' => 'samsung-galaxy-s21-plus-2.jpg',
                'list_thumb_2' => 'samsung-galaxy-s21-plus-3.jpg',
                'list_thumb_3' => 'samsung-galaxy-s21-plus-4.jpg',
                'list_thumb_4' => 'samsung-galaxy-s21-plus-5.jpg',
                'list_thumb_5' => 'samsung-galaxy-s21-plus-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Thiết kế đẳng cấp xứng tầm siêu phẩm</span></strong></h5>

                                        <p>Samsung Galaxy Note 20 Ultra 5G sở hữu một thiết kế đẹp như một tuyệt tác. 
                                        Samsung đã tối ưu mọi trải nghiệm với kiểu thiết kế tối giản với phần khung nhôm và 2 mặt kính cao cấp, 4 góc sắc cạnh làm tăng sự mạnh mẽ nam tính, nhưng vẫn cho cảm giác cầm nắm dễ chịu và đẳng cấp nhờ 2 cạnh viền được bo cong tinh tế khéo léo.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Đặc biệt, phần màn hình của máy được trang bị kính Corning Gorilla Glass Victus đảm bảo độ bền vượt trội của siêu phẩm Samsung trước mọi va chạm.</p>
                
                                        <h5><strong><span style="font-size:24px">Màn hình “không viền" vượt mọi giới hạn</span></strong></h5>
                
                                        <p>Màn hình của Note 20 Ultra 5G với thiết kế siêu tràn viền, gây ấn tượng mạnh ngay từ cái nhìn đầu tiên là 4 cạnh viền mỏng đến kinh ngạc, mang đến trải nghiệm hiển thị vượt qua giới hạn của một chiếc điện thoại thông minh.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Từ thiết kế cho đến chất lượng đều được Samsung hoàn thiện tỉ mỉ ở mức cao nhất. 
                                        Máy có một màn hình Infinity-O rộng đến 6.9 inch, với công nghệ Dynamic AMOLED 2X cực đỉnh cho chất lượng hiển thị sống động, độ sáng 1500 nit đảm bảo chất lượng hiển thị tốt nhất kể cả khi sử dụng dưới trời nắng gắt.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Đặc biệt, Samsung cũng không quên trang bị tần số quét 120 Hz cho siêu phẩm của mình, cảm nhận độ mượt đến kinh ngạc mỗi khi cuộn trang, mở ứng dụng, xem phim hay hòa mình vào đồ họa cực đỉnh những tựa game mà bạn yêu thích.</p>
                
                                        <h5><span style="font-size:24px"><strong>S Pen thông minh đầy đủ tính năng đáng giá</strong></span></h5>
                
                                        <p>Bút S Pen thế hệ mới với nhiều cải tiến tập trung vào việc giảm tối đa độ trễ, mang đến trải nghiệm viết vô cùng chân thực và mượt mà như viết trên giấy.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Với bút S Pen trên Galaxy Note 20 Ultra 5G, giờ đây bạn đã có thể ghi chú nhanh hơn, đẹp hơn với tính năng chuyển nét chữ thành văn bản, dễ dàng sao chép, cắt dán đoạn văn bản cực nhanh, sau đó bạn có thể lưu ghi chú với nhiều định dạng và chuyển đổi qua lại giữa các thiết bị cho công việc luôn liền mạch.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-11.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>S Pen giờ đây còn làm được nhiều việc hơn thế nhờ bổ sung các tính năng điều khiển không chạm qua kết nối bluetooth, giúp bạn có thể làm chủ chiếc điện thoại từ xa một cách dễ dàng.</p>
                
                                        <h5><strong><span style="font-size:24px">Bộ 3 camera hoàn hảo trong trong từng góc quay</span></strong></h5>
                
                                        <p>Tận hưởng trải nghiệm quay phim, chụp ảnh chuyên nghiệp với bộ ba camera đỉnh cao của Note 20 Ultra 5G bao gồm: Camera chính độ phân giải khủng lên đến tận 108 MP, camera góc siêu rộng 12 MP và camera telephoto 12 MP với khả năng siêu zoom lên đến 50x.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-12.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Camera 108 MP chứa hàng triệu điểm ảnh mang đến những tấm ảnh chất lượng cao, chân thật, sắc nét đến từng chi tiết nhỏ nhất.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-13.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Phần âm thanh của video cũng trở nên rõ ràng hơn nhờ việc chuyển đổi luân phiên giữa 2 micro trước và sau tối ưu cho khả năng lọc tiếng ồn khi quay phim. 
                                        Tạo nên video của riêng bạn thật dễ dàng với loạt tính năng như quay chống rung OIS, quay Slow Motion 120 fps mượt mà, quay video xóa phông,...</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '4',
            ],
            [
                'product_id' => '38',
                'product_name' => 'Samsung Galaxy S21 Ultra 5G 256GB',
                'price_old' => '30990000',
                'price_new' => '25990000',
                'qty_product' => '1000',
                'product_desc' =>  'Màn hình:       Dynamic AMOLED 2X, 6.8", Quad HD+ (2K+)
                                    Hệ điểu hành:   Android 11
                                    Chipset:        Exynos 2100
                                    Camera sau:     Chính 108 MP & Phụ 12 MP, 12 MP, cảm biến Laser AF
                                    Camera trước:   Chính 10 MP Dual Pixel PDAF
                                    Ram:            12 GB
                                    Bộ nhớ trong:   256GB
                                    SIM:            2 Nano SIM hoặc 1 Nano SIM + 1 eSIM, Hỗ trợ 5G
                                    Pin, Sạc:       5000 mAh, 25W (60% in 30 min)',
                'product_thumb' => 'samsung-galaxy-s21-ultra-1.jpg',
                'list_thumb_1' => 'samsung-galaxy-s21-ultra-2.jpg',
                'list_thumb_2' => 'samsung-galaxy-s21-ultra-3.jpg',
                'list_thumb_3' => 'samsung-galaxy-s21-ultra-4.jpg',
                'list_thumb_4' => 'samsung-galaxy-s21-ultra-5.jpg',
                'list_thumb_5' => 'samsung-galaxy-s21-ultra-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Thiết kế đẳng cấp xứng tầm siêu phẩm</span></strong></h5>

                                        <p>Samsung Galaxy Note 20 Ultra 5G sở hữu một thiết kế đẹp như một tuyệt tác. 
                                        Samsung đã tối ưu mọi trải nghiệm với kiểu thiết kế tối giản với phần khung nhôm và 2 mặt kính cao cấp, 4 góc sắc cạnh làm tăng sự mạnh mẽ nam tính, nhưng vẫn cho cảm giác cầm nắm dễ chịu và đẳng cấp nhờ 2 cạnh viền được bo cong tinh tế khéo léo.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Đặc biệt, phần màn hình của máy được trang bị kính Corning Gorilla Glass Victus đảm bảo độ bền vượt trội của siêu phẩm Samsung trước mọi va chạm.</p>
                
                                        <h5><strong><span style="font-size:24px">Màn hình “không viền" vượt mọi giới hạn</span></strong></h5>
                
                                        <p>Màn hình của Note 20 Ultra 5G với thiết kế siêu tràn viền, gây ấn tượng mạnh ngay từ cái nhìn đầu tiên là 4 cạnh viền mỏng đến kinh ngạc, mang đến trải nghiệm hiển thị vượt qua giới hạn của một chiếc điện thoại thông minh.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Từ thiết kế cho đến chất lượng đều được Samsung hoàn thiện tỉ mỉ ở mức cao nhất. 
                                        Máy có một màn hình Infinity-O rộng đến 6.9 inch, với công nghệ Dynamic AMOLED 2X cực đỉnh cho chất lượng hiển thị sống động, độ sáng 1500 nit đảm bảo chất lượng hiển thị tốt nhất kể cả khi sử dụng dưới trời nắng gắt.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Đặc biệt, Samsung cũng không quên trang bị tần số quét 120 Hz cho siêu phẩm của mình, cảm nhận độ mượt đến kinh ngạc mỗi khi cuộn trang, mở ứng dụng, xem phim hay hòa mình vào đồ họa cực đỉnh những tựa game mà bạn yêu thích.</p>
                
                                        <h5><span style="font-size:24px"><strong>S Pen thông minh đầy đủ tính năng đáng giá</strong></span></h5>
                
                                        <p>Bút S Pen thế hệ mới với nhiều cải tiến tập trung vào việc giảm tối đa độ trễ, mang đến trải nghiệm viết vô cùng chân thực và mượt mà như viết trên giấy.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Với bút S Pen trên Galaxy Note 20 Ultra 5G, giờ đây bạn đã có thể ghi chú nhanh hơn, đẹp hơn với tính năng chuyển nét chữ thành văn bản, dễ dàng sao chép, cắt dán đoạn văn bản cực nhanh, sau đó bạn có thể lưu ghi chú với nhiều định dạng và chuyển đổi qua lại giữa các thiết bị cho công việc luôn liền mạch.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-11.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>S Pen giờ đây còn làm được nhiều việc hơn thế nhờ bổ sung các tính năng điều khiển không chạm qua kết nối bluetooth, giúp bạn có thể làm chủ chiếc điện thoại từ xa một cách dễ dàng.</p>
                
                                        <h5><strong><span style="font-size:24px">Bộ 3 camera hoàn hảo trong trong từng góc quay</span></strong></h5>
                
                                        <p>Tận hưởng trải nghiệm quay phim, chụp ảnh chuyên nghiệp với bộ ba camera đỉnh cao của Note 20 Ultra 5G bao gồm: Camera chính độ phân giải khủng lên đến tận 108 MP, camera góc siêu rộng 12 MP và camera telephoto 12 MP với khả năng siêu zoom lên đến 50x.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-12.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Camera 108 MP chứa hàng triệu điểm ảnh mang đến những tấm ảnh chất lượng cao, chân thật, sắc nét đến từng chi tiết nhỏ nhất.</p>
                
                                        <p><img alt="" src="public/upload/images/samsung-galaxy-note-20-ultra-5g-13.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Phần âm thanh của video cũng trở nên rõ ràng hơn nhờ việc chuyển đổi luân phiên giữa 2 micro trước và sau tối ưu cho khả năng lọc tiếng ồn khi quay phim. 
                                        Tạo nên video của riêng bạn thật dễ dàng với loạt tính năng như quay chống rung OIS, quay Slow Motion 120 fps mượt mà, quay video xóa phông,...</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '4',
            ],
//-------------------------------------------------OPPO-------------------------------------------------//
            [
                'product_id' => '39',
                'product_name' => 'OPPO Find X3 Pro 5G',
                'price_old' => '28990000',
                'price_new' => '25100000',
                'qty_product' => '350',
                'product_desc' =>  'Màn hình:       AMOLED, 6.7", Quad HD+ (2K+)
                                    Hệ điểu hành:   Android 11
                                    Chipset:        Snapdragon 888
                                    Camera sau:     Chính 50 MP & Phụ 50 MP, 13 MP, 3 MP
                                    Camera trước:   Chính 32 MP panorama
                                    Ram:            12 GB
                                    Bộ nhớ trong:   256 GB
                                    SIM:            2 Nano SIM (SIM 2 chung khe thẻ nhớ) Hỗ trợ 5G
                                    Pin, Sạc:       4500 mAh, 65 W (40% in 10 min)',
                'product_thumb' => 'oppo-find-x3-pro-1.jpg',
                'list_thumb_1' => 'oppo-find-x3-pro-2.jpg',
                'list_thumb_2' => 'oppo-find-x3-pro-3.jpg',
                'list_thumb_3' => 'oppo-find-x3-pro-4.jpg',
                'list_thumb_4' => 'oppo-find-x3-pro-5.jpg',
                'list_thumb_5' => 'oppo-find-x3-pro-6.jpg',
                'product_content' =>    '<h5><strong><span style="font-size:24px">Kết quả của sự sáng tạo không ngừng</span></strong></h5>

                                        <p>Nếu nhìn qua mặt lưng của OPPO Find X3 Pro 5G thì bạn sẽ bất ngờ ngay với cụm camera sau, 
                                        được tạo hình giống như miệng núi lửa, thiết kế này đã ngốn rất nhiều thời gian và công sức của nhà sản xuất để mang đến cho người dùng sự khác biệt mới lạ.</p>
                
                                        <p><img alt="" src="public/upload/images/oppo-find-x3-pro-7.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>OPPO trang bị cho Find X3 Pro 5G cả hai mặt bằng kính cường lực giúp mang lại sự bền bỉ và sang trọng, khung viền cấu tạo từ hợp kim cao cấp và được gia công tỉ mỉ làm chiếc điện thoại trở nên mỏng, nhẹ và đẹp mắt hơn rất nhiều.</p>
                
                                        <p><img alt="" src="public/upload/images/oppo-find-x3-pro-8.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Thiết kế màn hình tràn viền cũng làm nổi bật mặt trước của Find X3 Pro 5G, chỉ bằng những quan sát đầu tiên ta đã có thể thấy sự đẳng cấp và sang trọng của chiếc điện thoại này.</p>
                
                                        <p><img alt="" src="public/upload/images/oppo-find-x3-pro-9.jpg" style="height:500px; width:750px" /></p>
                
                                        <h5><strong><span style="font-size:24px">Mạnh mẽ hàng đầu với Snapdragon 888</span></strong></h5>
                
                                        <p>OPPO Find X3 Pro 5G mang hiệu năng hàng đầu trong thế giới điện thoại Android khi sở hữu con chip Snapdragon 888 8 nhân mới nhất của Qualcomm (05/2021) được sản xuất trên tiến trình 5 nm mang lại tốc độ xử lý nhanh hơn, AI thông minh hơn và tiết kiệm năng lượng hơn so với thế hệ trước. </p>
                
                                        <p><img alt="" src="public/upload/images/oppo-find-x3-pro-10.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Snapdragon 888 có xung nhịp tối đa lên đến 2.84 GHz, đi kèm 12 GB RAM cho máy hoạt động mượt mà, đa nhiệm không giật lag để người dùng cảm nhận trọn vẹn từng khung giờ giải trí cao cấp.</p>
                
                                        <p><img alt="" src="public/upload/images/oppo-find-x3-pro-11.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Ngoài cung cấp một hiệu năng cực kỳ mạnh mẽ, Snapdragon 888 còn sử dụng modem 5G tích hợp giúp giảm diện tích cho máy mỏng và nhẹ hơn. Kết nối 5G mang đến thế giới giải trí mượt mà, đa dạng trải nghiệm đỉnh cao cho người dùng. Hãy cùng tận hưởng những giây phút sống động trên những tựa game đồ họa cao và phim chất lượng mà không phải chờ đợi.</p>
                
                                        <h5><span style="font-size:24px"><strong>Máy ảnh xuất sắc từ ngoài vào trong</strong></span></h5>
                
                                        <p>OPPO Find X3 Pro 5G được ưu ái bởi dàn camera và hiệu năng khủng, trang bị camera hiển vi cho khả năng chụp gần một chi tiết đến bất ngờ, cả những chi tiết mắt thường khó nhìn thấy. Sở hữu camera chính độ phân giải 50 MP, camera góc rộng 50 MP, camera tele 13 MP và cuối cùng là 3 MP cho camera macro.</p>
                
                                        <p><img alt="" src="public/upload/images/oppo-find-x3-pro-12.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Sản phẩm tập trung khá nhiều vào phần hiệu năng máy ảnh, tính năng Al camera được nâng cấp cho phép camera của Find X3 Pro 5G tự động xác định và cân chỉnh tông màu phù hợp với tùng không gian riêng hứa hẹn sẽ cho ra đời những bức ảnh rực rỡ và lung linh nhất.
                                        Chế độ chụp cảnh đêm siêu đẹp đã có mặt tại Find X3 Pro 5G hỗ trợ thêm ánh sáng và bắt mọi khung cảnh một cách rõ ràng sống động bất kể không gian của đêm tối. Camera siêu cận đưa người dùng đến khám phá một thế giới chi tiết hơn của những cảnh đẹp lộng lẫy đầy đắm chìm.</p>
                
                                        <p><img alt="" src="public/upload/images/oppo-find-x3-pro-13.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Bật tung sáng tạo của bạn bằng các thước phim ổn định mượt mà với tính năng chống rung OIS, giờ đây người dùng có thể thỏa sức quay video chất lượng cao chuyên nghiệp và tràn đầy thú vị ngay trên smartphone.
                                        Camera selfie có độ phân giải 32 MP cho khả năng chụp ảnh rõ ràng và sắc nét. Hỗ trợ các tính năng làm đẹp và quay phim chất lượng. Bạn chỉ cần tạo kiểu, còn lại bạn hãy để Find X3 Pro 5G chăm chút cho từng đường nét của mình.</p>
                
                                        <h5><strong><span style="font-size:24px">Trang bị viên pin thông minh</span></strong></h5>
                
                                        <p>OPPO Find X3 Pro 5G sử dụng viên pin đi kèm nhiều chức năng hỗ trợ để có được hiệu suất tốt nhất đến người dùng. Dung lượng pin 4500 mAh khá ổn trong thời điểm hiện tại, cung cấp năng lượng phục vụ nhu cầu người dùng thoải mái cả ngày dài.</p>
                
                                        <p><img alt="" src="public/upload/images/oppo-find-x3-pro-14.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>Find X3 Pro 5G hỗ trợ sạc nhanh công suất đến 65 W, cho khả năng sạc được 40% chỉ trong vòng 10 phút. Củ sạc nhanh khiến biết bao khách hàng yêu thích sự giải trí, với một viên pin chất lượng kết hợp với một hiệu năng xuất sắc. </p>
                
                                        <p><img alt="" src="public/upload/images/oppo-find-x3-pro-15.jpg" style="height:500px; width:750px" /></p>
                
                                        <p>OPPO lần này đã cho ra mắt một sản phẩm cao cấp cả về kiểu dáng ấn tượng lẫn hiệu năng tuyệt vời. OPPO Find X3 Pro 5G hứa hẹn đưa tên tuổi OPPO đến nhiều người dùng với thiết kế độc đáo, đậm chất riêng và chất lượng phần mềm mạnh mẽ.</p>',
                'selling_products' => 'Bán chạy',
                'featured_products' => 'Nổi bật',
                'status' => '1',
                'cate_id' => '5',
            ],
        ];
        DB::table('product')->insert($data);
    }
}
