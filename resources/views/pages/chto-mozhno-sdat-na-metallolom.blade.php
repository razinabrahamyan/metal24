@extends('layouts.app')
@section('content')
    <div class="col-12 col-lg-9 col-xl-9" id="contacts-page">
        {{\DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render(request()->segment(1), $title)}}
        <div class="content">
            <h1 itemprop="name" class="h4">Какой металлолом можно сдать</h1>
            <div class="container p-0 mt-3 mb-3">
                <div class="col-12 row d-flex p-0 m-0">
                    @foreach($markets as $market)
                        <div class="col-6 col-lg-4 col-md-4 p-1 d-flex flex-wrap">
                            <div class="card w-100 p-0 base-border base-br overflow-hidden">
                                <img loading="lazy" src="{{asset('/img/forms-img/'.$market->slug->slug.'.webp')}}"
                                     class="card-img-top" alt="Ломовоз" title="Ломовоз">
                                <div class="card-body text-center">
                                    <span class="card-text text-center fs-18 strong">{{$market->title}}</span>
                                </div>
                                <footer class="mb-3">
                                    <div class="col-9 b-btn-base text-center m-auto p-0">
                                        <a href="{{route($market->slug->slug)}}" class="btn text-light base-br">
                                            Подробнее
                                        </a>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    @endforeach
                    @foreach($markets as $market)
                        @if(!empty($market->categories))
                            @foreach($market->categories as $category)
                                @if(!empty($category->products))
                                    @foreach($category->products as $products)
                                        <div class="col-6 col-lg-4 col-md-4 p-1 d-flex flex-wrap">
                                            <div class="card w-100 p-0 base-border base-br overflow-hidden">
                                                <img loading="lazy"
                                                     src="{{asset('/img/forms-img/'.$products->slug->slug.'.webp')}}"
                                                     class="card-img-top" alt="Ломовоз 2" title="Ломовоз 2">
                                                <div class="card-body text-center">
                                                    <span class="card-text text-center fs-18 strong">{{$products->title}}</span>
                                                </div>
                                                <footer class="mb-3">
                                                    <div class="col-9 b-btn-base text-center m-auto p-0">
                                                        <a href="{{route($products->slug->slug)}}"
                                                           class="btn text-light base-br">
                                                            Подробнее
                                                        </a>
                                                    </div>
                                                </footer>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
