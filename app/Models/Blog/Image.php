<?php

namespace App\Models\Blog;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Image extends Model {
    
    /**
     * The name of table.
     *
     * @var array
     */
    protected $table = 'blog_images';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'gallery_id', 'alt', 'file_path', 'file_name', 'file_type'
    ];
    
    public function path(){
        return $this->file_path.$this->file_name;
    }
    
    /**
     * Image Uploader
     * 
     * @var User
     */
    public function user() {
        return $this->belongsTo(User::class)->first();
    }

}
