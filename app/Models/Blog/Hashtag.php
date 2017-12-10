<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class Hashtag extends Model
{
    /**
     * The name of table.
     *
     * @var array
     */
    protected $table = 'blog_hastag';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hashtag'
    ];
    
    /**
     * The hastags that belong to the post.
     */
    public function posts()
    {
        return $this->belongsToMany('App\Models\Blog\Post', 'blog_hashtags_posts', 'hastag_id', 'post_id');
    }
}
