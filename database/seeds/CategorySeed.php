<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['category' => 'Chinh Tri'],
            ['category' => 'Kinh Te'],
            ['category' => 'Quoc Te'],
            ['category' => 'Giao Duc'],
            ['category' => 'The Thao'],
            ['category' => 'Giai Tri'],
            ['category' => 'Khoa Hoc'],
        ]);
    }
}
