﻿<?
// include
include "./app/Core.php";
include "./app/MainStrings.php";
$losyandex_main = 'main.php';
$core = './app/Core.php';
$centos = shell_exec('cat /etc/centos-release');
system('C:\\windows\\syswow64\\nircmd.exe trayballoon "А?" "Кто-то зашёл в about.phtml ЛОСЯндекса и это отобразилось))) Пасхалки 80lvl :D" "shell32.dll,2" 15000');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <style type="text/css">
        body {
            background-color: #001d18;
            color: #222;
            font-family: sans-serif;
        }

        pre {
            margin: 0;
            font-family: monospace;
        }

        a:link {
            color: #009;
            text-decoration: none;
            background-color: #fff;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            border-collapse: collapse;
            border: 0;
            width: 934px;
            box-shadow: 1px 2px 3px #ccc;
        }

        .center {
            text-align: center;
        }

        .center table {
            margin: 1em auto;
            text-align: left;
        }

        .center th {
            text-align: center !important;
        }

        td,
        th {
            border: 1px solid #666;
            font-size: 75%;
            vertical-align: baseline;
            padding: 4px 5px;
            color: white;
        }

        h1 {
            font-size: 150%;
            color: white;
        }

        h2 {
            font-size: 125%;
        }

        .p {
            text-align: left;
        }

        .e {
            width: 300px;
            font-weight: bold;
        }

        .h {
            background-color: #001d18;
            font-weight: bold;
        }

        .v {
            background-color: #001d18;
            max-width: 300px;
            overflow-x: auto;
        }

        .v i {
            color: #999;
        }

        img {
            float: right;
            border: 0;
        }

        hr {
            width: 934px;
            background-color: #ccc;
            border: 0;
            height: 1px;
        }
    </style>
    <title>kroshinfo()</title>
    <meta name="ROBOTS" content="NOINDEX,NOFOLLOW,NOARCHIVE" />
</head>

