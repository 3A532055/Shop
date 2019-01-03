
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
                    <a href="">
                        <h2 class="post-title">
                            {{$shopshow -> name}}
                        </h2>
                    </a>    
                    <i class="fa fa-map-marker ">
                    <tr class="post-meta">
                    <a href="https://www.google.com.tw/maps/place/%E5%9C%8B%E6%B3%B0%E4%B8%96%E8%8F%AF%E9%8A%80%E8%A1%8CATM(%E5%85%A8%E8%81%AF-%E5%A4%AA%E5%B9%B3%E4%B8%AD%E5%B9%B3%E5%BA%97)/@24.1436697,120.7340437,21z/data=!4m12!1m6!3m5!1s0x346922d1ffee7fdf:0x968bd2ea00072fd6!2z5YWo6IGv56aP5Yip5Lit5b-DIOWkquW5s-S4reW5s-W6lw!8m2!3d24.12287!4d120.717807!3m4!1s0x3469234aad307bef:0xaf7f3f3acfcb6efc!8m2!3d24.1436409!4d120.7340967" target="_blank">
                        {{$shopshow -> location}}</a></tr>
                    </i>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
