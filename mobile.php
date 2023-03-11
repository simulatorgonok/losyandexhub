<? 
include "./app/Core.php";
include "./app/MainStrings.php";
preloader();
checkphp();
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><? echo $nameinstance_m ?></title>
    <? include_once "./app/MetaMobile.php"; ?>
    <link rel="shortcut icon" href="<? echo $icon ?>">
    <link href="<? echo $css_m ?>" rel="stylesheet" type="text/css">

<body>
    <table height="53" cellpadding="1" cellspacing="1" class="b-head">
        <tbody>
            <tr>
              <td width="233" height="49" class="b-head__logo"><img src="<? echo $logo ?>" width="212" height="49"></td>
                <td width=" width="39%" height="49"" class="b-head__user"273><a href="about:blank">скоро....</a></td>
            </tr>
        </tbody>
    </table>
                    <tr>
<center><div class="ya-site-form ya-site-form_inited_no" data-bem="{&quot;action&quot;:&quot;https://yandex.ru/search/site/&quot;,&quot;arrow&quot;:true,&quot;bg&quot;:&quot;#ffcc00&quot;,&quot;fontsize&quot;:14,&quot;fg&quot;:&quot;#000000&quot;,&quot;language&quot;:&quot;ru&quot;,&quot;logo&quot;:&quot;rb&quot;,&quot;publicname&quot;:&quot;Поиск по Лосяндексу&quot;,&quot;suggest&quot;:true,&quot;target&quot;:&quot;_self&quot;,&quot;tld&quot;:&quot;ru&quot;,&quot;type&quot;:2,&quot;usebigdictionary&quot;:false,&quot;searchid&quot;:2413922,&quot;input_fg&quot;:&quot;#000000&quot;,&quot;input_bg&quot;:&quot;#ffffff&quot;,&quot;input_fontStyle&quot;:&quot;normal&quot;,&quot;input_fontWeight&quot;:&quot;normal&quot;,&quot;input_placeholder&quot;:&quot;что хочешь найти?&quot;,&quot;input_placeholderColor&quot;:&quot;#999999&quot;,&quot;input_borderColor&quot;:&quot;#999999&quot;}"><form action="https://yandex.ru/search/site/" method="get" target="_self" accept-charset="utf-8"><input type="hidden" name="searchid" value="2413922"/><input type="hidden" name="l10n" value="ru"/><input type="hidden" name="reqenc" value=""/><input type="search" name="text" value=""/><input type="submit" value="Найти"/></form></div><style type="text/css">.ya-page_js_yes .ya-site-form_inited_no { display: none; }</style><script type="text/javascript">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';}s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');</script>
                </tbody>
            </table>
        </div></center>
        <!-- <div class="b-tabs "><a id="maps" class="tab" href="https://web.archive.org/web/20110827061854/http://m.maps.yandex.ru/" onclick="tab(&#39;https://web.archive.org/web/20110827061854/http://m.maps.yandex.ru/?where=&amp;text=&#39;, this)">Карты</a><a id="slovari" class="tab" href="https://web.archive.org/web/20110827061854/http://m.slovari.yandex.ru/" onclick="tab(&#39;https://web.archive.org/web/20110827061854/http://m.slovari.yandex.ru/search.xml?text=&#39;, this)">Словари</a><a id="market" class="tab" href="https://web.archive.org/web/20110827061854/http://m.market.yandex.ru/" onclick="tab(&#39;https://web.archive.org/web/20110827061854/http://m.market.yandex.ru/search.xml?text=&#39;, this)">Маркет</a><a id="images" class="tab" href="https://web.archive.org/web/20110827061854/http://m.images.yandex.ru/" onclick="tab(&#39;https://web.archive.org/web/20110827061854/http://m.images.yandex.ru/search?rpt=image&amp;text=&#39;, this)">Картинки</a></div>
