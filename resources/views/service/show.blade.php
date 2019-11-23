@extends('layouts.app')
@section('content')
    <div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page"
         style="background-image: url({{ Voyager::image( $service->banner ) }});">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icofont-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{route('services')}}">Наши услуги</a></li>
                    <li class="breadcrumb-item active"
                        aria-current="page"> {{$service->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</li>
                </ol>
            </nav>
            <h1> {{$service->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</h1>
        </div>
    </div>

    <main id="body-content">
        <!-- What We Offer Start -->
        <section class="wide-tb-80">
            <div class="container pos-rel">
                <div class="row align-items-start">
                    <div class="col-md-12 col-lg-8">
                        <div class="row">
                            <div class="col-md-12 mb-5">
                                <div class="text-left">
                                    <img src="{{ Voyager::image( $service->image ) }}" alt="" class="rounded mb-4">
                                    {!! $service->getTranslatedAttribute('body', $locale, 'fallbackLocale') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <!-- Add Some Left Space -->
                        <aside class="sidebar-spacer row">
                            <!-- Sidebar Primary Start -->
                            <div class="sidebar-primary col-lg-12 col-md-6">
                                <!-- Sidebar Support Widget Start -->
                                <div class="widget-wrap text-center bg-sky-blue rounded py-5">
                                    <div class="mb-2"><i class="icofont-headphone-alt icofont-4x"></i></div>
                                    <h3 class="h3-md fw-5 txt-orange mb-4">{{trans('service.need-help')}}</h3>
                                    <p>{{trans('service.call')}}: </p>
                                    <p><a href="tel:+77056630663" class="text-danger"> +7 705 663 06 63</a> - Аяулым</p>
                                    <p><a href="tel:+77077667834" class="text-danger"> +7 707 766 78 34</a>- Жаркынай</p>
                                    <p>{{trans('service.request')}}</p>
                                    <a href="#" role="button" data-toggle="modal"
                                       data-target="#request_popup" class="btn-theme bg-orange mt-3">{{trans('header.request')}}<i
                                            class="icofont-rounded-right"></i></a>
                                </div>
                                <!-- Sidebar Support Widget End -->
                            </div>
                            <!-- Sidebar Primary End -->
                            <!-- Sidebar Secondary Start -->
                            <div class="sidebar-secondary col-lg-12 col-md-6">
                                <!-- Recent Post Widget Start -->
                                <div class="widget-wrap">
                                    <h3 class="h3-md fw-7 mb-4">Дригие сервисы</h3>
                                    <div class="blog-list-categories">
                                        <ul class="list-unstyled">
                                            @if(isset($services))
                                                @foreach($services as $item)
                                                    <li class="{{($item->id == $service->id) ? 'active': null}}"><a
                                                            href="{{route('service', $item->id)}}"> {{$service->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <!-- Recent Post Widget End -->
                            </div>
                            <!-- Sidebar Secondary Start -->
                        </aside>
                        <!-- Add Some Left Space -->
                    </div>
                </div>
            </div>
        </section>
        <!-- What We Offer End -->
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
