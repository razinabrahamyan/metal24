<div class="col-12 col-lg-3 col-xl-3" itemscope="" itemtype="https://schema.org/SiteNavigationElement">
    <div id="accordion" style="background-color: #414e70" class="base-br overflow-hidden">
        @foreach($markets as $market)
            <div
                @if(count($market->categories) < 1) class="collapse_elem" @endif

            >
                <div
                    style="background-color: #556590"
                    class="card-header"
                    id="heading{{$market->id}}"
                    @if(count($market->categories) < 1) data-toggle="collapse" @endif
                    data-target="#collapse{{$market->id}}"
                    aria-expanded="true"
                    aria-controls="collapse{{$market->id}}"
                >
                    <div class="d-flex justify-content-between">
                        <a itemprop="url" href="{{route('welcome').'/'.$market->slug['slug']}}">
                                <span itemprop="name" class="fs-15 mb-0 secondary-hover-color" style="font-size: 15px; color: white">
                                    {{$market->title}}
                                </span>
                        </a>
                    </div>

                </div>

                <div
                    id="collapse{{$market->id}}"
                    class="collapse @if(count($market->categories) > 0) show @endif "
{{--                                    data-parent="#accordion"--}}
                >
                    <div>
                        @if(count($market->categories) > 0)
                            @foreach($market->categories as $category)
                                <div class="collapse_child"
                                     data-target="#collapse{{$market->id}}{{$category->id}}" aria-expanded="true"
                                     aria-controls="collapse{{$market->id}}{{$category->id}}">
                                    <div style="background-color: #414e70 " class="card-header"
{{--                                         id="heading{{$market->title}}{{$category->id}}"--}}
                                         itemprop="name">
                                        <div class="d-flex justify-content-between">
                                        <a itemprop="url" href="{{route('welcome').'/'.$category->slug['slug']}}">
                                                <span class="fs-14 mb-0 secondary-hover-color" style="font-size: 15px; color: white">
                                                    {{$category->title}}
                                                </span>
                                        </a>
                                        </div>
                                    </div>
                                    <div itemprop="name"
                                         id="collapse{{$market->id}}{{$category->id}}"
                                         class="collapse"
                                        {{--                                    data-parent="#accordion"--}}>
                                        <div class="" style="background-color: #273352">
                                            <ul>
                                                @foreach($category->products as $product)
                                                    @if($category->title !== $product->title)
                                                        <li style="color:white; list-style-type: circle" class="mt-2">
                                                            <a
                                                                    itemprop="url"
                                                                    href="{{route('welcome').'/'.$product->slug['slug']}}">
                                                                {{$product->title}}
                                                            </a>
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
                                            style="color:white;
                                            list-style-type: circle"
                                            class="mt-2"
                                        >
                                            <a
                                                itemprop="url"
                                                href="{{route('welcome').'/'.$product->slug['slug']}}"
                                            >
                                                {{$product->title}}
                                            </a>
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

    <div class="content mt-4 d-none d-lg-block d-md-block base-border base-br p-3">
        <div class="text-center">
            <span class="h5 base-color strong">
                Как мы работаем
            </span>
        </div>
        <ul class="mt-3 mb-3">
            <li class="mt-2">
                <div class="d-table">
                    <i class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                    <span class="nav-text d-table-cell align-middle pl-2 fs-14">
                        Заявка по телефону или через сайт
                    </span>
                </div>
            </li>
            <li class="mt-2">
                <div class="d-table">
                    <i class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                    <span class="nav-text d-table-cell align-middle pl-2 fs-14">
                        Обговариваем условия и цену на ваш объем
                    </span>
                </div>
            </li>
            <li class="mt-2">
                <div class="d-table">
                    <i class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                    <span class="nav-text d-table-cell align-middle pl-2 fs-14">
                        Приезжают наши сотрудники и техника
                    </span>
                </div>
            </li>
            <li class="mt-2">
                <div class="d-table">
                    <i class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                    <span class="nav-text d-table-cell align-middle pl-2 fs-14">
                        Демонтаж, погрузка, вывоз металла
                    </span>
                </div>
            </li>
            <li class="mt-2">
                <div class="d-table">
                    <i class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                    <span class="nav-text d-table-cell align-middle pl-2 fs-14">
                        Взвешиваем и оплачиваем на месте
                    </span>
                </div>
            </li>
        </ul>
    </div>
    <div class="content mt-4 d-none d-lg-block d-md-block base-border base-br p-3 text-center">
        <div class="text-center">
            <span class="h5 base-color strong">
            Гарантии
            </span>
        </div>
        <span class="fs-13">
            Главный приоритет компании это максимально упростить жизнь нашему клиенту.
            Мы имеем огромный опыт работы и отличные отзывы как от наших клиентов так и от партнеров которые работую с нами на постоянной основе.
            Мы соответсвуем всем ГОСТам и имеем пломбировнные весы и при небходимости мы предоставим все небходимые вам документы.
        </span>
    </div>
{{--    <div class="content mt-4 d-none d-lg-block d-md-block base-border base-br p-3 text-center">--}}
{{--        <h4 class="base-color">Отзывы</h4>--}}
{{--        <p>Уже сдавали металлолом в наших пунктах приема?<br>Оставьте отзыв</p>--}}
{{--        <div class="base-border overflow-hidden w-max-c m-auto base-br">--}}
{{--            <iframe title="Отзывы" rel="nofollow" class="lazy" data-src="https://yandex.ru/sprav/widget/rating-badge/53451651541"--}}
{{--                    src="https://yandex.ru/sprav/widget/rating-badge/53451651541" width="150" height="50" frameborder="0">--}}
{{--            </iframe>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="mt-4 d-none d-lg-block d-md-block base-border base-br p-3 base-color" id="sidebar_licence">
        @include('includes.banners.licnece')
    </div>
    <div id="fixed_block" class="mt-4 d-none d-lg-block d-md-block base-border base-br p-3 text-center">
        <div class="text-center">
            <span class="h5 base-color strong">
                О Нас
            </span>
        </div>
        <div class="mt-4">
            <ul class="d-block">
                <li class="mt-3">
                    <a class="text-dark" href="{{route('news')}}">
                        <div class="d-table">
                            <i class="fas fa-newspaper fa-lg base-color mt-1 d-table-cell form-b-icon align-middle about-us-icon"></i>
                            <span class="nav-text d-table-cell align-middle fs-16">Новости</span>
                        </div>
                    </a>
                </li>
                <li class="mt-3">
                    <a href="{{route('nashi.raboti')}}" class="text-dark">
                        <div class="d-table">
                            <i class="fas fa-briefcase fa-lg base-color mt-1 d-table-cell form-b-icon align-middle about-us-icon"></i>
                            <span class="nav-text d-table-cell align-middle fs-16">Наши работы</span>
                        </div>
                    </a>
                </li>
                <li class="mt-3">
                    <a href="{{route('sotrudnichestvo')}}" class="text-dark">
                        <div class="d-table">
                            <i class="fas fa-handshake fa-lg base-color mt-1 d-table-cell form-b-icon align-middle about-us-icon"></i>
                            <span class="nav-text d-table-cell align-middle fs-16">Сотрудничество</span>
                        </div>
                    </a>
                </li>
                <li class="mt-3">
                    <a href="{{route('vakansii')}}" class="text-dark">
                        <div class="d-table">
                            <i class="fas fa-paste fa-lg base-color mt-1 d-table-cell form-b-icon align-middle about-us-icon"></i>
                            <span class="nav-text d-table-cell align-middle fs-16">Вакансии</span>
                        </div>
                    </a>
                </li>
{{--                <li class="mt-3">--}}
{{--                    <a href="#" class="text-dark">--}}
{{--                        <div class="d-table">--}}
{{--                            <i class="fas fa-envelope fa-lg base-color mt-1 d-table-cell form-b-icon align-middle"></i>--}}
{{--                            <span class="nav-text d-table-cell align-middle pl-2 fs-16">Письмо директору</span>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>
        </div>
    </div>
</div>
