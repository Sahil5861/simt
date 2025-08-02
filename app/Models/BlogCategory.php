<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blog_categories';

    protected $fillable = ['title'];   
    
    public function blogs() {
        return $this->belongsToMany(Blog::class, 'blog_blog_category', 'category_id', 'blog_id'); // ✅ Correct
    }
    
}
