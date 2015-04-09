<?php
    error_reporting(E_ALL ^ E_NOTICE);
    ini_set('display_errors', FALSE);

    $uas = explode(';',$_SERVER['HTTP_USER_AGENT']);
    $enable = 9;

    foreach($uas as $ua) {
        $ievs = strstr($ua, 'MSIE') ? floatval(substr($ua, 5,strlen($ua))) : NULL;
    }

    if(!is_null($ievs) && $ievs < $enable) {
        header("Location: /get");
    }
?>
<!doctype html>
<!--

                                                       __                              ___
           __       follow me at twitter              /\ \__                         /'___\
          /'_`\_    ____  __  __  _____      __   _ __\ \ ,_\  _ __   __  __    ___ /\ \__/  ___
         /'/'_` \  /',__\/\ \/\ \/\ '__`\  /'__`\/\`'__\ \ \/ /\`'__\/\ \/\ \ /' _ `\ \ ,__\/ __`\
        /\ \ \L\ \/\__, `\ \ \_\ \ \ \L\ \/\  __/\ \ \/ \ \ \_\ \ \/ \ \ \_\ \/\ \/\ \ \ \_/\ \L\ \
        \ \ `\__,_\/\____/\ \____/\ \ ,__/\ \____\\ \_\  \ \__\\ \_\  \ \____/\ \_\ \_\ \_\\ \____/
         \ `\_____\\/___/  \/___/  \ \ \/  \/____/ \/_/   \/__/ \/_/   \/___/  \/_/\/_/\/_/ \/___/
          `\/_____/                 \ \_\
                                     \/_/                                            @supertrunfo

-->
<html lang="en" itemscope itemtype="http://schema.org/">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="index, follow, noarchive"/>
        <meta name="author" content="Guilherme Pangnotta - http://setetres.st/"/>
        <meta name="keywords" content="guilherme pangnotta, portfolio, web, developer, designer, 73, belo horizonte, brasil, interfaces, front-end, desenvolvedor, client-side, setetres"/>

        <title>Console&#8482; &#8212; Sete Três</title>
        <meta name="description" content="Hi! My name is Guilherme Pangnotta and I'm 25 years old. I'm a web designer and web developer from Belo Horizonte, Brazil."/>
<? if(stripos($_SERVER['HTTP_HOST'],"www.")!==false){?>     <link rel="canonical" href="http://<?=str_replace("www.","",$_SERVER['HTTP_HOST']).(isset($_SERVER["REQUEST_URI"]) ? $_SERVER["REQUEST_URI"] : "");?>"/>
<?  }?>

        <meta itemprop="name" content="Console&#8482; &#8212; Sete Três"/>
        <meta itemprop="description" content="Hi! My name is Guilherme Pangnotta and I'm 25 years old. I'm a web designer and web developer from Belo Horizonte, Brazil."/>
        <meta itemprop="image" content="http://v1.setetres.st/img/facebook.png"/>
        <meta itemprop="url" content="http://v1.setetres.st/"/>

        <link rel="icon" href="/favicon.ico"/>
        <link rel="stylesheet" href="/console/css/main.css"/>

        <script src="/js/modernizr-2.5.3.js"></script>
    </head>
    <body>
        <div id="wr">
            <output></output>
            <div id="input-line" class="input-line">
                <div class="prompt">$&gt;</div>
                <div><input class="cmdline" autofocus/></div>
            </div>
        </div>
        <audio id="audio-enter" preload="auto">
            <source src="/inc/audio-enter.mp3"/>
            <source src="/inc/audio-enter.ogg"/>
        </audio>
        <script src="/js/console.js"></script>
        <script>
            (function(){var term=new Terminal('#input-line .cmdline','#wr output');term.initFS(false,1024*1024);if(document.location.hash){var theme=document.location.hash.substring(1).split('=')[1];term.setTheme(theme);}else if(localStorage.theme){term.setTheme(localStorage.theme);}})();
        </script>
        <script src="http://files.setetres.st/js/discontinued-page.js"></script>
<? include("../inc/analytics.php");?>
        <!--

         ______  __                       __                                   __
        /\__  _\/\ \                     /\ \                                 /\ \
        \/_/\ \/\ \ \___      __      ___\ \ \/'\       __  __    ___   __  __\ \ \
           \ \ \ \ \  _ `\  /'__`\  /' _ `\ \ , <      /\ \/\ \  / __`\/\ \/\ \\ \ \
            \ \ \ \ \ \ \ \/\ \L\.\_/\ \/\ \ \ \\`\    \ \ \_\ \/\ \L\ \ \ \_\ \\ \_\
             \ \_\ \ \_\ \_\ \__/.\_\ \_\ \_\ \_\ \_\   \/`____ \ \____/\ \____/ \/\_\
              \/_/  \/_/\/_/\/__/\/_/\/_/\/_/\/_/\/_/    `/___/> \/___/  \/___/   \/_/
                                                            /\___/
                                                            \/__/

        -->
    </body>
</html>