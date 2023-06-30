@extends('layouts.app')
@section('content')
    <div class="col-12 col-lg-9 col-xl-9" id="market-page">
        {{\DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render(request()->segment(1))}}
        <div class="content">
            <h1 itemprop="name" class="h3">
                Вывоз металлолома
            </h1>
            @include('includes.forms.form_1')
            <p>
                Зачастую те, у кого есть много ненужного металла, не знают, что с ним делать и как от него избавиться.
                Компания «ЛМК-Москва» предлагает сдать металлолом с вывозом и получить за него достойную оплату.
            </p>
            <p>
                Мы предлагаем сотрудничество на взаимовыгодных условиях и берем все работы по демонтажу, резке, погрузке
                и вывозу сырья с Вашей территории на себя. Если материал, который Вы хотите сдать на металлолом, имеет
                длину более 5 м., при этом металлоконструкции требуют предварительной разборки, то Вы можете поступить в
                такой ситуации по-разному:
            </p>
            <ul class="col-12 p-0 mb-3">
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
        	Самостоятельно подготовить лом к сдаче. Для этого потребуется разрезать его на габаритные элементы и погрузить в специальный транспорт. Чтобы реализовать такой план необходимо обзавестись газорезкой, грузчиками, грузовым транспортом и большим количеством свободного времени.
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
              	Оставить заявку на вывоз металлолома в Москве и МО под ключ, это означает, что Вам не нужно искать рабочих, которые разберут металлоконструкции, порежут и погрузят их, не нужно нанимать грузовой транспорт, на котором сырье будет доставляться в пункт приема. Со всеми задачами справятся наши специалисты!
            </span>
                    </div>
                </li>
            </ul>
            <p>
                Покупка металлолома с вывозом является одной из наиболее востребованных услуг, предлагаемых нашей
                компанией. Мы бесплатно вывозим металлолом в Московском регионе, если партия составляет 100 кг. и
                больше.
            </p>
            <h2 class="fs-20">
                Почему вывозить лом металлов с «ЛМК» удобно и выгодно?
            </h2>
            <p>
                Вывоз металлолома в Московской области с нашей компанией — это услуга, которая решает сразу несколько
                важных для Вас вопросов:
            </p>
            <ul class="col-12 p-0 mb-3">
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
       	Не придется тратить дополнительные денежные средства на наем работников и аренду профессиональной погрузочной техники. Благодаря наличию собственного автопарка спецтехники и большого штата специалистов разного профиля наша компания проводит весь комплекс работ без привлечения сторонних лиц
                        </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
        Все работы проводятся с соблюдением техники безопасности. Для этого работники должны обладать определенным набором знаний и опыта, чтобы произвести все действия безопасно и качественно
                        </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i>
                        <span
                            class="nav-text d-table-cell align-middle pl-2">
      	Время экономится, так как мы подходим к вопросу приема и вывоза лома комплексно. Оформляя заявку, мы обговариваем точное время и дату проведения работ, а все манипуляции проводим максимально быстро, так как используем высокотехнологичное оборудование и инструмент.
                        </span>
                    </div>
                </li>
            </ul>
            <p>
                Мы производим вывоз металлолома дорого, поэтому Вы получаете достойную прибыль и самые привлекательные
                условия для сотрудничества. По заявке клиента весь необходимый транспорт и бригада работников будет на
                месте в течение двух часов.
            </p>
            <h3 class="fs-20">
                Услуги вывоза черного металла
            </h3>
            <div class="container row ms-regions m-0 mb-4 p-0 justify-content-center">
                @foreach($scrapExport['black'] as $item)
                    <a href="{{route($item->slug->slug)}}"
                       class="col-2 col-md-3 col-sm-4 col-6 p-0 pt-2 pr-1 text-decoration-none text-light">
                        <div class="ms-regions-item row col-12 p-0 base-br bg-base-color h-100 m-auto text-center">
                            <div class="col-12 p-2 h-min-content align-self-center">
                                <i class="fas fa-truck-moving fa-2x"></i>
                                <p class="h5 mt-1 m-0 text-light fs-13">
                                    {{$item->title}}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <h3 class="fs-20">
                Услуги вывоза цветного металла
            </h3>
            <div class="container row ms-regions m-0 mb-4 p-0 justify-content-center">
                @foreach($scrapExport['color'] as $item)
                    <a href="{{route($item->slug->slug)}}"
                       class="col-2 col-md-3 col-sm-4 col-6 p-0 pt-2 pr-1 text-decoration-none text-light">
                        <div class="ms-regions-item row col-12 p-0 base-br bg-base-color h-100 m-auto text-center">
                            <div class="col-12 p-2 h-min-content align-self-center">
                                <i class="fas fa-truck-moving fa-2x"></i>
                                <p class="h5 mt-1 m-0 text-light fs-13">
                                    {{$item->title}}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <h4 class="fs-20">
                Преимущества сотрудничества с «ЛМК-Москва»
            </h4>
            <p>
                Компания «ЛМК» осуществляет вывоз металлолома по всей Московской области. Среди остальных конкурирующих
                организаций мы выделяемся следующими преимуществами:
            </p>
            <ul class="col-12 p-0 mb-3">
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i> <span
                            class="nav-text d-table-cell align-middle pl-2">
						профессиональный штат сотрудников разного профиля;
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i> <span
                            class="nav-text d-table-cell align-middle pl-2">
						современная техника и инструмент;
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i> <span
                            class="nav-text d-table-cell align-middle pl-2">
							оперативное реагирование на заявки;
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i> <span
                            class="nav-text d-table-cell align-middle pl-2">
					комплексный подход;
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i> <span
                            class="nav-text d-table-cell align-middle pl-2">
				прием металлолома любых видов;
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i> <span
                            class="nav-text d-table-cell align-middle pl-2">
				работаем с партиями разного объема;
            </span>
                    </div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell form-b-icon align-middle"></i> <span
                            class="nav-text d-table-cell align-middle pl-2">
				сотрудничаем с частными лицами и организациями.
            </span>
                    </div>
                </li>
            </ul>
            <p>
                Цена на услугу вывоз металлолома с выкупом от компании «ЛМК» в Московском регионе самая выгодная. Мы
                отслеживаем ситуацию на рынках вторсырья и стараемся формировать расценки на металлопродукцию согласно
                спросу.
            </p>
            {{--FAQ--}}
            <div class="mt-4" itemscope="" itemtype="https://schema.org/FAQPage">
                <div class="faq w-100">
                    <h2 class="faq_text mb-3">
                        Частые вопросы клиентов о вывозе металлолома в Москве и Московской области.
                    </h2>
                    <div class="faq-questions base-br p-3">
                        <div class="mb-4" itemprop="mainEntity" itemscope="" itemtype="https://schema.org/Question">
                            <div class="faq-question-text cursor-pointer" onclick="DomHelper.dropDownQuestions(this)"
                                 itemprop="name">
                                Каким способом оплачивается металлолом?
                            </div>
                            <div class="faq-question-answer base-br" itemprop="acceptedAnswer" itemscope=""
                                 itemtype="https://schema.org/Answer">
                            <span itemprop="text" class="text-dark">
                               Компания «ЛМК-Москва» производит оплату наличными средствами после того, как весь металлолом взвешивается на высокоточных электронных весах. Всё происходит в присутствии клиента в нашем пункте приёма лома.
                            </span>
                                <meta itemprop="upvoteCount" content="8">
                                <div itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                                    <meta itemprop="name"
                                          content="{{\Illuminate\Support\Facades\Config::get('app.name_ru')}}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4" itemprop="mainEntity" itemscope="" itemtype="https://schema.org/Question">
                            <div class="faq-question-text cursor-pointer" onclick="DomHelper.dropDownQuestions(this)"
                                 itemprop="name">
                                На каком транспорте вывозится металлолом?
                            </div>
                            <div class="faq-question-answer base-br" itemprop="acceptedAnswer" itemscope=""
                                 itemtype="https://schema.org/Answer">
                            <span itemprop="text" class="text-dark">
                                Автопарк компании предусматривает наличие укрепленных автомобилей марок «Газель» и Валдай». Грузоподъёмность спецтехники повышенная. Транспортировка тяжеловесных, крупногабаритных конструкций осуществляется на ломовозах-контейнеровозах, оснащённых грейферной установкой. Самостоятельная аренда такого вида спецтранспорта обойдётся дорого, и на поиск уйдёт много времени.
                            </span>
                                <meta itemprop="upvoteCount" content="8">
                                <div itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                                    <meta itemprop="name"
                                          content="{{\Illuminate\Support\Facades\Config::get('app.name_ru')}}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4" itemprop="mainEntity" itemscope="" itemtype="https://schema.org/Question">
                            <div class="faq-question-text cursor-pointer" onclick="DomHelper.dropDownQuestions(this)"
                                 itemprop="name">
                                Кто осуществляет погрузку и резку лома?
                            </div>
                            <div class="faq-question-answer base-br" itemprop="acceptedAnswer" itemscope=""
                                 itemtype="https://schema.org/Answer">
                            <span itemprop="text" class="text-dark">
                              В штате трудятся специалисты разного профиля, которые подготавливают металлолом к погрузке и вывозу. Также работники проводят демонтаж металлоконструкций по запросу клиента.
                            </span>
                                <meta itemprop="upvoteCount" content="8">
                                <div itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                                    <meta itemprop="name"
                                          content="{{\Illuminate\Support\Facades\Config::get('app.name_ru')}}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4" itemprop="mainEntity" itemscope="" itemtype="https://schema.org/Question">
                            <div class="faq-question-text cursor-pointer" onclick="DomHelper.dropDownQuestions(this)"
                                 itemprop="name">
                                Возможно ли сотрудничество на договорной основе?
                            </div>
                            <div class="faq-question-answer base-br" itemprop="acceptedAnswer" itemscope=""
                                 itemtype="https://schema.org/Answer"><span itemprop="text" class="text-dark">
                                  Сотрудничаем с клиентами, которые сдают лом разово, а также заключаем договора на постоянное партнёрство. Оплата производится наличным и безналичным способами.
                            </span>
                                <meta itemprop="upvoteCount" content="8">
                                <div itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                                    <meta itemprop="name"
                                          content="{{\Illuminate\Support\Facades\Config::get('app.name_ru')}}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4" itemprop="mainEntity" itemscope="" itemtype="https://schema.org/Question">
                            <div class="faq-question-text cursor-pointer" onclick="DomHelper.dropDownQuestions(this)"
                                 itemprop="name">
                                На какие индивидуальные условия сотрудничества могут рассчитывать клиенты?
                            </div>
                            <div class="faq-question-answer base-br" itemprop="acceptedAnswer" itemscope=""
                                 itemtype="https://schema.org/Answer">
                            <span itemprop="text" class="text-dark">
                                Клиентам, поставляющим металлолом крупными партиями или ежемесячно в больших объёмах, мы предлагаем наиболее высокие цены на лом. Узнать все подробности можно у менеджеров компании.
                            </span>
                                <meta itemprop="upvoteCount" content="8">
                                <div itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                                    <meta itemprop="name"
                                          content="{{\Illuminate\Support\Facades\Config::get('app.name_ru')}}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4" itemprop="mainEntity" itemscope="" itemtype="https://schema.org/Question">
                            <div class="faq-question-text cursor-pointer" onclick="DomHelper.dropDownQuestions(this)"
                                 itemprop="name">
                                Может ли вы вывезти металлолом в день оформления заявки?
                            </div>
                            <div class="faq-question-answer base-br" itemprop="acceptedAnswer" itemscope=""
                                 itemtype="https://schema.org/Answer">
                            <span itemprop="text" class="text-dark">
                                Спецтехника с бригадой работников выезжает на объект в течение 45 минут. Также клиент может самостоятельно доставить лом в ближайший пункт приёма Компании «ЛМК-Москва».
                            </span>
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
            {{--FAQ--}}
            <div class="mb-4">
                @include('includes.banners.why-are-we')
            </div>
        </div>
    </div>
@endsection
