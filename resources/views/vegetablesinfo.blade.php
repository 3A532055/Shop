
@extends('layouts.master')

@section('title', '生鮮比價系統')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>{{$vegetables -> name}}</h1>
                        <hr class="small">
                        <span class="subheading"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
    
        @foreach($price as $showprice)
            
                    <div class="post-preview">
                            <h2 class="post-title"></h2>
                            <h3 class="post-subtitle">{{$showprice -> price}}</h3>
                        <p class="post-meta"><a href="#"></a></p>
                    </div>
               
        @endforeach    
        </div>
    </div>
@endsection
