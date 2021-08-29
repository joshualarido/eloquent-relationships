<?php

namespace Database\Seeders;

use App\Models\Posts;
use App\Models\PostsComments;
use App\Models\Users;
use App\Models\UsersNumbers;
use Illuminate\Database\Seeder;

class PostsCommentsTableSeeder extends Seeder
{
    protected $defaultPostsComments = [
        [
            'comment' => 'Comment1',
            'post_id' => '4',
            'user_id' => '3'
        ],
        [
            'comment' => 'Comment2',
            'post_id' => '3',
            'user_id' => '1'
        ],
        [
            'comment' => 'Comment3',
            'post_id' => '1',
            'user_id' => '2'
        ],
        [
            'comment' => 'Comment4',
            'post_id' => '4',
            'user_id' => '2'
        ],
        [
            'comment' => 'Comment5',
            'post_id' => '3',
            'user_id' => '3'
        ],
        [
            'comment' => 'Comment6',
            'post_id' => '5',
            'user_id' => '3'
        ],
        [
            'comment' => 'Comment7',
            'post_id' => '2',
            'user_id' => '1'
        ],
        [
            'comment' => 'Comment8',
            'post_id' => '1',
            'user_id' => '1'
        ],
        [
            'comment' => 'Comment9',
            'post_id' => '2',
            'user_id' => '3'
        ],
        [
            'comment' => 'Comment10',
            'post_id' => '5',
            'user_id' => '1'
        ],
    ];

    public function run()
    {
        Posts::truncate();

        foreach ($this->defaultPostsComments as $defaultPostComment) {
            $postComment = PostsComments::create([
                'comment' => $defaultPostComment['comment'],
                'post_id' => $defaultPostComment['post_id'],
                'user_id' => $defaultPostComment['user_id'],
            ]);
        }
    }
}
