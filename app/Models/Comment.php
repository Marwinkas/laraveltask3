<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    protected $primaryKey = 'id';

    protected $fillable = [
        'text',
        'author',
        'post_id',
    ];
    public function post()
    {
        return $this->belongsTo(Post::class); // Adjust the foreign key if necessary
    }
}
