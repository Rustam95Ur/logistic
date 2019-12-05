@extends('layouts.app')
@section('content')
    <div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page"
         style="background-image: url({{asset('img/shop-bg.jpg')}});">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icofont-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{route('shop')}}">{{trans('shop.title')}}</a></li>
                    <li class="breadcrumb-item " aria-current="page">{{$product->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</li>
                </ol>
            </nav>
            <h1>{{trans('shop.title')}}</h1>
            <div class="breadcrumbs-description">
                {{trans('shop.description')}}
            </div>
        </div>
    </div>
    <main id="body-content">
        <!-- What We Offer Start -->
        <section class="wide-tb-80">
            <div class="container pos-rel">
                <div class="row align-items-start">
                    <div class="col-md-12 col-lg-6">
                        <div class="">
                            <img src="{{Voyager::image($product->image)}}">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 blog-list">
                        <div class="row">
                            <!-- Blog Items -->
                            <div class=""><!-- Product Description -->
                                <div class="product-description">
                                    <h2>{{$product->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</h2>
                                </div>
                                <!-- Product Configuration -->
                                <div class="product-configuration">
                                    <p class="text-center font-weight-bold text-uppercase">{{trans('product.description')}}</p>
                                    {!! $product->getTranslatedAttribute('body', $locale, 'fallbackLocale') !!}
                                    <hr>
                                    <p>{{trans('product.model')}}: <b>{{$product->model}}</b></p>
                                    <p>{{trans('product.country')}}: <b>{{$product->country->title}}</b></p>
                                    <!-- Cable Configuration -->
                                    <hr>
                                    <p class="text-center font-weight-bold text-uppercase">{{trans('product.feature')}}</p>
                                    {!! $product->getTranslatedAttribute('feature', $locale, 'fallbackLocale') !!}
                                    <hr>
                                    <h5>{{trans('product.price')}}: <b class="text-danger">{{$product->price}}</b></h5>
                                </div>
                                <!-- Product Pricing -->
                                <div class="product-price mt-4">
                                    <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="">
                                    <a class="cart-btn" href="#">{{trans('shop.add_cart')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- What We Offer End -->
    </main>
@endsection
