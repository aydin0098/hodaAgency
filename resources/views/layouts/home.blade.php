
<!DOCTYPE html>
<html lang="zxx">
@include('theme.layouts.head')
<body id="bg" style="">

<!-- Boxed Layout -->
<div id="page" class="site">

    <!-- Preloader -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>
    <!--/ End Preloader -->


    <!-- Header -->
    @include('theme.layouts.header')
    <!--/ End Header -->

    @yield('content')

    <!-- Client Area -->
    <!--/ End Client Area -->

    <!-- Footer -->
   @include('theme.layouts.footer')
    <!--/  End Footer -->

</div>
<!-- End Boxed Layout -->

<!-- Jquery JS -->
@include('theme.layouts.scripts')


</body>
</html>
