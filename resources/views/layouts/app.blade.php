<!DOCTYPE html>
<html lang="ru">

<head>
    <!--  Base metas  -->
    <meta name="yandex-verification" content="ec502d8233fe0be3"/>
    <meta name="google-site-verification" content="f5uRNYrfqXDDekWCbDjZkZE3cQzOGp8E042OUlSozVE"/>
    <meta name='wmail-verification' content='6751aa78527b39e08b4c8c28d670fc76'/>
    <meta name="facebook-domain-verification" content="bpkl2r3namu08yltsvaakw6rn6juif" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#ffffff">
    @if(isset($title))
        <meta name="title" content="{{$title}}">
    @else
        <meta name="title" content="@yield('meta_title')">
    @endif
    <meta name="keywords" content="{{\App\Classes\BladeHandler\MetaHelper::keywords()}}">
    @if(\App\Classes\BladeHandler\MetaHelper::getDescription())
        <meta name="description" content="{{\App\Classes\BladeHandler\MetaHelper::getDescription()}}">
    @elseif(isset($h1) || isset($title))
        <meta name="description" content="{{$h1 ?? $title}}.Приём и вывоз цветного и чёрного металла в Москве и МО">
    @else
        <meta name="description"
              content="@yield('meta_description').Приём и вывоз цветного и чёрного металла в Москве и МО.">
    @endif
    <meta name="robots" content="all"/>
    <meta name="robots" content="index,follow">
    <!--  Base metas  -->

    <!--  Open Graph Metas -->
    @if(isset($title))
        <meta property="og:title" content="{{$title}}"/>
    @else
        <meta property="og:title" content="@yield('meta_title')"/>
    @endif
    <meta property="og:locale" content="ru_RU">
    <meta property="og:type" content="website">
    @if(isset($h1) || isset($title))
        <meta property="og:description"
              content="{{$h1 ?? $title}}.Приём и вывоз цветного и чёрного металла в Москве и МО">
    @else
        <meta property="og:description"
              content="@yield('meta_description').Приём и вывоз цветного и чёрного металла в Москве и МО">
    @endif

    @if(!empty(request()->route()) && file_exists(public_path('img/open-graph/'.request()->route()->uri.'.webp')))
        <meta property="og:image" content="{{asset('img/open-graph/'.request()->route()->uri.'.webp')}}">
        <meta property="og:image:secure_url" content="{{asset('img/open-graph/'.request()->route()->uri.'.webp')}}">
        <meta property="og:image:url" content="{{asset('img/open-graph/'.request()->route()->uri.'.webp')}}">
        <meta property="og:image:type" content="image/webp">
        <meta property="og:image:width" content="500"/>
        <meta property="og:image:height" content="500"/>
        <meta property="vk:image" content="{{asset('img/open-graph/'.request()->route()->uri.'.webp')}}"/>
    @else
        <meta property="og:image" content="{{asset('img/core-img/og-base.jpg')}}">
        <meta property="og:image:secure_url" content="{{asset('img/core-img/og-base.jpg')}}">
        <meta property="og:image:url" content="{{asset('img/core-img/og-base.jpg')}}">
        <meta property="og:image:type" content="image/jpg">
        <meta property="og:image:width" content="500"/>
        <meta property="og:image:height" content="500"/>
        <meta property="vk:image" content="{{asset('img/core-img/og-base.jpg')}}"/>
    @endif

    <meta name="twitter:card" content="summary">
    @if(isset($h1) || isset($title))
        <meta name="twitter:description"
              content="{{$h1 ?? $title}}.Приём и вывоз цветного и чёрного металла в Москве и МО">
    @else
        <meta name="twitter:description"
              content="@yield('meta_description').Приём и вывоз цветного и чёрного металла в Москве и МО">
    @endif
    @if(!empty($h1))
        <meta name="twitter:title" content="{{$h1}}">
    @elseif(isset($title))
        <meta name="twitter:title" content="{{$title}}">
    @else
        <meta name="twitter:title" content="@yield('meta_title')">
    @endif
    <meta name="twitter:domain" content="lmk-moscow.ru">
    <meta name="twitter:url" content="https://lmk-moscow.ru/">
    @if(!empty(request()->route()) && file_exists(public_path('img/open-graph/'.request()->route()->uri.'.webp')))
        <meta name="twitter:image" content="{{asset('img/open-graph/'.request()->route()->uri.'.webp')}}">
    @else
        <meta name="twitter:image" content="{{asset('img/core-img/og-base.jpg')}}">
    @endif
    <meta name="twitter:site" content="@LmkMoscow">

    <meta property="fb:app_id" content="793942314646632">
    <meta property="fb:app:id" content="793942314646632">
    <meta property="og:url" content="{{url()->full()}}">
    <meta property="og:site_name" content="Прием и вывоз чёрного и цветного металлолома в Москве и МО">
    <!--  Open Graph Metas -->

    <!-- Title -->
    @if(isset($title))
        <title>{{$title}}</title>
    @else
        <title>@yield('title')</title>
    @endif

    <link rel="canonical" href="{{url()->full()}}">
    <link rel="manifest" href="{{asset('manifest.json')}}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" href="{{asset('img/meta/apple-touch-icon.png')}}">
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('favicon-32x32.png')}}" type="image/png">
    <link rel="icon" href="{{asset('maskable_icon_x128.png')}}" type="image/png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/template/style.css?v=6')}}">
    <link rel="stylesheet" href="{{asset('user_assets/css/style.css?v=26')}}">
    <link rel="preload" as="style" href="{{asset('css/fonts/font-awesome/css/font-awesome.min.css')}}"
          onload="this.rel='stylesheet'">
    <link rel="preload" as="style" onload="this.rel='stylesheet'"
          href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    @stack('styles')
