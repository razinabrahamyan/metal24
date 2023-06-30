<?php

namespace App\Classes\YandexTurbo;

use App\Models\Page;
use App\Models\Product;
use App\Models\Slug;

class TurboGenerator
{
    public static function generateSlugsPages()
    {
        $xml = '<?xml version="1.0" encoding="utf-8"?>';
        $rssOpen = '<rss version="2.0" xmlns:yandex="http://news.yandex.ru" xmlns:media="http://search.yahoo.com/mrss/" xmlns:turbo="http://turbo.yandex.ru">';
        $rssClose = '</rss>';
        $channelOpen = '<channel>';
        $channelClose = '</channel>';

        /*Base Settings For RSS*/
        $startSettings = '
        	<title>Прием металлолома в Москве скупка черного лома</title>
		    <link><![CDATA[https://lmk-moscow.ru]]></link>
		    <description>Прием металлолома в Москве скупка черного лома .Приём и вывоз цветного и чёрного металла в Москве и МО</description>
		    <language>ru</language>
		    <pubDate>'.now().'</pubDate>
        ';

        $items = [];
        $slugs = Slug::with('content')->whereNotIn('slugable_type', [
            'App\Models\Market', 'App\Models\Category', 'App\Models\Product'
        ])->orderBy('id', 'ASC')->get();
        foreach ($slugs as $slug) {
            $randImg = [
                'https://lmk-moscow.ru/img/home-images/demontaj.webp',
                'https://lmk-moscow.ru/img/home-images/vivoz.webp',
                'https://lmk-moscow.ru/img/home-images/base.webp',
                'https://lmk-moscow.ru/img/forms-img/default_1_form.webp',
                'https://lmk-moscow.ru/img/forms-img/karta-sayta.webp',
            ];

            $realImage = 'https://lmk-moscow.ru/img/forms-img/'.$slug->slug.'.webp';
            try {
                if (stripos(get_headers($realImage)[0], "200 OK") ? true : false) {
                    $img = '<img src="'.$realImage.'"/>';
                } else {
                    $img = '<img src="'.$randImg[array_rand($randImg)].'"/>';
                }
            }catch (\Exception $exception){
                $img = '<img src="'.$randImg[array_rand($randImg)].'"/>';
            }

            $socials = '
            <div data-block="widget-feedback" data-stick="false">
              <div data-block="chat" data-type="whatsapp" data-url="https://api.whatsapp.com/send?phone=79254333556"></div>
              <div data-block="chat" data-type="telegram" data-url="https://telegram.me/lmk_moscow"></div>
              <div data-block="chat" data-type="vkontakte" data-url="https://vk.com/lmk_msk"></div>
              <div data-block="chat" data-type="facebook" data-url="https://www.facebook.com/LMKmsk"></div>
              <div data-block="chat" data-type="twitter" data-url="https://twitter.com/LmkMoscow"></div>
            </div>';

            $content = $slug->content;

            if (!empty($slug->h1) && !empty($content)) {
                $text1 = $content->text_1 ?? '';
                $text2 = $content->text_2 ?? '';
                $items[] = '
                 <item turbo="true">
		         	<guid isPermaLink="false">'.mt_rand(100000000, 999999999).'</guid>
		         	<title>ЛМК - '.$slug->h1.'</title>
		         	<link>https://lmk-moscow.ru/'.$slug->slug.'</link>
		         	<author>ЛМК - Москва</author>
		         	<category>Прием металлолома</category>
		         	<description>Прием металлолома в Москве скупка черного лома .Приём и вывоз цветного и чёрного металла в Москве и МО</description>
		         	<turbo:content><![CDATA[<header><h1>'.$slug->h1.'</h1></header>'.$img.$text1.$text2.$socials.']]></turbo:content>
		         	<pubDate>'.now().'</pubDate>
		         	<enclosure url="https://lmk-moscow.ru/img/core-img/og-base.jpg" type="image/jpeg" />
		         </item>
        ';
            }
        }

        $rss = [
            $xml, $rssOpen, $channelOpen, $startSettings, //Base RSS Tags
            implode('', $items)
        ];

        /*Close RSS*/
        $rss[] = $channelClose;
        $rss[] = $rssClose;
        /*Close RSS*/

        $result = str_replace(array("\r\n", "\r", "\n", "\t"), ' ', implode('', $rss));
        file_put_contents('public/yt_63274c27394c62738y3287.rss', $result);
    }

    public static function generateProductsTurboPage()
    {
        $xml = '<?xml version="1.0" encoding="utf-8"?>';
        $rssOpen = '<rss version="2.0" xmlns:yandex="http://news.yandex.ru" xmlns:media="http://search.yahoo.com/mrss/" xmlns:turbo="http://turbo.yandex.ru">';
        $rssClose = '</rss>';
        $channelOpen = '<channel>';
        $channelClose = '</channel>';

        /*Base Settings For RSS*/
        $startSettings = '
        	<title>Прием металлолома в Москве скупка черного лома</title>
		    <link><![CDATA[https://lmk-moscow.ru]]></link>
		    <description>Прием металлолома в Москве скупка черного лома .Приём и вывоз цветного и чёрного металла в Москве и МО</description>
		    <language>ru</language>
		    <pubDate>'.now().'</pubDate>
        ';

        /*Items for RSS*/
        $items = [];
        $slugs = Slug::with('content')->whereIn('slugable_type', [
            'App\Models\Market', 'App\Models\Category', 'App\Models\Product'
        ])->whereNotIn('slug', [
            'priem-lom-nikelya', 'priem-silumina', 'priem-lom-pripoya', 'priem-lom-olova'
        ])->orderBy('id', 'ASC')->get();

        foreach ($slugs as $slug) {
            $table = $tableBody = '';
            $slugable = $slug->slugable()->first();

            switch (get_class($slugable)) {
                case 'App\Models\Market':
                {
                    $marketPrices = Product::with(['metalPrice', 'category', 'market'])->where('market_id', $slugable->id)
                                           ->get()->groupBy('category_id');
                    break;
                }
                case 'App\Models\Category':
                {
                    $categoriesPrices = Product::with(['metalPrice', 'category', 'market'])
                                               ->where('category_id', $slugable->id)
                                               ->get();
                    break;
                }
                case 'App\Models\Product':
                {
                    $productPrice = Product::with(['metalPrice'])->where('id', $slugable->id)->first();
                    break;
                }
            }

            if (!empty($productPrice)) {
                $tableHead = '
                <tr>
                   <th>Категория<br>металла</th>
                   <th>Цена за 1кг/тонну</th>
                </tr>';
                $tableBody .= '
                <tr>
                    <td>'.$productPrice->title.'</td>
                    <td>'.str_replace(' ', '', $productPrice->metalPrice->by_wholesale).'</td>
                 </tr>';

                $table = '<table data-invisible="false">'.$tableHead.$tableBody.'</table>';
            } elseif (!empty($categoriesPrices)) {
                $tableHead = '
                <tr>
                   <th>Категория<br>металла</th>
                   <th>Цена за 1кг/тонну</th>
                </tr>';


                $tableBody = '';
                foreach ($categoriesPrices as $categoryPrice) {
                    $tableBody .= '
                <tr>
                    <td>'.$categoryPrice->title.'</td>
                    <td>'.str_replace(' ', '', $categoryPrice->metalPrice->by_wholesale).'</td>
                 </tr>';
                }

                $table = '<table data-invisible="false">'.$tableHead.$tableBody.'</table>';
            } elseif (!empty($marketPrices)) {
                foreach ($marketPrices as $categoriesPrices) {
                    if (!empty($categoriesPrices)) {
                        $tableHead = '
                <tr>
                   <th>Категория<br>металла</th>
                   <th>Цена за 1кг/тонну</th>
                </tr>';


                        $tableBody = '';
                        foreach ($categoriesPrices as $categoryPrice) {
                            $tableBody .= '
                <tr>
                    <td>'.$categoryPrice->title.'</td>
                    <td>'.str_replace(' ', '', $categoryPrice->metalPrice->by_wholesale).'</td>
                 </tr>';
                        }

                        $table .= '<table data-invisible="false">'.$tableHead.$tableBody.'</table>';
                    }
                }
            }

            $content = $slug->content;

            $randImg = [
                'https://lmk-moscow.ru/img/home-images/demontaj.webp',
                'https://lmk-moscow.ru/img/home-images/vivoz.webp',
                'https://lmk-moscow.ru/img/home-images/base.webp',
                'https://lmk-moscow.ru/img/forms-img/default_1_form.webp',
                'https://lmk-moscow.ru/img/forms-img/karta-sayta.webp',
            ];

            $realImage = 'https://lmk-moscow.ru/img/forms-img/'.$slug->slug.'.webp';
            try {
                if (stripos(get_headers($realImage)[0], "200 OK") ? true : false) {
                    $img = '<img src="'.$realImage.'"/>';
                } else {
                    $img = '<img src="'.$randImg[array_rand($randImg)].'"/>';
                }
            }catch (\Exception $exception){
                $img = '<img src="'.$randImg[array_rand($randImg)].'"/>';
            }

            $socials = '
            <div data-block="widget-feedback" data-stick="false">
              <div data-block="chat" data-type="whatsapp" data-url="https://api.whatsapp.com/send?phone=79254333556"></div>
              <div data-block="chat" data-type="telegram" data-url="https://telegram.me/lmk_moscow"></div>
              <div data-block="chat" data-type="vkontakte" data-url="https://vk.com/lmk_msk"></div>
              <div data-block="chat" data-type="facebook" data-url="https://www.facebook.com/LMKmsk"></div>
              <div data-block="chat" data-type="twitter" data-url="https://twitter.com/LmkMoscow"></div>
            </div>';

            $items[] = '
                 <item turbo="true">
		         	<guid isPermaLink="false">'.mt_rand(100000000, 999999999).'</guid>
		         	<title>ЛМК - '.$slug->h1.'</title>
		         	<link>https://lmk-moscow.ru/'.$slug->slug.'</link>
		         	<author>ЛМК - Москва</author>
		         	<category>Новости сайта</category>
		         	<description>Прием металлолома в Москве скупка черного лома .Приём и вывоз цветного и чёрного металла в Москве и МО</description>
		         	<turbo:content><![CDATA[<header><h1>'.$slug->h1.'</h1></header>'.$img.$content->text_1.$table.$content->text_2.$socials.']]></turbo:content>
		         	<pubDate>'.now().'</pubDate>
		         	<enclosure url="https://lmk-moscow.ru/img/core-img/og-base.jpg" type="image/jpeg" />
		         </item>
        ';
        }


        $rss = [
            $xml, $rssOpen, $channelOpen, $startSettings, //Base RSS Tags
            implode('', $items)
        ];

        /*Close RSS*/
        $rss[] = $channelClose;
        $rss[] = $rssClose;
        /*Close RSS*/

        $result = str_replace(array("\r\n", "\r", "\n", "\t"), ' ', implode('', $rss));
        file_put_contents('public/yt_dsfcj9834urj938j34f83j.rss', $result);
    }

    public static function generateOnlyMenuTurboPage()
    {
        $xml = '<?xml version="1.0" encoding="utf-8"?>';
        $rssOpen = '<rss version="2.0" xmlns:yandex="http://news.yandex.ru" xmlns:media="http://search.yahoo.com/mrss/" xmlns:turbo="http://turbo.yandex.ru">';
        $rssClose = '</rss>';
        $channelOpen = '<channel>';
        $channelClose = '</channel>';

        /*Base Settings For RSS*/
        $startSettings = '
        	<title>Прием металлолома в Москве скупка черного лома</title>
		    <link><![CDATA[https://lmk-moscow.ru]]></link>
		    <description>Прием металлолома в Москве скупка черного лома .Приём и вывоз цветного и чёрного металла в Москве и МО</description>
		    <language>ru</language>
		    <pubDate>'.now().'</pubDate>
        ';

        /*Items for RSS*/
        $items = [];
        $slugs = Slug::with('content')->whereIn('slugable_type', [
            'App\Models\Market'
        ])->orderBy('id', 'ASC')->get();

        foreach ($slugs as $slug) {
            $table = $tableBody = '';
            $slugable = $slug->slugable()->first();

            switch (get_class($slugable)) {
                case 'App\Models\Market':
                {
                    $marketPrices = Product::with(['metalPrice', 'category', 'market'])->where('market_id', $slugable->id)
                                           ->get()->groupBy('category_id');
                    break;
                }
                case 'App\Models\Category':
                {
                    $categoriesPrices = Product::with(['metalPrice', 'category', 'market'])
                                               ->where('category_id', $slugable->id)
                                               ->get();
                    break;
                }
                case 'App\Models\Product':
                {
                    $productPrice = Product::with(['metalPrice'])->where('id', $slugable->id)->first();
                    break;
                }
            }

            if (!empty($productPrice)) {
                $tableHead = '
                <tr>
                   <th>Категория<br>металла</th>
                   <th>Цена за 1кг/тонну</th>
                </tr>';
                $tableBody .= '
                <tr>
                    <td>'.$productPrice->title.'</td>
                    <td>'.str_replace(' ', '', $productPrice->metalPrice->by_wholesale).'</td>
                 </tr>';

                $table = '<table data-invisible="false">'.$tableHead.$tableBody.'</table>';
            } elseif (!empty($categoriesPrices)) {
                $tableHead = '
                <tr>
                   <th>Категория<br>металла</th>
                   <th>Цена за 1кг/тонну</th>
                </tr>';


                $tableBody = '';
                foreach ($categoriesPrices as $categoryPrice) {
                    $tableBody .= '
                <tr>
                    <td>'.$categoryPrice->title.'</td>
                    <td>'.str_replace(' ', '', $categoryPrice->metalPrice->by_wholesale).'</td>
                 </tr>';
                }

                $table = '<table data-invisible="false">'.$tableHead.$tableBody.'</table>';
            } elseif (!empty($marketPrices)) {
                foreach ($marketPrices as $categoriesPrices) {
                    if (!empty($categoriesPrices)) {
                        $tableHead = '
                <tr>
                   <th>Категория<br>металла</th>
                   <th>Цена за 1кг/тонну</th>
                </tr>';


                        $tableBody = '';
                        foreach ($categoriesPrices as $categoryPrice) {
                            $tableBody .= '
                <tr>
                    <td>'.$categoryPrice->title.'</td>
                    <td>'.str_replace(' ', '', $categoryPrice->metalPrice->by_wholesale).'</td>
                 </tr>';
                        }

                        $table .= '<table data-invisible="false">'.$tableHead.$tableBody.'</table>';
                    }
                }
            }

            $content = $slug->content;

            $randImg = [
                'https://lmk-moscow.ru/img/home-images/demontaj.webp',
                'https://lmk-moscow.ru/img/home-images/vivoz.webp',
                'https://lmk-moscow.ru/img/home-images/base.webp',
                'https://lmk-moscow.ru/img/forms-img/default_1_form.webp',
                'https://lmk-moscow.ru/img/forms-img/karta-sayta.webp',
            ];

            $realImage = 'https://lmk-moscow.ru/img/forms-img/'.$slug->slug.'.webp';
            try {
                if (stripos(get_headers($realImage)[0], "200 OK") ? true : false) {
                    $img = '<img src="'.$realImage.'"/>';
                } else {
                    $img = '<img src="'.$randImg[array_rand($randImg)].'"/>';
                }
            }catch (\Exception $exception){
                $img = '<img src="'.$randImg[array_rand($randImg)].'"/>';
            }

            $socials = '
            <div data-block="widget-feedback" data-stick="false">
              <div data-block="chat" data-type="whatsapp" data-url="https://api.whatsapp.com/send?phone=79254333556"></div>
              <div data-block="chat" data-type="telegram" data-url="https://telegram.me/lmk_moscow"></div>
              <div data-block="chat" data-type="vkontakte" data-url="https://vk.com/lmk_msk"></div>
              <div data-block="chat" data-type="facebook" data-url="https://www.facebook.com/LMKmsk"></div>
              <div data-block="chat" data-type="twitter" data-url="https://twitter.com/LmkMoscow"></div>
            </div>';

            $items[] = '
                 <item turbo="false">
		         	<guid isPermaLink="false">'.mt_rand(100000000, 999999999).'</guid>
		         	<title>ЛМК - '.$slug->h1.'</title>
		         	<link>https://lmk-moscow.ru/'.$slug->slug.'</link>
		         	<author>ЛМК - Москва</author>
		         	<category>Новости сайта</category>
		         	<description>Прием металлолома в Москве скупка черного лома .Приём и вывоз цветного и чёрного металла в Москве и МО</description>
		         	<turbo:content><![CDATA[<header><h1>'.$slug->h1.'</h1></header>'.$img.$content->text_1.$table.$content->text_2.$socials.']]></turbo:content>
		         	<pubDate>'.now().'</pubDate>
		         	<enclosure url="https://lmk-moscow.ru/img/core-img/og-base.jpg" type="image/jpeg" />
		         </item>
        ';
        }


        $rss = [
            $xml, $rssOpen, $channelOpen, $startSettings, //Base RSS Tags
            implode('', $items)
        ];

        /*Close RSS*/
        $rss[] = $channelClose;
        $rss[] = $rssClose;
        /*Close RSS*/

        $result = str_replace(array("\r\n", "\r", "\n", "\t"), ' ', implode('', $rss));
        file_put_contents('public/yt_menu_823u4c8293u492jr1111.rss', $result);
    }
}
