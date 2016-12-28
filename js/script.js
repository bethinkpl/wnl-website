var scrollTop = $(window).scrollTop();
var clientWidth = document.documentElement.clientWidth;

jQuery('document').ready(function() {

});

window.onresize = function() {
    clientWidth = document.documentElement.clientWidth;
};

window.onload = function() {
    animationTabs();
    scrollToSection();
    toggleMenu();
    changeStep();
    subscribe();

    if (page == 'help' && clientWidth < 768) {
        fixedSteps(scrollTop);
    }
};

window.onscroll = function() {
    scrollTop = $(window).scrollTop();

    if (page == 'help' && clientWidth < 768) {
        fixedSteps(scrollTop);
    }
}

function animationTabs() {
    var index = 1;
    var arr = [1,2,3,4,5]
    if (window.location.hash) {
        var hash = parseInt(window.location.hash.substring(1));
        index = (arr.indexOf(hash) > -1) ? hash : 1;
    }

    $(".tabhelp").tabtab({
        tabMenu: '.tabhelp__menu',             // direct container of the tab menu items
        tabContent: '.tabhelp__content',       // direct container of the tab content items
        next: '.tabhelp-controls__next',       // next slide trigger
        prev: '.tabhelp-controls__prev',       // previous slide trigger

        startSlide: index,                      // starting slide on pageload
        animateHeight: true,
        fixedHeight: false,                // disables animations.

        easing: 'easeInOutCubic',                     // http://julian.com/research/velocity/#easing
        speed: 1000,                         // animation speed
        transformOrigin: 'center left',      // set the center point of the 3d animation

        translateX: 'slide',                      // animate along the X axis (val: px or ‘slide’)
        scale: 1,                           // animate scale (val: 0-2)
        rotateX: 0,                        // animate rotation (val: 0deg-360deg)]
        tabSwitched: function() {
            cloneTabs();
        }
    });

    function cloneTabs() {
        $('.tabhelp__menu__imit').empty();
        $('.tabhelp__menu').children().clone().appendTo('.tabhelp__menu__imit');
    }

    $('html, body').on('click', '.tabhelp__menu__imit a', function(e) {
        e.preventDefault();
        var index = $(this).closest('li').index();
        $('.tabhelp__menu li').eq(index).find('a').trigger('click');
    });
}

function scrollToSection() {
    jQuery('[data-section-target]').on('click', function() {
        var section = jQuery(this).data('sectionTarget');
        var off = -80;

        if (section != 0) {
            off = jQuery(section).offset().top - 80;
        }

        jQuery('.page').velocity("stop", true).velocity("scroll",
            {
                offset: off,
                duration: 1000,
                easing: "easeInOutCubic"
            }
        );
    });
}

function toggleMenu() {
    var el = jQuery('.sidebar');

    jQuery('.hamburger').on('click', function(e) {
        e.preventDefault();

        jQuery(el).velocity("stop", true).velocity("fadeIn", { duration: 400 });
    });

    jQuery('.sidebar .close').on('click', function(e) {
        e.preventDefault();

        jQuery(el).velocity("stop", true).velocity("fadeOut", { duration: 400 });
    });
}

// SERVICE FOR FORM

function onValidForm() {

};

function onNotValidForm() {
    var el = jQuery('#statement');
    var offset = jQuery('.form').offset().top - 240;

    el.removeClass('black');
    el.addClass('red');

    el.find('.name').text(statementFormNotValid);

    jQuery('.page').velocity("stop", true).velocity('scroll', {offset: offset});

    if (!el.hasClass('active')) {
        el.css({ 'margin-top': -heightElement(el) });
        el.velocity("stop", true).velocity({ 'margin-top': 0 }, { duration: 750, delay: 500 });
        el.addClass('active');
    }
}

function onSendSuccessForm() {
    var el = jQuery('#statement');
    var offset = jQuery('.form').offset().top - 240;

    el.removeClass('red');
    el.addClass('black');

    el.find('.name').text(statementFormSendSuccess);

    jQuery('.page').velocity("stop", true).velocity('scroll', {offset: offset});

    if (!el.hasClass('active')) {
        el.css({ 'margin-top': -heightElement(el) });
        el.velocity("stop", true).velocity({ 'margin-top': 0 }, { duration: 750, delay: 500 });
        el.addClass('active');
    }
}

function onSendErrorForm() {
    var el = jQuery('#statement');
    var offset = jQuery('.form').offset().top - 240;

    el.removeClass('black');
    el.addClass('red');

    el.find('.name').text(statementFormSendError);

    jQuery('.page').velocity("stop", true).velocity('scroll', {offset: offset});

    if (!el.hasClass('active')) {
        el.css({ 'margin-top': -heightElement(el) });
        el.velocity("stop", true).velocity({ 'margin-top': 0 }, { duration: 750, delay: 500 });
        el.addClass('active');
    }
}

function heightElement(el) {
    return el.innerHeight();
}

function widthElement(el) {
    return el.innerWidth();
}

