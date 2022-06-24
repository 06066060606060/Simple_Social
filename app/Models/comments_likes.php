<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments_likes extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->belongsTo(Posts::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

