<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'id'=>1,
                'name'=>'Hoa chúc mừng',
                'description'=>'Hoa chúc mừng',
                'images' => 'collection1.jpg'
            ],
            [
                'id'=>2,
                'name'=>'Hoa sinh nhật',
                'description'=>'Hoa sinh nhật',
                'images' => 'collection1.jpg'
            ],
            [
                'id'=>3,
                'name'=>'Hoa tình yêu',
                'description'=>'Hoa tình yêu',
                'images' => 'collection1.jpg'
            ],
            [
                'id'=>4,
                'name'=>'Hoa giỏ, hộp',
                'description'=>'Hoa giỏ, hộp',
                'images' => 'collection1.jpg'
            ],
            [
                'id'=>5,
                'name'=>'Hoa cưới',
                'description'=>'Hoa cưới',
                'images' => 'collection1.jpg'
            ],
        ]);
    }
}
