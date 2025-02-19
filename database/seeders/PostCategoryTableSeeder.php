<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();

        Post::all()->each(function ($post) use ($categories) {
            $categorieCount = rand(1, $categories->count());
            $selectedCategories = $categories->random($categorieCount)->pluck('id')->toArray();
            $post->categories()->attach($selectedCategories);
        });
    }
}
