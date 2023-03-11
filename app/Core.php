<?php
/* LOSYandex Core (PYL v4) */

# Режим отладки - 1 включен (логично), 2 выявление очень важной (нет) ошибки (огр доступа к лосяндексу), всё выше двух... Ну вы поняли)

$devmode = '0';
$devmode_geterror = error_get_last();
$devmode_info = "<h3>LOSYandex Core v4 in devmode (режим разработки)!</h3> 
если ты это видишь, то это означает - что включен режим отладки, который показывает ошибки и т.п. 
<br>
Это нужно для того, чтобы пользователи могли докладывать нам ошибки. Удачи! :)
<hr>
LOSYandex Team
<hr>";

if (1 == $devmode)
 {
  echo $devmode_info;
 }
 
if (2 == $devmode)
 {
  echo $devmode_info;
  echo("ЛОСЯндекс отключён для решения важной (или нет) ошибки! <hr>");
  echo("<h1>ВНИМАНИЕ!!! ЛОСЯНДЕКС ОТКЛЮЧЕН ПОЛНОСТЬЮ!!! <br> ИДЁТ СТУЛ</h1> Процесс завершён на 907%");
  die();
 }

if ($devmode > 2)
 {
  echo("<code>Значение devmode выше двух! <br>Если админ это поставил, то: ему лень админить лосяндекс, <br>либо он не может временно обслуживать его по личным причинам.<br>Если вы это видите, пишите мне в ЛС в телеграм: @prow3r05</code>");
  die();
 }

function timeget()
{
  // Зарезервировано (нахуя? Есть же weeks_date_time... а ладно, оставлю на всяк)
  echo 'Hello World!';
} 

function preloader()
{
  // reserved
  // UPD 29.12.2021 23:23 - ауе! Резервированая функция все-таки пригодилась! Здесь будет пока что интегрирована функция выбора версий ЛОСЯндекса -
  // мобильная или десктопная. Это хорошо, ага?
  // Хотя.. кто в код посмотрит?
  // UPD 18.06.2022 8:14 - не, придётся удалить

}

function weeks_date_time()
{
	echo('временные технические шоколадки, поэтому дата будет не доступна');
}

function win_weeks_date_time()
{
  // soon fixing in v4
  // setlocale(LC_ALL, 'ru_RU', 'ru_RU.UTF-8', 'ru', 'russian');  
  // date_default_timezone_set('Europe/Minsk');
  // echo iconv('strftime('%A, %d %h %Y, %H:%M:%S', time())).'<br>';
}

function checkphp()
{ 
  if (version_compare(phpversion(), '5.2.12', '<'))
  {
     die('<body bgcolor="black">
     <font color="red">
     <title>Упс...</title>
     <h1>ЛОСЯндекс требует PHP выше 5.2.12!</h1>
     <h1>Извини, но у тебя, к сожалению, не запустится :(</h1>
     <hr>
   <address>Эта ошибка вызвана функцией checkphp()</address>
   <address>У тебя установлен PHP версии '.htmlspecialchars(phpversion()).'</address>');
  }
}

function nymotnya()
{
  /* if (date('m') == 'December'))
   {
    include_once('02-NewYear-YandexMotnya.php');
   } */
}

function kroshinfo()
{
  echo file_get_contents('/./about.php',0);
}
?>