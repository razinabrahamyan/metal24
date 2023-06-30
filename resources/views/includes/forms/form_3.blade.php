<div id="left_picture_form_wrapper" class="form_block d-flex row  m-0 p-0 base-br base-border">
    <div class="col-5 p-0 m-0 d-none d-lg-block" itemscope itemtype="https://schema.org/ImageObject">
        <img loading="lazy" src="{{asset('/img/forms-img/'.$route_name.'.webp')}}" alt="{{$title}}"
             itemprop="contentUrl" class="w-100 h-100" title="{{$title}}">
    </div>
    <div class="col-12 col-lg-7 h-min-content m-auto">
        <div class="col-12 h5 text-light">
            У Вас есть вопрос на эту тему?
        </div>
        <div class="col-12 p-0">
            <form @submit="sendForm">
                <input type="hidden" name="form_name" value="Заявка на обратный звонок">
                @csrf
                <div class="row text-center justify-content-lg-between col-12 p-0 m-0">
                    <div class="form-group col-6">
                        <input type="text" name="full_name" placeholder="Ваше имя"
                               class="form-control rounded-0 bg-transparent text-light" required>
                    </div>
                    <div class="form-group col-6">
                        <input type="text" name="email" placeholder="E-mail"
                               class="form-control rounded-0 bg-transparent text-light" required>
                    </div>
                </div>
                <div class="col-12 p-0 m-0">
                    <div class="form-group col-12">
                        <input type="text" name="comment" placeholder="Вопрос"
                               class="form-control rounded-0 bg-transparent text-light" required>
                    </div>
                </div>
                <div class="col-5 float-left b-btn-secondary pr-0 m-0">
                    <button type="submit" class="btn float-left text-dark rounded-0">Заказать звонок</button>
                </div>
            </form>
        </div>
    </div>
</div>