</form>
    <div class="g-delimiter" style="margin-bottom: 0;"></div>
    <div class="h-region">
        <table>
            <tbody>
                <tr>
                    <td class="b-region">Я&nbsp;в&nbsp;Сиэтле</td>
                    <td class="r"><a href="https://web.archive.org/web/20110827061854/http://tune.yandex.ru/m/geo.xml?retpath=http%3A%2F%2Fwww.yandex.ru%2Fm&amp;reg_from=">другой город</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="b-informers">
        <table cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td class="shadow-l">
                        <div class="shadow-i shadow-il"></div>
                    </td>
                    <td class="item color weather item-add"><a id="weather" class="link" href="https://web.archive.org/web/20110827061854/http://m.pogoda.yandex.ru/">Погода<span class="m"><img src="./m_files/n7.png" alt="ясно"><strong class="num">+27</strong></span>ночью&nbsp;+19 </a></td>
                    <td class="item mail item-add"><a id="messages" class="link" href="https://web.archive.org/web/20110827061854/http://pda-passport.yandex.ru/passport?mode=loginform&amp;retpath=http://mail.yandex.ru/lite/">Почта<span class="m"><img src="./m_files/mail.png" alt="Почта"></span><span class="enter">войти</span></a></td>
                    <td class="shadow-r">
                        <div class="shadow-i shadow-ir"></div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="g-delimiter b-info b-info_news">
        <h2 class="b-title"><a href="https://web.archive.org/web/20110827061854/http://pda.news.yandex.ru/">Сегодня в новостях</a></h2>
        <ul>
            <li></li>
        </ul>
        <form onsubmit="onChange(this, document.getElementById(&#39;path&#39;));return false;" action="https://web.archive.org/web/20110827061854mp_/http://pda.news.yandex.ru/internet.html">
        скоро...
        </form>
    </div>
    <div class="b-rates g-delimiter">
        <h2 class="b-title">Котировки</h2>
        <table>
            <tbody>
                <tr class="head">
                    <td colspan="2">сегодня</td>
                    <td colspan="2">завтра</td>
                </tr>
                <tr>
                    <th><a href="https://web.archive.org/web/20110827061854/http://pda.news.yandex.ru/quotes/1.html" onmousedown="">USD&nbsp;ЦБ</a></th>
                    <td><strong class="inactive">28,88</strong></td>
                    <td>-0,01</td>
                    <td><strong>28,87</strong></td>
                </tr>
                <tr>
                    <th><a href="https://web.archive.org/web/20110827061854/http://pda.news.yandex.ru/quotes/23.html" onmousedown="">EUR&nbsp;ЦБ</a></th>
                    <td><strong class="inactive">41,67</strong></td>
                    <td>0,00</td>
                    <td><strong>41,67</strong></td>
                </tr>
            </tbody>
        </table>
        <table>
            <tbody>
                <tr>
                    <th><a href="https://web.archive.org/web/20110827061854/http://pda.news.yandex.ru/quotes/1006.html" onmousedown="">Нефть</a></th>
                    <td>+0,14%</td>
                    <td><strong>111,25</strong></td>
                    <td>26/08</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="g-delimiter b-info b-info_blogs">
        <h2 class="b-title"><a href="about:blank">скоро...</a><a href="https://web.archive.org/web/20110827061854/http://pda.blogs.yandex.ru/search.xml?cat=theme&amp;id=11926&amp;ft=blog&amp;group=2"></a></h2>
    </div>
    <div class="g-delimiter b-tv">
        <h2 class="b-title"><a href="https://web.archive.org/web/20110827061854/http://m.tv.yandex.ru/">Телепрограмма</a></h2>
        <table cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td class="b-tv__time">01:20 </td>
                    <td><a href="https://web.archive.org/web/20110827061854/http://m.tv.yandex.ru/broadcast.xml?id=55578518">Забудьте слово смерть</a>&nbsp; <span class="b-tv__channel">Первый</span></td>
                </tr>
                <tr>
                    <td class="b-tv__time">01:30 </td>
                    <td><a href="https://web.archive.org/web/20110827061854/http://m.tv.yandex.ru/broadcast.xml?id=55961169">Заяц над…</a>&nbsp; <span class="b-tv__channel">ТВ Центр-International</span></td>
                </tr>
                <tr>
                    <td class="b-tv__time">02:00 </td>
                    <td><a href="https://web.archive.org/web/20110827061854/http://m.tv.yandex.ru/broadcast.xml?id=55286897">Субботник</a>&nbsp; <span class="b-tv__channel">Россия-Планета</span></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="g-delimiter b-info b-info_catalog">
        <h2 class="b-title"><a href="https://web.archive.org/web/20110827061854/http://pda.yaca.yandex.ru/yca/cat/">Сайты для мобильных</a></h2>
        <ul>
            <li><a href="https://web.archive.org/web/20110827061854/http://pda.yaca.yandex.ru/yca/cat/Mobile/Mobile_Apps">Программы</a> и <a href="https://web.archive.org/web/20110827061854/http://pda.yaca.yandex.ru/yca/cat/Mobile/Download/Melody/">мелодии</a></li>
            <li><a href="https://web.archive.org/web/20110827061854/http://pda.yaca.yandex.ru/yca/cat/Amusement/">Развлечения</a> и <a href="https://web.archive.org/web/20110827061854/http://pda.yaca.yandex.ru/yca/cat/Mobile/Download/Games/">игры</a></li>
            <li><a href="https://web.archive.org/web/20110827061854/http://pda.yaca.yandex.ru/yca/cat/Communication/">Общение</a> и <a href="https://web.archive.org/web/20110827061854/http://pda.yaca.yandex.ru/yca/cat/Mobile/Download/Books/">книги</a></li>
        </ul>
    </div> 
    <div class="g-delimiter b-apps">
  <h2 class="b-title">скоро...</h2>
