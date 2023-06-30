@extends('layouts.app')
@section('content')
    <div class="col-12 col-lg-9 col-xl-9" id="market-page" itemscope="" itemtype="https://schema.org/Article">
        <meta itemprop="genre" content="Прием металлолома">
        <div class="content index_content" itemprop="articleBody">
            <meta itemprop="datePublished" content="2021-07-14">
            <meta itemprop="dateModified" content="2021-07-14">
            <div class="d-none" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                <meta itemprop="name" content="ЛМК-Москва">
                <meta itemprop="telephone" content="+7 (925) 433-35-56">
                <meta itemprop="address" content="Каширское шоссе 23 км, вл3а">
                <span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                    <img class="itemprops" itemprop="url image" width="411" height="268" title="Главная страница"
                         src="{{asset('img/core-img/logo_long.png')}}" alt="Главная страница"/>
                    <meta itemprop="width" content="411">
                    <meta itemprop="height" content="268">
                </span>
            </div>
            <span itemprop="name" class="d-none">Прием металлолома в Москве</span>
            <a itemprop="mainEntityOfPage" href="{{request()->url()}}" style="display: none">
                <strong>Автор: ЛМК-Москва</strong>
            </a>
            <div style="display: none" itemprop="author" itemscope itemtype="http://schema.org/Person">
                <span itemprop="name">ЛМК-Москва</span>
                <span itemprop="jobTitle">Вывоз металлолома</span>
            </div>
            <h1 itemprop="headline" class="h3">Прием металлолома в Москве</h1>
            <p>
                Основным видом деятельности Компании «ЛМК-Москва» является приём металлолома под ключ. Обращаясь к нам,
                вы ощутимо экономите личное время на сдаче цветного и чёрного металлолома в наши пункты приёма лома.
                Для заказа вывоза металлолома с объекта в Москве или Подмосковье, вам достаточно оставить заявку на
                нашем сайте, после согласования всех деталей мы всё сделаем сами начиная от выполнения анализа
                химического состава сдаваемого проката и заканчивая демонтажем, резкой и доставкой металлоконструкций до
                одной из наших баз.
            </p>
            <h2 class="fs-20">
                Выкуп цветного и чёрного металлолома разной категории по дорогой стоимости
            </h2>
            <p>
                Мы успешно сотрудничаем с частными и юридическими (муниципальные, коммерческие предприятия) лицами.
                Предоставляем выгодные цены, удобные условия работы, честное взвешивание лома, по необходимости выдаём
                полный пакет соответствующей документации для отчётности.
            </p>
            <p>
                Также наша команда профильных специалистов принимает активное участие в проводимых тендерах. Накопленный
                опыт, наличие собственного автопарка спецтехники и современного оборудования позволяет в кратчайшие
                сроки производить демонтаж конструкций из металла любой сложности.
            </p>
            <div class="container">
                <div class="row">
                    <div class="card mb-3 base-border base-br">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <img src="{{asset("/img/home-images/demontaj.webp")}}" loading="lazy" itemprop="image"
                                     alt="Демонтаж металлолома" class="card-img" width="411" height="268"
                                     title="Демонтаж металлолома">
                            </div>
                            <div class="col-md-6 m-auto">
                                <div class="card-body h-min-content">
                                    <h2 class="fs-16 text-center">
                                        Демонтаж и прием металлолома
                                    </h2>
                                    <p>
                                        В работу берём заявки на демонтаж любых металлических конструкций, располагаемые
                                        на объектах Москвы и Московской области. По необходимости мастера производят
                                        предварительный выезд с целью определения предстоящего фронта работ.
                                    </p>
                                    <div
                                        class="col-12 col-lg-6 col-md-6 mx-auto text-center b-btn-base p-0 mt-3 mt-lg-0 mt-md-0">
                                        <a href="{{route('demontazh')}}" class="btn text-light base-br">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 base-border base-br">
                        <div class="row no-gutters">
                            <div class="col-md-6 m-auto order-1 order-lg-0 order-md-0">
                                <div class="card-body h-min-content">
                                    <h2 class="fs-16 text-center">
                                        Услуга вывоза металлолома
                                    </h2>
                                    <p>
                                        Свяжитесь с нами по представленным контактам, и в день обращения мы выполним
                                        вывоз любого количества металлолома. Благодаря этой услуге, вы помогаете снизить
                                        уровень загрязнения окружающей среды. Ваша территория будет эффективно и быстро
                                        очищена от металлоотходов нашей командой опытных мастеров.
                                    </p>
                                    <div
                                        class="col-12 col-lg-6 col-md-6 mx-auto text-center b-btn-base p-0 mt-3 mt-lg-0 mt-md-0">
                                        <a href="{{route('vyivoz-metalloloma')}}" class="btn text-light base-br">Посмотреть
                                            услуги</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 order-0 order-lg-1 order-md-1">
                                <img src="{{asset("/img/home-images/vivoz.webp")}}" loading="lazy"
                                     alt="Вывоза металлолома" class="card-img" width="411" height="268"
                                     title="Вывоза металлолома">
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 base-border base-br">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <img src="{{asset("/img/home-images/base.webp")}}" class="card-img" alt="Пункт приема"
                                     loading="lazy" width="411" height="268" title="Пункт приема">
                            </div>
                            <div class="col-md-6 m-auto">
                                <div class="card-body h-min-content">
                                    <h2 class="fs-16 text-center">
                                        Пункт приема металлолома
                                    </h2>
                                    <p>
                                        Наша компания владеет несколькими пунктами приёма металлолома, располагаемые в
                                        разных точках Москвы и Московской области. Предварительные расценки представлены
                                        в прайс-листе. Для уточнения точной стоимости металла, который вы желаете сдать,
                                        обратитесь к менеджеру компании.
                                    </p>
                                    <div
                                        class="col-12 col-lg-6 col-md-6 mx-auto text-center b-btn-base p-0 mt-3 mt-lg-0 mt-md-0">
                                        <a href="{{route('punkt-priema-metalla')}}" class="btn text-light base-br">Посмотреть
                                            пункты</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 p-0">
                @include('includes.forms.form_1')
            </div>
            <h2>
                Цена на металлолом в наших пунктах приема
            </h2>
            <p>
                Наши цены всегда актуальные на текущую дату. Но просим понимать, что в процессе приема металлолома
                учитываются много факторов, в зависимости от которых формируется уже конечная цена. Рекомендуем
                позвонить нам, уточнить все детали, возможно придется отправить фото Вашего лома и тогда мы можем
                назвать конечную цену, по которой сможете сдать металлолом нам.
            </p>
            <div class="about-us col-12 mt-4 mb-4">
                @include('includes.banners.about-us-banner')
            </div>
            <h3 class="fs-20">
                Что влияет на цену приема металла
            </h3>
            <div class="container p-0 mb-4">
                <div class="row">
                    <div
                        class="col-12 col-lg-6 col-md-6 d-flex flex-wrap base-br price-gr-up-block mt-3 mt-lg-0 mt-md-0">
                        <div class="col-12 p-0  price-gr-up base-border base-br p-4">
                            <div class="w-100 h-100 price-gr-up-img">
                                <h3 class="h6">Ваша цена увеличится, если:</h3>
                                <ul class="mt-3 mb-3">
                                    <li class="mt-2">
                                        <div class="d-table"><i
                                                class="far fa-check-circle fa-2x text-success mt-1 d-table-cell form-b-icon align-middle"></i>
                                            <span class="nav-text d-table-cell align-middle pl-2 font-weight-bold">
                                            Вы готовы привезти металлолом своими силами в наш пункт приема
                                        </span>
                                        </div>
                                    </li>
                                    <li class="mt-2">
                                        <div class="d-table"><i
                                                class="far fa-check-circle fa-2x text-success mt-1 d-table-cell form-b-icon align-middle"></i>
                                            <span class="nav-text d-table-cell align-middle pl-2 font-weight-bold">
                                           У вас есть больщой объем металлолома
                                        </span>
                                        </div>
                                    </li>
                                    <li class="mt-2">
                                        <div class="d-table"><i
                                                class="far fa-check-circle fa-2x text-success mt-1 d-table-cell form-b-icon align-middle"></i>
                                            <span class="nav-text d-table-cell align-middle pl-2 font-weight-bold">
                                            Ваш лом имеет малый процент засоренности
                                        </span>
                                        </div>
                                    </li>
                                    <li class="mt-2">
                                        <div class="d-table"><i
                                                class="far fa-check-circle fa-2x text-success mt-1 d-table-cell form-b-icon align-middle"></i>
                                            <span class="nav-text d-table-cell align-middle pl-2 font-weight-bold">
                                           Вы становитесь нашим постоянным клиентом
                                        </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-12 col-lg-6 col-md-6 d-flex flex-wrap base-br price-gr-down-block mt-3 mt-lg-0 mt-md-0">
                        <div class="col-12 p-0 price-gr-down base-border base-br p-4">
                            <div class="w-100 h-100 price-gr-down-img">
                                <h4 class="h6">Ваша цена уменьшится, если:</h4>
                                <ul class="mt-3 mb-3">
                                    <li class="mt-2">
                                        <div class="d-table"><i
                                                class="far fa-check-circle fa-2x text-danger mt-1 d-table-cell form-b-icon align-middle"></i>
                                            <span class="nav-text d-table-cell align-middle pl-2 font-weight-bold">
                                          Если металлолом имеет большое количество примесей и грязи
                                        </span>
                                        </div>
                                    </li>
                                    <li class="mt-2">
                                        <div class="d-table"><i
                                                class="far fa-check-circle fa-2x text-danger mt-1 d-table-cell form-b-icon align-middle"></i>
                                            <span class="nav-text d-table-cell align-middle pl-2 font-weight-bold">
                                           Большое расстояние между Вами и ближайшим пунктом приема
                                        </span>
                                        </div>
                                    </li>
                                    <li class="mt-2">
                                        <div class="d-table"><i
                                                class="far fa-check-circle fa-2x text-danger mt-1 d-table-cell form-b-icon align-middle"></i>
                                            <span class="nav-text d-table-cell align-middle pl-2 font-weight-bold">
                                            При демонтировании малых объемов металлоконструкций
                                        </span>
                                        </div>
                                    </li>
                                    <li class="mt-2">
                                        <div class="d-table"><i
                                                class="far fa-check-circle fa-2x text-danger mt-1 d-table-cell form-b-icon align-middle"></i>
                                            <span class="nav-text d-table-cell align-middle pl-2 font-weight-bold">
                                          Хотите сдать менее 100кг
                                        </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="fs-20">
                Как проходит выезд и прием металлолома
            </h4>
            <div class="container row base-border base-br p-4 m-0 mb-4">
                <div class="col-12 col-lg-9 pr-3 pl-0 pt-3 pb-3">
                    <h5 class="fs-20">
                        Прием металлолома в пунктах «{{\Illuminate\Support\Facades\Config::get('app.name_ru')}}» - цены
                        максимальные
                    </h5>
                    <p>
                        При объеме металла от 1 тонны мы осуществляем бесплатный выезд в течение дня,
                        также при необходимости бесплатно демонитруем и очищаем площадку от мусора.
                        На стоимость все наши услуги никак не влияют и все хлопоты компанию полностью берет на себя.
                        По прибытию на пункт приема машину взвешивают и производят моментальную оплату клиенту.
                    </p>
                </div>
                <div class="col-12 col-lg-3 col-md-6 p-0 h-min-content m-auto">
                    <div class="col-12 b-btn-base float-left p-0 mt-3 mt-lg-0 mt-md-0">
                        <a href="#" class="btn text-light base-br">Посмотреть цены</a>
                    </div>
                    <div class="col-12 b-btn-base float-left p-0 mt-3">
                        <a href="#" class="btn text-light base-br lmk_scb_open_call">Заказать звонок</a>
                    </div>
                </div>
            </div>
            <div class="container p-0">
                <div class="d-flex row">
                    <div class="col-12 col-lg-6 col-md-6 d-flex flex-wrap mt-3 mt-lg-0 mt-md-3">
                        <div class="base-border base-br container p-4">
                            <h6 class="fs-18">
                                Физические лица
                            </h6>
                            <ul class="mt-3 mb-3">
                                <li class="mt-2">
                                    <div class="d-table">
                                        <i class="far fa-check-circle fa-2x text-success mt-1 d-table-cell form-b-icon align-middle"></i>
                                        <span class="nav-text d-table-cell align-middle pl-2">
                                           Прием любого объема начиная от 1кг
                                        </span>
                                    </div>
                                </li>
                                <li class="mt-2">
                                    <div class="d-table">
                                        <i class="far fa-check-circle fa-2x text-success mt-1 d-table-cell form-b-icon align-middle"></i>
                                        <span class="nav-text d-table-cell align-middle pl-2">
                                           Оплата безналом или наличными
                                        </span>
                                    </div>
                                </li>
                                <li class="mt-2">
                                    <div class="d-table">
                                        <i class="far fa-check-circle fa-2x text-success mt-1 d-table-cell form-b-icon align-middle"></i>
                                        <span class="nav-text d-table-cell align-middle pl-2">
                                            Бесплатные вывоз от 1 тонны
                                        </span>
                                    </div>
                                </li>
                                <li class="mt-2">
                                    <div class="d-table">
                                        <i class="far fa-check-circle fa-2x text-success mt-1 d-table-cell form-b-icon align-middle"></i>
                                        <span class="nav-text d-table-cell align-middle pl-2">
                                            Цена скупки лома для постоянных клиентов выше стандартной
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 d-flex flex-wrap mt-3 mt-lg-0 mt-md-3">
                        <div class=" base-border base-br container p-4">
                            <h6 class="fs-18">
                                Юридические лица
                            </h6>
                            <ul class="mt-3 mb-3">
                                <li class="mt-2">
                                    <div class="d-table">
                                        <i class="far fa-check-circle fa-2x text-success mt-1 d-table-cell form-b-icon align-middle"></i>
                                        <span class="nav-text d-table-cell align-middle pl-2">
                                           Индивидальные цены при больших объемах
                                        </span>
                                    </div>
                                </li>
                                <li class="mt-2">
                                    <div class="d-table">
                                        <i class="far fa-check-circle fa-2x text-success mt-1 d-table-cell form-b-icon align-middle"></i>
                                        <span class="nav-text d-table-cell align-middle pl-2">
                                           Сотрудничество по договору
                                        </span>
                                    </div>
                                </li>
                                <li class="mt-2">
                                    <div class="d-table">
                                        <i class="far fa-check-circle fa-2x text-success mt-1 d-table-cell form-b-icon align-middle"></i>
                                        <span class="nav-text d-table-cell align-middle pl-2">
                                           Услуги демонтажа бесплатные
                                        </span>
                                    </div>
                                </li>
                                <li class="mt-2">
                                    <div class="d-table">
                                        <i class="far fa-check-circle fa-2x text-success mt-1 d-table-cell form-b-icon align-middle"></i>
                                        <span class="nav-text d-table-cell align-middle pl-2">
                                           Персональный менеджер по проекту
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                @include('includes.forms.form_4')
            </div>
            <div class="mt-4 mb-4" itemscope="" itemtype="https://schema.org/FAQPage">
                <div class="faq w-100">
                    <h5 class="h2 faq_text mb-3">
                        Вопросы про скупку металлолома
                    </h5>
                    <div class="faq-questions  p-3 base-br overflow-hidden">
                        <div class="mb-4" itemprop="mainEntity" itemscope=""
                             itemtype="https://schema.org/Question">
                            <div class="faq-question-text cursor-pointer"
                                 onclick="DomHelper.dropDownQuestions(this)"
                                 itemprop="name">
                                <span class="h6">
                                    Как узнать, какова будет цена по которой Вы готовы произвести скупку металлолома?
                                </span>
                            </div>
                            <div class="faq-question-answer base-br overflow-hidden" itemprop="acceptedAnswer"
                                 itemscope=""
                                 itemtype="https://schema.org/Answer">
                                <p itemprop="text" class="h6">
                                    Мы являемся официальной организацией с оптовыми ценами на металлолом. В нашем
                                    прайс-листе мы публикуем ориентировочные расценки на цветной металл и металлолом.
                                    <br>
                                    Для точного расчета стоимости металлолома, Вам нужно позвонить нам или оставить
                                    заявку на сайте, или заказать обратный звонок. Наши опытные специалисты свяжутся с
                                    Вами для уточнения деталей, поинтересуются местонахождением Вашего металлолома,
                                    нужен ли будет демонтаж? Далее запросят фото Вашего металлолома и озвучат сроки, и
                                    конечную цену.
                                </p>
                                <meta itemprop="upvoteCount" content="8">
                                <div itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                                    <meta itemprop="name"
                                          content="{{\Illuminate\Support\Facades\Config::get('app.name_ru')}}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4" itemprop="mainEntity" itemscope=""
                             itemtype="https://schema.org/Question">
                            <div class="faq-question-text cursor-pointer"
                                 onclick="DomHelper.dropDownQuestions(this)"
                                 itemprop="name">
                                <span class="h6">
                                    Где ближайший пункт приёма?
                                </span>
                            </div>
                            <div class="faq-question-answer base-br overflow-hidden" itemprop="acceptedAnswer"
                                 itemscope=""
                                 itemtype="https://schema.org/Answer">
                                <p itemprop="text" class="h6">
                                    Наши пункты приема расположены по всей Москве и МО, но многие из них работают только
                                    с
                                    юр лицами, вагонными поставками.<br>
                                    Позвоните нам, опишите Ваш случай и наш менеджер сообщит вам ближайший пункт приёма
                                    металлолома, где сможем принять металл ближе к Вам.
                                </p>
                                <meta itemprop="upvoteCount" content="8">
                                <div itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                                    <meta itemprop="name"
                                          content="{{\Illuminate\Support\Facades\Config::get('app.name_ru')}}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4" itemprop="mainEntity" itemscope=""
                             itemtype="https://schema.org/Question">
                            <div class="faq-question-text cursor-pointer"
                                 onclick="DomHelper.dropDownQuestions(this)"
                                 itemprop="name">
                                <span class="h6">
                                    Могу ли я сам привезти металл в пункт приема металлолома?
                                </span>
                            </div>
                            <div class="faq-question-answer base-br overflow-hidden" itemprop="acceptedAnswer"
                                 itemscope=""
                                 itemtype="https://schema.org/Answer">
                                <p itemprop="text" class="h6">
                                    Да, конечно же Вы можете сами заняться доставкой металлолома в наш пункт приема.
                                    Для этого, позвоните нам, обговорите все условия с менеджером, и уточните условия
                                    приема
                                    и конечную цену, по которой Вы можете сдать металл в наш приемный пункт, часы работы
                                    и
                                    как проехать до ближайшей приемки. После этого смело привозите металл, или закажите
                                    также через менеджера услугу Самовывоза от нашей компании. Порой так выходит
                                    экономнее,
                                    чем арендовать сторонний транспорт.
                                </p>
                                <meta itemprop="upvoteCount" content="8">
                                <div itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                                    <meta itemprop="name"
                                          content="{{\Illuminate\Support\Facades\Config::get('app.name_ru')}}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4" itemprop="mainEntity" itemscope=""
                             itemtype="https://schema.org/Question">
                            <div class="faq-question-text cursor-pointer"
                                 onclick="DomHelper.dropDownQuestions(this)"
                                 itemprop="name">
                                <span class="h6">
                                    Как происходит оплата?
                                </span>
                            </div>
                            <div class="faq-question-answer base-br overflow-hidden" itemprop="acceptedAnswer"
                                 itemscope=""
                                 itemtype="https://schema.org/Answer">
                                <p itemprop="text" class="h6">
                                    Оплата производится на наших пунктах приёма, деньги выдаются сразу без задержек на
                                    кассе, либо переводятся вам на карту после процедуры взвешивания с видео фиксацией.
                                </p>
                                <meta itemprop="upvoteCount" content="8">
                                <div itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                                    <meta itemprop="name"
                                          content="{{\Illuminate\Support\Facades\Config::get('app.name_ru')}}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4" itemprop="mainEntity" itemscope=""
                             itemtype="https://schema.org/Question">
                            <div class="faq-question-text cursor-pointer"
                                 onclick="DomHelper.dropDownQuestions(this)"
                                 itemprop="name">
                                <span class="h6">
                                    Вы осуществляете прием в Московской области?
                                </span>
                            </div>
                            <div class="faq-question-answer base-br overflow-hidden" itemprop="acceptedAnswer"
                                 itemscope=""
                                 itemtype="https://schema.org/Answer">
                                <p itemprop="text" class="h6">
                                    Да, наша география работы охватывает как всю Москву, так и всю Московскую область.
                                    Вы можете сдать металл с вывозом в пределах всей Московской области. Услуги
                                    демонтажа металлоконструкций также осуществляем в любом населенном пункте Московской
                                    области.
                                </p>
                                <meta itemprop="upvoteCount" content="8">
                                <div itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                                    <meta itemprop="name"
                                          content="{{\Illuminate\Support\Facades\Config::get('app.name_ru')}}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4" itemprop="mainEntity" itemscope=""
                             itemtype="https://schema.org/Question">
                            <div class="faq-question-text cursor-pointer"
                                 onclick="DomHelper.dropDownQuestions(this)"
                                 itemprop="name">
                                <span class="h6">
                                    На каких условиях осуществляется прием цветного металла?
                                </span>
                            </div>
                            <div class="faq-question-answer base-br overflow-hidden" itemprop="acceptedAnswer"
                                 itemscope=""
                                 itemtype="https://schema.org/Answer">
                                <p itemprop="text" class="h6">
                                    Мы предлагаем сдать цветной металлолом на общих условиях. Актуальные цены на цветной
                                    металл можете посмотреть на соответствующей вкладке на сайте. Но, т.к. цены на
                                    цветной металл полностью зависят от биржи, поэтому лучше связаться с нашими
                                    операторами-менеджерами и уточнить конечные цены на текущую дату. Скупка возможна в
                                    наших приёмных пунктах, а также с услугой вывоза. Производим прием любого вида
                                    цветного лома от 1 тонны.
                                </p>
                                <meta itemprop="upvoteCount" content="8">
                                <div itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                                    <meta itemprop="name"
                                          content="{{\Illuminate\Support\Facades\Config::get('app.name_ru')}}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4" itemprop="mainEntity" itemscope=""
                             itemtype="https://schema.org/Question">
                            <div class="faq-question-text cursor-pointer"
                                 onclick="DomHelper.dropDownQuestions(this)"
                                 itemprop="name">
                                <span class="h6">
                                    Что такое засор и засоренность металлолома?
                                </span>
                            </div>
                            <div class="faq-question-answer base-br overflow-hidden" itemprop="acceptedAnswer"
                                 itemscope=""
                                 itemtype="https://schema.org/Answer">
                                <p itemprop="text" class="h6">
                                    В металлоломе существует такое понятие, как засор или засоренность – это степень
                                    содержания металлического лома других категорий или же содержание неметаллических
                                    загрязнений в металлоломе:<br>
                                    1) Процент засора складывается из-за требований и стандартов металлургических
                                    заводов:
                                    Потери в процессе переплавки металла небольшая его часть в любом случае теряется.
                                    Например, ржавчина, даже если ее немного, сгорит, а общая масса металла
                                    уменьшится.<br>
                                    2) Процент засоренности складывается от степени неметаллических загрязнений таких
                                    как
                                    ржавчине, грязь, лед, снег, масло, бетон, пластик, резина, дерево, краска и
                                    прочее...<br>
                                </p>
                                <meta itemprop="upvoteCount" content="8">
                                <div itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                                    <meta itemprop="name"
                                          content="{{\Illuminate\Support\Facades\Config::get('app.name_ru')}}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4" itemprop="mainEntity" itemscope=""
                             itemtype="https://schema.org/Question">
                            <div class="faq-question-text cursor-pointer"
                                 onclick="DomHelper.dropDownQuestions(this)"
                                 itemprop="name">
                                <span class="h6">
                                    Как запросить коммерческое предложение для нашего предприятия?
                                </span>
                            </div>
                            <div class="faq-question-answer base-br overflow-hidden" itemprop="acceptedAnswer"
                                 itemscope=""
                                 itemtype="https://schema.org/Answer">
                                <p itemprop="text" class="h6">
                                    Как правило, коммерческое предложение запрашивают юр. лица для определения на
                                    конкурсной основе компанию, у которого наилучшие условия и как сдать металл выгодно
                                    для компании.
                                    Для получения коммерческого предложения от нас достаточно отправить нам запрос на
                                    электронную почту или связаться по контактному номеру телефона.
                                    Для составления коммерческого предложения нам необходима информация о металле и
                                    юридические данные предприятия на имя которого, необходимо составить КП.
                                </p>
                                <meta itemprop="upvoteCount" content="8">
                                <div itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                                    <meta itemprop="name"
                                          content="{{\Illuminate\Support\Facades\Config::get('app.name_ru')}}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4" itemprop="mainEntity" itemscope=""
                             itemtype="https://schema.org/Question">
                            <div class="faq-question-text cursor-pointer"
                                 onclick="DomHelper.dropDownQuestions(this)"
                                 itemprop="name">
                                <span class="h6">
                                    Вы принимаете металлические отходы в качестве металлолома?
                                </span>
                            </div>
                            <div class="faq-question-answer base-br overflow-hidden" itemprop="acceptedAnswer"
                                 itemscope=""
                                 itemtype="https://schema.org/Answer">
                                <p itemprop="text" class="h6">
                                    Сдать отходы металлообработки и производства металлоконструкций можно в любом пункте
                                    нашей сети. Приемки расположены не только в Москве, но и в городах Московской
                                    области.
                                </p>
                                <meta itemprop="upvoteCount" content="8">
                                <div itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                                    <meta itemprop="name"
                                          content="{{\Illuminate\Support\Facades\Config::get('app.name_ru')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="fs-20">
                Высокое ценообразование на приём лома в Москве и Подмосковье
            </h6>
            <p>
                Мы регулярно отслеживаем актуальную статистику рынка металлопроката в нашем регионе, поэтому
                своевременно увеличиваем тарифы и предлагаем прозрачное сотрудничество каждому из наших клиентов. При
                расчёте приёма очередной партии лома опираемся на разные факторы:
            </p>
            <ul class='col-12 p-0 mb-3'>
                <li class='mt-2'>
                    <div class='d-table'><i
                            class='far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle'></i>
                        <span
                            class='nav-text d-table-cell align-middle pl-2'>
                        	необходимость в вывозе лома
                        </span>
                    </div>
                </li>
                <li class='mt-2'>
                    <div class='d-table'><i
                            class='far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle'></i>
                        <span
                            class='nav-text d-table-cell align-middle pl-2'>
                          	количество металлолома
                        </span>
                    </div>
                </li>
                <li class='mt-2'>
                    <div class='d-table'><i
                            class='far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle'></i>
                        <span
                            class='nav-text d-table-cell align-middle pl-2'>
                       	услуга демонтажа
                        </span>
                    </div>
                </li>
                <li class='mt-2'>
                    <div class='d-table'><i
                            class='far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle'></i>
                        <span
                            class='nav-text d-table-cell align-middle pl-2'>
                       	уровень засора металла и так далее
                        </span>
                    </div>
                </li>
            </ul>
            <p>
                Освободитесь от металлических отходов и получите достойное денежное вознаграждение, обратившись в
                Компанию «ЛМК-Москва»!
            </p>
            @include('includes.banners.why-are-we')
        </div>
    </div>
@endsection
