<?
    error_reporting(E_ALL ^ E_NOTICE);
    ini_set('display_errors', TRUE);

    $status = $_SERVER['REDIRECT_STATUS'];
    $codes = array(
        400 => array('401 Unauthorized', ''),
        401 => array('402 Payment Required', ''),
        403 => array('403 Forbidden', ''),
        404 => array('404 Not Found', ''),
        405 => array('405 Method Not Allowed', ''),
        406 => array('406 Not Acceptable', ''),
        408 => array('408 Request Timeout', ''),
        409 => array('409 Conflict', ''),
        413 => array('413 Request Entity Too Large', ''),
        414 => array('414 Request-URI Too Large', ''),
        500 => array('500 Internal Server Error', ''),
        500 => array('501 Not Implemented', ''),
        502 => array('502 Bad Gateway', ''),
        504 => array('504 Gateway Timeout', ''),
    );

    $title = $codes[$status][0];
    $message = $codes[$status][1];
    if ($title == false || strlen($status) != 3) {
        $message = 'Please supply a valid status code.';
    }
?>
<!doctype html>
<!--

         ______                                                ___                    __       _
        /\  _  \                                              /\_ \                  /\ \__  /'_`\
        \ \ \L\ \  _ __    __       __  __    ___   __  __    \//\ \     ___     ____\ \ ,_\/\_\/\`\
         \ \  __ \/\`'__\/'__`\    /\ \/\ \  / __`\/\ \/\ \     \ \ \   / __`\  /',__\\ \ \/\/_//'/'
          \ \ \/\ \ \ \//\  __/    \ \ \_\ \/\ \L\ \ \ \_\ \     \_\ \_/\ \L\ \/\__, `\\ \ \_  /\_\
           \ \_\ \_\ \_\\ \____\    \/`____ \ \____/\ \____/     /\____\ \____/\/\____/ \ \__\ \/\_\
            \/_/\/_/\/_/ \/____/     `/___/> \/___/  \/___/      \/____/\/___/  \/___/   \/__/  \/_/
                                        /\___/
                                        \/__/

-->
<html lang="en" itemscope itemtype="http://schema.org/">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="index, follow, noarchive"/>
        <meta name="author" content="Guilherme Pangnotta - http://setetres.st/"/>
        <meta name="keywords" content="guilherme pangnotta, portfolio, web, developer, designer, 73, belo horizonte, brasil, interfaces, front-end, desenvolvedor, client-side, setetres"/>

        <title>Ops <?=$title?> &#8212; Sete Três</title>
        <meta name="description" content="<?=$title?>. What are you doing here?"/>
<? if(stripos($_SERVER['HTTP_HOST'],"www.")!==false){?>     <link rel="canonical" href="http://<?=str_replace("www.","",$_SERVER['HTTP_HOST']).(isset($_SERVER["REQUEST_URI"]) ? $_SERVER["REQUEST_URI"] : "");?>"/>
<?  }?>

        <meta itemprop="name" content="Ops <?=$title?> &#8212; Sete Três"/>
        <meta itemprop="description" content="<?=$title?>. What are you doing here?"/>
        <meta itemprop="image" content="http://v1.setetres.st/img/facebook.png"/>
        <meta itemprop="url" content="http://v1.setetres.st/"/>

        <link rel="icon" href="/favicon.ico"/>
        <link rel="stylesheet" href="/css/main.css"/>

        <script src="/js/modernizr-2.5.3.js"></script>
    </head>
    <body class="error">
        <div class="kept">
            <p>Discontinued Page  &#8212; Historical only. Looking for new stuff? Go to <a href="http://setetres.st" target="_top">setetres.st</a></p>
        </div>
        <div class="grid"></div>
        <div class="dots"></div>
        <div id="wr">
            <header>
                <nav role="navigation">
                    <ul>
                        <li title="Back"><a href="/">73</a></li>
                    </ul>
                </nav>
            </header>
            <section id="error">
                <h2><?=$status?>!</h2>
                <p><?=$title?><br/>What are you doing here?</p>
            </section>
            <footer>
                <h6>
                    This obra is licensed under a <a href="http://creativecommons.org/licenses/by/3.0" rel="external">Creative Commons Attribution 3.0 Unported License</a>.
                    Proudly Hosted by <a href="http://mediatemple.net" rel="external">Media Temple</a>.
                </h6>
            </footer>
        </div>
        <audio id="audio-click" preload="auto">
            <source src="/inc/audio-click.mp3"/>
            <source src="/inc/audio-click.ogg"/>
        </audio>
        <script src="/js/jquery-1.8.3.js"></script>
        <script src="/js/plugins-error.js"></script>
        <script type="text/javascript">
            $(function(){$('a[rel=external]').attr('target','_blank');$('li').tooltip({track:true,delay:0,showURL:false,showBody:' - ',fade:200});$('nav ul li a').mouseenter(function(){$('#audio-click')[0].play()});});jQuery(function($){$.supersized({slides:[{image:'/img/bg-404.gif'}]});});
        </script>
        <script src="http://file.setetres.st/inc/discontinued-page.js"></script>
<? include("../inc/analytics.php");?>
        <!--

          __ __     __       _____   __          __   __   ____
         _\ \\ \__ /\ \     /\  __`\/\ \        /\ \ /\ \ /\  _`\
        /\__  _  _\\ \ \    \ \ \/\ \ \ \       \ `\`\/'/'\ \ \/\ \
        \/_L\ \\ \L_\ \ \  __\ \ \ \ \ \ \  __   `\/ > <   \ \ \ \ \
          /\_   _  _\\ \ \L\ \\ \ \_\ \ \ \L\ \     \/'/\`\ \ \ \_\ \
          \/_/\_\\_\/ \ \____/ \ \_____\ \____/     /\_\\ \_\\ \____/
             \/_//_/   \/___/   \/_____/\/___/      \/_/ \/_/ \/___/

        -->
    </body>
</html>