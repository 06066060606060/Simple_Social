<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class comment_comments extends Model
{
    use HasFactory;



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comment()
    {
        return $this->belongsTo(Comments::class, 'id');
    }

    public function comment_comment()
    {
        return $this;
    }

}
