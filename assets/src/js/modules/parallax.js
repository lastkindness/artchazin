export default () => {
    if ($(window).width() > 1024) {
        var parallax = -0.5;

        var $bg_images = $(".parallax");
        var offset_tops = [];
        $bg_images.each(function(i, el) {
            offset_tops.push($(el).offset().top);
        });

        $(window).scroll(function() {
            var dy = $(this).scrollTop();
            $bg_images.each(function(i, el) {
                var ot = offset_tops[i];
                $(el).css("background-position", "50% " + (dy - ot) * parallax + "px");
            });
        });
    }
}
