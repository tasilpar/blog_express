<?php

use Illuminate\Database\Seeder;
use App\PostTag;
use App\Post;
use App\Tag;
class PostsTagsSeed extends Seeder
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
        $tags  = Tag::all();        
        PostTag::truncate();
        factory(PostTag::class,100)->create([
            "post_id" => $posts->random()->id,
            "tag_id" =>  $tags->random()->id
            
        ]);
    }
}
