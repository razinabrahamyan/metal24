@extends('layouts.app')
@section('content')
    <div class="col-12 col-lg-9 col-xl-9" id="contacts-page">
        {{\DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render(request()->segment(1))}}
        <h1 itemprop="name" class="h3">Демонтаж</h1>
        <div class="content">
            <div class="container p-0 mt-3 mb-3">
                <div class="col-12 row d-flex p-0 m-0">
                    @foreach($dismantling as $item)
                        <div class="col-6 col-lg-4 col-md-4 p-1 d-flex flex-wrap">
                            <div class="card w-100 p-0 base-border base-br overflow-hidden">
                                <img src="{{asset('img/forms-img/'.$item->slug->slug.'.webp')}}" class="card-img-top"
                                     alt="Ломовоз" loading="lazy" title="Ломовоз">
                                <div class="card-body text-center">
                                    <span class="card-text text-center fs-18 strong">{{$item->title}}</span>
                                </div>
                                <footer class="mb-3">
                                    <div class="col-9 b-btn-base text-center m-auto p-0">
                                        <a href="{{$item->slug->slug}}" class="btn text-light base-br">
                                            Подробнее
                                        </a>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    @endforeach
                        <div class="m-auto mt-2">
                            {!! $dismantling->links() !!}
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
