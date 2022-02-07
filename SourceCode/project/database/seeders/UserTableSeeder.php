<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
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
                'id'=>'1',
                'fullname'=>'Lê Sỹ Duy',
                'username'=> 'duy',
                'password'=> bcrypt('1'),
                'email'=> '5399duy@gmail.com',
                'phone'=> '0111111111',
                'address'=> 'Thuận An, Bình Dương',
                'gender'=> 'male',
                'is_active'=> '1',
                'status'=> '1',
            ],
            [
                'id'=>'2',
                'fullname'=>'Phan Trần Hoài Bảo',
                'username'=> 'bao123',
                'password'=> bcrypt('123'),
                'email'=> 'bao123@gmail.com',
                'phone'=> '0222222222',
                'address'=> 'Phú Giáo, Bình Phước',
                'gender'=> 'male',
                'is_active'=> '1',
                'status'=> '2',
            ],
            [
                'id'=>'3',
                'fullname'=>'Lê Văn Đông',
                'username'=> 'dong123',
                'password'=> bcrypt('123'),
                'email'=> 'dong123@gmail.com',
                'phone'=> '0333333333',
                'address'=> 'Bến Cát, Bình Dương',
                'gender'=> 'male',
                'is_active'=> '1',
                'status'=> '1',
            ],
            [
                'id'=>'4',
                'fullname'=>'Tăng Trung Hiếu',
                'username'=> 'hieu123',
                'password'=> bcrypt('123'),
                'email'=> 'hieu123@gmail.com',
                'phone'=> '0444444444',
                'address'=> 'Dĩ An, Bình Dương',
                'gender'=> 'male',
                'is_active'=> '1',
                'status'=> '2',
            ],
            [
                'id'=>'5',
                'fullname'=>'Trần Ngọc Hoài',
                'username'=> 'hoai123',
                'password'=> bcrypt('123'),
                'email'=> 'hoai123@gmail.com',
                'phone'=> '0555555555',
                'address'=> 'Thủ Dầu Một, Bình Dương',
                'gender'=> 'male',
                'is_active'=> '1',
                'status'=> '1',
            ],
            [
                'id'=>'6',
                'fullname'=>'Nguyễn Văn Hoàng',
                'username'=> 'hoang123',
                'password'=> bcrypt('123'),
                'email'=> 'hoang123@gmail.com',
                'phone'=> '0666666666',
                'address'=> 'Dầu Tiếng, Bình Dương',
                'gender'=> 'male',
                'is_active'=> '1',
                'status'=> '2',
            ],
        ];
        DB::table('users')->insert($data);
    }
}
