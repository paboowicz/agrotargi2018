@extends('layouts.admin')

@section('uzytkownicy', 'color-primary')


@section('header')
<div class="content-container">

        <div class="main-page">
            <div class="container-fluid">
                <div class="row page-title-div dark-title">
                    <div class="col-md-6">
                        <h4 class="title">Użytkownicy</h4>
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
                            <li class="">Admin</li>
                            <li class="active">Użytkownicy</li>
                        </ul>
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-md-6 text-right">
                        <!--
                        <a href="#"><i class="fa fa-comments"></i> Talk to us</a>
                        <a href="#" class="pl-20"><i class="fa fa-cog"></i> Settings</a>
                        -->
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
<section class="section">
    <div class="container-fluid">
        <div class="content-wrapper">

            <div class="panel border-primary no-border border-3-top lobipanel" data-panel-control>
                <div class="panel-heading">
                    <div class="panel-title">
                        <h5>Lista Użytkowników</h5>
                    </div>
                </div>

                <div class="panel-body">
                    @if($users->count())
                    <div class="list-group">
                        @foreach($users as $user)
                        <a href="{{ url()->current() }}/{{ $user->id }}" class="list-group-item">

                            {{ $user->name }}
                            <span class="label label-default">{{ $user->status() }}</span>
                            <span class="badge badge-primary">id: {{ $user->id }}</span>

                        </a>
                        @endforeach
                    </div> 
                    @else
                    <p>Brak osób do wyświetlenia</p>
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
                <form method="post" action="{{ url()->current() }}/add" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal3Label">Dodaj trenera <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group left-icon">
                            <label for="username">Nazwa</label>
                            <span class="fa fa-user form-left-icon"></span>
                            <input class="form-control" id="username" placeholder="Enter Desired Username" type="text" name="name" value="">

                            @if ($errors->has('name'))
                            <span class="help-block form-error">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group left-icon">
                            <label for="Email">Adres E-mail</label>
                            <span class="fa fa-envelope form-left-icon"></span>
                            <input class="form-control" id="Email" placeholder="Enter Your Email Id" type="email" name="email" value="">

                            @if ($errors->has('email'))
                            <span class="help-block form-error">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group left-icon">
                            <label for="password" class="control-label">Hasło</label>
                            <span class="fa fa-key form-left-icon"></span>
                            <input id="password" type="password" class="form-control" name="password">

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group left-icon">
                            <label for="password-confirm" class="control-label">Potwierdz Hasło</label>
                            <span class="fa fa-key form-left-icon"></span>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                            @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                            @endif
                        </div>
                        <hr>
                        <div class="form-group left-icon">
                            <label for="Profil">Profil</label>
                            <span class="fa fa-cog form-left-icon"></span>
                            <select  class="form-control" id="Profil" name="profile" >
                                <option value="0" selected>Gość</option>
                                <option value="1">Klient</option>
                                <option value="2">Administrator</option>
                            </select>

                            @if ($errors->has('profil'))
                            <span class="help-block form-error">
                                <strong>{{ $errors->first('profile') }}</strong>
                            </span>
                            @endif
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
</section>
@endsection