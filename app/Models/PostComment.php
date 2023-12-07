<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PostComment extends Model
{
    use HasFactory;
    protected $fillable=['user_id','post_id','comment','replied_comment','parent_id','status'];
    protected static function boot()
    {
        parent::boot();
    
        static::creating(function ($post) {
            $post->slug = Str::slug($post->title);
        });
    
        static::updating(function ($post) {
            if ($post->isDirty('title')) {
                $post->slug = Str::slug($post->title);
            }
        });
    }
}
