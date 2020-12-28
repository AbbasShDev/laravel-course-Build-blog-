<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'user_id',
        'content'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function categories(){
        return $this->belongsToMany(
            Category::class,
            'categories_articles',
            'article_id',
            'category_id'
        );
    }

    public function comments(){
        return $this->hasMany(Comments::class);
    }
}
