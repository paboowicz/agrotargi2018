@extends('layouts.admin')

@section('kokpit','bg-primary')

@section('header')
<div class="content-container">

        <div class="main-page">
            <div class="container-fluid">
                <div class="row page-title-div dark-title">
                    <div class="col-md-6">
                        <h4 class="title">Kokpit</h4>
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
                            <li class="active">Kokpit</li>
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
    
</section>
@endsection