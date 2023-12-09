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
                                <li><a href="#">درباره ما</a></li>
                            </ul>
                        </div>
                        <!-- Bread Title -->
                        <div class="bread-title"><h2>درباره آژانس تبلیغاتی هدی</h2></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / End Breadcrumb -->

    <!-- About Us -->
    <section class="about-us section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1 col-md-6 col-12">
                    <!-- About Video -->
                    <div class="modern-img-feature">
                        <img src="{{asset('home/img/about-us.jpg')}}" alt="#">
                    </div>
                    <!--/End About Video  -->
                </div>
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="about-content section-title default text-left">
                        <div class="section-top">
                            <h1><span>درباره ما</span><b>کانون تبلیغاتی هدی</b></h1>
                        </div>
                        <div class="section-bottom">
                            <div class="text">
                                <p>
                                <p>
                                    کانون آگهی و تبلیغات هدی سازمانی خلاق و پویا در حوزه برندینگ، تبلیغات و ارئه راهکار های مناسب برای بازاریابی و فروش با مجوز رسمی از وزارت فرهنگ و ارشاد اسلامی یک آژانس تبلیغاتی جامع می باشد .

                                </p>
                            </div>
{{--                            <div class="button">--}}
{{--                                <a href="#" class="bizwheel-btn theme-2">نمونه کار های ما<i class="fa fa-angle-left"></i></a>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End About Us -->

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
                        <a href="#" class="bizwheel-btn">تماس با کارشناسان ما</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Skill Area -->
    <!-- Our Team -->
    <section class="team section-bg section-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title  style2 text-center">
                        <div class="section-top">
                            <h1><span>رهبران</span><b>تیم خلاق</b></h1><h4>رهبران خبره ما منتظر شما هستند.</h4>
                        </div>
                        <div class="section-bottom">
                            <div class="text-style-two">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-slider">
                <div class="single-slider">
                    <!-- Single Team -->
                    <div class="single-team">
                        <div class="team-head">
                            <img src="{{asset('home/img/team/team-1.jpg')}}" alt="#">
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="t-content">
                            <div class="content-inner">
                                <h4 class="name"><a href="#">برامون دامانا</a></h4>
                                <span class="designation">رئیس بازاریابی</span>
                            </div>
                        </div>
                    </div>
                    <!--/ End Single Team -->
                </div>
                <div class="single-slider">
                    <!-- Single Team -->
                    <div class="single-team">
                        <div class="team-head">
                            <img src="{{asset('home/img/team/team-1.jpg')}}" alt="#">
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="t-content">
                            <div class="content-inner">
                                <h4 class="name"><a href="#">برامون دامانا</a></h4>
                                <span class="designation">رئیس بازاریابی</span>
                            </div>
                        </div>
                    </div>
                    <!--/ End Single Team -->
                </div>
                <div class="single-slider">
                    <!-- Single Team -->
                    <div class="single-team">
                        <div class="team-head">
                            <img src="{{asset('home/img/team/team-1.jpg')}}" alt="#">
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="t-content">
                            <div class="content-inner">
                                <h4 class="name"><a href="#">برامون دامانا</a></h4>
                                <span class="designation">رئیس بازاریابی</span>
                            </div>
                        </div>
                    </div>
                    <!--/ End Single Team -->
                </div>
                <div class="single-slider">
                    <!-- Single Team -->
                    <div class="single-team">
                        <div class="team-head">
                            <img src="{{asset('home/img/team/team-1.jpg')}}" alt="#">
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="t-content">
                            <div class="content-inner">
                                <h4 class="name"><a href="#">برامون دامانا</a></h4>
                                <span class="designation">رئیس بازاریابی</span>
                            </div>
                        </div>
                    </div>
                    <!--/ End Single Team -->
                </div>
                <div class="single-slider">
                    <!-- Single Team -->
                    <div class="single-team">
                        <div class="team-head">
                            <img src="{{asset('home/img/team/team-1.jpg')}}" alt="#">
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="t-content">
                            <div class="content-inner">
                                <h4 class="name"><a href="#">برامون دامانا</a></h4>
                                <span class="designation">رئیس بازاریابی</span>
                            </div>
                        </div>
                    </div>
                    <!--/ End Single Team -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Team -->
    <!--/ End Skill Area -->
@endsection
