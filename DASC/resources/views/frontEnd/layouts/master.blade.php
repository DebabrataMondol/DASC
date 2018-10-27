<!DOCTYPE html>
<html>
<head>
    <title>DASC</title>
    <meta name="language" content="English">
    <meta name="description" content="It is a website about education">
    <meta name="keywords" content="blog,cms blog">
    <meta name="author" content="Delowar">
    <link rel="stylesheet" href="{{asset('public/frontEnd/font-awesome-4.5.0/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/css/nivo-slider.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{asset('public/frontEnd/style.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('public/bootstrap/css/bootstrap.min.css')}}">--}}
    <script src="{{asset('public/frontEnd/js/jquery.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/frontEnd/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>

    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
                effect:'random',
                slices:10,
                animSpeed:500,
                pauseTime:5000,
                startSlide:0, //Set starting Slide (0 index)
                directionNav:false,
                directionNavHide:false, //Only show on hover
                controlNav:false, //1,2,3...
                controlNavThumbs:false, //Use thumbnails for Control Nav
                pauseOnHover:true, //Stop animation while hovering
                manualAdvance:false, //Force manual transitions
                captionOpacity:0.8, //Universal caption opacity
                beforeChange: function(){},
                afterChange: function(){},
                slideshowEnd: function(){} //Triggers after all slides have been shown
            });
        });
    </script>
</head>

<body>
@include('frontEnd.layouts.header')
@yield('content')

@include('frontEnd.layouts.footer')
<script type="text/javascript" src="{{asset('public/frontEnd/js/scrolltop.js')}}"></script>
</body>
</html>