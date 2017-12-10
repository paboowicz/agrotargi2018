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

                             <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-sm-4 control-label">E-Mail Address</label>

                                    <div class="col-sm-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group mt-20">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <a href="{{ url('/login') }}" class="form-link"><small class="muted-text">Powrót</small></a>
                                        <button type="submit" class="btn btn-primary btn-labeled pull-right">Resetuj<span class="btn-label btn-label-right"><i class="fa fa-envelope"></i></span></button>
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