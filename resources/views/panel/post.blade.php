@extends('layouts.admin') @section('blog','bg-primary') @section('posty','color-primary') @section('header')
<div class="content-container">
	<div class="main-page">
		<div class="container-fluid">
			<div class="row page-title-div dark-title">
				<div class="col-md-6">
					<h4 class="title">Post: {{ $post->id }}</h4>
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
						<li>
							<a href="{{ url('/system') }}">
								<i class="fa fa-home"></i> System</a>
						</li>
						<li class="">Blog</li>
						<li>
							<a href="{{ url('/system/blog/posty') }}">Posty</a>
						</li>
						<li class="active">Post: {{ $post->id }}</li>
					</ul>
				</div>
				<!-- /.col-md-6 -->
				<div class="col-md-6 text-right">
					<a href="{{ url()->current() }}">
						<i class="fa fa-refresh"></i> Odśwież</a>
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
@endsection @section('content')
<form method="post" action="{{ url()->current() }}">
	{{ csrf_field() }}

	<input id="header_id" name="header" value="{{ $post->image_id }}" type="hidden" />
	<input id="thumbnail_id" name="thumbnail" value="{{ $post->thumbnail_id }}" type="hidden" />

	<div id="content" class="container-fluid">
		<div class="content-wrapper">

			<div class="panel" data-panel-control>
				<div class="panel-heading">
					<div class="panel-title">
						<h5>Nagłówek</h5>
					</div>
				</div>
				<div class="panel-body">
					<div class="list-group">
						<a class="list-group-item active" href="#">
							<div class="row">
								<div class="col-md-2">
									<label>Miniaturka</label>
									<img id="thumb_thumb" src="{{ url('/').'/'.$post->thumb() }}" alt="Miniaturka" style="height:100%; max-width: 200px;">
								</div>
								<div class="col-md-4">
									<label>Nagłówek</label>
									<img id="thumb" src="{{ url('/').'/'.$post->image() }}" alt="Nagłówek" style="height:100%; max-width: 300px;">
								</div>
								<div class="col-md-6">
									<h4 class="list-group-item-heading">{{ $post->title }}
										<span class="label label-primary pull-right">autor: {{ $post->user()->name }}</span>
									</h4>

									<p class="list-group-item-text">ostatnia modyfikacja: {{ $post->updated_at }}</p>
									<p class="list-group-item-text">utworzono: {{ $post->created_at }}</p>
								</div>
							</div>
						</a>
					</div>
					<div class="row">
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary btn-animated btn-wide">
								<span class="visible-content">
									<i class="fa fa-save"></i> Zapisz</span>
								<span class="hidden-content">
									<i class="fa fa-arrow-right"></i>
								</span>
							</button>
							<a href="{{ url('/preview/'.$post->id) }}" target="_blank" type="button" class="btn btn-success btn-animated btn-wide">
								<span class="visible-content">
									<i class="fa fa-eye"></i> Podgląd</span>
								<span class="hidden-content">
									<i class="fa fa-arrow-left"></i>
								</span>
							</a>
							<a href="{{ url('/system/blog/posty') }}" type="button" class="btn btn-default btn-animated btn-wide">
								<span class="visible-content">
									<i class="fa fa-arrow-circle-o-left"></i> Anuluj</span>
								<span class="hidden-content">
									<i class="fa fa-arrow-left"></i>
								</span>
							</a>

							<hr>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="title">Tytuł</label>
								<input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}">
							</div>
							<div class="form-group">
								<label for="url">Url</label>
								<input type="text" name="url" class="form-control" id="url" value="{{ $post->url }}">
							</div>
							<div class="form-group">
								<label for="url">Opis</label>
								<input type="text" name="info" class="form-control" id="info" value="{{ $post->info }}">
							</div>
							<div class="form-group">
								<label for="keywords">Słowa kluczowe</label>
								<input type="text" name="keywords" class="form-control" id="keywords" value="{{ $post->keywords }}">
							</div>
							<div class="form-group">
								<label for="url">Widoczność</label>
								<select name="visible" class="form-control">
									@if($post->visible)
									<option value="0"> Niepublikowany</option>
									<option value="1" selected> Publikowany</option>
									@else
									<option value="0" selected> Niepublikowany</option>
									<option value="1"> Publikowany</option>
									@endif
								</select>
							</div>
                            <div class="form-group">
								<label for="url">Promocja</label>
								<select name="promo" class="form-control">
									@if($post->promo)
									<option value="0"> Niepromuj</option>
									<option value="1" selected> Promuj</option>
									@else
									<option value="0" selected> Niepromuj</option>
									<option value="1"> Promuj</option>
									@endif
								</select>
							</div>
							<div class="form-group">
								<label for="date" class=" control-label">Publikuj</label>
								<input type="text" class="form-control" id="date" name="publish_at" value="{{ $post->publish_at }}">
							</div>
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
						<label for="gallery">Zdjęcie główne</label>
						<select name="gallery" class="form-control" id="gallery">
							<option value="0" selected> --- </option>
							@foreach($galleries as $gallery)
							<option value="{{ $gallery->id }}"> {{ $gallery->name }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<div id="images" class="list-group">
							<p style="">Wybierz galerię.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="panel" data-panel-control>
				<div class="panel-heading">
					<div class="panel-title">
						<h5>Treść główna</h5>
					</div>
				</div>
				<div class="panel-body">
					<div class="alert alert-info" role="alert">
						<strong>Image SRC: </strong>
						<span id="set-img"></span>
					</div>
					<textarea id="editor2" name="long_text" rows="14" cols="80">
                            {{ $post->long_text }}
                    </textarea>
					<div class="alert alert-info" role="alert">
						<strong>Ważne!</strong> Przy edycji treści proszę zwrócić uwagę na budowę HTML.
					</div>
				</div>
			</div>

			<div class="panel" data-panel-control>
				<div class="panel-heading">
					<div class="panel-title">
						<h5>HashTagi</h5>
					</div>
				</div>
				<div class="panel-body">
					<input id="tags_1" type="text" class="tags" name="tags" value="{{ $post->tags }}" />
				</div>
			</div>

		</div>
	</div>

</form>
@endsection @section('scripts')
<script src="{{ url('panel/js/tags/jquery.tagsinput.min.js') }}"></script>
<!-- ========== JS ========== -->
<script>
	$(function ($) {
    CKEDITOR.config.allowedContent = true;
    CKEDITOR.config.height = '800px';
    CKEDITOR.replace('editor2');
});
$(document).ready(function () {
    getgal($('#gallery'));
    $('#gallery').change(function () {
        getgal($(this));
    });

    $('.get-img').click(function () {
        img = $(this).data('src')
        target.html(img);
    });

    $('#tags_1').tagsInput({width: 'auto'});

    function getgal(el) {
        gal = el.val();
        url = '{{ url("/get/gallery/") }}/' + gal;

        $.get(url, function (data) {
            $('#images').html('<p></p>')
            $.each(data, function (key, value) {
                var img = value.file_path + value.file_name
                var id = value.id;
                var html = '<a href="javascript:void(0);"  class="list-group-item" style="display: inline-block; margin: 2px;">'
                        + '<div style=" width: 200px; height: 200px;">'
                        + '<div class="btn-group btn-group-justified" role="group">'
                        + '<div class="btn-group" role="group"><button title="Ustaw jako Nagłówek" onclick="setheader($(this));" type="button" class="btn btn-sm btn-default" data-id="' + id + '" data-src="{{ url("/")}}/' + img + '"><i class="fa fa-picture-o"></i></button></div>'
                        + '<div class="btn-group" role="group"><button title="Ustaw jako Miniaturka" onclick="setthumb($(this));" type="button" class="btn btn-sm btn-default" data-id="' + id + '" data-src="{{ url("/")}}/' + img + '"><i class="fa fa-crop"></i></button></div>'
                        + '<div class="btn-group" role="group"><button title="Wstaw do Edytora" onclick="getimg($(this));" type="button" class="btn btn-sm btn-default" data-src="{{ url("/")}}/' + img + '"><i class="fa fa-share"></i></button></div>'
                        + '</div><hr><div><img src="{{ url("/")}}/' + img + '" style="max-width:100%; height: auto; max-height:110px; display:block;"></div></div>'
                        + '</a>';

                $('#images').append(html);
                console.log(value);
            })
        });
    }
    $('#date').datepicker({ dateFormat: 'yy-mm-dd' });
});

function setheader(img) {
    $('#header_id').val(img.data('id'));
    $('#thumb').attr('src', img.data('src'));
    alert("Nagłówek został ustawiony.");
}

function setthumb(img) {
    $('#thumbnail_id').val(img.data('id'));
    $('#thumb_thumb').attr('src', img.data('src'));
    alert("Miniaturka została ustawiona.");
}

function getimg(img) {
    i = img.data('src')
    $('#set-img').html(i);
    CKEDITOR.instances['editor2'].insertHtml('<img src="' + i + '">');
}


function remover(el) {
    el.parent().parent().remove();
}

</script>
<!-- ========== JS ========== -->
@endsection