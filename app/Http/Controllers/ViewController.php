<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\PostsComments;
use App\Models\Roles;
use App\Models\Users;
use App\Models\UsersNumbers;

class ViewController extends \Illuminate\Routing\Controller
{
    public function index()
    {
        /**
         * Has One
         */
        dd(Users::with('number')->get());

        /**
         * Has Many
         */
//        dd(Users::with('number')->get());

        /**
         * Belongs to
         */
//        dd(Posts::with('user')->get());

        /**
         * One of many
         */
//        dd(Users::with('latest')->get());

        /**
         * Has One Through
         */
//        dd(Users::with('comments')->get());
        return view('welcome');
    }
}
