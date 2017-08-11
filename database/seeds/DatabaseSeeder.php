<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
                
        
        $this->call(PostSeeder::class);
        //$this->call(CommentSeeder::class);
        $this->call(TagsSeeder::class);
        //$this->call(PostsTagsSeed::class);
        Model::reguard();
    }
}
