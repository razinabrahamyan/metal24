@extends('layouts.app')
@section('content')
    <div class="col-12 col-lg-9 col-xl-9" id="contacts-page">
        {{\DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render(request()->segment(1))}}
        <div class="content">
            <h1 itemprop="name" class="h3">Услуги</h1>
            <p>
                Изделия из металла являются неотъемлемыми элементами, широко используемыми в сферах строительства и
                ремонта. Во всем мире потребление металлопродукции велико и постоянно растет, в результате чего
                постоянно требуется производить новое металлическое сырье.
            </p>
            <p>
                Компания «ЛМК-Москва» осуществляет деятельность в сфере приема лома черных и цветных металлов с
                последующей поставкой крупным перерабатывающим фабрикам. Если Вам необходимо сдать лом — обращайтесь в
                пункт приема металлолома нашей компании.
            </p>
            <h2>Услуги Компании «ЛМК»</h2>
            <p>
                Своим клиентам мы предлагаем широкий спектр услуг, так или иначе связанных с манипуляциями с
                металлоломом. Помимо доброжелательного отношения и высоких расценок на материалы, наши клиенты могут
                рассчитывать на следующие виды услуг:
            </p>
                <div class="card mb-3 base-border base-br overflow-hidden">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img loading="lazy" src="{{asset('img/service/foto-usluga-vivoz-metalloloma.webp')}}"
                                 class="card-img h-100 w-100 object-fit-cover border-r-0" alt="Услуга. Вывоз металлолома"
                                 title="Услуга. Вывоз металлолома">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h3 class="card-title text-center h5">Вывоз металлолома</h3>
                                <p>
                                    Вывоз металлолома специалистами нашей компании осуществляется быстро, благодаря наличию
                                    собственного автопарка спецтехники, включая экскаваторы, ломовозы и так далее.
                                    В штат сотрудников входят профессиональные грузчики и стропальщики, которые имеют
                                    достаточно опыта, чтобы оперативно, при этом максимально аккуратно разбирать, резать и
                                    грузить материал и изделия с последующей транспортировкой до наших пунктов приема. В
                                    коллективе трудится достаточное количество работников для того, чтобы справляться с
                                    большими объемами работы по вывозу металлопродукции.
                                </p>
                                <div class="col-6 b-btn-base text-center m-auto pl-0">
                                    <a href="{{route('vyivoz-metalloloma')}}" class="btn text-light base-br">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 base-border base-br overflow-hidden">
                    <div class="row no-gutters">
                        <div class="col-md-6 order-0 order-md-1 order-lg-1">
                            <img loading="lazy"
                                 src="{{asset('img/service/foto-usluga-demontazh-metallokonstruktsiy.webp')}}"
                                 class="card-img h-100 w-100 object-fit-cover border-r-0"
                                 alt="Услуга. Демонтаж металлолома" title="Услуга. Демонтаж металлолома">
                        </div>
                        <div class="col-md-6 order-1 order-md-0 order-lg-0">
                            <div class="card-body">
                                <h3 class="card-title text-center h5">Демонтаж металлоконструкций</h3>
                                <p>
                                    Демонтаж металлоконструкций в Москве и МО требуется многим промышленным предприятиям,
                                    складам и строительным базам, ведь старые металлические сооружения, пришедшие в
                                    негодность, доставляют много неудобств и должны своевременно удаляться с территории.
                                    Наша компания проводит демонтажные работы на объекте клиента с соблюдением всех норм
                                    безопасности и согласно разработанного плана. У нас в распоряжении есть все необходимое
                                    для того, чтобы проводить разбор, резку металла безопасно, профессионально и быстро.
                                </p>
                                <div class="col-6 b-btn-base text-center m-auto pl-0">
                                    <a href="{{route('demontazh')}}" class="btn text-light base-br">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 base-border base-br overflow-hidden">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img loading="lazy"
                                 src="{{asset('img/service/foto-usluga-priem-loma-tsvetnikh-metallov.webp')}}"
                                 class="card-img h-100 w-100 object-fit-cover border-r-0" alt="Услуга. Прием чермета"
                                 title="Услуга. Прием чермета">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h3 class="card-title text-center h5">
                                    Вывоз лома цветных и черных металлов с территории клиента
                                </h3>
                                <p>
                                    Вывоз металлолома специалистами нашей компании осуществляется быстро, благодаря наличию
                                    собственного автопарка спецтехники, включая экскаваторы, ломовозы и так далее.
                                    В штат сотрудников входят профессиональные грузчики и стропальщики, которые имеют
                                    достаточно опыта, чтобы оперативно, при этом максимально аккуратно разбирать, резать и
                                    грузить материал и изделия с последующей транспортировкой до наших пунктов приема. В
                                    коллективе трудится достаточное количество работников для того, чтобы справляться с
                                    большими объемами работы по вывозу металлопродукции.
                                </p>
                                <div class="col-6 b-btn-base text-center m-auto pl-0">
                                    <a href="{{route('priem-czvetnogo-metalla')}}"
                                       class="btn text-light base-br">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 base-border base-br overflow-hidden">
                    <div class="row no-gutters">
                        <div class="col-md-6 order-0 order-md-1 order-lg-1">
                            <img loading="lazy"
                                 src="{{asset('img/service/foto-usluga-priem-loma-chernikh-metallov.webp')}}"
                                 class="card-img h-100 w-100 object-fit-cover border-r-0" alt="Услуга. Прием цветмета"
                                 title="Услуга. Прием цветмета">
                        </div>
                        <div class="col-md-6 order-1 order-md-0 order-lg-0">
                            <div class="card-body">
                                <h3 class="card-title text-center h5">Прием лома черных металлов</h3>
                                <p>
                                    Прием лома черных металлов в Москве и МО осуществляется нами на взаимовыгодных условиях.
                                    Предлагаемые расценки на сырье более высокие, чем у конкурирующих организаций. Сдавая в
                                    наши пункты большие объемы металлопродукции, Вы можете рассчитывать на индивидуальные
                                    предложения и максимально привлекательные цены.
                                </p>
                                <div class="col-6 b-btn-base text-center m-auto pl-0">
                                    <a href="{{route('priem-chernogo-loma')}}"
                                       class="btn text-light base-br">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <p>
                По необходимости наши специалисты проведут демонтаж и вывоз материалов, очистив за максимально короткое
                время Ваш производственный или строительный объект. Компания «ЛМК-Москва» предлагает клиентам вывоз и
                прием лома дорого в Москве и МО. Все интересующие вопросы Вы можете задать нашим менеджерам по телефону.
            </p>
            <div class="col-12 p-0">
                @include('includes.forms.form_1')
            </div>
        </div>
    </div>
@endsection
