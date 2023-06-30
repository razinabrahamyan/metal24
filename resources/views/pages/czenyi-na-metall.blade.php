@extends('layouts.app')
@section('content')
    <div class="col-12 col-lg-9 col-xl-9" id="market-page" itemscope="" itemtype="https://schema.org/Product">
        {{\DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render(request()->segment(1))}}
        <h1 itemprop="name" class="h3">Цены на металлолом</h1>
        <div class="content">
            <p>
                Металлолом на сегодняшний день является востребованным видом вторсырья, которое перерабатывается и
                используется в производстве новых изделий. Сдавая лом цветных и черных металлов на специализированные
                базы, Вы можете получить достойный доход.
            </p>
            <p>
                Компания «ЛМК» предлагает сдать металлолом по высокой цене за кг. в Москве и МО. Мы осуществляем услуги
                по демонтажу металлоконструкций, их резки и вывозу с территории клиента.
            </p>
            <h2>
                Какой металлолом принимают в «ЛМК»?
            </h2>
            <p>
                В зависимости от того, какой вид сырья сдается, на металлолом складывается конечная цена за кг.:
            </p>
            <ul class="col-12 p-0 mb-3">
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
					Легковесный листовой — ценность данного вида наименьшая, так как для того, чтобы такое сырье можно было вторично перерабатывать, его необходимо предварительно обработать. Большую ценность имеет кусковой лом, для переплавки которого затраты минимальны.
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
						Крупногабаритный - этот вид сырья образуется в результате демонтажных манипуляций со старыми сооружениями, зданиями, постройками. Чтобы утилизировать лом потребуется грузовая спецтехника, а также профессиональный инструмент.
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
					Стружечный
                        </span>
                    </div>
                </li>
            </ul>
            <p>
                В компании «ЛМК» есть все необходимое для того, чтобы проводить демонтаж, резку и вывоз крупного и
                других видов металла с любой площадки. Мы имеем в распоряжении собственный автопарк крупнотоннажной
                техники, а команда специалистов быстро и качественно проводит любые работы, связанные с утилизацией
                металлолома.
            </p>
            <p>
                Выполняем работы повышенной сложности, и благодаря большому штату сотрудников беремся за большие объемы,
                оперативно выполняя все поставленные задачи. Чтобы узнать точную цену металлолома в Москве и области,
                обращайтесь к нашим специалистам. Выяснив какие работы, предстоит выполнить и с каким видом сырья
                предстоит работать, мы назовем точные расценки на оказываемые услуги.
            </p>
            <div class="col-12 p-0">
                @include('includes.forms.form_1')
            </div>
            @foreach($marketPricesByCategory as $marketPrice)
                @include('includes.price-tables.category_price',['categoriesPrices' => $marketPrice])
            @endforeach
            <div class="mb-3">
                @include('includes.forms.form_4')
            </div>
            <h2 class="fs-20">
                От чего зависит цена на лом металлов?
            </h2>
            <p>
                Цена металлолома на сегодняшний день в Москве имеет зависимость в первую очередь от ситуации на мировых
                рынках вторсырья. Наша компания постоянно ведет мониторинг и старается формировать расценки максимально
                честно. Помимо этого, на стоимость влияют:
            </p>
            <ul class='col-12 p-0 mb-3'>
                <li class='mt-2'>
                    <div class='d-table'>
                        <i class='far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle'></i>
                        <span class='nav-text d-table-cell align-middle pl-2'>
                         	объем сдаваемой партии
                        </span>
                    </div>
                </li>
                <li class='mt-2'>
                    <div class='d-table'>
                        <i class='far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle'></i>
                        <span class='nav-text d-table-cell align-middle pl-2'>
                         	вид металла
                        </span>
                    </div>
                </li>
                <li class='mt-2'>
                    <div class='d-table'>
                        <i class='far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle'></i>
                        <span class='nav-text d-table-cell align-middle pl-2'>
                         	степень сложности демонтажа
                        </span>
                    </div>
                </li>
                <li class='mt-2'>
                    <div class='d-table'>
                        <i class='far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle'></i>
                        <span class='nav-text d-table-cell align-middle pl-2'>
                        	дополнительные расходы
                        </span>
                    </div>
                </li>
            </ul>
            <p>
                Если Вы сдаете большую партию металла, то в нашей компании Вам предложат более выгодные расценки. При
                этом мы ведем прием металлолома в Москве и МО по ценам, намного выгоднее, чем у конкурентов. Даже те
                клиенты, которые сдают сырье в минимальных количествах, получают достойное вознаграждение.
            </p>
            <h3 class="fs-20">
                Выгодно сдать металлолом в Москве и МО
            </h3>
            <p>
                Прием в компании «ЛМК» осуществляется в несколько этапов:
            </p>
            <ul class="col-12 p-0 mb-3">
                <li class="mt-3">
                    <div class="d-table"><span class="numberCircle">1</span>
                        <span class="nav-text d-table-cell align-middle pl-2">
                            Демонтажные работы
                        </span>
                    </div>
                </li>
                <li class="mt-3">
                    <div class="d-table">
                        <span class="numberCircle">2</span>
                        <span class="nav-text d-table-cell align-middle pl-2">
                   Резка крупногабаритных металлоконструкций.
                </span>
                    </div>
                </li>
                <li class="mt-3">
                    <div class="d-table"><span class="numberCircle">3</span> <span
                            class="nav-text d-table-cell align-middle pl-2">
                  	Разбор спецтехники
                        </span></div>
                </li>
                <li class="mt-3">
                    <div class="d-table"><span class="numberCircle">4</span> <span
                            class="nav-text d-table-cell align-middle pl-2">
                    	Погрузка элементов в ломовоз
                </span>
                    </div>
                </li>
                <li class="mt-3">
                    <div class="d-table"><span class="numberCircle">4</span> <span
                            class="nav-text d-table-cell align-middle pl-2">
                    		Вывоз сырья с территории на спецтехнике
                </span>
                    </div>
                </li>
                <li class="mt-3">
                    <div class="d-table"><span class="numberCircle">4</span> <span
                            class="nav-text d-table-cell align-middle pl-2">
                    	Доставка лома в пункт приема «ЛМК».
                </span>
                    </div>
                </li>
            </ul>
            <p>
                Для своих клиентов наша компания предлагает несколько способов сдачи металлолома:
            </p>
            <ul class="col-12 p-0 mb-3">
                <li class="mt-3">
                    <div class="d-table"><span class="numberCircle">1</span>
                        <span class="nav-text d-table-cell align-middle pl-2">
                         	Клиент самостоятельно подготавливает сырье и доставляет его в один из наших приемных пунктов.
                        </span>
                    </div>
                </li>
                <li class="mt-3">
                    <div class="d-table">
                        <span class="numberCircle">2</span>
                        <span class="nav-text d-table-cell align-middle pl-2">
                 	Специалисты компании утилизируют лом под ключ, то есть проводят все вышеописанные этапы без участия клиента. После того как будет проведена оценка сырья и взвешивание на высокоточных весах, мы производим полный расчет удобным для клиента способом прямо на месте приемки.
                </span>
                    </div>
                </li>
            </ul>
            <p>
                Если металлолом доставляется самовывозом, то цена на него будет значительно выше. Только в этом случае
                клиенту придется позаботиться о привлечении спецтехники и третьих лиц, которые проведут демонтаж и резку
                металлолома.
            </p>
            <p>
                Если Вы хотите ознакомиться с перечнем услуг Компании «ЛМК-Москва» и расценками на лом металлов более
                подробно, то обращайтесь к менеджерам нашей компании по телефону.
            </p>
        </div>
        @include('includes.banners.why-are-we')
    </div>
@endsection
