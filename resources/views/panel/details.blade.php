@extends('layouts.admin')

@section('header')
<div class="content-container">

        <div class="main-page">
            <div class="container-fluid">
                <div class="row page-title-div dark-title">
                    <div class="col-md-6">
                        <h4 class="title">Details</h4>
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
                            <li><a href="/"><i class="fa fa-home"></i> System</a></li>
                            <li class="active">Details</li>
                        </ul>
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-md-6 text-right">
                        
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
                    <h5>Dane logowania: </h5>
                </div>
            </div>
            <div class="panel-body">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif

                <form class="col-md-10 col-md-offset-1" role="form" method="POST" action="{{ url('/system/account/details/') }}">
                    {{ csrf_field() }}

                    <div class="form-group left-icon">
                        <label for="username">Nazwa</label>
                        <span class="fa fa-user form-left-icon"></span>
                        <input class="form-control" id="username" placeholder="Enter Desired Username" type="text" name="name" value="{{ Auth::user()->name }}">

                        @if ($errors->has('name'))
                        <span class="help-block form-error">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group left-icon">
                        <label for="Email">Adres E-mail</label>
                        <span class="fa fa-envelope form-left-icon"></span>
                        <input class="form-control" id="Email" placeholder="Enter Your Email Id" type="email" name="email" value="{{ Auth::user()->email }}">

                        @if ($errors->has('email'))
                        <span class="help-block form-error">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group left-icon">
                        <label for="NewPassword">Nowe Hasło</label>
                        <span class="fa fa-key form-left-icon"></span>
                        <input class="form-control" id="NewPassword" type="password" autocomplete="nope" name="password">

                        @if ($errors->has('password'))
                        <span class="help-block form-error">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group left-icon">
                        <label for="ConfirmPassword">Potwierdź Hasło</label>
                        <span class="fa fa-key form-left-icon"></span>
                        <input class="form-control" id="ConfirmPassword" type="password" autocomplete="nope" name="password_confirmation">

                        @if ($errors->has('password_confirmation'))
                        <span class="help-block form-error">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                        @endif
                    </div>
                    
                    <button type="submit" class="btn btn-success btn-rounded btn-wide pull-right" data-toggle="confirmation"><i class="fa fa-check"></i>Aktualizuj</button>
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