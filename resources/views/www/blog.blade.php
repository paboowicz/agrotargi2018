@extends('layouts.blog')

@section('seo')
<title>SocialMonster Blog</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="SocialMonster">
<meta name="description" content="SocialMonster">
<meta name="author" content="InteractiveVision">
@endsection

@section('header')
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <a href="{{ url('/blog') }}" class="logo">
        <img src="{{ url('/_blog/img/smlogo.png') }}" alt="Logo">
    </a>

    <ol class="carousel-indicators">
        @if($carouzels->count())
        <?php $active = 'active' ?>

        @for($i=0;$i<$carouzels->count();$i++)
        <li data-target="#carousel-example-generic" data-slide-to="{{ $i }}" class="{{ $active }}"></li>
        <?php $active = '' ?>
        @endfor

        @endif
    </ol>

    <div class="carousel-inner">
        @if($carouzels->count())
        <?php $active = 'active' ?>

        @foreach($carouzels as $carouzel)
        <div class="item {{ $active }}">
            <img src="{{ url('/').'/'.$carouzel->image() }}" alt="{{ $carouzel->title }}">
            <div class="carousel-caption">
                <a href="#"><h3>{{ $carouzel->title }}</h3></a>
                <a href="{{ url('/blog'.$carouzel->url) }}" class="button animation-button draw">czytaj</a>
            </div>
        </div>
        <?php $active = '' ?>
        @endforeach

        @endif
    </div>
</div> 
@endsection

@section('content')
<div id="posts" class="container">
    <h2>pozostałe wpisy</h2>

    <div class="row">

        @if($posts->count())

        @foreach($posts as $post)
        <div class="post col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-4">
            <a href="{{ url('/blog'.$post->url) }}">
                <div class="thumbnail-overlay">
                    <img src="{{ url('/').'/'.$post->thumb() }}" alt="{{ $post->title }}">
                </div>
            </a>

            <a href="{{ url('/blog'.$post->url) }}" class="title">
                {{ $post->title }}
            </a>
            <span class="info">
                {!! $post->info !!}
            </span>
        </div>
        @endforeach

        @endif

    </div>

    <!-- <button class="load-more button animation-button draw">wczytaj więcej</button> -->
</div>
@endsection