

export default () => {
    setTimeout(function () {
        $('.card__text').ellipsis({lines: 4});
        $('.card__title').ellipsis({lines: 2});
        if($(window).width() <= 1024) {
            $('.card__text').ellipsis({lines: 3});
        }
        $(window).on('load', function () {
            $('.card__title').ellipsis({lines: 2});
            $('.card__text').ellipsis({lines: 4});
            if($(window).width() <= 1024) {
                $('.card__text').ellipsis({lines: 3});
            }
        });
        $(document).ajaxComplete(function () {
            $('.card__title').ellipsis({lines: 2});
            $('.card__text').ellipsis({lines: 4});
            if($(window).width() <= 1024) {
                $('.card__text').ellipsis({lines: 3});
            }
        });
        $(window).resize(function () {
            $('.card__title').ellipsis({lines: 2});
            $('.card__text').ellipsis({lines: 4});
            if($(window).width() <= 1024) {
                $('.card__text').ellipsis({lines: 3});
            }
        });
    }, 500);
};
