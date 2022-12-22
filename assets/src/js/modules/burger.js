export default () => {
    if($('.burger').length) {
        $('.burger').click(function () {
            $('.burger').toggleClass('clicked');
            $('html').toggleClass('nav-active');
        });
        $('.header .close.menu-item').click(function () {
            $('.burger').toggleClass('clicked');
            $('html').toggleClass('nav-active');
        });
    }
};
