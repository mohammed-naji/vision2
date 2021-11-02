<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title', 'content', 'image'
    // ];
    protected $guarded = [];

    // protected $table = 'my_table';

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
