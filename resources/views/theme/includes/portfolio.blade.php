<section class="portfolio section-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                <div class="section-title default text-center">
                    <div class="section-top">
                        <h1><span>پروژه</span><b>آثار ما</b></h1>
                    </div>
                    <div class="section-bottom">
                        <div class="text">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="portfolio-menu">
                    <!-- Portfolio Nav -->
                    <ul id="portfolio-nav" class="portfolio-nav tr-list list-inline cbp-l-filters-work">
                        <li data-filter="*" class="cbp-filter-item active">همه</li>
                        @foreach($categories as $c)
                            <li data-filter=".animation{{$c->id}}" class="cbp-filter-item">{{$c->title}}</li>
                        @endforeach


                    </ul>
                    <!--/ End Portfolio Nav -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="portfolio-main">
                    <div id="portfolio-item" class="portfolio-item-active">
                        @foreach($categories as $c)
                            @foreach($c->portfolios as $p)
                                <div class="cbp-item business animation{{$c->id}}">
                                    <!-- Single Portfolio -->
                                    <div class="single-portfolio">
                                        <div class="portfolio-head overlay">
                                            <img src="{{asset($p->image)}}" alt="#">
                                            <a class="more" href="#"><i class="fa fa-long-arrow-left"></i></a>
                                        </div>
                                    </div>
                                    <!--/ End Single Portfolio -->
                                </div>
                            @endforeach

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
