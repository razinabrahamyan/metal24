@extends('layouts.app')
@section('content')
    <div class="col-12 col-lg-9 col-xl-9" id="contacts-page">
        {{\DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render(request()->segment(1), $title)}}
        <div class="content">
            <h1 itemprop="name" class="h4">Где можно сдать металлолом с вывозом в Московской области</h1>
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
            <h2 data-toggle="collapse" href="#cities" aria-expanded="false" aria-controls="cities"
                class="base-color secondary-hover-color">
                Мы принимаем металлолом с вывозом по всей Московской области.
            </h2>
            <div id="cities" class="container row ms-regions m-0 mb-4 p-0 justify-content-center">
                @foreach($regions['cities'] as $city)
                    <a href="{{route($city->slug->slug)}}"
                       class="col-1 col-md-2 col-sm-4 col-6 p-0 pt-1 pr-1 text-decoration-none text-light">
                        <div class="ms-regions-item row col-12 p-0 base-br bg-base-color h-100 m-auto text-center">
                            <div class="col-12 p-2 h-min-content align-self-center">
                                <i class="fas fa-map-marker-alt fa-3x"></i>
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
            @include('includes.forms.form_1')
        </div>
    </div>
@endsection
