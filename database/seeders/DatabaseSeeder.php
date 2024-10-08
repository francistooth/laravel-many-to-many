<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Database\Seeders\PostTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategoryTableSeeder::class,
            TagsTableSeeder::class,
            PostTableSeeder::class,
            PostTagTableSeeder::class,
        ]);
            
    }
}