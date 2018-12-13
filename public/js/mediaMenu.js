$(function () {
    var link = $('.media-link');
    var close = $('.media-close');
    var menu = $('.media-menu');
    link.on('click',function (event) {
        event.preventDefault();
        menu.toggleClass('media-menu-active');
    });
    close.on('click',function (event) {
        event.preventDefault();
        menu.toggleClass('media-menu-active');
    });
});