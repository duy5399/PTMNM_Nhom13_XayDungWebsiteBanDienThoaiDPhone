<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillTableSeeder extends Seeder
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
            [
                'bill_id'=>'1',
                'user_id'=>'1',
                'fullname'=>'Lê Sỹ Duy',
                'username'=> 'duy',
                'email'=> '5399duy@gmail.com',
                'phone'=> '0111111111',
                'address'=> 'Thuận An, Bình Dương',
                'note'=> 'thanh toán bằng tiền mặt khi nhận hàng',
                'total'=> '42490000',
                'status'=> '1',
            ],
            [
                'bill_id'=>'2',
                'user_id'=>'5',
                'fullname'=>'Trần Ngọc Hoài',
                'username'=> 'hoai123',
                'email'=> 'hoai123@gmail.com',
                'phone'=> '0555555555',
                'address'=> 'Thủ Dầu Một, Bình Dương',
                'note'=> 'Hoài mua điện thoại',
                'total'=> '43980000',
                'status'=> '1',
            ],
            [
                'bill_id'=>'3',
                'user_id'=>'3',
                'fullname'=>'Văn Đông',
                'username'=> 'dong123',
                'email'=> 'dong123@gmail.com',
                'phone'=> '0333333333',
                'address'=> 'Bến Cát, Bình Dương',
                'note'=> 'Đông bán hoa mua điện thoại VIP',
                'total'=> '13000000',
                'status'=> '1',
            ],
            [
                'bill_id'=>'4',
                'user_id'=>'2',
                'fullname'=>'Bảo',
                'username'=> 'bao123',
                'email'=> 'bao123@gmail.com',
                'phone'=> '0222222222',
                'address'=> 'Phú Giáo, Bình Phước',
                'note'=> 'baoenzo',
                'total'=> '380000000',
                'status'=> '1',
            ],
            [
                'bill_id'=>'5',
                'user_id'=>'4',
                'fullname'=>'TTHieu',
                'username'=> 'hieu123',
                'email'=> 'hieu123@gmail.com',
                'phone'=> '0444444444',
                'address'=> 'Dĩ An, Bình Dương',
                'note'=> 'Giao hàng Trà sữa ',
                'total'=> '2510000000',
                'status'=> '1',
            ],
        ];
        DB::table('bill')->insert($data);
    }
}
