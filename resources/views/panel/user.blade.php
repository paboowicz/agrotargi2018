@extends('layouts.admin')

@section('header')
<div class="content-container">

        <div class="main-page">
            <div class="container-fluid">
                <div class="row page-title-div dark-title">
                    <div class="col-md-6">
                        <h4 class="title">Użytkownik {{ $user->name }}</h4>
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
                            <li class="">< Admin</li>
                            <li><a href="{{ url('/system/account/users/') }}">Użytkownicy</a></li>
                            <li class="active">{{ $user->name }}</li>
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
<div class="container-fluid">
    <div class="content-wrapper">
        <div class="panel border-success no-border border-3-top" data-panel-control>
            <div class="panel-heading">
                <div class="panel-title">
                    <h5>Dane użytkownika </h5>
                </div>
            </div>
            <div class="panel-body">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif

                <form class="col-md-10 col-md-offset-1" role="form" method="POST" action="{{ url('/system/account/users/'.$user->id) }}">
                    {{ csrf_field() }}

                    <div class="form-group left-icon">
                        <label for="username">Nazwa</label>
                        <span class="fa fa-user form-left-icon"></span>
                        <input class="form-control" id="username" placeholder="Enter Desired Username" type="text" name="name" value="{{ $user->name }}">

                        @if ($errors->has('name'))
                        <span class="help-block form-error">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group left-icon">
                        <label for="Email">Adres E-mail</label>
                        <span class="fa fa-envelope form-left-icon"></span>
                        <input class="form-control" id="Email" placeholder="Enter Your Email Id" type="email" name="email" value="{{ $user->email }}">

                        @if ($errors->has('email'))
                        <span class="help-block form-error">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group left-icon">
                        <label for="Profil">Profil</label>
                        <span class="fa fa-cog form-left-icon"></span>
                        <select  class="form-control" id="Profil" name="profile" >
                            <option value="0" <?php echo ($user->profile == 0)? 'selected': ''; ?>>Gość</option>
                            <option value="1" <?php echo ($user->profile == 1)? 'selected': ''; ?>>Klient</option>
                            <option value="2" <?php echo ($user->profile == 2)? 'selected': ''; ?>>Administrator</option>
                        </select>

                        @if ($errors->has('profil'))
                        <span class="help-block form-error">
                            <strong>{{ $errors->first('profile') }}</strong>
                        </span>
                        @endif
                    </div>
                    
                    <button type="submit" class="btn btn-success btn-rounded btn-wide pull-right" data-toggle="confirmation"><i class="fa fa-check"></i>Aktualizuj</button>
                      
                    <a href="{{ url('/system/account/users/'.$user->id.'/kill') }}" role="button" class="btn btn-danger btn-rounded btn-wide pull-right" data-toggle="confirmation"><i class="fa fa-trash"></i>Skasuj</a>
                    
                    <a href="{{ url('/system/account/users/') }}" role="button" class="btn btn-default btn-rounded btn-wide pull-right"><i class="fa fa-arrow-left"></i>Powrót</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(function () {
        
        $('[data-toggle=confirmation]').confirmation();

    });
</script>
@endsection