<?php

use Illuminate\Database\Seeder;
use Mari\Post\Http\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Category::insert(
        [
          'category_id' => 1,
          'category_name' => 'Page',
          'category_slug' => 'page',
          'group_parent' => 0,
        ],
        [
          'category_id' => 2,
          'category_name' => 'Blog',
          'category_slug' => 'blog',
          'group_parent' => 0,
        ]
      );
    }
}
