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
                                <h4>Logowanie</h4>
                            </div>
                        </div>
                        <div class="panel-body p-20">

                            <div class="section-title">
                                <p class="sub-title">Logowanie do systemu.</p>
                            </div>

                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">

                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email" value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Hasło</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword3" placeholder="Hasło"  name="password">
                                        
                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Zapamiętaj Mnie
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-20">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <a href="{{ url('/password/reset') }}" class="form-link"><small class="muted-text">Zapomniałeś hasła?</small></a>
                                        <button type="submit" class="btn btn-success btn-labeled pull-right">Zaloguj<span class="btn-label btn-label-right"><i class="fa fa-sign-in "></i></span></button>
                                    </div>
                                </div>
                            </form>
                            
                            <hr>
                            
                            <h5 class="text-center mt-10 mb-20">Lub załóż konto</h5>
                            
                            <div class="text-center">
                                <a href="{{ url('/register') }}" class="btn btn-primary btn-labeled">Stwórz Konto<span class="btn-label btn-label-right"><i class="fa fa-user-plus "></i></span></a>
                            </div>

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