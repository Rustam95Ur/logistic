<header class="fixed-top header-fullpage bordered-nav wow fadeInDown fixed">
    <div class="top-bar-right d-flex align-items-center text-md-left">
        <div class="container px-0">
            <div class="row align-items-center">
                <div class="col d-flex">
                    <div class="top-text">
                        <small class="txt-black">{{trans('header.address')}}</small>
                       {{trans('header.address-detail')}}
                    </div>
                    <div class="top-text">
                        <small class="txt-black">{{trans('header.email')}}</small>
                        <a href="mailto:support@logistic.com">support@logistic.com</a>
                    </div>
                    <div class="top-text">
                        <small class="txt-black">{{trans('header.phone')}}</small>
                        <a href="tel:+77270000000">+7 727 000 00 00</a>
                    </div>
                    <div class="top-text">
                        <small class="txt-black">{{trans('header.social')}}</small>
                        <a href="#"><i class="icofont-instagram"></i></a>
                        <a href="#"><i class="icofont-facebook"></i></a>
                    </div>
                </div>
                <div class="col-md-auto">
                    <!-- Topbar Language Dropdown Start -->
                    <div class="dropdown d-inline-flex lang-toggle shadow-sm collapse navbar-collapse"
                         data-hover="dropdown">

                        @switch($locale)
                            @case('ru')
                            @if (\Request::route()->getName() == 'home')
                                <a href="#" class="dropdown-toggle btn" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false" data-hover="dropdown"
                                   data-animations="slideInUp slideInUp slideInUp slideInUp">
                                    <img src="{{asset('img/flag_ru.png')}}" alt="" class="dropdown-item-icon">
                                    <span class="d-inline-block d-lg-none">RU</span>
                                    <span class="d-none d-lg-inline-block">{{trans('header.lang.ru')}}</span>
                                    <i class="icofont-rounded-down"></i>
                                </a>
                                <div class="dropdown-menu dropdownhover-bottom dropdown-menu-right" role="menu">
                                    <a class="dropdown-item" href="{{ url('/en/'.stristr(Request::url(), 'home', true)) }}">{{trans('header.lang.en')}}</a>
                                </div>
{{--                            @elseif(\Request::route()->getName() == 'post')--}}
{{--                                <li><a class="lang"--}}
{{--                                       href="{{ url('/kz/'.stristr(Request::url(), 'post', false)) }}">KZ</a>--}}
{{--                                </li>--}}
{{--                            @elseif(\Request::route()->getName() == 'home')--}}
{{--                                <li><a class="lang"--}}
{{--                                       href="{{ url('/kz/'.stristr(Request::url(), 'home', true)) }}">KZ</a>--}}
{{--                                </li>--}}
                            @else
                                <a href="#" class="dropdown-toggle btn" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false" data-hover="dropdown"
                                   data-animations="slideInUp slideInUp slideInUp slideInUp">
                                    <img src="{{asset('img/flag_us.png')}}" alt="" class="dropdown-item-icon">
                                    <span class="d-inline-block d-lg-none">RU</span>
                                    <span class="d-none d-lg-inline-block">{{trans('header.lang.ru')}}</span>
                                    <i class="icofont-rounded-down"></i>
                                </a>
                                <div class="dropdown-menu dropdownhover-bottom dropdown-menu-right" role="menu">
                                    <a class="dropdown-item" href="{{ url('/en/'.Request::route()->getName()) }}">{{trans('header.lang.en')}}</a>
                                </div>
                            @endif
                            @break
                            @case('en')
                            @if(\Request::route()->getName() == 'home')
                                <a href="#" class="dropdown-toggle btn" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false" data-hover="dropdown"
                                   data-animations="slideInUp slideInUp slideInUp slideInUp">
                                    <img src="{{asset('img/flag_us.png')}}" alt="" class="dropdown-item-icon">
                                    <span class="d-inline-block d-lg-none">US</span>
                                    <span class="d-none d-lg-inline-block">{{trans('header.lang.en')}}</span>
                                    <i class="icofont-rounded-down"></i>
                                </a>
                                <div class="dropdown-menu dropdownhover-bottom dropdown-menu-right" role="menu">
                                    <a class="dropdown-item" href="{{ url('/ru/'.stristr(Request::url(), 'home', true)) }}">{{trans('header.lang.ru')}}</a>
                                </div>
{{--                            @elseif (\Request::route()->getName() == 'page')--}}
{{--                                <li><a class="lang"--}}
{{--                                       href="{{ url('/ru/'.stristr(Request::url(), 'page', false)) }}">RU</a>--}}
{{--                                </li>--}}
{{--                            @elseif(\Request::route()->getName() == 'post')--}}
{{--                                <li><a class="lang"--}}
{{--                                       href="{{ url('/ru/'.stristr(Request::url(), 'post', false)) }}">RU</a>--}}
{{--                                </li>--}}
                            @else
                                <a href="#" class="dropdown-toggle btn" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false" data-hover="dropdown"
                                   data-animations="slideInUp slideInUp slideInUp slideInUp">
                                    <img src="{{asset('img/flag_us.png')}}" alt="" class="dropdown-item-icon">
                                    <span class="d-inline-block d-lg-none">US</span>
                                    <span class="d-none d-lg-inline-block">{{trans('header.lang.en')}}</span>
                                    <i class="icofont-rounded-down"></i>
                                </a>
                                <div class="dropdown-menu dropdownhover-bottom dropdown-menu-right" role="menu">
                                    <a class="dropdown-item" href="{{ url('/ru/'.Request::route()->getName()) }}">{{trans('header.lang.ru')}}</a>
                                </div>
                            @endif
                            @break
                        @endswitch
                    </div>
                    <!-- Topbar Language Dropdown End -->
                    <div class="d-inline-flex request-btn ml-2">
                        <a class="btn-theme icon-left bg-orange no-shadow d-none d-lg-inline-block align-self-center"
                           href="#" role="button" data-toggle="modal"
                           data-target="#request_popup"><i class="icofont-page"></i> {{trans('header.request')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Navigation Start -->
    <nav class="navbar navbar-expand-lg bg-transparent-header">
        <div class="container text-nowrap bdr-nav px-0">
            <div class="d-flex mr-auto">
                <a class="navbar-brand rounded-bottom light-bg" href="">
                    <img src="{{asset('img/logo-region.png')}}" alt="">
                </a>
            </div>
            <!-- Topbar Request Quote Start -->
        {{--<span class="order-lg-last d-inline-flex request-btn">--}}
        {{--<a class="nav-link mr-2 ml-auto" href="#" id="search_home"><i--}}
        {{--class="icofont-search"></i></a>--}}
        {{--</span>--}}
        <!-- Toggle Button Start -->
            <button class="navbar-toggler x collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation" style="">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Toggle Button End -->
            <!-- Topbar Request Quote End -->
            <div class="collapse navbar-collapse" data-hover="dropdown">
                <ul class="navbar-nav ml-auto  ">
                    <li class="menu-item"><a title="" href="{{route('home')}}">{{trans('header.home')}}</a></li>
                    <li class="menu-item"><a title="" href="{{route('about')}}">{{trans('header.about')}}</a></li>
                    <li class="menu-item"><a title="" href="{{route('services')}}">{{trans('header.services')}}</a></li>
                    <li class="menu-item"><a title="" href="#">{{trans('header.cars')}}</a></li>
                    <li class="menu-item"><a title="" href="{{route('contact')}}">{{trans('header.contacts')}}</a></li>
                </ul>
                <!-- Main Navigation End -->
            </div>
        </div>
    </nav>
    <!-- Main Navigation End -->
</header>

