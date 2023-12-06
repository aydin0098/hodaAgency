@extends('layouts.home')
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumbs overlay" style="background-image:url('{{asset('home/img/breadcrumb.jpg')}}')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <!-- Bread Menu -->
                        <div class="bread-menu">
                            <ul>
                                <li><a href="#">خانه</a></li>
                                <li><a href="#">خدمات ما</a></li>
                            </ul>
                        </div>
                        <!-- Bread Title -->
                        <div class="bread-title"><h2>{{$category->title}}</h2></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / End Breadcrumb -->
    <!-- Blog Single -->
    <section class="latest-blog section-bg section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="section-title default text-center">
                        <div class="section-top">
                            <h1><b> {{$network->title}}</b></h1>
                        </div>
                        <div class="section-bottom">
                            <div class="text">
                                <p class="text-center">لیست قیمت  {{$network->title}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>نام برنامه</th>
                        <th>قیمت</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($prices as $p)
                        <tr>
                            <td>{{$p->title}}</td>
                            <td>{{$p->price}}</td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </section>
    <section class="call-action overlay" style="background-image:url('{{asset('home/img/cta-bg.jpg')}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <div class="call-inner">
                        <h2>محصولات و خلاقیت مارک مد ماست</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="button">
                        <a href="#" class="bizwheel-btn">دانلود کاتالوگ صدا و سیما</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
