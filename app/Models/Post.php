<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    'title', 'slug', 'content', 'user_id', 'published', 'published_at'
];

protected $casts = [
    'published_at' => 'datetime',
    'published' => 'boolean',
];

public function user()
{
    return $this->belongsTo(User::class);
}

public function categories()
{
    return $this->belongsToMany(Category::class);
}

}
