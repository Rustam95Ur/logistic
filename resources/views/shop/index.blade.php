@extends('layouts.app')
@section('content')
    <div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page"
         style="background-image: url({{asset('img/shop-bg.jpg')}});">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icofont-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{trans('shop.title')}}</li>
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
                    <div class="col-md-12 col-lg-3">
                        <!-- Add Some Left Space -->
                        <aside class="row">
                            <!-- Sidebar Primary Start -->
                            <div class="sidebar-primary col-lg-12 col-md-6">
                                <!-- Search Widget Start -->
                                <div class="widget-wrap">
                                    <h3 class="h3-md fw-7 mb-4">{{trans('shop.search')}}</h3>
                                    <form class="flex-nowrap col ml-auto footer-subscribe p-0">
                                        <input type="text" class="form-control" placeholder="{{trans('shop.search')}} …">
                                        <button type="submit" class="btn btn-theme bg-green"><i
                                                class="icofont-search p-0"></i></button>
                                    </form>
                                </div>
                                <!-- Search Widget End -->
                                <!-- Sidebar Secondary Start -->
                                <div class="sidebar-secondary col-lg-12 col-md-6">
                                    <!-- Recent Post Widget Start -->
                                    <div class="widget-wrap">
                                        <h3 class="h3-md fw-7 mb-4">{{trans('shop.categories')}}</h3>
                                        <div class="blog-list-categories">
                                            <ul class="list-unstyled">
                                                @foreach($categories as $category)
                                                    <li><a href="#">{{$category->getTranslatedAttribute('name', $locale, 'fallbackLocale')}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Recent Post Widget End -->
                                </div>
                                <!-- Sidebar Support Widget Start -->
                                <div class="widget-wrap text-center bg-sky-blue rounded py-5">
                                    <div class="mb-2"><i class="icofont-headphone-alt icofont-4x"></i></div>
                                    <h3 class="h3-md fw-5 txt-orange mb-4">{{trans('service.need-help')}}</h3>
                                    <p>{{trans('service.call')}}: </p>
                                    <p><a href="tel:+77056630663" class="text-danger"> +7 705 663 06 63</a> - Аяулым</p>
                                    <p><a href="tel:+77077667834" class="text-danger"> +7 707 766 78 34</a>- Жаркынай</p>
                                    <p>{{trans('service.request')}}</p>
                                    <a href="#" role="button" data-toggle="modal"
                                       data-target="#request_popup" class="btn-theme bg-green mt-3">{{trans('header.request')}}<i
                                            class="icofont-rounded-right"></i></a>
                                </div>
                                <!-- Sidebar Support Widget End -->
                            </div>
                            <!-- Sidebar Primary End -->

                            <!-- Sidebar Secondary Start -->
                        </aside>
                        <!-- Add Some Left Space -->
                    </div>
                    <div class="col-md-12 col-lg-9 blog-list">
                        <div class="row">
                            <!-- Blog Items -->
                            @foreach($products as $product)
                            <div class="col-md-4">
                                <div class="blog-warp">
                                    <div class="product-item" style="height: 100px">
                                        <img src="{{Voyager::image($product->image)}}" class="rounded">
                                        <div class="product-buttons">
                                            <a href="#" class="add-cart text-white cartId" id="{{ $product->id }}">{{trans('shop.add_cart')}}</a>
                                            <a href="{{route('product', $product->id)}}" class="read-more text-white">{{trans('shop.read_more')}}</a>
                                        </div>
                                    </div>
                                    <div class="product-title">
                                        <a href="{{route('product', $product->id)}}">{{$product->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</a>
                                        <span class="product-price">{{$product->price}}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="text-md-left theme-pagination">
                           {{$products->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- What We Offer End -->
    </main>
@endsection
