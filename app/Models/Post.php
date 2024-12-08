<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * 投稿とユーザーの関連付け
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
