@extends('layouts.app')
@section('content')
    <div class="col-12 col-lg-9 col-xl-9" id="market-page">
        {{\DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render(request()->segment(1), $title)}}
        <div class="content">
            <h1 itemprop="name" class="h3">Прием металла с выездом</h1>
            @include('includes.forms.form_1')
            <p>
                Хозяин любого частного владения, будь то дача, коттедж, загородный дом, рано или поздно сталкивается с
                ситуацией, когда в его хозяйстве накапливается большое количество ненужного металлолома в виде старых
                деталей, техники, элементов конструкций и так далее. Весь металлолом подлежит сдаче, а прием ведут
                специализированные компании.
            </p>
            <p>
                Если у Вас скопилось много ненужного металла дома, то Компания «ЛМК» ведет прием металла с выездом по
                Москве и Московской области. Вам не придется искать работников и арендовать специализированную технику
                для того, чтобы очистить свою территорию от лома, наши специалисты сделают всю работу за Вас!
            </p>
            <p>
                В выездной пункт приема металлолома «ЛМК» Вы сдаете сырье по выгодным ценам, прилагая при этом минимум
                усилий. Чтобы воспользоваться данной услугой, Вам необходимо оставить заявку на сайте компании.
            </p>
            <p>
                Менеджеры быстро примут заявку, после чего специалисты с необходимым набором инструментов и техники
                приедут на Вашу территорию и очистят ее от металлолома.
            </p>
            <h2 class="fs-20">
                Этапы приема лома с выездом
            </h2>
            <p>
                Прием металла с выездом по Москве и области осуществляется нашими специалистами в несколько этапов:
            </p>
            <div class="col-12 p-0">
                <ul class="col-12 p-0 mb-3">
                    <li class="mt-3">
                        <div class="d-table"><span class="numberCircle">1</span> <span
                                class="nav-text d-table-cell align-middle pl-2">
                    <span>
                    	Клиент размещает заявку на нашем официальном сайте или связывается с менеджерами по телефону
                    </span> </span>
                        </div>
                    </li>
                    <li class="mt-3">
                        <div class="d-table">
                            <span class="numberCircle">2</span>
                            <span class="nav-text d-table-cell align-middle pl-2">
                    <span>
                 Уточняются все детали сотрудничества, в том числе объем сдаваемого сырья и его цена.
                    </span>
                </span>
                        </div>
                    </li>
                    <li class="mt-3">
                        <div class="d-table"><span class="numberCircle">3</span> <span
                                class="nav-text d-table-cell align-middle pl-2">
                    <span>
                        Сотрудники «ЛМК-Москва» выезжают на объект с набором необходимого инструмента и спецтехники.
                    </span> </span>
                        </div>
                    </li>
                    <li class="mt-3">
                        <div class="d-table"><span class="numberCircle">4</span> <span
                                class="nav-text d-table-cell align-middle pl-2">
                    <span>
                    	Производятся демонтажные работы, резка, погрузка и транспортировка лома до ближайшего приемного пункта
                    </span> </span>
                        </div>
                    </li>
                    <li class="mt-3">
                        <div class="d-table"><span class="numberCircle">5</span> <span
                                class="nav-text d-table-cell align-middle pl-2">
                    <span>
                   Сырье взвешивается
                    </span> </span>
                        </div>
                    </li>
                    <li class="mt-3">
                        <div class="d-table"><span class="numberCircle">6</span> <span
                                class="nav-text d-table-cell align-middle pl-2">
                    <span>
                       Производится расчет с клиентом наличным или безналичным способом.
                    </span> </span>
                        </div>
                    </li>
                </ul>
                <p>
                    Наши приемные пункты работают круглосуточно и без выходных дней, поэтому сдать металлопродукцию
                    клиенты могут в любое удобное для них время.
                </p>
            </div>
        </div>
        <div class="content mt-4">
            <div id="regions" class="container row ms-regions m-0 mb-4 p-0 justify-content-center collapse show">
                @foreach($regions['regions'] as $region)
                    <a href="{{route($region->slug->slug)}}"
                       class="col-2 col-md-3 col-sm-4 col-6 p-0 pt-1 pr-1 text-decoration-none text-light">
                        <div class="ms-regions-item row col-12 p-0 base-br bg-base-color h-100 m-auto text-center">
                            <div class="col-12 p-2 h-min-content align-self-center">
                                <i class="fas fa-map-marker-alt fa-3x"></i>
                                <p class="h5 m-0 mt-2 text-light fs-12">
                                    {{$region->title}}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <h4 class="fs-20">
                Выгодно сдать металлолом с выездом в Москве
            </h4>
            <p>
                Прием черного металла с выездом не только позволяет сэкономить время на самостоятельную транспортировку
                сырья, но и дает возможность получить достойное вознаграждение.
            </p>
            <p>
                Перед тем, как назвать точную цену за партию, наши специалисты проводят оценку лома, чтобы определить к
                какому типу относится и какого качества металл. В ходе оценки могут применяться специализированные
                инструменты и оборудование, которые позволяют максимально точно определить соответствие материала
                действующим стандартам.
            </p>
            <p>
                Взвешивание партии происходит на высокоточных весах, прошедших калибровку. Все операции проводятся в
                присутствии клиента, благодаря чему сохраняется прозрачность и точность работы.
            </p>
            <p>
                Для того, чтобы узнать актуальные цены на металлолом, предлагаем изучить прайс по Москве и МО. С
                компанией ЛМК» выгодно сотрудничать по следующим причинам:
            </p>
            <ul class="col-12 p-0 mb-3">
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
        	цены на металлолом самые высокие в городе и области
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
              	прием сырья в любом объеме от килограмма до нескольких тонн
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
        	взаиморасчеты с клиентом производятся сразу после сдачи;
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
  		удобное расположение пунктов и круглосуточный режим работы
            </span>
                    </div>
                </li>
            </ul>
            <p>
                Не важно, будете ли Вы сдавать медь, алюминий или любые другие виды черного и цветного металла, наши
                условия самые привлекательные. Становитесь клиентами «ЛМК», будем рады видеть Вас в любое время!
            </p>
            @include('includes.banners.why-are-we')
        </div>
        <div class="mt-4 d-block d-lg-none d-md-none" id="licence">
            @include('includes.banners.licnece')
        </div>
    </div>
@endsection
