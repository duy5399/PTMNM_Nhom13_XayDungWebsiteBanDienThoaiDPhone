<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogcateTableSeeder extends Seeder
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
                'blogcate_id'=>'1',
                'blogcate_name'=> 'Đánh giá',
                'status'=> '1',
            ],
            [
                'blogcate_id'=>'2',
                'blogcate_name'=> 'Mẹo hay',
                'status'=> '1',
            ],
            [
                'blogcate_id'=>'3',
                'blogcate_name'=> 'Tư vấn',
                'status'=> '1',
            ],
            [
                'blogcate_id'=>'4',
                'blogcate_name'=> 'Khuyến mãi',
                'status'=> '1',
            ],
        ];
        DB::table('blogcate')->insert($data);
    }
}
