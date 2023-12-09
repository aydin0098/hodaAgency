<header class="header">
    <!-- Middle Header -->
    <div class="middle-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="middle-inner">
                        <div class="row">
                            <div class="col-lg-2 col-md-3 col-12">
                                <!-- Logo -->
                                <div class="logo">
                                    <!-- Image Logo -->
                                    <div class="img-logo">
                                        <a href="{{route('home.index')}}">
                                            <img src="{{asset('home/img/logo.png')}}" alt="#">
                                        </a>
                                    </div>
                                </div>
                                <div class="mobile-nav"></div>
                            </div>
                            <div class="col-lg-10 col-md-9 col-12">
                                <div class="menu-area">
                                    <!-- Main Menu -->
                                    <nav class="navbar navbar-expand-lg">
                                        <div class="navbar-collapse">
                                            <div class="nav-inner">
                                                <div class="menu-home-menu-container">
                                                    <!-- Naviagiton -->
                                                    <ul id="nav" class="nav main-menu menu navbar-nav">
                                                        <li><a href="{{route('home.index')}}">خانه</a></li>
                                                        <li class="icon-active"><a href="#">خدمات ما</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="{{route('area.index')}}">رسانه محیطی</a></li>
                                                                <li><a href="{{route('tv.index')}}">تبلیغات صدا و سیما</a></li>
                                                                <li><a href="{{route('metro.index')}}">تبلیغات مترو</a></li>
                                                                <li><a href="#">دیجیتال مارکتینگ</a></li>
                                                                <li><a href="#">بازاریابی و تحقیقات بازار</a></li>
                                                                <li><a href="#">برندسازی 360</a></li>

                                                            </ul>
                                                        </li>
                                                        <li><a href="{{route('home.blog')}}">وبلاگ</a></li>
                                                        <li><a href="{{route('home.contact')}}">تماس با ما</a></li>
                                                        <li><a href="{{route('home.about')}}"> درباره ما</a></li>
                                                    </ul>
                                                    <!--/ End Naviagiton -->
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                    <!--/ End Main Menu -->
                                    <div class="right-button">
                                        <a href="tel:02638586000" class="bizwheel-btn"> 026-38586000</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Middle Header -->

</header>
