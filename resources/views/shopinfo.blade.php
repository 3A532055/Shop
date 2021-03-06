
@extends('layouts.master')

@section('title', '生鮮比價系統')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('https://i.imgur.com/TDMxkkV.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>{{$shops -> name}}</h1>
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
            @foreach($price as $showinfo)
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-preview">
                        <h2 class="post-title">
                            {{$showinfo -> name}}
                        </h2>
                        <h3 class="post-subtitle">$ {{$showinfo -> price}}</h3>
                    </div>
                </div>
           @endforeach
        </div>
    </div>
@endsection
