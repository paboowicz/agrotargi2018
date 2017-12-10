@extends('layouts.gate')

@section('content')
<section class="section">
    <div class="row mt-40">
        <div class="col-md-10 col-md-offset-1 pt-50">

            <div class="row mt-50 ">
                <div class="col-md-11">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title text-center">
                                <h4>Rejestracja</h4>
                            </div>
                        </div>
                        <div class="panel-body p-20">

                            <div class="section-title">
                                <p class="sub-title">Rejestracja została wyłączona.</p>
                            </div>

                            @if(false)
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-sm-4 control-label">Imię i Nazwisko</label>

                                    <div class="col-sm-8">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                        @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-sm-4 control-label">E-Mail Address</label>

                                    <div class="col-sm-8">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-sm-4 control-label">Hasło</label>

                                    <div class="col-sm-8">
                                        <input id="password" type="password" class="form-control" name="password">

                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label for="password-confirm" class="col-sm-4 control-label">Potwierdz Hasło</label>

                                    <div class="col-sm-8">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                        @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group mt-20">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <a href="{{ url('/login') }}" class="form-link"><small class="muted-text">Mam Konto</small></a>
                                        <button type="submit" class="btn btn-success btn-labeled pull-right">Utwórz<span class="btn-label btn-label-right"><i class="fa fa-sign-in "></i></span></button>
                                    </div>
                                </div>
                            </form>
                            @endif

                        </div>
                    </div>
                    <!-- /.panel -->
                    <p class="text-muted text-center"><small>InteractiveVision 2017</small></p>
                </div>
                <!-- /.col-md-11 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.col-md-12 -->
    </div>
    <!-- /.row -->
</section>
@endsection
