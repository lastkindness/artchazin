

export default () => {
    setTimeout(function () {
        $('.card__text').ellipsis({lines: 3});

        $(window).on('load', function () {
            $('.card__text').ellipsis({lines: 3});
        });
        $(document).ajaxComplete(function () {
            $('.card__text').ellipsis({lines: 3});
        });
        $(window).resize(function () {
            $('.card__text').ellipsis({lines: 3});
        });
    },100)
};
