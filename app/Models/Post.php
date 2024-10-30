<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'content',
        'author',
    ];
    public function comments()
    {
        return $this->hasMany(Comment::class); // Adjust the foreign key if necessary
    }
}
