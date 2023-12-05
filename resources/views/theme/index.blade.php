@extends('layouts.home')
@section('content')
    <!-- Hero Slider -->
   @include('theme.includes.slider')
    <!--/ End Hero Slider -->

    <!-- Features Area -->

   @include('theme.includes.import-services')
    <!--/ End Features Area -->


    <!-- Call To Action -->
    @include('theme.includes.call')
    <!--/ End Call to action -->


    <!-- Services -->
   @include('theme.includes.services')
    <!--/ End Services -->





    <!-- Portfolio -->
   @include('theme.includes.portfolio')
    <!--/ End Portfolio -->




    <!-- Latest Blog -->
   @include('theme.includes.blog')
    <!--/ End Latest Blog -->
@endsection
