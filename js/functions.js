function init(){
    var canvas = document.getElementById('baloff');
    var ctx = canvas.getContext('2d');
    draw(ctx);
}

function draw(ctx){
    var gradient;

    ctx.save();

    ctx.save();
    ctx.beginPath();
    ctx.moveTo(96.4, 0.0);
    ctx.bezierCurveTo(50.0, 0.0, 12.4, 37.6, 12.4, 83.9);
    ctx.bezierCurveTo(12.4, 96.6, 15.2, 108.6, 20.2, 119.4);
    ctx.lineTo(0.0, 156.0);
    ctx.lineTo(40.2, 146.3);
    ctx.bezierCurveTo(55.1, 159.7, 74.8, 167.9, 96.4, 167.9);
    ctx.bezierCurveTo(142.7, 167.9, 180.3, 130.3, 180.3, 83.9);
    ctx.bezierCurveTo(180.3, 37.6, 142.7, 0.0, 96.4, 0.0);
    ctx.closePath();
    gradient = ctx.createLinearGradient(90.2, 0.0, 90.2, 167.9);
    gradient.addColorStop(0.00, 'rgb(64, 64, 65)');
    gradient.addColorStop(1.00, 'rgb(0, 0, 0)');
    ctx.fillStyle = gradient;
    ctx.fill();

    ctx.beginPath();
    ctx.moveTo(126.5, 74.9);
    ctx.bezierCurveTo(129.3, 74.9, 131.7, 77.3, 131.7, 80.2);
    ctx.bezierCurveTo(131.7, 83.0, 129.3, 85.4, 126.5, 85.4);
    ctx.bezierCurveTo(123.6, 85.4, 121.2, 83.0, 121.2, 80.2);
    ctx.bezierCurveTo(121.2, 77.3, 123.6, 74.9, 126.5, 74.9);
    ctx.closePath();
    ctx.fillStyle = 'rgb(255, 255, 255)';
    ctx.fill();

    ctx.beginPath();
    ctx.moveTo(73.7, 74.9);
    ctx.bezierCurveTo(76.6, 74.9, 78.9, 77.3, 78.9, 80.2);
    ctx.bezierCurveTo(78.9, 83.0, 76.6, 85.4, 73.7, 85.4);
    ctx.bezierCurveTo(70.8, 85.4, 68.5, 83.0, 68.5, 80.2);
    ctx.bezierCurveTo(68.5, 77.3, 70.8, 74.9, 73.7, 74.9);
    ctx.closePath();
    ctx.fill();

    ctx.beginPath();
    ctx.moveTo(100.1, 131.6);
    ctx.bezierCurveTo(79.7, 131.6, 63.3, 115.2, 63.3, 94.8);
    ctx.bezierCurveTo(63.3, 94.8, 63.3, 94.7, 63.3, 94.7);
    ctx.lineTo(136.9, 94.7);
    ctx.bezierCurveTo(136.9, 94.7, 136.9, 94.8, 136.9, 94.8);
    ctx.bezierCurveTo(136.9, 115.2, 120.4, 131.6, 100.1, 131.6);
    ctx.closePath();
    ctx.fill();

    ctx.restore();
    ctx.beginPath();
    ctx.moveTo(120.6, 101.0);
    ctx.bezierCurveTo(122.0, 101.0, 123.7, 98.6, 123.7, 95.9);
    ctx.lineTo(118.6, 95.9);
    ctx.bezierCurveTo(118.6, 98.7, 119.2, 101.0, 120.6, 101.0);
    ctx.closePath();
    gradient = ctx.createLinearGradient(121.1, 95.9, 121.1, 101.0);
    gradient.addColorStop(0.00, 'rgb(64, 64, 65)');
    gradient.addColorStop(1.00, 'rgb(0, 0, 0)');
    ctx.fillStyle = gradient;
    ctx.fill();

    ctx.beginPath();
    ctx.moveTo(79.6, 101.0);
    ctx.bezierCurveTo(81.0, 101.0, 81.6, 98.7, 81.6, 95.9);
    ctx.lineTo(76.5, 95.9);
    ctx.bezierCurveTo(76.5, 98.6, 78.1, 101.0, 79.6, 101.0);
    ctx.closePath();
    gradient = ctx.createLinearGradient(79.0, 95.9, 79.0, 101.0);
    gradient.addColorStop(0.00, 'rgb(64, 64, 65)');
    gradient.addColorStop(1.00, 'rgb(0, 0, 0)');
    ctx.fillStyle = gradient;
    ctx.fill();
    ctx.restore();

}

document.addEventListener('touchmove', function(e){e.preventDefault();}, false);

