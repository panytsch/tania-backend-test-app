<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 44; $i++) {
            Comment::factory()
                ->count(10)
                ->for(Post::inRandomOrder()->first())
                ->create();
        }

    }
}
