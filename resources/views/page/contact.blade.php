@extends('layouts.app')
@section('content')
    <div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page"
         style="background-image: url({{asset('img/contact-bg.jpg')}});">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icofont-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{trans('contact.title')}}</li>
                </ol>
            </nav>
            <h1>{{trans('contact.title')}}</h1>
            <div class="breadcrumbs-description">
                Будем рады ответить на все ваши вопросы
            </div>
        </div>
    </div>
    <main id="body-content">
        <!-- Contact Details Start -->
        <section class="wide-tb-80 contact-full-shadow">
            <div class="container">
                <div class="contact-map-bg">
                    <img src="{{asset('img/map-bg.png')}}" alt="">
                </div>
                <div class="row justify-content-between">
                    <div class="col-md-6 col-sm-12 col-lg-4 wow fadeInRight">
                        <div class="contact-detail-shadow">
                            <h4>{{trans('contact.address')}}</h4>
                            <div class="d-flex align-items-start items mb-5">
                                <i class="icofont-google-map"></i> <span>
                                    {{trans('contact.address-info')}}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-4 wow fadeInLeft">
                        <div class="contact-detail-shadow">
                            <h4>{{trans('contact.contacts')}}</h4>
                            <div class="d-flex align-items-start items">
                                <i class="icofont-phone"></i> <span><a href="tel:+77056630663"> +7 705 663 06 63</a> - Аяулым</span>
                            </div>
                            <div class="d-flex align-items-start items">
                                <i class="icofont-phone"></i> <span><a href="tel:+77077667834"> +7 707 766 78 34</a>- Жаркынай</span>
                            </div>
                            <div class="text-nowrap d-flex align-items-start items">
                                <i class="icofont-email"></i> <a href="mailto:region-lg@mail.ru">region-lg@mail.ru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Details End -->
        <!-- Contact Us From -->
        <section class="wide-tb-100 bg-light-gray pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-8 offset-lg-2 wow fadeInUp">
                        <div class="free-quote-form contact-page">
                            <!-- Heading Main -->
                            <h1 class="heading-main mb-4">
                                {{trans('contact.form-title')}}
                            </h1>
                            <!-- Heading Main -->
                            <form action="{{route('mail')}}" method="post" class="col rounded-field entrance__form">
                                @csrf
                                <div class="form-row mb-4">
                                    <div class="col">
                                        <input type="text" name="name"  class="form-control" required
                                               placeholder="{{trans('contact.name')}}">
                                    </div>
                                    <div class="col">
                                        <input type="email" name="email" class="form-control" required
                                               placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="col">
                                        <input type="text" name="phone"  class="form-control txtLogin" required
                                               placeholder="{{trans('contact.phone')}}">
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="col">
                                        <textarea rows="7" name="message"  placeholder="{{trans('contact.message')}}" required
                                                  class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-row text-center">
                                    <input type="submit" id="contactForm" value="{{trans('button.send')}}"
                                            class="form-btn mx-auto btn-theme bg-orange">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Us From -->

        <!-- Google Map Start -->
        <section class="map-bg">
            <div id="map-holder" class="pos-rel">
            </div>
        </section>
        <!-- Google Map Start -->
    </main>
    <script>
        function initMap() {
            // The location of Uluru
            var uluru = {lat: 43.298523, lng: 76.871136};
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map-holder'), {zoom: 15, center: uluru});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: uluru, map: map});
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwCO-k_M6WpsLWjKDawOG6sRFtcBysjGg&callback=initMap">
    </script>
@endsection
