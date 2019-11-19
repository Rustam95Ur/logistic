@extends('layouts.app')
@section('content')
    <div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page"
         style="background-image: url({{asset('img/breadcrumbs_bg.jpg')}});">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icofont-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Наши услуги</li>
                </ol>
            </nav>
            <h1>Наши услуги</h1>
            <div class="breadcrumbs-description">
                Our global network and full-service team of airfreight and expedited freight professionals are ready to
                help.
            </div>
        </div>
    </div>
    <main id="body-content">
        <!-- What We Offer Start -->
        <section class="wide-tb-80 bg-fixed what-we-offer">
            <div class="container pos-rel">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="mb-4 fw-7 txt-blue wow fadeInLeft">
                            Quality <span class="fw-6 txt-orange">and</span> Performance <br><span
                                class="fw-6 txt-orange">at the right price</span>
                        </h2>
                        <p class="wow fadeInLeft">Energistically utilize team driven niche markets rather than leveraged
                            platforms. Monotonectally restore tactical "outside the box" thinking and technically sound
                            deliverables. </p>
                        <p class="wow fadeInLeft">Compellingly develop fully researched process improvements through
                            innovative opportunities. Credibly productize highly efficient potentialities for vertical
                            core competencies. Quickly maintain pandemic experiences rather than low-risk high-yield
                            processes.</p>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </section>
        <!-- What We Offer End -->
        <!-- Welcome To Cargo Start -->
        <section class="bg-white wide-tb-100">
            <div class="container">
                <div class="row">
                    <!-- Heading Main -->
                    <div class="col-sm-12 wow fadeInDown">
                        <h1 class="heading-main">
                            <span>what we offer</span>
                            Our Main Services
                        </h1>
                    </div>
                    <!-- Heading Main -->
                    <!-- Icon Box 1 -->
                    @if(isset($services))
                        @foreach($services as $service)
                            <div class="col-md-4 mb-3 wow fadeInUp">
                                <a href="{{route('service', $service->id)}}">
                                    <div class="icon-box-1">
                                        <img src="{{ Voyager::image( $service->image ) }}" alt="">
                                        <div class="text text-uppercase">
                                            <i class="{{$service->icon}}"></i>
                                            {{$service->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif

                    <!-- Icon Box 1 -->
                    <!-- Icon Box 1 -->
{{--                    <div class="col-md-4 wow fadeInUp">--}}
{{--                        <a href="#">--}}
{{--                            <div class="icon-box-1">--}}
{{--                                <img src="{{asset('img/icon-box-1.jpg')}}" alt="">--}}
{{--                                <div class="text">--}}
{{--                                    <i class="icofont-vehicle-delivery-van"></i>--}}
{{--                                    GROUND DELIVERY--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    --}}
{{--                    <!-- Icon Box 1 -->--}}

{{--                    <!-- Icon Box 1 -->--}}
{{--                    <div class="col-md-4 wow fadeInUp">--}}
{{--                        <a href="#">--}}
{{--                            <div class="icon-box-1">--}}
{{--                                <img src="{{asset('img/icon-box-3.jpg')}}" alt="">--}}
{{--                                <div class="text">--}}
{{--                                    <i class="icofont-ship"></i>--}}
{{--                                    SEA DELIVERY--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                    <!-- Icon Box 1 -->
                </div>
            </div>
        </section>
        <!-- Welcome To Cargo End -->

        <!-- What Makes Us Special Start -->
        <section class="bg-sky-blue wide-tb-100">
            <div class="container pos-rel">
                <div class="row">
                    <div class="img-business-man">
                        <img src="{{asset('img/courier-man.png')}}" alt="">
                    </div>
                    <!-- Heading Main -->
                    <div class="col-sm-12 wow fadeInDown">
                        <h1 class="heading-main">
                            <span>Our Goodness</span>
                            What Makes Us Special
                        </h1>
                    </div>
                    <!-- Heading Main -->
                    <div class="col-md-6 ml-auto">
                        <div class="row">
                            <!-- Icon Box 2 -->
                            <div class="col-12 wow fadeInUp">
                                <div class="icon-box-3 mb-5 bg-sky-blue">
                                    <div class="media">
                                        <div class="service-icon mr-5">
                                            <i class="icofont-box"></i>
                                        </div>
                                        <div class="service-inner-content media-body">
                                            <h4 class="h4-md">Packaging and Storage</h4>
                                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                                cubilia Curae. Praesent pellentesque diam vitae nibh aliquam
                                                faucibus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Icon Box -->
                            <!-- Icon Box 2 -->
                            <div class="col-12 wow fadeInUp">
                                <div class="icon-box-3 mb-5 bg-sky-blue">
                                    <div class="media">
                                        <div class="service-icon mr-5">
                                            <i class="icofont-shield"></i>
                                        </div>
                                        <div class="service-inner-content media-body">
                                            <h4 class="h4-md">Safety &amp; Quality</h4>
                                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                                cubilia Curae. Praesent pellentesque diam vitae nibh aliquam
                                                faucibus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Icon Box -->
                            <!-- Icon Box 2 -->
                            <div class="col-12 wow fadeInUp">
                                <div class="icon-box-3 bg-sky-blue">
                                    <div class="media">
                                        <div class="service-icon mr-5">
                                            <i class="icofont-tree-alt"></i>
                                        </div>
                                        <div class="service-inner-content media-body">
                                            <h4 class="h4-md">Care for Environment</h4>
                                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                                cubilia Curae. Praesent pellentesque diam vitae nibh aliquam
                                                faucibus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Icon Box -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- What Makes Us Special End -->
        <!-- Tracking Your Freight Start -->
        <section class="wide-tb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 ml-lg-auto pos-rel col-md-12">
                        <!-- Heading Main -->
                        <h1 class="heading-main text-left">
                            <span>get updates</span>
                            Tracking Your Freight
                        </h1>
                        <!-- Heading Main -->
                        <!-- Tracking Form -->
                        <form class="form-inline tracking">
                            <input type="text" class="form-control mb-2 mr-sm-2 col" placeholder="Enter order number">
                            <button type="submit" class="btn btn-theme bg-orange mb-2 ml-3">Check Now <i
                                    class="icofont-rounded-right"></i></button>
                        </form>
                        <!-- Tracking Form -->
                        <!-- Forklift Image -->
                        <div class="forklift-image wow slideInLeft">
                            <img src="img/forklift_Image.png" alt="">
                        </div>
                        <!-- Forklift Image -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Tracking Your Freight End -->

        <!-- How It Works Start -->
        <section class="bg-light-gray">
            <div class="container-fluid p-0">
                <div class="row align-items-center no-gutters">
                    <!-- Icon Boxes -->
                    <div class="col-lg-4 text-center">
                        <div class="px-5 wide-tb-100">
                            <div class="service-icon mx-auto mb-5 icon-box-5">
                                <i class="icofont-glass"></i>
                            </div>
                            <h4 class="h4-md fw-7 txt-blue">SAFE &amp; SECURE</h4>
                            Nunc non mollis nulla. Sed tconsectetur elit id mi consectetur bibendum.
                        </div>
                    </div>
                    <!-- Icon Boxes -->
                    <!-- Icon Boxes -->
                    <div class="col-lg-4 text-center bg-fixed clients-bg pos-rel txt-white">
                        <div class="bg-overlay black opacity-40"></div>
                        <div class="px-5 wide-tb-100" style="position: relative; z-index: 999;">
                            <div class="service-icon mx-auto mb-5 icon-box-5">
                                <i class="icofont-delivery-time"></i>
                            </div>
                            <h4 class="h4-md fw-7">FAST DELIVERY</h4>
                            Nunc non mollis nulla. Sed tconsectetur elit id mi consectetur bibendum.
                        </div>
                    </div>
                    <!-- Icon Boxes -->

                    <!-- Icon Boxes -->
                    <div class="col-lg-4 text-center">
                        <div class="px-5 wide-tb-100">
                            <div class="service-icon mx-auto mb-5 icon-box-5">
                                <i class="icofont-live-support"></i>
                            </div>
                            <h4 class="h4-md fw-7 txt-blue">24/7 Support</h4>
                            Nunc non mollis nulla. Sed tconsectetur elit id mi consectetur bibendum.
                        </div>
                    </div>
                    <!-- Icon Boxes -->
                </div>
            </div>
        </section>
        <!-- How It Works End -->
        <!-- Client Testimonials Start -->
        <section class="wide-tb-100">
            <div class="container">
                <div class="row">
                    <!-- Heading Main -->
                    <div class="col-sm-12 wow fadeInDown">
                        <h1 class="heading-main">
                            <span>What Our</span>
                            Customers Saying
                        </h1>
                    </div>
                    <!-- Heading Main -->
                    <div class="col-sm-12">
                        <div class="owl-carousel owl-theme owl-loaded owl-drag" id="home-client-testimonials">
                            <!-- Client Testimonials Slider Item -->

                            <!-- Client Testimonials Slider Item -->

                            <!-- Client Testimonials Slider Item -->

                            <!-- Client Testimonials Slider Item -->

                            <!-- Client Testimonials Slider Item -->

                            <!-- Client Testimonials Slider Item -->

                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <div class="owl-item cloned">
                                        <div class="item">
                                            <div class="client-testimonial bg-wave">
                                                <div class="media">
                                                    <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                                                        <img src="{{asset('img/team_2.jpg')}}" alt="">

                                                    </div>
                                                    <div class="client-inner-content media-body">
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia and Consonantia, there live the blind
                                                            texts. Aliquam gravida, urna quis ornare imperdiet, </p>
                                                        <footer class="blockquote-footer"><cite title="Source Title">John
                                                                Gerry Design Hunt</cite></footer>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned">
                                        <div class="item">
                                            <div class="client-testimonial bg-wave">
                                                <div class="media">
                                                    <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                                                        <img src="{{asset('img/team_3.jpg')}}" alt="">
                                                    </div>
                                                    <div class="client-inner-content media-body">
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia and Consonantia, there live the blind
                                                            texts. Aliquam gravida, urna quis ornare imperdiet, </p>
                                                        <footer class="blockquote-footer"><cite title="Source Title">John
                                                                Gerry Design Hunt</cite></footer>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active">
                                        <div class="item">
                                            <div class="client-testimonial bg-wave">
                                                <div class="media">
                                                    <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                                                        <img src="{{asset('img/team_1.jpg')}}" alt="">
                                                    </div>
                                                    <div class="client-inner-content media-body">
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia and Consonantia, there live the blind
                                                            texts. Aliquam gravida, urna quis ornare imperdiet, </p>
                                                        <footer class="blockquote-footer"><cite title="Source Title">John
                                                                Gerry Design Hunt</cite></footer>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active">
                                        <div class="item">
                                            <div class="client-testimonial bg-wave">
                                                <div class="media">
                                                    <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                                                        <img src="{{asset('img/team_2.jpg')}}" alt="">
                                                    </div>
                                                    <div class="client-inner-content media-body">
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia and Consonantia, there live the blind
                                                            texts. Aliquam gravida, urna quis ornare imperdiet, </p>
                                                        <footer class="blockquote-footer"><cite title="Source Title">John
                                                                Gerry Design Hunt</cite></footer>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 540px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="client-testimonial bg-wave">
                                                <div class="media">
                                                    <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                                                        <img src="{{asset('img/team_3.jpg')}}" alt="">
                                                    </div>
                                                    <div class="client-inner-content media-body">
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia and Consonantia, there live the blind
                                                            texts. Aliquam gravida, urna quis ornare imperdiet, </p>
                                                        <footer class="blockquote-footer"><cite title="Source Title">John
                                                                Gerry Design Hunt</cite></footer>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned">
                                        <div class="item">
                                            <div class="client-testimonial bg-wave">
                                                <div class="media">
                                                    <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                                                        <img src="{{asset('img/team_1.jpg')}}" alt="">
                                                    </div>
                                                    <div class="client-inner-content media-body">
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia and Consonantia, there live the blind
                                                            texts. Aliquam gravida, urna quis ornare imperdiet, </p>
                                                        <footer class="blockquote-footer"><cite title="Source Title">John
                                                                Gerry Design Hunt</cite></footer>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned">
                                        <div class="item">
                                            <div class="client-testimonial bg-wave">
                                                <div class="media">
                                                    <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                                                        <img src="{{asset('img/team_2.jpg')}}" alt="">
                                                    </div>
                                                    <div class="client-inner-content media-body">
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries Vokalia and Consonantia, there live the blind
                                                            texts. Aliquam gravida, urna quis ornare imperdiet, </p>
                                                        <footer class="blockquote-footer"><cite title="Source Title">John
                                                                Gerry Design Hunt</cite></footer>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav">
                                <button type="button" role="presentation" class="owl-prev"><i
                                        class="icofont-thin-left"></i></button>
                                <button type="button" role="presentation" class="owl-next"><i
                                        class="icofont-thin-right"></i></button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Client Testimonials End -->

        <!-- Clients Start -->
        <section class="wide-tb-100 bg-sky-blue pos-rel">
            <div class="container">
                <div class="row">
                    <!-- Heading Main -->
                    <div class="col-sm-12 wow fadeInDown">
                        <h1 class="heading-main">
                            <span>SOME OF OUR</span>
                            Clients
                        </h1>
                    </div>
                    <!-- Heading Main -->
                    <div class="col-sm-12">
                        <div class="owl-carousel owl-theme owl-loaded owl-drag" id="home-clients">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <div class="owl-item cloned">
                                        <div class="item bg-white">
                                            <img src="{{asset('img/clients/client1.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned">
                                        <div class="item bg-white">
                                            <img src="{{asset('img/clients/client2.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned">
                                        <div class="item bg-white">
                                            <img src="{{asset('img/clients/client3.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned">
                                        <div class="item bg-white">
                                            <img src="{{asset('img/clients/client4.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned">
                                        <div class="item bg-white">
                                            <img src="{{asset('img/clients/client5.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned">
                                        <div class="item bg-white">
                                            <img src="{{asset('img/clients/client6.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item bg-white">
                                            <img src="{{asset('img/clients/client1.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item bg-white">
                                            <img src="{{asset('img/clients/client2.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item bg-white">
                                            <img src="{{asset('img/clients/client3.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item active">
                                        <div class="item bg-white">
                                            <img src="{{asset('img/clients/client4.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item active">
                                        <div class="item bg-white">
                                            <img src="{{asset('img/clients/client5.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item active">
                                        <div class="item bg-white">
                                            <img src="{{asset('img/clients/client6.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned active">
                                        <div class="item bg-white">
                                            <img src="{{asset('img/clients/client1.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned active">
                                        <div class="item bg-white">
                                            <img src="{{asset('img/clients/client2.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned active">
                                        <div class="item bg-white">
                                            <img src="{{asset('img/clients/client3.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned">
                                        <div class="item bg-white">
                                            <img src="{{asset('img/clients/client4.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned">
                                        <div class="item bg-white">
                                            <img src="{{asset('img/clients/client5.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned">
                                        <div class="item bg-white">
                                            <img src="{{asset('img/clients/client6.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <button type="button" role="presentation" class="owl-prev"><i
                                        class="icofont-thin-left"></i></button>
                                <button type="button" role="presentation" class="owl-next"><i
                                        class="icofont-thin-right"></i></button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Clients End -->

        <!-- Callout Start -->
        <section class="wide-tb-80 bg-scroll bg-img-6 pos-rel callout-style-1">
            <div class="bg-overlay blue opacity-60"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 mb-0">
                        <h4 class="h4-xl">Interested in working with Logzee?</h4>
                    </div>
                    <div class="col">
                        <div class="center-text">
                            We don’t just manage suppliers, we micro-manage them. We have a consultative, personalized
                            approach
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <a href="#" class="btn btn-theme bg-white bordered">Get In Touch <i
                                class="icofont-rounded-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Callout End -->
    </main>
@endsection
