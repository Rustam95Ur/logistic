<div class="col-md-12 col-lg-3">
    <!-- Add Some Left Space -->
    <aside class="row">
        <!-- Sidebar Primary Start -->
        <div class="sidebar-primary col-lg-12 col-md-6">
            <!-- Search Widget Start -->
            <div class="widget-wrap">
                <h3 class="h3-md fw-7 mb-4">{{trans('shop.search')}}</h3>
                <form class="flex-nowrap col ml-auto footer-subscribe p-0">
                    <input type="text" class="form-control"
                           placeholder="{{trans('shop.search')}} …">
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
                            @foreach($categories as $categoryProduct)
                                @if(isset($category))
                                    <li class="{{($categoryProduct->id == $category->id) ? 'active' : ''}}">
                                        <a href="{{route('category', $categoryProduct->id)}}">{{$categoryProduct->getTranslatedAttribute('name', $locale, 'fallbackLocale')}}</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{route('category', $categoryProduct->id)}}">{{$categoryProduct->getTranslatedAttribute('name', $locale, 'fallbackLocale')}}</a>
                                    </li>
                                @endif
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
                <p><a href="tel:+77077667834" class="text-danger"> +7 707 766 78 34</a> - Жаркынай
                </p>
                <p>{{trans('service.request')}}</p>
                <a href="#" role="button" data-toggle="modal"
                   data-target="#request_popup"
                   class="btn-theme bg-green mt-3">{{trans('header.request')}}<i
                        class="icofont-rounded-right"></i></a>
            </div>
            <!-- Sidebar Support Widget End -->
        </div>
        <!-- Sidebar Primary End -->

        <!-- Sidebar Secondary Start -->
    </aside>
    <!-- Add Some Left Space -->
</div>
