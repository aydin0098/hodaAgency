<section class="hero-slider style1">
    <div class="home-slider">
        <!-- Single Slider -->
        @foreach($sliders as $s)
            <div class="single-slider" style="background-image:url({{asset($s->image)}})">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-8 col-12">
                            <div class="welcome-text">
                                <div class="hero-text">
                                    <h4>{{$s->title_text}}</h4>
                                    <h1>{{$s->title}}</h1>
                                    <div class="p-text">
                                        <p>{{$s->description_text}}</p>
                                    </div>
                                    <div class="button">
                                        <a href="#" class="bizwheel-btn theme-1 effect">با ما همکاری کنید</a>
                                        <a href="#" class="bizwheel-btn theme-2 effect">نمایش نمونه کارها</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <!--/ End Single Slider -->

    </div>
</section>
