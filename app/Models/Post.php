<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['media'];

    public function media()
    {
        return $this->belongsTo(Media::class, 'media', 'id');
    }
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
