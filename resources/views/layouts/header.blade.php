<header class="fixed-top header-fullpage bordered-nav wow fadeInDown fixed">
    <div class="top-bar-right d-flex align-items-center text-md-left">
        <div class="container px-0">
            <div class="row align-items-center">
                <div class="col d-flex">
                    <div class="top-text">
                        <small class="txt-black">{{trans('header.address')}}</small>
                        254 Street Avenue, LA US
                    </div>
                    <div class="top-text">
                        <small class="txt-black">{{trans('header.email')}}</small>
                        <a href="#">support@logzee.com</a>
                    </div>
                    <div class="top-text">
                        <small class="txt-black">{{trans('header.phone')}}</small>
                        +88 (0) 202 0000 001
                    </div>
                </div>
                <div class="col-md-auto">
                    <!-- Topbar Language Dropdown Start -->
                    <div class="dropdown d-inline-flex lang-toggle shadow-sm">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle-mob text-dark" href="index.html" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Русский <i class="icofont-rounded-down"></i></a>
                                <ul class="dropdown-menu dropdownhover-bottom" aria-labelledby="dropdown03">
                                    <li><a class="dropdown-item" href="index.html">English</a></li>
                                </ul>
                            </li>
                        </ul>
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
            <div class="collapse navbar-collapse" id="navbarCollapse" data-hover="dropdown">
                <ul class="navbar-nav ml-auto  ">
                    <li class="menu-item"><a title="" href="#">{{trans('header.home')}}</a></li>
                    <li class="menu-item"><a title="" href="#">{{trans('header.about')}}</a></li>
                    <li class="menu-item"><a title="" href="#">{{trans('header.services')}}</a></li>
                    <li class="menu-item"><a title="" href="#">{{trans('header.cars')}}</a></li>
                    <li class="menu-item"><a title="" href="#">{{trans('header.contacts')}}</a></li>
                </ul>
                <!-- Main Navigation End -->
            </div>
        </div>
    </nav>
    <!-- Main Navigation End -->
</header>

