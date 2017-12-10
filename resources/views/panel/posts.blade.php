@extends('layouts.admin')

@section('blog','bg-primary')

@section('posty','color-primary')

@section('header')
<div class="content-container">

        <div class="main-page">
            <div class="container-fluid">
                <div class="row page-title-div dark-title">
                    <div class="col-md-6">
                        <h4 class="title">Posty</h4>
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-md-6 right-side">

                    </div>
                    <!-- /.col-md-6 text-right -->
                </div>
                <!-- /.row -->
                <div class="row breadcrumb-div">
                    <div class="col-md-6">
                        <ul class="breadcrumb">
                            <li><a href="{{ url('/system') }}"><i class="fa fa-home"></i> System</a></li>
                            <li class="">Blog</li>
                            <li class="active">Posty</li>
                        </ul>
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-md-6 text-right">
                        <a href="{{ url()->current() }}"><i class="fa fa-refresh"></i> Odśwież</a>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->



        </div>
        <!-- /.main-page -->

    </div>
<!-- /.content-container -->
@endsection

@section('content')
<div id="content" class="container-fluid">
    <div class="content-wrapper">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a class="border-primary no-border border-3-top" href="#home5" aria-controls="home5" role="tab" data-toggle="tab">Lista</a></li>
            <li role="presentation"><a class="no-border border-3-top" href="#profile5" aria-controls="profile5" role="tab" data-toggle="tab">Dodaj</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content bg-white p-15">
            <div role="tabpanel" class="tab-pane active" id="home5">
                @if($posts->count())
                <div class="list-group" >
                    @foreach($posts as $post)
                    <a class="list-group-item" href="{{ url('/system/blog/posty/'.$post->id) }}">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="{{ url('/').'/'.$post->thumb() }}" alt="Nature" style="height:100%; max-width: 200px;">
                            </div>
                            <div class="col-md-10">
                                <h4 class="list-group-item-heading">
                                    {{ $post->title }} 
                                    <span class="label label-primary pull-right">
                                        {{ $post->user()->name }}
                                    </span>
                                </h4>
                                @if($post->visible)
                                <span class="label label-success">Publikowany</span>
                                @else
                                <span class="label label-danger">Niepublikowany</span>
                                @endif

                                @if($post->promo)
                                <span class="label label-success">Promowany</span>
                                @endif

                                <p class="list-group-item-text">ostatnia modyfikacja: {{ $post->updated_at }}</p>
                                <p class="list-group-item-text">utworzono: {{ $post->created_at }}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div> 
                @else
                <p>Brak postów do edytowania</p>
                @endif
            </div>

            <div role="tabpanel" class="tab-pane" id="profile5">


                <div class="row">
                    <div class="col-md-6">
                        <form method="post" action="{{ url()->current() }}">
                            {{ csrf_field() }}

                            <input id="header_id" name="header" value="" type="hidden" />
                            <input id="thumbnail_id" name="thumbnail" value="" type="hidden" />

                            <div class="form-group">
                                <label for="title">Tytuł</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Wpisz tytuł ...">
                            </div>
                            <div class="form-group">
                                <label for="url">Url</label>
                                <input type="text" name="url" class="form-control" id="url" placeholder="Wpisz adres ...">
                            </div>
                            <div class="form-group">
                                <label for="url">Opis</label>
                                <input type="text" name="info" class="form-control" id="info" placeholder="Wpisz krótki opis ...">
                            </div>
                            <div class="form-group">
                                <label for="url">Słowa kluczowe</label>
                                <input type="text" name="keywords" class="form-control" id="keywords" placeholder="Wpisz słowa kluczowe ...">
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary btn-animated btn-wide">
                                <span class="visible-content"><i class="fa fa-save"></i> Zapisz</span>
                                <span class="hidden-content"><i class="fa fa-arrow-right"></i></span>
                            </button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="gallery">Nagłówek</label>
                            <select name="gallery" class="form-control" id="header">
                                <option value="0" selected> --- </option>
                                @foreach($galleries as $gallery)
                                <option value="{{ $gallery->id }}"> {{ $gallery->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <div id="headers" class="list-group">
                                <p style="">Wybierz galerię.</p>
                            </div>
                        </div>

                        <hr>

                        <div class="form-group">
                            <label for="gallery">Miniaturka</label>
                            <select name="gallery" class="form-control" id="thumbnail">
                                <option value="0" selected> --- </option>
                                @foreach($galleries as $gallery)
                                <option value="{{ $gallery->id }}"> {{ $gallery->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <div id="thumbnails" class="list-group">
                                <p style="">Wybierz galerię.</p>
                            </div>
                        </div>

                    </div>
                </div>    

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- ========== JS ========== -->
<script>
    $(document).ready(function () {
        getheader($('#header'));
        getthumbnail($('#thumbnail'));
        $('#header').change(function () {
            getheader($(this));
        });
        $('#thumbnail').change(function () {
            getthumbnail($(this));
        });

        function getheader(el) {
            gal = el.val();
            url = '{{ url("/get/gallery/") }}/' + gal;

            $.get(url, function (data) {
                $('#headers').html('<p></p>')
                $.each(data, function (key, value) {
                    var img = value.file_path + value.file_name
                    var id = value.id;
                    var html = '<a id="' + id + '" href="#" onclick="getheaderid($(this));"  class="list-group-item" data-id="'+ id +'" style="display: inline-block; margin: 2px;">'
                            + '<div style=" width: 115px; height: 80px;">'
                            + '<div><img src="{{ url("/")}}/' + img + '" style="max-width:100%; height: auto; max-height:110px; display:block;"></div>'
                            + '</div></a>';
                   $('#headers').append(html);
                   console.log(value);
                })
            });
        }
        function getthumbnail(el) {
            gal = el.val();
            url = '{{ url("/get/gallery/") }}/' + gal;

            $.get(url, function (data) {
                $('#thumbnails').html('<p></p>')
                $.each(data, function (key, value) {
                    var img = value.file_path + value.file_name
                    var id = value.id;
                    var html = '<a id="' + id + '" href="#" onclick="getthumbnailid($(this));"  class="list-group-item" data-id="'+ id +'" style="display: inline-block; margin: 2px;">'
                            + '<div style=" width: 115px; height: 80px;">'
                            + '<div><img src="{{ url("/")}}/' + img + '" style="max-width:100%; height: auto; max-height:110px; display:block;"></div>'
                            + '</div></a>';
                   $('#thumbnails').append(html);
                   console.log(value);
                })
            });
        }
    });
    function getheaderid(img) {
        i = img.data('id')
        $('#header_id').val(i);
        q = $('#headers').find('.list-group-item').removeClass('active');
        $.when(q).done(function () {
            img.addClass('active');
        });
    }
    function getthumbnailid(img) {
        i = img.data('id')
        $('#thumbnail_id').val(i);
        q = $('#thumbnails').find('.list-group-item').removeClass('active');
        $.when(q).done(function () {
            img.addClass('active');
        });
    }
</script><!-- ========== JS ========== -->
@endsection