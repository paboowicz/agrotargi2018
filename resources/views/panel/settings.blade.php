@extends('layouts.admin')

@section('header')
<div class="content-container">

        <div class="main-page">
            <div class="container-fluid">
                <div class="row page-title-div dark-title">
                    <div class="col-md-6">
                        <h4 class="title">Settings</h4>
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
                            <li><a href="/system/"><i class="fa fa-home"></i> System</a></li>
                            <li class="active">Ustawienia</li>
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
                    <h5>Twoje Uprawnienia</h5>
                </div>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    Konto: 
                    @if(Auth::user()->admin)
                    <li class="list-group-item list-group-item-success"><input type="checkbox" class="js-switch" checked /> Administrator</li>
                    @else
                    <li class="list-group-item list-group-item-warning"><input type="checkbox" class="js-switch" /> Użytkownik</li>
                    @endif
                    Moduły: 
                    @if(Auth::user()->cms)
                    <li class="list-group-item list-group-item-info"><input type="checkbox" class="js-switch-blue" checked /> Moderator Treści Strony</li>
                    @endif
                    @if(Auth::user()->trainer)
                    <li class="list-group-item list-group-item-info"><input type="checkbox" class="js-switch-blue" checked /> Trener Siłowni</li>
                    @endif
                </ul> 
            </div>
        </div>
    </div>
</div>
<!-- /.col-md-6 -->
@endsection

@section('scripts')
<script>
    $(function () {

        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

        elems.forEach(function (html) {
            var switchery = new Switchery(html);
        });

        // For blue switches
        var blueElems = Array.prototype.slice.call(document.querySelectorAll('.js-switch-blue'));

        blueElems.forEach(function (html) {
            var switchery = new Switchery(html, {
                color: '#3498db'
            });
        });

        // For danger switches
        var dangerElems = Array.prototype.slice.call(document.querySelectorAll('.js-switch-danger'));

        dangerElems.forEach(function (html) {
            var switchery = new Switchery(html, {
                color: '#e74c3c'
            });
        });

        // For warning switches
        var warningElems = Array.prototype.slice.call(document.querySelectorAll('.js-switch-warning'));

        warningElems.forEach(function (html) {
            var switchery = new Switchery(html, {
                color: '#f39c12'
            });
        });

        // For small switches
        var smallElems = Array.prototype.slice.call(document.querySelectorAll('.js-switch-small'));

        smallElems.forEach(function (html) {
            var switchery = new Switchery(html, {
                size: 'small'
            });
        });

        // For large switches
        var largeElems = Array.prototype.slice.call(document.querySelectorAll('.js-switch-large'));

        largeElems.forEach(function (html) {
            var switchery = new Switchery(html, {
                size: 'large'
            });
        });

    });
</script>
@endsection