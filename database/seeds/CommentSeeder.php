<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Comment;
class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      $posts = Post::all();
      Comment::truncate();
      factory(Comment::class,10)->create([
          'post_id' => $posts->random()->id
      ]);
    }
}