$(document).ready(function(){

    // load

    $(window).load(function(){
        $('#load').hide(0);
    });

    // sound

    $('nav ul li a, #facebook, #twitter').mouseenter(function(){
        $('#audio-click')[0].play();
    });

    $('canvas').mouseenter(function(){
        $('#audio-baloff')[0].play();
    });

    $('.close').mouseenter(function(){
        $('#audio-close')[0].play();
    });

    // tweet button

    $('#twitter').sharrre({
        share: {
            twitter: true
        },
            enableHover: false,
            enableTracking: true,
            buttons: { twitter: {via: 'supertrunfo'}},
            click: function(api, options){
            api.simulateClick();
            api.openPopup('twitter');
        }
    });

    // share button

    $('#facebook').sharrre({
        share: {
            facebook: true
        },
            enableHover: false,
            enableTracking: true,
            click: function(api, options){
            api.simulateClick();
            api.openPopup('facebook');
        }
    });

    // grab

    $(".slider li").mouseover(function(){
        $(this).addClass('grab-cursor');
    }).mousedown(function(){
        $(this).addClass('grabbing-cursor');
    }).mouseup(function(){
        $(this).removeClass('grabbing-cursor');
    });

    // works

    $('#works .slider').hoverIntent({
        over: picOpen,
        timeout: 375,
        out: picClose
    });
    function picOpen(){
        $(this).animate({height:'450px'},600,'easeInOutExpo');
    }
    function picClose(){
        $(this).animate({height:'100px'},600,'easeInOutExpo');
    }

    // taget blank

    $('a[rel=external]').attr('target', '_blank');

    // tooltip

    $('li').tooltip({
        track: true,
        delay: 0,
        showURL: false,
        showBody: ' - ',
        fade: 200
    });

    $('a').tooltip({
        track: true,
        delay: 0,
        showURL: false,
        showBody: ' - ',
        fade: 200
    });

    $('#pages').tooltip({
        track: true,
        delay: 0,
        showURL: false,
        showBody: ' - ',
        fade: 200
    });

    // instagram

    // $('#instagram-hold').instagram('getStream', {
    //     count: 5,
    //     getUser: true,
    //     callback: function(){
    //         $totalPages = $('#instagram-hold').data('pages');
    //         $pageHolder = $('#pages');

    //         if(typeof($totalPages) != 'undefined'){
    //             $pageHolder.html($totalPages + '');
    //         }
    //         $.each($('#instagram-hold img'), function(){
    //             var $this = $(this);
    //             $('#instagram-hold').append($('<a href="'+$this.data('instagramLink')+'" target=\"_blank\" rel="external"></a>').append($this));
    //         });
    //     }
    // });

    // close about

    $('#close-about').click(function(){
        $('#mn-about').removeClass('selected');
        $('#about').slideUp(750,'easeInOutExpo');
        // $('#instagram').slideUp(750,'easeInOutExpo',function(){
        // });
    });

    // close works

    $('#close-works').click(function(){
        $('#mn-works').removeClass('selected');
        $('#works').slideUp(750,'easeInOutExpo', function(){
            $('#works .slider').each(function(){
                if ($(this).data('myScroll')){
                    $(this).data('myScroll').destroy();
                }
            });
        });
    });

    // close extras

    $('#close-extras').click(function(){
        $('#mn-extras').removeClass('selected');
        $('#extras').slideUp(750,'easeInOutExpo', function(){
            $('#extras .slider').each(function(){
                if ($(this).data('myScroll')){
                    $(this).data('myScroll').destroy();
                }
            });
        });
    });

    // close awards

    $('#close-awards').click(function(){
        $('#mn-awards').removeClass('selected');
        $('#awards').slideUp(750,'easeInOutExpo', function(){
            $('#awards .slider').each(function(){
                if ($(this).data('myScroll')){
                    $(this).data('myScroll').destroy();
                }
            });
        });
    });

    // close console

    $('#close-console').click(function(){
        $('#mn-console').removeClass('selected');
        $('#console').slideUp(750,'easeInOutExpo');
    });

});

// sammy.js

