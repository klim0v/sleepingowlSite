SCROLL_TIME = 800;
function TopMenuController(logo, items, topOffset) {
    var scrollTo = function (pos) {
        $("html, body").stop().animate({scrollTop: pos}, SCROLL_TIME);
    };
    logo.click(function () {
        scrollTo(0);
    });
    items.forEach(function (item) {
        item.element.click(function () {
            scrollTo(item.target.offset().top - topOffset);
        });
    });
}
function MoveTopButton(topBtn) {
    var isVisible = false;
    topBtn.fadeOut();
    topBtn.click(function () {
        $("html, body").stop().animate({scrollTop: 0}, 800);
        return false;
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            if (!isVisible) {
                topBtn.stop();
                topBtn.fadeIn();
                isVisible = true;
            }
        } else if (isVisible) {
            topBtn.stop();
            topBtn.fadeOut();
            isVisible = false;
        }
    });
}
new TopMenuController($(".navbar-logo"), [
    {'element': $(".nav-about"), 'target': $(".about")},
    {'element': $(".nav-services"), 'target': $(".services")},
    {'element': $(".nav-reviews"), 'target': $(".service-footer")},
    {'element': $(".nav-contacts"), 'target': $(".contacts")}
], $('.menu_main').height());

new MoveTopButton($(".move-top"));
