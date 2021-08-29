<?php

namespace Database\Seeders;

use App\Models\Posts;
use App\Models\Users;
use App\Models\UsersNumbers;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    protected $defaultPosts = [
        [
            'post_title' => 'Post1',
            'post_caption' => 'Caption1',
            'user_id' => '1'
        ],
        [
            'post_title' => 'Post2',
            'post_caption' => 'Caption2',
            'user_id' => '3'
        ],
        [
            'post_title' => 'Post3',
            'post_caption' => 'Caption3',
            'user_id' => '2'
        ],
        [
            'post_title' => 'Post4',
            'post_caption' => 'Caption4',
            'user_id' => '2'
        ],
        [
            'post_title' => 'Post5',
            'post_caption' => 'Caption5',
            'user_id' => '1'
        ],
    ];

    public function run()
    {
        Posts::truncate();

        foreach ($this->defaultPosts as $defaultPost) {
            $post = Posts::create([
                'post_title' => $defaultPost['post_title'],
                'post_caption' => $defaultPost['post_caption'],
                'user_id' => $defaultPost['user_id'],
            ]);
        }
    }
}
