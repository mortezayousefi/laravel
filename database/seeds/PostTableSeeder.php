<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post([
            'title'=>'new post title seeder',
            'content'=>'new post content seeder'
        ]);
        $post->save();
    }
}