<!-- Global site tag (gtag.js) - Google Analytics -->
    {{--    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R9QG39ZEM4"></script>--}}
<!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '295655982539001');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=295655982539001&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-202068920-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        // gtag('config', 'G-R9QG39ZEM4');
        gtag('config', 'UA-202068920-1');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5TWR24W');</script>
    <!-- End Google Tag Manager -->
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(82890373, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
{{--    <noscript><div><img src="https://mc.yandex.ru/watch/82890373" style="position:absolute; left:-9999px;" alt="" /></div></noscript>--}}
<!-- /Yandex.Metrika counter -->
{{--    <script src="//code-ya.jivosite.com/widget/vcGc798V6h" async></script>--}}
</head>

<body style="margin: 0 auto !important;">
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5TWR24W"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="preloader-content">
        <div class="loader-container">
            <div class="loader-logo">
                <div class="loader-circle"></div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Navbar Area -->
    <div id="sticker-sticky-wrapper" class="sticky-wrapper" style="height: 70px;">
        <div class="bueno-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">

                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="buenoNav">
                        <!-- Toggler -->
                        <a itemprop="url" href="{{route('welcome')}}" id="logo">
                            <img loading="lazy" width="298" height="55" id="long_logo" title="Логотип с текстом"
                                 src="{{asset('img/core-img/logo_long.png')}}" alt="Логотип с текстом">
                            <img loading="lazy" width="55" height="55" id="simple_logo"
                                 src="{{asset('img/core-img/logo.png')}}" alt="Логотип" title="Логотип">
                        </a>
                        <div id="phones-scrolled-block">
                            @if($mobile_phone_status == 'up')
                                <div class="col-12 mb-2">
                                    <i class="fas fa-phone mr-1 contacts-sm-icons rounded-circle text-light mr-2"></i>
                                    <a href="tel:+79254333556" class="color-black">+7 (925) 433-35-56</a>
                                </div>
                            @endif
                            <div class="col-12">
                                <i class="fas fa-phone contacts-sm-icons rounded-circle text-light mr-2"></i>
                                <a href="tel:+74999384156" class="color-black">+7 (499) 938-41-56</a>
                            </div>
                        </div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <a href="{{route('welcome').'/czenyi-na-metall'}}" class="black fp-mobile-start">
                            <span class="top_price_btn_fix">
                                цена <br> лома
                            </span>
                            </a>
{{--                            <span class="navbarToggler"><span></span><span></span><span></span></span>--}}
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="base-br">
                                        <a itemprop="url" href="{{route('punkt-priema-metalla')}}">
                                            Пункты приема металла
                                        </a>
                                    </li>
                                    <li class="base-br">
                                        <a itemprop="url" href="{{route('vyivoz-metalloloma')}}">
                                            Вывоз и прием металлолома
                                        </a>
                                    </li>
                                    <li class="base-br">
                                        <a itemprop="url" href="{{route('demontazh')}}">
                                            Демонтаж металлоконструкций
                                        </a>
                                    </li>
                                    <li class="base-br">
                                        <a itemprop="url" href="{{route('vyiezdnoj-priyomnyij-punkt')}}">
                                            Выездной приемный пункт
                                        </a>
                                    </li>
                                </ul>
                                <template v-if="show">
                                    <div class="mt-2"
                                         id="show_menu_mobile_resize"> @include('includes.mobile.sidebar') </div>
                                </template>
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

<!-- ##### Search Area Start ##### -->
<div class="bueno-search-area pt-3 pb-3 bg-img">
    <div class="container row m-auto">
        <div class="d-flex col-12 row m-auto p-0">
            <div class="col-lg-4 col-md-6 col-xs-6 p-0 mt-3 mt-lg-0 mt-md-0 order-2 order-sm-0 base-border base-br">
                <div class="col-12 p-3 h-100 base-br bg-white-transparent">
                    @include('includes.contacts_elements')
                </div>
            </div>
            <div
                class="col-lg-5 col-md-6 col-xs-6 d-block d-md-none d-lg-block pr-0 pl-0 pr-lg-3 pl-lg-3 order-1 order-sm-1">
                <div class="row col-12 h-btn-menu m-auto pr-0 pl-0 pr-lg-3 pl-lg-3">
                    <a itemprop="url" href="{{route('czenyi-na-metall')}}"
                       class="col-6 p-0 pr-1 pb-1 text-decoration-none text-light">
                        <div
                            class="row col-12 p-0 base-br h-100 m-auto text-center h-btn-menu-item bg-base-transparent-color">
                            <div class="col-12 p-3 p-lg-0 p-md-0 h-min-content align-self-center">
                                <i class="fas fa-hand-holding-usd fa-3x"></i>
                                <p class="h5 mt-2">Цены</p>
                            </div>
                        </div>
                    </a>
                    <a itemprop="url" href="{{route('kak-sdat-metall')}}"
                       class="col-6 p-0 pl-1 pb-1 text-decoration-none text-light">
                        <div
                            class="row col-12 p-0 base-br h-100 m-auto text-center h-btn-menu-item bg-base-transparent-color">
                            <div class="col-12 p-3 p-lg-0 p-md-0 h-min-content align-self-center">
                                <i class="far fa-question-circle fa-3x"></i>
                                <p class="h5 mt-2">Как сдать</p>
                            </div>
                        </div>
                    </a>
                    <a itemprop="url" href="{{route('uslugi')}}"
                       class="col-6 p-0 pt-1 pr-1 text-decoration-none text-light">
                        <div
                            class="row col-12 p-0 base-br h-100 m-auto text-center h-btn-menu-item bg-base-transparent-color">
                            <div class="col-12 p-3 p-lg-0 p-md-0 h-min-content align-self-center">
                                <i class="far fa-handshake fa-3x"></i>
                                <p class="h5 mt-2">Услуги</p>
                            </div>
                        </div>
                    </a>
                    <a itemprop="url" href="{{route('contacts')}}"
                       class="col-6 p-0 pt-1 pl-1 text-decoration-none text-light">
                        <div
                            class="row col-12 p-0 base-br h-100 m-auto text-center h-btn-menu-item bg-base-transparent-color">
                            <div class="col-12 p-3 p-lg-0 p-md-0 h-min-content align-self-center">
                                <i class="far fa-address-card fa-3x"></i>
                                <p class="h5 mt-2">Контакты</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-6 p-0 pl-1 mb-3 mb-lg-0 mb-md-0 order-0 order-sm-2">
                <div class="h-100  base-br base-border overflow-hidden">
                    <div class="text-center pt-2 pb-2 bg-base-transparent-color">
                        <span class="text-light">Цена за 1кг</span>
                    </div>
                    <div class="container bg-white-transparent h-100 pt-2 pb-2">
                        <div class="text-center mb-1 fs-13">
                            <b>Расценки актуальны на сегодня</b>
                        </div>
                        @foreach(\App\Classes\BladeHandler\StaticQueries::actualPrices() as $actualPrice)
                            <div onclick="window.location.replace('{{$actualPrice->href}}')"
                                 class="head-prices-row secondary-hover-color color-black">
                                <span class="row-name">{{$actualPrice->title}}</span>
                                <span class="row-price">{{$actualPrice->price}}</span>
                            </div>
                        @endforeach
                        <div class="head-prices-row">
                            <span class="row-name">Бесплатный вывоз</span>
                            <span class="row-price">от 1000 кг</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 row m-auto mb-3 p-0">
            <div class="col-lg-4 col-md-6 col-xs-6 p-0 pr-1">
                <div class="col-12 row m-0 mt-3 p-0">
                    <div class="col-6 b-btn-secondary-transparent float-left pl-0">
                        <a href="#" id="top_call_btn" class="btn text-dark base-br lmk_scb_open_call">Заказать
                            звонок</a>
                    </div>
                    <div class="col-6 float-right b-btn-base-transparent pr-0 m-0">
                        <a itemprop="url" href="{{route('punkt-priema-metalla')}}" class="btn float-right base-br">
                            Где сдать
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-xs-6 d-none d-md-none d-lg-block">

            </div>
            <div class="col-lg-3 col-md-6 col-xs-6 p-0 pl-1">
                <div class="col-12 b-btn-base-transparent p-0">
                    <a itemprop="url" href="{{route('czenyi-na-metall')}}"
                       class="btn show-all-prices w-100 text-light  base-br">
                        Показать все цены
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@if(!empty($marquee))
    <div class="marquee" id="jumping_block">
        <div class="track">
            <div class="content d-inline-block">
                @foreach($marquee as $price)
                    <span itemprop="url" class="d-inline-block mr-3 ml-3 text-light"
                          onclick="window.location.href='{{$price->href}}'">
                        <span class="strong">
                            <span class="secondary-hover-color">
                                {{$price->title}}
                            </span>
                            <span class="@if($price->direction == 'up') text-success @else text-danger @endif">
                                до {{$price->price}} @if($price->direction == 'up') ▲ @else ▼ @endif
                            </span>
                        </span>
                    </span>
                @endforeach
            </div>
        </div>
    </div>
@endif
<!-- ##### Search Area End ##### -->

<!-- ##### Post Details Area Start ##### -->
<section class="mt-4 mt-lg-5 mt-md-5">
    <div id="base_wrapper" class="container">
        <div class="row justify-content-center">
            <!-- Post Details Content Area -->
            <div class="d-contents" id="toggleSidebar" v-if="show">
                @include('includes.sidebar')
            </div>
            @yield('content')
        </div>
    </div>
    <div id="footer_form_wrapper" class="mt-5">
        <div class="form_block container">
            <form id="foot_form_block" @submit="sendForm">
                <div id="footer_form_block_wrapper" class="row text-center justify-content-lg-between col-12 p-0 m-0">
                    <div class="col-xs-12 col-sm-12 col-lg-5 mb-4">
                        <div id="foot-call-us"
                             class="row text-center align-items-center justify-content-center align-middle">
                            <div class="text-light text-center h4">
                                Хотите сдать металлолом?
                            </div>
                            <div class="text-light text-center h6">
                                Оставьте свой телефон или свяжитесь по номеру.
                            </div>
                            @if($mobile_phone_status == 'up')
                                <a href="tel:79254333556" class="col-12 secondary-color h4">
                                    +7 (925) 433-35-56
                                </a>
                            @endif
                            <a href="tel:74999384156" class="col-12 secondary-color h4">
                                +7 (499) 938-41-56
                            </a>
                            <div class="form-group b-btn-secondary">
                                <a href="#" class="btn text-dark base-br col-12 lmk_scb_open_call">
                                    Оставить свой номер
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="foot_form" class="col-xs-12 col-sm-12 col-lg-5 mb-4">
                        <div class="text-light text-center h5">
                            Закажите обратный звонок бесплатно!
                        </div>
                        <div class="text-light text-center mb-3">
                            Наши специалисты расчитают цену
                        </div>
                        <div id="form-footer-callback" class="m-auto mt-2">
                            <div class="form-group text-left">
                                <input type="text" class="form-control base-br" name="full_name" placeholder="Ф.И.О."
                                       required>
                            </div>
                            <div class="form-group text-left">
                                <input type="text" class="form-control base-br" name="phone" placeholder="Телефон"
                                       minlength="15" required>
                            </div>
                            <div class="form-group b-btn-secondary">
                                <button type="submit" class="btn text-dark base-br col-6">Узнать стоимость</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- ##### Post Details Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer id="footer-area" class="d-flex">
    <div class="container">
        <div class="align-items-center justify-content-center">
            <div class="container mb-5 mt-5 d-none d-lg-block d-xl-block">
                <div class="text-center mb-4">
                    <h2 class="text-light h5">
                        Пункты приема "{{\Illuminate\Support\Facades\Config::get('app.name_ru')}}"
                    </h2>
                </div>
                <div class="d-flex row text-center align-items-center justify-content-center">
                    <div id="ymap_block" class="col-4">
                        <div class="list no-scroll">
                            <div class="item" v-for="point in points" @click="moveToMapPoint(point.lat,point.lng)">
                                <div class="address d-table">
                                    <div class="d-table-cell align-middle pr-2">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="d-table-cell address-text text-left">
                                        @{{ point.address }}
                                    </div>
                                    <div class="d-table-cell align-middle pl-2">
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div id="ymap"></div>
                    </div>
                </div>
            </div>
            <div class="container mt-5 align-items-center justify-content-center">
                <div class="text-center mb-4">
                    <h2 class="text-light h5">Меню</h2>
                </div>
                <div class="row col-12 col-md-8 col-lg-8 m-auto p-0">
                    <div class="col-6 col-md-4 col-lg-4  p-0">
                        <div class="f-menu-li pr-1 pl-1">
                            <a itemprop="url" href="{{route('uslugi-demontazha')}}" class="secondary-hover-color">
                                <span itemprop="name">Демонтаж</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-4  p-0">
                        <div class="f-menu-li pr-1 pl-1">
                            <a itemprop="url" href="{{route('news')}}" class="secondary-hover-color">
                                <span itemprop="name">Новости</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-4  p-0">
                        <div class="f-menu-li pr-1 pl-1">
                            <a itemprop="url" href="{{route('chto-mozhno-sdat-na-metallolom')}}"
                               class="secondary-hover-color">
                                <span itemprop="name">Какой металлолом можно сдать</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-4  p-0">
                        <div class="f-menu-li pr-1 pl-1">
                            <a itemprop="url" href="{{route('demontazh-goroda')}}" class="secondary-hover-color">
                                <span itemprop="name">В каких городах мы делаем демонтаж</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-4  p-0">
                        <div class="f-menu-li pr-1 pl-1">
                            <a itemprop="url" href="{{route('gde-mozhno-sdat-metallolom-s-vyivozom')}}"
                               class="secondary-hover-color">
                                <span itemprop="name">Где можно сдать металлолом с вывозом</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5 align-items-center justify-content-center">
                <div class="text-center mb-4">
                    <div class="text-center">
                        <span class="h5 text-light">O нас</span>
                    </div>
                </div>
                <div class="d-flex row text-center align-items-center justify-content-center">
                    <div class="col-5 col-lg-2 col-md-3 mt-3">
                        <a itemprop="url" class="text-white secondary-hover-color" href="{{route('news')}}">
                            <div class="text-center">
                                <i class="fas fa-newspaper fa-2x"></i>
                            </div>
                            <div itemprop="name" class="text-center">
                                <b class="">Нoвости</b>
                            </div>
                        </a>
                    </div>
                    <div class="col-5 col-lg-2 col-md-3 mt-3">
                        <a itemprop="url" class="text-white secondary-hover-color" href="{{route('nashi.raboti')}}">
                            <div class="text-center">
                                <i class="fas fa-briefcase fa-2x"></i>
                            </div>
                            <div itemprop="name" class="text-center">
                                <b>Наши рабoты</b>
                            </div>
                        </a>
                    </div>
                    <div class="col-5 col-lg-2 col-md-3 mt-3">
                        <a itemprop="url" class="text-white secondary-hover-color" href="{{route('sotrudnichestvo')}}">
                            <div class="text-center">
                                <i class="fas fa-handshake fa-2x"></i>
                            </div>
                            <div itemprop="name" class="text-center">
                                <b>Сотрудничествo</b>
                            </div>
                        </a>
                    </div>
                    <div class="col-5 col-lg-2 col-md-3 mt-3">
                        <a itemprop="url" class="text-white secondary-hover-color" href="{{route('vakansii')}}">
                            <div class="text-center">
                                <i class="fas fa-paste fa-2x"></i>
                            </div>
                            <div itemprop="name" class="text-center">
                                <b>Ваканcии</b>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container mt-5 align-items-center justify-content-center d-none d-lg-block d-xl-block">
                <div class="text-center mb-4">
                    <h2 class="text-light h5">Наши партнеры</h2>
                </div>
                <div class="col-12 p-0 text-center">
                    <img class="partner_img" loading="lazy" alt="ДСК" title="ДСК"
                         src="{{asset('img/partners/dsk.webp')}}">
                    <img class="partner_img" loading="lazy" alt="ПИК" title="ПИК"
                         src="{{asset('img/partners/pik.webp')}}">
                    <img class="partner_img" loading="lazy" alt="Renaissance" title="Renaissance"
                         src="{{asset('img/partners/renessans.webp')}}">
                    <img class="partner_img" loading="lazy" alt="Рочтех" title="Рочтех"
                         src="{{asset('img/partners/rostex.webp')}}">
                    <img class="partner_img" loading="lazy" alt="Северсталь" title="Северсталь"
                         src="{{asset('img/partners/serverstal.webp')}}">
                    <img class="partner_img" loading="lazy" alt="Внуково" title="Внуково"
                         src="{{asset('img/partners/vnukovo.webp')}}">
                    <img class="partner_img" loading="lazy" alt="Водонакал" title="Водонакал"
                         src="{{asset('img/partners/vodokanal.webp')}}">
                    <img class="partner_img" loading="lazy" alt="Волма" title="Волма"
                         src="{{asset('img/partners/volma.webp')}}">
                    <img class="partner_img" loading="lazy" alt="X5" title="X5"
                         src="{{asset('img/partners/x5.webp')}}">
                    <img class="partner_img" loading="lazy" alt="Звезда" title="Звезда"
                         src="{{asset('img/partners/zvezda.webp')}}">
                </div>
                {{--                <div class="text-center mt-4">--}}
                {{--                    <span class="h5 text-light">--}}
                {{--                        Наши бизнес-партнеры--}}
                {{--                    </span>--}}
                {{--                </div>--}}
                {{--                <div class="col-12 p-0 text-center">--}}
                {{--                    <a href="#" class="ml-3 mr-3">--}}
                {{--                        <img class="partner_img grayscale h-filter-unset" loading="lazy" alt="Металлолом1"--}}
                {{--                             title=alt="Металлолом1" src="{{asset('img/partners/metallolom1.webp')}}">--}}
                {{--                    </a>--}}
                {{--                    <a href="#" class="ml-3 mr-3">--}}
                {{--                        <img class="partner_img grayscale h-filter-unset" loading="lazy" alt="Ломикс" title=alt="Ломикс"--}}
                {{--                             src="{{asset('img/partners/lomix.webp')}}">--}}
                {{--                    </a>--}}
                {{--                    <a href="#" class="ml-3 mr-3">--}}
                {{--                        <img class="partner_img grayscale h-filter-unset" loading="lazy" alt="Сагамет"--}}
                {{--                             title=alt="Сагамет" src="{{asset('img/partners/sagamet.webp')}}">--}}
                {{--                    </a>--}}
                {{--                    <a href="#" class="ml-3 mr-3">--}}
                {{--                        <img class="partner_img grayscale h-filter-unset" loading="lazy" alt="МСК-Демонтаж"--}}
                {{--                             title="МСК-Демонтаж" src="{{asset('img/partners/msk-demontaz.webp')}}">--}}
                {{--                    </a>--}}
                {{--                </div>--}}
                <div class="text-center mt-4">
                    <span class="h5 text-light">
                        Расскажите о нас
                    </span>
                </div>
                <div class="col-12 p-0 text-center mt-2">
                    <ul class="social-network social-circle">
                        <li class="d-inline">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->full()}}" target="_blank"
                               class="icoFacebook" title="Расскажите о нас на Facebook"
                               rel="nofollow noreferrer noindex">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="d-inline">
                            <a href="https://vk.com/share.php?url={{url()->full()}}" target="_blank" class="icoVK"
                               title="Расскажите о нас в Вконтакте" rel="nofollow noreferrer noindex">
                                <i class="fab fa-vk"></i>
                            </a>
                        </li>
                        <li class="d-inline">
                            <a href="https://twitter.com/share?url={{url()->full()}}" target="_blank"
                               class="icoTweeter" title="Tweeter" rel="nofollow noreferrer noindex">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container mt-5">
                <div id="footer-info" class="col-12 p-0 m-0 mb-4 text-center text-light" rel="noindex nofollow">
                    <small> Цены и другие данные на сайте не являются публичной офертой, а позиционируются
                        исключительно, как
                        ознакомительная информация.</small>
                </div>
                <div id="footer_copyrigth"
                     class="d-flex row col-12 m-0 mb-4 p-0 align-items-center justify-content-center">
                    <div class="col-12 text-light text-center">
                        <a itemprop="url" href="{{route('site.map')}}">
                            <span itemprop="name">
                                <small class="text-white">Карта сайта</small>
                            </span>
                        </a>
                    </div>
                    <div class="col-12 text-light text-center">
                        <small>Пользовательское соглашение</small>
                    </div>
                    {{--                    <div class="text-center text-light">--}}
                    {{--                        <small>--}}
                    {{--                            Наши Бизнес-Партнеры--}}
                    {{--                            <br>--}}
                    {{--                            <a href="https://msk-demontazh.ru/" class="text-white secondary-hover-color" rel="nofollow noreferrer">--}}
                    {{--                                Msk-Demontazh.ru--}}
                    {{--                            </a> |--}}
                    {{--                            <a href="https://metallolom1.ru/" class="text-white secondary-hover-color" rel="nofollow noreferrer">--}}
                    {{--                                Metallolom1.ru--}}
                    {{--                            </a> |--}}
                    {{--                            <a href="https://lomix.ru/" class="text-white secondary-hover-color" rel="nofollow noreferrer">--}}
                    {{--                                lomix.ru--}}
                    {{--                            </a> |--}}
                    {{--                            <a href="https://sagamet.ru/" class="text-white secondary-hover-color" rel="nofollow noreferrer">--}}
                    {{--                                sagamet.ru--}}
                    {{--                            </a>--}}
                    {{--                        </small>--}}
                    {{--                    </div>--}}
                    <div class="col-12 text-light text-center">
                        <small>Copyright © «{{request()->getHttpHost()}} 2021»</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

