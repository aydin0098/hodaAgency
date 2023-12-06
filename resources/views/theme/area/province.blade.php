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
                        <div class="bread-title"><h2>{{$service->title}}</h2></div>
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
                            <h1><b> استان ها</b></h1>
                        </div>
                        <div class="section-bottom">
                            <div class="text">
                                <p class="text-center">برای استعلام قیمت لطفا استان خود را انخاب کنید .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($provinces as $p)
                    <div class="col-lg-4 col-md-6 col">
                        <div class="blog-latest">
                            <div class="single-slider">
                                <!-- Single Blog -->
                                <div class="single-news">
                                    <div class="news-head overlay" style="width: 30%">
                                        <span class="news-img" style="background-image:url('{{asset($p->image)}}.jpg')"></span>
                                    </div>
                                    <div class="news-body" style="width: 30%">
                                        <div class="news-content">
                                            <h3 class="news-title"><a href="{{route('area.city',['province' => $p->id,'service_id' => $service->id])}}">{{$p->name}}</a></h3>
                                            <div class="news-text">
                                                <a style="padding: 7px 6px" href="{{route('area.city',['service_id' => $service->id,'province' => $p->id])}}" class="bizwheel-btn"><i class="fa fa-angle-left"></i>لیست شهر ها</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Single Blog -->
                            </div>
                        </div>
                    </div>
                @endforeach

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
                        <a href="#" class="bizwheel-btn">دانلود کاتالوگ رسانه محیطی</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
