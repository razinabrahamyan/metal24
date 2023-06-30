@extends('layouts.app')
@section('content')
    <div class="col-12 col-lg-9 col-xl-9" id="contacts-page">
        {{\DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render(request()->segment(1))}}
        <div class="content">
            <h1 itemprop="name" class="h3">Демонтаж металлоконструкций в Москве и МО</h1>
            @include('includes.forms.form_6')
            <p>
                Старые здания и сооружения промышленного и жилого типа, эксплуатационный срок которых истек, включают в
                свои конструкции большое количество металла, который может быть сдан на рынке вторсырья.
            </p>
            <p>
                Компания «ЛМК» осуществляет демонтаж металлоконструкций в Москве и МО. Благодаря наличию всей
                необходимой спецтехники и инструментов, мы работаем быстро и в максимально сжатый период времени
                проводим полное очищение территории от старого металлолома крупных габаритов.
            </p>
            <p>
                В штат нашей компании входят специалисты разных областей, которые за много лет работы накопили
                достаточно практических навыков по безопасному проведению демонтажа конструкций из металла.
            </p>
            <p>
                Начинаем мы свою работу с составления генерального плана, в котором учтены все технологические нормы, а
                также ППР и ПОС. Стоимость демонтажа металлоконструкций рассчитывается индивидуально с учетом
                особенностей и сложности работ.
            </p>
            <h2>
                За демонтаж каких конструкций берется Компания «ЛМК-Москва»?
            </h2>
            <p>
                Наша компания комплексно подходит к выполнению любой поставленной задачи, гарантируя безупречное
                качество. На демонтаж и вывоз металлоконструкций цена в нашей компании выше, чем у конкурентов.
            </p>
            <p>
                Компания «{{\Illuminate\Support\Facades\Config::get('app.name_ru')}}» имеет большой спектр
                <a href="{{route('uslugi-demontazha')}}" class="text-decoration-underline text-dark">
                    услуг по демонтажу
                </a>
            </p>
            <p>
                Для проведения демонтажа конструкций из металла мы используем высокотехнологичную спецтехнику и
                профессиональный инструмент, поэтому можем выполнять самые тяжелые работы и браться за заказы больших
                объемов. Наша команда в любой момент может приступить к разбору:
            </p>
            <ul class="col-12 p-0 mb-3">
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
          	гаражей, котельных, складов
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
            	заводов, крупногабаритной спецтехники
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
         	цехов, ангаров, торговых павильонов;
            </span>
                    </div>
                </li>
            </ul>
            <p>
                Перед тем, как начать демонтаж и вывоз металлоконструкций в Москве и МО, мы подробно обсуждаем с
                клиентом следующие этапы сотрудничества:
            </p>
            <ul class="col-12 p-0 mb-3">
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
          		График проведения работ, который составляется совместно с заказчиком и утверждается им
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
            	Определение перечня той техники, которая понадобится для осуществления намеченных работ
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
       	Сроки очищения территории клиента от ненужного металлолома.
            </span>
                    </div>
                </li>
            </ul>

            <div class="container row ms-regions m-0 mb-4 p-0 justify-content-center">
                @foreach($dismantling->take(8) as $item)
                    <a href="{{route($item->slug->slug)}}"
                       class="d-flex flex-wrap col-2 col-md-3 col-sm-4 col-6 p-0 pt-1 pr-1 text-decoration-none text-light">
                        <div class="ms-regions-item row col-12 p-0 base-br bg-base-color h-100 m-auto text-center">
                            <div class="col-12 p-2 h-min-content align-self-center">
                                <i class="fas fa-tools fa-2x"></i>
                                <p class="h5 m-0 mt-2 text-light fs-13">
                                    {{$item->title}}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
                <a href="{{route('uslugi-demontazha')}}"
                   class="d-flex flex-wrap col-2 col-md-3 col-sm-4 col-6 p-0 pt-1 pr-1 text-decoration-none text-light">
                    <div class="ms-regions-item row col-12 p-0 base-br bg-base-color h-100 m-auto text-center">
                        <div class="col-12 p-2 h-min-content align-self-center">
                            <i class="far fa-list-alt fa-2x"></i>
                            <p class="h5 m-0 mt-2 text-light fs-13">
                                Посмотреть все услуги демонтажа
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <h2>
                Какие металлоконструкции мы готовы разобрать
            </h2>
            <div class="container base-border base-br mb-3">
                <div class="container row m-auto justify-content-md-around">
                    <ul class="col-12 col-lg-4 col-md-4 p-0 mb-3">
                        <li class="mt-2">
                            <div class="d-table">
                                <i class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                                <span class="nav-text d-table-cell align-middle pl-2">
                           Металлоконструкции
                        </span>
                            </div>
                        </li>
                        <li class="mt-2">
                            <div class="d-table">
                                <i class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                                <span class="nav-text d-table-cell align-middle pl-2">
                           Гаражи
                        </span>
                            </div>
                        </li>
                        <li class="mt-2">
                            <div class="d-table">
                                <i class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                                <span class="nav-text d-table-cell align-middle pl-2">
                           Котельные
                        </span>
                            </div>
                        </li>
                        <li class="mt-2">
                            <div class="d-table">
                                <i class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                                <span class="nav-text d-table-cell align-middle pl-2">
                           Склады
                        </span>
                            </div>
                        </li>
                        <li class="mt-2">
                            <div class="d-table">
                                <i class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                                <span class="nav-text d-table-cell align-middle pl-2">
                           Цехи
                        </span>
                            </div>
                        </li>
                    </ul>
                    <ul class="col-12 col-lg-4 col-md-4 p-0 mb-3">
                        <li class="mt-2">
                            <div class="d-table">
                                <i class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                                <span class="nav-text d-table-cell align-middle pl-2">
                                    Ангары
                                </span>
                            </div>
                        </li>
                        <li class="mt-2">
                            <div class="d-table">
                                <i class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                                <span class="nav-text d-table-cell align-middle pl-2">
                                    Краны
                                </span>
                            </div>
                        </li>
                        <li class="mt-2">
                            <div class="d-table">
                                <i class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                                <span class="nav-text d-table-cell align-middle pl-2">
                                    Торговые павильоны
                                </span>
                            </div>
                        </li>
                        <li class="mt-2">
                            <div class="d-table">
                                <i class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                                <span class="nav-text d-table-cell align-middle pl-2">
                                    Заводы
                                </span>
                            </div>
                        </li>
                        <li class="mt-2">
                            <div class="d-table">
                                <i class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                                <span class="nav-text d-table-cell align-middle pl-2">
                                    Утилизируем спецтехнику
                               </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <h2>
                Когда необходим вызов специалистов «ЛМК»?
            </h2>
            <p>
                Старые металлоконструкции могут доставлять много хлопот, а поэтому их разбор и вывоз с территории
                является необходимостью. Если непригодная конструкция небольшого размера, то обычный человек может
                своими силами демонтировать ее и отвезти на пункт приема металлолома.
            </p>
            <p>
                Но, существует ряд ситуаций, когда вызов специалистов, которые профессионально демонтируют подобные
                сооружения, необходим:
            </p>
            <ul class="col-12 p-0 mb-3">
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
          	Демонтаж осуществляется на ограниченной территории с затрудненным подъездом грузовой спецтехники
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
            	Работы проводятся на высоте
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
   	Срок разбора конструкции минимальный
            </span>
                    </div>
                </li>
            </ul>
            <p>
                В этих ситуациях не стоит полагаться на свои силы, так как проводиться они должны только
                профессиональными, опытными работниками, которые умеют выполнять сложные задачи.
            </p>
            <p>
                Компания «ЛМК-Москва» предлагает разрезать металл и провести демонтаж металлоконструкций с соблюдением
                все норм безопасности. Наши сотрудники имеют разрешения для работы на высоте, а также снабжены всеми
                необходимыми для работы инструментами: строительными лесами, поддерживающими лестницами, страховками.
            </p>
            <p>
                В наш автопарк спецтехники входят следующие агрегаты: автокраны, экскаваторы, ломовозы и так далее. Мы
                проводим демонтаж металлоконструкций по выгодной цене за тонну по прайсу. По всем интересующим Вас
                вопросам обращайтесь к нашим менеджерам.
            </p>
            <div class="mt-4 mb-4" itemscope="" itemtype="https://schema.org/FAQPage">
                <div class="faq w-100">
                    <h2 class="faq_text mb-3">
                        Вопросы о проведении демонтажа и вывозе металлолома
                    </h2>
                    <div class="faq-questions  p-3 base-br overflow-hidden">
                        <div class="mb-4" itemprop="mainEntity" itemscope="" itemtype="https://schema.org/Question">
                            <div class="faq-question-text cursor-pointer"
                                 onclick="DomHelper.dropDownQuestions(this)"
                                 itemprop="name">
                                <h3 class="h6">
                                    	Осуществляет ли компания демонтаж металлоконструкций?
                                </h3>
                            </div>
                            <div class="faq-question-answer base-br overflow-hidden" itemprop="acceptedAnswer"
                                 itemscope=""
                                 itemtype="https://schema.org/Answer">
                                <p class="h6" itemprop="text">
                                    Компания «ЛМК-Москва» производит демонтаж металлоконструкций быстро и эффективно. Благодаря собственному автопарку спецтехники и наличию необходимого оборудования мы демонтируем объекты повышенной сложности. В штате состоят профессиональные резчики и грузчики, которые выполняют все работы оперативно и строго с соблюдением техники безопасности.
                                </p>
                                <meta itemprop="upvoteCount" content="8">
                                <div itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                                    <meta itemprop="name"
                                          content="{{\Illuminate\Support\Facades\Config::get('app.name_ru')}}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4" itemprop="mainEntity" itemscope="" itemtype="https://schema.org/Question">
                            <div class="faq-question-text cursor-pointer"
                                 onclick="DomHelper.dropDownQuestions(this)"
                                 itemprop="name">
                                <h3 class="h6">
                                   Какая цена на услугу демонтажа?
                                </h3>
                            </div>
                            <div class="faq-question-answer base-br overflow-hidden" itemprop="acceptedAnswer"
                                 itemscope=""
                                 itemtype="https://schema.org/Answer">
                                <p class="h6" itemprop="text">
                                    Стоимость на услугу по демонтажу металлоконструкций определяется в каждом конкретном случае индивидуально. Как показывает практика, чаще всего мы бесплатно проводим разбор металлоконструкций в 90% случаях.
                                </p>
                                <meta itemprop="upvoteCount" content="8">
                                <div itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                                    <meta itemprop="name"
                                          content="{{\Illuminate\Support\Facades\Config::get('app.name_ru')}}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4" itemprop="mainEntity" itemscope="" itemtype="https://schema.org/Question">
                            <div class="faq-question-text cursor-pointer"
                                 onclick="DomHelper.dropDownQuestions(this)"
                                 itemprop="name">
                                <h3 class="h6">
                                    	С помощью какой техники производится демонтаж объектов?
                                </h3>
                            </div>
                            <div class="faq-question-answer base-br overflow-hidden" itemprop="acceptedAnswer"
                                 itemscope=""
                                 itemtype="https://schema.org/Answer">
                                <p class="h6" itemprop="text">
                                    Применение той или иной техники для осуществления демонтажа объекта зависит от степени сложности предстоящих работ. Мы используем спецтехнику в виде ломовозов с грейферной установкой, автокранов, экскаваторов и так далее.
                                    <br><br>
                                    Практически в каждом случае требуется резка металлоконструкций. В нашей компании имеются профессиональные резчики, которые выезжают на объект бригадой. Услуги по резке предоставляются бесплатно.
                                </p>
                                <meta itemprop="upvoteCount" content="8">
                                <div itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                                    <meta itemprop="name"
                                          content="{{\Illuminate\Support\Facades\Config::get('app.name_ru')}}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4" itemprop="mainEntity" itemscope="" itemtype="https://schema.org/Question">
                            <div class="faq-question-text cursor-pointer"
                                 onclick="DomHelper.dropDownQuestions(this)"
                                 itemprop="name">
                                <h3 class="h6">
                                   	Можно ли заказать демонтаж металлоконструкций без последующей сдачи их на лом?
                                </h3>
                            </div>
                            <div class="faq-question-answer base-br overflow-hidden" itemprop="acceptedAnswer"
                                 itemscope=""
                                 itemtype="https://schema.org/Answer">
                                <p class="h6" itemprop="text">
                                    Компания не производит демонтаж металлоконструкций без последующей сдачи металла в наши пункты приёма. Приоритетной целью «ЛМК-Москва» является именно приём металлолома, основная спецификация — это металлозаготавливающая ниша. Мы предлагаем высокие цены на покупку лома цветных и чёрных металлов по Москве, Московской области.
                                </p>
                                <meta itemprop="upvoteCount" content="8">
                                <div itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                                    <meta itemprop="name"
                                          content="{{\Illuminate\Support\Facades\Config::get('app.name_ru')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h2>
                Примеры работ по демонтажу объектов с металлоконстрциями
            </h2>
            <div class="container p-0">
                <div class="row">
                    <div class="col-sm-6 mb-3 d-flex flex-wrap">
                        <div class="card">
                            <img src="{{asset('img/dismantling-works/dismantling-1.webp')}}" class="card-img-top"
                                 alt="Демонтаж цеха" title="Демонтаж цеха">
                            <div class="card-body">
                                <h3 class="card-title h6">Демонтаж цеха</h3>
                                <p class="card-text">Работа была выполнена в течение 36 часов</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3 d-flex flex-wrap">
                        <div class="card">
                            <img src="{{asset('img/dismantling-works/dismantling-2.webp')}}"
                                 class="card-img-top" alt="Демонтаж старых торговых павильонов"
                                 title="Демонтаж старых торговых павильонов">
                            <div class="card-body">
                                <h3 class="card-title h6">Демонтаж старых торговых павильонов</h3>
                                <p class="card-text">Работа была выполнена в течение 48 часов</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3 d-flex flex-wrap">
                        <div class="card">
                            <img src="{{asset('img/dismantling-works/dismantling-3.webp')}}"
                                 class="card-img-top" alt="Демонтаж производственного цеха 1"
                                 title="Демонтаж производственного цеха 1">
                            <div class="card-body">
                                <h3 class="card-title h6">Демонтаж производственного цеха</h3>
                                <p class="card-text">Работа была выполнена в течение 48 часов</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3 d-flex flex-wrap">
                        <div class="card">
                            <img src="{{asset('img/dismantling-works/dismantling-4.webp')}}"
                                 class="card-img-top" alt="Демонтаж производственного цеха 2"
                                 title="Демонтаж производственного цеха 2">
                            <div class="card-body">
                                <h3 class="card-title h6">Демонтаж производственного цеха</h3>
                                <p class="card-text">Работа была выполнена в течение 48 часов</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{--            <h2>--}}
{{--                Видео о процессе работы--}}
{{--            </h2>--}}
{{--            <div class="container row p-0 m-0 mb-3">--}}
{{--                <div class="col-12 col-lg-6 col-md-6 p-0 pr-0 pr-lg-1">--}}
{{--                    <iframe class="col-12 p-0 base-border base-br" height="315"--}}
{{--                            src="https://www.youtube.com/embed/_bVmn-aqM5Y?controls=0&autoplay=0&mute=1"--}}
{{--                            title="YouTube video player" frameborder="0"--}}
{{--                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"--}}
{{--                            allowfullscreen></iframe>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-lg-6 col-md-6 p-0 pl-0 pl-lg-1">--}}
{{--                    <iframe class="col-12 p-0 base-border base-br" height="315"--}}
{{--                            src="https://www.youtube.com/embed/H-1iwkCGJCY?controls=0&autoplay=0&mute=1"--}}
{{--                            title="YouTube video player" frameborder="0"--}}
{{--                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"--}}
{{--                            allowfullscreen></iframe>--}}
{{--                </div>--}}
{{--            </div>--}}
            @include('includes.forms.form_4')
            @include('includes.banners.why-are-we')
            <div class="mt-4 d-block d-lg-none d-md-none" id="licence">
                @include('includes.banners.licnece')
            </div>
        </div>
    </div>
@endsection
