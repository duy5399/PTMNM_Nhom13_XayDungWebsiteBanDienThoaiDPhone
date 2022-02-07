<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([AdminTableSeeder::class]);
        $this->call([UserTableSeeder::class]);
        $this->call([CategoriesTableSeeder::class]);
        $this->call([ProductTableSeeder::class]);
        $this->call([BillTableSeeder::class]);
        $this->call([BillDetailTableSeeder::class]);
        $this->call([SliderTableSeeder::class]);
        $this->call([BlogcateTableSeeder::class]);
    }
}