@include('includes.mobile_menu')
@include('includes.contact_widget')
@include('includes.mobile_menu_popup')
<div id="snow"></div>
<meta itemprop="brand" content="ЛМК">
<div itemscope="" itemtype="https://schema.org/Organization">
    <meta itemprop="name" content="ЛМК">
    <link itemprop="url" href="{{request()->getSchemeAndHttpHost()}}">
    <link itemprop="logo" href="{{asset('img/core-img/logo.png')}}">
    <link itemprop="image" href="{{asset('img/core-img/logo.png')}}">
    <link itemprop="sameAs" href="https://www.facebook.com/LMKmsk">
    <link itemprop="sameAs" href="https://www.instagram.com/lmk.moscow/">
    <link itemprop="sameAs" href="https://twitter.com/LmkMoscow">
    <link itemprop="sameAs" href="https://vk.com/lmk_msk">
    @foreach($addresses as $address)
        <div itemprop="address" itemscope="" itemtype="https://schema.org/PostalAddress">
            <meta itemprop="addressCountry" content="Россия">
            <meta itemprop="addressLocality" content="Москва">
            <meta itemprop="streetAddress" content="{{$address->address}}">
        </div>
    @endforeach
    <meta itemprop="telephone" content="+7 (925) 433-35-56">
    <meta itemprop="email" content="lmk.moscow@yandex.ru">
    <meta itemprop="openingHours" content="Mo-Su">
    <meta itemprop="priceRange" content="12 руб. - 1300 руб.">
    <meta itemprop="foundingDate" content="2016">
