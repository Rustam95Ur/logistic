<div class="overlay overlay-hugeinc">
    <form method="get" action="" class="search-form form-inline mt-2 mt-md-0">
        <div class="form-inner">
            <div class="form-inner-div d-inline-flex align-items-center no-gutters">
                <div class="col-md-1">
                    <i class="icofont-search"></i>
                </div>
                <div class="col-10">
                    <input class="form-control w-100 p-0" type="search" placeholder="Search" aria-label="Search"
                           value="" name="s" id="search">
                </div>
                <div class="col-md-1">
                    <a href="#" class="overlay-close link-oragne"><i
                            class="icofont-close-line"></i></a>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- Request Modal -->
<div class="modal fade" id="request_popup" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered request_popup" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <!-- Contact Details Start -->
                <section class="pos-rel bg-light-gray">
                    <div class="container-fluid p-0">
                        <a href="#" class="close" data-dismiss="modal">
                            <i class="icofont-close-line"></i>
                        </a>
                        <div class="d-lg-flex justify-content-end no-gutters mb-spacer-md">
                            <div class="col bg-fixed bg-img-7 request_pag_img">
                            </div>
                            <div class="col-md-7 col-12">
                                <div class="px-3 m-5">
                                    <h2 class="h2-xl mb-4 fw-6">{{trans('request.title')}}</h2>
                                    <div class="screen-reader-response"></div>
                                    <form action="{{route('request')}}" method="post" class="wpcf7-form entrance__form">
                                        @csrf
                                        <div class="rounded-field">
                                            <div class="form-row mb-4">
                                                <div class="col">
                                                    <select name="freight_type" class="custom-select">
                                                        <option disabled
                                                                selected>{{trans('request.freight')}}</option>
                                                        <option
                                                            value="{{trans('request.freight_type.bulk')}}">{{trans('request.freight_type.bulk')}}</option>
                                                        <option
                                                            value="{{trans('request.freight_type.dangerous')}}">{{trans('request.freight_type.dangerous')}}</option>
                                                        <option
                                                            value="{{trans('request.freight_type.perishable')}}">{{trans('request.freight_type.perishable')}}</option>
                                                        <option
                                                            value="{{trans('request.freight_type.general')}}">{{trans('request.freight_type.general')}}</option>
                                                        <option
                                                            value="{{trans('request.freight_type.fabricated')}}">{{trans('request.freight_type.fabricated')}}</option>
                                                        <option
                                                            value="{{trans('request.freight_type.oversized')}}">{{trans('request.freight_type.oversized')}}</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <select name="transport_type" class="custom-select">
                                                        <option disabled
                                                                selected>{{trans('request.transport_type')}}</option>
                                                        @foreach($services as $service)
                                                            <option
                                                                value="{{$service->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}">{{$service->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row mb-4">
                                                <div class="col">
                                                    <input type="text" name="city_departure" value="" size="40"
                                                           class="form-control"
                                                           placeholder="{{trans('request.city_departure')}}">
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="delivery_city" value="" size="40"
                                                           class="form-control"
                                                           placeholder="{{trans('request.delivery_city')}}">
                                                </div>
                                            </div>
                                            <div class="form-row mb-4">
                                                <div class="col">
                                                    <input type="text" name="gross_weight" value="" size="40"
                                                           class="form-control"
                                                           placeholder="{{trans('request.gross_weight')}}">
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="dimension" value="" size="40"
                                                           class="form-control"
                                                           placeholder="{{trans('request.dimension')}}">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="center-head"><span
                                                            class="bg-blue-light txt-green">{{trans('request.personal_detail')}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row mb-4">
                                                <div class="col user-info">
                                                    <input type="text" name="name" value="" size="40" required
                                                           class="form-control"
                                                           placeholder="{{trans('request.name.title')}}">

                                                    <input type="email" name="email" value="" size="40" required
                                                           class="form-control" placeholder="Email">

                                                    <input type="text" name="phone" value="" size="40" required
                                                           class="form-control txtLogin"
                                                           placeholder="{{trans('request.phone.title')}}">
                                                </div>
                                                <div class="col">
                                                        <textarea name="message" cols="40" rows="10"
                                                                  class="form-control"
                                                                  placeholder="{{trans('request.message')}}"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col pt-3">
                                                    <input type="submit" value="{{trans('button.send')}}"
                                                           class="form-btn btn-theme bg-green">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<!-- Message Modal -->
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                @if ($message = Session::get('success'))
                    <h6 class="text-center text-success">{!! $message !!}</h6>
                @endif
                @if ($message = Session::get('error'))
                    <h6 class="text-center text-danger">{!! $message !!}</h6>
                @endif
                @if ($message = Session::get('warning'))
                    <h6 class="text-center text-danger">{!! $message !!}</h6>
                @endif
                @if ($message = Session::get('info'))
                    <h6 class="text-center text-danger">{!! $message !!}</h6>
                @endif
                @if ($errors->any())
                    @foreach($errors->all() as $error)
                        <ul class="questions">
                            <li class="text-danger"><h6>{!! $error !!}</h6></li>
                        </ul>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="page_down_modal" tabindex="-1" role="dialog" aria-labelledby="messageModal"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <!-- Contact Details Start -->
                <section class="pos-rel bg-light-gray">
                    <div class="container-fluid p-0">
                        <a href="#" class="close" data-dismiss="modal">
                            <i class="icofont-close-line"></i>
                        </a>
                        <div class="d-lg-flex justify-content-end no-gutters mb-spacer-md">
                            <div class="col-md-12 col-12 mt-3 mb-3">
                                <h4 class="text-uppercase mt-3">{{trans('contact.any-questions')}}</h4>
                                <h5>{{trans('contact.will-contact')}}</h5>
                                <div class="screen-reader-response mt-3"></div>
                                <form action="{{route('mail')}}" method="post"
                                      class="col rounded-field entrance__form">
                                    @csrf
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <input type="text" name="name" class="form-control" required
                                                   placeholder="{{trans('contact.name')}}">
                                        </div>
                                        <div class="col">
                                            <input type="email" name="email" class="form-control" required
                                                   placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <input type="text" name="phone" class="form-control txtLogin" required
                                                   placeholder="{{trans('contact.phone')}}">
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                        <textarea rows="7" name="message" placeholder="{{trans('contact.message')}}"
                                                  required
                                                  class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row text-center">
                                        <input type="submit" id="contactForm" value="{{trans('button.send')}}"
                                               class="form-btn mx-auto btn-theme bg-green">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
