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

        <title>Selected works from Guilherme Pangnotta &#8212; Sete Três</title>
        <meta name="description" content="Hi! My name is Guilherme Pangnotta and I'm 25 years old. I'm a web designer and web developer from Belo Horizonte, Brazil."/>
<? if(stripos($_SERVER['HTTP_HOST'],"www.")!==false){?>     <link rel="canonical" href="http://<?=str_replace("www.","",$_SERVER['HTTP_HOST']).(isset($_SERVER["REQUEST_URI"]) ? $_SERVER["REQUEST_URI"] : "");?>"/>
<?  }?>

        <meta itemprop="name" content="Selected works from Guilherme Pangnotta &#8212; Sete Três"/>
        <meta itemprop="description" content="Hi! My name is Guilherme Pangnotta and I'm 25 years old. I'm a web designer and web developer from Belo Horizonte, Brazil."/>
        <meta itemprop="image" content="http://v1.setetres.st/img/facebook.png"/>
        <meta itemprop="url" content="http://v1.setetres.st/"/>

        <link rel="icon" href="/favicon.ico"/>
        <link rel="stylesheet" href="/css/main.css"/>

        <script src="/js/modernizr-2.5.3.js"></script>
    </head>
    <body onLoad="init()">
        <div id="load">
            <span class="bar">
                <img src="/img/loading.gif" width="27" height="27" alt="Loading"/>
            </span>
            <p><?
                $num = Rand (1,7);
                switch ($num)
                {
                    case 1:
                    echo "Loading entire website. It's not THAT bad, right? :)";
                    break;
                    case 2:
                    echo "Loading. Please wait.";
                    break;
                    case 3:
                    echo "Easy, cowboy... Easy...";
                    break;
                    case 4:
                    echo "Hey Mr. Rushie Rushie, why the hurry?";
                    break;
                    case 5:
                    echo "Today we wait. Tomorrow... Well, tomorrow is another day.";
                    break;
                    case 6:
                    echo "Just a few more seconds...";
                    break;
                    case 7:
                    echo "A pregnant woman wait 9 months! You can wait this...";
            }?></p>
        </div>
        <section id="console">
            <iframe src="/console" id="iframe"></iframe>
        </section>
        <div id="wr">
            <header>
                <h1 class="title">
                    <a href="/" title="Hello!"><canvas id="baloff" width="181" height="168"></canvas></a>
                </h1>
                <nav role="navigation">
                    <ul>
                        <li title="About"><a href="#!/about" id="mn-about"><span>1</span><span class="icon"></span></a></li>
                        <li title="Works"><a href="#!/works" id="mn-works">2</a></li>
                        <li title="Extras"><a href="#!/extras" id="mn-extras">3</a></li>
                        <li title="Awards"><a href="#!/awards" id="mn-awards">4</a></li>
                    </ul>
                </nav>
            </header>
            <section id="about">
                <h2>
                    About
                    <a href="/" class="close" id="close-about" title="Close">Close</a>
                </h2>
                <div class="info">
                    <h3>Hi!</h3>
                    <p>My name is Guilherme Pangnotta and I'm 25 years old.<br/>I'm a web designer and web developer from Belo Horizonte, Brazil.<br/>Want more? <a href="mailto:oi@setetres.st">Send me an email</a> or use the Console&#8482;.&nbsp;&nbsp;&nbsp;:)</p>
                </div>
                <nav>
                    <ul>
                        <li title="Console&#8482;"><a href="#!/console" id="mn-console">Co</a></li>
                        <li title="Stream &#8212; Powered by Tumblr"><a href="http://stream.setetres.st" id="mn-tumblr" rel="external">St</a></li>
                        <li title="Facebook"><a href="http://facebook.com/supertrunfo" id="mn-facebook" rel="external">Fb</a></li>
                        <li title="Foursquare"><a href="http://foursquare.com/supertrunfo" id="mn-foursquare" rel="external">Fs</a></li>
                        <li title="Google"><a href="http://profiles.google.com/setetres" id="mn-google" rel="external">Go</a></li>
                        <li title="Robo.to"><a href="http://robo.to/select" id="mn-roboto" rel="external">Rb</a></li>
                        <li title="Twitter"><a href="http://twitter.com/supertrunfo" id="mn-twitter" rel="external">Tw</a></li>
                        <li title="Vimeo"><a href="http://vimeo.com/select" id="mn-vimeo" rel="external">Vm</a></li>
                        <li title="Youtube"><a href="http://youtube.com/setetrespontost" id="mn-youtube" rel="external">Yt</a></li>
                        <li title="Share" class="null">
                            <div id="facebook" data-url="http://setetres.st/" data-text="Selected works from Guilherme Pangnotta &#8212; Sete Três" data-title="f"></div>
                        </li>
                        <li title="Tweet" class="null">
                            <div id="twitter" data-url="http://setetres.st/" data-text="Selected works from Guilherme Pangnotta &#8212; Sete Três" data-title="t"></div>
                        </li>
                        <li title="PUTA.nu"><a href="http://puta.nu" id="mn-puta" rel="external">Pu</a></li>
                        <li title="Don't click!"><a href="http://facebook.com/setetres.st" id="mn-dontclick" rel="external">Fb</a></li>
                    </ul>
                </nav>
            </section>
            <!-- <section id="instagram">
                <div class="instagram">
                    <h1>
                        <span id="pages" title="Instagram Photostrips"></span>
                        <span>Ig</span>
                        <span class="txt">follow me at instagram<br/><a href="http://instagr.am/setetres" rel="external">setetres</a></span>
                    </h1>
                    <div id="instagram-hold"></div>
                </div>
            </section> -->
            <section id="extras">
                <h2>
                    Extras
                    <a href="/" class="close" id="close-extras" title="Close">Close</a>
                </h2>
                <div class="slider" id="scroll-extras">
                    <div class="handle">
                        <ul class="scroller">
                            <li>
                                <img src="/img/portfolio/extra-01.jpg" width="610" height="100" alt="Balöff #1"/>
                                <div class="info">
                                    <h3>Balöff #1</h3>
                                    <p>
                                        Wallpaper<br/>
                                        Resolutions:
                                        <a href="/extras/wallpaper-01-320x480.zip" title="320x480 (iPhone)">01</a> &#8226;
                                        <a href="/extras/wallpaper-01-1024x768.zip" title="1024x768">02</a> &#8226;
                                        <a href="/extras/wallpaper-01-1280x1024.zip" title="1280x1024">03</a> &#8226;
                                        <a href="/extras/wallpaper-01-1680x1050.zip" title="1680x1050">04</a> &#8226;
                                        <a href="/extras/wallpaper-01-1920x1200.zip" title="1920x1200">05</a> &#8226;
                                        <a href="/extras/wallpaper-01-2560x1024.zip" title="2560x1024 (Dual)">06</a><br/>
                                        by <a href="http://filippocomini.com" rel="external">Filippo Comini</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <img src="/img/portfolio/extra-02.jpg" width="610" height="100" alt="Balöff #2"/>
                                <div class="info">
                                    <h3>Balöff #2</h3>
                                    <p>
                                        Wallpaper<br/>
                                        Resolutions:
                                        <a href="/extras/wallpaper-02-320x480.zip" title="320x480 (iPhone)">01</a> &#8226;
                                        <a href="/extras/wallpaper-02-1024x768.zip" title="1024x768">02</a> &#8226;
                                        <a href="/extras/wallpaper-02-1280x1024.zip" title="1280x1024">03</a> &#8226;
                                        <a href="/extras/wallpaper-02-1680x1050.zip" title="1680x1050">04</a> &#8226;
                                        <a href="/extras/wallpaper-02-1920x1200.zip" title="1920x1200">05</a> &#8226;
                                        <a href="/extras/wallpaper-02-2560x1024.zip" title="2560x1024 (Dual)">06</a><br/>
                                        by <a href="http://filippocomini.com" rel="external">Filippo Comini</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section id="awards">
                <h2>
                    Awards
                    <a href="/" class="close" id="close-awards" title="Close">Close</a>
                </h2>
                <div class="slider" id="scroll-awards">
                    <div class="handle">
                        <ul class="scroller">
                            <li><img src="/img/portfolio/award-01.jpg" width="610" height="461" alt="Awwwards / Site of the Day"/></li>
                            <li><img src="/img/portfolio/award-02.jpg" width="610" height="461" alt="CSS Awards / Site of the Day"/></li>
                            <li><img src="/img/portfolio/award-03.jpg" width="610" height="461" alt="Design Taxi / Site of the Day"/></li>
                            <li><img src="/img/portfolio/award-04.jpg" width="610" height="461" alt="CSS Manía"/></li>
                            <li><img src="/img/portfolio/award-05.jpg" width="610" height="461" alt="Design Shack"/></li>
                            <li><img src="/img/portfolio/award-06.jpg" width="610" height="461" alt="CSS Design Awards / Nominee"/></li>
                            <li><img src="/img/portfolio/award-07.jpg" width="610" height="461" alt="Art Spire"/></li>
                            <li><img src="/img/portfolio/award-08.jpg" width="610" height="461" alt="Inspired Mag"/></li>
                            <li><img src="/img/portfolio/award-09.jpg" width="610" height="461" alt="Top Design Mag"/></li>
                            <li><img src="/img/portfolio/award-10.jpg" width="610" height="461" alt="Best About Pages"/></li>
                            <li><img src="/img/portfolio/award-11.jpg" width="610" height="461" alt="Designer Union"/></li>
                            <li><img src="/img/portfolio/award-12.jpg" width="610" height="461" alt="Design in a Box"/></li>
                            <li><img src="/img/portfolio/award-13.jpg" width="610" height="461" alt="Graphic Design Junction"/></li>
                            <li><img src="/img/portfolio/award-14.jpg" width="610" height="461" alt="Web Design Inspiration"/></li>
                            <li><img src="/img/portfolio/award-15.jpg" width="610" height="461" alt="Acreno Mag"/></li>
                            <li><img src="/img/portfolio/award-16.jpg" width="610" height="461" alt="Web Design Habits"/></li>
                            <li><img src="/img/portfolio/award-17.jpg" width="610" height="461" alt="Straightline Bookmark"/></li>
                            <li><img src="/img/portfolio/award-18.jpg" width="610" height="461" alt="Web Rockets"/></li>
                            <li><img src="/img/portfolio/award-19.jpg" width="610" height="461" alt="Design You Trust"/></li>
                            <li><img src="/img/portfolio/award-20.jpg" width="610" height="461" alt="Brand Studio"/></li>
                            <li><img src="/img/portfolio/award-21.jpg" width="610" height="461" alt="Graphic Swing"/></li>
                            <li><img src="/img/portfolio/award-22.jpg" width="610" height="461" alt="Blog du Webdesign"/></li>
                            <li><img src="/img/portfolio/award-23.jpg" width="610" height="461" alt="Daily Inspiration"/></li>
                            <li><img src="/img/portfolio/award-24.jpg" width="610" height="461" alt="Free CSS Showcase"/></li>
                            <li><img src="/img/portfolio/award-25.jpg" width="610" height="461" alt="The FWA / Public Shortlist"/></li>
                            <li><img src="/img/portfolio/award-26.jpg" width="610" height="461" alt="IDesignNow"/></li>
                            <li><img src="/img/portfolio/award-27.jpg" width="610" height="461" alt="Top Design Mag"/></li>
                            <li><img src="/img/portfolio/award-28.jpg" width="610" height="461" alt="Awwwwards"/></li>
                            <li><img src="/img/portfolio/award-29.jpg" width="610" height="461" alt="Awwwwards"/></li>
                            <li><img src="/img/portfolio/award-30.jpg" width="610" height="461" alt="Web courses Bangkok"/></li>
                            <li><img src="/img/portfolio/award-31.jpg" width="610" height="461" alt="Bashooka"/></li>
                            <li><img src="/img/portfolio/award-32.jpg" width="610" height="461" alt="CSS Winner"/></li>
                            <li><img src="/img/portfolio/award-33.jpg" width="610" height="461" alt="2cweb"/></li>
                            <li><img src="/img/portfolio/award-34.jpg" width="610" height="461" alt="Post Design"/></li>
                            <li><img src="/img/portfolio/award-35.jpg" width="610" height="461" alt="Tech Blog"/></li>
                            <li><img src="/img/portfolio/award-36.jpg" width="610" height="461" alt="Publiminas"/></li>
                            <li><img src="/img/portfolio/award-37.jpg" width="610" height="461" alt="Abduzeedo"/></li>
                            <li><img src="/img/portfolio/award-38.jpg" width="610" height="461" alt="Inspiredology"/></li>
                            <li><img src="/img/portfolio/award-39.jpg" width="610" height="461" alt="Designerves"/></li>
                            <li><img src="/img/portfolio/award-40.jpg" width="610" height="461" alt="Web Drool"/></li>
                            <li><img src="/img/portfolio/award-41.jpg" width="610" height="461" alt="Design Your Way"/></li>
                            <li><img src="/img/portfolio/award-42.jpg" width="610" height="461" alt="Design Superstars"/></li>
                            <li><img src="/img/portfolio/award-43.jpg" width="610" height="461" alt="Template Monster Blog"/></li>
                        </ul>
                    </div>
                    <div class="info">
                        <h3>Awards</h3>
                        <p>To be here, on these websites, it's already an award to me. I've got no words to describe.</p>
                        <p>Thanks to all of you!</p>
                    </div>
                </div>
            </section>
            <section id="works">
                <h2>
                    Works
                    <a href="/" class="close" id="close-works" title="Close">Close</a>
                </h2>
                <div class="slider" id="scroll-unibh">
                    <div class="handle">
                        <ul class="scroller">
                            <li><img src="/img/portfolio/web-unibh-01.jpg" width="610" height="461" alt="UniBH / Website"/></li>
                            <li><img src="/img/portfolio/web-unibh-02.jpg" width="610" height="461" alt="UniBH / Website"/></li>
                            <li><img src="/img/portfolio/web-unibh-03.jpg" width="610" height="461" alt="UniBH / Website"/></li>
                            <li><img src="/img/portfolio/web-unibh-04.jpg" width="610" height="461" alt="UniBH / Website"/></li>
                            <li><img src="/img/portfolio/web-unibh-05.jpg" width="610" height="461" alt="UniBH / Website"/></li>
                            <li><img src="/img/portfolio/web-unibh-06.jpg" width="610" height="461" alt="UniBH / Website"/></li>
                        </ul>
                    </div>
                    <div class="info">
                        <h3>UniBH</h3>
                        <p>Website<br/>HTML + CSS + Javascript</p>
                        <p>for <a href="http://jchebly.com.br" rel="external">JCHEBLY</a></p>
                    </div>
                </div>
                <div class="slider" id="scroll-grum">
                    <div class="handle">
                        <ul class="scroller">
                            <li><img src="/img/portfolio/web-grum-01.jpg" width="610" height="461" alt="Grüm / Hotsite"/></li>
                            <li><img src="/img/portfolio/web-grum-02.jpg" width="610" height="461" alt="Grüm / Hotsite"/></li>
                            <li><img src="/img/portfolio/web-grum-03.jpg" width="610" height="461" alt="Grüm / Hotsite"/></li>

                        </ul>
                    </div>
                    <div class="info">
                        <h3>Grüm</h3>
                        <p>Hotsite<br/>HTML + CSS + Javascript</p>
                        <p>for <a href="http://setetres.st" rel="external">Sete Três</a></p>
                    </div>
                </div>
                <div class="slider" id="scroll-blackmarlin">
                    <div class="handle">
                        <ul class="scroller">
                            <li><img src="/img/portfolio/web-blackmarlin-01.jpg" width="610" height="461" alt="Black Marlin / Website"/></li>
                            <li><img src="/img/portfolio/web-blackmarlin-02.jpg" width="610" height="461" alt="Black Marlin / Website"/></li>
                            <li><img src="/img/portfolio/web-blackmarlin-03.jpg" width="610" height="461" alt="Black Marlin / Website"/></li>
                            <li><img src="/img/portfolio/web-blackmarlin-04.jpg" width="610" height="461" alt="Black Marlin / Website"/></li>
                        </ul>
                    </div>
                    <div class="info">
                        <h3>Black Marlin</h3>
                        <p>Website<br/>HTML + CSS + Javascript</p>
                        <p>for <a href="http://setetres.st" rel="external">Sete Três</a></p>
                    </div>
                </div>
                <div class="slider" id="scroll-jchebly">
                    <div class="handle">
                        <ul class="scroller">
                            <li><img src="/img/portfolio/web-jchebly-01.jpg" width="610" height="461" alt="JCHEBLY / Website"/></li>
                            <li><img src="/img/portfolio/web-jchebly-02.jpg" width="610" height="461" alt="JCHEBLY / Website"/></li>
                            <li><img src="/img/portfolio/web-jchebly-03.jpg" width="610" height="461" alt="JCHEBLY / Website"/></li>
                            <li><img src="/img/portfolio/web-jchebly-04.jpg" width="610" height="461" alt="JCHEBLY / Website"/></li>
                            <li><img src="/img/portfolio/web-jchebly-05.jpg" width="610" height="461" alt="JCHEBLY / Website"/></li>
                            <li><img src="/img/portfolio/web-jchebly-06.jpg" width="610" height="461" alt="JCHEBLY / Website"/></li>
                        </ul>
                    </div>
                    <div class="info">
                        <h3>JCHEBLY</h3>
                        <p>Website<br/>HTML + CSS + Javascript</p>
                        <p>for <a href="http://jchebly.com.br" rel="external">JCHEBLY</a></p>
                    </div>
                </div>
                <div class="slider" id="scroll-origemminas">
                    <div class="handle">
                        <ul class="scroller">
                            <li><img src="/img/portfolio/web-origemminas-01.jpg" width="610" height="461" alt="Sebrae / Origem Minas / Hotsite"/></li>
                            <li><img src="/img/portfolio/web-origemminas-02.jpg" width="610" height="461" alt="Sebrae / Origem Minas / Hotsite"/></li>
                            <li><img src="/img/portfolio/web-origemminas-03.jpg" width="610" height="461" alt="Sebrae / Origem Minas / Hotsite"/></li>
                        </ul>
                    </div>
                    <div class="info">
                        <h3>Sebrae</h3>
                        <p>Origem Minas / Hotsite<br/>HTML + CSS + Javascript</p>
                        <p>for <a href="http://jchebly.com.br" rel="external">JCHEBLY</a></p>
                    </div>
                </div>
                <div class="slider" id="scroll-belopeugeot">
                    <div class="handle">
                        <ul class="scroller">
                            <li><img src="/img/portfolio/web-belopeugeot-01.jpg" width="610" height="461" alt="Peugeot / Belô Peugeot / Hotsite"/></li>
                            <li><img src="/img/portfolio/web-belopeugeot-02.jpg" width="610" height="461" alt="Peugeot / Belô Peugeot / Hotsite"/></li>
                            <li><img src="/img/portfolio/web-belopeugeot-03.jpg" width="610" height="461" alt="Peugeot / Belô Peugeot / Hotsite"/></li>
                        </ul>
                    </div>
                    <div class="info">
                        <h3>Peugeot</h3>
                        <p>Belô Peugeot / Hotsite<br/>HTML + CSS + Javascript</p>
                        <p>for <a href="http://jchebly.com.br" rel="external">JCHEBLY</a></p>
                    </div>
                </div>
                <div class="slider" id="scroll-solidario">
                    <div class="handle">
                        <ul class="scroller">
                            <li><img src="/img/portfolio/web-solidario-01.jpg" width="610" height="461" alt="Sou BH / Solidário / Website"/></li>
                            <li><img src="/img/portfolio/web-solidario-02.jpg" width="610" height="461" alt="Sou BH / Solidário / Website"/></li>
                            <li><img src="/img/portfolio/web-solidario-03.jpg" width="610" height="461" alt="Sou BH / Solidário / Website"/></li>
                            <li><img src="/img/portfolio/web-solidario-04.jpg" width="610" height="461" alt="Sou BH / Solidário / Website"/></li>
                            <li><img src="/img/portfolio/web-solidario-05.jpg" width="610" height="461" alt="Sou BH / Solidário / Website"/></li>
                        </ul>
                    </div>
                    <div class="info">
                        <h3>Sou BH</h3>
                        <p>Solidário / Website<br/>HTML + CSS + Javascript</p>
                        <p>for <a href="http://jchebly.com.br" rel="external">JCHEBLY</a></p>
                    </div>
                </div>
                <div class="slider" id="scroll-dalebrasil">
                    <div class="handle">
                        <ul class="scroller">
                            <li><img src="/img/portfolio/mobile-dalebrasil-01.jpg" width="610" height="461" alt="ALE Combustíveis / D'ALE Brasil / Mobile App and Hotsite"/></li>
                            <li><img src="/img/portfolio/mobile-dalebrasil-02.jpg" width="610" height="461" alt="ALE Combustíveis / D'ALE Brasil / Mobile App and Hotsite"/></li>
                            <li><img src="/img/portfolio/mobile-dalebrasil-03.jpg" width="610" height="461" alt="ALE Combustíveis / D'ALE Brasil / Mobile App and Hotsite"/></li>
                            <li><img src="/img/portfolio/mobile-dalebrasil-04.jpg" width="610" height="461" alt="ALE Combustíveis / D'ALE Brasil / Mobile App and Hotsite"/></li>
                        </ul>
                    </div>
                    <div class="info">
                        <h3>ALE Combustíveis</h3>
                        <p>D'ALE Brasil / Mobile App and Hotsite<br/>HTML + CSS + Javascript</p>
                        <p>for <a href="http://agenciaclickisobar.com.br" rel="external">Agênciaclick Isobar</a></p>
                    </div>
                </div>
                <div class="slider" id="scroll-nasala">
                    <div class="handle">
                        <ul class="scroller">
                            <li><img src="/img/portfolio/mobile-nasala-01.jpg" width="610" height="461" alt="naSala Lounge & Disco / Mobile Website"/></li>
                            <li><img src="/img/portfolio/mobile-nasala-02.jpg" width="610" height="461" alt="naSala Lounge & Disco / Mobile Website"/></li>
                            <li><img src="/img/portfolio/mobile-nasala-03.jpg" width="610" height="461" alt="naSala Lounge & Disco / Mobile Website"/></li>
                            <li><img src="/img/portfolio/mobile-nasala-04.jpg" width="610" height="461" alt="naSala Lounge & Disco / Mobile Website"/></li>
                        </ul>
                    </div>
                    <div class="info">
                        <h3>naSala Lounge & Disco</h3>
                        <p>Mobile Website<br/>HTML + CSS + Javascript</p>
                        <p>for <a href="http://sense8.com.br" rel="external">Sense8</a></p>
                    </div>
                </div>
                <div class="slider" id="scroll-fiatamericalatina">
                    <div class="handle">
                        <ul class="scroller">
                            <li><img src="/img/portfolio/web-fiatamericalatina-01.jpg" width="610" height="461" alt="FIAT / Latin America / Website"/></li>
                            <li><img src="/img/portfolio/web-fiatamericalatina-02.jpg" width="610" height="461" alt="FIAT / Latin America / Website"/></li>
                            <li><img src="/img/portfolio/web-fiatamericalatina-03.jpg" width="610" height="461" alt="FIAT / Latin America / Website"/></li>
                            <li><img src="/img/portfolio/web-fiatamericalatina-04.jpg" width="610" height="461" alt="FIAT / Latin America / Website"/></li>
                            <li><img src="/img/portfolio/web-fiatamericalatina-05.jpg" width="610" height="461" alt="FIAT / Latin America / Website"/></li>
                        </ul>
                    </div>
                    <div class="info">
                        <h3>FIAT</h3>
                        <p>Latin America / Website<br/>HTML + CSS + Javascript</p>
                        <p>for <a href="http://agenciaclickisobar.com.br" rel="external">Agênciaclick Isobar</a></p>
                    </div>
                </div>
            </section>
            <footer>
                <h6>
                    This obra is licensed under a <a href="http://creativecommons.org/licenses/by/3.0" rel="external">Creative Commons Attribution 3.0 Unported License</a>.
                    Proudly Hosted by <a href="http://mediatemple.net" rel="external">Media Temple</a>.
                </h6>
            </footer>
        </div>
        <audio id="audio-baloff" preload="auto">
            <source src="/inc/audio-baloff.mp3"/>
            <source src="/inc/audio-baloff.ogg"/>
        </audio>
        <audio id="audio-click" preload="auto">
            <source src="/inc/audio-click.mp3"/>
            <source src="/inc/audio-click.ogg"/>
        </audio>
        <audio id="audio-close" preload="auto">
            <source src="/inc/audio-close.mp3"/>
            <source src="/inc/audio-close.ogg"/>
        </audio>
        <script src="/js/jquery-1.8.3.js"></script>
        <script src="/js/plugins.js"></script>
        <script src="/js/functions.js"></script>
        <script src="http://file.setetres.st/inc/discontinued-page.js"></script>
<? include("inc/analytics.php");?>
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