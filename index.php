<?php
	/*   
	Ну что ж, это код. 
	Да, код ЛОСЯндекса. 
	Да, на PHP. 
	Да, олдовый. 
	Какого хрена вам ещё надо? 
	Ах да... описание!)))0 (ладно)
    добро пожаловать в исходники ЛОСЯндекса!
	
    ЛОСЯндекс - лучший поисковик в мире Смешариков!
    Появился: 4 июня 2020
    Версия 1.0 - 4 июня 2020
    Версия 1.1 - июль-август 2020
    Версия 1.2 - конец августа 2020
    Версия 1.3 - сентябрь 2020 
    Версия 1.5 - ноябрь 2020
    Версии от 1.5 до 1.9 - промежуточные бетки
    Версия 2.0 (ЧЯЛ - Чисто Яндексовый ЛОСЯндекс) - август 2021
    Версии от 2.1 до 2.9 - тоже промежутки
    Версия 3.0 (ЧЯЛ - Чисто Яндексовый ЛОСЯндекс, или же ЛОСЯндекс v3/ЧЯЛ v3) - ноябрь-декабрь 2021
    Версия 4.0 (ЧЯЛ - Чисто Яндексовый ЛОСЯндекс, или же ЛОСЯндекс v4/ЧЯЛ v4) - начало 2022
	Автор: kroshmorkovkin aka KM, Андрей
	
	*/

include "./app/Core.php";
include "./app/MainStrings.php";
checkphp();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!-- спизжено с вейбека, просьба не кидать в меня тапочками -->
<!-- привет моментову -->

<!-- Эта часть с историей версий теперь запечатана нахрен, она в коде. 
    Позже перенесу на форум :) -->

<!-- Арсений из нашей команды (варений), 
    если что то не так, 
    иди верстай свои веб 1.0 сайты в блокноте, 
    дримвивер и т.п и вёрстка не для тебя)) 
    (На данный момент актуально) -->

