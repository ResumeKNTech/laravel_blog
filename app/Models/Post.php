<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=['title','tags','summary','slug','description','photo','quote','post_cat_id','post_tag_id','added_by','status'];


}
