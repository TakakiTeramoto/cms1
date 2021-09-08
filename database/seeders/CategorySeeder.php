<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => '甘口・熱燗',
                'sort_order' => 1,
            ],
            [
                'name' => '甘口・冷酒',
                'sort_order' => 2,
            ],
            [
                'name' => '辛口・熱燗',
                'sort_order' => 3,
            ],
            [
                'name' => '辛口・冷酒',
                'sort_order' => 4,
            ],
            ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => 'すっきり',
                'sort_order' => 1,
                'primary_category_id' => 1
            ],
            [
                'name' => 'キレがある',
                'sort_order' => 2,
                'primary_category_id' => 1
            ],
            [
                'name' => '華やか・フルーティー',
                'sort_order' => 3,
                'primary_category_id' => 1
            ],
            [
                'name' => '厚みがある・フルボディー',
                'sort_order' => 4,
                'primary_category_id' => 1
            ],
            [
                'name' => 'すっきり',
                'sort_order' => 1,
                'primary_category_id' => 2
            ],
            [
                'name' => 'キレがある',
                'sort_order' => 2,
                'primary_category_id' => 2
            ],
            [
                'name' => '華やか・フルーティー',
                'sort_order' => 3,
                'primary_category_id' => 2
            ],
            [
                'name' => '厚みがある・フルボディー',
                'sort_order' => 4,
                'primary_category_id' => 2
            ],
            [
                'name' => 'すっきり',
                'sort_order' => 1,
                'primary_category_id' => 3
            ],
            [
                'name' => 'キレがある',
                'sort_order' => 2,
                'primary_category_id' => 3
            ],
            [
                'name' => '華やか・フルーティー',
                'sort_order' => 3,
                'primary_category_id' => 3
            ],
            [
                'name' => '厚みがある・フルボディー',
                'sort_order' => 4,
                'primary_category_id' => 3
            ],
            [
                'name' => 'すっきり',
                'sort_order' => 1,
                'primary_category_id' => 4
            ],
            [
                'name' => 'キレがある',
                'sort_order' => 2,
                'primary_category_id' => 4
            ],
            [
                'name' => '華やか・フルーティー',
                'sort_order' => 3,
                'primary_category_id' => 4
            ],
            [
                'name' => '厚みがある・フルボディー',
                'sort_order' => 4,
                'primary_category_id' => 4
            ],
            ]);


        }
}
