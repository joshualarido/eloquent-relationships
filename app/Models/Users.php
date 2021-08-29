<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Users extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'role_id',
    ];

    public function number()
    {
        return $this->hasOne(UsersNumbers::class, 'user_id', 'id');
    }

    public function posts()
    {
        return $this->hasMany(Posts::class, 'user_id', 'id');
    }

    public function latest()
    {
        return $this->hasOne(Posts::class, 'user_id', 'id')->latestOfMany();
    }

//    public function comments()
//    {
//        return $this->hasManyThrough(
//            PostsComments::class,
//            Posts::class,
//            'id',
//            'id',
//            'id',
//            'user_id'
//        );
//    }
}