<title><?php echo $nameinstance; ?></title>
    <link rel="shortcut icon" href="<?php echo $icon; ?>">
	<?php require "./app/Meta.php"; ?>
	<link href="<?php echo $css; ?>" rel="stylesheet" type="text/css">
    
    <table id="head">
        <tbody>
            <tr>
                <td class="g"><i></i></td>
                <td class="h"><a id="losyandex_status" href="./about.phtml">Статус ЛОСЯндекса - обязательно посмотри! Полезно :)</a></td>
                <td><a href="about:blank">скоро...&nbsp;&nbsp;</a>&nbsp;&nbsp;<a class="b-top__link" href="about:blank">скоро...</a></td>
                <td class="m"><a class="b-top__login" href="http://forums.kroshmorkovkin.ru">Майлзофорумы</a></td>
                <td class="g"><i></i></td>
            </tr>
        </tbody>
    </table>
    <div class="b-max-width">
        <table id="neck">
            <tbody>
                <tr class="news">
                    <td class="b-neck-left">
                        <div style="width:178px;"></div>
                    </td></td>
                    <td id="teaser"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="b-max-width">
        <table class="l-head">
            <tbody>
                <tr>
                    <td class="l-head-left">
                        <h1><img src="<? echo $logo ?>" alt="ладно." name="logo" width="270" height="72" id="logo" title=""></h1>
                    </td>
                    <td class="l-head-right">
                        <form id="form" action="https://web.archive.org/web/20110815184915/http://yandex.ru/yandsearch">
                            <table id="tabs">
                                <tbody>
                                    <tr>
                                        <th>Поиск</th>
                                        <td><a href="https://web.archive.org/web/20110815184915/http://maps.yandex.ru/">Карты</a></td>
                                        <td><a href="https://web.archive.org/web/20110815184915/http://market.yandex.ru/?clid=505">Маркет</a></td>
                                        <td><a href="https://web.archive.org/web/20110815184915/http://news.yandex.ru/">Новости</a></td>
                                        <td><a href="https://web.archive.org/web/20110815184915/http://slovari.yandex.ru/">Словари</a></td>
                                        <td><a href="https://web.archive.org/web/20110815184915/http://blogs.yandex.ru/">Блоги</a></td>
                                        <td><a href="https://web.archive.org/web/20110815184915/http://video.yandex.ru/">Видео</a></td>
                                        <td><a href="https://web.archive.org/web/20110815184915/http://images.yandex.ru/">Картинки</a></td>
                                        <td class="all">
                                            <div class="b-dropdowna b-dropdowna_isBEM_yes i-bem" onclick="return {&#39;b\-dropdowna&#39;:{name:&#39;b\-dropdowna&#39;}}"><span class="b-dropdowna__switcher"><a class="b-pseudo-link b-pseudo-link_isBEM_yes i-bem" onclick="return {&#39;b\-pseudo\-link&#39;:{name:&#39;b\-pseudo\-link&#39;}}" href="https://web.archive.org/web/20110815184915/http://www.yandex.ru/all">ещё</a></span>
                                                <div class="b-popupa b-popupa_theme_ffffff b-popupa_direction_down b-popupa_isBEM_yes i-bem b-dropdowna__popup"><i class="b-popupa__shadow"></i><i class="b-popupa__tail"><i class="b-popupa__tail-i"></i></i>
                                                    <table cellpadding="0" cellspacing="0" class="b-popupa__wrap">
                                                        <tbody>
                                                            <tr>
                                                                <td class="b-popupa__wrap-cell">
                                                                    <div class="b-popupa__content">
                                                                        <div class="b-menu b-menu_layout_vert b-menu_preset_vmenu">
                                                                            <ul class="b-menu_layout_vert__layout">
                                                                                <li class="b-menu__layout-cell b-menu_layout_vert__layout-cell ">
                                                                                    <div class="b-menu__item"><a class="b-link" href="https://web.archive.org/web/20110815184915/http://auto.yandex.ru/">Авто</a></div>
                                                                                </li>
                                                                                <li class="b-menu__layout-cell b-menu_layout_vert__layout-cell ">
                                                                                    <div class="b-menu__item"><a class="b-link" href="https://web.archive.org/web/20110815184915/http://afisha.yandex.ru/">Афиша</a></div>
                                                                                </li>
                                                                                <li class="b-menu__layout-cell b-menu_layout_vert__layout-cell ">
                                                                                    <div class="b-menu__item"><a class="b-link" href="https://web.archive.org/web/20110815184915/https://money.yandex.ru/">Деньги</a></div>
                                                                                </li>
                                                                                <li class="b-menu__layout-cell b-menu_layout_vert__layout-cell ">
                                                                                    <div class="b-menu__item"><a class="b-link" href="https://web.archive.org/web/20110815184915/http://yaca.yandex.ru/">Каталог</a></div>
                                                                                </li>
                                                                                <li class="b-menu__layout-cell b-menu_layout_vert__layout-cell ">
                                                                                    <div class="b-menu__item"><a class="b-link" href="https://web.archive.org/web/20110815184915/http://moikrug.ru/">Мой Круг</a></div>
                                                                                </li>
                                                                                <li class="b-menu__layout-cell b-menu_layout_vert__layout-cell ">
                                                                                    <div class="b-menu__item"><a class="b-link" href="https://web.archive.org/web/20110815184915/http://narod.yandex.ru/">Народ</a></div>
                                                                                </li>
                                                                                <li class="b-menu__layout-cell b-menu_layout_vert__layout-cell ">
                                                                                    <div class="b-menu__item"><a class="b-link" href="https://web.archive.org/web/20110815184915/http://realty.yandex.ru/">Недвижимость</a></div>
                                                                                </li>
                                                                                <li class="b-menu__layout-cell b-menu_layout_vert__layout-cell ">
                                                                                    <div class="b-menu__item"><a class="b-link" href="https://web.archive.org/web/20110815184915/http://cards.yandex.ru/">Открытки</a></div>
                                                                                </li>
                                                                                <li class="b-menu__layout-cell b-menu_layout_vert__layout-cell ">
                                                                                    <div class="b-menu__item"><a class="b-link" href="https://web.archive.org/web/20110815184915/http://translate.yandex.ru/">Перевод</a></div>
                                                                                </li>
                                                                                <li class="b-menu__layout-cell b-menu_layout_vert__layout-cell ">
                                                                                    <div class="b-menu__item"><a class="b-link" href="https://web.archive.org/web/20110815184915/http://pogoda.yandex.ru/">Погода</a></div>
                                                                                </li>
                                                                                <li class="b-menu__layout-cell b-menu_layout_vert__layout-cell ">
                                                                                    <div class="b-menu__item"><a class="b-link" href="https://web.archive.org/web/20110815184915/http://mail.yandex.ru/">Почта</a></div>
                                                                                </li>
                                                                                <li class="b-menu__layout-cell b-menu_layout_vert__layout-cell ">
                                                                                    <div class="b-menu__item"><a class="b-link" href="https://web.archive.org/web/20110815184915/http://probki.yandex.ru/">Пробки</a></div>
                                                                                </li>
                                                                                <li class="b-menu__layout-cell b-menu_layout_vert__layout-cell ">
                                                                                    <div class="b-menu__item"><a class="b-link" href="https://web.archive.org/web/20110815184915/http://rabota.yandex.ru/">Работа</a></div>
                                                                                </li>
                                                                                <li class="b-menu__layout-cell b-menu_layout_vert__layout-cell ">
                                                                                    <div class="b-menu__item"><a class="b-link" href="https://web.archive.org/web/20110815184915/http://rasp.yandex.ru/">Расписания</a></div>
                                                                                </li>
                                                                                <li class="b-menu__layout-cell b-menu_layout_vert__layout-cell ">
                                                                                    <div class="b-menu__item"><a class="b-link" href="https://web.archive.org/web/20110815184915/http://tv.yandex.ru/">Телепрограмма</a></div>
                                                                                </li>
                                                                                <li class="b-menu__layout-cell b-menu_layout_vert__layout-cell ">
                                                                                    <div class="b-menu__item"><a class="b-link" href="https://web.archive.org/web/20110815184915/http://uslugi.yandex.ru/">Услуги</a></div>
                                                                                </li>
                                                                                <li class="b-menu__layout-cell b-menu_layout_vert__layout-cell ">
                                                                                    <div class="b-menu__item"><a class="b-link" href="https://web.archive.org/web/20110815184915/http://fotki.yandex.ru/">Фотки</a></div>
                                                                                </li>
                                                                                <li class="b-menu__layout-cell b-menu_layout_vert__layout-cell ">
                                                                                    <div class="b-menu__item"><a class="b-link" href="https://web.archive.org/web/20110815184915/http://my.ya.ru/">Я.ру</a></div>
                                                                                </li>
                                                                                <li class="b-menu_layout_vert__layout-separator"><i class="b-menu__separator"></i></li>
                                                                                <li class="b-menu__layout-cell b-menu_layout_vert__layout-cell ">
                                                                                    <div class="b-menu__item"><a class="b-link" href="https://web.archive.org/web/20110815184915/http://mobile.yandex.ru/">Для&nbsp;мобильного</a></div>
                                                                                </li>
                                                                                <li class="b-menu__layout-cell b-menu_layout_vert__layout-cell ">
                                                                                    <div class="b-menu__item"><a class="b-link" href="https://web.archive.org/web/20110815184915/http://soft.yandex.ru/">Программы</a></div>
                                                                                </li>
                                                                                <li class="b-menu__layout-cell b-menu_layout_vert__layout-cell b-menu_layout_vert__layout-cell_last">
                                                                                    <div class="b-menu__item"><a class="b-link" href="https://web.archive.org/web/20110815184915/http://www.yandex.ru/all">Все&nbsp;сервисы</a></div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="b-search__arrow ">
                                <tbody>
                                    <tr>
                                        <td class="arr"><div class="ya-site-form ya-site-form_inited_no" data-bem="{&quot;action&quot;:&quot;https://yandex.ru/search/site/&quot;,&quot;arrow&quot;:true,&quot;bg&quot;:&quot;#ffcc00&quot;,&quot;fontsize&quot;:14,&quot;fg&quot;:&quot;#000000&quot;,&quot;language&quot;:&quot;ru&quot;,&quot;logo&quot;:&quot;rb&quot;,&quot;publicname&quot;:&quot;Поиск по Лосяндексу&quot;,&quot;suggest&quot;:true,&quot;target&quot;:&quot;_self&quot;,&quot;tld&quot;:&quot;ru&quot;,&quot;type&quot;:2,&quot;usebigdictionary&quot;:false,&quot;searchid&quot;:2413922,&quot;input_fg&quot;:&quot;#000000&quot;,&quot;input_bg&quot;:&quot;#ffffff&quot;,&quot;input_fontStyle&quot;:&quot;normal&quot;,&quot;input_fontWeight&quot;:&quot;normal&quot;,&quot;input_placeholder&quot;:&quot;что хочешь найти?&quot;,&quot;input_placeholderColor&quot;:&quot;#999999&quot;,&quot;input_borderColor&quot;:&quot;#999999&quot;}"><form action="https://yandex.ru/search/site/" method="get" target="_self" accept-charset="utf-8"><input type="hidden" name="searchid" value="2413922"/><input type="hidden" name="l10n" value="ru"/><input type="hidden" name="reqenc" value=""/><input type="search" name="text" value=""/><input type="submit" value="Найти"/></form></div><style type="text/css">.ya-page_js_yes .ya-site-form_inited_no { display: none; }</style><script type="text/javascript">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';}s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');</script></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="b-max-width">
        <table id="body" lang="ru">
            <colgroup>
                <col width="18%">
                <col width="82%">
            </colgroup>
            <tbody>
                <tr>
                    <th class="body-left">
                    <td>
                        <div id="left">
                            <div class="b-region l-block"><span class="b-top-title  b-top-title_big">На ЛОСЯндексе: <? weeks_date_time(); ?>
                                    <!--2011-08-15 11:49:15-->
                                </span>
                              <!-- <div class="b-region__info"><a href="https://web.archive.org/web/20110815184915/http://maps.yandex.ru/" class="main">Карта США</a> </div>
                            </div>
                            <div class="left__inner">
                                <div class="b-service-list">
                                    <div class="b-service-list__width"></div>
                                    <dl class="b-service-list__column ">
                                        <dt class="b-service-list__title"><a href="https://web.archive.org/web/20110815184915/http://auto.yandex.ru/">Авто<i class="b-service-icon_auto"></i></a></dt>
                                        <dd class="b-service-list__description"><a href="https://web.archive.org/web/20110815184915/http://auto.yandex.ru/avg-price.xml">рассчитайте стоимость</a></dd>
                                        <dt class="b-service-list__title"><a href="https://web.archive.org/web/20110815184915/http://rabota.yandex.ru/">Работа<i class="b-service-icon_rabota"></i></a></dt>
                                        <dd class="b-service-list__description"><a href="https://web.archive.org/web/20110815184915/http://rabota.yandex.ru/search.xml?top_days=60&amp;employment=UNDER_EMPLOYMENT">с частичной занятостью</a></dd>
                                    </dl>
                                    <dl class="b-service-list__column b-service-list__column_right">
                                        <dt class="b-service-list__title"><a href="https://web.archive.org/web/20110815184915/http://market.yandex.ru/">Маркет<i class="b-service-icon_market"></i></a></dt>
                                        <dd class="b-service-list__description"><a href="https://web.archive.org/web/20110815184915/http://market.yandex.ru/catalogmodels.xml?CAT_ID=160043&amp;hid=91491&amp;clid=514">мобильные телефоны</a></dd>
                                        <dt class="b-service-list__title"><a href="https://web.archive.org/web/20110815184915/http://realty.yandex.ru/">Недвижимость<i class="b-service-icon_realty"></i></a></dt>
                                        <dd class="b-service-list__description"><a href="https://web.archive.org/web/20110815184915/http://realty.yandex.ru/search.xml?type=SELL&amp;category=APARTMENT&amp;exceptNewFlat=YES">на вторичном рынке</a></dd>
                                    </dl>
                                </div>
                                <div class="b-catalog l-block">
                                    <div class="b-catalog__width"></div>
                                    <dl class="b-catalog__column">
                                        <dt class="b-catalog__title"><a href="https://web.archive.org/web/20110815184915/http://yaca.yandex.ru/yca/cat/Entertainment/Games/game-play/" title="флеш-игры, мини-игры, MMOG">Игры</a></dt>
                                        <dt class="b-catalog__title"><a href="https://web.archive.org/web/20110815184915/http://yaca.yandex.ru/yca/cat/Private_Life/Beauty/" title="прически, косметика, мода">Красота</a></dt>
                                        <dt class="b-catalog__title"><a href="https://web.archive.org/web/20110815184915/http://yaca.yandex.ru/yca/cat/Sports/" title="футбол, хоккей, автоспорт">Спорт</a></dt>
                                        <dt class="b-catalog__title"><a href="https://web.archive.org/web/20110815184915/http://yaca.yandex.ru/yca/cat/Science/" title="вузы, рефераты, науки">Учёба</a></dt>
                                        <dt class="b-catalog__title"><a href="https://web.archive.org/web/20110815184915/http://yaca.yandex.ru/yca/cat/Culture/Music/" title="mp3, поп, рок">Музыка</a></dt>
                                    </dl>
                                    <dl class="b-catalog__column b-catalog__column_right">
                                        <dt class="b-catalog__title"><a href="https://web.archive.org/web/20110815184915/http://yaca.yandex.ru/yca/cat/Entertainment/" title="юмор, знакомства, гороскопы">Развлечения</a></dt>
                                        <dt class="b-catalog__title"><a href="https://web.archive.org/web/20110815184915/http://yaca.yandex.ru/yca/cat/Business/" title="финансы, недвижимость, реклама">Бизнес</a></dt>
                                        <dt class="b-catalog__title"><a href="https://web.archive.org/web/20110815184915/http://yaca.yandex.ru/yca/cat/Rest/" title="туризм, афиша, хобби">Отдых</a></dt>
                                        <dt class="b-catalog__title"><a href="https://web.archive.org/web/20110815184915/http://yaca.yandex.ru/yca/cat/Private_Life/" title="красота, здоровье, семья">Дом</a></dt>
                                        <dt class="b-catalog__title"><a href="https://web.archive.org/web/20110815184915/http://yaca.yandex.ru/yca/geo/North_America/USA/Seattle/">Сайты <span class="nowrap">Сиэтла</span></a></dt>
                                    </dl>
                                </div>
                                <div class="b-services ">
                                    <ul>
                                        <li><a href="about:blank" class="b-services-name b-services-direct"><i class="b-services__direct"></i>скоро....</a><a href="about:blank" class="b-services-text"></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="https://web.archive.org/web/20110815184915/https://money.yandex.ru/" class="b-services-name"><i class="b-services__money"></i>Деньги</a></li>
                                        <li><a href="https://web.archive.org/web/20110815184915/http://narod.yandex.ru/" class="b-services-name"><i class="b-services__narod"></i>Народ</a></li>
                                        <li><a href="https://web.archive.org/web/20110815184915/http://moikrug.ru/" class="b-services-name"><i class="b-services__moikrug"></i>Мой Круг</a></li>
                                        <li><a href="https://web.archive.org/web/20110815184915/http://metrika.yandex.ru/" class="b-services-name"><i class="b-services__metrika"></i>Метрика</a></li>
                                    </ul>
                                </div>
                            </div> 
                        </div>
                        <div id="right">
                            <div class="l">
                                <div class="b-weather l-block"><span class="b-weather__title b-top-title b-top-title_bl  b-top-title_big "><a class="b-weather__link" href="https://web.archive.org/web/20110815184915/http://pogoda.yandex.ru/seattle/">Погода<img class="b-weather__icon" title="облачно с прояснениями" alt="облачно с прояснениями" src="./main_files/wiz6.png"></a>+16</span>
                                    <div class="b-weather__info">ночью&nbsp;+14, завтра&nbsp;+20</div>
                                </div>
                                <div class="right__inner">
                                    <div class="b-tv info">
                                        <h2 class="b-top-title "><a href="https://web.archive.org/web/20110815184915/http://tv.yandex.ru/">Телепрограмма</a></h2>
                                        <ul>
                                            <li><em>13:25</em> <a href="https://web.archive.org/web/20110815184915/http://tv.yandex.ru/broadcast.xml?id=51291740">Глухарь. Продолжение</a> <span class="channel">НТВ-Мир</span></li>
                                            <li><em>13:35</em> <a href="https://web.archive.org/web/20110815184915/http://tv.yandex.ru/broadcast.xml?id=52439948" title="Пятая группа крови">Пятая группа…</a> <span class="channel">Россия-Планета</span></li>
                                            <li><em>14:25</em> <a href="https://web.archive.org/web/20110815184915/http://tv.yandex.ru/broadcast.xml?id=52689139">Замри, умри, воскресни</a> <span class="channel">Первый</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="r">
                                <div class="hslice" id="stocks" style="display:none;"><span class="entry-title">Котировки</span><a rel="feedurl" href="https://web.archive.org/web/20110815184915/http://www.yandex.ru/slf/stocks.html"></a></div>
                                <div class="b-stocks l-block">
                                    <h2 class="b-top-title b-top-title_big">Котировки</h2>
                                    <table>
                                        <tbody>
                                            <tr class="head">
                                                <td colspan="2">13/08</td>
                                                <td colspan="2">завтра</td>
                                            </tr>
                                            <tr>
                                                <th><a href="https://web.archive.org/web/20110815184915/http://news.yandex.ru/quotes/1.html" title="Динамика курса USD ЦБ">USD&nbsp;ЦБ</a></th>
                                                <td><strong class="inactive">29,4452</strong></td>
                                                <td>−0,5876</td>
                                                <td><strong class="hot" title="Значение изменилось более чем на 1%">28,8576</strong></td>
                                            </tr>
                                            <tr>
                                                <th><a href="https://web.archive.org/web/20110815184915/http://news.yandex.ru/quotes/23.html" title="Динамика курса EUR ЦБ">EUR&nbsp;ЦБ</a></th>
                                                <td><strong class="inactive">41,7768</strong></td>
                                                <td>−0,4873</td>
                                                <td><strong class="hot" title="Значение изменилось более чем на 1%">41,2895</strong></td>
                                            </tr>
                                            <tr class="s">
                                                <td colspan="4"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th><a href="https://web.archive.org/web/20110815184915/http://news.yandex.ru/quotes/1006.html" title="Динамика цен на Нефть">Нефть</a></th>
                                                <td>+1,90%</td>
                                                <td><strong>109,56</strong></td>
                                                <td>15/08</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> -->
                        </div>
                        <div style="width: 810px; height: 0; font: 0/0 a;"></div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script type="text/javascript" src="./app/km/losyandex/include/main/js/jquery.min.js"></script>
    <!--[if gt IE 7]><!-->
    <link rel="stylesheet" href="./app/km/losyandex/include/main/css/_www.css">
    <!--<![endif]-->
    <!--[if lt IE 8]><link rel=stylesheet href="http://yandex.st/www/1.21/www/pages/www/_www.ie.css"><![endif]-->
	
	<!-- Та часть, в которую надо запихивать копирайты и прочее. -->
    <div id="foot">
        <table>
            <tbody>
                <tr>
                    <td width="2%" class="g"><i></i></td>
                    <td width="25%" class="d"><p>Дизайном занимался &nbsp;- <a href="http://vkontakte.ru/zvukoffffffer">Майлз "Тейлз" Праузр :)</a></p>
                    <br>
                    <p>Вёрстка оригинальной русской версии Яндекса была взята и изменена из интернет-архива Wayback Machine.</p>
                    <br>
                    </td>
                    <td width="47%" class="c"><p><a href="about:blank">Тут скоро будет новая фича</a>!
                </p>
                <p>
	<a class="mob" href="mobile.php" target="_blank">Мобильная версия</a>
	<br>
	<br>
	<center>
	<a href="http://centos.org" target="_blank"><img src="././app/main/img/powered/centos-var2.png" title="На данной ОС работает сервер хостинга :))" alt="Powered by CentOS"></a>
	<a href="http://httpd.apache.org/" target="_blank"><img src="././app/main/img/powered/apache.png"  title="А на Апаче держится весь сервер, а nginx работает как прокси )))" alt="Powered by httpd"></a>
	</center>
	</p>
	</td>
                    <td width="24%" class="r">&nbsp;<span>©&nbsp;2018-2021, <a href="http://vkontakte.ru/zvukoffffffer">kroshmorkovkin </a></span><a href="http://vkontakte.ru/zvukoffffffer"><span>(aka KM, Андрей</span></a><span>)</span>
                      <p>&nbsp;<span>© 1997-2021, <a href="http://yandex.ru">Яндекс</a></span></p>
                        <p>Оригинальные материалы принадлежат компании Yandex LLC.</p>
                        <p>Ах да... ЛОСЯндекс - НИКАК НЕ ОТНОСИТСЯ К НАСТОЯЩЕМУ ЯНДЕКСУ! Это всего лишь его копия.<p>
                        <p>Если здесь есть то, чего не должно быть, пишите на <a href="mailto:sosic.heh@ya.ru?subject=LOSYandex Abuse">основную почту</a></td>
                    <td width="2%" class="g"><i></i></td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
        </div>
    </div>
</body>

</html>