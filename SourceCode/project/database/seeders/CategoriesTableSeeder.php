<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
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
                'cate_id'=>'1',
                'cate_name'=> 'iPhone',
                'status'=> '1',
            ],
            [
                'cate_id'=>'2',
                'cate_name'=> 'Xiaomi',
                'status'=> '1',
            ],
            [
                'cate_id'=>'3',
                'cate_name'=> 'Huawei',
                'status'=> '1',
            ],
            [
                'cate_id'=>'4',
                'cate_name'=> 'Samsung',
                'status'=> '1',
            ],
            [
                'cate_id'=>'5',
                'cate_name'=> 'Oppo',
                'status'=> '1',
            ],
            [
                'cate_id'=>'6',
                'cate_name'=> 'Sony',
                'status'=> '1',
            ],
        ];
        DB::table('category')->insert($data);
    }
}
