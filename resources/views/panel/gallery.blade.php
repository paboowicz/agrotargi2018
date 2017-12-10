@extends('layouts.admin')

@section('blog','bg-primary')

@section('galerie','color-primary')

@section('header')
<style>
    .img-thumbnails {
        margin: 2px;
        padding: 4px;
        line-height: 1.428571429;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        -webkit-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
        display: inline-block;
        max-width: 100%; 
        /* height: auto; */
    }
</style>
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
                            <li class="">Blog</li>
                            <li><a href="{{ url('/system/blog/galerie') }}">Galerie</a></li>
                            <li class="active">{{ $gallery->name }}</li>
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
                    <h5>Edycja Galerii</h5>
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form method="post" action="{{ url()->current() }}">
                            {{ csrf_field() }}


                            <div class="form-group">
                                <label for="name">Nazwa</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{ $gallery->name }}">
                            </div>
                            <div class="form-group">
                                <label>Opis</label>
                                <input type="text" name="description" class="form-control" id="description" value="{{ $gallery->description }}">
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
                            <a href="{{ url('/system/blog/galerie/'.$gallery->id.'/delete') }}" type="button" class="btn btn-danger btn-animated btn-wide">
                                <span class="visible-content"><i class="fa fa-trash"></i> Skasuj</span>
                                <span class="hidden-content"><i class="fa fa-arrow-left"></i></span>
                            </a>
                        </form>
                    </div>
                </div>    
            </div>
        </div>

        <div class="panel" data-panel-control>
            <div class="panel-heading">
                <div class="panel-title">
                    <h5>Zdjęcia</h5>
                </div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <div>
                        @if($gallery->images()->count())

                        @foreach($gallery->images()->get() as $image)
                        <li  class="list-group-item" style="display: inline-block; margin: 2px;">
                            <div style=" width: 200px; height: 200px;">
                                <div class="btn-group btn-group-justified" role="group">
                                    <div class="btn-group" role="group">
                                        <a data-toggle="confirmation" data-title="Skasować zdjęcie?" href="{{ url()->current() }}/{{ $image->id }}/delete" role="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </div>
                                    <div class="btn-group" role="group">
                                        <a href="{{ url()->current() }}/{{ $image->id }}" role="button" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                    </div>
                                </div>
                                <hr>
                                <div>
                                    <img src="{{ url($image->path()) }}" style="max-width:100%; height: auto; max-height:110px; display:block;">
                                </div>
                            </div>
                        </li>
                        @endforeach

                        @endif
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <form method="post" enctype="multipart/form-data" action="{{ url('/set/image/'.$gallery->id) }}"
                      class="dropzone"
                      id="my-awesome-dropzone">
                    <div class="dz-message needsclick">
                        Upuść pliki do załadowania.<br />
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
            dictDefaultMessage: "Drop files here or click to upload."
        };

        Dropzone.on('sending', function (file, xhr, formData) {
            formData.append('_token', '{{csrf_token()}}');
        });
    });
</script>
<!-- ========== JS ========== -->
@endsection