</div>
<!--SEO-->
<script type="application/ld+json">
  {
    "@context" : "https://schema.org",
    "@type" : "Organization",
    "name" : "ЛМК",
    "url" : "{{request()->getHttpHost()}}",
    "sameAs" : [
      "https://vk.com/lmk_msk",
      "https://www.facebook.com/LMKmsk",
      "https://twitter.com/LmkMoscow"
    ]
  }



</script>
<!--SEO-->

<!--Constants-->
<script>
    const addresses = @json($addresses);
    const markets = @json($markets->pluck('categories'));
</script>
<!--Constants-->

<!--All libraries-->
{{--<script dataType="text/javascript" src="{{asset('js/template/jquery/jquery-2.2.4.min.js?v=2')}}"></script>--}}
{{--<script dataType="text/javascript" src="{{asset('js/template/bootstrap/bootstrap.min.js?v=2')}}"></script>--}}
{{--<script dataType="text/javascript" src="{{asset('js/template/vue.min.js?v=2')}}"></script>--}}
{{--<script dataType="text/javascript" src="{{asset('js/template/axios.min.js?v=2')}}"></script>--}}
<!--All libraries-->

<!--All libraries mix-->
<script dataType="text/javascript" src="{{asset('js/template/base-libraries.min.js?v=7')}}"></script>
<!--All libraries mix-->

<script dataType="text/javascript" src="{{asset('js/core.min.js?v=42')}}"></script>


<!--END SCB-->
<script type="text/javascript" charset="utf-8" async
        src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.7/bootstrap-notify.min.js"></script>
@stack('scripts')
<div id="pageMessages"></div>
</body>
</html>
