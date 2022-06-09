<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Comments extends Model
{
    use HasFactory;

    public function makeComment($data, Posts $posts)
    {
        $data['user_id'] = Auth::user()->id;
        $data['post_id'] = $posts->id;

        
        return true;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Posts::class, 'post_id');
    }
}
