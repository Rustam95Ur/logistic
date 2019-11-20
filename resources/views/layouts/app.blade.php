<!DOCTYPE html>
<html lang="en-US" class="js_active vc_desktop vc_transform fontawesome-i2svg-active fontawesome-i2svg-complete">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset('img/logo_footer.png')}}">
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
<div class="overlay overlay-hugeinc">
    <form method="get" action="" class="search-form form-inline mt-2 mt-md-0">
        <div class="form-inner">
            <div class="form-inner-div d-inline-flex align-items-center no-gutters">
                <div class="col-md-1">
                    <i class="icofont-search"></i>
                </div>
                <div class="col-10">
                    <input class="form-control w-100 p-0" type="search" placeholder="Search" aria-label="Search"
                           value="" name="s" id="search">
                </div>
                <div class="col-md-1">
                    <a href="#" class="overlay-close link-oragne"><i
                            class="icofont-close-line"></i></a>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- Request Modal -->
<div class="modal fade" id="request_popup" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered request_popup" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <!-- Contact Details Start -->
                <section class="pos-rel bg-light-gray">
                    <div class="container-fluid p-0">
                        <a href="#" class="close" data-dismiss="modal"
                           aria-label="Close">
                            <i class="icofont-close-line"></i>
                        </a>
                        <div class="d-lg-flex justify-content-end no-gutters mb-spacer-md">
                            <div class="col bg-fixed bg-img-7 request_pag_img">
                            </div>
                            <div class="col-md-7 col-12">
                                <div class="px-3 m-5">
                                    <h2 class="h2-xl mb-4 fw-6">{{trans('request.title')}}</h2>
                                    <div class="screen-reader-response"></div>
                                    <form action="#" method="post" class="wpcf7-form">
                                        @csrf
                                        <div class="rounded-field">
                                            <div class="form-row mb-4">
                                                <div class="col">
                                                    <select name="freight_type" class="custom-select">
                                                        <option disabled
                                                                selected>{{trans('request.freight_type')}}</option>
                                                        <option value="1">Type 1</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <select name="incoterms" class="custom-select">
                                                        <option disabled
                                                                selected>{{trans('request.incoterms')}}</option>
                                                        <option
                                                        <option value="1">Type 1</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row mb-4">
                                                <div class="col">
                                                    <input type="text" name="city_departure" value="" size="40"
                                                           class="form-control"
                                                           placeholder="{{trans('request.city_departure')}}">
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="delivery_city" value="" size="40"
                                                           class="form-control"
                                                           placeholder="{{trans('request.delivery_city')}}">
                                                </div>
                                            </div>
                                            <div class="form-row mb-4">
                                                <div class="col">
                                                    <input type="text" name="gross_weight" value="" size="40"
                                                           class="form-control"
                                                           placeholder="{{trans('request.gross_weight')}}">
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="dimension" value="" size="40"
                                                           class="form-control"
                                                           placeholder="{{trans('request.dimension')}}">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="center-head"><span
                                                            class="bg-blue-light txt-orange">{{trans('request.personal_detail')}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row mb-4">
                                                <div class="col user-info">
                                                    <input type="text" name="name" value="" size="40"
                                                           class="form-control" placeholder="{{trans('request.name')}}">

                                                    <input type="email" name="email" value="" size="40"
                                                           class="form-control" placeholder="Email">

                                                    <input type="text" name="phone" value="" size="40"
                                                           class="form-control"
                                                           placeholder="{{trans('request.phone')}}">
                                                </div>
                                                <div class="col">
                                                        <textarea name="message" cols="40" rows="10"
                                                                  class="form-control"
                                                                  placeholder="{{trans('request.message')}}"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col pt-3">
                                                    <input type="submit" value="{{trans('button.send')}}"
                                                           class="form-btn btn-theme bg-orange">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Contact Details End -->
            </div>
        </div>
    </div>
</div>
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
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/121022/jquery.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('#grid-container').cubeportfolio({
            // options
        });
    });
</script>

</body>
</html>
