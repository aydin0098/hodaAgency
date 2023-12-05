<section class="features-area section-bg">
    <div class="container">
        <div class="row">
            @foreach($imService as $s)
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Feature -->
                    <div class="single-feature">
                        <div class="icon-head">
                            <img src="{{asset($s->image)}}">
                        </div>
                        <h4><a href="#">{{$s->title}}</a></h4>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
                        <div class="button">
                            <a href="#" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-left"></i>بیشتر بدانید</a>
                        </div>
                    </div>
                    <!--/ End Single Feature -->
                </div>
            @endforeach

        </div>
    </div>
</section>
