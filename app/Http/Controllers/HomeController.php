<?php

namespace App\Http\Controllers;

use App\Models\Blog\Post;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $posty = Post::where('visible', '1')->orderBy('id', 'desc')->get();

        $posts = $posty->sortByDesc('id')->take(3);

        return view('index')->with('posts', $posts);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog() {
        $posty = Post::where('visible', '1')->orderBy('id', 'desc')->get();

        $first = $posty->shift();

        $posts = $posty->all();

        return view('news')->with('posts', $posts)->with('first', $first);
    }

    /**
     * Show Post details
     * 
     * @return \Illuminate\Http\Response
     */
    public function post($url) {
        $now = date('Y-m-d');
        $search = '/' . $url;
        $post = Post::where('url', $search)->first();
        $tags = explode(',', $post->tags);

        $prev = Post::where('publish_at', '<=', $now)->where('publish_at', '<', $post->publish_at)->get()->sortByDesc('publish_at')->first();
        $next = Post::where('publish_at', '<=', $now)->where('publish_at', '>', $post->publish_at)->get()->sortBy('publish_at')->first();

        if ($post->visible)
            return view('post')->with('post', $post)->with('prev', $prev)->with('next', $next);
        else
            return redirect('/');
    }

    public function preview($id){
        $now = date('Y-m-d');
        $post = Post::find($id);
        $tags = explode(',', $post->tags);
        
        $prev = Post::where('publish_at', '<=', $now)->where('publish_at', '<', $post->publish_at)->get()->sortByDesc('publish_at')->first();
        $next = Post::where('publish_at', '<=', $now)->where('publish_at', '>', $post->publish_at)->get()->sortBy('publish_at')->first();

        return view('post')->with('post', $post)->with('prev', $prev)->with('next', $next);
        
    }

}
