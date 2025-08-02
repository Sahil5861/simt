<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['blog_title', 'description', 'image', 'seo_url', 'meta_title', 'meta_keywords', 'meta_description'];

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    // Define the many-to-many relationship with categories
    public function categories()
    {
        return $this->belongsToMany(BlogCategory::class, 'blog_blog_category', 'blog_id', 'category_id');
    }
}
