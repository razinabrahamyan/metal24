<div id="bottom_icon_form_wrapper" class="container form_block base-br base-border mb-3">
    <div class="row p-3 justify-content-between">
        <div class="col-12 col-lg-5 p-0 form_img base-br base-border overflow-hidden" itemscope
             itemtype="https://schema.org/ImageObject">
            <img loading="lazy" src="{{asset('/img/forms-img/'.$route_name.'.webp')}}" itemprop="contentUrl"
                 class="w-100"  alt="{{$title}}"  title="{{$title}}">
            <div class="d-flex img_title">
                <div class="icon w-25">
                    <i class="fas fa-exclamation"></i>
                </div>
                <div class="w-75">Купим дорого</div>
            </div>
        </div>
        <form id="bottom_icon_form" class="col-12 col-lg-7" @submit="sendForm">
            @csrf
            <input type="hidden" name="form_name" value="Заявка на обратный звонок">
            <div class="container row m-0 p-0 mt-3 p-0">
                <div class="form-group col-12 col-lg-6">
                    <input type="text" class="form-control base-br" name="full_name" placeholder="Ф.И.О.">
                </div>
                <div class="form-group col-12 col-lg-6">
                    <input type="text" class="form-control base-br" name="phone" placeholder="Телефон">
                </div>
                {{--                <div class="form-group col-12 col-lg-4">--}}
                {{--                    <input type="text" class="form-control base-br" name="metal_type" placeholder="Вид лома">--}}
                {{--                </div>--}}
                <div class="form-group col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check_info_6" required>
                        <label class="form-check-label" for="check_info_6">
                            Согласен с обработкой моих персональных данных в соответствии с
                            <a href="{{'polzovatelskoe-soglashenie'}}" class="text-decoration-underline text-dark">
                                политикой конфиденциальности
                            </a>.
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="col-12 col-lg-6 b-btn-base m-auto p-0">
                        <button type="submit" class="btn text-light base-br">Заказать звонок</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
