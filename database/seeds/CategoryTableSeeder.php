<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Laptop', 'parent_id' => 0],
            ['name' => 'Điện thoại', 'parent_id' => 0],
            ['name' => 'Máy ảnh', 'parent_id' => 0],
            ['name' => 'Assus', 'parent_id' => 1],
            ['name' => 'Dell', 'parent_id' => 1],
            ['name' => 'Macbook', 'parent_id' => 1],
            ['name' => 'Iphone', 'parent_id' => 2],
            ['name' => 'SamSung', 'parent_id' => 2],
            ['name' => 'Oppo', 'parent_id' => 2],
            ['name' => 'Canon', 'parent_id' => 3],
            ['name' => 'Nikon', 'parent_id' => 3]
        ]);
    }
}