;(function($){

    var app = $.sammy(function(){

        // navigation: close

        this.get('/',function(){});

        function ballon(){
            $('.title canvas').animate({marginTop:'-50px'},1500,'easeOutBounce');
            setTimeout(function(){
                $('.title canvas').animate({marginTop:'0px'},6000,'easeOutQuad', ballon);
            }, 10);
        }

        // navigation: about

        this.get('#!/about', function(){
            $('#mn-about').addClass('selected');
            if ($('.title').is(':visible')){
                $('#about').slideDown(750,'easeInOutExpo',function(){
                    $('html,body').animate({scrollTop: $('#about').offset().top},600,'easeInOutExpo');
                    // $('#instagram').slideDown(750,'easeInOutExpo',function(){
                    // });
                });
            } else {
                $('.title').slideDown(750,'easeInOutExpo',function(){
                    $('.title a').animate({marginTop:'0px'},1500,'easeInOutExpo',function(){
                        ballon();
                        $('footer').slideDown(750,'easeInOutExpo',function(){
                            $('#about').slideDown(750,'easeInOutExpo',function(){
                                $('html,body').animate({scrollTop: $('#about').offset().top},600,'easeInOutExpo');
                                // $('#instagram').slideDown(750,'easeInOutExpo',function(){
                                // });
                            });
                        });
                    });
                });
            }
        });

        // navigation: works

        this.get('#!/works', function(){
            $('#mn-works').addClass('selected');
            if ($('.title').is(':visible')){
                $('#works').slideDown(750,'easeInOutExpo',function(){
                    var self = $('#works .slider');
                    $('html,body').animate({scrollTop: $('#works').offset().top},600,'easeInOutExpo',function(){
                        self.each(function(){
                            if ($(this).data('myScroll')){
                                $(this).data('myScroll').destroy();
                            }
                            $(this).data('myScroll',new iScroll($(this).attr("id"),{snap:'li',momentum:false,vScrollbar:false}));
                        });
                    });
                });
            } else {
                $('.title').slideDown(750,'easeInOutExpo',function(){
                    $('.title a').animate({marginTop:'0px'},1500,'easeInOutExpo',function(){
                        ballon();
                        $('footer').slideDown(750,'easeInOutExpo',function(){
                            $('#works').slideDown(750,'easeInOutExpo',function(){
                                var self = $('#works .slider');
                                $('html,body').animate({scrollTop: $('#works').offset().top},600,'easeInOutExpo',function(){
                                    self.each(function(){
                                        if ($(this).data('myScroll')){
                                            $(this).data('myScroll').destroy();
                                        }
                                        $(this).data('myScroll',new iScroll($(this).attr("id"),{snap:'li',momentum:false,vScrollbar:false}));
                                    });
                                });
                            });
                        });
                    });
                });
            }
        });

        // navigation: extras

        this.get('#!/extras',function(){
            $('#mn-extras').addClass('selected');
            if ($('.title').is(':visible')){
                $('#extras').slideDown(750,'easeInOutExpo',function(){
                    var self = $('#extras .slider');
                    $('html,body').animate({scrollTop: $('#extras').offset().top},600,'easeInOutExpo',function(){
                        self.each(function(){
                            if ($(this).data('myScroll')){
                                $(this).data('myScroll').destroy();
                            }
                            $(this).data('myScroll',new iScroll($(this).attr("id"),{snap:'li',momentum:false,vScrollbar:false}));
                        });
                    });
                });
            } else {
                $('.title').slideDown(750,'easeInOutExpo',function(){
                    $('.title a').animate({marginTop:'0px'},1500,'easeInOutExpo',function(){
                        ballon();
                        $('footer').slideDown(750,'easeInOutExpo',function(){
                            $('#extras').slideDown(750,'easeInOutExpo',function(){
                                var self = $('#extras .slider');
                                $('html,body').animate({scrollTop: $('#extras').offset().top},600,'easeInOutExpo',function(){
                                    self.each(function(){
                                        if ($(this).data('myScroll')){
                                            $(this).data('myScroll').destroy();
                                        }
                                        $(this).data('myScroll',new iScroll($(this).attr("id"),{snap:'li',momentum:false,vScrollbar:false}));
                                    });
                                });
                            });
                        });
                    });
                });
            }
        });

        // navigation: awards

        this.get('#!/awards', function(){
            $('#mn-awards').addClass('selected');
            if ($('.title').is(':visible')){
                $('#awards').slideDown(750,'easeInOutExpo',function(){
                    var self = $('#awards .slider');
                    $('html,body').animate({scrollTop: $('#awards').offset().top},600,'easeInOutExpo',function(){
                        self.each(function(){
                            if ($(this).data('myScroll')){
                                $(this).data('myScroll').destroy();
                            }
                            $(this).data('myScroll',new iScroll($(this).attr("id"),{snap:'li',momentum:false,vScrollbar:false}));
                        });
                    });
                });
            } else {
                $('.title').slideDown(750,'easeInOutExpo',function(){
                    $('.title a').animate({marginTop:'0px'},1500,'easeInOutExpo',function(){
                        ballon();
                        $('footer').slideDown(750,'easeInOutExpo',function(){
                            $('#awards').slideDown(750,'easeInOutExpo',function(){
                                var self = $('#awards .slider');
                                $('html,body').animate({scrollTop: $('#awards').offset().top},600,'easeInOutExpo',function(){
                                    self.each(function(){
                                        if ($(this).data('myScroll')){
                                            $(this).data('myScroll').destroy();
                                        }
                                        $(this).data('myScroll',new iScroll($(this).attr("id"),{snap:'li',momentum:false,vScrollbar:false}));
                                    });
                                });
                            });
                        });
                    });
                });
            }
        });

        // navigation: console

        this.get('#!/console', function(){
            $('#mn-console').addClass('selected');
            if ($('.title').is(':visible')){
                $('#console').slideDown(750,'easeInOutExpo',function(){
                    $('html,body').animate({scrollTop: $('#console').offset().top},600,'easeInOutExpo');
                });
            } else {
                $('.title').slideDown(750,'easeInOutExpo',function(){
                    $('.title a').animate({marginTop:'0px'},1500,'easeInOutExpo',function(){
                        ballon();
                        $('footer').slideDown(750,'easeInOutExpo',function(){
                            $('#console').slideDown(750,'easeInOutExpo',function(){
                                $('html,body').animate({scrollTop: $('#console').offset().top},600,'easeInOutExpo');
                            });
                        });
                    });
                });
            }
        });

    });
    $(function(){app.run()});

})(jQuery);