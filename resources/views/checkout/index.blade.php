@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/loader.css')}}" media="all">
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
                                <span><b>{{$product['qty'] * $product['price']}}</b></span>
                            </li>
                        @endforeach
                        <li class="list-group-item d-flex justify-content-between">
                            <span id="tarifName"></span>
                            <strong id="tarifCheked"></strong>

                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>{{trans('shop.total')}}</span>
                            <strong id="totalPrice">{{$totalSum}}</strong>
                        </li>
                        <input form="checkout-form" name="total_price" type="hidden" value="{{$totalSum}}">
                        <input form="checkout-form" name="main_price" type="hidden" value="{{$totalSum}}">
                        <input form="checkout-form" name="tariff_name" value="standart" type="hidden">
                    </ul>
                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">{{trans('checkout.billing-address')}}</h4>
                    <form class="col rounded-field entrance__form" id="checkout-form" method="post"
                          action="{{route('payment')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">{{trans('checkout.fist-name')}}</label>
                                <input type="text" class="form-control" id="firstName" name="first_name" placeholder=""
                                       value=""
                                       required="">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">{{trans('checkout.last-name')}}</label>
                                <input type="text" class="form-control" id="lastName" name="last_name" placeholder=""
                                       value=""
                                       required="">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="phone">{{trans('checkout.phone')}}<span class="text-muted"></span></label>
                            <input type="text" class="form-control txtLogin" id="phone" name="phone">
                        </div>
                        <div class="mb-3">
                            <label for="email">Email<span class="text-muted"></span></label>
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="email@example.com">
                        </div>
                        <hr class="mb-4">
                        <h4 class="mb-3">{{trans('checkout.shipping-type')}}</h4>
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="deliveryPickup" name="shipping_type" type="radio"
                                       class="custom-control-input"
                                       checked="" required="" value="pickup">
                                <label class="custom-control-label"
                                       for="deliveryPickup">{{trans('checkout.pickup')}}</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="deliveryExline" name="shipping_type" type="radio"
                                       class="custom-control-input"
                                       required="" value="exline">
                                <label class="custom-control-label"
                                       for="deliveryExline">{{trans('checkout.courier-service')}} </label>
                            </div>
                        </div>
                        <div class="boxes-block" id="loader">
                            <div class="boxes">
                                <div class="box">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="box">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="box">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="box">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
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
                                <select class="custom-select d-block w-100" id="city" name="city" required="">
                                    <option disabled selected>{{trans('checkout.choose.city')}}</option>
                                </select>
                                <input type="hidden" id="weight" value="{{$totalWeight}}">
                                <input type="hidden" id="originId" value="{{$originId}}">
                                <input name="city_name" type="hidden" value="">

                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="street">{{trans('checkout.address.street')}}<span class="text-muted"></span></label>
                                <input type="text" class="form-control" id="street" name="street">
                            </div>
                        </div>
                        <div id="tarif" style="display: none">
                            <hr class="mb-4">
                            <h4 class="mb-3">{{trans('checkout.tariff')}}</h4>
                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="express" name="tariff" type="radio" class="custom-control-input"
                                           value="">
                                    <label class="custom-control-label"
                                           for="express">Express - <span id="expressPrice"></span></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="standard" name="tariff" type="radio" class="custom-control-input"
                                           value="">
                                    <label class="custom-control-label"
                                           for="standard">Standard - <span id="standardPrice"></span></label>
                                </div>
                            </div>
                        </div>


                        <hr class="mb-4">
                        <h4 class="mb-3">{{trans('checkout.payment-type')}}</h4>
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="delivery" name="payment_type" type="radio" class="custom-control-input"
                                       checked="" required="" value="offline">
                                <label class="custom-control-label"
                                       for="delivery">{{trans('checkout.payment.offline')}}</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="online" name="payment_type" type="radio" class="custom-control-input"
                                       required="" value="online">
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
                const mainVal = $("input[name='main_price']").val();
                $("input[name='shipping_type']").change(function () {
                    var type = $(this).val();
                    if (type === 'exline') {
                        $('#courierType').show();
                        $('#tarif').show();
                        $('#tarifName').show();
                        $('#tarifCheked').show();
                        var checedVal = ($('#tarifCheked').html() === '') ? 0 : $('#tarifCheked').html();
                        var sums = parseFloat(mainVal) + parseFloat(checedVal)
                        $('#totalPrice').html(sums);
                        $("input[name='total_price']").val(sums);
                    } else {
                        $('#courierType').hide();
                        $('#tarif').hide();
                        $('#tarifName').hide();
                        $('#tarifCheked').hide();
                        $('#totalPrice').html(mainVal);
                        $("input[name='total_price']").val(mainVal);
                    }
                });

                $("select[name='country']").change(function () {
                    var county = $(this).val();
                    if (county) {
                        $.ajax({
                            url: '/shipping/destinations/' + county,
                            type: "GET",
                            dataType: "json",
                            beforeSend: function () {
                                $('#loader').show();
                                $('select[name="city"]').empty();
                            },
                            success: function (data) {
                                $('select[name="city"]').append("<option disabled selected>{{trans('checkout.choose.city')}}</option>");
                                $.each(data, function (key, value) {
                                    $('select[name="city"]').append('<option value="' + value.id + '">' + value.title + ' (' + value.cached_path + ')' + '</option>');
                                });
                            },
                            complete: function () {
                                $('#loader').hide();
                            }
                        });
                    } else {
                        $('select[name="city"]').empty();
                    }
                });


                $("select[name='city']").change(function () {
                    var origin_id = $('#originId').val();
                    var destination_id = $('#city').val();
                    var weight = $('#weight').val();
                    var city_name = $("#city option:selected").text();
                    $("input[name='city_name']").val(city_name);
                    $.ajax({
                        url: '/shipping/calculate/' + origin_id + '/' + destination_id + '/' + weight,
                        success: function (data) {
                            $('#expressPrice').html();
                            $('#standardPrice').html();
                            $('#expressPrice').html(data.express.price);
                            $('#standardPrice').html(data.standard.price);
                            $("input[id='standard']").val(data.standard.price);
                            $("input[id='express']").val(data.express.price);
                            $('#tarifCheked').html(data.standard.price);
                            $('#tarifName').html('Standard');
                            var sums = parseFloat(data.standard.price) + parseFloat(mainVal);
                            $('input[name="total_price"]').val(sums);
                            $("input[id='standard']").attr('checked', 'checked');
                            $('#totalPrice').html(sums);
                            $('input[name="tariff_name"]').val('standard');

                        }
                    });
                    $('#tarif').show();
                });
                $("input[name='tariff']").change(function () {
                    var price = $(this).val();
                    var type = $(this).attr("id");
                    $('input[name="tariff_name"]').val(type);
                    $('#tarifName').html(type);
                    $('#tarifCheked').html(price);
                    price = (price === '') ? 0 : price;
                    var sums = parseFloat(price) + parseFloat(mainVal);
                    $('#totalPrice').html(sums);
                    $("input[name='total_price']").val(sums)
                });
            });
        })(jQuery);
    </script>
@endsection
