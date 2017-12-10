@extends('layouts.admin')

@section('blog','bg-primary')

@section('galerie','color-primary')

@section('header')
<div class="content-container">
        <div class="main-page">
            <div class="container-fluid">
                <div class="row page-title-div dark-title">
                    <div class="col-md-6">
                        <h4 class="title">Galeria: {{ $gallery->name }}</h4>
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
                            <li class=""> Blog</li>
                            <li><a href="{{ url('/system/blog/galerie') }}">Galerie</a></li>
                            <li><a href="{{ url('/system/blog/galerie/'.$gallery->id) }}">{{ $gallery->name }}</a></li>
                            <li class="active">Galeria: {{ $image->file_name }}</li>
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

        <div class="panel" data-panel-control>
            <div class="panel-heading">
                <div class="panel-title">
                    <h5>Edycja Pliku</h5>
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form method="post" action="{{ url()->current() }}">
                            {{ csrf_field() }}


                            <div class="form-group">
                                <label for="name">Nazwa</label>
                                <input type="text" name="file_name" class="form-control" id="file_name" value="{{ $image->file_name }}">
                            </div>
                            <div class="form-group">
                                <label>Nazwa alternatywna</label>
                                <input type="text" name="alt" class="form-control" id="alt" value="{{ $image->alt }}">
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary btn-animated btn-wide">
                                <span class="visible-content"><i class="fa fa-save"></i> Zapisz</span>
                                <span class="hidden-content"><i class="fa fa-arrow-right"></i></span>
                            </button>
                            <a href="{{ url('/system/blog/galerie') }}" type="button" class="btn btn-default btn-animated btn-wide">
                                <span class="visible-content"><i class="fa fa-arrow-circle-o-left"></i> Anuluj</span>
                                <span class="hidden-content"><i class="fa fa-arrow-left"></i></span>
                            </a>
                            <a href="{{ url('/system/blog/galerie/'.$gallery->id.'/'.$image->id.'/delete') }}" type="button" class="btn btn-danger btn-animated btn-wide">
                                <span class="visible-content"><i class="fa fa-trash"></i> Skasuj</span>
                                <span class="hidden-content"><i class="fa fa-arrow-left"></i></span>
                            </a>
                        </form>
                    </div>
                </div> 
                <hr>
                <div class="list-group">
                    <a class="list-group-item active" href="#">
                        <div class="row">
                            <div class="col-md-2">
                                <img id="thumb" src="{{ url('/').'/'.$image->path() }}" alt="Nature" style="height:100%; max-width: 200px;">
                            </div>
                            <div class="col-md-10">
                                <h4 class="list-group-item-heading">{{ $image->file_type }} <span class="label label-primary pull-right">autor: {{ $image->user()->name }}</span></h4>

                                <p class="list-group-item-text">ostatnia modyfikacja: {{ $image->updated_at }}</p>
                                <p class="list-group-item-text">utworzono: {{ $image->created_at }}</p>
                            </div>
                        </div>
                    </a>
                </div> 
            </div>
            <div class="panel-footer">
                <form method="post" enctype="multipart/form-data" action="{{ url('/set/update/image/'.$image->id) }}"
                      class="dropzone"
                      id="my-awesome-dropzone">
                    <div class="dz-message needsclick">
                        Upuść nowe zdjęcie do podmiany.<br />
                        <span class="note needsclick">(Pamiętaj by pliki były wcześniej odpowiednio wykadrowane i skompresowane by ładnie prezentowały się na stronie)</span>
                        <br/>
                        <span class="note needsclick">(Po załadowaniu proszę odświeżyć stronę)</span>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection

@section('scripts')
<!-- ========== JS ========== -->
<script src="{{ url('panel/js/dropzone/dropzone.min.js') }}"></script>
<script>
$(function ($) {
    Dropzone.options.myAwesomeDropzone = {
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 32, // MB
        accept: function (file, done) {
            done();
        },
        error: function (file, response) {
            console.log(file);
            console.log(response);
        },
        init: function () {
            // Set up any event handlers
            this.on('completemultiple', function () {
                location.reload();
            });
        },
        dictDefaultMessage: "Drop files here or click to upload."
    };

    Dropzone.on('sending', function (file, xhr, formData) {
        formData.append('_token', '{{csrf_token()}}');
    });
});
</script>
<!-- ========== JS ========== -->
@endsection