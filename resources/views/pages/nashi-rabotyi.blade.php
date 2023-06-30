@extends('layouts.app')
@section('meta_title', 'Наши работы')
@section('meta_description', 'Наши работы')
@section('title', 'Наши работы'.' - '. $title_rand)
@section('content')
    <div class="col-12 col-lg-9 col-xl-9" id="contacts-page">
        {{\DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render(request()->segment(1))}}
        <div class="content">
            <h1 itemprop="name" class="h3">Наши работы</h1>
            <p>
                Компания «ЛМК» имеет огромный опыт в сфере услуг по демонтажу конструкций любого типа и сложности.
                Работы проводятся максимально оперативно и всегда соответсвуют всем условиям технической
                безопасности.<br>
                В нашем словаре нет слова «невозможно»!
            </p>
            <p>
                Компания «ЛМК-Москва» с 2016 года успешно ведет свою деятельность в сфере приема металлолома разного
                вида. За годы успешной деятельности мы накопили достаточно опыта и практических навыков, благодаря
                которым сегодня можем оказывать полный спектр услуг по вывозу и приему металлолома в Москве и Московской
                области.
            </p>
            <p>
                Нашими партнерами являются крупные промышленные предприятия и частные организации, которые сдают лом
                цветных и черных металлов в больших и малых объемах. Для своих клиентов мы предлагаем индивидуальные
                программы сотрудничества, учитывающие некоторые нюансы всего процесса работы со вторсырьем.
            </p>
            <p>
                Демонтаж металлоконструкций, резка, погрузка и транспортировка сырья осуществляется нашими сотрудниками
                максимально быстро. Все работы ведутся в соответствии с действующими нормами безопасности, благодаря
                чему результат нашей деятельности всегда отличается высоким качеством.
            </p>
            <div class="row">
                <div class="col-6">
                    <h2 class="fs-20 mb-3">
                        Наши работы в сфере демонтажа
                    </h2>
                </div>
                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
                       data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="d-flex flex-wrap col-md-4 mb-3">
                                        <div class="card base-br base-border overflow-hidden">
                                            <img loading="lazy" class="img-fluid out-work-img" alt="Демонтаж ангара"
                                                 title="Демонтаж ангара"
                                                 src="{{asset('img/our-works/angar-1.webp')}}">
                                            <div class="card-body">
                                                <h3 class="fs-18 card-title">Демонтаж ангара</h3>
                                                <p class="card-text">
                                                    Работа была выполнена за 24 часа!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap col-md-4 mb-3">
                                        <div class="card base-br base-border overflow-hidden">
                                            <img loading="lazy" height="150" class="img-fluid out-work-img"
                                                 alt="Демонтаж металлоконструкций"
                                                 title="Демонтаж металлоконструкций"
                                                 src="{{asset('img/our-works/metallokonstrukcia-1.webp')}}">
                                            <div class="card-body">
                                                <h3 class="fs-18 card-title">Демонтаж металлоконструкций</h3>
                                                <p class="card-text">Работа была выполнена за 2 дня!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap col-md-4 mb-3">
                                        <div class="card base-br base-border overflow-hidden">
                                            <img loading="lazy" class="img-fluid out-work-img" alt="Демонтаж крана"
                                                 title="Демонтаж крана"
                                                 src="{{asset('img/our-works/kran-1.webp')}}">
                                            <div class="card-body">
                                                <h3 class="fs-18 card-title">Демонтаж крана</h3>
                                                <p class="card-text">
                                                    Работа была выполнена за 24 часа!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="d-flex flex-wrap col-md-4 mb-3">
                                        <div class="card base-br base-border overflow-hidden">
                                            <img loading="lazy" class="img-fluid out-work-img"
                                                 alt="Демонтаж оборудования"
                                                 title="Демонтаж оборудования"
                                                 src="{{asset('img/our-works/oborudovanie-1.webp')}}">
                                            <div class="card-body">
                                                <h3 class="fs-18 card-title">Демонтаж оборудования</h3>
                                                <p class="card-text">
                                                    Работа была выполнена за 24 часа!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap col-md-4 mb-3">
                                        <div class="card base-br base-border overflow-hidden">
                                            <img loading="lazy" class="img-fluid out-work-img" alt="Демонтаж Вышек"
                                                 title="Демонтаж Вышек"
                                                 src="{{asset('img/our-works/vishka-1.webp')}}">
                                            <div class="card-body">
                                                <h3 class="fs-18 card-title">Демонтаж Вышек</h3>
                                                <p class="card-text">
                                                    Работа была выполнена за 36 часов!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap col-md-4 mb-3">
                                        <div class="card base-br base-border overflow-hidden">
                                            <img loading="lazy" class="img-fluid out-work-img" alt="Демотнаж автокрана"
                                                 title="Демотнаж автокрана"
                                                 src="{{asset('img/our-works/avtokran-1.webp')}}">
                                            <div class="card-body">
                                                <h3 class="fs-18 card-title">Демотнаж автокрана</h3>
                                                <p class="card-text">
                                                    Работа была выполнена за 56 часа!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="d-flex flex-wrap col-md-4 mb-3">
                                        <div class="card base-br base-border overflow-hidden">
                                            <img loading="lazy" class="img-fluid out-work-img" alt="Демотнаж труб"
                                                 title="Демотнаж труб"
                                                 src="{{asset('img/our-works/trub-1.webp')}}">
                                            <div class="card-body">
                                                <h3 class="fs-18 card-title">Демотнаж труб</h3>
                                                <p class="card-text">
                                                    Работа была выполнена за 48 часов!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap col-md-4 mb-3">
                                        <div class="card base-br base-border overflow-hidden">
                                            <img loading="lazy" class="img-fluid out-work-img" alt="Демотнаж кабеля"
                                                 title="Демотнаж кабеля"
                                                 src="{{asset('img/our-works/kablei-1.webp')}}">
                                            <div class="card-body">
                                                <h3 class="fs-18 card-title">Демотнаж кабеля</h3>
                                                <p class="card-text">
                                                    Работа была выполнена за 12 часов!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap col-md-4 mb-3">
                                        <div class="card base-br base-border overflow-hidden">
                                            <img loading="lazy" class="img-fluid out-work-img" alt="Демотнаж завода"
                                                 title="Демотнаж завода"
                                                 src="{{asset('img/our-works/zavod-1.webp')}}">
                                            <div class="card-body">
                                                <h3 class="fs-18 card-title">Демотнаж завода</h3>
                                                <p class="card-text">
                                                    Работа была выполнена за 4 дня!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h2>
                С какими задачами справляется Компания «ЛМК»?
            </h2>
            <p>
                Наша компания оказывает комплекс услуг, куда входит:
            </p>
            <ul class="col-12 p-0 mb-3">
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
					Демонтаж конструкций в Москве и МО.
                Когда металлолом это не просто пара непригодных для использования деталей, а целые сооружения и здания, тогда необходимо провести их демонтаж. Наши сотрудники имеют профессиональные инструменты и опыт данных работ, поэтому разбор конструкций пройдет быстро и безопасно.
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
					 	Резка крупногабаритных конструкций.
                Если отдельные элементы сырья превышают допустимые габариты, то наши мастера проведут резку конструкций до нужных габаритов, чтобы их было удобно транспортировать. Для этого используются профессиональные газорезы и другие виды оборудования.
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
						  Погрузка сырья.
                Для погрузки металлопродукции используются краны, чтобы обеспечивать быструю и эффективную работу команды.

            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
						 	Вывоз металлолома.
                Для вывоза крупногабаритного сырья используется спецтехника в виде грузового транспорта. Мы располагаем большим парком автомобилей, которые позволяют справляться с большими партиями металла за короткий срок.
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
						Транспортировка в приемный пункт.
                        </span>
                    </div>
                </li>
            </ul>
            <p>
                Пункты приема металлолома в Москве и МО расположены таким образом, чтобы клиентам было удобно подъезжать
                к ним в любое время суток. Работа ведется круглосуточно, без выходных дней, поэтому Вы можете обратиться
                к нам, когда захотите.
            </p>
            @include('includes.forms.form_1', ['title' => 'Наши работы'.' - '. $title_rand,'custom_form_img' => 'nashi-rabotyi'])
            <h3 class="fs-20">
                Как принимают лом специалисты «ЛМК-Москва»?
            </h3>
            <p>
                В ходе приемки сырья на любом из наших пунктов сначала специалисты проводят оценку металла. В ходе этого
                этапа выявляются качественные характеристики лома и определяется актуальная цена.
                Мы ведем прием лома дорого в Москве и регионе, предлагая привлекательные условия для плодотворной работы
                каждому клиенту. Ознакомиться с текущими расценками на металлолом можно в нашем прайс листе на сайте.
            </p>
            <h3 class="fs-20">
                Почему выгодно сдавать лом металлов в нашу компанию?
            </h3>
            <ul class="col-12 p-0 mb-3">
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
			Самые высокие цены на лом цветных и черных металлов
                        </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
					Вывоз сырья с территории клиента бесплатно
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
					Моментальный расчет наличным или безналичным способом.
                        </span>
                    </div>
                </li>
            </ul>
            <p>
                По всем интересующим Вас вопросам просим обращаться к нашим менеджерам по телефонам, указанным на сайте
                компании. Мы будем рады видеть Вас числе наших клиентов в любое время!
            </p>
            @include('includes.banners.calculator', ['title' => 'Наши работы'.' - '. $title_rand])
        </div>
    </div>
@endsection
