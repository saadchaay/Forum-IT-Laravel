<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
//    use Sluggable;

    protected $fillable = ['slug', 'body', 'image', 'upVotes', 'downVotes', 'user_id', 'category_id'];
}
