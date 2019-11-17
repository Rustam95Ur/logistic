<!DOCTYPE html>
<html lang="en-US" class="js_active vc_desktop vc_transform fontawesome-i2svg-active fontawesome-i2svg-complete">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset('img/logo_footer.png')}}">
    <title>Logistic</title>
    <link rel="dns-prefetch" href="http://fonts.googleapis.com/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{asset('js/wp-emoji-release.min.js')}}"
            type="text/javascript" defer=""></script>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="{{asset('css/logistic.css')}}" media="all">
    <link rel="stylesheet"  href="{{asset('css/style.css')}}" media="all">
    <link rel="stylesheet"  href="{{asset('css/animate.min.css')}}" media="all">
    <link rel="stylesheet"  href="{{asset('css/base.css')}}" media="all">
    <link rel="stylesheet"  href="{{asset('css/bootstrap.min.css')}}" media="all">
    <link rel="stylesheet"  href="{{asset('css/bootstrap-dropdownhover.min.css')}}" media="all">
    <link rel="stylesheet"  href="{{asset('css/cubeportfolio.min.css')}}" media="all">
    <link rel="stylesheet"  href="{{asset('rev-slider/revolution/fonts/font-awesome/css/font-awesome.min.css')}}" media="all">
    <link rel="stylesheet"  href="{{asset('css/icofont.min.css')}}" media="all">
    <link rel="stylesheet"  href="{{asset('css/js_composer.min.css')}}" media="all">
    <link rel="stylesheet"  href="{{asset('rev-slider/revolution/css/layers.css')}}" media="all">
    <link rel="stylesheet"  href="{{asset('css/magnific-popup.css')}}" media="all">
    <link rel="stylesheet"  href="{{asset('rev-slider/revolution/css/navigation.css')}}" media="all">
    <link rel="stylesheet"  href="{{asset('css/owl.carousel.min.css')}}" media="all">
    <link rel="stylesheet"  href="{{asset('rev-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" media="all">
    <link rel="stylesheet"  href="{{asset('css/responsive.css')}}" media="all">
    <link rel="stylesheet"  href="{{asset('rev-slider/revolution/css/settings.css')}}" media="all">
    <link rel="stylesheet"  href="{{asset('css/shortcodes.css')}}" media="all">
    <link rel="stylesheet"  href="{{asset('css/slick.css')}}" media="all">
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
<div class="modal fade" id="request_popup"  aria-hidden="true">
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
                                    <h2 class="h2-xl mb-4 fw-6">Request A Quote</h2>
                                    <div role="form" class="wpcf7" id="wpcf7-f237-o1" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response"></div>
                                        <form action="#wpcf7-f237-o1"
                                              method="post"
                                              class="wpcf7-form" novalidate="novalidate">
                                            <div style="display: none;">
                                                <input type="hidden" name="_wpcf7" value="237">
                                                <input type="hidden" name="_wpcf7_version" value="5.0.2">
                                                <input type="hidden" name="_wpcf7_locale" value="en_US">
                                                <input type="hidden" name="_wpcf7_unit_tag"
                                                       value="wpcf7-f237-o1">
                                                <input type="hidden" name="_wpcf7_container_post" value="0">
                                            </div>
                                            <div class="rounded-field">
                                                <div class="form-row mb-4">
                                                    <div class="col">
                                                            <span class="wpcf7-form-control-wrap package-1"><select
                                                                    name="package-1"
                                                                    class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required custom-select"
                                                                    aria-required="true" aria-invalid="false"><option
                                                                        value="Freight Type">Freight Type</option><option
                                                                        value="Type 1">Type 1</option><option
                                                                        value="Type 2">Type 2</option><option
                                                                        value="Type 3">Type 3</option><option
                                                                        value="Type 4">Type 4</option></select></span>
                                                    </div>
                                                    <div class="col">
                                                            <span class="wpcf7-form-control-wrap package-2"><select
                                                                    name="package-2"
                                                                    class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required custom-select"
                                                                    aria-required="true" aria-invalid="false"><option
                                                                        value="Incoterms">Incoterms</option><option
                                                                        value="Type 1">Type 1</option><option
                                                                        value="Type 2">Type 2</option><option
                                                                        value="Type 3">Type 3</option><option
                                                                        value="Type 4">Type 4</option></select></span>
                                                    </div>
                                                </div>
                                                <div class="form-row mb-4">
                                                    <div class="col">
                                                            <span class="wpcf7-form-control-wrap city-departure"><input
                                                                    type="text" name="city-departure" value="" size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                    aria-required="true" aria-invalid="false"
                                                                    placeholder="City of departure"></span>
                                                    </div>
                                                    <div class="col">
                                                            <span class="wpcf7-form-control-wrap delivery-city"><input
                                                                    type="text" name="delivery-city" value="" size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                    aria-required="true" aria-invalid="false"
                                                                    placeholder="Delivery city"></span>
                                                    </div>
                                                </div>
                                                <div class="form-row mb-4">
                                                    <div class="col">
                                                            <span class="wpcf7-form-control-wrap gross-weight"><input
                                                                    type="text" name="gross-weight" value="" size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                    aria-required="true" aria-invalid="false"
                                                                    placeholder="Total gross weight (KG)"></span>
                                                    </div>
                                                    <div class="col">
                                                            <span class="wpcf7-form-control-wrap dimension"><input
                                                                    type="text" name="dimension" value="" size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                    aria-required="true" aria-invalid="false"
                                                                    placeholder="Dimension"></span>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="center-head"><span
                                                                class="bg-blue-light txt-orange">Your Personal Details</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row mb-4">
                                                    <div class="col">
                                                            <span class="wpcf7-form-control-wrap your-name"><input
                                                                    type="text" name="your-name" value="" size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                    aria-required="true" aria-invalid="false"
                                                                    placeholder="Your Name"></span><br>
                                                        <span class="wpcf7-form-control-wrap your-email"><input
                                                                type="email" name="your-email" value=""
                                                                size="40"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control"
                                                                aria-required="true" aria-invalid="false"
                                                                placeholder="Email"></span><br>
                                                        <span class="wpcf7-form-control-wrap your-number"><input
                                                                type="text" name="your-number" value=""
                                                                size="40"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                aria-required="true" aria-invalid="false"
                                                                placeholder="Phone Number"></span>
                                                    </div>
                                                    <div class="col">
                                                            <span class="wpcf7-form-control-wrap textarea-465"><textarea
                                                                    name="textarea-465" cols="40" rows="10"
                                                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control"
                                                                    aria-required="true" aria-invalid="false"
                                                                    placeholder="Message"></textarea></span>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col pt-3">
                                                        <input type="submit" value="Send Message"
                                                               class="wpcf7-form-control wpcf7-submit form-btn btn-theme bg-orange"><span
                                                            class="ajax-loader"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                                        </form>
                                    </div>
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
<a id="mkdf-back-to-top" href="#" class="off on"><i class="icofont-rounded-up"></i></a>
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

</body>
</html>
