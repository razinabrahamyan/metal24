<div id="form_with_links_wrapper"
     class="container form_block row m-0 p-0 base-br base-border overflow-hidden mt-3 mb-3">
    <div class="col-12 col-lg-6 form_left_block pt-5 pb-5">
        <h2 class="text-dark mb-2 h5">
            Сдайте черный и цветной металлолом по самой высокой цене! Вывозим быстро! Оплата сразу после взвешивания!
        </h2>
        <div class="text-dark mb-4">
            <p class="text-dark mb-2 h5">
                Почему нужно сдать у нас?
            </p>
            <div class="container row">
                <div class="d-flex align-items-center col-12 p-0 mt-3">
                    <div class="d-inline mr-3">
                        <i class="far fa-dot-circle fa-2x base-color"></i>
                    </div>
                    <div class="d-inline">
                        Крупнейшая компания по вывозу в Москве
                    </div>
                </div>
                <div class="d-flex align-items-center col-12 p-0 mt-3">
                    <div class="d-inline mr-3">
                        <i class="far fa-dot-circle fa-2x base-color"></i>
                    </div>
                    <div class="d-inline">
                        Работаем с заводами по переработке металлов
                    </div>
                </div>
                <div class="d-flex align-items-center col-12 p-0 mt-3">
                    <div class="d-inline mr-3">
                        <i class="far fa-dot-circle fa-2x base-color"></i>
                    </div>
                    <div class="d-inline">
                        Пункты приема по всем Москве и МО
                    </div>
                </div>
                <div class="d-flex align-items-center col-12 p-0 mt-3">
                    <div class="d-inline mr-3">
                        <i class="far fa-dot-circle fa-2x base-color"></i>
                    </div>
                    <div class="d-inline">
                        Принимаем чермет в любых объемах
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex col-12 col-lg-6 form_right_block align-items-center pt-4 pb-5">
        <form id="form_with_links" @submit="sendForm">
            @csrf
            <div class="container row m-0 p-0 text-center justify-content-center">
                <div class="text-center">
                    <h2 class="h5 text-light">
                        Оставьте фото для оценки и получите выгодное предложение
                    </h2>
                </div>
                <div class="row col-12 p-0">
                    <div class="form-group col-12">
                        <input type="text" class="form-control base-br" name="full_name" placeholder="Ф.И.О.">
                    </div>
                    <div class="form-group col-12">
                        <input type="text" class="form-control base-br" name="phone" placeholder="Телефон"
                               minlength="15" required>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="file-upload">
                            <div class="file-select">
                                <label for="chooseFile" class="file-select-button" id="fileName">
                                    <span>Фото</span>
                                </label>
                                <div class="file-select-name" id="noFile">
                                    <span>Пусто</span>
                                </div>
                                <input type="file" name="chooseFile" id="chooseFile"
                                       accept="image/png, image/jpeg, image/jpg">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <div class="form-check">
                            <input class="form-check-input base-br" type="checkbox" id="check_info_4" required>
                            <label class="form-check-label text-left" for="check_info_4">
                                <small class="text-light">
                                    Согласен с обработкой моих персональных данных в соответствии с
                                    <a href="{{route('polzovatelskoe-soglashenie')}}"
                                       class="text-decoration-underline text-light">
                                        политикой конфиденциальности
                                    </a>.
                                </small>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="col-6 b-btn-secondary m-auto p-0">
                        <button type="submit" class="btn text-dark base-br">Заказать звонок</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
