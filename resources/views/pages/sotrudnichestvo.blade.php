@extends('layouts.app')
@section('meta_title', 'Сотрудничество')
@section('meta_description', 'Сотрудничество')
@section('title', 'Сотрудничество'.' - '. $title_rand)
@section('content')
    <div class="col-12 col-lg-9 col-xl-9" id="contacts-page">
        {{\DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render(request()->segment(1))}}
        <div class="content">
            <h1 itemprop="name" class="h3">Сотрудничество</h1>
            @include('includes.forms.form_1',['title' => 'Сотрудничество'.' - '. $title_rand, 'custom_form_img' => 'sotrudnichestvo'])
            <p>
                Лом черных и цветных металлов является не только ценным вторичным сырьем, из которого после переработки
                изготавливают новые детали и конструкции, но и источником дохода.
                Если у Вас есть большой или малый объем металлопродукции, не пригодной для эксплуатации в привычных
                условиях, то пришло время избавиться от нее. Прием, вывоз, переработка металлолома — вот полный цикл
                работ Компании «ЛМК-Москва».
                Мы предлагаем сдать металл в наши пункты приема, которые расположены по всей Москве и МО, при этом
                получить высокую цену за сырье и возможность хорошо заработать.
            </p>
            <p>
                Наша команда старается создавать такую атмосферу сотрудничества, при которой клиенты получают
                максимальную выгоду. Мы готовы к новому партнерству, как с частными лицами, так и крупными
                организациями.
                Консультанты компании по необходимости проведут частную беседу и ответят на любые интересующие Вас
                вопросы. Для связи предлагаем воспользоваться указанными контактами на нашем сайте.
            </p>
            <h2 class="fs-20">
                Факторы, влияющие на цену металлолома
            </h2>
            <p>
                Стоимость металла на вторичном рынке сырья зависит от ряда факторов. Первое — это спрос на мировых
                рынках. Для того чтобы хорошо в этом разбираться, наши специалисты постоянно мониторят ситуацию на
                мировых и региональных биржах.
            </p>
            <p>
                Второе — потребность той или иной области промышленности в металлоломе. В разные месяца и даже недели
                стоимость тонны разного вида сырья может сильно отличаться, поэтому данные тенденции также учитываются
                нами.
            </p>
            <p>
                Третье — объем партии, сдаваемой в наши пункты. Для оптовых клиентов мы предлагаем наиболее выгодные
                расценки. В Компании «ЛМК-Москва» цена на прием и вывоз лома является самой выгодной среди конкурирующих
                организаций. Рекомендуем ознакомиться с прайс-листом на сайте.
            </p>
            <h2 class="fs-20">
                Мы будем рады всем!
            </h2>
            <div class="container">
                <div class="row">
                    <div class="card mb-3 base-border base-br">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <img src="{{asset("/img/home-images/demontaj.webp")}}" loading="lazy"
                                     alt="Демонтаж металлолома" class="card-img" width="411" height="268"
                                     title="Демонтаж металлолома">
                            </div>
                            <div class="col-md-6 m-auto">
                                <div class="card-body h-min-content">
                                    <h3 class="fs-18 text-center">
                                        Корпоративным клиентам
                                    </h3>
                                    <p class="text-center">
                                        Давайте сотрудничать вместе и стоить общее будущее...
                                    </p>
                                    <div
                                        class="col-12 col-lg-6 col-md-6 mx-auto text-center b-btn-base p-0 mt-3 mt-lg-0 mt-md-0">
                                        <button class="btn text-light base-br lmk_scb_open_call">Заказать звонок
                                        </button>
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
                                        Рабочим, Водителям, Консультантам
                                    </h2>
                                    <p class="text-center">
                                        Мы всегда ищем целеустремленных, трудолюбивых, креативных...
                                    </p>
                                    <div
                                        class="col-12 col-lg-6 col-md-6 mx-auto text-center b-btn-base p-0 mt-3 mt-lg-0 mt-md-0">
                                        <button class="btn text-light base-br lmk_scb_open_call">Заказать звонок
                                        </button>
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
                                        Дилерам
                                    </h2>
                                    <p class="text-center">
                                        Давайте продвигать бизнес вместе...
                                    </p>
                                    <div
                                        class="col-12 col-lg-6 col-md-6 mx-auto text-center b-btn-base p-0 mt-3 mt-lg-0 mt-md-0">
                                        <button class="btn text-light base-br lmk_scb_open_call">Заказать звонок
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="fs-20">
                Выгодное сотрудничество с нашей компанией
            </h3>
            <p>
                Для своих клиентов мы делаем все возможное, чтобы сотрудничество было максимально привлекательным и
                эффективным. В рамках нашей деятельности осуществляются следующие виды работ:
            </p>
            <ul class="col-12 p-0 mb-3">
                <li class="mt-2">
                    <div class="d-table">
                        <i class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span class="nav-text d-table-cell align-middle pl-2">
                         	Демонтаж металлоконструкций с помощью спецтехники и инструментов. Все работы на площадке клиента ведутся только профессионалами и строго с соблюдением техники безопасности. Такой подход позволяет избежать травм и несчастных случаев во время работы.
                        </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table">
                        <i class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span class="nav-text d-table-cell align-middle pl-2">
                         	Резка и вывоз лома на грузовом транспорте. В работе используется более 30 единиц техники, включая экскаваторы, бульдозеры, краны, тракторы, плазморезы и так далее.
                        </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table">
                        <i class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span class="nav-text d-table-cell align-middle pl-2">
                         	Транспортировка лома. Любой пункт приема металлолома Компании «ЛМК» в Москве и МО готов принимать ежедневно большие партии сырья, так как обеспечен всем необходимым: оборудование, инструмент, штат сотрудников
                        </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table">
                        <i class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span class="nav-text d-table-cell align-middle pl-2">
                            Взвешивание принимаемой металлопродукции на откалиброванных высокоточных весах.
                        </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table">
                        <i class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span class="nav-text d-table-cell align-middle pl-2">
                        	Полный расчет с клиентом сразу на месте. Мы предлагаем наличный и безналичный способ расчета. Если Вам потребуются чеки, квитанции, акты для бухгалтерии, то мы предоставим весь пакет документов в день обращения.
                        </span>
                    </div>
                </li>
            </ul>
            <p>
                Вы сдаете металлолом, мы осуществляем его прием по высокой цене в Москве и МО.
            </p>
        </div>
    </div>
@endsection
