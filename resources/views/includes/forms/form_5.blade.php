<div id="side_icon_form_wrapper" class="container mb-4 base-br base-border">
    <div class="row p-3 justify-content-between">
        <div class="col-12 col-lg-5 p-0 form_img  d-none d-lg-block d-xl-block base-br base-border overflow-hidden"
             itemscope itemtype="https://schema.org/ImageObject">
            <img loading="lazy" src="{{asset('/img/forms-img/'.$route_name.'.webp')}}" alt="{{$title}}"
                 itemprop="contentUrl" class="w-100" title="{{$title}}">
            <div class="d-flex img_title">
                <div class="icon w-25">
                    <i class="fas fa-exclamation"></i>
                </div>
                <div class="w-75">Купим дорого</div>
            </div>
        </div>
        <div class="col-12 col-lg-7">
            <div class="d-table col-12 mt-1 side-icon">
                <i class="fas fa-search-dollar fa-2x base-color d-table-cell form-b-icon align-middle"></i>
                <span class="nav-text d-table-cell align-middle">
                   Покупаем дорого
                </span>
            </div>
            <div class="d-table col-12 mt-3 side-icon">
                <i class="fas fa-hand-holding-usd fa-2x base-color d-table-cell form-b-icon align-middle"></i>
                <span class="nav-text d-table-cell align-middle">
                    Принимаем любой объем
                </span>
            </div>
            <div class="d-table col-12 mt-3 side-icon">
                <i class="fas fa-stopwatch-20 fa-2x base-color d-table-cell form-b-icon align-middle"></i>
                <span class="nav-text d-table-cell align-middle">
                    Вывоз из любого района Москвы и области
                </span>
            </div>
            <div class="d-table col-12 mt-3 side-icon">
                <i class="fas fa-truck-moving fa-2x base-color d-table-cell form-b-icon align-middle"></i>
                <span class="nav-text d-table-cell align-middle">
                    Мгновенная оплата наличными
                </span>
            </div>
            <div class="d-table col-12 mt-3 side-icon">
                <i class="fas fa-balance-scale fa-2x base-color d-table-cell form-b-icon align-middle"></i>
                <span class="nav-text d-table-cell align-middle">
                   Производим демонтаж, резку, утилизацию
                </span>
            </div>
            <div class="d-table col-12 mt-3 side-icon">
                <i class="fas fa-weight-hanging fa-2x base-color d-table-cell form-b-icon align-middle"></i>
                <span class="nav-text d-table-cell align-middle">
                    Скупка любого объема от 1 тонны
                </span>
            </div>
        </div>
    </div>
    <form id="bottom_icon_form" class="form_block col-12 pb-3" @submit="sendForm">
        @csrf
        <input type="hidden" name="form_name" value="Заявка на обратный звонок">
        <div class="container row m-0 p-0 mt-3 p-0">
            <div class="form-group col-12 col-lg-4">
                <input type="text" class="form-control base-br" name="full_name" placeholder="Ф.И.О.">
            </div>
            <div class="form-group col-12 col-lg-4">
                <input type="text" class="form-control base-br" name="phone" placeholder="Телефон" required>
            </div>
            <div class="form-group col-12 col-lg-4">
                <input type="text" class="form-control base-br" name="weight" placeholder="Вес">
            </div>
            <div class="form-group col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="check_info_5" required>
                    <label class="form-check-label text-light" for="check_info_5">
                        Согласен с обработкой моих персональных данных в соответствии с
                        <a href="{{'polzovatelskoe-soglashenie'}}" class="text-decoration-underline text-light">
                            политикой конфиденциальности
                        </a>.
                    </label>
                </div>
            </div>
            <div class="col-12">
                <div class="col-12 col-lg-4 b-btn-secondary m-auto p-0">
                    <button type="submit" class="btn text-dark base-br">Заказать звонок</button>
                </div>
            </div>
        </div>
    </form>
</div>
