<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>{{config('app.name', 'SEENAU')}}</title>
        <!-- Css Files -->
        <link rel="stylesheet" href="{{URL::asset('css/custom_upload.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/flaticon.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/slick-slider.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/prettyphoto.css')}}">
        <link rel="stylesheet" href="{{URL::asset('build/mediaelementplayer.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/color.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/color-two.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/color-three.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/color-four.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/responsive.css')}}">
    </head>
    <body>
        <!--// Main Wrapper \\-->
        <div class="wm-main-wrapper">
            @include('inc.headerAdmin')
            @yield('content')
            @include('inc.footer')
        <div class="clearfix"></div>
        </div>
        <!--// Main Wrapper \\-->

        <!-- ModalSearch Box -->
        @include('inc.modal-search-box')
        <!-- ModalSearch Box -->
        
        <!-- Scripts -->
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/modernizr.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.prettyphoto.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.countdown.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/fitvideo.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/skills.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/slick.slider.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/waypoints-min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('build/mediaelement-and-player.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/isotope.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.nicescroll.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('https://maps.googleapis.com/maps/api/js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/functions.js') }}"></script>
    </body>
</html>