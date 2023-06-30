@extends('layouts.app')
@section('content')
    <div class="col-12 col-lg-9 col-xl-9" id="market-page">
        {{\DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render(request()->segment(1))}}
        <div class="content">
            <h1 itemprop="name" class="h3">Пункты приема металла</h1>
            <p>
                Пункты приема металла Компании «ЛМК-Москва» готовы принимать лом черных и цветных металлов на выгодных
                условиях и по высоким ценам. Наша компания с 2016 года осуществляет деятельность в сфере приема
                металлолома и оказывает полный спектр услуг по демонтажу и вывозу сырья с территории клиента.
            </p>
            <p>
                За годы работы мы разместили сеть наших приемных пунктов по Москве и Московской области так, чтобы
                клиентам было максимально удобно доставлять материал. Штат сотрудников нашей организации представлен
                профессионалами в разных областях, которые накопили достаточно опыта для того, чтобы обслуживать
                клиентов оперативно и честно.
            </p>
            <p>
                Если Вам необходимо сдать лом металла в большом или малом количестве, то в наших пунктах приема Вам
                готовы предложить не только высокие цены на сырье, по сравнению с конкурентными компаниями, но и
                вежливое обслуживание.
            </p>
            <h2 class="fs-20">
                Почему многие выбирают приемные пункты «ЛМК-Москва»?
            </h2>
            <ul class="col-12 p-0 mb-3">
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
                            Удобное расположение по Москве и Московской области.
                        </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
            	Обеспечение необходимой высокотехнологичной спецтехникой и оборудованием
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
        	Принимаем любые объемы сырья от одного килограмма до десятков тонн
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
                            Круглосуточный график работы без выходных дней и перерыва
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
                         	Штат профессионалов с большим опытом работы в сфере приема металла
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
                       	Дополнительные услуги по демонтажу металлоконструкций, резке и вывозу лома
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
                           	Оперативное, честное обслуживание
            </span>
                    </div>
                </li>
            </ul>
            <h3 class="fs-20">
                Как сдать металлолом в нашу компанию?
            </h3>
            <p>
                Сдать металл в пункты приема «ЛМК» можно легко и быстро. Связавшись с нашими менеджерами по телефону, Вы
                сможете уточнить все нюансы сотрудничества, обговорить способ доставки сырья.
            </p>
            <p>
                Если у Вас нет возможности транспортировать лом в пункт приема черных и цветных металлов нашей компании,
                то мы можем организовать вывоз и доставку сырья на собственном грузовом спецтранспорте. Вам не нужно
                тратить время на поиск сторонних организаций — мы все сделаем за Вас!
                После того, как металлолом доставлен на место приема, наши специалисты проводят оценку продукции с целью
                установить ее качество и определить актуальную стоимость материала.
            </p>
            <p>
                Следующим шагом является взвешивание сырья на высокоточном весовом оборудовании, которое регулярно
                проходит калибровку. Благодаря этому мы можем точно определить вес с минимальной погрешностью. Расчет с
                клиентом производится сразу после взвешивания. Мы предлагаем наличный и безналичный способ расчета.
            </p>
            @include('includes.forms.form_1')
            <div class="container p-0">
                <div class="row">
                    @foreach($addresses as $address)
                        <div class="d-flex flex-wrap col-12 col-lg-6 col-md-6  text-dark mb-4">
                            <div class="container row mx-auto base-border base-br p-3">
                                <div class="d-flex align-items-center col-12 p-0 ml-1">
                                    <div class="d-inline mr-3">
                                        <i class="fas fa-map-marker-alt fa-2x base-color"></i>
                                    </div>
                                    <div class="d-inline">
                                        {{$address->address}}
                                    </div>
                                </div>
                                <div class="d-flex align-items-center col-12 p-0 mt-3">
                                    <div class="d-inline mr-3">
                                        <i class="far fa-check-circle fa-2x base-color"></i>
                                    </div>
                                    <div class="d-inline">
                                        Время работы: 24/7
                                    </div>
                                </div>
                                <div class="d-flex align-items-center col-12 p-0 mt-3">
                                    <div class="d-inline mr-3">
                                        <i class="far fa-check-circle fa-2x base-color"></i>
                                    </div>
                                    <div class="d-inline">
                                        Пункт приема с вывозом
                                    </div>
                                </div>
                                <div class="d-flex align-items-center col-12 p-0 mt-3">
                                    <div class="d-inline mr-3">
                                        <i class="far fa-check-circle fa-2x base-color"></i>
                                    </div>
                                    <div class="d-inline">
                                        Бесплатный вывоз от 1000 кг
                                    </div>
                                </div>
                                <div class="col-12 row m-0 mt-3 p-0">
                                    <div class="col-12 col-lg-6 col-md-6 b-btn-base mt-2">
                                        <button class="btn text-light base-br lmk_scb_open_call">Заказать звонок
                                        </button>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 b-btn-secondary mt-2">
                                        <a href="{{route('czenyi-na-metall')}}"
                                           class="btn float-right text-dark base-br">Цена пункта</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div id="ymap-2"></div>
                </div>
            </div>
            <h4 class="fs-20">
                Выгодное сотрудничество с Компанией «ЛМК»
            </h4>
            <p>
                В любом нашем пункте приема металла цена на сырье рассчитывается с учетом некоторых факторов:
            </p>
            <ul class="col-12 p-0 mb-3">
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
                            	качество сырья
                        </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
            		вид металлолома
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
        		объем партии
            </span>
                    </div>
                </li>
            </ul>
            <p>
                Прежде чем сдавать сырье в ближайший пункт приема цветного и черного металла, узнайте актуальную цену
                материалов в нашем прайс-листе. Мы сотрудничаем с частными лицами, организациями и по необходимости
                можем предоставить полный пакет документов для бухгалтерской отчетности.
            </p>
            <p>
                Обращайтесь в Компанию «ЛМК-Москвап» в любое удобное время. Мы будем рады ответить на все интересующие
                Вас вопросы. Звоните и уточняйте условия сотрудничества!
            </p>
        </div>
    </div>
@endsection
