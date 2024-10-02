<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\Post;

class PostTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 100; $i++) { 
            // estraggo un post random
            $post = Post::inRandomOrder()->first();

            // estraggo un tag random
            $tag_id = Tag::inRandomOrder()->first()->id;

            // aggiungo la relazione tra il post estratto e l'id del post estratto
            $post->tags()->attach($tag_id);
            
        }
    }
}
