<?php
    error_reporting(E_ALL ^ E_NOTICE);
    ini_set('display_errors', FALSE);
?>
<!doctype html>
<!--

         __  __                                                     ___                                           __
        /\ \/\ \                                                  /'___\                                         /\ \
        \ \ `\\ \    ___         ____    ___   __  __  _____     /\ \__/  ___   _ __       __  __    ___   __  __\ \ \
         \ \ , ` \  / __`\      /',__\  / __`\/\ \/\ \/\ '__`\   \ \ ,__\/ __`\/\`'__\    /\ \/\ \  / __`\/\ \/\ \\ \ \
          \ \ \`\ \/\ \L\ \    /\__, `\/\ \L\ \ \ \_\ \ \ \L\ \   \ \ \_/\ \L\ \ \ \/     \ \ \_\ \/\ \L\ \ \ \_\ \\ \_\
           \ \_\ \_\ \____/    \/\____/\ \____/\ \____/\ \ ,__/    \ \_\\ \____/\ \_\      \/`____ \ \____/\ \____/ \/\_\
            \/_/\/_/\/___/      \/___/  \/___/  \/___/  \ \ \/      \/_/ \/___/  \/_/       `/___/> \/___/  \/___/   \/_/
                                                         \ \_\                                 /\___/
                                                          \/_/                                 \/__/

-->
<html lang="en" itemscope itemtype="http://schema.org/">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="index, follow, noarchive"/>
        <meta name="author" content="Guilherme Pangnotta - http://setetres.st/"/>
        <meta name="keywords" content="guilherme pangnotta, portfolio, web, developer, designer, 73, belo horizonte, brasil, interfaces, front-end, desenvolvedor, client-side, setetres"/>

        <title>Please upgrade to a modern browser &#8212; Sete Três</title>
        <meta name="description" content="Your browser is no longer supported. Please upgrade to a modern browser."/>
<? if(stripos($_SERVER['HTTP_HOST'],"www.")!==false){?>     <link rel="canonical" href="http://<?=str_replace("www.","",$_SERVER['HTTP_HOST']).(isset($_SERVER["REQUEST_URI"]) ? $_SERVER["REQUEST_URI"] : "");?>"/>
<?  }?>

        <meta itemprop="name" content="Please upgrade to a modern browser &#8212; Sete Três"/>
        <meta itemprop="description" content="Your browser is no longer supported. Please upgrade to a modern browser."/>
        <meta itemprop="image" content="http://v1.setetres.st/img/facebook.png"/>
        <meta itemprop="url" content="http://v1.setetres.st/"/>

        <link rel="icon" href="/favicon.ico"/>
        <link rel="stylesheet" href="/css/main.css"/>

        <script src="/js/modernizr-2.5.3.js"></script>
    </head>
    <body class="error">
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
                <h2>Ouch!</h2>
                <p>Your browser is no longer supported.<br/>Please upgrade to a modern browser.</p>
                <nav>
                    <ul>
                        <li title="Chrome"><a href="http://google.com/chrome" rel="external">Ch</a></li>
                        <li title="Internet Explorer"><a href="http://internetexplorer9.com" rel="external">Ie</a></li>
                        <li title="Firefox"><a href="http://mozilla.com/firefox" rel="external">Ff</a></li>
                        <li title="Safari"><a href="http://apple.com/safari" rel="external">Sf</a></li>
                    </ul>
                </nav>
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
            $(function(){$('a[rel=external]').attr('target','_blank');$('li').tooltip({track:true,delay:0,showURL:false,showBody:' - ',fade:200});$('nav ul li a').mouseenter(function(){$('#audio-click')[0].play()});});jQuery(function($){$.supersized({slides:[{image:'/img/bg-get.gif'}]});});
        </script>
        <script src="http://files.setetres.st/js/discontinued-page.js"></script>
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