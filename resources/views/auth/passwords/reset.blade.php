@extends('layouts.gate')

<!-- Main Content -->
@section('content')
<section class="section">
    <div class="row mt-40">
        <div class="col-md-10 col-md-offset-1 pt-50">

            <div class="row mt-50 ">
                <div class="col-md-11">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title text-center">
                                <h4>KSW CrossFit - Reset Hasła</h4>
                            </div>
                        </div>
                        <div class="panel-body p-20">

                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @endif

                            <div class="section-title">
                                <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>

                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                                {{ csrf_field() }}

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}">

                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password">

                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                    <div class="col-md-6">
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
                                        <a href="{{ url('/login') }}" class="form-link"><small class="muted-text">Anuluj</small></a>
                                        <button type="submit" class="btn btn-primary btn-labeled pull-right">Resetuj<span class="btn-label btn-label-right"><i class="fa fa-refresh"></i></span></button>
                                    </div>
                                </div>
                            </form>

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