@extends('layouts.app')
@section('content')
    <div class="col-12 col-lg-9 col-xl-9" id="news_page" itemscope="">
        {{\DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render(request()->segment(1))}}
        <h1 itemprop="name" class="h3 mb-3">Карта сайта</h1>
        <ul class="sitemap">
            <li class="sitemap-root"><a href="/">Главная</a></li>
            <li class="sitemap-main">
                <ul>
                    @foreach($markets as $market)
                        <li>
                            <a href="{{$market['slug']['slug']}}">{{$market->title}}</a>
                            @if(count($market->categories) > 0)
                                <ul>
                                    @foreach($market->categories as $category)
                                        <li><a href="{{$category['slug']['slug']}}">{{$category->title}}</a>
                                            <ul>
                                                @foreach($category->products as $product)
                                                    @if($category->title !== $product->title)
                                                        <li>
                                                            <a href="{{$product['slug']['slug']}}">{{$product->title}}</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <ul>
                                    @foreach($market->products as $product)
                                        <li><a href="{{$product['slug']['slug']}}">{{$product->title}}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                    <li>
                        <a href="/czenyi-na-metall">Цены на металлолом</a>
                    </li>
                    <li>
                        <a href="/kak-sdat-metall">Как сдать металлолом</a>
                    </li>
                    <li>
                        <a href="/uslugi">Услуги</a>
                    </li>
                    <li>
                        <a href="/punkt-priema-metalla">Пункты приема металла</a>
                    </li>
                    <li>
                        <a href="/vyivoz-metalloloma">Вывоз металлолома</a>
                        <ul>
                            @foreach($vyvoz as $item)
                                <li>
                                    <a href="/{{$item->slug}}">{{$item->slugable->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="/demontazh">Демонтаж</a>
                        <ul>
                            @foreach($demontazh as $item)
                                <li>
                                    <a href="/{{$item->slug}}">{{$item->slugable->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="/vyiezdnoj-priyomnyij-punkt">Прием металла с выездом</a>
                        <ul>
                            @foreach($priem_s_vyiezdom as $item)
                                <li>
                                    <a href="/{{$item->slug}}">{{$item->slugable->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        @include('includes.forms.form_1',['title'=>'Карта сайта','custom_form_img'=>'karta-sayta'])
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{asset('user_assets/css/site_tree.css')}}">
@endpush
