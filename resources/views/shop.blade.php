
@extends('layouts.master')

@section('title', '生鮮比價系統')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>商店</h1>
                        <h2 class="subheading"></h2>
                        <span class="meta"><a href="#"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                <div class="post-preview">
                    <a href="{{route('posts.show')}}">
                        <h2 class="post-title">
                            全聯福利中心-太平中平店
                        </h2>
                        <h3 class="post-subtitle">

                        </h3>
                    </a>
                    <i class="fa fa-map-marker "><tr class="post-meta">地址：<a href="https://www.google.com.tw/maps/place/%E5%9C%8B%E6%B3%B0%E4%B8%96%E8%8F%AF%E9%8A%80%E8%A1%8CATM(%E5%85%A8%E8%81%AF-%E5%A4%AA%E5%B9%B3%E4%B8%AD%E5%B9%B3%E5%BA%97)/@24.1436697,120.7340437,21z/data=!4m12!1m6!3m5!1s0x346922d1ffee7fdf:0x968bd2ea00072fd6!2z5YWo6IGv56aP5Yip5Lit5b-DIOWkquW5s-S4reW5s-W6lw!8m2!3d24.12287!4d120.717807!3m4!1s0x3469234aad307bef:0xaf7f3f3acfcb6efc!8m2!3d24.1436409!4d120.7340967" target="_blank">
                            台中市太平區中山路一段336號</a></tr>
                    </i>
                </div>

                <hr>

                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            全聯福利中心-台中太原店
                        </h2>
                        <h3 class="post-subtitle">

                        </h3>
                    </a>
                    <i class="fa fa-map-marker "><tr class="post-meta">地址：<a href="https://www.google.com.tw/maps/search/%E5%8F%B0%E4%B8%AD%E5%B8%82%E5%8C%97%E5%8D%80%E5%AD%B8%E5%A3%AB%E8%B7%AF%E5%85%A8%E8%81%AF+%E5%8F%B0%E4%B8%AD%E5%A4%AA%E5%8E%9F%E5%BA%97/@24.1622236,120.6720615,15z/data=!3m1!4b1" target="_blank" >
                            台中市北屯區太原路三段191-1號</a></tr></i>
                </div>

                <hr>

                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            全聯福利中心-台中學士店
                        </h2>
                        <h3 class="post-subtitle">

                        </h3>
                    </a>
                    <i class="fa fa-map-marker "><tr class="post-meta">地址：<a href="https://www.google.com.tw/maps/place/%E5%85%A8%E8%81%AF%E7%A6%8F%E5%88%A9%E4%B8%AD%E5%BF%83+%E5%8F%B0%E4%B8%AD%E5%AD%B8%E5%A3%AB%E5%BA%97/@24.1621994,120.6786276,17z/data=!3m1!4b1!4m5!3m4!1s0x346917d8da9d4dfd:0xa8b902c4aafd2dc4!8m2!3d24.1621945!4d120.6808163" target="_blank">
                            台中市北區學士路261號</a></tr></i>
                </div>

                <hr>

                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            全聯福利中心-台中永興店店
                        </h2>
                        <h3 class="post-subtitle">

                        </h3>
                    </a>
                    <i class="fa fa-map-marker "><tr class="post-meta">地址：<a href="https://www.google.com.tw/maps/search/%E5%8F%B0%E4%B8%AD%E5%B8%82%E5%8C%97%E5%8D%80%E5%AD%B8%E5%A3%AB%E8%B7%AF%E5%85%A8%E8%81%AF+%E5%8F%B0%E4%B8%AD%E6%B0%B8%E8%88%88%E5%BA%97/@24.1638518,120.6794734,17z/data=!3m1!4b1" target="_blank">
                            台中市北區永興街242號</a></tr></i>
                </div>

                <hr>
                <!-- Pager -->
                <!--ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul-->
            </div>
        </div>
    </div>
@endsection