function changeStep() {
    $('.select .selected').text($('.tabhelp__menu li.active').text()); // after load, change name

    var stepMenu = $('.select')
    stepMenu.on('click', function() {
        var _this = $('.tabhelp__menu');

        if($(_this).hasClass('active')) {
            $(_this).removeClass('active');
            stepMenu.removeClass('active');
            $(_this).velocity({
               height: '0px'
            },{
               duration: 200
            });
        } else {
            $(_this).addClass('active');
            stepMenu.addClass('active');
            $(_this).velocity({
               height: '160px'
            },{
               duration: 200
            });
        }
    });

    var step = $('.tabhelp__menu a')
    step.on('click', function() {
        var _this = $('.tabhelp__menu');

        $(_this).removeClass('active');
        stepMenu.removeClass('active');
        $(_this).velocity({
           height: '0px'
        },{
           duration: 200
        });

        $('.select .selected').text($(this).text());

        $('html, body').stop().animate({ scrollTop: -80}, 1000);
    });
}

function fixedSteps(scrollTop) {
    if (scrollTop + 90 >= jQuery('.tabhelp').offset().top) {
        jQuery('.tabs').eq(0).addClass('fixed');
        jQuery('.tabhelp').css({'padding-top' : '60px'});
    } else {
        jQuery('.tabs').eq(0).removeClass('fixed');
        jQuery('.tabhelp').css({'padding-top' : '0px'});
    }
}

function subscribe() {
    var el = jQuery('#regulations');
    var _open;

    jQuery('.subscribe').on('click', function(e) {
        var isAccept = $.parseJSON($(this).attr('data-is-accept'));
        var isValid = $.parseJSON($(this).closest('.input').find('input[name="EMAIL"]').attr('data-is-valid'));

        _open = $(this);

        if (!isValid) {
            if (!isAccept) {
                e.preventDefault();
            }
        } else {
            if (!isAccept) {
                e.preventDefault();
                jQuery(el).velocity("stop", true).velocity("fadeIn", { duration: 400 });
            }
        }

        if (!isValid) {
            $(this).addClass('invalid');
            $(this).closest('.input').find('input[name="EMAIL"]').addClass('invalid');
        } else {
            $(this).removeClass('invalid');
            $(this).closest('.input').find('input[name="EMAIL"]').removeClass('invalid');
        }
    });

    jQuery('#regulations .close a').on('click', function(e) {
        e.preventDefault();

        jQuery(el).velocity("stop", true).velocity("fadeOut", { duration: 400 });
    });

    jQuery('#regulations .accept a').on('click', function(e) {
        e.preventDefault();

        jQuery(el).velocity("stop", true).velocity("fadeOut", { duration: 400 });

        jQuery('.subscribe').attr({'data-is-accept': true});

        _open.trigger('click');
    });
}

$('.signin input[name="EMAIL"]').on('keyup change paste input', function(e){
    var value = $(this).val();
    console.log(checkValid(value));
    $(this).attr({'data-is-valid': checkValid(value)});

    if (!checkValid(value)) {
        $(this).addClass('invalid');
        $(this).closest('.input').find('input[type="submit"]').addClass('invalid');
    } else {
        $(this).removeClass('invalid');
        $(this).closest('.input').find('input[type="submit"]').removeClass('invalid');
    }
});

function checkValid(value) {
    var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm;
    if (reg.test(value)) {
      return true;
    } else {
      return false;
    }
}

if (page == 'index') {
    particlesJS("particles-js", {
        "particles":{
            "number":{
                "value":300,
                "density":{
                    "enable":true,
                    "value_area":800
                }
            },
            "color":{
                "value":"#ffffff"
            },
            "shape":{
                "type":"circle",
                "stroke":{
                    "width":0,
                    "color":"#000000"
                },
                "polygon":{
                    "nb_sides":5
                },
                "image":{
                    "src":"img/github.svg",
                    "width":100,
                    "height":100
                }
            },
            "opacity":{
                "value":0.5,
                "random":false,
                "anim":{
                    "enable":false,
                    "speed":1,
                    "opacity_min":0.1,
                    "sync":false
                }
            },
            "size":{
                "value":3,
                "random":true,
                "anim":{
                    "enable":false,
                    "speed":40,
                    "size_min":0.1,
                    "sync":false
                }
            },
            "line_linked":{
                "enable":true,
                "distance":150,
                "color":"#ffffff",
                "opacity":0.4,
                "width":1
            },
            "move":{
                "enable":true,
                "speed":1,
                "direction":"none",
                "random":false,
                "straight":false,
                "out_mode":"out",
                "bounce":false,
                "attract":{
                    "enable":false,
                    "rotateX":600,
                    "rotateY":1200
                }
            }
        },
        "interactivity":{
            "detect_on":"window",
            "events":{
                "onhover":{
                    "enable":false,
                    "mode":"repulse"
                },
                "onclick":{
                    "enable":true,
                    "mode":"push"
                },
                "resize":true
            },
            "modes":{
                "grab":{
                    "distance":400,
                    "line_linked":{
                        "opacity":1
                    }
                },
                "bubble":{
                    "distance":400,
                    "size":40,
                    "duration":2,
                    "opacity":8,
                    "speed":3
                },
                "repulse":{
                    "distance":200,
                    "duration":0.4
                },
                "push":{
                    "particles_nb":1
                },
                "remove":{
                    "particles_nb":2
                }
            }
        },
        "retina_detect":false
    });
}