</div>
    <div class="b-foot">
<form action="https://web.archive.org/web/20110827061854/http://www.yandex.ru/services.xml" class="b-foot__form" method="get"><select name="url" class="b-foot__services">
                <option value="all">Все сервисы</option>
                <option value="auto">Авто</option>
                <option value="afisha">Афиша</option>
                <option value="blogs">Блоги</option>
                <option value="money">Деньги</option>
                <option value="zakladki">Закладки</option>
                <option value="images">Картинки</option>
                <option value="maps">Карты</option>
                <option value="yaca">Каталог</option>
                <option value="market">Маркет</option>
                <option value="moikrug">Мой круг</option>
                <option value="news">Новости</option>
                <option value="weather">Погода</option>
                <option value="lenta">Подписки</option>
                <option value="mail">Почта</option>
                <option value="rabota">Работа</option>
                <option value="rasp">Расписания</option>
                <option value="slovari">Словари</option>
                <option value="tv">Телепрограмма</option>
                <option value="fotki">Фотки</option>
                <option value="wow">Я.ру</option>
            </select><input type="submit" class="b-foot__button" value="Перейти"></form> -->
        <p>© 2018-2021 <a href="http://vkontakte.ru/zvukoffffffer">miles_prow3r (aka kroshmorkovkin, Андрей)</a></p>
        <p>©&nbsp;2007-2011 <a href="http://yandex.ru">«Яндекс»</a></p>
        <p class="b-foot__info"><a href="https://web.archive.org/web/20110827061854/http://tune.yandex.ru/m/?retpath=http%3A%2F%2Fwww.yandex.ru%2Fm">скоро...</a></p>
        <p class="b-foot__info"><a href="mailto:sosic.heh@ya.ru">Написать мне на почту насчёт ЛОСЯндекса :)</a></p>
        <p class="b-foot__info"><a href="./main.php">На полную версию!</a></p>
        <a href="http://centos.org" target="_blank"><img src="././app/main/img/powered/centos-var2.png" title="На данной ОС работает сервер хостинга :))" alt="Powered by CentOS"></a>
        <a href="http://httpd.apache.org/" target="_blank"><img src="././app/main/img/powered/apache.png" title="А на Апаче держится весь сервер, а nginx работает как прокси )))" alt="Powered by httpd"></a>
</body>
</html>