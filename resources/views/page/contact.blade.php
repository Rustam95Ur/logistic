@extends('layouts.app')
@section('content')
    <div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page"
         style="background-image: url({{asset('img/banner_slider_3.jpg')}});">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icofont-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
            <h1>Contact Us</h1>
            <div class="breadcrumbs-description">
                Molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.
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
                            <h4>Germany</h4>
                            <div class="d-flex align-items-start items">
                                <i class="icofont-google-map"></i> <span>Envato Pty Ltd, 13/2 Elizabeth
St Melbourne VIC 3000, Australia</span>
                            </div>
                            <div class="d-flex align-items-start items">
                                <i class="icofont-phone"></i> <span>+1 (408) 786 - 5117</span>
                            </div>
                            <div class="text-nowrap d-flex align-items-start items">
                                <i class="icofont-email"></i> <a href="#">germany@logzee.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-4 wow fadeInLeft">
                        <div class="contact-detail-shadow">
                            <h4>Spain</h4>
                            <div class="d-flex align-items-start items">
                                <i class="icofont-google-map"></i> <span>Envato Pty Ltd, 13/2 Elizabeth
St Melbourne VIC 3000, Australia</span>
                            </div>
                            <div class="d-flex align-items-start items">
                                <i class="icofont-phone"></i> <span>+1 (408) 786 - 5117</span>
                            </div>
                            <div class="text-nowrap d-flex align-items-start items">
                                <i class="icofont-email"></i> <a href="#">spain@logzee.com</a>
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
                                Get in touch
                            </h1>
                            <!-- Heading Main -->
                            <form action="#" method="post" id="contactusForm" novalidate="novalidate"
                                  class="col rounded-field">
                                <div class="form-row mb-4">
                                    <div class="col">
                                        <input type="text" name="name" id="name" class="form-control"
                                               placeholder="Your Name">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="email" id="email" class="form-control"
                                               placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="col">
                                        <select title="Please choose a package" required="" name="Transport_Package"
                                                id="Transport_Package" class="custom-select" aria-required="true"
                                                aria-invalid="false">
                                            <option value="">Transport Type</option>
                                            <option value="Type 1">Type 1</option>
                                            <option value="Type 2">Type 2</option>
                                            <option value="Type 3">Type 3</option>
                                            <option value="Type 4">Type 4</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select title="Please choose a package" required="" name="Freight_Package"
                                                id="Freight_Package" class="custom-select" aria-required="true"
                                                aria-invalid="false">
                                            <option value="">Type of freight</option>
                                            <option value="Type 1">Type 1</option>
                                            <option value="Type 2">Type 2</option>
                                            <option value="Type 3">Type 3</option>
                                            <option value="Type 4">Type 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="col">
                                        <textarea rows="7" name="cment" id="cment" placeholder="Message"
                                                  class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-row text-center">
                                    <button name="contactForm" id="contactForm" type="submit"
                                            class="form-btn mx-auto btn-theme bg-orange">Submit Now <i
                                            class="icofont-rounded-right"></i></button>
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
