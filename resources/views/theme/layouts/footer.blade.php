<footer class="footer" style="background-image:url('{{asset('home/img/map.png')}}')">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Footer About -->
                    <div class="single-widget footer-about widget">
                        <div class="logo">
                            <div class="img-logo">
                                <a class="logo" href="{{route('home.index')}}">
                                    <img class="img-responsive" src="{{asset('home/img/logo.png')}}" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="footer-widget-about-description">
                            <p>
                                کانون آگهی و تبلیغات هدی سازمانی خلاق و پویا در حوزه برندینگ، تبلیغات و ارئه راهکار های مناسب برای بازاریابی و فروش با مجوز رسمی از وزارت فرهنگ و ارشاد اسلامی یک آژانس تبلیغاتی جامع می باشد 

                            </p>
                        </div>
                        <div class="social">
                            <!-- Social Icons -->
                            <ul class="social-icons">
                                <li><a class="facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="pinterest" href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a class="instagram" href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="button"><a href="{{route('home.about')}}" class="bizwheel-btn">درباره ما</a></div>
                    </div>
                    <!--/ End Footer About -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Footer Links -->
                    <div class="single-widget f-link widget">
                        <h3 class="widget-title">بخش ها</h3>
                        <ul>
                            <li><a href="#">درباره ما</a></li>
                            <li><a href="#">خدمات ما</a></li>
                            <li><a href="#">نمونه کارها</a></li>
                            <li><a href="#">تماس با ما</a></li>
                        </ul>
                    </div>
                    <!--/ End Footer Links -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Footer Links -->
                    <div class="single-widget f-link widget">
                        <h3 class="widget-title">خدمات اصلی</h3>
                        <ul>
                            @php
                                $imService = \App\Models\Service::where('parent_id',null)->get();
                            @endphp
                            @foreach($imService as $s)
                                <li><a href="{{$s->slug}}">{{$s->title}}</a></li>
                            @endforeach

                        </ul>
                    </div>
                    <!--/ End Footer Links -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Footer Links -->
                    <div class="single-widget f-link widget">
                        <h3 class="widget-title">سایر خدمات</h3>
                        <ul>
                            <li><a href="#">آتلیه گرافیک</a></li>
                            <li><a href="#">استراتژی و خلاقیت</a></li>
                            <li><a href="#">ساخت و سازهای فلزی</a></li>
                            <li><a href="#">دفتر مجازی</a></li>
                        </ul>
                    </div>
                    <!--/ End Footer Links -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Footer Contact -->
                    <div class="single-widget footer_contact widget">
                        <h3 class="widget-title">مشخصات ما</h3>
                        <ul class="address-widget-list">
                            <li class="footer-mobile-number"><i class="fa fa-phone"></i>026-3858600</li>
                            <li class="footer-mobile-number"><i class="fa fa-envelope"></i>alreza.vishi@gmail.com</li>
                            <li class="footer-mobile-number"><i class="fa fa-map-marker"></i>کرج - بلوار بلال - نبش شهرداری کرج - ساختمان پارسیان - طبقه 6</li>
                        </ul>
                    </div>
                    <!--/ End Footer Contact -->
                    <div class="row">
                        <div class="col-lg-5 col-md-8 col-12">
                            <!-- Footer Newsletter -->
                            <img referrerpolicy='origin' id = 'rgvjwlaojzpeoeuknbqenbqe' style = 'cursor:pointer' onclick = 'window.open("https://logo.samandehi.ir/Verify.aspx?id=347822&p=xlaoaodsjyoemcsiuiwkuiwk", "Popup","toolbar=no, scrollbars=no, location=no, statusbar=no, menubar=no, resizable=0, width=450, height=630, top=30")' alt = 'logo-samandehi' src = 'https://logo.samandehi.ir/logo.aspx?id=347822&p=qftishwlyndtaqgwodrfodrf' />
                            <!--/ End Footer Newsletter -->
                        </div>
                        <div class="col-lg-6  col-md-8 col-12">
                            <a referrerpolicy='origin' target='_blank' href='https://trustseal.enamad.ir/?id=285255&Code=nMNQ5t2uePPma9886kmY'><img referrerpolicy='origin' src='https://trustseal.enamad.ir/logo.aspx?id=285255&Code=nMNQ5t2uePPma9886kmY' alt='' style='cursor:pointer' Code='nMNQ5t2uePPma9886kmY'></a>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright-content">
                        <!-- Copyright Text -->
                        <p>© طراحی و توسعه توسط <a target="_blank" href="{{route('home.index')}}">تیم آژانس تبلیغاتی هدی</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Copyright -->
</footer>
