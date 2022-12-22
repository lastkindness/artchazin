export default () => {
    function sticky() {
        if(!$('body').hasClass('scroll')) {
            $('body').addClass('scroll');
        }
        if($(window).scrollTop()==0) {
            $('body').removeClass('scroll');
        }
    }
    $(document).on('scroll', function(){
        sticky();
    });
    sticky();
};
