@extends('layouts.blog')

@section('seo')
<title>{{ $post->title }} - SocialMonster</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="{{ $post->keywords }}">
<meta name="description" content="{{ $post->info }}">
<meta name="author" content="InteractiveVision, {{ $post->user()->name }}">
@endsection

@section('header')
<div class="header">
    <a href="{{ url('/') }}" class="logo">
        <img src="{{ url('/_blog/img/smlogo.png') }}" alt="SocialMonster Logo">
    </a>
    <img src="{{ url('/').'/'.$post->image() }}" alt="Post Image Header">

</div>
@endsection

@section('content')
<div class="single-post container">
    <div class="post-content">
        {!! $post->long_text !!}
    </div>

    @if($related->count())
    <div class="related-posts">
        <h3>powiązane posty</h3>
        <div class="row">
            @foreach($related as $ra)
            @if($ra->id != $post->id)
            <div class="post col-xs-12 col-sm-4">
                <a href="{{ url('/blog'.$ra->url) }}" class="more">
                    <img src="{{ url('/').'/'.$ra->thumb() }}" alt="Post Image">
                </a>
                <a href="{{ url('/blog'.$ra->url) }}" class="title">{{ $ra->title }}</a>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    @endif
</div>
@endsection