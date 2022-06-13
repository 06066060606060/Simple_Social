<?php

namespace App\Models;

use Database\Factories\LikesFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'content',
        'image',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function comment()
    {
        return $this->hasMany(Comments::class, 'id', 'user_id', 'post_id', 'content' )->orderBy('created_at', 'DESC');
    }

    public function like()
    {
        return $this->hasMany(Likes::class);
    }

    public function post()
    {
        return $this;
    }
}
