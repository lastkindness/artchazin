export default () => {
    $('.select').click(function (e) {
        e.stopPropagation();
        $(this).toggleClass('active');
    });

    $('body').click(function (e) {
        $('.select').removeClass('active');
    });
};
