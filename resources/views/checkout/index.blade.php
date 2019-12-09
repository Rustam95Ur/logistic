@extends('layouts.app')
@section('content')
    <div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page"
         style="background-image: url({{asset('img/shop-bg.jpg')}});">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icofont-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{route('shop')}}">{{trans('shop.title')}}</a></li>
                    <li class="breadcrumb-item " aria-current="page">{{trans('checkout.title')}}</li>
                </ol>
            </nav>
            <h1>{{trans('checkout.title')}}</h1>
        </div>
    </div>
    <main id="body-content">
        <div class="container wide-tb-100">
            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <span class="d-flex justify-content-between align-items-center mb-3">
                        <h4>{{trans('shop.cart')}}</h4>
                        <h4 class="bg-green badge-secondary badge-pill">{{count($products)}}</h4>
                    </span>
                    <ul class="list-group mb-3">
                        @foreach($products as $product)
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0 txt-green">{{$product['title']}}</h6>
                                    <small class="text-muted">{{trans('checkout.price')}}: <b>{{$product['price']}}</b>
                                    </small>
                                    <small class="text-muted">{{trans('checkout.count')}}: <b>{{$product['qty']}}</b>
                                    </small>
                                </div>
                                <span class="text-muted">{{$product['qty'] * $product['price']}}</span>
                            </li>
                        @endforeach
                        <li class="list-group-item d-flex justify-content-between">
                            <span>{{trans('shop.total')}}</span>
                            <strong>{{$totalSum}}</strong>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">{{trans('checkout.billing-address')}}</h4>
                    <form class="needs-validation entrance__form" novalidate="">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">{{trans('checkout.fist-name')}}</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value=""
                                       required="">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">{{trans('checkout.last-name')}}</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value=""
                                       required="">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="phone">{{trans('checkout.phone')}}<span class="text-muted"></span></label>
                            <input type="text" class="form-control txtLogin" id="phone">
                        </div>
                        <div class="mb-3">
                            <label for="email">Email<span class="text-muted"></span></label>
                            <input type="email" class="form-control" id="email" placeholder="email@example.com">
                        </div>
                        <hr class="mb-4">
                        <h4 class="mb-3">{{trans('checkout.shipping-type')}}</h4>
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="pickup" name="shippingType" type="radio" class="custom-control-input"
                                       checked="" required="" value="pickup">
                                <label class="custom-control-label" for="pickup">{{trans('checkout.pickup')}}</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="courier" name="shippingType" type="radio" class="custom-control-input"
                                       required="" value="courier">
                                <label class="custom-control-label"
                                       for="courier">{{trans('checkout.courier-service')}} </label>
                            </div>
                        </div>
                        <div class="row" id="courierType" style="display: none">
                            <div class="col-md-6 mb-3">
                                <label for="country">{{trans('checkout.address.country')}}</label>
                                <select class="custom-select d-block w-100" id="country" required="" name="country">
                                    <option selected disabled>{{trans('checkout.choose.county')}}</option>
                                    @foreach($countries as $county)
                                        <option
                                            value="{{$county->code}}">{{$county->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="address">{{trans('checkout.address.city')}}</label>
                                <select class="custom-select d-block w-100" id="country" name="city" required="">
                                    <option disabled selected>{{trans('checkout.choose.city')}}</option>
                                </select>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <h4 class="mb-3">{{trans('checkout.payment-type')}}</h4>
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="delivery" name="paymentType" type="radio" class="custom-control-input"
                                       checked="" required="">
                                <label class="custom-control-label"
                                       for="delivery">{{trans('checkout.payment.delivery')}}</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="online" name="paymentType" type="radio" class="custom-control-input"
                                       required="">
                                <label class="custom-control-label"
                                       for="online">{{trans('checkout.payment.online')}} </label>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <input class="text-white btn-buy" type="submit" value="{{trans('checkout.done')}}">
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script>
        (function ($) {
            $(function () {
                $("input[name='shippingType']").change(function () {
                    var type = $(this).val();
                    if (type === 'courier') {
                        $('#courierType').show()

                    } else {
                        $('#courierType').hide()
                    }
                });
                $("select[name='country']").change(function () {
                    var county = $(this).val();
                    console.log(county)
                    if (county) {
                        $.ajax({
                            url: '/shipping/destinations/' + county,
                            type: "GET",
                            dataType: "json",
                            beforeSend: function () {
                                $('select[name="city"]').empty();
                            },
                            success: function (data) {
                                $('select[name="city"]').append("<option disabled selected>{{trans('checkout.choose.city')}}</option>");
                                $.each(data, function (key, value) {
                                    $('select[name="city"]').append('<option value="' + value.id + '">' + value.title + '</option>');
                                });
                            },
                            // complete: function () {
                            //     $('#loader').css("visibility", "hidden");
                            // }
                        });
                    } else {
                        $('select[name="city"]').empty();
                    }
                });

            });
        })(jQuery);
    </script>
@endsection