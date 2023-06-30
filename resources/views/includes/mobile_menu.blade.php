<div class="m_fix-menu">
    <div>
        <a href="https://api.whatsapp.com/send?phone=79254333556" class="whatsapp whatsapp_conf"></a>
        <span>Whats App</span>
    </div>
    <div class="p_fix">
        @if($mobile_phone_status == 'up')
            <a href="tel:+79254333556" class="phone"></a>
        @else
            <a href="tel:+74999384156" class="phone"></a>
        @endif
        <span>Позвонить</span>
    </div>
    <div class="hamburger">
        <div class=" btn11" data-menu="11">
            <div class="icon-left"></div>
            <div class="icon-right"></div>
        </div>
        <span>Меню</span></div>
    <div>
        <a href="#" class="truck lmk_scb_open_call"></a>
        <span>Сдать металл</span>
    </div>
    {{--    <div>--}}
    {{--        <a href="javascript:jivo_api.open()" class="chat"></a>--}}
    {{--        <span class="online_block ml-2">Онлайн чат</span>--}}
    {{--    </div>--}}
    <div>
        <a href="https://yandex.ru/maps/-/CCUurOwiCA" target="_blank" class="map"></a>
        <span>Карта</span>
    </div>
</div>
