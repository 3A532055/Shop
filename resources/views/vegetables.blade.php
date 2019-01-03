
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
                        <h1>所有蔬菜</h1>
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
            @foreach($vegetables as $vegeshows)
                    <div class="post-preview">
                        <a href="{{$vegeshows -> name}}">
                            <h2 class="post-title">{{$vegeshows -> name}}</h2>
                            <h3 class="post-subtitle"></h3>
                        </a>
                        <p class="post-meta"><a href="#"></a></p>
                    </div>
            @endforeach
        </div>
    </div>
@endsection
