
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
                        <h1>所有商店</h1>
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
            @foreach($shops as $shopshow)
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-preview">
                    <a href="{{route('Show.Shop', $shopshow->id)}}">
                        <h2 class="post-title">
                            {{$shopshow -> name}}
                        </h2>
                    </a>    
                    <i class="fa fa-map-marker ">
                    <tr class="post-meta">
                    <a href="" target="_blank">
                        {{$shopshow -> location}}</a></tr>
                    </i>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
