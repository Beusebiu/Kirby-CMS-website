//Navbar Box Shadow on Scroll
$(function () {
    var navbar = $("nav");
    $(window).scroll(function () {
        if ($(window).width() > 568) {
            if ($(window).scrollTop() <= 100) {
                navbar.css("background-color", "transparent");
            } else {
                navbar.css("background-color", "rgba(255, 255, 255, .9)");
            }
        }
    });

    var btn = $('#button');

    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
    });


});