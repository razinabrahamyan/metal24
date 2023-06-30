{{--<div class="col-12 col-lg-3 col-xl-3" itemscope="" itemtype="https://schema.org/SiteMobileNavigationElement">--}}
    <div id="mobile_accordion" style="background-color: #414e70" class="base-br mobile_bar">
        @foreach($markets as $market)
            <div
{{--                @if(count($market->categories) < 1) class="collapse_elem" @endif--}}

            >
                <div
                    style="background-color: #556590"
                    class="card-header"
                    id="heading{{$market->id}}"
                    @if(count($market->categories) < 1) data-toggle="collapse" @endif
                    data-target="#mob-collapse{{$market->id}}"
                    aria-expanded="true"
                    aria-controls="mob-collapse{{$market->id}}"
                >
                    <div class="d-flex justify-content-between">
                        <span onclick="window.location.replace('{{route('welcome').'/'.$market->slug['slug']}}')">
                                <span style="font-size: 15px; color: white">
                                    {{$market->title}}
                                </span>
                        </span>
                        @if(count($market->categories) < 1) <i style="color: white" class="fa fa-ellipsis-v dropdown-ellipse"></i> @endif
                    </div>

                </div>

                <div
                    id="mob-collapse{{$market->id}}"
                    class="collapse @if(count($market->categories) > 0) show @endif "
{{--                                    data-parent="#accordion"--}}
                >
                    <div>
                        @if(count($market->categories) > 0)
                            @foreach($market->categories as $category)
                                <div
                                     data-target="#mob-collapse{{$market->id}}{{$category->id}}" aria-expanded="true"
                                     aria-controls="mob-collapse{{$market->id}}{{$category->id}}"
                                     data-toggle="collapse"
                                >
                                    <div style="background-color: #414e70 " class="card-header"
                                         id="heading{{$market->title}}{{$category->id}}" itemprop="name">
                                        <div class="d-flex justify-content-between">
                                        <span itemprop="url" onclick="window.location.replace('{{route('welcome').'/'.$category->slug['slug']}}')">
                                        <span style="font-size: 14px; color: white">
                                            {{$category->title}}
                                        </span>
                                        </span>
                                            <i style="color: white" class="fa fa-ellipsis-v dropdown-ellipse"></i>
                                        </div>
                                    </div>
                                    <div itemprop="name"
                                         id="mob-collapse{{$market->id}}{{$category->id}}"
                                         class="collapse"
                                         data-parent="#mobile_accordion">
                                        <div class="" style="background-color: #273352">
                                            <ul>
                                                @foreach($category->products as $product)
                                                    @if($category->title !== $product->title)
                                                        <li style="color:white; list-style-type: circle">
                                                            <span itemprop="url"
                                                               onclick="window.location.replace('{{route('welcome').'/'.$product->slug['slug']}}')">
                                                                {{$product->title}}
                                                            </span>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            @if(count($market->products) > 0)
                                <ul>
                                    @foreach($market->products as $product)
                                            <li itemprop="name"
                                                style="color:white; list-style-type: circle">
                                                <span itemprop="url"
                                                   onclick="window.location.replace('{{route('welcome').'/'.$product->slug['slug']}}')">
                                                    {{$product->title}}
                                                </span>
                                            </li>
                                    @endforeach
                                </ul>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-4 d-none d-lg-block d-md-block base-border base-br p-3 base-color" id="sidebar_licence">
        @include('includes.banners.licnece')
    </div>
{{--    <div class="mt-4 d-none d-lg-block d-md-block base-border base-br p-3">--}}
{{--        <div class="text-center">--}}
{{--            <span class="h5 base-color strong">--}}
{{--                 Как мы работаем--}}
{{--            </span>--}}
{{--        </div>--}}
{{--        <ul class="mt-3 mb-3">--}}
{{--            <li class="mt-2">--}}
{{--                <div class="d-table">--}}
{{--                    <i class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>--}}
{{--                    <span class="nav-text d-table-cell align-middle pl-2 fs-14">--}}
{{--                        <i>Заявка по телефону или через сайт</i>--}}
{{--                    </span>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="mt-2">--}}
{{--                <div class="d-table">--}}
{{--                    <i class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>--}}
{{--                    <span class="nav-text d-table-cell align-middle pl-2 fs-14">--}}
{{--                        <i>Обговариваем условия и цену на ваш объем</i>--}}
{{--                    </span>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="mt-2">--}}
{{--                <div class="d-table">--}}
{{--                    <i class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>--}}
{{--                    <span class="nav-text d-table-cell align-middle pl-2 fs-14">--}}
{{--                        <i>Приезжают наши сотрудники и техника</i>--}}
{{--                    </span>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="mt-2">--}}
{{--                <div class="d-table">--}}
{{--                    <i class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>--}}
{{--                    <span class="nav-text d-table-cell align-middle pl-2 fs-14">--}}
{{--                        <i>Демонтаж, погрузка, вывоз металла</i>--}}
{{--                    </span>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="mt-2">--}}
{{--                <div class="d-table">--}}
{{--                    <i class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>--}}
{{--                    <span class="nav-text d-table-cell align-middle pl-2 fs-14">--}}
{{--                        <i>Взвешиваем лом и оплачиваем на месте</i>--}}
{{--                    </span>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--    <div class="mt-4 d-none d-lg-block d-md-block base-border base-br p-3 text-center">--}}
{{--        <div class="text-center">--}}
{{--            <span class="h5 base-color strong">--}}
{{--                Гарантии--}}
{{--            </span>--}}
{{--        </div>--}}
{{--        <p class="text-dark fs-13">--}}
{{--            <i>--}}
{{--                Главная ценность нашей компании - это репутация. Обращась в наши пункты приема, Вы можете быть уверенны,--}}
{{--                что сдадите металл без обмана. Мы строим долгосрочные отношения с нашими клиентами. Выбрав нас однажды,--}}
{{--                Вы более не захотите искать другой пункт скупки металла.--}}
{{--            </i>--}}
{{--        </p>--}}
{{--    </div>--}}
{{--    <div class="mt-4 d-none d-lg-block d-md-block base-border base-br p-3 text-center">--}}
{{--        <div class="text-center">--}}
{{--            <span class="h5 base-color strong">--}}
{{--                О нас--}}
{{--            </span>--}}
{{--        </div>--}}
{{--        <div class="mt-4">--}}
{{--            <ul class="d-block">--}}
{{--                <li class="mt-3">--}}
{{--                    <a class="text-dark" href="{{route('news')}}">--}}
{{--                        <div class="d-table">--}}
{{--                            <i class="fas fa-newspaper fa-lg base-color mt-1 d-table-cell form-b-icon align-middle about-us-icon"></i>--}}
{{--                            <span class="nav-text d-table-cell align-middle fs-16">Новости</span>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="mt-3">--}}
{{--                    <a href="#" class="text-dark">--}}
{{--                        <div class="d-table">--}}
{{--                            <i class="fas fa-briefcase fa-lg base-color mt-1 d-table-cell form-b-icon align-middle about-us-icon"></i>--}}
{{--                            <span class="nav-text d-table-cell align-middle fs-16">Наши работы</span>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="mt-3">--}}
{{--                    <a href="#" class="text-dark">--}}
{{--                        <div class="d-table">--}}
{{--                            <i class="fas fa-handshake fa-lg base-color mt-1 d-table-cell form-b-icon align-middle about-us-icon"></i>--}}
{{--                            <span class="nav-text d-table-cell align-middle fs-16">Сотрудничество</span>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="mt-3">--}}
{{--                    <a href="#" class="text-dark">--}}
{{--                        <div class="d-table">--}}
{{--                            <i class="fas fa-paste fa-lg base-color mt-1 d-table-cell form-b-icon align-middle about-us-icon"></i>--}}
{{--                            <span class="nav-text d-table-cell align-middle fs-16">Вакансии</span>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="mt-3">--}}
{{--                    <a href="#" class="text-dark">--}}
{{--                        <div class="d-table">--}}
{{--                            <i class="fas fa-envelope fa-lg base-color mt-1 d-table-cell form-b-icon align-middle"></i>--}}
{{--                            <span class="nav-text d-table-cell align-middle pl-2 fs-16">Письмо директору</span>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
