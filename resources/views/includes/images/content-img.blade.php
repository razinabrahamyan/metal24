@if(!empty($route_name) && file_exists(public_path('img/content-images/first-group/'.$route_name.'.webp')) && file_exists(public_path('img/content-images/second-group/'.$route_name.'.webp')))
    <div class="d-flex row m-0 justify-content-between">
        <div class="col-6 p-0 form_img overflow-hidden" itemscope itemtype="https://schema.org/ImageObject">
            <div class="m-2">
                <img src="{{asset('/img/content-images/first-group/'.($route_name ?? 'default_1_form').'.webp')}}"
                     alt="Лом - {{$title}}" title="Лом - {{$title}}" itemprop="contentUrl" class="w-100 base-border base-br content-img">
            </div>
        </div>
        <div class="col-6 p-0 form_img overflow-hidden" itemscope itemtype="https://schema.org/ImageObject">
            <div class="m-2">
                <img src="{{asset('/img/content-images/second-group/'.($route_name ?? 'default_1_form').'.webp')}}"
                     alt="Металл - {{$title}}" title="Металл - {{$title}}" itemprop="contentUrl" class="w-100 base-border base-br content-img">
            </div>
        </div>
    </div>
@endif
