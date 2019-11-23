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
                Наша компания предоставляет транспортные услуги по перевозки грузов по г. Алматы, Казахстану и Китаю.
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
                            Качество <span class="fw-6 txt-orange">и</span> Время доставки <br><span
                                class="fw-6 txt-orange">по выгодным ценам</span>
                        </h2>
                        <p class="wow fadeInLeft">Наша компания предоставляет транспортные услуги по перевозки грузов по
                            г. Алматы, Казахстану и Китаю. </p>
                        <p class="wow fadeInLeft">Мы поможем Вам выбрать подходящий автотранспорт под любые габариты
                            Вашего груза</p>
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
                            <span>{{trans('service.offer')}}</span>
                            {{trans('service.services')}}
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
                </div>
            </div>
        </section>
        <!-- Welcome To Cargo End -->

        <!-- What Makes Us Special Start -->
        <section class="bg-white wide-tb-100">
            <div class="container pos-rel">
                <div class="row">
                    <div class="img-business-man">
                        <img src="{{asset('img/courier-man.png')}}" alt="">
                    </div>
                    <div class="col-sm-12 wow fadeInDown">
                        <h1 class="heading-main">
                            {{trans('about.special')}}
                        </h1>
                    </div>
                    <div class="col-md-6 ml-auto">
                        <div class="row">
                            <div class="col-12 wow fadeInUp">
                                <div class="icon-box-3 mb-5 bg-sky-blue">
                                    <div class="media">
                                        <div class="service-icon mr-5">
                                            <i class="icofont-box bg-white"></i>
                                        </div>
                                        <div class="service-inner-content media-body">
                                            <h4 class="h4-md">100% гарантия за сохранность вашего груза</h4>
                                            <p>Мы гарантируем 100% сохранность вашего груза</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow fadeInUp">
                                <div class="icon-box-3 mb-5 bg-sky-blue">
                                    <div class="media">
                                        <div class="service-icon mr-5">
                                            <i class="icofont-shield bg-white"></i>
                                        </div>
                                        <div class="service-inner-content media-body">
                                            <h4 class="h4-md">Хранение грузов</h4>
                                            <p>Обеспечиваем хранение доверенных нам грузов</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow fadeInUp">
                                <div class="icon-box-3 mb-5 bg-sky-blue">
                                    <div class="media">
                                        <div class="service-icon mr-5">
                                            <i class="icofont-tree-alt bg-white"></i>
                                        </div>
                                        <div class="service-inner-content media-body">
                                            <h4 class="h4-md">Доставляем груз бережно и в срок</h4>
                                            <p>Гарантируем доставку вашего груза бережно и в срок</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- What Makes Us Special End -->


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
                            <h4 class="h4-md fw-7 txt-blue">{{trans('service.safe')}}</h4>
                            100% гарантия за сохранность вашего груза.
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
                            <h4 class="h4-md fw-7">{{trans('service.fast_delivery')}}</h4>
                            Экономия вашего время. Доставляем груз бережно и в срок
                        </div>
                    </div>
                    <!-- Icon Boxes -->

                    <!-- Icon Boxes -->
                    <div class="col-lg-4 text-center">
                        <div class="px-5 wide-tb-100">
                            <div class="service-icon mx-auto mb-5 icon-box-5">
                                <i class="icofont-live-support"></i>
                            </div>
                            <h4 class="h4-md fw-7 txt-blue">{{trans('service.support')}}</h4>
                            Предоставляем поддержку нашим клиентам 24/7
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
                            Что говорят наши клиенты
                        </h1>
                    </div>
                    <!-- Heading Main -->
                    <div class="col-sm-12">
                        <div class="owl-carousel owl-theme owl-loaded owl-drag" id="home-client-testimonials">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    @foreach($comments as $comment)
                                        <div class="owl-item">
                                            <div class="item">
                                                <div class="client-testimonial bg-wave">
                                                    <div class="media">
                                                        <div
                                                            class="client-testimonial-icon rounded-circle bg-navy-blue">
                                                            <img src="{{Voyager::image($comment->image)}}" alt="">

                                                        </div>
                                                        <div class="client-inner-content media-body">
                                                            <p>{{$comment->getTranslatedAttribute('text', $locale, 'fallbackLocale')}}</p>
                                                            <footer class="blockquote-footer">
                                                                <cite>{{$comment->getTranslatedAttribute('full_name', $locale, 'fallbackLocale')}}</cite>
                                                            </footer>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
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
                            {{trans('service.clients')}}
                        </h1>
                    </div>
                    <!-- Heading Main -->
                    <div class="col-sm-12">
                        <div class="owl-carousel owl-theme owl-loaded owl-drag" id="home-clients">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                  @foreach($clients as $client)
                                    <div class="owl-item cloned">
                                        <div class="item bg-white">
                                            <img src="{{Voyager::image($client->image)}}" alt="{{$client->title}}">
                                        </div>
                                    </div>
                                      @endforeach
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
                    <div class="col-lg-4 col-md-12 mb-0 wow slideInUp">
                        <h4 class="h4-xl">Заинтеремованы работать с Region Логистик?</h4>
                    </div>
                    <div class="col wow slideInUp">
                        <div class="center-text">
                            Мы предоставляем индивидуальный подход для каждого клиента! <br>
                            Оставте заявку и мы вам перезвоним
                        </div>
                    </div>
                    <div class="col-sm-auto wow slideInUp">
                        <a href="#" class="btn btn-theme bg-white bordered" role="button" data-toggle="modal"
                           data-target="#request_popup">Интересно <i
                                class="icofont-rounded-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Callout End -->
    </main>
@endsection
