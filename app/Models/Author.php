<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';

    protected $fillable = ['name', 'designation', 'about','author_image'];

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'author_id');
    }
}
