@extends('layouts.app')
@section('content')
    <div class="col-12 col-lg-9 col-xl-9" id="contacts-page">
        {{\DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render(request()->segment(1))}}
        <div class="content mt-4">
            <h1 itemprop="name" class="h3">Контакты компании</h1>
            <h2>Способы связи</h2>
            <p>
                Компания "{{\Illuminate\Support\Facades\Config::get('app.name_ru')}}" предлагает своим клиентам
                всевозможные варианты связи. Вы можете позвонить нам по
                указанному номеру телефона, так же можете связаться с нами через Viber или WhatsApp. Так же мы принимаем
                заявки на e-mail. Если Вы хотите, что бы мы сами связались с Вами, просто оставьте заявку на обратный
                звонок. В верхней части сайта можно увидеть кнопку, которая открывает онлайн-чат. Это удобный способ
                контактирования: просто нажмите на кнопку и напишите нам сообщение в открывшемся окне, мы тут же Выйдем
                на связь для диалога в чате.
            </p>
            <div class="row mt-3 mb-3">
                <div class="d-flex flex-wrap col-12 col-lg-6 col-md-6 mt-3 mt-lg-0 mt-md-0">
                    <div class="col-12 p-0 contacts_block base-br">
                        <div class="col-12 p-3 bg-white h-100 base-br">
                            @include('includes.contacts_elements')
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap col-12 col-lg-6 col-md-6 mt-3 mt-lg-0 mt-md-0">
                    <div id="ymap_block" class="col-12">
                        <div class="list no-scroll">
                            @foreach($addresses as $address)
                                <div class="item">
                                    <a href="https://yandex.ru/maps/?text={{$address->address}}" target="_blank"
                                       class="address d-table">
                                        <div class="d-table-cell align-middle pr-2">
                                            <i class="fas fa-map-marker-alt base-color"></i>
                                        </div>
                                        <div class="d-table-cell address-text text-left text-dark">
                                            {{$address->address}}
                                        </div>
                                        <div class="d-table-cell align-middle pl-2">
                                            <i class="fas fa-chevron-right base-color"></i>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <h2>
                Адреса пунктов приема "{{\Illuminate\Support\Facades\Config::get('app.name_ru')}}"
            </h2>
            <p>
                У нас несколько пунктов приема в Москве и МО. Для того, что бы увидеть адреса, их расположение на
                карте, время работы и прочую информацию, нажмите на кнопку "Где можно сдать" или перейдите в раздел
                меню "Пункт приема металла" в верхей части сайта.
            </p>
        </div>
        <div class="col-12 p-0">
            @include('includes.forms.form_1')
        </div>
        <div class="mt-4 d-block d-lg-none d-md-none" id="licence">
            @include('includes.banners.licnece')
        </div>
    </div>
@endsection

