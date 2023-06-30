<div id="bottom_icon_form_wrapper" class="container form_block mb-5 base-br base-border overflow-hidden">
    <div id="quiz_form" class="row justify-content-between base-bottom-border">
        <div class="col-12 col-lg-6 p-0 form_img overflow-hidden" itemscope itemtype="https://schema.org/ImageObject">
            @if(empty($custom_form_img))
                <img  src="{{asset('/img/forms-img/'.($route_name ?? 'default_1_form').'.webp')}}"
                     alt="Фото - {{$title}}" title="Фото - {{$title}}" itemprop="contentUrl" class="w-100">
            @else
                <img  src="{{asset('/img/forms-img/'.($custom_form_img ?? 'default_1_form').'.webp')}}"
                     alt="Фото - {{$title}}" title="Фото - {{$title}}" itemprop="contentUrl" class="w-100">
            @endif
            <div class="d-flex img_title">
                <div class="icon w-25">
                    <i class="fas fa-exclamation"></i>
                </div>
                <div class="w-75" itemprop="name">Купим металл дорого</div>
            </div>
        </div>
        <div class="col-12 col-lg-6 p-3 h-min-content m-auto">
            <div>
                Компания «ЛМК» осуществляет вывоз и прием по самой высокой цене на рынке.Ознакомьтесь с нашим
                прайс-листом.
            </div>
            <ul class="col-12 p-0 mb-3">
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell align-middle"></i>
                        <span class="nav-text d-table-cell align-middle pl-2">
                        В «{{\Illuminate\Support\Facades\Config::get('app.name_ru')}}» всегда можно сдать выгодно!
                        </span></div>
                </li>
                <li class="mt-2">
                    <div class="d-table"><i
                            class="far fa-check-circle fa-2x base-color mt-1 d-table-cell align-middle"></i>
                        <span class="nav-text d-table-cell align-middle pl-2">
                           Моментальный расчет после взвешивания!
                        </span></div>
                </li>
            </ul>
            <div class=" mb-2">
                Закажите звонок заполнив форму ниже!
            </div>
        </div>
    </div>
    <div class="d-flex pt-0 pb-3 col-12">
        <div class="form-wizard w-100 p-0">
            <form @submit="sendForm" role="form">
                <div class="form-wizard-header">
                    <ul class="list-unstyled form-wizard-steps clearfix">
                        <li class="active"><span>1</span></li>
                        <li><span>2</span></li>
                        <li><span>3</span></li>
                    </ul>
                </div>
                <fieldset class="wizard-fieldset show">
                    <span class="h5 color-black">Выберите вид металла и введите его вес</span>
                    <div class="col-12 row justify-content-center p-0 m-0">
                        <div class="form-group col-12 col-lg-4 col-md-4 p-0 p-lg-1 p-md-1 mt-3 mb-3">
                            <select v-model="quiz_category" class="form-control" name="metalvid">
                                @foreach($markets as $market)
                                    @foreach($market->categories as $category)
                                        <option :value="{{$category->id}}">
                                            {{$category->title}}
                                        </option>
                                    @endforeach
                                @endforeach
                            </select>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group col-12 col-lg-4 col-md-4 p-0 p-lg-1 p-md-1 mt-3 mb-3">
                            <select class="form-control" name="metaltype2">
                                @foreach($markets as $market)
                                    @foreach($market->categories as $category)
                                        @foreach($category->products as $product)
                                            <option v-if="quiz_category == {{$category->id}}"
                                                    value="{{$product->title}}">
                                                {{$product->title}}
                                            </option>
                                        @endforeach
                                    @endforeach
                                @endforeach
                            </select>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group col-12 col-lg-4 col-md-4 p-0 p-lg-1 p-md-1 mt-3 mb-3">
                            <input type="number" class="form-control wizard-required" id="weight" name="weight">
                            <label for="weight" class="wizard-form-text-label">Вес</label>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group clearfix col-12 m-0 p-1">
                            <a href="javascript:;" class="form-wizard-next-btn float-right">Далее</a>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="wizard-fieldset">
                    <span class="h5 color-black">Где вы находитесь?</span>
                    <div class="col-12 row justify-content-center p-0 m-0">
                        <div class="form-group col-12 col-lg-4 col-md-4 p-0 p-lg-1 p-md-1 mt-3 mb-3">
                            <select class="form-control" name="city">
                                <option value="Москва">Москва</option>
                                <option value="Московская область">Московская область</option>
                            </select>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group col-12 col-lg-4 col-md-4 p-0 p-lg-1 p-md-1 mt-3 mb-3">
                            <select class="form-control" name="delivery">
                                <option value="">Нужен ли вывоз?</option>
                                <option value="Да">Да</option>
                                <option value="Нет">Нет</option>
                            </select>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group col-12 col-lg-4 col-md-4 p-0 p-lg-1 p-md-1 mt-3 mb-3">
                            <select class="form-control" name="demontazh">
                                <option value="">Нужен ли демонтаж?</option>
                                <option value="Да">Да</option>
                                <option value="Нет">Нет</option>
                            </select>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group clearfix col-12 m-0 p-1">
                            <a href="javascript:;" class="form-wizard-previous-btn float-left">Назад</a>
                            <a href="javascript:;" class="form-wizard-next-btn float-right">Далее</a>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="wizard-fieldset">
                    <span class="h5 color-black">Контактные данные</span>
                    <div class="col-12 row justify-content-center p-0 m-0">
                        <div class="form-group col-12 col-lg-4 col-md-4 p-0 p-lg-1 p-md-1 mt-3 mb-3">
                            <input type="text" class="form-control wizard-required" name="full_name">
                            <label for="full_name" class="wizard-form-text-label">Ваше имя</label>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group col-12 col-lg-4 col-md-4 p-0 p-lg-1 p-md-1 mt-3 mb-3">
                            <input type="text" class="form-control wizard-required" minlength="15" name="phone"
                                   required>
                            <label for="phone" class="wizard-form-text-label">Номер телефона</label>
                            <div class="wizard-form-error"></div>
                        </div>
                    </div>
                    <div class="form-group clearfix col-12 m-0 p-1">
                        <a href="javascript:;" class="form-wizard-previous-btn float-left">Назад</a>
                        <button type="submit" class="form-wizard-submit float-right">Заказать звонок</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
