<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderTableSeeder extends Seeder
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
                'slider_id'=>'1',
                'slider_name'=> 'Slider 1',
                'slider_img'=> 'dat-truoc-oppo-f5.png',
                'creator'=> 'admin',
                'status'=> '1',
            ],
            [
                'slider_id'=>'2',
                'slider_name'=> 'Slider 2',
                'slider_img'=> 'xa-hang-iphone-thang-7.png',
                'creator'=> 'admin',
                'status'=> '1',
            ],
            [
                'slider_id'=>'3',
                'slider_name'=> 'Slider 3',
                'slider_img'=> 'mo-ban-doc-quyen-redmi-note-10.jpg',
                'creator'=> 'admin1',
                'status'=> '1',
            ],
            [
                'slider_id'=>'4',
                'slider_name'=> 'Slider 4',
                'slider_img'=> 'samsung-thang-7.jpg',
                'creator'=> 'admin2',
                'status'=> '1',
            ],
        ];
        DB::table('slider')->insert($data);
    }
}
