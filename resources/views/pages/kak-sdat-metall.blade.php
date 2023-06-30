@extends('layouts.app')
@section('content')
    <div class="col-12 col-lg-9 col-xl-9" id="contacts-page">
        {{\DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render(request()->segment(1))}}
        <div class="content">
            <h1 itemprop="name" class="h3">
                Как сдать металлолом
            </h1>
            <p>
                Компания «ЛМК-Москва» успешно оказывает услуги в сфере приема лома цветных и черных металлов, а также
                проводит работы по демонтажу разного вида металлоконструкций.
            </p>
            <p>
                Благодаря нашему опыту и профессионализму сотрудников, мы беремся за выполнение самых сложных заказов и
                быстро справляемся с большими объемами. Мы предлагаем сдать металлолом в Москве и МО, при этом условия
                сотрудничества с нами выгоднее по сравнению с конкурирующими компаниями.
            </p>
            <p>
                Наша компания ведет плодотворную работу на протяжении нескольких лет и уже успела зарекомендовать себя в
                качестве надежного, добросовестного партнера, который со всем уважением относится не только к своим
                клиентам, но и к сотрудникам.
            </p>
            <p>
                Мы успешно сотрудничаем как с частными лицами, так и крупными организациями, заводами, поставляющими нам
                металлолом. Все сырье с наших приемных пунктов ежедневно уходит напрямую на перерабатывающие заводы.
            </p>
            <div class="col-12 p-0">
                @include('includes.forms.form_1')
            </div>
            <h2 class="fs-20">Этапы работы с Компанией «ЛМК-Москва»</h2>
            <p>
                Сдать металлолом с вывозом в нашу компанию можно в несколько этапов:
            </p>
            <div class="col-12 p-0">
                <ul class="col-12 p-0 mb-3">
                    <li class="mt-3">
                        <div class="d-table">
                            <span class="numberCircle">1</span>
                            <span class="nav-text d-table-cell align-middle pl-2">
                                <span>
                                 	Клиент оставляет на сайте компании заявку, либо обращается к менеджерам по телефону.
                                </span>
                            </span>
                        </div>
                    </li>
                    <li class="mt-3">
                        <div class="d-table">
                            <span class="numberCircle">2</span>
                            <span class="nav-text d-table-cell align-middle pl-2">
                                <span>
                                    	Обговариваются условия и детали сотрудничества, а также определяется цена и объем сдаваемой партии. Чтобы узнать за сколько можно сдать металлолом в нашей компании, предлагаем ознакомиться с актуальным прайс-листом
                                </span>
                            </span>
                        </div>
                    </li>
                    <li class="mt-3">
                        <div class="d-table">
                            <span class="numberCircle">3</span>
                            <span class="nav-text d-table-cell align-middle pl-2">
                                <span>
                                    	Выезд специалистов на территорию, где проводится демонтаж, резка и вывоз металлопродукции.
                                </span>
                            </span>
                        </div>
                    </li>
                    <li class="mt-3">
                        <div class="d-table">
                            <span class="numberCircle">4</span>
                            <span class="nav-text d-table-cell align-middle pl-2">
                                <span>
                                    	В пункте приема проводится взвешивание лома и последующая оплата наличным или безналичным способом.
                                </span>
                            </span>
                        </div>
                    </li>
                </ul>
                <p>
                    Наша организация оказывает полный спектр услуг, куда также входят работы по демонтажу
                    крупногабаритных металлоконструкций, резке элементов, погрузке и вывозу с объекта. На всех этапах мы
                    используем спецтехнику и профессиональный инструмент. Сотрудники имеют разрешения для проведения
                    работ на высоте.
                </p>
            </div>

            <h3 class="fs-20">
                Выгодно сдать металлолом в Москве и Московской области
            </h3>
            <p>
                В Компании «ЛМК» клиентам не только предлагают сдать металлолом дорого, но и индивидуальные условия
                сотрудничества, основанные на взаимной выгоде и удобстве. Мы осуществляем свою деятельность согласно
                действующему законодательству РФ, располагаем всеми необходимыми лицензиями для ведения данного рода
                деятельности, поэтому по запросу можем предоставить своим клиентам документы.
            </p>
            <p>
                Приемные пункты нашей компании удобно расположены по всей Москве и Московской области, работают
                круглосуточно, без перерывов и выходных. Каждый пункт металлолома «ЛМК» обеспечен современным,
                технологичным оборудованием, которое позволяет осуществлять любые операции с металлопродукцией быстро.
            </p>
            <p>
                Взвешивание сырья происходит в присутствии клиента на высокоточных весах, регулярно проходящих
                калибровку. Это гарантирует, что результаты взвешивания максимально точны, а, соответственно, и расчеты
                с клиентами честные. Узнать сколько стоит сдать металлолом и какая цена на той или иной вид сырья в «ЛМК
                можно на сайте из прайс-листов.
                Мы напрямую сотрудничаем с крупными перерабатывающими заводами, поэтому Вы можете сдать металлолом по
                самой выгодной цене за кг. в Москве и МО.
            </p>
            @include('includes.banners.autopark')
            <div class="col-12 p-1">
                @include('includes.banners.why-are-we')
            </div>
        </div>
    </div>
@endsection
