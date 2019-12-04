<!DOCTYPE html>
<html lang="en-US" class="js_active vc_desktop vc_transform fontawesome-i2svg-active fontawesome-i2svg-complete">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset('img/logo-region.png')}}">
    <title>{{Voyager::setting('site.title')}}</title>
    <link rel="dns-prefetch" href="http://fonts.googleapis.com/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{asset('js/wp-emoji-release.min.js')}}"
            type="text/javascript" defer=""></script>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/logistic.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('css/base.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('css/bootstrap-dropdownhover.min.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('css/cubeportfolio.min.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('rev-slider/revolution/fonts/font-awesome/css/font-awesome.min.css')}}"
          media="all">
    <link rel="stylesheet" href="{{asset('css/icofont.min.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('css/js_composer.min.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('rev-slider/revolution/css/layers.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('rev-slider/revolution/css/navigation.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('rev-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}"
          media="all">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('rev-slider/revolution/css/settings.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('css/shortcodes.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('css/product.css')}}" media="all">
    <script src="{{asset('js/jquery/jquery.js')}}"></script>
    <script src="{{asset('js/jquery/jquery-migrate.min.js')}}"></script>
</head>

<body class="home page-template">
<!-- Page loader Start -->
{{--<div id="pageloader">--}}
{{--    <div class="loader-item">--}}
{{--        <div class="loader">--}}
{{--            <div class="spin"></div>--}}
{{--            <div class="bounce"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<!-- Page loader End -->

@include('layouts.header')
@yield('content')
@extends('layouts.footer')
@extends('layouts.modal')
<a id="mkdf-back-to-top" href="#" class="off on text-white"><i class="icofont-rounded-up"></i></a>

<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap-dropdownhover.min.js')}}"></script>
<script src="{{asset('js/fontawesome-all.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/twitter/jquery.tweet.js')}}"></script>
<script src="{{asset('js/jflickrfeed.min.js')}}"></script>
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/jquery.appear.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/jquery.gmap.min.js')}}"></script>
<script src="{{asset('rev-slider/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script
    src="{{asset('rev-slider/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script
    src="{{asset('rev-slider/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script
    src="{{asset('rev-slider/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script
    src="{{asset('rev-slider/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script
    src="{{asset('rev-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script
    src="{{asset('rev-slider/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script
    src="{{asset('rev-slider/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script
    src="{{asset('rev-slider/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('rev-slider/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('js/jquery.cubeportfolio.min.js')}}"></script>
<script src="{{asset('js/masonary-custom.js')}}"></script>
<script src="{{asset('js/site-custom.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/wp-embed.min.js')}}"></script>
<script src="{{asset('js/dist/js_composer_front.min.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('#grid-container').cubeportfolio({
            filters: '#js-filters-masonry',
            layoutMode: 'grid',
            defaultFilter: '*',
            animationType: 'slideDelay',
            gapHorizontal: 20,
            gapVertical: 20,
            gridAdjustment: 'responsive',
            mediaQueries: [{
                width: 1500,
                cols: 5
            }, {
                width: 1100,
                cols: 4
            }, {
                width: 800,
                cols: 3
            }, {
                width: 480,
                cols: 1
            }, {
                width: 320,
                cols: 1
            }],
            caption: 'overlayBottomAlong',
            displayType: 'bottomToTop',
            displayTypeSpeed: 100,
        });
    });
</script>
<script src="{{asset('js/mask/entrance.js')}}"></script>
<script src="{{asset('js/mask/global.js')}}"></script>
@if ($message = Session::get('success') or $message = Session::get('error') or $message = Session::get('warning') or $message = Session::get('info') or $errors->any())
    <script>
        (function ($) {
            $(function () {
                $('#messageModal').modal('show');
                setTimeout(function () {
                    $('#messageModal').modal('hide')
                }, 4000);
            });
        })(jQuery);
    </script>
@endif
<script>
    window.onscroll = function (ev) {
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
            (function ($) {
                $(function () {
                    $('#page_down_modal').modal('show');
                });
            })(jQuery);
        }
    };
</script>
</body>
</html>
