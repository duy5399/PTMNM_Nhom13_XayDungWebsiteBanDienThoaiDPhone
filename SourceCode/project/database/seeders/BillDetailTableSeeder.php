<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillDetailTableSeeder extends Seeder
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
                'bill_id' => '1',
                'product_id' => '1',
                'product_name' => 'Huawei Mate 30 Pro',
                'product_thumb' => 'huawei-mate-30-pro-1.jpg',
                'price_new' => '13000000',
                'qty' => '2',
                'sub_total' => '26000000',
                'status' => '1',
            ],
            [
                'bill_id' => '1',
                'product_id' => '11',
                'product_name' => 'Xiaomi Mi 11 5G',
                'product_thumb' => 'xiaomi-mi-11-1.jpg',
                'price_new' => '16490000',
                'qty' => '1',
                'sub_total' => '16490000',
                'status' => '1',
            ],
            [
                'bill_id' => '2',
                'product_id' => '31',
                'product_name' => 'Samsung Galaxy Note 20 Ultra 5G 128GB',
                'product_thumb' => 'samsung-galaxy-note-20-ultra-5g-1.jpg',
                'price_new' => '21990000',
                'qty' => '2',
                'sub_total' => '43980000',
                'status' => '1',
            ],
            [
                'bill_id' => '3',
                'product_id' => '1',
                'product_name' => 'Huawei Mate 30 Pro',
                'product_thumb' => 'huawei-mate-30-pro-1.jpg',
                'price_new' => '13000000',
                'qty' => '1',
                'sub_total' => '13000000',
                'status' => '1',
            ],
            [
                'bill_id' => '4',
                'product_id' => '20',
                'product_name' => 'iPhone 12 Pro Max',
                'product_thumb' => 'iphone-12-pro-max-1.jpg',
                'price_new' => '38000000',
                'qty' => '10',
                'sub_total' => '380000000',
                'status' => '1',
            ],
            [
                'bill_id' => '5',
                'product_id' => '39',
                'product_name' => 'OPPO Find X3 Pro 5G',
                'product_thumb' => 'oppo-find-x3-pro-1.jpg',
                'price_new' => '25100000',
                'qty' => '100',
                'sub_total' => '2510000000',
                'status' => '1',
            ],
        ];
        DB::table('billdetail')->insert($data);
    }
}
