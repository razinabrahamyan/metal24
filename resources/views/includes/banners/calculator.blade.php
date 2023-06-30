<div id="left_picture_form_wrapper" class="calculator_block d-flex row  m-0 p-4 p-lg-0 p-md-0 base-br base-border">
    <div class="col-5 p-0 m-0 d-none d-lg-block">
        <img loading="lazy" src="{{asset('/img/forms-img/calculator.webp')}}" alt="Калькулятор" itemprop="image"
             class="w-100 h-100" title="Калькулятор">
    </div>
    <div class="col-12 col-lg-7 h-min-content m-auto">
        <div class="col-12 h5 text-light p-0 text-center">
            <h3 class="h3 text-light">Рассчитайте стоимость <br> металла сами!</h3>
        </div>
        <div id="calculator" class="col-12 col-lg-12 col-md-6 col-sm-12 text-center m-auto">
            <div class="row">
                <div class="form-group col-12 col-lg-6 calc-select-block mb-2">
                    <label for="met_type_1" class="col-12 text-left text-light p-0 m-0 ml-1">Вид металла</label>
                    <select name="met_type_1" id="calc_select" @change="calc"
                            v-model="calc_quiz_category" class="form-control base-br">
                        @foreach($markets as $market)
                            @foreach($market->categories as $category)
                                <option :value="{{$category->id}}">
                                    {{$category->title}}
                                </option>
                            @endforeach
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-12 col-lg-6 mb-2">
                    <label class="col-12 text-left text-light p-0 m-0 ml-1" for="met_type_2">Тип металла</label>
                    <select class="form-control base-br" name="met_type_2" @change="calc">
                        @foreach($markets as $market)
                            @foreach($market->categories as $category)
                                @foreach($category->products as $product)
                                    <option v-if="calc_quiz_category == {{$category->id}}"
                                            value="{{$product->metalPrice->by_wholesale}}">
                                        {{$product->title}}
                                    </option>
                                @endforeach
                            @endforeach
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-12 col-lg-6 mx-auto mb-2">
                    <label for="calc-weight" class="col-12 text-left text-light p-0 m-0 ml-1">Вес (Кг)</label>
                    <input type="number" class="form-control base-br" id="calc-weight" v-model="weight" min="1"
                           name="calc-weight" placeholder="Вес металла в кг" @input="calc" required>
                </div>
                <div class="col-12 text-center">
                    <span class="h6 text-light">
                        Стоимость металла составляет: <span id="totalPrice">0</span> ₽
                    </span>
                </div>
                <div class="col-8 col-lg-6 col-md-6 float-right b-btn-secondary pr-0 mx-auto text-center mt-2">
                    <button class="btn float-right text-dark base-br lmk_scb_open_call">
                        Заказать звонок
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
