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
                        <div class="bread-title"><h2>ایستگاه {{$station->title}}</h2></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / End Breadcrumb -->
    <!-- Blog Single -->
    <section class="news-area archive blog-single section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="blog-single-main">
                                <div class="main-image">
                                    <img src="{{asset('home/img/blog/blog-single.jpg')}}" alt="#">
                                </div>
                                <div class="blog-detail">
                                    <h2 class="blog-title">مترو</h2>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                                        گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است،
                                        و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای
                                        کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان
                                        جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه
                                        ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت
                                        می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به
                                        پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات
                                        پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Layout -->
    <section class="blog-layout blog-latest section-space">
        <div class="container">
            <div class="row">
                @foreach($products as $p)
                    <div class="col-lg-6 col-md-6 col-12">
                        <!-- Single Blog -->
                        <div class="single-news">
                            <div class="news-head overlay">
                                <span class="news-img" style="background-image:url('{{asset($p->image)}}');width: 200px"></span>
                            </div>
                            <div class="news-body">
                                <div class="news-content">
                                    <h3 class="news-title"><a href="#">{{$p->title}}</a></h3>
                                    <div class="news-text">
                                        <p>گرید A قیمت 23000 تومان</p>
                                        <p>گرید A+ قیمت 23000 تومان</p>
                                        <p>گرید B قیمت 23000 تومان</p>
                                    </div>
                                    <div class="news-text">
                                        <p>
                                            حداقل تعداد قرارداد کتیبه 300 عدد در ماه می باشد
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ End Single Blog -->
                    </div>
                @endforeach

            </div>




            <div class="row">
                <div class="col-12">

                    <h5 class="mt-5">هزینه چاپ و نصب رسانه های مترو ( به تومان )</h5>
                </div>
                <div class="col-12">
                    <table class="table table-bordered table-striped mt-5">
                        <thead>
                        <tr>
                            <th>شرح خدمات</th>
                            <th>واحد</th>
                            <th>قیمت</th>
                        </tr>


                        </thead>

                        <tbody>
                        @foreach($products as $p)
                            <tr>
                                <td>{{$p->title}}</td>
                                <td>{{$p->vahed}}</td>
                                <td>{{number_format($p->price).' تومان'}}</td>
                            </tr>
                        @endforeach



                        </tbody>

                    </table>
                </div>
            </div>



        </div>

    </section>
    <!--/ End Blog Layout -->

    <section class="call-action overlay mt-5" style="background-image:url('{{asset('home/img/cta-bg.jpg')}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="call-inner">
                        <h2>محصولات و خلاقیت مارک مد ماست</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است</p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="button">
                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="bizwheel-btn">درخواست تبلیغات مترو</a>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="button">
                        <a href="#" class="bizwheel-btn">دانلود کاتالوگ مترو</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="services section-bg section-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title  style2 text-center">
                        <div class="section-top">
                            <h1><b>نمونه کار های مترو</b></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row photos" >
                <div class="col-lg-4 col-md-6 col-12 item ">
                    <!-- Single Service -->
                    <a href="{{asset('home/img/services/service-01.jpg')}}" data-lightbox="photos">
                        <div class="single-service">
                            <div class="service-head">
                                <img src="{{asset('home/img/services/service-01.jpg')}}" alt="#">
                            </div>
                            <div class="service-content">
                                <h4><a href="#">استراتژی کسب و کار</a></h4>
                            </div>
                        </div>
                    </a>
                    <!--/ End Single Service -->
                </div>

            </div>
        </div>
    </section>

@endsection

