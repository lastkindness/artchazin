export default () => {
    if($('.curved-img')) {
        let circle = $('.curved-img');

        $(circle).each(function (index, item) {
            let degree = 0;
            let timer;
            let lastValue = 0;

            function rotate(topCircle) {
                $(item).css({ transform: 'rotate(' + degree + 'deg)'});
                $(item).css({ WebkitTransform: 'rotate(' + degree + 'deg)'});
                $(item).css({ '-moz-transform': 'rotate(' + degree + 'deg)'});
                timer = setTimeout(function() {
                    if (lastValue > topCircle){
                        --degree;
                    }
                    else if (lastValue < topCircle) {
                        ++degree;
                    }
                    lastValue = topCircle;
                },10);
            }

            $(window).scroll(function(){
                let topCircle = ($(item).offset().top + $(item).height()) - $(window).scrollTop();
                rotate(topCircle);
            });
        });
    }
}
