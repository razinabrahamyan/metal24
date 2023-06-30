<div class="mobile_menu animated fadeOutDown">
    <div>
        <ul class="osn_menu" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
            <li class="item no_sub">
                <a itemprop="url" href="/">
                    <span itemprop="name">
                        <i class="m_i home"></i>Главная
                    </span>
                </a>
                <div class="header_li_hov"></div>
            </li>
            @foreach($markets as $market)
                <li @if(count($market->categories) == 0 && count($market->products) == 0) class="no_sub" @endif>
                    <a itemprop="url" href="{{route('welcome').'/'.$market->slug['slug']}}">
                        <span itemprop="name">
                            <i class="m_i mnav-icon-{{$market->slug['slug']}}"></i>{{$market->title}}
                        </span>
                    </a>
                    <div class="header_li_hov"></div>
                    @if(count($market->categories) > 0)
                        <ul class="sub-menu">
                            @foreach($market->categories as $key=>$category)
                                <li @if($key==0) class="first" @endif>
                                    <a href="{{route('welcome').'/'.$category->slug['slug']}}"
                                       itemprop="url">
                                        <span itemprop="name">
                                            {{$category->title}}
                                        </span>
                                    </a>
                                    <div class="header_li_hov"></div>
                                    <ul class="sub-sub-menu">
                                        @foreach($category->products as $kkey=>$products)
                                            <li @if($kkey==0) class="first" @endif>
                                                <a href="{{route('welcome').'/'.$products->slug['slug']}}"
                                                   itemprop="url">
                                                    <span itemprop="name">
                                                        {{$products->title}}
                                                    </span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        @if(count($market->products) > 0)
                            <ul class="sub-menu">
                                @foreach($market->products as $key=>$product)
                                    <li @if($key==0) class="first" @endif>
                                        <a href="{{route('welcome').'/'.$product->slug['slug']}}"
                                           itemprop="url">
                                            <span itemprop="name">
                                                {{$product->title}}
                                            </span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    @endif
                </li>
            @endforeach
            <li>
                <a itemprop="url" href="{{route('welcome').'/uslugi'}}">
                    <span itemprop="name">
                        <i class="m_i hand-shake"></i>Услуги
                    </span>
                </a>
                <div class="header_li_hov"></div>
                <ul class="sub-menu">
                    <li class="first">
                        <a href="{{route('welcome').'/punkt-priema-metalla'}}" itemprop="url">
                            <span itemprop="name">
                                Пункты приёма металла
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('welcome').'/vyivoz-metalloloma'}}" itemprop="url">
                            <span itemprop="name">
                                Вывоз и прием металлолома
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url(asset('demontazh'))}}" itemprop="url">
                            <span itemprop="name">
                               Демонтаж металлоконструкций
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url(asset('vyiezdnoj-priyomnyij-punkt'))}}" itemprop="url">
                            <span itemprop="name">
                                Выездной приемный пункт
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a itemprop="url" href="{{route('welcome').'/czenyi-na-metall'}}">
                    <span itemprop="name">
                        <i class="m_i prices"></i>Цены
                    </span>
                </a>
            </li>
            <li class="call">
                <a href="tel:+79254333556" class="popup_request_a_call_t">
                    <span>
                        <i class="fas fa-phone-alt"></i> +7(925) 433-35-56
                    </span>
                </a>
                <a href="tel:+74999384156" class="popup_request_a_call_t">
                    <span>
                        <i class="fas fa-phone-alt"></i> +7(499) 938-41-56
                    </span>
                </a>
            </li>
            <li class="vivoz mt-2 text-center">
                <ul class="social-network social-circle">
                    <li class="d-inline m-0">
                        <a href="https://www.facebook.com/LMKmsk" target="_blank"
                           class="icoFacebook" title="Facebook" rel="noreferrer">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="d-inline m-0 ml-1">
                        <a href="https://twitter.com/LmkMoscow" class="icoTweeter" title="Tweeter"
                           target="_blank" rel="noreferrer">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="d-inline m-0 ml-1">
                        <a href="https://vk.com/lmk_msk" class="icoVK" title="VK" target="_blank">
                            <i class="fab fa-vk"></i>
                        </a>
                    </li>
                    <li class="d-inline m-0 ml-1">
                        <a href="https://zen.yandex.ru/id/6103d9689dfadc0a60b5a11f" target="_blank"
                           class="icoYandex" title="Yandex" rel="nofollow noreferrer">
                            <i class="fab fa-yandex-international"></i>
                        </a>
                    </li>
                    <li class="d-inline m-0 ml-1">
                        <a href="https://api.whatsapp.com/send?phone=79254333556"
                           class="icoWhatsApp" title="WhatsApp" rel="nofollow noreferrer"
                           target="_blank"> <i class="fab fa-whatsapp"></i>
                        </a>
                    </li>
                    <li class="d-inline m-0 ml-1">
                        <a href="https://viber.click/79254333556" class="icoViber" title="Viber"
                           rel="nofollow noreferrer" target="_blank">
                            <i class="fab fa-viber"></i>
                        </a>
                    </li>
                    <li class="d-inline m-0 ml-1">
                        <a href="https://telegram.me/lmk_moscow" class="icoTelegram pr-1"
                           title="Telegram" rel="nofollow noreferrer">
                            <i class="fab fa-telegram-plane"></i>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
