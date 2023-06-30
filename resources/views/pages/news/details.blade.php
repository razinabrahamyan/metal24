@extends('layouts.app')
@section('meta_title', $news->title)
@section('meta_description', $news->title)
@section('title', $news->title.' - '.$title_rand)
@section('content')
    <div class="col-12 col-lg-9 col-xl-9 shadow shadow-bottom">
        {{\DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render(request()->segment(1), $news->title)}}
        <div id="news_details" itemscope itemtype="https://schema.org/NewsArticle">
            <meta itemprop="genre" content="О Металлоломе"/>
            <section class="mt-5">
                <h1 class="h5 d-flex justify-content-center font-bold mb-4" itemprop="headline">
                    {!! $news->title !!}
                </h1>

                <meta itemprop="datePublished" content="{{date_format($news->created_at,'Y-m-d')}}/">
                <meta itemprop="dateModified" content="2021-07-14"/>
                <div class="d-none" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                    <meta itemprop="name" content="ЛМК-Москва">
                    <meta itemprop="telephone" content="+7 (925) 433-35-56">
                    <meta itemprop="address" content="Каширское шоссе 23 км, вл3а">
                    <span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                        <img class="itemprops" itemprop="url image" width="411" height="268"
                             src="{{asset('img/core-img/logo_long.png')}}" alt="Лого" title="Лого"/>
                        <meta itemprop="width" content="411">
                        <meta itemprop="height" content="268">
                    </span>
                </div>
                <a itemprop="mainEntityOfPage" href="{{request()->url()}}" style="display: none">
                    <strong>Автор: ЛМК-Москва</strong>
                </a>
                <div style="display: none" itemprop="author" itemscope itemtype="https://schema.org/Person">
                    <span itemprop="name">ЛМК</span>
                    <span itemprop="jobTitle">О Металлоломе</span>
                </div>
            </section>
            <div itemprop="description">
                {!! $news->text_1 !!}
            </div>
            @if($news->image_1)
                <div class="row mt-5 mb-3">
                    <div class="col-12 col-lg-6 col-md-6"><br>
                        <img src="{{asset($news->image_1)}}" alt="{{$news->title}}" title="{{$news->title}}"
                             loading="lazy" itemprop="image">
                    </div>
                    <div class="col-12 col-lg-6 col-md-6"><br>
                        <img src="{{asset($news->image_2)}}" alt="{{$news->title}}" title="{{$news->title}}"
                             loading="lazy" itemprop="image">
                    </div>
                </div>
            @endif
            {!! $news->text_2 !!}
        </div>
        <div class="news-socials container mt-5 mb-4">
            <h5>Поделиться :</h5>
            <div class="row mt-3 justify-content-center">
                <div class="col-12 col-lg-3">
                    <a class="btn btn-sm btn-social btn-fb"
                       href="https://www.facebook.com/sharer/sharer.php?u={{url()->full()}}" target="_blank"
                       title="Share this post on Facebook">
                        <i class="fab fa-facebook-square"></i> Поделиться
                    </a>
                </div>
                <div class="col-12 col-lg-3">
                    <a class="btn btn-sm btn-social" style="background-color: #007bff"
                       href="https://vk.com/share.php?url={{url()->full()}}" target="_blank"
                       title="Share this post on VK">
                        <i class="fab fa-vk"></i> Поделиться
                    </a>
                </div>
                <div class="col-12 col-lg-3">
                    <a class="btn btn-sm btn-social btn-tw" href="https://twitter.com/share?url={{url()->full()}}"
                       target="_blank" title="Share this post on Twitter">
                        <i class="fab fa-twitter"></i> Поделиться
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <style>
        .news-socials {
            padding: 50px;
            text-align: center;
        }

        /*Solid Social Share Buttons*/

        .news-socials .btn-social,
        .news-socials .btn-social:visited,
        .news-socials .btn-social:focus,
        .news-socials .btn-social:hover,
        .news-socials .btn-social:active {
            color: #ffffff;
            text-decoration: none;
            transition: opacity .15s ease-in-out;
        }

        .news-socials .btn-social:hover,
        .news-socials .btn-social:active {
            opacity: .75;
        }

        .news-socials .btn-fb {
            background-color: #3b5998;
        }

        .news-socials .btn-tw {
            background-color: #1da1f2;
        }

        .news-socials .btn-in {
            background-color: #0077b5;
        }

        .news-socials .btn-gp {
            background-color: #db4437;
        }

        .news-socials .btn-rd {
            background-color: #ff4500;
        }

        .news-socials .btn-hn {
            background-color: #ff4000;
        }

        .news-socials .fab, .far {
            margin-top: 4px;
        }

        .news-socials .row .col-12 {
            padding: 0 !important;
            margin-top: 10px;
        }

        .news-socials a {
            width: 90%;
        }
    </style>
@endpush
