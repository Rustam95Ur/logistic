@extends('layouts.app')
@section('content')
    <div class="slider bg-navy-blue">
        <div class="forcefullwidth_wrapper_tp_banner">
            <div class="Header">
                <div class="Header-background"></div>
                <div class="Header-content">
                    <div class="Header-hero">
                        {{--<h1>The best app you've <br/> ever seen</h1>--}}
                        <p>Мы активная и развивающаяся компания на рынке транспортно-экспедиторских услуг, которая предлагает полный спектр экспедиторских услуг</p>
                        <button class="btn-theme bg-white light" role="button" data-toggle="modal" data-target="#request_popup">Оставить заявку</button>
                    </div>
                    <div class="Header-visuals">
                        <img src="{{asset('img/logo-region.png')}}" >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <section class="bg-white wide-tb-100">
            <div class="container pos-rel">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <p><img src="{{asset('img/logo-region.png')}}" alt="" class="mb-5" width="200px"></p>
                        <p>Мы активная и развивающаяся компания на рынке транспортно-экспедиторских услуг, которая предлагает полный спектр экспедиторских услуг</p>
                        {{--<div class="img-icon mt-4 d-flex align-items-center">--}}
                            {{--<img src="{{asset('img/team-1.jpg')}}" alt="image">--}}
                            {{--<h3> John Morise--}}
                                {{--<span>Founder &amp; CEO</span>--}}
                            {{--</h3>--}}
                        {{--</div>--}}
                    </div>
                    <!-- Spacer For Medium -->
                    <div class="w-100 spacer-50 d-none d-md-block d-lg-none d-sm-none"></div>
                    <!-- Spacer For Medium -->
                    <div class="col-md-12 col-lg-6">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="icon-box-6">
                                    <i class="icofont-box"></i>
                                    <h3 class="h3-xs txt-blue">100% гарантия за сохранность вашего груза</h3>
                                    <p>Мы гарантируем 100% сохранность вашего груза</p>
                                    <a href="#" class="btn-arrow bg-navy-blue">
                                        <i class="icofont-swoosh-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="icon-box-6">
                                    <i class="icofont-safety"></i>
                                    <h3 class="h3-xs txt-blue">Скидки</h3>
                                    <p>Для постоянныж клиентов действуют скидки </p>
                                    <a href="#" class="btn-arrow bg-navy-blue">
                                        <i class="icofont-swoosh-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="w-100 spacer-50 d-none d-lg-none d-md-block d-lg-block d-sm-none"></div>
                            <div class="col-12 col-md-6">
                                <div class="icon-box-6">
                                    <i class="icofont-tree-alt"></i>
                                    <h3 class="h3-xs txt-blue">Эко-доставка</h3>
                                    <p>Эко-доставка</p>
                                    <a href="#" class="btn-arrow bg-navy-blue">
                                        <i class="icofont-swoosh-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="icon-box-6">
                                    <i class="icofont-delivery-time"></i>
                                    <h3 class="h3-xs txt-blue">Доставляем груз бережно в срок </h3>
                                    <p>Экономия вашего время </p>
                                    <a href="#" class="btn-arrow bg-navy-blue">
                                        <i class="icofont-swoosh-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-light-gray wide-tb-100 bg-wave">
            <div class="container pos-rel">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('img/about_img_2.jpg')}}" class="bordered-img" alt="">
                    </div>
                    <div class="col-md-6 ml-auto why-choose wow fadeInRight">
                        <!-- Heading Main -->
                        <h1 class="heading-main text-left wow fadeInDown">
                            <span>{{trans('about.about')}}</span>
                            {{trans('about.welcome')}}
                        </h1>
                        <!-- Heading Main -->
                        <p>Мы активная и развивающаяся компания на рынке транспортно-экспедиторских услуг, которая предлагает полный спектр экспедиторских услуг</p>
                        {{--<p>Compellingly develop fully researched process improvements through innovative opportunities.--}}
                            {{--Credibly productize highly efficient potentialities for vertical core competencies. Quickly--}}
                            {{--maintain pandemic experiences rather than low-risk high-yield processes.</p>--}}
                        <div class="skillbar-wrap">
                            <div class="clearfix">
                                Логстика
                            </div>
                            <div class="skillbar" data-percent="75%">
                                <div class="skillbar-percent">75%</div>
                                <div class="skillbar-bar"></div>
                            </div>
                        </div>
                        <div class="skillbar-wrap">
                            <div class="clearfix">
                                Грузовые авто
                            </div>
                            <div class="skillbar" data-percent="50%">
                                <div class="skillbar-percent">50%</div>
                                <div class="skillbar-bar"></div>
                            </div>
                        </div>
                        <div class="skillbar-wrap">
                            <div class="clearfix">
                                Курьеры
                            </div>
                            <div class="skillbar" data-percent="95%">
                                <div class="skillbar-percent">95%</div>
                                <div class="skillbar-bar"></div>
                            </div>
                        </div>
                        <div class="skillbar-wrap">
                            <div class="clearfix">
                                Воздушный транспорт
                            </div>
                            <div class="skillbar" data-percent="60%">
                                <div class="skillbar-percent">60%</div>
                                <div class="skillbar-bar"></div>
                            </div>
                        </div>
                        <div class="skillbar-wrap">
                            <div class="clearfix">
                                Поддержка
                            </div>
                            <div class="skillbar" data-percent="95%">
                                <div class="skillbar-percent">95%</div>
                                <div class="skillbar-bar"></div>
                            </div>
                        </div>
                        <a href="{{route('about')}}" class="btn-theme bg-orange">Узнать подробнее ></a>
                    </div>
                </div>

            </div>
        </section>
        <section class="bg-white wide-tb-100">
            <div class="container pos-rel">
                <div class="row">
                    <div class="img-business-man">
                        <img src="{{asset('img/courier-man.png')}}" alt="">
                    </div>
                    <div class="col-sm-12 wow fadeInDown">
                        <h1 class="heading-main">
                            {{--<span>Our Goodness</span>--}}
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
        <section class="wide-tb-100 bg-scroll counter-bg pos-rel">
            <div class="bg-overlay blue opacity-50"></div>
            <div class="container">
                <div class="row">
                    <div class="col counter-style-1 col-6 col-lg-3 col-sm-6 wow fadeInLeft">
                        <p><i class="icofont-google-map"></i></p>
                        <span class="counter">15</span>
                        <div>
                            Местонахождение
                        </div>
                    </div>
                    <div class="col counter-style-1 col-6 col-lg-3 col-sm-6 wow fadeInLeft">
                        <p><i class="icofont-globe"></i></p>
                        <span class="counter">110</span>
                        <div>
                            Клиентов
                        </div>
                    </div>
                    <div class="col counter-style-1 col-6 col-lg-3 col-sm-6 wow fadeInRight">
                        <p><i class="icofont-vehicle-delivery-van"></i></p>
                        <span class="counter">240</span>
                        <div>
                            Транспортов
                        </div>
                    </div>
                    <div class="col counter-style-1 col-6 col-lg-3 col-sm-6 wow fadeInRight">
                        <p><i class="icofont-umbrella-alt"></i></p>
                        <span class="counter">2340</span>
                        <div>
                            Тонн перевезены
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white wide-tb-100">
            <div class="container pos-rel">
                <div class="row">
                    <!-- Heading Main -->
                    <div class="col-sm-12 wow fadeInDown">
                        <h1 class="heading-main">
                            {{--<span>Our Gallery</span>--}}
                            {{trans('about.gallery')}}
                        </h1>
                    </div>
                    <!-- Heading Main -->
                </div>
                <div class="cbp cbp-caption-active cbp-caption-zoom cbp-ready"
                     style="height: 786px;">
                    <div class="cbp-wrapper-outer" id="grid-container">
                        <div class="cbp-wrapper">
                            <div class="cbp-item lifestyle outstanding travel"
                                 style="width: 277px; left: 0px; top: 0px;">
                                <div class="cbp-item-wrapper">
                                    <div class="gallery-link">
                                        <a href="?project=project-1" class="txt-white"><i
                                                class="icofont-external-link"></i></a>

                                    </div>
                                    <a href="{{asset('img/img-1.jpg')}}"
                                       class="cbp-caption cbp-lightbox" data-title="Lorem ipsum">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="{{asset('img/img-1.jpg')}}" alt="">
                                        </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <i class="icofont-search icofont-2x txt-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="cbp-item lifestyle outstanding travel"
                                 style="width: 277px; left: 277px; top: 0px;">
                                <div class="cbp-item-wrapper">
                                    <div class="gallery-link">
                                        <a href="?project=project-2" class="txt-white"><i
                                                class="icofont-external-link"></i></a>
                                    </div>
                                    <a href="{{asset('img/img-2.jpg')}}"
                                       class="cbp-caption cbp-lightbox" data-title="Lorem ipsum">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="{{asset('img/img-2.jpg')}}" alt="">
                                        </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <i class="icofont-search icofont-2x txt-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="cbp-item lifestyle outstanding travel"
                                 style="width: 554px; left: 554px; top: 0px;">
                                <div class="cbp-item-wrapper">
                                    <div class="gallery-link">
                                        <a href="?project=project-3" class="txt-white"><i
                                                class="icofont-external-link"></i></a>
                                    </div>
                                    <a href="{{asset('img/img-3.jpg')}}"
                                       class="cbp-caption cbp-lightbox" data-title="Lorem ipsum">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="{{asset('img/img-3.jpg')}}" alt="">
                                        </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <i class="icofont-search icofont-2x txt-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="cbp-item lifestyle outstanding travel"
                                 style="width: 554px; height: 524px; left: 0px; top: 262px;">
                                <div class="cbp-item-wrapper">
                                    <div class="gallery-link">
                                        <a href="?project=project-4" class="txt-white"><i
                                                class="icofont-external-link"></i></a>
                                    </div>
                                    <a href="{{asset('img/img-7.jpg')}}"
                                       class="cbp-caption cbp-lightbox" data-title="Lorem ipsum">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="{{asset('img/img-7.jpg')}}" alt="">
                                        </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <i class="icofont-search icofont-2x txt-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="cbp-item lifestyle outstanding travel"
                                 style="width: 277px; left: 554px; top: 262px;">
                                <div class="cbp-item-wrapper">
                                    <div class="gallery-link">
                                        <a href="?project=project-5" class="txt-white"><i
                                                class="icofont-external-link"></i></a>
                                    </div>
                                    <a href="{{asset('img/img-8.jpg')}}"
                                       class="cbp-caption cbp-lightbox" data-title="Lorem ipsum">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="{{asset('img/img-8.jpg')}}" alt="">
                                        </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <i class="icofont-search icofont-2x txt-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="cbp-item lifestyle outstanding travel"
                                 style="width: 277px; left: 831px; top: 262px;">
                                <div class="cbp-item-wrapper">
                                    <div class="gallery-link">
                                        <a href="?project=project-6" class="txt-white"><i
                                                class="icofont-external-link"></i></a>
                                    </div>
                                    <a href="{{asset('img/img-9.jpg')}}"
                                       class="cbp-caption cbp-lightbox" data-title="Lorem ipsum">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="{{asset('img/img-9.jpg')}}" alt="">
                                        </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <i class="icofont-search icofont-2x txt-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="cbp-item lifestyle outstanding travel"
                                 style="width: 277px; left: 554px; top: 524px;">
                                <div class="cbp-item-wrapper">
                                    <div class="gallery-link">
                                        <a href="?project=project-7" class="txt-white"><i
                                                class="icofont-external-link"></i></a>
                                    </div>
                                    <a href="{{asset('img/img-10.jpg')}}"
                                       class="cbp-caption cbp-lightbox" data-title="Lorem ipsum">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="{{asset('img/img-10.jpg')}}" alt="">
                                        </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <i class="icofont-search icofont-2x txt-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="cbp-item lifestyle outstanding travel"
                                 style="width: 277px; left: 831px; top: 524px;">
                                <div class="cbp-item-wrapper">
                                    <div class="gallery-link">
                                        <a href="?project=project-8" class="txt-white"><i
                                                class="icofont-external-link"></i></a>
                                    </div>
                                    <a href="{{asset('img/img-11.jpg')}}"
                                       class="cbp-caption cbp-lightbox" data-title="Lorem ipsum">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="{{asset('img/img-11.jpg')}}" alt="">

                                        </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <i class="icofont-search icofont-2x txt-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-sky-blue wide-tb-100 pb-5 why-choose">
            <div class="container pos-rel">
                <div class="contact-map-bg">
                    <img src="{{asset('img/map-bg.png')}}" alt="">
                </div>
                <div class="row piecharts" id="pie-charts">
                    <div class="col-sm-12 wow fadeInDown">
                        <h1 class="heading-main">
                            <span>Нужно больше информации?</span>
                            Посмотрите наш видео-ролик
                        </h1>
                    </div>
                    <div class="col-md-6 offset-md-3">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                  <span class="chart easyPieChart" data-percent="90">
                                    <span class="percent">90</span>
                                      <canvas width="100" height="100"></canvas>
                                  </span>
                                <div class="skill-name">Road Transport</div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                  <span class="chart easyPieChart" data-percent="90">
                                    <span class="percent">90</span>
                                  <canvas width="100" height="100"></canvas>
                                  </span>
                                <div class="skill-name">Logistics</div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                  <span class="chart easyPieChart" data-percent="90">
                                    <span class="percent">95</span>
                                  <canvas width="100" height="100"></canvas></span>
                                <div class="skill-name">Truck Rental</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wide-tb-60 p-0 bg-sky-blue">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 wow pulse animated">
                        <div class="bg-fixed pos-rel video-popup">
                            <div class="bg-overlay black opacity-50"></div>
                            <div class="zindex-fixed pos-rel">
                                <a href="#" class="play-video">
                                    <i class="icofont-play icofont-4x"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wide-tb-100 mb-spacer-md">
            <div class="container wide-tb-100 pb-0">
                <div class="row">
                    <div class="col-sm-12 wow fadeInDown">
                        <h1 class="heading-main">
                            {{--<span>What Our</span>--}}
                            Что говорят наши клиенты
                        </h1>
                    </div>
                    <div class="col-sm-12">
                        <div class="owl-carousel owl-theme owl-loaded owl-drag" id="home-client-testimonials">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <div class="owl-item cloned">
                                        <div class="item">
                                            <div class="client-testimonial bg-wave">
                                                <div class="media">
                                                    <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                                                        <img src="{{asset('img/team-2.jpg')}}"
                                                             alt="">
                                                    </div>
                                                    <div class="client-inner-content media-body">
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries
                                                            Vokalia and Consonantia, there live the blind texts. Aliquam
                                                            gravida, urna quis ornare imperdiet,</p>
                                                        <footer class="blockquote-footer"><cite title="Source Title">John
                                                                Gerry Design Hunt</cite></footer>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 540px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="client-testimonial bg-wave">
                                                <div class="media">
                                                    <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                                                        <img src="{{asset('img/team-3.jpg')}}"
                                                             alt="">
                                                    </div>
                                                    <div class="client-inner-content media-body">
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries
                                                            Vokalia and Consonantia, there live the blind texts. Aliquam
                                                            gravida, urna quis ornare imperdiet,</p>
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
                                                        <img src="{{asset('img/team-1.jpg')}}"
                                                             alt="">
                                                    </div>
                                                    <div class="client-inner-content media-body">
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries
                                                            Vokalia and Consonantia, there live the blind texts. Aliquam
                                                            gravida, urna quis ornare imperdiet,</p>

                                                        <footer class="blockquote-footer"><cite title="Source Title">John
                                                                Gerry Design Hunt</cite></footer>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 540px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="client-testimonial bg-wave">
                                                <div class="media">
                                                    <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                                                        <img src="{{asset('img/team-2.jpg')}}"
                                                             alt="">
                                                    </div>
                                                    <div class="client-inner-content media-body">
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries
                                                            Vokalia and Consonantia, there live the blind texts. Aliquam
                                                            gravida, urna quis ornare imperdiet,</p>
                                                        <footer class="blockquote-footer"><cite title="Source Title">John
                                                                Gerry Design Hunt</cite></footer>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item">
                                            <div class="client-testimonial bg-wave">
                                                <div class="media">
                                                    <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                                                        <img src="{{asset('img/team-3.jpg')}}"
                                                             alt="">

                                                    </div>
                                                    <div class="client-inner-content media-body">
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries
                                                            Vokalia and Consonantia, there live the blind texts. Aliquam
                                                            gravida, urna quis ornare imperdiet,</p>
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
                                                        <img src="{{asset('img/team-1.jpg')}}"
                                                             alt="">
                                                    </div>
                                                    <div class="client-inner-content media-body">
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries
                                                            Vokalia and Consonantia, there live the blind texts. Aliquam
                                                            gravida, urna quis ornare imperdiet,</p>
                                                        <footer class="blockquote-footer"><cite title="Source Title">John
                                                                Gerry Design Hunt</cite></footer>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 540px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="client-testimonial bg-wave">
                                                <div class="media">
                                                    <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                                                        <img src="{{asset('img/team-2.jpg')}}"
                                                             alt="">
                                                    </div>
                                                    <div class="client-inner-content media-body">
                                                        <p>Far far away, behind the word mountains, far from the
                                                            countries
                                                            Vokalia and Consonantia, there live the blind texts. Aliquam
                                                            gravida, urna quis ornare imperdiet,</p>
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
                                        class="icofont-thin-left"></i>
                                </button>
                                <button type="button" role="presentation" class="owl-next"><i
                                        class="icofont-thin-right"></i></button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                        <a href="#" class="btn btn-theme bg-white bordered" role="button" data-toggle="modal" data-target="#request_popup">Интересно <i
                                    class="icofont-rounded-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <section class="wide-tb-100 bg-fixed clients-bg pos-rel">
            <div class="bg-overlay blue opacity-80"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeInDown">
                        <h1 class="heading-main">
                            Наши клиенты
                        </h1>
                    </div>
                    <div class="col-sm-12 wow fadeInUp">
                        <div class="owl-carousel owl-theme owl-loaded owl-drag" id="home-clients">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <div class="owl-item cloned">
                                        <div class="item">
                                            <img src="{{asset('img/client1.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned">
                                        <div class="item">
                                            <img src="{{asset('img/client2.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned">
                                        <div class="item">
                                            <img src="{{asset('img/client3.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned">
                                        <div class="item">
                                            <img src="{{asset('img/client4.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned">
                                        <div class="item">
                                            <img src="{{asset('img/client5.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned">
                                        <div class="item">
                                            <img src="{{asset('img/client6.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item">
                                            <img src="{{asset('img/client1.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item">
                                            <img src="{{asset('img/client2.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item" >
                                        <div class="item">
                                            <img src="{{asset('img/client3.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item active">
                                        <div class="item">
                                            <img src="{{asset('img/client4.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item active">
                                        <div class="item">
                                            <img src="{{asset('img/client5.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item active">
                                        <div class="item">
                                            <img src="{{asset('img/client6.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned active">
                                        <div class="item">
                                            <img src="{{asset('img/client1.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned active" style="width: 160px; margin-right: 30px;">
                                        <div class="item">
                                            <img src="{{asset('img/client2.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned active" style="width: 160px; margin-right: 30px;">
                                        <div class="item">
                                            <img src="{{asset('img/client3.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 160px; margin-right: 30px;">
                                        <div class="item">
                                            <img src="{{asset('img/client4.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 160px; margin-right: 30px;">
                                        <div class="item">
                                            <img src="{{asset('img/client5.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 160px; margin-right: 30px;">
                                        <div class="item">
                                            <img src="{{asset('img/client6.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <button type="button" role="presentation" class="owl-prev"><i
                                        class="icofont-thin-left"></i>
                                </button>
                                <button type="button" role="presentation" class="owl-next"><i
                                        class="icofont-thin-right"></i></button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="map-bg">
            <div class="contact-details row d-flex">
                <div class="col">
                    <h4>Казахстан, Алматы. мкр Улжан 1, Жана жол 25</h4>
                    <p><i class="icofont-phone"></i> +7 705 663 06 63 - Аяулым</p>
                    <p><i class="icofont-phone"></i> +7 707 766 78 34 - Жаркынай</p>
                    <div class="text-nowrap"><i class="icofont-email"></i> <a href="#">region-lg@mail.ru</a>
                    </div>
                </div>
            </div>
            <div id="map-holder" class="pos-rel">
            </div>
        </section>
        <!-- Main Footer End -->
        <div class="video-box">
            <!-- close-video -->
            <div class="close-video">
               X
            </div><!-- /close-video -->
        </div><!-- /video-box -->

        <!-- Request Modal -->
        <!-- Back To Top Start -->
    </main>
    <script>
        function initMap() {
            // The location of Uluru
            var uluru = {lat: -25.344, lng: 131.036};
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map-holder'), {zoom: 4, center: uluru});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: uluru, map: map});
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>
@endsection
