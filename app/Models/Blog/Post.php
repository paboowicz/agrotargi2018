<?php

namespace App\Models\Blog;

use App\User;
use App\Models\Blog\Image;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    /**
     * The name of table.
     *
     * @var array
     */
    protected $table = 'blog_posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'image_id', 'thumbnail_id', 'visible', 'title', 'keywords', 'info', 'url', 'long_text', 'tags'
    ];

    /**
     * Post Writer
     * 
     * @var User
     */
    public function user() {
        return $this->belongsTo(User::class)->first();
    }

    /**
     * Header Image
     * 
     * @var Image
     */
    public function image() {
        $img = Image::find($this->image_id);
        if ($img)
            $url = $img->file_path . $img->file_name;
        else
            $url = "";
        return $url;
    }

    public function thumb() {
        $img = Image::find($this->thumbnail_id);
        if ($img)
            $url = $img->file_path . $img->file_name;
        else
            $url = "";
        return $url;
    }

}

/**
 * CKEDITOR.instances.cont_text.insertHtml("html text");
 */