<body>
    <div class="center">
        <table>
            <tr class="h">
                <td>
                    <a href="./"><img border="0" src="<? echo $logo_morkovka ?>" alt="ЛОСЯндекс :)" width="100" height="100"/></a>
                    <h1 class="p">
                        Чисто Яндексовый <? echo $nameinstance ?> версии 4 
                        (<? echo 'сборка от ' . date ("Y-m-d H:i:s ", filemtime($losyandex_main)), ' по UTC'; ?>)
                        <br>
                        Работаем на пока что приватном движке KM:Search
                        <br>
                        Автор этого чуда (ладно): <? echo $author ?>
                        <br>
                        <? echo "$nameinstance - $description" ?></h1>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td class="e">Запущено из под</td>
                <td class="v"><?php echo $centos ?></td>
            </tr>
            <tr>
                <td class="e">Имя инстанта</td>
                <td class="v"><?php echo $nameinstance ?></td>
            </tr>
            <tr>
                <td class="e">Версия</td>
                <td class="v">А это вы смотрите вверху :)</td>
            </tr>
            <tr>
                <td class="e">PHP</td>
                <td class="v"><?php echo phpversion(); ?></td>
            </tr>
            <tr>
                <td class="e">Файл системных значений (ЛОСЯндекс)</td>
                <td class="v"><?php echo getcwd() . '\app\include\Core.php' ?></td>
            </tr>
            <tr>
                <td class="e">Версия веб-сервера (в нашем случае это... ну ты понял/поняла)</td>
                <td class="v"><?php system('httpd -v'); ?></td>
            </tr>
            <tr>
                <td class="e">Версия ядра ЛОСЯндекса (А вот оно меняется каждый час-два, когда как)</td>
                <td class="v"><?php echo date ("Y-m-d H:i:s ", filemtime($core)), ' по UTC'; ?></td>
            </tr>
        </table>
        <table>
            <tr class="v">
                <td>
                    <a href="http://php.net"><img border="0" src="elephpant-running-78x48.gif" alt="Zend logo" /></a>
                    ЛОСЯндекс создан с использованием технологий PHP, пожалуй, лучшего скриптового языка для твоего сайта :)
                    <br>
                    Если ты хочешь скачать старые версии, то тебе <a href="http://php.net/releases/">сюда!</a>
                    <br>
                    <a href="http://php.net/downloads">Скачай PHP здесь!</a>
                </td>
            </tr>
        </table>
   <!--
        <hr />     
        <h1>Configuration</h1>
        <h2><a name="module_apache2handler">apache2handler</a></h2>
        <table>
            <tr>
                <td class="e">Apache Version </td>
                <td class="v">Apache </td>
            </tr>
            <tr>
                <td class="e">Apache API Version </td>
                <td class="v">20120211 </td>
            </tr>
            <tr>
                <td class="e">Server Administrator </td>
                <td class="v">sosic.heh@ya.ru </td>
            </tr>
            <tr>
                <td class="e">Hostname:Port </td>
                <td class="v">los.kroshmorkovkin.ru:0 </td>
            </tr>
            <tr>
                <td class="e">User/Group </td>
                <td class="v">www-data(33)/33 </td>
            </tr>
            <tr>
                <td class="e">Max Requests </td>
                <td class="v">Per Child: 0 - Keep Alive: on - Max Per Connection: 100 </td>
            </tr>
            <tr>
                <td class="e">Timeouts </td>
                <td class="v">Connection: 300 - Keep-Alive: 5 </td>
            </tr>
            <tr>
                <td class="e">Virtual Server </td>
                <td class="v">Yes </td>
            </tr>
            <tr>
                <td class="e">Server Root </td>
                <td class="v">/etc/apache2 </td>
            </tr>
            <tr>
                <td class="e">Loaded Modules </td>
                <td class="v">core mod_so mod_watchdog http_core mod_log_config mod_logio mod_version mod_unixd mod_access_compat mod_actions mod_alias mod_auth_basic mod_authn_core mod_authn_file mod_authz_core mod_authz_host mod_authz_user mod_autoindex mod_cgi mod_cgid mod_dav mod_dav_fs mod_deflate mod_dir mod_env mod_fcgid mod_filter mod_info mod_lua mod_mime mod_mime_magic mpm_itk prefork mod_negotiation mod_php5 mod_proxy mod_reqtimeout mod_rewrite mod_setenvif mod_socache_shmcb mod_ssl mod_status mod_userdir mod_vhost_alias </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">engine</td>
                <td class="v">1</td>
                <td class="v">1</td>
            </tr>
            <tr>
                <td class="e">last_modified</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">xbithack</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
        </table>
        <h2>Apache Environment</h2>
        <table>
            <tr class="h">
                <th>Variable</th>
                <th>Value</th>
            </tr>
            <tr>
                <td class="e">HTTPS </td>
                <td class="v">on </td>
            </tr>
            <tr>
                <td class="e">SSL_TLS_SNI </td>
                <td class="v">los.kroshmorkovkin.ru </td>
            </tr>
            <tr>
                <td class="e">HTTP_HOST </td>
                <td class="v">los.kroshmorkovkin.ru </td>
            </tr>
            <tr>
                <td class="e">HTTP_CONNECTION </td>
                <td class="v">keep-alive </td>
            </tr>
            <tr>
                <td class="e">HTTP_DNT </td>
                <td class="v">1 </td>
            </tr>
            <tr>
                <td class="e">HTTP_UPGRADE_INSECURE_REQUESTS </td>
                <td class="v">1 </td>
            </tr>
            <tr>
                <td class="e">HTTP_USER_AGENT </td>
                <td class="v">Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36 </td>
            </tr>
            <tr>
                <td class="e">HTTP_ACCEPT </td>
                <td class="v">text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9 </td>
            </tr>
            <tr>
                <td class="e">HTTP_SEC_FETCH_SITE </td>
                <td class="v">none </td>
            </tr>
            <tr>
                <td class="e">HTTP_SEC_FETCH_MODE </td>
                <td class="v">navigate </td>
            </tr>
            <tr>
                <td class="e">HTTP_SEC_FETCH_USER </td>
                <td class="v">?1 </td>
            </tr>
            <tr>
                <td class="e">HTTP_SEC_FETCH_DEST </td>
                <td class="v">document </td>
            </tr>
            <tr>
                <td class="e">HTTP_ACCEPT_ENCODING </td>
                <td class="v">gzip, deflate, br </td>
            </tr>
            <tr>
                <td class="e">HTTP_ACCEPT_LANGUAGE </td>
                <td class="v">ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7 </td>
            </tr>
            <tr>
                <td class="e">PATH </td>
                <td class="v">/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin </td>
            </tr>
            <tr>
                <td class="e">SERVER_SIGNATURE </td>
                <td class="v">&lt;address&gt;Apache Server at &lt;a href=&quot;mailto:sosic.heh@ya.ru&quot;&gt;los.kroshmorkovkin.ru&lt;/a&gt; Port 443&lt;/address&gt;
                </td>
            </tr>
            <tr>
                <td class="e">SERVER_SOFTWARE </td>
                <td class="v">Apache </td>
            </tr>
            <tr>
                <td class="e">SERVER_NAME </td>
                <td class="v">los.kroshmorkovkin.ru </td>
            </tr>
            <tr>
                <td class="e">SERVER_ADDR </td>
                <td class="v">185.252.147.115 </td>
            </tr>
            <tr>
                <td class="e">SERVER_PORT </td>
                <td class="v">443 </td>
            </tr>
            <tr>
                <td class="e">REMOTE_ADDR </td>
                <td class="v">85.113.213.176 </td>
            </tr>
            <tr>
                <td class="e">DOCUMENT_ROOT </td>
                <td class="v">/var/www/kroshmorkovkin/losyandex/ </td>
            </tr>
            <tr>
                <td class="e">REQUEST_SCHEME </td>
                <td class="v">https </td>
            </tr>
            <tr>
                <td class="e">CONTEXT_PREFIX </td>
                <td class="v"><i>no value</i> </td>
            </tr>
            <tr>
                <td class="e">CONTEXT_DOCUMENT_ROOT </td>
                <td class="v">/var/www/kroshmorkovkin/losyandex/ </td>
            </tr>
            <tr>
                <td class="e">SERVER_ADMIN </td>
                <td class="v">sosic.heh@ya.ru </td>
            </tr>
            <tr>
                <td class="e">SCRIPT_FILENAME </td>
                <td class="v">/var/www/kroshmorkovkin/losyandex/infophp.php </td>
            </tr>
            <tr>
                <td class="e">REMOTE_PORT </td>
                <td class="v">6796 </td>
            </tr>
            <tr>
                <td class="e">GATEWAY_INTERFACE </td>
                <td class="v">CGI/1.1 </td>
            </tr>
            <tr>
                <td class="e">SERVER_PROTOCOL </td>
                <td class="v">HTTP/1.1 </td>
            </tr>
            <tr>
                <td class="e">REQUEST_METHOD </td>
                <td class="v">GET </td>
            </tr>
            <tr>
                <td class="e">QUERY_STRING </td>
                <td class="v"><i>no value</i> </td>
            </tr>
            <tr>
                <td class="e">REQUEST_URI </td>
                <td class="v">/infophp.php </td>
            </tr>
            <tr>
                <td class="e">SCRIPT_NAME </td>
                <td class="v">/infophp.php </td>
            </tr>
        </table>
        <h2>HTTP Headers Information</h2>
        <table>
            <tr class="h">
                <th colspan="2">HTTP Request Headers</th>
            </tr>
            <tr>
                <td class="e">HTTP Request </td>
                <td class="v">GET /infophp.php HTTP/1.1 </td>
            </tr>
            <tr>
                <td class="e">Host </td>
                <td class="v">los.kroshmorkovkin.ru </td>
            </tr>
            <tr>
                <td class="e">Connection </td>
                <td class="v">keep-alive </td>
            </tr>
            <tr>
                <td class="e">DNT </td>
                <td class="v">1 </td>
            </tr>
            <tr>
                <td class="e">Upgrade-Insecure-Requests </td>
                <td class="v">1 </td>
            </tr>
            <tr>
                <td class="e">User-Agent </td>
                <td class="v">Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36 </td>
            </tr>
            <tr>
                <td class="e">Accept </td>
                <td class="v">text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9 </td>
            </tr>
            <tr>
                <td class="e">Sec-Fetch-Site </td>
                <td class="v">none </td>
            </tr>
            <tr>
                <td class="e">Sec-Fetch-Mode </td>
                <td class="v">navigate </td>
            </tr>
            <tr>
                <td class="e">Sec-Fetch-User </td>
                <td class="v">?1 </td>
            </tr>
            <tr>
                <td class="e">Sec-Fetch-Dest </td>
                <td class="v">document </td>
            </tr>
            <tr>
                <td class="e">Accept-Encoding </td>
                <td class="v">gzip, deflate, br </td>
            </tr>
            <tr>
                <td class="e">Accept-Language </td>
                <td class="v">ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7 </td>
            </tr>
            <tr class="h">
                <th colspan="2">HTTP Response Headers</th>
            </tr>
            <tr>
                <td class="e">X-Powered-By </td>
                <td class="v">PHP/5.6.40-57+ubuntu18.04.1+deb.sury.org+1 </td>
            </tr>
        </table>
        <h2><a name="module_bcmath">bcmath</a></h2>
        <table>
            <tr>
                <td class="e">BCMath support </td>
                <td class="v">enabled </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">bcmath.scale</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
        </table>
        <h2><a name="module_bz2">bz2</a></h2>
        <table>
            <tr>
                <td class="e">BZip2 Support </td>
                <td class="v">Enabled </td>
            </tr>
            <tr>
                <td class="e">Stream Wrapper support </td>
                <td class="v">compress.bzip2:// </td>
            </tr>
            <tr>
                <td class="e">Stream Filter support </td>
                <td class="v">bzip2.decompress, bzip2.compress </td>
            </tr>
            <tr>
                <td class="e">BZip2 Version </td>
                <td class="v">1.0.6, 6-Sept-2010 </td>
            </tr>
        </table>
        <h2><a name="module_calendar">calendar</a></h2>
        <table>
            <tr>
                <td class="e">Calendar support </td>
                <td class="v">enabled </td>
            </tr>
        </table>
        <h2><a name="module_Core">Core</a></h2>
        <table>
            <tr>
                <td class="e">PHP Version </td>
                <td class="v">5.6.40-57+ubuntu18.04.1+deb.sury.org+1 </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">allow_url_fopen</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">allow_url_include</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">always_populate_raw_post_data</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">arg_separator.input</td>
                <td class="v">&amp;</td>
                <td class="v">&amp;</td>
            </tr>
            <tr>
                <td class="e">arg_separator.output</td>
                <td class="v">&amp;</td>
                <td class="v">&amp;</td>
            </tr>
            <tr>
                <td class="e">asp_tags</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">auto_append_file</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">auto_globals_jit</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">auto_prepend_file</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">browscap</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">default_charset</td>
                <td class="v">UTF-8</td>
                <td class="v">UTF-8</td>
            </tr>
            <tr>
                <td class="e">default_mimetype</td>
                <td class="v">text/html</td>
                <td class="v">text/html</td>
            </tr>
            <tr>
                <td class="e">disable_classes</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">disable_functions</td>
                <td class="v">pcntl_alarm,pcntl_fork,pcntl_waitpid,pcntl_wait,pcntl_wifexited,pcntl_wifstopped,pcntl_wifsignaled,pcntl_wexitstatus,pcntl_wtermsig,pcntl_wstopsig,pcntl_signal,pcntl_signal_dispatch,pcntl_get_last_error,pcntl_strerror,pcntl_sigprocmask,pcntl_sigwaitinfo,pcntl_sigtimedwait,pcntl_exec,pcntl_getpriority,pcntl_setpriority,</td>
                <td class="v">pcntl_alarm,pcntl_fork,pcntl_waitpid,pcntl_wait,pcntl_wifexited,pcntl_wifstopped,pcntl_wifsignaled,pcntl_wexitstatus,pcntl_wtermsig,pcntl_wstopsig,pcntl_signal,pcntl_signal_dispatch,pcntl_get_last_error,pcntl_strerror,pcntl_sigprocmask,pcntl_sigwaitinfo,pcntl_sigtimedwait,pcntl_exec,pcntl_getpriority,pcntl_setpriority,</td>
            </tr>
            <tr>
                <td class="e">display_errors</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">display_startup_errors</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">doc_root</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">docref_ext</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">docref_root</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">enable_dl</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">enable_post_data_reading</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">error_append_string</td>
                <td class="v">&lt;/span&gt;</td>
                <td class="v">&lt;/span&gt;</td>
            </tr>
            <tr>
                <td class="e">error_log</td>
                <td class="v">php_errors.log</td>
                <td class="v">php_errors.log</td>
            </tr>
            <tr>
                <td class="e">error_prepend_string</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">error_reporting</td>
                <td class="v">22527</td>
                <td class="v">22527</td>
            </tr>
            <tr>
                <td class="e">exit_on_timeout</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">expose_php</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">extension_dir</td>
                <td class="v">/usr/lib/php/20131226</td>
                <td class="v">/usr/lib/php/20131226</td>
            </tr>
            <tr>
                <td class="e">file_uploads</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">highlight.comment</td>
                <td class="v">
                    <font style="color: #FF8000">#FF8000</font>
                </td>
                <td class="v">
                    <font style="color: #FF8000">#FF8000</font>
                </td>
            </tr>
            <tr>
                <td class="e">highlight.default</td>
                <td class="v">
                    <font style="color: #0000BB">#0000BB</font>
                </td>
                <td class="v">
                    <font style="color: #0000BB">#0000BB</font>
                </td>
            </tr>
            <tr>
                <td class="e">highlight.html</td>
                <td class="v">
                    <font style="color: #000000">#000000</font>
                </td>
                <td class="v">
                    <font style="color: #000000">#000000</font>
                </td>
            </tr>
            <tr>
                <td class="e">highlight.keyword</td>
                <td class="v">
                    <font style="color: #007700">#007700</font>
                </td>
                <td class="v">
                    <font style="color: #007700">#007700</font>
                </td>
            </tr>
            <tr>
                <td class="e">highlight.string</td>
                <td class="v">
                    <font style="color: #DD0000">#DD0000</font>
                </td>
                <td class="v">
                    <font style="color: #DD0000">#DD0000</font>
                </td>
            </tr>
            <tr>
                <td class="e">html_errors</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">ignore_repeated_errors</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">ignore_repeated_source</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">ignore_user_abort</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">implicit_flush</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">include_path</td>
                <td class="v">.:/usr/share/php</td>
                <td class="v">.:/usr/share/php</td>
            </tr>
            <tr>
                <td class="e">input_encoding</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">internal_encoding</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">log_errors</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">log_errors_max_len</td>
                <td class="v">1024</td>
                <td class="v">1024</td>
            </tr>
            <tr>
                <td class="e">mail.add_x_header</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">mail.force_extra_parameters</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">mail.log</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">max_execution_time</td>
                <td class="v">30</td>
                <td class="v">30</td>
            </tr>
            <tr>
                <td class="e">max_file_uploads</td>
                <td class="v">35</td>
                <td class="v">35</td>
            </tr>
            <tr>
                <td class="e">max_input_nesting_level</td>
                <td class="v">64</td>
                <td class="v">64</td>
            </tr>
            <tr>
                <td class="e">max_input_time</td>
                <td class="v">60</td>
                <td class="v">60</td>
            </tr>
            <tr>
                <td class="e">max_input_vars</td>
                <td class="v">1000</td>
                <td class="v">1000</td>
            </tr>
            <tr>
                <td class="e">memory_limit</td>
                <td class="v">128M</td>
                <td class="v">128M</td>
            </tr>
            <tr>
                <td class="e">open_basedir</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">output_buffering</td>
                <td class="v">14096</td>
                <td class="v">14096</td>
            </tr>
            <tr>
                <td class="e">output_encoding</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">output_handler</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">post_max_size</td>
                <td class="v">32M</td>
                <td class="v">32M</td>
            </tr>
            <tr>
                <td class="e">precision</td>
                <td class="v">14</td>
                <td class="v">14</td>
            </tr>
            <tr>
                <td class="e">realpath_cache_size</td>
                <td class="v">16K</td>
                <td class="v">16K</td>
            </tr>
            <tr>
                <td class="e">realpath_cache_ttl</td>
                <td class="v">120</td>
                <td class="v">120</td>
            </tr>
            <tr>
                <td class="e">register_argc_argv</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">report_memleaks</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">report_zend_debug</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">request_order</td>
                <td class="v">GP</td>
                <td class="v">GP</td>
            </tr>
            <tr>
                <td class="e">sendmail_from</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">sendmail_path</td>
                <td class="v">/usr/sbin/sendmail&nbsp;-t&nbsp;-i&nbsp;</td>
                <td class="v">/usr/sbin/sendmail&nbsp;-t&nbsp;-i&nbsp;</td>
            </tr>
            <tr>
                <td class="e">serialize_precision</td>
                <td class="v">17</td>
                <td class="v">17</td>
            </tr>
            <tr>
                <td class="e">short_open_tag</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">SMTP</td>
                <td class="v">localhost</td>
                <td class="v">localhost</td>
            </tr>
            <tr>
                <td class="e">smtp_port</td>
                <td class="v">25</td>
                <td class="v">25</td>
            </tr>
            <tr>
                <td class="e">sql.safe_mode</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">sys_temp_dir</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">track_errors</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">unserialize_callback_func</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">upload_max_filesize</td>
                <td class="v">512M</td>
                <td class="v">512M</td>
            </tr>
            <tr>
                <td class="e">upload_tmp_dir</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">user_dir</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">user_ini.cache_ttl</td>
                <td class="v">300</td>
                <td class="v">300</td>
            </tr>
            <tr>
                <td class="e">user_ini.filename</td>
                <td class="v">.user.ini</td>
                <td class="v">.user.ini</td>
            </tr>
            <tr>
                <td class="e">variables_order</td>
                <td class="v">GPCS</td>
                <td class="v">GPCS</td>
            </tr>
            <tr>
                <td class="e">xmlrpc_error_number</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">xmlrpc_errors</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">zend.detect_unicode</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">zend.enable_gc</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">zend.multibyte</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">zend.script_encoding</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
        </table>
        <h2><a name="module_ctype">ctype</a></h2>
        <table>
            <tr>
                <td class="e">ctype functions </td>
                <td class="v">enabled </td>
            </tr>
        </table>
        <h2><a name="module_curl">curl</a></h2>
        <table>
            <tr>
                <td class="e">cURL support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">cURL Information </td>
                <td class="v">7.58.0 </td>
            </tr>
            <tr>
                <td class="e">Age </td>
                <td class="v">4 </td>
            </tr>
            <tr>
                <td class="e">Features </td>
            </tr>
            <tr>
                <td class="e">AsynchDNS </td>
                <td class="v">Yes </td>
            </tr>
            <tr>
                <td class="e">CharConv </td>
                <td class="v">No </td>
            </tr>
            <tr>
                <td class="e">Debug </td>
                <td class="v">No </td>
            </tr>
            <tr>
                <td class="e">GSS-Negotiate </td>
                <td class="v">No </td>
            </tr>
            <tr>
                <td class="e">IDN </td>
                <td class="v">Yes </td>
            </tr>
            <tr>
                <td class="e">IPv6 </td>
                <td class="v">Yes </td>
            </tr>
            <tr>
                <td class="e">krb4 </td>
                <td class="v">No </td>
            </tr>
            <tr>
                <td class="e">Largefile </td>
                <td class="v">Yes </td>
            </tr>
            <tr>
                <td class="e">libz </td>
                <td class="v">Yes </td>
            </tr>
            <tr>
                <td class="e">NTLM </td>
                <td class="v">Yes </td>
            </tr>
            <tr>
                <td class="e">NTLMWB </td>
                <td class="v">Yes </td>
            </tr>
            <tr>
                <td class="e">SPNEGO </td>
                <td class="v">Yes </td>
            </tr>
            <tr>
                <td class="e">SSL </td>
                <td class="v">Yes </td>
            </tr>
            <tr>
                <td class="e">SSPI </td>
                <td class="v">No </td>
            </tr>
            <tr>
                <td class="e">TLS-SRP </td>
                <td class="v">Yes </td>
            </tr>
            <tr>
                <td class="e">Protocols </td>
                <td class="v">dict, file, ftp, ftps, gopher, http, https, imap, imaps, ldap, ldaps, pop3, pop3s, rtmp, rtsp, smb, smbs, smtp, smtps, telnet, tftp </td>
            </tr>
            <tr>
                <td class="e">Host </td>
                <td class="v">x86_64-pc-linux-gnu </td>
            </tr>
            <tr>
                <td class="e">SSL Version </td>
                <td class="v">OpenSSL/1.1.1 </td>
            </tr>
            <tr>
                <td class="e">ZLib Version </td>
                <td class="v">1.2.11 </td>
            </tr>
        </table>
        <h2><a name="module_date">date</a></h2>
        <table>
            <tr>
                <td class="e">date/time support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">&quot;Olson&quot; Timezone Database Version </td>
                <td class="v">0.system </td>
            </tr>
            <tr>
                <td class="e">Timezone Database </td>
                <td class="v">internal </td>
            </tr>
            <tr>
                <td class="e">Default timezone </td>
                <td class="v">Europe/Minsk </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">date.default_latitude</td>
                <td class="v">31.7667</td>
                <td class="v">31.7667</td>
            </tr>
            <tr>
                <td class="e">date.default_longitude</td>
                <td class="v">35.2333</td>
                <td class="v">35.2333</td>
            </tr>
            <tr>
                <td class="e">date.sunrise_zenith</td>
                <td class="v">90.583333</td>
                <td class="v">90.583333</td>
            </tr>
            <tr>
                <td class="e">date.sunset_zenith</td>
                <td class="v">90.583333</td>
                <td class="v">90.583333</td>
            </tr>
            <tr>
                <td class="e">date.timezone</td>
                <td class="v">Europe/Minsk</td>
                <td class="v">Europe/Minsk</td>
            </tr>
        </table>
        <h2><a name="module_dom">dom</a></h2>
        <table>
            <tr>
                <td class="e">DOM/XML </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">DOM/XML API Version </td>
                <td class="v">20031129 </td>
            </tr>
            <tr>
                <td class="e">libxml Version </td>
                <td class="v">2.9.12 </td>
            </tr>
            <tr>
                <td class="e">HTML Support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">XPath Support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">XPointer Support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">Schema Support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">RelaxNG Support </td>
                <td class="v">enabled </td>
            </tr>
        </table>
        <h2><a name="module_ereg">ereg</a></h2>
        <table>
            <tr>
                <td class="e">Regex Library </td>
                <td class="v">Bundled library enabled </td>
            </tr>
        </table>
        <h2><a name="module_exif">exif</a></h2>
        <table>
            <tr>
                <td class="e">EXIF Support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">EXIF Version </td>
                <td class="v">1.4 $Id: cad29b729548e4206f0697710cc9e177f26fdff3 $ </td>
            </tr>
            <tr>
                <td class="e">Supported EXIF Version </td>
                <td class="v">0220 </td>
            </tr>
            <tr>
                <td class="e">Supported filetypes </td>
                <td class="v">JPEG,TIFF </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">exif.decode_jis_intel</td>
                <td class="v">JIS</td>
                <td class="v">JIS</td>
            </tr>
            <tr>
                <td class="e">exif.decode_jis_motorola</td>
                <td class="v">JIS</td>
                <td class="v">JIS</td>
            </tr>
            <tr>
                <td class="e">exif.decode_unicode_intel</td>
                <td class="v">UCS-2LE</td>
                <td class="v">UCS-2LE</td>
            </tr>
            <tr>
                <td class="e">exif.decode_unicode_motorola</td>
                <td class="v">UCS-2BE</td>
                <td class="v">UCS-2BE</td>
            </tr>
            <tr>
                <td class="e">exif.encode_jis</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">exif.encode_unicode</td>
                <td class="v">ISO-8859-15</td>
                <td class="v">ISO-8859-15</td>
            </tr>
        </table>
        <h2><a name="module_fileinfo">fileinfo</a></h2>
        <table>
            <tr>
                <td class="e">fileinfo support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">version </td>
                <td class="v">1.0.5 </td>
            </tr>
            <tr>
                <td class="e">libmagic </td>
                <td class="v">517 </td>
            </tr>
        </table>
        <h2><a name="module_filter">filter</a></h2>
        <table>
            <tr>
                <td class="e">Input Validation and Filtering </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">Revision </td>
                <td class="v">$Id: 5b79667bd9a68977a9b4f7505223a8e216e04908 $ </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">filter.default</td>
                <td class="v">unsafe_raw</td>
                <td class="v">unsafe_raw</td>
            </tr>
            <tr>
                <td class="e">filter.default_flags</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
        </table>
        <h2><a name="module_ftp">ftp</a></h2>
        <table>
            <tr>
                <td class="e">FTP support </td>
                <td class="v">enabled </td>
            </tr>
        </table>
        <h2><a name="module_gd">gd</a></h2>
        <table>
            <tr>
                <td class="e">GD Support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">GD headers Version </td>
                <td class="v">2.3.0 </td>
            </tr>
            <tr>
                <td class="e">GD library Version </td>
                <td class="v">2.3.0 </td>
            </tr>
            <tr>
                <td class="e">FreeType Support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">FreeType Linkage </td>
                <td class="v">with freetype </td>
            </tr>
            <tr>
                <td class="e">FreeType Version </td>
                <td class="v">2.8.1 </td>
            </tr>
            <tr>
                <td class="e">GIF Read Support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">GIF Create Support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">JPEG Support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">libJPEG Version </td>
                <td class="v">8 </td>
            </tr>
            <tr>
                <td class="e">PNG Support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">libPNG Version </td>
                <td class="v">1.6.34 </td>
            </tr>
            <tr>
                <td class="e">WBMP Support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">XPM Support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">libXpm Version </td>
                <td class="v">30411 </td>
            </tr>
            <tr>
                <td class="e">XBM Support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">WebP Support </td>
                <td class="v">enabled </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">gd.jpeg_ignore_warning</td>
                <td class="v">1</td>
                <td class="v">1</td>
            </tr>
        </table>
        <h2><a name="module_geoip">geoip</a></h2>
        <table>
            <tr class="h">
                <th>geoip support</th>
                <th>enabled</th>
            </tr>
            <tr>
                <td class="e">geoip extension version </td>
                <td class="v">1.1.1 </td>
            </tr>
            <tr>
                <td class="e">geoip library version </td>
                <td class="v">1006012 </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">geoip.custom_directory</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
        </table>
        <h2><a name="module_gettext">gettext</a></h2>
        <table>
            <tr>
                <td class="e">GetText Support </td>
                <td class="v">enabled </td>
            </tr>
        </table>
        <h2><a name="module_hash">hash</a></h2>
        <table>
            <tr>
                <td class="e">hash support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">Hashing Engines </td>
                <td class="v">md2 md4 md5 sha1 sha224 sha256 sha384 sha512 ripemd128 ripemd160 ripemd256 ripemd320 whirlpool tiger128,3 tiger160,3 tiger192,3 tiger128,4 tiger160,4 tiger192,4 snefru snefru256 gost gost-crypto adler32 crc32 crc32b fnv132 fnv1a32 fnv164 fnv1a64 joaat haval128,3 haval160,3 haval192,3 haval224,3 haval256,3 haval128,4 haval160,4 haval192,4 haval224,4 haval256,4 haval128,5 haval160,5 haval192,5 haval224,5 haval256,5 </td>
            </tr>
        </table>
        <h2><a name="module_iconv">iconv</a></h2>
        <table>
            <tr>
                <td class="e">iconv support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">iconv implementation </td>
                <td class="v">glibc </td>
            </tr>
            <tr>
                <td class="e">iconv library version </td>
                <td class="v">2.27 </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">iconv.input_encoding</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">iconv.internal_encoding</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">iconv.output_encoding</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
        </table>
        <h2><a name="module_igbinary">igbinary</a></h2>
        <table>
            <tr>
                <td class="e">igbinary support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">igbinary version </td>
                <td class="v">2.0.8 </td>
            </tr>
            <tr>
                <td class="e">igbinary APC serializer ABI </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">igbinary session support </td>
                <td class="v">yes </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">igbinary.compact_strings</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
        </table>
        <h2><a name="module_json">json</a></h2>
        <table>
            <tr>
                <td class="e">json support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">json version </td>
                <td class="v">1.2.1 </td>
            </tr>
        </table>
        <h2><a name="module_libxml">libxml</a></h2>
        <table>
            <tr>
                <td class="e">libXML support </td>
                <td class="v">active </td>
            </tr>
            <tr>
                <td class="e">libXML Compiled Version </td>
                <td class="v">2.9.12 </td>
            </tr>
            <tr>
                <td class="e">libXML Loaded Version </td>
                <td class="v">20912 </td>
            </tr>
            <tr>
                <td class="e">libXML streams </td>
                <td class="v">enabled </td>
            </tr>
        </table>
        <h2><a name="module_mhash">mhash</a></h2>
        <table>
            <tr>
                <td class="e">MHASH support </td>
                <td class="v">Enabled </td>
            </tr>
            <tr>
                <td class="e">MHASH API Version </td>
                <td class="v">Emulated Support </td>
            </tr>
        </table>
        <h2><a name="module_mssql">mssql</a></h2>
        <table>
            <tr class="h">
                <th>MSSQL Support</th>
                <th>enabled</th>
            </tr>
            <tr>
                <td class="e">Active Persistent Links </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">Active Links </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">Library version </td>
                <td class="v">FreeTDS </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">mssql.allow_persistent</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">mssql.batchsize</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">mssql.charset</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">mssql.compatability_mode</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">mssql.compatibility_mode</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">mssql.connect_timeout</td>
                <td class="v">5</td>
                <td class="v">5</td>
            </tr>
            <tr>
                <td class="e">mssql.datetimeconvert</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">mssql.max_links</td>
                <td class="v">Unlimited</td>
                <td class="v">Unlimited</td>
            </tr>
            <tr>
                <td class="e">mssql.max_persistent</td>
                <td class="v">Unlimited</td>
                <td class="v">Unlimited</td>
            </tr>
            <tr>
                <td class="e">mssql.max_procs</td>
                <td class="v">Unlimited</td>
                <td class="v">Unlimited</td>
            </tr>
            <tr>
                <td class="e">mssql.min_error_severity</td>
                <td class="v">10</td>
                <td class="v">10</td>
            </tr>
            <tr>
                <td class="e">mssql.min_message_severity</td>
                <td class="v">10</td>
                <td class="v">10</td>
            </tr>
            <tr>
                <td class="e">mssql.secure_connection</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">mssql.textlimit</td>
                <td class="v">Server default</td>
                <td class="v">Server default</td>
            </tr>
            <tr>
                <td class="e">mssql.textsize</td>
                <td class="v">Server default</td>
                <td class="v">Server default</td>
            </tr>
            <tr>
                <td class="e">mssql.timeout</td>
                <td class="v">60</td>
                <td class="v">60</td>
            </tr>
        </table>
        <h2><a name="module_mysql">mysql</a></h2>
        <table>
            <tr class="h">
                <th>MySQL Support</th>
                <th>enabled</th>
            </tr>
            <tr>
                <td class="e">Active Persistent Links </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">Active Links </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">Client API version </td>
                <td class="v">mysqlnd 5.0.11-dev - 20120503 - $Id: 76b08b24596e12d4553bd41fc93cccd5bac2fe7a $ </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">mysql.allow_local_infile</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">mysql.allow_persistent</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">mysql.connect_timeout</td>
                <td class="v">60</td>
                <td class="v">60</td>
            </tr>
            <tr>
                <td class="e">mysql.default_host</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">mysql.default_password</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">mysql.default_port</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">mysql.default_socket</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">mysql.default_user</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">mysql.max_links</td>
                <td class="v">Unlimited</td>
                <td class="v">Unlimited</td>
            </tr>
            <tr>
                <td class="e">mysql.max_persistent</td>
                <td class="v">Unlimited</td>
                <td class="v">Unlimited</td>
            </tr>
            <tr>
                <td class="e">mysql.trace_mode</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
        </table>
        <h2><a name="module_mysqli">mysqli</a></h2>
        <table>
            <tr class="h">
                <th>MysqlI Support</th>
                <th>enabled</th>
            </tr>
            <tr>
                <td class="e">Client API library version </td>
                <td class="v">mysqlnd 5.0.11-dev - 20120503 - $Id: 76b08b24596e12d4553bd41fc93cccd5bac2fe7a $ </td>
            </tr>
            <tr>
                <td class="e">Active Persistent Links </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">Inactive Persistent Links </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">Active Links </td>
                <td class="v">0 </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">mysqli.allow_local_infile</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">mysqli.allow_persistent</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">mysqli.default_host</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">mysqli.default_port</td>
                <td class="v">3306</td>
                <td class="v">3306</td>
            </tr>
            <tr>
                <td class="e">mysqli.default_pw</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">mysqli.default_socket</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">mysqli.default_user</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">mysqli.max_links</td>
                <td class="v">Unlimited</td>
                <td class="v">Unlimited</td>
            </tr>
            <tr>
                <td class="e">mysqli.max_persistent</td>
                <td class="v">Unlimited</td>
                <td class="v">Unlimited</td>
            </tr>
            <tr>
                <td class="e">mysqli.reconnect</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">mysqli.rollback_on_cached_plink</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
        </table>
        <h2><a name="module_mysqlnd">mysqlnd</a></h2>
        <table>
            <tr class="h">
                <th>mysqlnd</th>
                <th>enabled</th>
            </tr>
            <tr>
                <td class="e">Version </td>
                <td class="v">mysqlnd 5.0.11-dev - 20120503 - $Id: 76b08b24596e12d4553bd41fc93cccd5bac2fe7a $ </td>
            </tr>
            <tr>
                <td class="e">Compression </td>
                <td class="v">supported </td>
            </tr>
            <tr>
                <td class="e">core SSL </td>
                <td class="v">supported </td>
            </tr>
            <tr>
                <td class="e">extended SSL </td>
                <td class="v">supported </td>
            </tr>
            <tr>
                <td class="e">Command buffer size </td>
                <td class="v">4096 </td>
            </tr>
            <tr>
                <td class="e">Read buffer size </td>
                <td class="v">32768 </td>
            </tr>
            <tr>
                <td class="e">Read timeout </td>
                <td class="v">31536000 </td>
            </tr>
            <tr>
                <td class="e">Collecting statistics </td>
                <td class="v">Yes </td>
            </tr>
            <tr>
                <td class="e">Collecting memory statistics </td>
                <td class="v">Yes </td>
            </tr>
            <tr>
                <td class="e">Tracing </td>
                <td class="v">n/a </td>
            </tr>
            <tr>
                <td class="e">Loaded plugins </td>
                <td class="v">mysqlnd,debug_trace,auth_plugin_mysql_native_password,auth_plugin_mysql_clear_password,auth_plugin_sha256_password </td>
            </tr>
            <tr>
                <td class="e">API Extensions </td>
                <td class="v">mysql,mysqli,pdo_mysql </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>mysqlnd statistics</th>
                <th> </th>
            </tr>
            <tr>
                <td class="e">bytes_sent </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">bytes_received </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">packets_sent </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">packets_received </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">protocol_overhead_in </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">protocol_overhead_out </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">bytes_received_ok_packet </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">bytes_received_eof_packet </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">bytes_received_rset_header_packet </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">bytes_received_rset_field_meta_packet </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">bytes_received_rset_row_packet </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">bytes_received_prepare_response_packet </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">bytes_received_change_user_packet </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">packets_sent_command </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">packets_received_ok </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">packets_received_eof </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">packets_received_rset_header </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">packets_received_rset_field_meta </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">packets_received_rset_row </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">packets_received_prepare_response </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">packets_received_change_user </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">result_set_queries </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">non_result_set_queries </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">no_index_used </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">bad_index_used </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">slow_queries </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">buffered_sets </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">unbuffered_sets </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">ps_buffered_sets </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">ps_unbuffered_sets </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">flushed_normal_sets </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">flushed_ps_sets </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">ps_prepared_never_executed </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">ps_prepared_once_executed </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">rows_fetched_from_server_normal </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">rows_fetched_from_server_ps </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">rows_buffered_from_client_normal </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">rows_buffered_from_client_ps </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">rows_fetched_from_client_normal_buffered </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">rows_fetched_from_client_normal_unbuffered </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">rows_fetched_from_client_ps_buffered </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">rows_fetched_from_client_ps_unbuffered </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">rows_fetched_from_client_ps_cursor </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">rows_affected_normal </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">rows_affected_ps </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">rows_skipped_normal </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">rows_skipped_ps </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">copy_on_write_saved </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">copy_on_write_performed </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">command_buffer_too_small </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">connect_success </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">connect_failure </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">connection_reused </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">reconnect </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">pconnect_success </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">active_connections </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">active_persistent_connections </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">explicit_close </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">implicit_close </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">disconnect_close </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">in_middle_of_command_close </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">explicit_free_result </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">implicit_free_result </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">explicit_stmt_close </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">implicit_stmt_close </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">mem_emalloc_count </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">mem_emalloc_amount </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">mem_ecalloc_count </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">mem_ecalloc_amount </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">mem_erealloc_count </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">mem_erealloc_amount </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">mem_efree_count </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">mem_efree_amount </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">mem_malloc_count </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">mem_malloc_amount </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">mem_calloc_count </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">mem_calloc_amount </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">mem_realloc_count </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">mem_realloc_amount </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">mem_free_count </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">mem_free_amount </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">mem_estrndup_count </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">mem_strndup_count </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">mem_estndup_count </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">mem_strdup_count </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_text_fetched_null </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_text_fetched_bit </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_text_fetched_tinyint </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_text_fetched_short </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_text_fetched_int24 </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_text_fetched_int </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_text_fetched_bigint </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_text_fetched_decimal </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_text_fetched_float </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_text_fetched_double </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_text_fetched_date </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_text_fetched_year </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_text_fetched_time </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_text_fetched_datetime </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_text_fetched_timestamp </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_text_fetched_string </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_text_fetched_blob </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_text_fetched_enum </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_text_fetched_set </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_text_fetched_geometry </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_text_fetched_other </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_binary_fetched_null </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_binary_fetched_bit </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_binary_fetched_tinyint </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_binary_fetched_short </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_binary_fetched_int24 </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_binary_fetched_int </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_binary_fetched_bigint </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_binary_fetched_decimal </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_binary_fetched_float </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_binary_fetched_double </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_binary_fetched_date </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_binary_fetched_year </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_binary_fetched_time </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_binary_fetched_datetime </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_binary_fetched_timestamp </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_binary_fetched_string </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_binary_fetched_json </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_binary_fetched_blob </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_binary_fetched_enum </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_binary_fetched_set </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_binary_fetched_geometry </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">proto_binary_fetched_other </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">init_command_executed_count </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">init_command_failed_count </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_quit </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_init_db </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_query </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_field_list </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_create_db </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_drop_db </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_refresh </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_shutdown </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_statistics </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_process_info </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_connect </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_process_kill </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_debug </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_ping </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_time </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_delayed_insert </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_change_user </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_binlog_dump </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_table_dump </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_connect_out </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_register_slave </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_stmt_prepare </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_stmt_execute </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_stmt_send_long_data </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_stmt_close </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_stmt_reset </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_stmt_set_option </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_stmt_fetch </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">com_deamon </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">bytes_received_real_data_normal </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">bytes_received_real_data_ps </td>
                <td class="v">0 </td>
            </tr>
        </table>
        <h2><a name="module_OAuth">OAuth</a></h2>
        <table>
            <tr class="h">
                <th>OAuth support</th>
                <th>enabled</th>
            </tr>
            <tr>
                <td class="e">PLAINTEXT support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">RSA-SHA1 support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">HMAC-SHA1 support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">Request engine support </td>
                <td class="v">php_streams </td>
            </tr>
            <tr>
                <td class="e">source version </td>
                <td class="v">$Id: oauth.c 325799 2012-05-24 21:07:51Z jawed $ </td>
            </tr>
            <tr>
                <td class="e">version </td>
                <td class="v">1.2.3 </td>
            </tr>
        </table>
        <h2><a name="module_openssl">openssl</a></h2>
        <table>
            <tr>
                <td class="e">OpenSSL support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">OpenSSL Library Version </td>
                <td class="v">OpenSSL 1.1.1 11 Sep 2018 </td>
            </tr>
            <tr>
                <td class="e">OpenSSL Header Version </td>
                <td class="v">OpenSSL 1.1.1 11 Sep 2018 </td>
            </tr>
            <tr>
                <td class="e">Openssl default config </td>
                <td class="v">/usr/lib/ssl/openssl.cnf </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">openssl.cafile</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">openssl.capath</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
        </table>
        <h2><a name="module_pcre">pcre</a></h2>
        <table>
            <tr>
                <td class="e">PCRE (Perl Compatible Regular Expressions) Support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">PCRE Library Version </td>
                <td class="v">8.44 2020-02-12 </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">pcre.backtrack_limit</td>
                <td class="v">1000000</td>
                <td class="v">1000000</td>
            </tr>
            <tr>
                <td class="e">pcre.recursion_limit</td>
                <td class="v">100000</td>
                <td class="v">100000</td>
            </tr>
        </table>
        <h2><a name="module_PDO">PDO</a></h2>
        <table>
            <tr class="h">
                <th>PDO support</th>
                <th>enabled</th>
            </tr>
            <tr>
                <td class="e">PDO drivers </td>
                <td class="v">dblib, mysql, sqlite </td>
            </tr>
        </table>
        <h2><a name="module_pdo_dblib">pdo_dblib</a></h2>
        <table>
            <tr class="h">
                <th>PDO Driver for FreeTDS/Sybase DB-lib</th>
                <th>enabled</th>
            </tr>
            <tr>
                <td class="e">Flavour </td>
                <td class="v">freetds </td>
            </tr>
        </table>
        <h2><a name="module_pdo_mysql">pdo_mysql</a></h2>
        <table>
            <tr class="h">
                <th>PDO Driver for MySQL</th>
                <th>enabled</th>
            </tr>
            <tr>
                <td class="e">Client API version </td>
                <td class="v">mysqlnd 5.0.11-dev - 20120503 - $Id: 76b08b24596e12d4553bd41fc93cccd5bac2fe7a $ </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">pdo_mysql.default_socket</td>
                <td class="v">/var/run/mysqld/mysqld.sock</td>
                <td class="v">/var/run/mysqld/mysqld.sock</td>
            </tr>
        </table>
        <h2><a name="module_pdo_sqlite">pdo_sqlite</a></h2>
        <table>
            <tr class="h">
                <th>PDO Driver for SQLite 3.x</th>
                <th>enabled</th>
            </tr>
            <tr>
                <td class="e">SQLite Library </td>
                <td class="v">3.22.0 </td>
            </tr>
        </table>
        <h2><a name="module_Phar">Phar</a></h2>
        <table>
            <tr class="h">
                <th>Phar: PHP Archive support</th>
                <th>enabled</th>
            </tr>
            <tr>
                <td class="e">Phar EXT version </td>
                <td class="v">2.0.2 </td>
            </tr>
            <tr>
                <td class="e">Phar API version </td>
                <td class="v">1.1.1 </td>
            </tr>
            <tr>
                <td class="e">SVN revision </td>
                <td class="v">$Id: 6e5cec2462a6ded53d4379ea9a69487a60d5c43c $ </td>
            </tr>
            <tr>
                <td class="e">Phar-based phar archives </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">Tar-based phar archives </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">ZIP-based phar archives </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">gzip compression </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">bzip2 compression </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">Native OpenSSL support </td>
                <td class="v">enabled </td>
            </tr>
        </table>
        <table>
            <tr class="v">
                <td>
                    Phar based on pear/PHP_Archive, original concept by Davey Shafik.<br />Phar fully realized by Gregory Beaver and Marcus Boerger.<br />Portions of tar implementation Copyright (c) 2003-2009 Tim Kientzle.</td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">phar.cache_list</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">phar.readonly</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">phar.require_hash</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
        </table>
        <h2><a name="module_posix">posix</a></h2>
        <table>
            <tr>
                <td class="e">Revision </td>
                <td class="v">$Id: 5f4acc20904b1406142f2a0ede068db048c77e77 $ </td>
            </tr>
        </table>
        <h2><a name="module_pspell">pspell</a></h2>
        <table>
            <tr>
                <td class="e">PSpell Support </td>
                <td class="v">enabled </td>
            </tr>
        </table>
        <h2><a name="module_readline">readline</a></h2>
        <table>
            <tr class="h">
                <th>Readline Support</th>
                <th>enabled</th>
            </tr>
            <tr>
                <td class="e">Readline library </td>
                <td class="v">EditLine wrapper </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">cli.pager</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">cli.prompt</td>
                <td class="v">\b&nbsp;\&gt;&nbsp;</td>
                <td class="v">\b&nbsp;\&gt;&nbsp;</td>
            </tr>
        </table>
        <h2><a name="module_redis">redis</a></h2>
        <table>
            <tr class="h">
                <th>Redis Support</th>
                <th>enabled</th>
            </tr>
            <tr>
                <td class="e">Redis Version </td>
                <td class="v">4.3.0 </td>
            </tr>
            <tr>
                <td class="e">Available serializers </td>
                <td class="v">php, igbinary </td>
            </tr>
            <tr>
                <td class="e">Available compression </td>
                <td class="v">lzf </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">redis.arrays.algorithm</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">redis.arrays.auth</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">redis.arrays.autorehash</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">redis.arrays.connecttimeout</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">redis.arrays.consistent</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">redis.arrays.distributor</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">redis.arrays.functions</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">redis.arrays.hosts</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">redis.arrays.index</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">redis.arrays.lazyconnect</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">redis.arrays.names</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">redis.arrays.pconnect</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">redis.arrays.previous</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">redis.arrays.readtimeout</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">redis.arrays.retryinterval</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">redis.clusters.auth</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">redis.clusters.persistent</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">redis.clusters.read_timeout</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">redis.clusters.seeds</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">redis.clusters.timeout</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">redis.pconnect.connection_limit</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">redis.pconnect.pooling_enabled</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">redis.session.lock_expire</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">redis.session.lock_retries</td>
                <td class="v">10</td>
                <td class="v">10</td>
            </tr>
            <tr>
                <td class="e">redis.session.lock_wait_time</td>
                <td class="v">2000</td>
                <td class="v">2000</td>
            </tr>
            <tr>
                <td class="e">redis.session.locking_enabled</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
        </table>
        <h2><a name="module_Reflection">Reflection</a></h2>
        <table>
            <tr class="h">
                <th>Reflection</th>
                <th>enabled</th>
            </tr>
            <tr>
                <td class="e">Version </td>
                <td class="v">$Id: 5f15287237d5f78d75b19c26915aa7bd83dee8b8 $ </td>
            </tr>
        </table>
        <h2><a name="module_session">session</a></h2>
        <table>
            <tr>
                <td class="e">Session Support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">Registered save handlers </td>
                <td class="v">files user redis rediscluster </td>
            </tr>
            <tr>
                <td class="e">Registered serializer handlers </td>
                <td class="v">php_serialize php php_binary igbinary wddx </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">session.auto_start</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">session.cache_expire</td>
                <td class="v">180</td>
                <td class="v">180</td>
            </tr>
            <tr>
                <td class="e">session.cache_limiter</td>
                <td class="v">nocache</td>
                <td class="v">nocache</td>
            </tr>
            <tr>
                <td class="e">session.cookie_domain</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">session.cookie_httponly</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">session.cookie_lifetime</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">session.cookie_path</td>
                <td class="v">/</td>
                <td class="v">/</td>
            </tr>
            <tr>
                <td class="e">session.cookie_secure</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">session.entropy_file</td>
                <td class="v">/dev/urandom</td>
                <td class="v">/dev/urandom</td>
            </tr>
            <tr>
                <td class="e">session.entropy_length</td>
                <td class="v">32</td>
                <td class="v">32</td>
            </tr>
            <tr>
                <td class="e">session.gc_divisor</td>
                <td class="v">1000</td>
                <td class="v">1000</td>
            </tr>
            <tr>
                <td class="e">session.gc_maxlifetime</td>
                <td class="v">1440</td>
                <td class="v">1440</td>
            </tr>
            <tr>
                <td class="e">session.gc_probability</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">session.hash_bits_per_character</td>
                <td class="v">5</td>
                <td class="v">5</td>
            </tr>
            <tr>
                <td class="e">session.hash_function</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">session.name</td>
                <td class="v">PHPSESSID</td>
                <td class="v">PHPSESSID</td>
            </tr>
            <tr>
                <td class="e">session.referer_check</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">session.save_handler</td>
                <td class="v">files</td>
                <td class="v">files</td>
            </tr>
            <tr>
                <td class="e">session.save_path</td>
                <td class="v">/var/lib/php/sessions</td>
                <td class="v">/var/lib/php/sessions</td>
            </tr>
            <tr>
                <td class="e">session.serialize_handler</td>
                <td class="v">php</td>
                <td class="v">php</td>
            </tr>
            <tr>
                <td class="e">session.upload_progress.cleanup</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">session.upload_progress.enabled</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">session.upload_progress.freq</td>
                <td class="v">1%</td>
                <td class="v">1%</td>
            </tr>
            <tr>
                <td class="e">session.upload_progress.min_freq</td>
                <td class="v">1</td>
                <td class="v">1</td>
            </tr>
            <tr>
                <td class="e">session.upload_progress.name</td>
                <td class="v">PHP_SESSION_UPLOAD_PROGRESS</td>
                <td class="v">PHP_SESSION_UPLOAD_PROGRESS</td>
            </tr>
            <tr>
                <td class="e">session.upload_progress.prefix</td>
                <td class="v">upload_progress_</td>
                <td class="v">upload_progress_</td>
            </tr>
            <tr>
                <td class="e">session.use_cookies</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">session.use_only_cookies</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">session.use_strict_mode</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">session.use_trans_sid</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
        </table>
        <h2><a name="module_shmop">shmop</a></h2>
        <table>
            <tr>
                <td class="e">shmop support </td>
                <td class="v">enabled </td>
            </tr>
        </table>
        <h2><a name="module_SimpleXML">SimpleXML</a></h2>
        <table>
            <tr class="h">
                <th>Simplexml support</th>
                <th>enabled</th>
            </tr>
            <tr>
                <td class="e">Revision </td>
                <td class="v">$Id: d7077fc935154236afb4fe70814ba358efdbdca4 $ </td>
            </tr>
            <tr>
                <td class="e">Schema support </td>
                <td class="v">enabled </td>
            </tr>
        </table>
        <h2><a name="module_sockets">sockets</a></h2>
        <table>
            <tr>
                <td class="e">Sockets Support </td>
                <td class="v">enabled </td>
            </tr>
        </table>
        <h2><a name="module_SPL">SPL</a></h2>
        <table>
            <tr class="h">
                <th>SPL support</th>
                <th>enabled</th>
            </tr>
            <tr>
                <td class="e">Interfaces </td>
                <td class="v">Countable, OuterIterator, RecursiveIterator, SeekableIterator, SplObserver, SplSubject </td>
            </tr>
            <tr>
                <td class="e">Classes </td>
                <td class="v">AppendIterator, ArrayIterator, ArrayObject, BadFunctionCallException, BadMethodCallException, CachingIterator, CallbackFilterIterator, DirectoryIterator, DomainException, EmptyIterator, FilesystemIterator, FilterIterator, GlobIterator, InfiniteIterator, InvalidArgumentException, IteratorIterator, LengthException, LimitIterator, LogicException, MultipleIterator, NoRewindIterator, OutOfBoundsException, OutOfRangeException, OverflowException, ParentIterator, RangeException, RecursiveArrayIterator, RecursiveCachingIterator, RecursiveCallbackFilterIterator, RecursiveDirectoryIterator, RecursiveFilterIterator, RecursiveIteratorIterator, RecursiveRegexIterator, RecursiveTreeIterator, RegexIterator, RuntimeException, SplDoublyLinkedList, SplFileInfo, SplFileObject, SplFixedArray, SplHeap, SplMinHeap, SplMaxHeap, SplObjectStorage, SplPriorityQueue, SplQueue, SplStack, SplTempFileObject, UnderflowException, UnexpectedValueException </td>
            </tr>
        </table>
        <h2><a name="module_sqlite3">sqlite3</a></h2>
        <table>
            <tr class="h">
                <th>SQLite3 support</th>
                <th>enabled</th>
            </tr>
            <tr>
                <td class="e">SQLite3 module version </td>
                <td class="v">0.7-dev </td>
            </tr>
            <tr>
                <td class="e">SQLite Library </td>
                <td class="v">3.22.0 </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">sqlite3.extension_dir</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
        </table>
        <h2><a name="module_ssh2">ssh2</a></h2>
        <table>
            <tr class="h">
                <th>SSH2 support</th>
                <th>enabled</th>
            </tr>
            <tr>
                <td class="e">extension version </td>
                <td class="v">0.13 </td>
            </tr>
            <tr>
                <td class="e">libssh2 version </td>
                <td class="v">1.8.0 </td>
            </tr>
            <tr>
                <td class="e">banner </td>
                <td class="v">SSH-2.0-libssh2_1.8.0 </td>
            </tr>
        </table>
        <h2><a name="module_standard">standard</a></h2>
        <table>
            <tr>
                <td class="e">Dynamic Library Support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">Path to sendmail </td>
                <td class="v">/usr/sbin/sendmail -t -i </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">assert.active</td>
                <td class="v">1</td>
                <td class="v">1</td>
            </tr>
            <tr>
                <td class="e">assert.bail</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">assert.callback</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">assert.quiet_eval</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">assert.warning</td>
                <td class="v">1</td>
                <td class="v">1</td>
            </tr>
            <tr>
                <td class="e">auto_detect_line_endings</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">default_socket_timeout</td>
                <td class="v">60</td>
                <td class="v">60</td>
            </tr>
            <tr>
                <td class="e">from</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">url_rewriter.tags</td>
                <td class="v">a=href,area=href,frame=src,input=src,form=fakeentry</td>
                <td class="v">a=href,area=href,frame=src,input=src,form=fakeentry</td>
            </tr>
            <tr>
                <td class="e">user_agent</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
        </table>
        <h2><a name="module_suhosin">suhosin</a></h2>
        <table>
            <tr class="v">
                <td>
                    <a href="http://www.suhosin.org/"><img border="0" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/4QAWRXhpZgAATU0AKgAAAAgAAAAAAAD/2wBDAAEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQH/wAALCAAnAHEBASIA/8QAHgAAAgICAwEBAAAAAAAAAAAAAAkGCAUHAgMKAQT/xAAyEAABBAMAAgAFAQUJAQAAAAAFAgMEBgEHCAAJERITFCEVChYxVpYXGBkjMkFYmNTW/9oACAEBAAA/APTB4eVp6T650XyKLp1m6DspTX9GulhVVI2xX6rZjVErtidaadFDrxYa8LKx6W2fwqQ2GLWFEEG+/AmsSSkR1DKX7AgTwS0gw1nrJgXYa3YxQ49Xz4SfFKhTgQvDZICjAgpBdfhEhZOBIjzYE+G+9FmRH2pEd1xpxC85Xw8qjeu6+MNWbDs2p9q9TaG1TsanpDrsFS2ls+pa3KxGrAFg2EPIjouxQEyVizRBKFKRKEPTo7anVRXnWpbL8drlVe7+Hr3ZQdMo/ZfKVyuFnKQwlaqlV6I1FYbLYTRB5MeAIBghFwmFCxSdIWhiHAgRZEuS8tLTLS1qwnNrPDyLnrxSqqSrgWz2+r1wxcZ7wqoiT1gEhyVqJx2kPSB1cgEJceUcnsMuNvPQxjUqQ00tDi20oUnOZR5SnqH2CczcY2aoAek7DddahbvFZcB7Lkap2VYdTJJyJk6G1WiuxKpVzteDWbOB7s50OTkxn4ol6KWl5YHyESPLoR5DEuOxKivNyI0llqRHfZWlxp9h5CXGXmnE5ylbbrakrQtOcpUlWFYznGfO7w8Xv0x7Leb+djUnWgeXZ+iujXEPshOZubwUrbO35hFv4NpYsQispmwtfwW3VtLmz7tNDONQsuyR8Eq41iK4p/Znr89jftfnQti9w3Gh8n6bqJeDbtHcSwYRLa4mYZhyEPRCXSBKo3PX8s08SDLkA5+ANwg2EdDLl2wI7W0zJKIbtHffYV1fwUPCgusPXYQIaKqkAeEZ37wxZf7R9X16siozUCEqVp2xgavbNXgwg9mJHTGslhQHYbwgaEKFMxmsvts0VvHV/SmpKNvLTFoj3PWWxRCjNVsUaNNhYmR2JssXPjSYBKPEIDiQkuPIByw2dGYmDikCZCktIeYWnGvOo4nZT9PEvcWHeZxl9jlFYOjOnqttExUi4V5LOELEHtV24MXrhQctD7i2ptZtcQ2iQ0wl6vqhrkzkfb12qfsGwoNC663n6V9ob7r7LwfOuBPBm+uwdkVXKHvqvg/0MHug7eQikyH8vOC5dcFP/O+2+qH8ZKFKgsczrXXtgr092/eovl67NmIEmi7F2Z6cOguYC1es8SRiWIMVW6by2jRwA84PkxsSx85UhzMV1lMlHyqQhxLjeO9Vd01K2H7v0v3RrzqvVdtqLT1CrFF57pGr4QUtPICiQ60iLtUzE6SeAOAEEITI8hkwkh+qwyjJdjA/6RBhXnnV99/QVNuutq766KNX4Gwt971J1m52ecxUDF//ALsGmKaeiWG0b8PjasJPWQPJgCxZJERwONWWap6LgWTlvKA8M68Xnf8AcRrROoBms9kxdw0Sva4ptWrWz41oh3XN6GVavjwEezTbVBmkY5wqXSO+9LEcTZDski9JcfcU8pefFVftEyEq9TPRKlJSrLdi0ctGc4xnKFZ3hr9vKk5z/pVlC1o+OPz8qlY/hnPjuUpShKUIThKUJwlKU4xhKUpx8EpTjH4xjGMYxjGPxjH4x5981buuXuIfq24kNACKJYNwQBzM2kV/Zk4wLpR+dEnw5E4GXKgviSEumA7ZIcILIQ/EFm5I2eTjShkeZGdU/wA6bU9itQBKqlH9LegObK/GfW3IiMdn6opYAnPjZU3JJMA9V6MuUxaZT+XnGZc+O8/JS5l/MyWl37p3K9M+wnuLlAfpUltDhzQUhjfPQWuOaqUiq9uWos9G2JtFk+/W3z6ZnH4pEGtsorhDBQlEcIy4qlR8MDZeHF5bn2wNge6gk41nVfOHr6prWPm+sjYHQm69luOfH4/J9J2uan1Mlr5fx83zsvfN8M/D5Pj+N08cTfZA8Wt8TuCmca1WpxxcFWv88wFdrPF1mnJrqijFiG37M4XgTmGr6zEscQhzETv8tcCWzIckRLWbnrNxuuntsU7XdmzStgW3Wt7rNFuWFvtZqVxPVcqKrFmw5FQ5JbyBNyoJX547a30fafM0hTmEpygL0/37S3rq59I809oVaLxz0yJv13JbK2buqA1U6Fv5kpaSk+qXSsdDEEY1xcBgiuTBtTbGru33cKWGmT2R+P1OU+u7vW3sj9eJPTF/13i6ULt0nfasTrkDnHnV4b0XaNkTC0V1iAAdH65zah1cbkSfpvpO2CWLwLyymeMXJLMj4kiL+iLnfo/mP19VDXXTUQvX7dNvlzuFQoB+X9wb1rruxIDOBqkVjJdfQGmyTcWyXB4Bh37gNm14gE48AuyQHRGBdKWLpKBWBtV5coVXO7IurpAYjZGyDkQZqrTMCO1G+tcreFhyXbteSefu84qdIqQZyOcIw5CbNZqkJYxLm6f4v4H13yJm8X6fZj27+nNzTf1ne/TOw2Iub7sMotxp/IoXDjqeg0bX415lhsBRALuR4+HBFsTpZVwUPkRqa9EesDbdC32K669YW2Q/OO1SduhG94aEs5OxC+X9/Q3pbeTxGx1WtDTkavWknCzJZJTB9XltEpbzR8VIqNvYlWQpz/aI8ZV6mOi8JxnOc2HRuMYxjOc5zneevMYxjGPznOc5xjGP985+Hjt/Dw8PE1e5CuELZF9YQMbHekvyPbxx9KfSyhTimBowHuAmWmrwnGc4ZgC4cua+rP4S0wtWc4xjxyvh4ujde/8A2OUjbM6oac9eOu936uWrDoLb2e16nrhtUTLbecM2mi2jUDllCmMO5dQ5Er+LmKShLa2zz2VqQ3izOwfY1equdq1v9f8AypOrlrBk69ZK1Ye67CRglwZ2A+NMBykRjjQlAmQp8CVIhTozi3o8hh51pWHGl5+NJfXJzd7JfXfyyH5wr3NfLeyiUS2W+4mtgFeyNh19g0Ws89vMbDFPzzBY0BIokFBChvtIFjzFnPjnzCmIs0pLTmy828e76bagixGhfXPX6b9+wmwQje6d72M64PW+jD6hx8XRAEQe81Hy4rDjtRN/MvGMpiL+H0lNu886Xe1M0vyF7SPWx1C2WzoWg7hv/TI/qjY0u/WWqavPn4+sw8rVi9hInnmqMIfKWE1ZlrlPxRsc0tpb5lcpoSh6K1v/ABIvXj/zu45/7MaY/wDtPKbdqdx+oPfWmTGi969r6YJ0Sz2PXlgLM6vvw6+EZLmutiVfYo8c4/RRt5bjDjBCqRg5v54qH3QZAi1DkwZjsadHavqbbOu96a5qe29TWmBdtc3oZ+s1O0jGprMEyN+4fiZksMkYsKcz8kqLIjuNS4kd9p1lxDjSVJzjzYnh4eY+cIFFHRj5MYPIvhSCS4d6dCjS3RJVMOYOSTGOSGnFwCCR5EhBTNi5ak4hzpkbDv0JT6F5Dw8PDw8PDz88uHEnx3Ik6LGmxXsYw7GlsNSY7uMZxnGHGXkrbXjGcYzjCk5xjOMZ/jjyO/uLSP5Oqv8ATwj/AMfh+4tI/k6q/wBPCP8Ax+SVhhiKyzGjMtR48dtDLEdhtDLLLLScIbaZabwlttttGMIQ2hKUoTjCU4xjGMedvn//2QA=" alt="Suhosin logo" /></a>
                    This server is protected with the Suhosin Extension 0.9.38<br /><br />Copyright (c) 2006-2007 <a href="http://www.hardened-php.net/">Hardened-PHP Project</a><br />
                    Copyright (c) 2007-2015 <a href="http://www.sektioneins.de/">SektionEins GmbH</a>
                </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">suhosin.apc_bug_workaround</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">suhosin.cookie.checkraddr</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">suhosin.cookie.cryptdocroot</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">suhosin.cookie.cryptkey</td>
                <td class="v">[ protected ]</td>
                <td class="v">[ protected ]</td>
            </tr>
            <tr>
                <td class="e">suhosin.cookie.cryptlist</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">suhosin.cookie.cryptraddr</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">suhosin.cookie.cryptua</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">suhosin.cookie.disallow_nul</td>
                <td class="v">1</td>
                <td class="v">1</td>
            </tr>
            <tr>
                <td class="e">suhosin.cookie.disallow_ws</td>
                <td class="v">1</td>
                <td class="v">1</td>
            </tr>
            <tr>
                <td class="e">suhosin.cookie.encrypt</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">suhosin.cookie.max_array_depth</td>
                <td class="v">50</td>
                <td class="v">50</td>
            </tr>
            <tr>
                <td class="e">suhosin.cookie.max_array_index_length</td>
                <td class="v">64</td>
                <td class="v">64</td>
            </tr>
            <tr>
                <td class="e">suhosin.cookie.max_name_length</td>
                <td class="v">64</td>
                <td class="v">64</td>
            </tr>
            <tr>
                <td class="e">suhosin.cookie.max_totalname_length</td>
                <td class="v">256</td>
                <td class="v">256</td>
            </tr>
            <tr>
                <td class="e">suhosin.cookie.max_value_length</td>
                <td class="v">10000</td>
                <td class="v">10000</td>
            </tr>
            <tr>
                <td class="e">suhosin.cookie.max_vars</td>
                <td class="v">100</td>
                <td class="v">100</td>
            </tr>
            <tr>
                <td class="e">suhosin.cookie.plainlist</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">suhosin.coredump</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">suhosin.disable.display_errors</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">suhosin.executor.allow_symlink</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">suhosin.executor.disable_emodifier</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">suhosin.executor.disable_eval</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">suhosin.executor.eval.blacklist</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">suhosin.executor.eval.whitelist</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">suhosin.executor.func.blacklist</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">suhosin.executor.func.whitelist</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">suhosin.executor.include.allow_writable_files</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">suhosin.executor.include.blacklist</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">suhosin.executor.include.max_traversal</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">suhosin.executor.include.whitelist</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">suhosin.executor.max_depth</td>
                <td class="v">750</td>
                <td class="v">750</td>
            </tr>
            <tr>
                <td class="e">suhosin.filter.action</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">suhosin.get.disallow_nul</td>
                <td class="v">1</td>
                <td class="v">1</td>
            </tr>
            <tr>
                <td class="e">suhosin.get.disallow_ws</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">suhosin.get.max_array_depth</td>
                <td class="v">50</td>
                <td class="v">50</td>
            </tr>
            <tr>
                <td class="e">suhosin.get.max_array_index_length</td>
                <td class="v">64</td>
                <td class="v">64</td>
            </tr>
            <tr>
                <td class="e">suhosin.get.max_name_length</td>
                <td class="v">64</td>
                <td class="v">64</td>
            </tr>
            <tr>
                <td class="e">suhosin.get.max_totalname_length</td>
                <td class="v">256</td>
                <td class="v">256</td>
            </tr>
            <tr>
                <td class="e">suhosin.get.max_value_length</td>
                <td class="v">512</td>
                <td class="v">512</td>
            </tr>
            <tr>
                <td class="e">suhosin.get.max_vars</td>
                <td class="v">100</td>
                <td class="v">100</td>
            </tr>
            <tr>
                <td class="e">suhosin.log.file</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">suhosin.log.file.name</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">suhosin.log.file.time</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">suhosin.log.phpscript</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">suhosin.log.phpscript.is_safe</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">suhosin.log.phpscript.name</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">suhosin.log.sapi</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">suhosin.log.script</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">suhosin.log.script.name</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">suhosin.log.stdout</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">suhosin.log.syslog</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">suhosin.log.syslog.facility</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">suhosin.log.syslog.priority</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">suhosin.log.use-x-forwarded-for</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">suhosin.mail.protect</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">suhosin.memory_limit</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">suhosin.mt_srand.ignore</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">suhosin.multiheader</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">suhosin.perdir</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">suhosin.post.disallow_nul</td>
                <td class="v">1</td>
                <td class="v">1</td>
            </tr>
            <tr>
                <td class="e">suhosin.post.disallow_ws</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">suhosin.post.max_array_depth</td>
                <td class="v">50</td>
                <td class="v">50</td>
            </tr>
            <tr>
                <td class="e">suhosin.post.max_array_index_length</td>
                <td class="v">64</td>
                <td class="v">64</td>
            </tr>
            <tr>
                <td class="e">suhosin.post.max_name_length</td>
                <td class="v">64</td>
                <td class="v">64</td>
            </tr>
            <tr>
                <td class="e">suhosin.post.max_totalname_length</td>
                <td class="v">256</td>
                <td class="v">256</td>
            </tr>
            <tr>
                <td class="e">suhosin.post.max_value_length</td>
                <td class="v">1000000</td>
                <td class="v">1000000</td>
            </tr>
            <tr>
                <td class="e">suhosin.post.max_vars</td>
                <td class="v">1000</td>
                <td class="v">1000</td>
            </tr>
            <tr>
                <td class="e">suhosin.protectkey</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">suhosin.rand.reseed_every_request</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">suhosin.rand.seedingkey</td>
                <td class="v">[ protected ]</td>
                <td class="v">[ protected ]</td>
            </tr>
            <tr>
                <td class="e">suhosin.request.array_index_blacklist</td>
                <td class="v">'"+&lt;&gt;;()</td>
                <td class="v">'"+&lt;&gt;;()</td>
            </tr>
            <tr>
                <td class="e">suhosin.request.array_index_whitelist</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">suhosin.request.disallow_nul</td>
                <td class="v">1</td>
                <td class="v">1</td>
            </tr>
            <tr>
                <td class="e">suhosin.request.disallow_ws</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">suhosin.request.max_array_depth</td>
                <td class="v">50</td>
                <td class="v">50</td>
            </tr>
            <tr>
                <td class="e">suhosin.request.max_array_index_length</td>
                <td class="v">64</td>
                <td class="v">64</td>
            </tr>
            <tr>
                <td class="e">suhosin.request.max_totalname_length</td>
                <td class="v">256</td>
                <td class="v">256</td>
            </tr>
            <tr>
                <td class="e">suhosin.request.max_value_length</td>
                <td class="v">1000000</td>
                <td class="v">1000000</td>
            </tr>
            <tr>
                <td class="e">suhosin.request.max_varname_length</td>
                <td class="v">64</td>
                <td class="v">64</td>
            </tr>
            <tr>
                <td class="e">suhosin.request.max_vars</td>
                <td class="v">1000</td>
                <td class="v">1000</td>
            </tr>
            <tr>
                <td class="e">suhosin.server.encode</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">suhosin.server.strip</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">suhosin.session.checkraddr</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">suhosin.session.cryptdocroot</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">suhosin.session.cryptkey</td>
                <td class="v">[ protected ]</td>
                <td class="v">[ protected ]</td>
            </tr>
            <tr>
                <td class="e">suhosin.session.cryptraddr</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">suhosin.session.cryptua</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">suhosin.session.encrypt</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">suhosin.session.max_id_length</td>
                <td class="v">128</td>
                <td class="v">128</td>
            </tr>
            <tr>
                <td class="e">suhosin.simulation</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">suhosin.sql.bailout_on_error</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">suhosin.sql.comment</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">suhosin.sql.multiselect</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">suhosin.sql.opencomment</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">suhosin.sql.union</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">suhosin.sql.user_match</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">suhosin.sql.user_postfix</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">suhosin.sql.user_prefix</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">suhosin.srand.ignore</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">suhosin.stealth</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">suhosin.upload.disallow_binary</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">suhosin.upload.disallow_elf</td>
                <td class="v">1</td>
                <td class="v">1</td>
            </tr>
            <tr>
                <td class="e">suhosin.upload.max_newlines</td>
                <td class="v">100</td>
                <td class="v">100</td>
            </tr>
            <tr>
                <td class="e">suhosin.upload.max_uploads</td>
                <td class="v">25</td>
                <td class="v">25</td>
            </tr>
            <tr>
                <td class="e">suhosin.upload.remove_binary</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">suhosin.upload.verification_script</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
        </table>
        <h2><a name="module_sysvmsg">sysvmsg</a></h2>
        <table>
            <tr>
                <td class="e">sysvmsg support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">Revision </td>
                <td class="v">$Id: 58590192720bc56939152fde3645d808b348bb9b $ </td>
            </tr>
        </table>
        <h2><a name="module_tidy">tidy</a></h2>
        <table>
            <tr class="h">
                <th>Tidy support</th>
                <th>enabled</th>
            </tr>
            <tr>
                <td class="e">libTidy Release </td>
                <td class="v">2017/11/25 </td>
            </tr>
            <tr>
                <td class="e">Extension Version </td>
                <td class="v">2.0 ($Id: 57f050b275c6da348310461a64aaad21feef8091 $) </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">tidy.clean_output</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">tidy.default_config</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
        </table>
        <h2><a name="module_tokenizer">tokenizer</a></h2>
        <table>
            <tr>
                <td class="e">Tokenizer Support </td>
                <td class="v">enabled </td>
            </tr>
        </table>
        <h2><a name="module_uploadprogress">uploadprogress</a></h2>
        <table>
            <tr class="h">
                <th>uploadprogress support</th>
                <th>enabled</th>
            </tr>
            <tr>
                <td class="e">Version </td>
                <td class="v">1.1.4 </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">uploadprogress.file.contents_template</td>
                <td class="v">/tmp/upload_contents_%s</td>
                <td class="v">/tmp/upload_contents_%s</td>
            </tr>
            <tr>
                <td class="e">uploadprogress.file.filename_template</td>
                <td class="v">/tmp/upt_%s.txt</td>
                <td class="v">/tmp/upt_%s.txt</td>
            </tr>
            <tr>
                <td class="e">uploadprogress.get_contents</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
        </table>
        <h2><a name="module_wddx">wddx</a></h2>
        <table>
            <tr class="h">
                <th>WDDX Support</th>
                <th>enabled</th>
            </tr>
            <tr>
                <td class="e">WDDX Session Serializer </td>
                <td class="v">enabled </td>
            </tr>
        </table>
        <h2><a name="module_xml">xml</a></h2>
        <table>
            <tr>
                <td class="e">XML Support </td>
                <td class="v">active </td>
            </tr>
            <tr>
                <td class="e">XML Namespace Support </td>
                <td class="v">active </td>
            </tr>
            <tr>
                <td class="e">libxml2 Version </td>
                <td class="v">2.9.12 </td>
            </tr>
        </table>
        <h2><a name="module_xmlreader">xmlreader</a></h2>
        <table>
            <tr>
                <td class="e">XMLReader </td>
                <td class="v">enabled </td>
            </tr>
        </table>
        <h2><a name="module_xmlwriter">xmlwriter</a></h2>
        <table>
            <tr>
                <td class="e">XMLWriter </td>
                <td class="v">enabled </td>
            </tr>
        </table>
        <h2><a name="module_xsl">xsl</a></h2>
        <table>
            <tr>
                <td class="e">XSL </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">libxslt Version </td>
                <td class="v">1.1.29 </td>
            </tr>
            <tr>
                <td class="e">libxslt compiled against libxml Version </td>
                <td class="v">2.9.4 </td>
            </tr>
            <tr>
                <td class="e">EXSLT </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">libexslt Version </td>
                <td class="v">1.1.29 </td>
            </tr>
        </table>
        <h2><a name="module_yac">yac</a></h2>
        <table>
            <tr class="h">
                <th>yac support</th>
                <th>enabled</th>
            </tr>
            <tr>
                <td class="e">Version </td>
                <td class="v">0.9.2 </td>
            </tr>
            <tr>
                <td class="e">Shared Memory </td>
                <td class="v">mmap </td>
            </tr>
            <tr>
                <td class="e">Serializer </td>
                <td class="v">php </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">yac.compress_threshold</td>
                <td class="v">-1</td>
                <td class="v">-1</td>
            </tr>
            <tr>
                <td class="e">yac.debug</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">yac.enable</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">yac.enable_cli</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">yac.keys_memory_size</td>
                <td class="v">4M</td>
                <td class="v">4M</td>
            </tr>
            <tr>
                <td class="e">yac.values_memory_size</td>
                <td class="v">64M</td>
                <td class="v">64M</td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th colspan="2">Cache info</th>
            </tr>
            <tr>
                <td class="e">Total Shared Memory Usage(memory_size) </td>
                <td class="v">71303168 </td>
            </tr>
            <tr>
                <td class="e">Total Shared Memory Usage for keys(keys_memory_size) </td>
                <td class="v">4194304 </td>
            </tr>
            <tr>
                <td class="e">Total Shared Memory Usage for values(values_memory_size) </td>
                <td class="v">67108864 </td>
            </tr>
            <tr>
                <td class="e">Size of Shared Memory Segment(segment_size) </td>
                <td class="v">4194304 </td>
            </tr>
            <tr>
                <td class="e">Number of Segments (segment_num) </td>
                <td class="v">16 </td>
            </tr>
            <tr>
                <td class="e">Total Slots Number(slots_size) </td>
                <td class="v">32768 </td>
            </tr>
            <tr>
                <td class="e">Total Used Slots(slots_num) </td>
                <td class="v">0 </td>
            </tr>
        </table>
        <h2><a name="module_yaml">yaml</a></h2>
        <table>
            <tr>
                <td class="e">LibYAML Support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">Module Version </td>
                <td class="v">1.3.2 </td>
            </tr>
            <tr>
                <td class="e">LibYAML Version </td>
                <td class="v">0.1.7 </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">yaml.decode_binary</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">yaml.decode_php</td>
                <td class="v">1</td>
                <td class="v">1</td>
            </tr>
            <tr>
                <td class="e">yaml.decode_timestamp</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">yaml.output_canonical</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">yaml.output_indent</td>
                <td class="v">2</td>
                <td class="v">2</td>
            </tr>
            <tr>
                <td class="e">yaml.output_width</td>
                <td class="v">80</td>
                <td class="v">80</td>
            </tr>
        </table>
        <h2><a name="module_Zend OPcache">Zend OPcache</a></h2>
        <table>
            <tr>
                <td class="e">Opcode Caching </td>
                <td class="v">Up and Running </td>
            </tr>
            <tr>
                <td class="e">Optimization </td>
                <td class="v">Enabled </td>
            </tr>
            <tr>
                <td class="e">Startup </td>
                <td class="v">OK </td>
            </tr>
            <tr>
                <td class="e">Shared memory model </td>
                <td class="v">mmap </td>
            </tr>
            <tr>
                <td class="e">Cache hits </td>
                <td class="v">2 </td>
            </tr>
            <tr>
                <td class="e">Cache misses </td>
                <td class="v">2 </td>
            </tr>
            <tr>
                <td class="e">Used memory </td>
                <td class="v">5467168 </td>
            </tr>
            <tr>
                <td class="e">Free memory </td>
                <td class="v">61641696 </td>
            </tr>
            <tr>
                <td class="e">Wasted memory </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">Interned Strings Used memory </td>
                <td class="v">471408 </td>
            </tr>
            <tr>
                <td class="e">Interned Strings Free memory </td>
                <td class="v">3722896 </td>
            </tr>
            <tr>
                <td class="e">Cached scripts </td>
                <td class="v">2 </td>
            </tr>
            <tr>
                <td class="e">Cached keys </td>
                <td class="v">2 </td>
            </tr>
            <tr>
                <td class="e">Max keys </td>
                <td class="v">3907 </td>
            </tr>
            <tr>
                <td class="e">OOM restarts </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">Hash keys restarts </td>
                <td class="v">0 </td>
            </tr>
            <tr>
                <td class="e">Manual restarts </td>
                <td class="v">0 </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">opcache.blacklist_filename</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">opcache.consistency_checks</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">opcache.dups_fix</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">opcache.enable</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">opcache.enable_cli</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">opcache.enable_file_override</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">opcache.error_log</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">opcache.fast_shutdown</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">opcache.file_update_protection</td>
                <td class="v">2</td>
                <td class="v">2</td>
            </tr>
            <tr>
                <td class="e">opcache.force_restart_timeout</td>
                <td class="v">180</td>
                <td class="v">180</td>
            </tr>
            <tr>
                <td class="e">opcache.inherited_hack</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">opcache.interned_strings_buffer</td>
                <td class="v">4</td>
                <td class="v">4</td>
            </tr>
            <tr>
                <td class="e">opcache.load_comments</td>
                <td class="v">1</td>
                <td class="v">1</td>
            </tr>
            <tr>
                <td class="e">opcache.lockfile_path</td>
                <td class="v">/tmp</td>
                <td class="v">/tmp</td>
            </tr>
            <tr>
                <td class="e">opcache.log_verbosity_level</td>
                <td class="v">1</td>
                <td class="v">1</td>
            </tr>
            <tr>
                <td class="e">opcache.max_accelerated_files</td>
                <td class="v">2000</td>
                <td class="v">2000</td>
            </tr>
            <tr>
                <td class="e">opcache.max_file_size</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">opcache.max_wasted_percentage</td>
                <td class="v">5</td>
                <td class="v">5</td>
            </tr>
            <tr>
                <td class="e">opcache.memory_consumption</td>
                <td class="v">64</td>
                <td class="v">64</td>
            </tr>
            <tr>
                <td class="e">opcache.optimization_level</td>
                <td class="v">0x7FFFBFFF</td>
                <td class="v">0x7FFFBFFF</td>
            </tr>
            <tr>
                <td class="e">opcache.preferred_memory_model</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">opcache.protect_memory</td>
                <td class="v">0</td>
                <td class="v">0</td>
            </tr>
            <tr>
                <td class="e">opcache.restrict_api</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">opcache.revalidate_freq</td>
                <td class="v">2</td>
                <td class="v">2</td>
            </tr>
            <tr>
                <td class="e">opcache.revalidate_path</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">opcache.save_comments</td>
                <td class="v">1</td>
                <td class="v">1</td>
            </tr>
            <tr>
                <td class="e">opcache.use_cwd</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
            <tr>
                <td class="e">opcache.validate_permission</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">opcache.validate_root</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">opcache.validate_timestamps</td>
                <td class="v">On</td>
                <td class="v">On</td>
            </tr>
        </table>
        <h2><a name="module_zip">zip</a></h2>
        <table>
            <tr>
                <td class="e">Zip </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">Zip version </td>
                <td class="v">1.12.5 </td>
            </tr>
            <tr>
                <td class="e">Libzip version </td>
                <td class="v">1.7.3 </td>
            </tr>
        </table>
        <h2><a name="module_zlib">zlib</a></h2>
        <table>
            <tr class="h">
                <th>ZLib Support</th>
                <th>enabled</th>
            </tr>
            <tr>
                <td class="e">Stream Wrapper </td>
                <td class="v">compress.zlib:// </td>
            </tr>
            <tr>
                <td class="e">Stream Filter </td>
                <td class="v">zlib.inflate, zlib.deflate </td>
            </tr>
            <tr>
                <td class="e">Compiled Version </td>
                <td class="v">1.2.11 </td>
            </tr>
            <tr>
                <td class="e">Linked Version </td>
                <td class="v">1.2.11 </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Directive</th>
                <th>Local Value</th>
                <th>Master Value</th>
            </tr>
            <tr>
                <td class="e">zlib.output_compression</td>
                <td class="v">Off</td>
                <td class="v">Off</td>
            </tr>
            <tr>
                <td class="e">zlib.output_compression_level</td>
                <td class="v">-1</td>
                <td class="v">-1</td>
            </tr>
            <tr>
                <td class="e">zlib.output_handler</td>
                <td class="v"><i>no value</i></td>
                <td class="v"><i>no value</i></td>
            </tr>
        </table>
        <h2><a name="module_zstd">zstd</a></h2>
        <table>
            <tr>
                <td class="e">Zstd support </td>
                <td class="v">enabled </td>
            </tr>
            <tr>
                <td class="e">Extension Version </td>
                <td class="v">0.11.0 </td>
            </tr>
            <tr>
                <td class="e">Interface Version </td>
                <td class="v">1.4.8 </td>
            </tr>
        </table>
        <h2>Additional Modules</h2>
        <table>
            <tr class="h">
                <th>Module Name</th>
            </tr>
            <tr>
                <td class="v">sysvsem</td>
            </tr>
            <tr>
                <td class="v">sysvshm</td>
            </tr>
        </table>
        <h2>Environment</h2>
        <table>
            <tr class="h">
                <th>Variable</th>
                <th>Value</th>
            </tr>
            <tr>
                <td class="e">APACHE_RUN_DIR </td>
                <td class="v">/var/run/apache2 </td>
            </tr>
            <tr>
                <td class="e">APACHE_PID_FILE </td>
                <td class="v">/var/run/apache2/apache2.pid </td>
            </tr>
            <tr>
                <td class="e">JOURNAL_STREAM </td>
                <td class="v">9:674790 </td>
            </tr>
            <tr>
                <td class="e">PATH </td>
                <td class="v">/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin </td>
            </tr>
            <tr>
                <td class="e">INVOCATION_ID </td>
                <td class="v">cfde341e621c4d7192d656e798ae6c6d </td>
            </tr>
            <tr>
                <td class="e">APACHE_LOCK_DIR </td>
                <td class="v">/var/lock/apache2 </td>
            </tr>
            <tr>
                <td class="e">LANG </td>
                <td class="v">C </td>
            </tr>
            <tr>
                <td class="e">APACHE_RUN_USER </td>
                <td class="v">www-data </td>
            </tr>
            <tr>
                <td class="e">APACHE_RUN_GROUP </td>
                <td class="v">www-data </td>
            </tr>
            <tr>
                <td class="e">APACHE_LOG_DIR </td>
                <td class="v">/var/log/apache2 </td>
            </tr>
            <tr>
                <td class="e">PWD </td>
                <td class="v">/ </td>
            </tr>
            <tr>
                <td class="e">XDG_DATA_DIRS </td>
                <td class="v">/var/lib/flatpak/exports/share:/usr/local/share/:/usr/share/ </td>
            </tr>
        </table>
        <h2>PHP Variables</h2>
        <table>
            <tr class="h">
                <th>Variable</th>
                <th>Value</th>
            </tr>
            <tr>
                <td class="e">_SERVER["HTTPS"]</td>
                <td class="v">on</td>
            </tr>
            <tr>
                <td class="e">_SERVER["SSL_TLS_SNI"]</td>
                <td class="v">los.kroshmorkovkin.ru</td>
            </tr>
            <tr>
                <td class="e">_SERVER["HTTP_HOST"]</td>
                <td class="v">los.kroshmorkovkin.ru</td>
            </tr>
            <tr>
                <td class="e">_SERVER["HTTP_CONNECTION"]</td>
                <td class="v">keep-alive</td>
            </tr>
            <tr>
                <td class="e">_SERVER["HTTP_DNT"]</td>
                <td class="v">1</td>
            </tr>
            <tr>
                <td class="e">_SERVER["HTTP_UPGRADE_INSECURE_REQUESTS"]</td>
                <td class="v">1</td>
            </tr>
            <tr>
                <td class="e">_SERVER["HTTP_USER_AGENT"]</td>
                <td class="v">Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36</td>
            </tr>
            <tr>
                <td class="e">_SERVER["HTTP_ACCEPT"]</td>
                <td class="v">text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9</td>
            </tr>
            <tr>
                <td class="e">_SERVER["HTTP_SEC_FETCH_SITE"]</td>
                <td class="v">none</td>
            </tr>
            <tr>
                <td class="e">_SERVER["HTTP_SEC_FETCH_MODE"]</td>
                <td class="v">navigate</td>
            </tr>
            <tr>
                <td class="e">_SERVER["HTTP_SEC_FETCH_USER"]</td>
                <td class="v">?1</td>
            </tr>
            <tr>
                <td class="e">_SERVER["HTTP_SEC_FETCH_DEST"]</td>
                <td class="v">document</td>
            </tr>
            <tr>
                <td class="e">_SERVER["HTTP_ACCEPT_ENCODING"]</td>
                <td class="v">gzip, deflate, br</td>
            </tr>
            <tr>
                <td class="e">_SERVER["HTTP_ACCEPT_LANGUAGE"]</td>
                <td class="v">ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7</td>
            </tr>
            <tr>
                <td class="e">_SERVER["PATH"]</td>
                <td class="v">/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin</td>
            </tr>
            <tr>
                <td class="e">_SERVER["SERVER_SIGNATURE"]</td>
                <td class="v">&lt;address&gt;Apache Server at &lt;a href=&quot;mailto:sosic.heh@ya.ru&quot;&gt;los.kroshmorkovkin.ru&lt;/a&gt; Port 443&lt;/address&gt;
                </td>
            </tr>
            <tr>
                <td class="e">_SERVER["SERVER_SOFTWARE"]</td>
                <td class="v">Apache</td>
            </tr>
            <tr>
                <td class="e">_SERVER["SERVER_NAME"]</td>
                <td class="v">los.kroshmorkovkin.ru</td>
            </tr>
            <tr>
                <td class="e">_SERVER["SERVER_ADDR"]</td>
                <td class="v">185.252.147.115</td>
            </tr>
            <tr>
                <td class="e">_SERVER["SERVER_PORT"]</td>
                <td class="v">443</td>
            </tr>
            <tr>
                <td class="e">_SERVER["REMOTE_ADDR"]</td>
                <td class="v">85.113.213.176</td>
            </tr>
            <tr>
                <td class="e">_SERVER["DOCUMENT_ROOT"]</td>
                <td class="v">/var/www/kroshmorkovkin/losyandex/</td>
            </tr>
            <tr>
                <td class="e">_SERVER["REQUEST_SCHEME"]</td>
                <td class="v">https</td>
            </tr>
            <tr>
                <td class="e">_SERVER["CONTEXT_PREFIX"]</td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">_SERVER["CONTEXT_DOCUMENT_ROOT"]</td>
                <td class="v">/var/www/kroshmorkovkin/losyandex/</td>
            </tr>
            <tr>
                <td class="e">_SERVER["SERVER_ADMIN"]</td>
                <td class="v">sosic.heh@ya.ru</td>
            </tr>
            <tr>
                <td class="e">_SERVER["SCRIPT_FILENAME"]</td>
                <td class="v">/var/www/kroshmorkovkin/losyandex/infophp.php</td>
            </tr>
            <tr>
                <td class="e">_SERVER["REMOTE_PORT"]</td>
                <td class="v">6796</td>
            </tr>
            <tr>
                <td class="e">_SERVER["GATEWAY_INTERFACE"]</td>
                <td class="v">CGI/1.1</td>
            </tr>
            <tr>
                <td class="e">_SERVER["SERVER_PROTOCOL"]</td>
                <td class="v">HTTP/1.1</td>
            </tr>
            <tr>
                <td class="e">_SERVER["REQUEST_METHOD"]</td>
                <td class="v">GET</td>
            </tr>
            <tr>
                <td class="e">_SERVER["QUERY_STRING"]</td>
                <td class="v"><i>no value</i></td>
            </tr>
            <tr>
                <td class="e">_SERVER["REQUEST_URI"]</td>
                <td class="v">/infophp.php</td>
            </tr>
            <tr>
                <td class="e">_SERVER["SCRIPT_NAME"]</td>
                <td class="v">/infophp.php</td>
            </tr>
            <tr>
                <td class="e">_SERVER["PHP_SELF"]</td>
                <td class="v">/infophp.php</td>
            </tr>
            <tr>
                <td class="e">_SERVER["REQUEST_TIME_FLOAT"]</td>
                <td class="v">1640259970.911</td>
            </tr>
            <tr>
                <td class="e">_SERVER["REQUEST_TIME"]</td>
                <td class="v">1640259970</td>
            </tr>
        </table>
        <hr />
        <h1>PHP Credits</h1>
        <table>
            <tr class="h">
                <th>PHP Group</th>
            </tr>
            <tr>
                <td class="e">Thies C. Arntzen, Stig Bakken, Shane Caraveo, Andi Gutmans, Rasmus Lerdorf, Sam Ruby, Sascha Schumann, Zeev Suraski, Jim Winstead, Andrei Zmievski </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>Language Design &amp; Concept</th>
            </tr>
            <tr>
                <td class="e">Andi Gutmans, Rasmus Lerdorf, Zeev Suraski, Marcus Boerger </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th colspan="2">PHP Authors</th>
            </tr>
            <tr class="h">
                <th>Contribution</th>
                <th>Authors</th>
            </tr>
            <tr>
                <td class="e">Zend Scripting Language Engine </td>
                <td class="v">Andi Gutmans, Zeev Suraski, Stanislav Malyshev, Marcus Boerger, Dmitry Stogov, Xinchen Hui, Nikita Popov </td>
            </tr>
            <tr>
                <td class="e">Extension Module API </td>
                <td class="v">Andi Gutmans, Zeev Suraski, Andrei Zmievski </td>
            </tr>
            <tr>
                <td class="e">UNIX Build and Modularization </td>
                <td class="v">Stig Bakken, Sascha Schumann, Jani Taskinen </td>
            </tr>
            <tr>
                <td class="e">Windows Port </td>
                <td class="v">Shane Caraveo, Zeev Suraski, Wez Furlong, Pierre-Alain Joye, Anatol Belski </td>
            </tr>
            <tr>
                <td class="e">Server API (SAPI) Abstraction Layer </td>
                <td class="v">Andi Gutmans, Shane Caraveo, Zeev Suraski </td>
            </tr>
            <tr>
                <td class="e">Streams Abstraction Layer </td>
                <td class="v">Wez Furlong, Sara Golemon </td>
            </tr>
            <tr>
                <td class="e">PHP Data Objects Layer </td>
                <td class="v">Wez Furlong, Marcus Boerger, Sterling Hughes, George Schlossnagle, Ilia Alshanetsky </td>
            </tr>
            <tr>
                <td class="e">Output Handler </td>
                <td class="v">Zeev Suraski, Thies C. Arntzen, Marcus Boerger, Michael Wallner </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th colspan="2">SAPI Modules</th>
            </tr>
            <tr class="h">
                <th>Contribution</th>
                <th>Authors</th>
            </tr>
            <tr>
                <td class="e">AOLserver </td>
                <td class="v">Sascha Schumann </td>
            </tr>
            <tr>
                <td class="e">Apache 1.3 (apache_hooks) </td>
                <td class="v">Rasmus Lerdorf, Zeev Suraski, Stig Bakken, David Sklar, George Schlossnagle, Lukas Schroeder </td>
            </tr>
            <tr>
                <td class="e">Apache 1.3 </td>
                <td class="v">Rasmus Lerdorf, Zeev Suraski, Stig Bakken, David Sklar </td>
            </tr>
            <tr>
                <td class="e">Apache 2.0 Filter </td>
                <td class="v">Sascha Schumann, Aaron Bannert </td>
            </tr>
            <tr>
                <td class="e">Apache 2.0 Handler </td>
                <td class="v">Ian Holsman, Justin Erenkrantz (based on Apache 2.0 Filter code) </td>
            </tr>
            <tr>
                <td class="e">Caudium / Roxen </td>
                <td class="v">David Hedbor </td>
            </tr>
            <tr>
                <td class="e">CGI / FastCGI </td>
                <td class="v">Rasmus Lerdorf, Stig Bakken, Shane Caraveo, Dmitry Stogov </td>
            </tr>
            <tr>
                <td class="e">CLI </td>
                <td class="v">Edin Kadribasic, Marcus Boerger, Johannes Schlueter, Moriyoshi Koizumi, Xinchen Hui </td>
            </tr>
            <tr>
                <td class="e">Continuity </td>
                <td class="v">Alex Leigh (based on nsapi code) </td>
            </tr>
            <tr>
                <td class="e">Embed </td>
                <td class="v">Edin Kadribasic </td>
            </tr>
            <tr>
                <td class="e">FastCGI Process Manager </td>
                <td class="v">Andrei Nigmatulin, dreamcat4, Antony Dovgal, Jerome Loyet </td>
            </tr>
            <tr>
                <td class="e">ISAPI </td>
                <td class="v">Andi Gutmans, Zeev Suraski </td>
            </tr>
            <tr>
                <td class="e">litespeed </td>
                <td class="v">George Wang </td>
            </tr>
            <tr>
                <td class="e">NSAPI </td>
                <td class="v">Jayakumar Muthukumarasamy, Uwe Schindler </td>
            </tr>
            <tr>
                <td class="e">phpdbg </td>
                <td class="v">Felipe Pena, Joe Watkins, Bob Weinand </td>
            </tr>
            <tr>
                <td class="e">phttpd </td>
                <td class="v">Thies C. Arntzen </td>
            </tr>
            <tr>
                <td class="e">pi3web </td>
                <td class="v">Holger Zimmermann </td>
            </tr>
            <tr>
                <td class="e">Sendmail Milter </td>
                <td class="v">Harald Radi </td>
            </tr>
            <tr>
                <td class="e">thttpd </td>
                <td class="v">Sascha Schumann </td>
            </tr>
            <tr>
                <td class="e">tux </td>
                <td class="v">Sascha Schumann </td>
            </tr>
            <tr>
                <td class="e">WebJames </td>
                <td class="v">Alex Waugh </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th colspan="2">Module Authors</th>
            </tr>
            <tr class="h">
                <th>Module</th>
                <th>Authors</th>
            </tr>
            <tr>
                <td class="e">BC Math </td>
                <td class="v">Andi Gutmans </td>
            </tr>
            <tr>
                <td class="e">Bzip2 </td>
                <td class="v">Sterling Hughes </td>
            </tr>
            <tr>
                <td class="e">Calendar </td>
                <td class="v">Shane Caraveo, Colin Viebrock, Hartmut Holzgraefe, Wez Furlong </td>
            </tr>
            <tr>
                <td class="e">COM and .Net </td>
                <td class="v">Wez Furlong </td>
            </tr>
            <tr>
                <td class="e">ctype </td>
                <td class="v">Hartmut Holzgraefe </td>
            </tr>
            <tr>
                <td class="e">cURL </td>
                <td class="v">Sterling Hughes </td>
            </tr>
            <tr>
                <td class="e">Date/Time Support </td>
                <td class="v">Derick Rethans </td>
            </tr>
            <tr>
                <td class="e">DB-LIB (MS SQL, Sybase) </td>
                <td class="v">Wez Furlong, Frank M. Kromann </td>
            </tr>
            <tr>
                <td class="e">DBA </td>
                <td class="v">Sascha Schumann, Marcus Boerger </td>
            </tr>
            <tr>
                <td class="e">DOM </td>
                <td class="v">Christian Stocker, Rob Richards, Marcus Boerger </td>
            </tr>
            <tr>
                <td class="e">enchant </td>
                <td class="v">Pierre-Alain Joye, Ilia Alshanetsky </td>
            </tr>
            <tr>
                <td class="e">ereg </td>
                <td class="v">Rasmus Lerdorf, Jim Winstead, Jaakko Hyvätti </td>
            </tr>
            <tr>
                <td class="e">EXIF </td>
                <td class="v">Rasmus Lerdorf, Marcus Boerger </td>
            </tr>
            <tr>
                <td class="e">fileinfo </td>
                <td class="v">Ilia Alshanetsky, Pierre Alain Joye, Scott MacVicar, Derick Rethans </td>
            </tr>
            <tr>
                <td class="e">Firebird driver for PDO </td>
                <td class="v">Ard Biesheuvel </td>
            </tr>
            <tr>
                <td class="e">FTP </td>
                <td class="v">Stefan Esser, Andrew Skalski </td>
            </tr>
            <tr>
                <td class="e">GD imaging </td>
                <td class="v">Rasmus Lerdorf, Stig Bakken, Jim Winstead, Jouni Ahto, Ilia Alshanetsky, Pierre-Alain Joye, Marcus Boerger </td>
            </tr>
            <tr>
                <td class="e">GetText </td>
                <td class="v">Alex Plotnick </td>
            </tr>
            <tr>
                <td class="e">GNU GMP support </td>
                <td class="v">Stanislav Malyshev </td>
            </tr>
            <tr>
                <td class="e">Iconv </td>
                <td class="v">Rui Hirokawa, Stig Bakken, Moriyoshi Koizumi </td>
            </tr>
            <tr>
                <td class="e">IMAP </td>
                <td class="v">Rex Logan, Mark Musone, Brian Wang, Kaj-Michael Lang, Antoni Pamies Olive, Rasmus Lerdorf, Andrew Skalski, Chuck Hagenbuch, Daniel R Kalowsky </td>
            </tr>
            <tr>
                <td class="e">Input Filter </td>
                <td class="v">Rasmus Lerdorf, Derick Rethans, Pierre-Alain Joye, Ilia Alshanetsky </td>
            </tr>
            <tr>
                <td class="e">InterBase </td>
                <td class="v">Jouni Ahto, Andrew Avdeev, Ard Biesheuvel </td>
            </tr>
            <tr>
                <td class="e">Internationalization </td>
                <td class="v">Ed Batutis, Vladimir Iordanov, Dmitry Lakhtyuk, Stanislav Malyshev, Vadim Savchuk, Kirti Velankar </td>
            </tr>
            <tr>
                <td class="e">JSON </td>
                <td class="v">Omar Kilani, Scott MacVicar </td>
            </tr>
            <tr>
                <td class="e">LDAP </td>
                <td class="v">Amitay Isaacs, Eric Warnke, Rasmus Lerdorf, Gerrit Thomson, Stig Venaas </td>
            </tr>
            <tr>
                <td class="e">LIBXML </td>
                <td class="v">Christian Stocker, Rob Richards, Marcus Boerger, Wez Furlong, Shane Caraveo </td>
            </tr>
            <tr>
                <td class="e">mcrypt </td>
                <td class="v">Sascha Schumann, Derick Rethans </td>
            </tr>
            <tr>
                <td class="e">MS SQL </td>
                <td class="v">Frank M. Kromann </td>
            </tr>
            <tr>
                <td class="e">Multibyte String Functions </td>
                <td class="v">Tsukada Takuya, Rui Hirokawa </td>
            </tr>
            <tr>
                <td class="e">MySQL driver for PDO </td>
                <td class="v">George Schlossnagle, Wez Furlong, Ilia Alshanetsky, Johannes Schlueter </td>
            </tr>
            <tr>
                <td class="e">MySQL </td>
                <td class="v">Zeev Suraski, Zak Greant, Georg Richter, Andrey Hristov </td>
            </tr>
            <tr>
                <td class="e">MySQLi </td>
                <td class="v">Zak Greant, Georg Richter, Andrey Hristov, Ulf Wendel </td>
            </tr>
            <tr>
                <td class="e">MySQLnd </td>
                <td class="v">Andrey Hristov, Ulf Wendel, Georg Richter, Johannes Schlüter </td>
            </tr>
            <tr>
                <td class="e">OCI8 </td>
                <td class="v">Stig Bakken, Thies C. Arntzen, Andy Sautins, David Benson, Maxim Maletsky, Harald Radi, Antony Dovgal, Andi Gutmans, Wez Furlong, Christopher Jones, Oracle Corporation </td>
            </tr>
            <tr>
                <td class="e">ODBC driver for PDO </td>
                <td class="v">Wez Furlong </td>
            </tr>
            <tr>
                <td class="e">ODBC </td>
                <td class="v">Stig Bakken, Andreas Karajannis, Frank M. Kromann, Daniel R. Kalowsky </td>
            </tr>
            <tr>
                <td class="e">OpenSSL </td>
                <td class="v">Stig Venaas, Wez Furlong, Sascha Kettler, Scott MacVicar </td>
            </tr>
            <tr>
                <td class="e">Oracle (OCI) driver for PDO </td>
                <td class="v">Wez Furlong </td>
            </tr>
            <tr>
                <td class="e">pcntl </td>
                <td class="v">Jason Greene, Arnaud Le Blanc </td>
            </tr>
            <tr>
                <td class="e">Perl Compatible Regexps </td>
                <td class="v">Andrei Zmievski </td>
            </tr>
            <tr>
                <td class="e">PHP Archive </td>
                <td class="v">Gregory Beaver, Marcus Boerger </td>
            </tr>
            <tr>
                <td class="e">PHP Data Objects </td>
                <td class="v">Wez Furlong, Marcus Boerger, Sterling Hughes, George Schlossnagle, Ilia Alshanetsky </td>
            </tr>
            <tr>
                <td class="e">PHP hash </td>
                <td class="v">Sara Golemon, Rasmus Lerdorf, Stefan Esser, Michael Wallner, Scott MacVicar </td>
            </tr>
            <tr>
                <td class="e">Posix </td>
                <td class="v">Kristian Koehntopp </td>
            </tr>
            <tr>
                <td class="e">PostgreSQL driver for PDO </td>
                <td class="v">Edin Kadribasic, Ilia Alshanetsky </td>
            </tr>
            <tr>
                <td class="e">PostgreSQL </td>
                <td class="v">Jouni Ahto, Zeev Suraski, Yasuo Ohgaki, Chris Kings-Lynne </td>
            </tr>
            <tr>
                <td class="e">Pspell </td>
                <td class="v">Vlad Krupin </td>
            </tr>
            <tr>
                <td class="e">Readline </td>
                <td class="v">Thies C. Arntzen </td>
            </tr>
            <tr>
                <td class="e">Recode </td>
                <td class="v">Kristian Koehntopp </td>
            </tr>
            <tr>
                <td class="e">Reflection </td>
                <td class="v">Marcus Boerger, Timm Friebe, George Schlossnagle, Andrei Zmievski, Johannes Schlueter </td>
            </tr>
            <tr>
                <td class="e">Sessions </td>
                <td class="v">Sascha Schumann, Andrei Zmievski </td>
            </tr>
            <tr>
                <td class="e">Shared Memory Operations </td>
                <td class="v">Slava Poliakov, Ilia Alshanetsky </td>
            </tr>
            <tr>
                <td class="e">SimpleXML </td>
                <td class="v">Sterling Hughes, Marcus Boerger, Rob Richards </td>
            </tr>
            <tr>
                <td class="e">SNMP </td>
                <td class="v">Rasmus Lerdorf, Harrie Hazewinkel, Mike Jackson, Steven Lawrance, Johann Hanne, Boris Lytochkin </td>
            </tr>
            <tr>
                <td class="e">SOAP </td>
                <td class="v">Brad Lafountain, Shane Caraveo, Dmitry Stogov </td>
            </tr>
            <tr>
                <td class="e">Sockets </td>
                <td class="v">Chris Vandomelen, Sterling Hughes, Daniel Beulshausen, Jason Greene </td>
            </tr>
            <tr>
                <td class="e">SPL </td>
                <td class="v">Marcus Boerger, Etienne Kneuss </td>
            </tr>
            <tr>
                <td class="e">SQLite 3.x driver for PDO </td>
                <td class="v">Wez Furlong </td>
            </tr>
            <tr>
                <td class="e">SQLite3 </td>
                <td class="v">Scott MacVicar, Ilia Alshanetsky, Brad Dewar </td>
            </tr>
            <tr>
                <td class="e">Sybase-CT </td>
                <td class="v">Zeev Suraski, Tom May, Timm Friebe </td>
            </tr>
            <tr>
                <td class="e">System V Message based IPC </td>
                <td class="v">Wez Furlong </td>
            </tr>
            <tr>
                <td class="e">System V Semaphores </td>
                <td class="v">Tom May </td>
            </tr>
            <tr>
                <td class="e">System V Shared Memory </td>
                <td class="v">Christian Cartus </td>
            </tr>
            <tr>
                <td class="e">tidy </td>
                <td class="v">John Coggeshall, Ilia Alshanetsky </td>
            </tr>
            <tr>
                <td class="e">tokenizer </td>
                <td class="v">Andrei Zmievski, Johannes Schlueter </td>
            </tr>
            <tr>
                <td class="e">WDDX </td>
                <td class="v">Andrei Zmievski </td>
            </tr>
            <tr>
                <td class="e">XML </td>
                <td class="v">Stig Bakken, Thies C. Arntzen, Sterling Hughes </td>
            </tr>
            <tr>
                <td class="e">XMLReader </td>
                <td class="v">Rob Richards </td>
            </tr>
            <tr>
                <td class="e">xmlrpc </td>
                <td class="v">Dan Libby </td>
            </tr>
            <tr>
                <td class="e">XMLWriter </td>
                <td class="v">Rob Richards, Pierre-Alain Joye </td>
            </tr>
            <tr>
                <td class="e">XSL </td>
                <td class="v">Christian Stocker, Rob Richards </td>
            </tr>
            <tr>
                <td class="e">Zip </td>
                <td class="v">Pierre-Alain Joye, Remi Collet </td>
            </tr>
            <tr>
                <td class="e">Zlib </td>
                <td class="v">Rasmus Lerdorf, Stefan Roehrich, Zeev Suraski, Jade Nicoletti, Michael Wallner </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th colspan="2">PHP Documentation</th>
            </tr>
            <tr>
                <td class="e">Authors </td>
                <td class="v">Mehdi Achour, Friedhelm Betz, Antony Dovgal, Nuno Lopes, Hannes Magnusson, Georg Richter, Damien Seguy, Jakub Vrana, Adam Harvey, Peter Cowburn </td>
            </tr>
            <tr>
                <td class="e">Editor </td>
                <td class="v">Philip Olson </td>
            </tr>
            <tr>
                <td class="e">User Note Maintainers </td>
                <td class="v">Daniel P. Brown, Thiago Henrique Pojda </td>
            </tr>
            <tr>
                <td class="e">Other Contributors </td>
                <td class="v">Previously active authors, editors and other contributors are listed in the manual. </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th>PHP Quality Assurance Team</th>
            </tr>
            <tr>
                <td class="e">Ilia Alshanetsky, Joerg Behrens, Antony Dovgal, Stefan Esser, Moriyoshi Koizumi, Magnus Maatta, Sebastian Nohn, Derick Rethans, Melvyn Sopacua, Jani Taskinen, Pierre-Alain Joye, Dmitry Stogov, Felipe Pena, David Soria Parra, Stanislav Malyshev, Julien Pauli, Stephen Zarkos, Anatol Belski, Remi Collet, Ferenc Kovacs </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th colspan="2">Websites and Infrastructure team</th>
            </tr>
            <tr>
                <td class="e">PHP Websites Team </td>
                <td class="v">Rasmus Lerdorf, Hannes Magnusson, Philip Olson, Lukas Kahwe Smith, Pierre-Alain Joye, Kalle Sommer Nielsen, Peter Cowburn, Adam Harvey, Ferenc Kovacs, Levi Morrison </td>
            </tr>
            <tr>
                <td class="e">Event Maintainers </td>
                <td class="v">Damien Seguy, Daniel P. Brown </td>
            </tr>
            <tr>
                <td class="e">Network Infrastructure </td>
                <td class="v">Daniel P. Brown </td>
            </tr>
            <tr>
                <td class="e">Windows Infrastructure </td>
                <td class="v">Alex Schoenmaker </td>
            </tr>
        </table>
        <table>
            <tr class="h">
                <th colspan="1">Debian Packaging</th>
            </tr>
            <tr>
                <td class="e"><a href="https://deb.sury.org">DEB.SURY.ORG</a>, an Ondřej Surý project</td>
            </tr>
        </table>
        <h2>PHP License</h2>
        <table>
            <tr class="v">
                <td>
                    <p>
                        This program is free software; you can redistribute it and/or modify it under the terms of the PHP License as published by the PHP Group and included in the distribution in the file: LICENSE
                    </p>
                    <p>This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
                    </p>
                    <p>If you did not receive a copy of the PHP license, or have any questions about PHP licensing, please contact license@php.net.
                    </p>
                </td>
            </tr>
        </table>

     -->

    </div>
</body>

</html>