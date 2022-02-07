<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
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
                'username'=> 'admin',
                'password'=> bcrypt('1'),
                'email'=> 'admin1@gmail.com',
                'phone'=> '0111111111',
                'address'=> 'Thuận An, Bình Dương',
                'gender'=> 'male',
                'avatar'=> 'saitama.jpg',
                'status'=> '1',
                'role'=> '1',
            ],
            [
                'id'=>'2',
                'fullname'=>'Phan Trần Hoài Bảo',
                'username'=> 'admin2',
                'password'=> bcrypt('admin2'),
                'email'=> 'admin2@gmail.com',
                'phone'=> '0222222222',
                'address'=> 'Phú Giáo, Bình Phước',
                'gender'=> 'male',
                'avatar'=> 'bao.jpg',
                'status'=> '1',
                'role'=> '2',
            ],
            [
                'id'=>'3',
                'fullname'=>'Lê Văn Đông',
                'username'=> 'admin3',
                'password'=> bcrypt('admin3'),
                'email'=> 'admin3@gmail.com',
                'phone'=> '0333333333',
                'address'=> 'Bến Cát, Bình Dương',
                'gender'=> 'male',
                'avatar'=> 'dong.jpg',
                'status'=> '1',
                'role'=> '1',
            ],
            [
                'id'=>'4',
                'fullname'=>'Tăng Trung Hiếu',
                'username'=> 'admin4',
                'password'=> bcrypt('admin4'),
                'email'=> 'admin4@gmail.com',
                'phone'=> '0444444444',
                'address'=> 'Dĩ An, Bình Dương',
                'gender'=> 'male',
                'avatar'=> 'hieu.jpg',
                'status'=> '1',
                'role'=> '2',
            ],
            [
                'id'=>'5',
                'fullname'=>'Trần Ngọc Hoài',
                'username'=> 'admin5',
                'password'=> bcrypt('admin5'),
                'email'=> 'admin5@gmail.com',
                'phone'=> '0555555555',
                'address'=> 'Thủ Dầu Một, Bình Dương',
                'gender'=> 'male',
                'avatar'=> 'hoai.jpg',
                'status'=> '1',
                'role'=> '1',
            ],
            [
                'id'=>'6',
                'fullname'=>'Nguyễn Văn Hoàng',
                'username'=> 'admin6',
                'password'=> bcrypt('admin6'),
                'email'=> 'admin6@gmail.com',
                'phone'=> '0666666666',
                'address'=> 'Dầu Tiếng, Bình Dương',
                'gender'=> 'male',
                'avatar'=> 'hoang.jpg',
                'status'=> '1',
                'role'=> '2',
            ],
        ];
        DB::table('admin')->insert($data);
    }
}
