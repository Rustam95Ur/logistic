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
                    @include('layouts.left-space')
                    <div class="col-md-12 col-lg-9 blog-list">
                        <div class="row">
                            <!-- Shop Items -->
                            <div class="col-md-12">
                                <h2>{{$category->getTranslatedAttribute('name', $locale, 'fallbackLocale')}}</h2>
                            </div>
                            @foreach($products as $product)
                                @foreach($product->categories as $productCategory)
                                    @if($category->id == $productCategory->id )
                                            <div class="col-md-4">
                                                <div class="blog-warp">
                                                    <div class="product-item">
                                                        <img src="{{Voyager::image($product->image)}}" class="rounded">
                                                        <div class="product-buttons">
                                                            <input type="hidden" value="1" id="input-quantity">
                                                            <a href="#" class="add-cart text-white cartId"
                                                               id="{{ $product->id }}">{{trans('shop.add_cart')}}</a>
                                                            <a href="{{route('product', $product->id)}}"
                                                               class="read-more text-white">{{trans('shop.read_more')}}</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-title">
                                                        <a href="{{route('product', $product->id)}}">{{$product->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</a>
                                                        <span class="product-price">{{$product->price}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                    @endif
                                @endforeach
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
