<?php

namespace App\Http\Controllers\Blog;

use Auth;
use File;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Blog\Post;
use App\Models\Blog\Gallery;
use App\Models\Blog\Image;

class BlogController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth')->except('set_image')->except('update_image');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function posts() {
        $posts = Post::all();
        $galleries = Gallery::all();
        return view('panel.posts')->with('posts', $posts)->with('galleries', $galleries);
    }

    /**
     * Show Post details
     * 
     * @return \Illuminate\Http\Response
     */
    public function post($post_id) {
        $post = Post::find($post_id);
        $galleries = Gallery::all();
        return view('panel.post')
                        ->with('post', $post)
                        ->with('galleries', $galleries);
    }

    /**
     * Insert new Post
     * 
     * @return \Illuminate\Http\Response
     */
    public function post_new(Request $request) {
        $this->validate($request, [
            'title' => 'required|max:255',
            'header' => 'required',
            'thumbnail' => 'required',
            'url' => 'required|max:120',
            'info' => 'required',
            'keywords' => 'required|max:160',
        ]);

        $post = new Post;

        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->url = $request->url;
        $post->thumbnail_id = $request->thumbnail;
        $post->image_id = $request->header;
        $post->info = $request->info;
        $post->keywords = $request->keywords;
        
        $post->visible = false;
        $post->long_text = 'nowy post';

        if ($post->save())
            return redirect('/system/blog/posty/' . $post->id);
        else
            return redirect('/system/blog/posty');
    }

    /**
     * Update Post
     * 
     * @return \Illuminate\Http\Response
     */
    public function post_update(Request $request, $post_id) {
        $post = Post::find($post_id);
        $this->validate($request, [
            'title' => 'required|max:255',
            'url' => 'required|max:42',
            'header' => 'required',
            'thumbnail' => 'required',
            'info' => 'required',
            'long_text' => 'required',
        ]);
        
        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->url = $request->url;
        $post->thumbnail_id = $request->thumbnail;
        $post->image_id = $request->header;
        $post->info = $request->info;
        $post->long_text = $request->long_text;
        $post->tags = $request->tags;
        $post->visible = $request->visible;
        $post->publish_at = $request->publish_at;
        $post->promo = $request->promo;


        if ($post->save())
            return redirect('/system/blog/posty/' . $post->id);
        else
            return redirect('/system/blog/posty');
    }

    /**
     * Delete Post
     * 
     * @return \Illuminate\Http\Response
     */
    public function post_delete($post_id) {
        $post = Post::find($post_id);
        $post->delete();
        return redirect('/system/blog/posty');
    }

    /**
     * Get list of Galleries
     * 
     * @return \Illuminate\Http\Response
     */
    public function galleries() {
        $galleries = Gallery::all();
        return view('panel.galleries')->with('galleries', $galleries);
    }

    /**
     * Show Gallery details
     * 
     * @return \Illuminate\Http\Response
     */
    public function gallery($galeria) {
        $gallery = Gallery::find($galeria);
        return view('panel.gallery')->with('gallery', $gallery);
    }
    
    /**
     * Show image details
     * 
     * @return \Illuminate\Http\Response
     */
    public function image($galeria, $obraz){
        $gallery = Gallery::find($galeria);
        $image = Image::find($obraz);
        return view('panel.image')->with('image', $image)->with('gallery', $gallery);
    }
    
    /**
     * Insert new Gallery
     * 
     * @return \Illuminate\Http\Response
     */
    public function gallery_new(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required',
        ]);

        $gallery = new Gallery;

        $gallery->user_id = Auth::user()->id;
        $gallery->name = $request->name;
        $gallery->description = $request->description;

        if ($gallery->save())
            return redirect('/system/blog/galerie/' . $gallery->id);
        else
            return redirect('/system/blog/galerie');
    }

    /**
     * Update Gallery
     * 
     * @return \Illuminate\Http\Response
     */
    public function gallery_update(Request $request, $galeria) {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required',
        ]);

        $gallery = Gallery::find($galeria);

        $gallery->user_id = Auth::user()->id;
        $gallery->name = $request->name;
        $gallery->description = $request->description;

        if ($post->save())
            return redirect('/system/blog/posty/' . $post->id);
        else
            return redirect('/system/blog/posty');
    }

    /**
     * Delete gallery
     * 
     * @return
     */
    public function gallery_delete($galeria) {
        $gallery = Gallery::find($galeria);
        $images = $gallery->images()->get();

        foreach ($images as $image) {
            if (File::exists($image->path()))
                File::delete($image->path());
        }
        $gallery->delete();
        return redirect('/system/blog/galerie');
    }

    /**
     * Delete Image from gallery
     * 
     * @return
     */
    public function image_delete($galeria, $obraz) {
        $image = Image::find($obraz);
        $path = $image->path();
        $image->delete();
        if (File::exists($path))
            File::delete($path);
        return redirect('/system/blog/galerie/' . $galeria);
    }
    
    /**
     * Update Image info
     * 
     * @return
     */
    public function image_update_info(Request $request, $galeria, $obraz){
        $image = Image::find($obraz);
        
        $this->validate($request, [
            'alt' => 'required',
            'file_name' => 'required'
        ]);
        
        $path = $image->path();
        $newpath = $image->file_path.$request->file_name;
        
        if (File::exists($path) && !File::exists($newpath))
            File::move($path, $newpath);
        
        $image->alt = $request->alt;
        $image->file_name = $request->file_name;
        
        $image->save();
        
        return redirect('/system/blog/galerie/' . $galeria);
    }
    
    /*
     * 
     * API SECTION
     * 
     */

    public function get_gallery($id) {
        $gallery = Gallery::find($id);
        $images = $gallery->images()->get();
        return $images;
    }

    public function set_image(Request $request, $galeria) {
        $this->validate($request, [
            'file' => 'required|max:16000',
        ]);

        $imageTempName = $request->file('file')->getPathname();
        $imageName = $request->file('file')->getClientOriginalName();
        $path = "_blog/gallery/$galeria/";
        $request->file('file')->move($path, $imageName);

        $image = new Image;
        $image->user_id = Auth::user()->id;
        $image->gallery_id = $galeria;
        $image->alt = $imageName;
        $image->file_path = $path;
        $image->file_name = $imageName;
        $image->file_type = File::mimeType($path . $imageName);

        $image->save();
    }
    
    public function update_image(Request $request, $obraz) {
        $this->validate($request, [
            'file' => 'required|max:16000',
        ]);
        
        $image = Image::find($obraz);

        $path = $image->path();
        if (File::exists($path))
            File::delete($path);
        
        $imageTempName = $request->file('file')->getPathname();
        $imageName = $request->file('file')->getClientOriginalName();
        $path = $image->file_path;
        $request->file('file')->move($path, $imageName);

        
        $image->user_id = Auth::user()->id;
        $image->alt = $imageName;
        $image->file_name = $imageName;
        $image->file_type = File::mimeType($path . $imageName);

        $image->save();
    }

}
