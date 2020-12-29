<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['title'];
    public function articles(){
        return $this->belongsToMany(
            Article::class,
            'categories_articles',
            'category_id',
            'article_id'
        );
    }
}
