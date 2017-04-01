var scrollTop = $(window).scrollTop();
var clientWidth = document.documentElement.clientWidth;

window.onresize = function() {
    clientWidth = document.documentElement.clientWidth;
};

window.onload = function() {
    animationTabs();
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

$(function() {
	if (page === 'index') {
		particlesJS.load('particles-js', templateUrl + '/js/vendors/particles.json');
	}

	var $expandable = $('.expandable');
	$expandable.find('.cloud').click(function() {
		$expandable.removeClass('folded');
	})

	scrollToSection();
});

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
    $('.wnl-scroll-top').on('click', function() {
        var section = $(this).data('sectionTarget'),
          off = -80;
        if (section != 0) {
            off = $(section).offset().top - 80;
        }

        scrollToOffset( off );
    });
}

function scrollToOffset(offset) {
  $('.page').velocity('stop', true).velocity('scroll',
      {
          offset: offset,
          duration: 1000,
          easing: 'easeInOutCubic'
      }
  );
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

        if ( page === 'help' && clientWidth < 768 && scrollTop > 100 ) {
          scrollToOffset( 100 );
        }
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
