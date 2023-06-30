@if(!empty($productPrice->metalPrice))
    <div class="mt-3 mb-3">
        <div class="col-12 p-0 bg-base-color m-auto p-3 base-brt overflow-hidden">
            <h2 class="fs-18 text-light h-min-content text-center m-0">
                Цена на {{\Illuminate\Support\Str::lower($productPrice->title)}} на сегодня
            </h2>
        </div>
        <div class="base-border base-brb m-0 table-bordered">
            <table class="prices-table table m-0">
                <thead>
                <tr>
                    @if($productPrice->metalPrice->weight == 'kilogram')
                        <th class="text-center base-border-color table-item m-auto align-middle h-min-content">
                            Категория
                            металла
                        </th>
                        <th class="text-center base-border-color table-item m-auto align-middle h-min-content">
                            <span itemprop="weight">до 100 кг.</span>
                        </th>
                        <th class="text-center base-border-color table-item m-auto align-middle h-min-content">
                            <span itemprop="weight">100 до 500 кг.</span>
                        </th>
                        <th class="text-center base-border-color table-item m-auto align-middle h-min-content">
                            <span itemprop="weight">500 - 1000 кг.</span>
                        </th>
                        <th class="text-center base-border-color table-item m-auto align-middle h-min-content">
                            <span itemprop="weight">Цена за 1 кг</span>
                        </th>
                    @else
                        <th class="text-center base-border-color table-item m-auto align-middle h-min-content">
                            Категория
                            металла
                        </th>
                        <th class="text-center base-border-color table-item m-auto align-middle h-min-content">
                            <span itemprop="weight">От 1 т.</span>
                        </th>
                        <th class="text-center base-border-color table-item m-auto align-middle h-min-content">
                            <span itemprop="weight">От 10 до 50 т.</span>
                        </th>
                        <th class="text-center base-border-color table-item m-auto align-middle h-min-content">
                            <span itemprop="weight">От 50 до 100 т.</span>
                        </th>
                        <th class="text-center base-border-color table-item m-auto align-middle h-min-content">
                            <span itemprop="weight">Цена за 1 т.</span>
                        </th>
                    @endif
                </tr>
                </thead>
                <tbody>
                <tr itemprop="offers" itemscope="" itemtype="https://schema.org/Offer">
                    <td class="text-center base-border-color table-item m-auto align-middle h-min-content">
                        {{$productPrice->title}}
                    </td>
                    <td class="text-center base-border-color table-item m-auto align-middle h-min-content">
                        <span>{{str_replace(' ', '', $productPrice->metalPrice->price_below)}}</span> руб.
                        <meta itemprop="price" content="{{str_replace(' ', '', $productPrice->metalPrice->price_below)}}">
                        <meta itemprop="priceCurrency" content="RUB"/>
                        <link itemprop="availability" href="https://schema.org/InStock">
                        <meta itemprop="priceValidUntil" content="{{date('Y-m-d')}}">
                        <link itemprop="url" href="{{\Illuminate\Support\Facades\URL::current()}}">
                    </td>
                    <td class="text-center base-border-color table-item m-auto align-middle h-min-content">
                        <span>{{str_replace(' ', '', $productPrice->metalPrice->price_from_to)}}</span> руб.
                        <meta itemprop="price" content="{{str_replace(' ', '', $productPrice->metalPrice->price_from_to)}}">
                        <meta itemprop="priceCurrency" content="RUB"/>
                        <link itemprop="availability" href="https://schema.org/InStock">
                        <meta itemprop="priceValidUntil" content="{{date('Y-m-d')}}">
                        <link itemprop="url" href="{{\Illuminate\Support\Facades\URL::current()}}">
                    </td>
                    <td class="text-center base-border-color table-item m-auto align-middle h-min-content">
                        <span>{{str_replace(' ', '', $productPrice->metalPrice->price_above_from_to)}}</span> руб.
                        <meta itemprop="price" content="{{str_replace(' ', '', $productPrice->metalPrice->price_above_from_to)}}">
                        <meta itemprop="priceCurrency" content="RUB"/>
                        <link itemprop="availability" href="https://schema.org/InStock">
                        <meta itemprop="priceValidUntil" content="{{date('Y-m-d')}}">
                        <link itemprop="url" href="{{\Illuminate\Support\Facades\URL::current()}}">
                    </td>
                    <td class="text-center base-border-color table-item m-auto align-middle h-min-content">
                        <span>{{str_replace(' ', '', $productPrice->metalPrice->by_wholesale)}}</span> руб.
                        <meta itemprop="price" content="{{str_replace(' ', '', $productPrice->metalPrice->by_wholesale)}}">
                        <meta itemprop="priceCurrency" content="RUB"/>
                        <link itemprop="availability" href="https://schema.org/InStock">
                        <meta itemprop="priceValidUntil" content="{{date('Y-m-d')}}">
                        <link itemprop="url" href="{{\Illuminate\Support\Facades\URL::current()}}">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endif
