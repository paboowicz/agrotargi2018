@extends('layouts.admin')

@section('blog','bg-primary')

@section('galerie','color-primary')

@section('header')
<div class="content-container">

        <div class="main-page">
            <div class="container-fluid">
                <div class="row page-title-div dark-title">
                    <div class="col-md-6">
                        <h4 class="title">Galerie</h4>
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
                            <li class="active">Galerie</li>
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

        <div class="panel border-primary no-border border-3-top lobipanel" data-panel-control>
            <div class="panel-heading">
                <div class="panel-title">
                    <h5>Lista Galerii</h5>
                </div>
            </div>

            <div class="panel-body">
                @if($galleries->count())
                <div class="row">
                    @foreach($galleries as $gallery)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a class="dashboard-stat-2 bg-primary" href="{{ url('/system/blog/galerie/'.$gallery->id) }}">
                            <div class="stat-content">
                                <span class="number">{{ $gallery->name }}</span>
                                <span class="name">{{ $gallery->user()->name }}</span>
                            </div>
                            <span class="stat-footer"><i class="fa fa-calendar color-success"></i> {{ $gallery->updated_at }}</span>
                        </a>
                    </div>
                    @endforeach
                </div>
                @else
                <p>Brak galerii do edytowania</p>
                @endif
            </div>
            <div class="panel-footer">
                <!-- Launch Button -->

                <button type="button" class="btn btn-primary btn-animated btn-wide" data-toggle="modal" data-target="#modal3">
                    <span class="visible-content"><i class="fa fa-plus"></i> Dodaj</span>
                    <span class="hidden-content"><i class="fa fa-arrow-right"></i></span>
                </button>

            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3Label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="{{ url()->current() }}">
                {{ csrf_field() }}

                <div class="modal-header">
                    <h4 class="modal-title" id="modal3Label">Dodaj galerię <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="name">Nazwa</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Wpisz nazwę galerii">
                    </div>
                    <div class="form-group">
                        <label>Opis</label>
                        <textarea name="description" class="form-control" rows="10" cols="80">
                            Wpisz opis galerii ...
                        </textarea>
                    </div>


                </div>
                <div class="modal-footer">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-gray btn-wide btn-rounded" data-dismiss="modal"><i class="fa fa-times"></i>Anuluj</button>
                        <button type="submit" class="btn bg-success btn-wide btn-rounded"><i class="fa fa-plus"></i>Dodaj</button>
                    </div>
                    <!-- /.btn-group -->
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- ========== JS ========== -->
<script>
    $(function ($) {
        CKEDITOR.config.allowedContent = true;
        CKEDITOR.replace('editor1');
    });
</script><!-- ========== JS ========== -->
@endsection