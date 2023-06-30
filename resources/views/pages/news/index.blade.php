@extends('layouts.app')
@section('meta_title', 'Новости')
@section('meta_description', 'Новости')
@section('title', 'Новости - '.$title_rand)
@section('content')
    <div class="col-12 col-lg-9 col-xl-9" id="news_page" itemscope="">
        {{\DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render(request()->segment(1))}}
        <h1 itemprop="name" class="h3 text-secondary d-flex justify-content-center">Новости</h1>
        <div class="row">
            @foreach($news as $item)
                <div class="col-md-6 col-12 mt-2 d-flex align-items-stretch">
                    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="card-title">
                            <div>
                                <p style="height: 60px;line-height: 21px;" class="fs-18 font-weight-bold">
                                    {{$item->main_title}}
                                </p>
                            </div>
                            <img class="card-img-top img-fluid" src="{{asset($item->image_1)}}" alt="{{$item->title}}"
                                 title="{{$item->title}}">
                            <p class="card-description-text p-0 mt-4">
                                {!! $item->short_description !!}
                            </p>
                        </div>
                        <div>
                            <a href="{{route($item->slug['slug'])}}">
                                <button id="more" class="btn btn-outline-primary btn-block">Подробнее</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('styles')
    <style>
        #more {
            color: #414e70;
            border-color: #414e70;
        }
        #more:hover {
            background-color: #414e70;
            color: white;
        }
        #more:not(:disabled):not(.disabled).active:focus, #more:not(:disabled):not(.disabled):active:focus, .show>#more.dropdown-toggle:focus {
            background-color: #414e70;
            box-shadow: 0 0 0 0.2rem rgb(65 78 112);
        }
        .card-description-text {
            margin-bottom: 20px;
            font-weight: 400;
            font-size: 14px;
            line-height: 16px;
            padding: 5px;
            text-overflow: ellipsis;
            height: 140px;
            overflow: hidden;
            position: relative;
        }
        .card-description-text::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            height: 75px;
            width: 100%;
            background: #fff;
            background: linear-gradient(
                    0deg
                    ,rgba(255,255,255,1) 0,rgba(255,255,255,0) 100%);
            display: block;
        }
        #news_page card {
            transition: all .2s ease-in-out;
        }
        #news_page card:hover {
            transform: scale(1.1)
        }
    </style>
@endpush
