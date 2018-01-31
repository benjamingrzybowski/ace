    var num = 800;

    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > num) {
            $('nav').addClass('fixed');
        } else {
            $('nav').removeClass('fixed');
        }
    });

    //var num1 = 570;

    //$(window).bind('scroll', function () {
    //    if ($(window).scrollTop() > num1) {
    //        $('#scroll').addClass('fixed1');
    //    } else {
    //        $('#side-bar').removeClass('fixed1');
    //    }
    //});