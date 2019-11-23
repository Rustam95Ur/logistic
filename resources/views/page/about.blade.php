@extends('layouts.app')
@section('content')
    <div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page"
         style="background-image: url({{asset('img/breadcrumbs_bg.jpg')}});">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icofont-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{trans('header.about')}}</li>
                </ol>
            </nav>
            <h1>{{trans('header.about')}}</h1>
            <div class="breadcrumbs-description">
                Активная и развивающаяся компания на рынке транспортно-экспедиторских услуг, которая предлагает полный спектр экспедиторских услуг
            </div>
        </div>
    </div>
    <section class="wide-tb-80">
        <div class="container pos-rel">
            <div class="row align-items-center">
                <div class="col-md-6 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
                    <h2 class="mb-4 fw-7 txt-blue">
                        {{trans('about.about')}} <span class="fw-6 txt-orange"></span>
                    </h2>
                    <p>Мы активная и развивающаяся компания на рынке транспортно-экспедиторских услуг, которая предлагает полный спектр экспедиторских услуг</p>
                    <p>Наша компания предоставляет транспортные услуги по перевозки грузов по г. Алматы, Казахстану и Китай.


                        Мы поможем Вам выбрать подходящий автотранспорт под любые габариты Вашего груза</p>
                </div>
                <div class="col-md-6 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s"
                     style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
                    <img src="{{asset('img/map-bg-orange.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="pos-rel bg-sky-blue">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12 p-0">
                    <img src="{{asset('img/why-choose-us.jpg')}}" class="w-100" alt="">
                </div>
                <div class="col-lg-6 col-12">
                    <div class="p-5 about-whoose">
                        <h1 class="heading-main text-left mb-4">
                            <span>{{trans('about.choose')}}</span>
                        </h1>
                        <ul class="list-unstyled icons-listing theme-orange w-half mb-0">
                            <li class="wow fadeInUp">
                                <i class="icofont-check"></i>100% гарантия за сохранность вашего груза.
                            </li>
                            <li class="wow fadeInUp">
                                <i class="icofont-check"></i>
                                Экономия вашего время
                            </li>
                            <li class="wow fadeInUp">
                                <i class="icofont-check"></i>
                                Для постоянныж клиентов действуют скидки
                            </li>
                            <li class="wow fadeInUp">
                                <i class="icofont-check"></i>Доставляем груз бережно в срок
                            </li>
                            <li class="wow fadeInUp">
                                <i class="icofont-check"></i>Обеспечиваем хранение доверенных нам грузов
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wide-tb-100 pb-0 team-section-bottom pos-rel">
        <div class="container">
            <div class="col-sm-12">
                <h1 class="heading-main">
                    <span>Region Логистик</span>
                    {{trans('about.our_team')}}
                </h1>
            </div>
            <div class="row pb-4">
                <div class="col-sm-12 col-md-4 wow fadeInUp">
                    <div class="team-section-two">
                        <img src="{{asset('img/team-1.jpg')}}" alt=""
                             class="rounded">
                        <h4 class="h4-md txt-orange">John Morise</h4>
                        <h5 class="h5-md txt-ligt-gray">Founder</h5>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s"
                     style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="team-section-two">
                        <img src="{{asset('img/team-2.jpg')}}" alt=""
                             class="rounded">
                        <h4 class="h4-md txt-orange">Kevin Mash</h4>
                        <h5 class="h5-md txt-ligt-gray">Head Operational</h5>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 wow fadeInUp" >
                    <div class="team-section-two">
                        <img src="{{asset('img/team-3.jpg')}}" alt=""
                             class="rounded">
                        <h4 class="h4-md txt-orange">Mike Douglos</h4>
                        <h5 class="h5-md txt-ligt-gray">Team Lead Support</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wide-tb-100 bg-fixed clients-bg pos-rel">
        <div class="bg-overlay blue opacity-80"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wow fadeInDown">
                    <h1 class="heading-main">
                        {{--<span>SOME OF OUR</span>--}}
                        {{trans('about.clients')}}
                    </h1>
                </div>
                <div class="col-sm-12 wow fadeInUp">
                    <div class="owl-carousel owl-theme owl-loaded owl-drag" id="home-clients">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <div class="owl-item cloned">
                                    <div class="item">
                                        <img
                                            src="{{asset('img/client1.png')}}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned">
                                    <div class="item">
                                        <img
                                            src="{{asset('img/client2.png')}}"
                                            alt="">

                                    </div>
                                </div>
                                <div class="owl-item cloned">
                                    <div class="item">
                                        <img
                                            src="{{asset('img/client3.png')}}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned">
                                    <div class="item">
                                        <img
                                            src="{{asset('img/client4.png')}}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned">
                                    <div class="item">
                                        <img
                                            src="{{asset('img/client5.png')}}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned">
                                    <div class="item">
                                        <img
                                            src="{{asset('img/client6.png')}}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned">
                                    <div class="item">
                                        <img
                                            src="{{asset('img/client1.png')}}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned">
                                    <div class="item">
                                        <img
                                           src="{{asset('img/client2.png')}}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned">
                                    <div class="item">
                                        <img
                                           src="{{asset('img/client3.png')}}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned">
                                    <div class="item">
                                        <img
                                           src="{{asset('img/client4.png')}}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned">
                                    <div class="item">
                                        <img
                                           src="{{asset('img/client5.png')}}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned">
                                    <div class="item">
                                        <img
                                           src="{{asset('img/client6.png')}}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned">
                                    <div class="item">

                                        <img
                                            src="{{asset('img/')}}client1.png"
                                            alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned">
                                    <div class="item">

                                        <img
                                           src="{{asset('img/client2.png')}}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned">
                                    <div class="item">
                                        <img
                                           src="{{asset('img/client3.png')}}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned">
                                    <div class="item">
                                        <img
                                           src="{{asset('img/client4.png')}}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned">
                                    <div class="item">
                                        <img
                                           src="{{asset('img/client5.png')}}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned">
                                    <div class="item">
                                        <img
                                           src="{{asset('img/client6.png')}}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav disabled">
                            <button type="button" role="presentation" class="owl-prev"><i class="icofont-thin-left"></i>
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
    <section class="wide-tb-100 faqs">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="heading-main">
                        <span>{{trans('about.frequently_asked')}}</span>
                        {{trans('about.questions')}}
                    </h1>
                </div>
                <div class="col-sm-12 col-md-6 wow fadeInUp" >
                    <h4 class="h4-md mb-3">Lobortis sit magna ornare magna egestas?</h4>
                    <p>Etiam sit amet mauris suscipit sit amet in odio. Integer congue leo metus. Vitae arcu mollis
                        blandit ultrice ligula egestas magna suscipit lectus magna suscipit luctus undo blandit vitae
                        purus laoreet</p>

                </div>
                <div class="col-sm-12 col-md-6 wow fadeInUp">
                    <h4 class="h4-md mb-3">Aliquam dapibus pretium ornare?</h4>
                    <p>Feugiat eros ligula massa lipsum primis in orci luctus et ultrices posuere cubilia curae congue
                        lorem. ante ipsum primis in faucibus bibendum sit amet in odio</p>
                </div>
                <div class="col-sm-12 col-md-6 wow fadeInUp">
                    <h4 class="h4-md mb-3">Placeat axime facere omnis volute?</h4>
                    <p>Etiam sit amet mauris suscipit sit amet in odio. Integer congue leo metus. Vitae arcu mollis
                        blandit ultrice ligula egestas magna suscipit lectus magna suscipit luctus undo blandit vitae
                        purus laoreet</p>
                </div>
                <div class="col-sm-12 col-md-6 wow fadeInUp">
                    <h4 class="h4-md mb-3">Dapibus lobortis pretium ornare?</h4>
                    <p>Feugiat eros ligula massa lipsum primis in orci luctus et ultrices posuere cubilia curae congue
                        lorem. ante ipsum primis in faucibus bibendum sit amet in odio</p>
                </div>
                <div class="col-sm-12 col-md-6 wow fadeInUp">
                    <h4 class="h4-md mb-3">An interdum lobortis pretium ornare?</h4>
                    <p>Etiam sit amet mauris suscipit sit amet in odio. Integer congue leo metus. Vitae arcu mollis
                        blandit ultrice ligula egestas magna suscipit lectus magna suscipit luctus undo blandit vitae
                        purus laoreet</p>
                </div>
                <div class="col-sm-12 col-md-6 wow fadeInUp" >
                    <h4 class="h4-md mb-3">Interdum lobortis pretium ornare?</h4>
                    <p>Feugiat eros ligula massa lipsum primis in orci luctus et ultrices posuere cubilia curae congue
                        lorem. ante ipsum primis in faucibus bibendum sit amet in odio</p>
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
@endsection

