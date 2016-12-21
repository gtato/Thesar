<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['name' => 'pa përcaktuar']);
        DB::table('categories')->insert(['name' => 'emër']);
        DB::table('categories')->insert(['name' => 'mbiemër']);
        DB::table('categories')->insert(['name' => 'përemër']);
        DB::table('categories')->insert(['name' => 'folje']);
        DB::table('categories')->insert(['name' => 'ndajfolje']);
        DB::table('categories')->insert(['name' => 'lidhëz']);

    }
}
