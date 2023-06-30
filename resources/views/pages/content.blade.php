@extends('layouts.app')
@section('content')
    <div class="col-12 col-lg-9 col-xl-9" id="market-page"
         @if($table === 'markets' || $table === 'categories' || $table === 'products') itemscope=""
         itemtype="https://schema.org/Product" @endif>
        {{--HEAD--}}
        @if($table === 'markets' || $table === 'categories' || $table === 'products')
            {{\DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render($table, request()->segment(1))}}
        @else
            {{\DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render(request()->segment(1))}}
        @endif
        <div class="d-lg-flex d-md-flex mb-1">
            <h1 @if($table === 'markets' || $table === 'categories' || $table === 'products')
                itemprop="name" @endif class="h3">
                {{$h1}} &nbsp;
            </h1>
            <span class="h3 text-success">
                @if(!empty($productPrice))
                    до {{str_replace(" ","",$productPrice->metalPrice->price_above_from_to)}} ₽ / @if(str_replace(" ","",$productPrice->metalPrice->price_above_from_to)>10000)т. @else кг. @endif
                @elseif(!empty($categoriesPrices))
                    до {{str_replace(" ","",$categoriesPrices->pluck('metalPrice.price_above_from_to')->max())}} ₽ / @if(str_replace(" ","",$categoriesPrices->pluck('metalPrice.price_above_from_to')->max())>10000)т. @else кг. @endif
                @elseif(!empty($marketPrices))
                    до {{str_replace(" ","",\App\Traits\MaxPrice::getMarketMaxPrice($marketPrices))}} ₽ / @if(str_replace(" ","",\App\Traits\MaxPrice::getMarketMaxPrice($marketPrices))>10000)т. @else кг. @endif
                @endif
            </span>
        </div>
        {{--HEAD--}}

        {{--TEXT--}}
        @if(!empty($content->text_1))
            <div class="content">
                {{--FORM--}}
                @if(!empty($content->form_1))
                    @include("includes.forms.form_$content->form_1")
                @endif
                {{--FORM--}}
                {!! $content->text_1 !!}
                @include('includes.images.content-img')
            </div>
        @endif
        {{--TEXT--}}

        {{--PRICE TABLE--}}
        @if(!empty($productPrice))
            @include('includes.price-tables.product_price')
        @elseif(!empty($categoriesPrices))
            @include('includes.price-tables.category_price')
        @elseif(!empty($marketPrices))
            @foreach($marketPrices as $categoriesPrices)
                @include('includes.price-tables.category_price',['categoriesPrices' => $categoriesPrices])
            @endforeach
        @endif
        {{--PRICE TABLE--}}

        {{--BANNER--}}
        @if(!empty($content->text_2))
            @include('includes.banners.calculator')
        @endif
        {{--BANNER--}}


        <div class="content mt-4">
            {{--TEXT--}}
            @if(!empty($content->text_2))
                {!! $content->text_2 !!}
            @endif
            {{--TEXT--}}
        </div>

        {{--ABOUT US--}}
        @if(!empty($content->remark))
            <div class="about-us col-12 mt-4">
                @include('includes.banners.about-us-banner')
                @foreach($content->remark->data as $remark)
                    <div class="row">
                        <div class="d-flex align-items-center col-12 p-0 mt-3">
                            <div class="d-inline mr-3">
                                <i class="far fa-hand-point-right fa-4x base-color"></i>
                            </div>
                            <div class="d-inline">
                                {!! $remark !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        {{--ABOUT US--}}

        {{--WHY ARE WE--}}
        {{--        @include('includes.banners.why-are-we')--}}
        {{--WHY ARE WE--}}

        {{--FORM--}}
        @if(!empty($content->form_3))
            <div class="mt-4" id="ff-22">
                @include("includes.forms.form_$content->form_3")
            </div>
        @endif
        {{--FORM--}}

        {{--FAQ--}}
        @if(!empty($content->faq))
            <div class="mt-4 mb-4" itemscope="" itemtype="https://schema.org/FAQPage">
                <div class="faq w-100">
                    <h2 class="faq_text mb-3">
                        {!! $content->faq->header !!}
                    </h2>
                    <div class="faq-questions  p-3 base-br overflow-hidden">
                        @foreach($content->faq->data as $faq)
                            <div class="mb-4" itemprop="mainEntity" itemscope=""
                                 itemtype="https://schema.org/Question">
                                <div class="faq-question-text cursor-pointer"
                                     onclick="DomHelper.dropDownQuestions(this)"
                                     itemprop="name">
                                    <span class="h6">{!! $faq->question !!}</span>
                                </div>
                                <div class="faq-question-answer base-br overflow-hidden" itemprop="acceptedAnswer"
                                     itemscope=""
                                     itemtype="https://schema.org/Answer">
                                    <p itemprop="text" class="h6">
                                        {!! $faq->answer !!}
                                    </p>
                                    <meta itemprop="upvoteCount" content="8">
                                    <div itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                                        <meta itemprop="name"
                                              content="{{\Illuminate\Support\Facades\Config::get('app.name_ru')}}">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
        {{--FAQ--}}
        {{--LICNECE--}}
        <div class="mt-4 d-block d-lg-none d-md-none" id="licence">
            @include('includes.banners.licnece')
        </div>
        {{--LICNECE--}}

{{--        @desktop--}}
{{--        <div class="col-12 mt-4">--}}
{{--            <div class="row justify-content-between">--}}
{{--                <span>--}}
{{--                    @if(!empty($prevSlug) && (!empty($prevSlug->h1) || !empty($prevSlug->slugable->dative_name)))--}}
{{--                        <a href="{{$prevSlug->slug}}"--}}
{{--                           class="secondary-hover-color color-black float-left text-decoration-underline  mt-1">--}}
{{--                            <span class="d-flex">--}}
{{--                                 <span class=" text-decoration-underline">--}}
{{--                                    <i class="fas fa-arrow-left mr-1"></i>--}}
{{--                                 </span>--}}
{{--                                 <span class="d-flex align-items-center">--}}
{{--                                     {{$prevSlug->slugable->dative_name ?? $prevSlug->h1}}--}}
{{--                                 </span>--}}
{{--                            </span>--}}
{{--                        </a>--}}
{{--                    @endif--}}
{{--                </span>--}}
{{--                <span>--}}
{{--                    @if(!empty($nextSlug) && (!empty($nextSlug->h1) || !empty($nextSlug->slugable->dative_name)))--}}
{{--                        <a href="{{$nextSlug->slug}}"--}}
{{--                           class="secondary-hover-color color-black float-right mt-1">--}}
{{--                            <span class="d-flex">--}}
{{--                                <span class=" text-decoration-underline">--}}
{{--                                    {{$nextSlug->slugable->dative_name ?? $nextSlug->h1}}--}}
{{--                                </span>--}}
{{--                                <span class="d-flex align-items-center">--}}
{{--                                    <i class="fas fa-arrow-right ml-1"></i>--}}
{{--                                </span>--}}
{{--                            </span>--}}
{{--                        </a>--}}
{{--                    @endif--}}
{{--                </span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        @enddesktop--}}
    </div>
@endsection
