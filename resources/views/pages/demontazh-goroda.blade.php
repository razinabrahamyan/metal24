@extends('layouts.app')
@section('content')
    <div class="col-12 col-lg-9 col-xl-9" id="contacts-page">
        {{\DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render(request()->segment(1), $title)}}
        <div class="content">
            <h1 itemprop="name" class="h4">В каких городах мы делаем демонтаж</h1>
            <p>
                Разобрать старую конструкцию из металла и привезти ее в пункт приема не проблема, если сама конструкция
                небольшая и не требует использования оборудования для резки. Однако чаще квалифицированных специалистов,
                занимающихся демонтажем, погрузкой и вывозом металлолома вызывают тогда, когда:
            </p>
            <ul class="col-12 p-0 mb-3">
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
               Конструкция находится на ограниченной территории и ее разборка осложняется невозможностью подогнать крупную технику
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
            Требуется выполнение опасных высотных работ
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
            Необходимо разобрать крупный объект в сжатые сроки
                        </span>
                    </div>
                </li>
            </ul>
            <p>
                <span class="strong">Важно!</span> Все работы должны выполняться профессионально. Не экономьте на
                безопасности: не
                стоит подвергать
                себя или своих сотрудников опасности сорваться с высоты, попасть под обвал старых, поврежденных
                коррозией каркасов и т.д.
            </p>
            <div id="regions" class="container row ms-regions m-0 mb-4 p-0 justify-content-center collapse show">
                @foreach($regions['regions'] as $region)
                    <a href="{{route($region->slug->slug)}}"
                       class="col-2 col-md-3 col-sm-4 col-6 p-0 pt-1 pr-1 text-decoration-none text-light">
                        <div class="ms-regions-item row col-12 p-0 base-br bg-base-color h-100 m-auto text-center">
                            <div class="col-12 p-2 h-min-content align-self-center">
                                <i class="fas fa-truck-moving"></i>
                                <i class="fas fa-truck-moving fa-3x"></i>
                                <p class="h5 m-0 mt-2 text-light fs-12">
                                    {{$region->title}}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <h2 data-toggle="collapse" href="#cities" aria-expanded="false" aria-controls="cities"
                class="base-color text-center secondary-hover-color">
                Мы принимаем металлолом с вывозом по всей Московской области.
            </h2>
            <div id="cities" class="container row ms-regions m-0 mb-4 p-0 justify-content-center">
                @foreach($regions['cities'] as $city)
                    <a href="{{route($city->slug->slug)}}"
                       class="col-1 col-md-2 col-sm-4 col-6 p-0 pt-1 pr-1 text-decoration-none text-light">
                        <div class="ms-regions-item row col-12 p-0 base-br bg-base-color h-100 m-auto text-center">
                            <div class="col-12 p-2 h-min-content align-self-center">
                                <i class="fas fa-truck-moving fa-3x"></i>
                                <p class="h5 mt-2 text-light">
                                    {{$city->title}}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
                <div class="m-auto pt-2">
                    {!! $regions['cities']->links() !!}
                </div>
            </div>
            <p>
                Компания «ЛМК» располагает крупным автопарком специализированной техники для реализации сложных задач по
                демонтажу и вывозу металлолома. Мы имеем собственные поддерживающие лестницы, строительные леса,
                страховки для организации безопасности на территории. У нас работают ответственные специалисты в области
                резки, промышленного альпинизма, погрузки лома.
            </p>
            <p>
                Выполнение демонтажных работ проводится при наличии лома весом более 1 тонны на территории!
            </p>
            @include('includes.forms.form_1')
        </div>
    </div>
@endsection
