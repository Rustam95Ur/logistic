@extends('layouts.app')
@section('content')
    <div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page"
         style="background-image: url({{asset('img/shop-bg.jpg')}});">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icofont-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{route('shop')}}">{{trans('shop.title')}}</a></li>
                    <li class="breadcrumb-item " aria-current="page">{{trans('shop.cart')}}</li>
                </ol>
            </nav>
            <h1>{{trans('shop.cart')}}</h1>
        </div>
    </div>
    <main id="body-content">
        <div class="container wide-tb-100">
            <div class="row">
                <div class="col-md-12 col-lg-7">
                    <section id="cart">
                        @foreach($products as $product)
                            <article class="product">
                                <header>
                                    <a class="removeAll remove" id="{{$product['id']}}">
                                        <img src="{{$product['image']}}" alt="">
                                        <h3>{{trans('shop.remove-item')}}</h3>
                                    </a>
                                </header>
                                <div class="content">
                                    <h1>{{$product['title']}}</h1>
                                    <p>{{trans('product.model')}}: <b>{{$product['model']}}</b></p>
                                    <p class="country">{{trans('product.country')}}: <b>{{$product['country']}}</b></p>
                                    {{--                        <div title="You have selected this product to be shipped in the color yellow." style="top: 0"--}}
                                    {{--                             class="color yellow"></div>--}}
                                    {{--                        <div style="top: 43px" class="type small">Size 11.5</div>--}}
                                </div>
                                <footer class="content">
                                    <input type="hidden" id="input-quantity" value="1">
                                    <span class="qt-minus removeItem" id="{{$product['id']}}">-</span>
                                    <span class="qt" id="input_remove" >{{$product['qty']}}</span>
                                    <span class="qt-plus cartId" id="{{$product['id']}}">+</span>
                                    <h2 class="full-price">
                                        {{$product['price'] * $product['qty']}}
                                    </h2>
                                    <h2 class="price">
                                        {{$product['price']}}
                                    </h2>
                                </footer>
                            </article>
                        @endforeach
                    </section>
                </div>
                <div class="col-md-12 col-lg-5">
                    <footer id="site-footer">
                        <div class="container clearfix">
{{--                            <div class="left">--}}
{{--                                <h2 class="subtotal">{{trans('shop.subtotal')}}:<b class="font-weight-bold">{{$subtotal}}</b>--}}
{{--                                </h2>--}}
{{--                            </div>--}}
                            <div class="right">
                                <h1 class="total">{{trans('shop.total')}}: <b class="font-weight-bold" id="total">{{$subtotal}}</b>
                                </h1>
                                <a href="{{route('checkout')}}" class="btn-buy">{{trans('button.buy')}}</a>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </main>
@endsection
