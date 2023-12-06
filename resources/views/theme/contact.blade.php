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
                                <li><a href="index.html">خانه</a></li>
                                <li><a href="contact.html">تماس با ما</a></li>
                            </ul>
                        </div>
                        <!-- Bread Title -->
                        <div class="bread-title"><h2>آدرس ما</h2></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Breadcrumb --


<!--     Contact Us -->
    <section class="contact-us section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-12">
                    <!-- Contact Form -->
                    <div class="contact-form-area m-top-30">
                        <h4>در تماس باشید</h4>
                        <form class="form" method="post" action="">
                            <div class="alert alert-success contact_msg" style="display: none" role="alert">

                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <div class="icon"><i class="fa fa-user"></i></div>
                                        <input type="text" name="first_name" placeholder="نام">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <div class="icon"><i class="fa fa-user"></i></div>
                                        <input type="text" name="last_name" placeholder="نام خانوادگی">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <div class="icon"><i class="fa fa-envelope"></i></div>
                                        <input type="email" name="email" placeholder="ایمیل را وارد کنید">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <div class="icon"><i class="fa fa-tag"></i></div>
                                        <input type="text" name="subject" placeholder="موضوع را تایپ کنید">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group textarea">
                                        <div class="icon"><i class="fa fa-pencil"></i></div>
                                        <textarea type="textarea" name="message" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group button">
                                        <button type="submit" class="bizwheel-btn theme-2">ارسال</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--/ End contact Form -->
                </div>
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="contact-box-main m-top-30">
                        <div class="contact-title">
                            <h2>با ما تماس بگیرید</h2>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                        </div>
                        <!-- Single Contact -->
                        <div class="single-contact-box">
                            <div class="c-icon"><i class="fa fa-clock-o"></i></div>
                            <div class="c-text">
                                <h4>ساعت کار</h4>
                                <p>جمعه - شنبه<br>08 صبح - 10 شب (هر روز)</p>
                            </div>
                        </div>
                        <!--/ End Single Contact -->
                        <!-- Single Contact -->
                        <div class="single-contact-box">
                            <div class="c-icon"><i class="fa fa-phone"></i></div>
                            <div class="c-text">
                                <h4>اکنون با ما تماس بگیرید</h4>
                                <p>تلفن:888 765 4321<br> موبایل: 09162352632</p>
                            </div>
                        </div>
                        <!--/ End Single Contact -->
                        <!-- Single Contact -->
                        <div class="single-contact-box">
                            <div class="c-icon"><i class="fa fa-envelope-o"></i></div>
                            <div class="c-text">
                                <h4>ایمیل</h4>
                                <p>setinco@gmail.com<br>setinco@gmail.com</p>
                            </div>
                        </div>
                        <!--/ End Single Contact -->
                        <div class="button">
                            <a href="#" class="bizwheel-btn theme-1">آثار ما<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Contact Us -->

    <!-- Google Map -->
    <div class="contact-map">
        <div id="myMap" class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3235.4862773730474!2d50.99415527633453!3d35.812543122748615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8dbf484ac18f87%3A0xac56c0f7b9536ee9!2z2qnYp9mG2YjZhiDYotqv2YfbjCDZiCDYqtio2YTbjNi62KfYqiDZh9iv24w!5e0!3m2!1sen!2s!4v1701680860540!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!--/ End Google Map -->
@endsection
