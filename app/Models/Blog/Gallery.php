<?php

namespace App\Models\Blog;

use App\User;
use App\Models\Blog\Image;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model {

    /**
     * The name of table.
     *
     * @var array
     */
    protected $table = 'blog_galleries';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'description'
    ];

    /**
     * The images of the gallery.
     */
    public function images() {
        return $this->hasMany(Image::class);
    }

    /**
     * The images of the gallery.
     */
    public function thumb() {
        $get = $this->hasMany(Image::class);
        if ($get->count())
            return $get->first();
        else
            return false;
    }

    /**
     * Gallery Owner
     * 
     * @var User
     */
    public function user() {
        return $this->belongsTo(User::class)->first();
    }

}
