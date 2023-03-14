export default () => {
    if(document.querySelector('.zoomer-box')) {
        zoomer();
    }
    function zoomer() {
        document.querySelectorAll('.zoomer-box').forEach(function(item, index) {
            item.addEventListener('mousemove', function(e)  {
                let original = this.querySelector('img'),
                    magnified = this.querySelector('.lens'),
                    style = magnified.style,
                    rect = this.getBoundingClientRect(),
                    x = e.clientX  - rect.left,
                    y = e.clientY  - rect.top,
                    imgWidth = original.offsetWidth,
                    imgHeight = original.offsetHeight,
                    xperc = ((x/imgWidth) * 100),
                    yperc = ((y/imgHeight) * 100);

                //lets user scroll past right edge of image
                if(x > (.01 * imgWidth)) {
                    xperc += (.15 * xperc);
                };

                //lets user scroll past bottom edge of image
                if(y >= (.01 * imgHeight)) {
                    yperc += (.15 * yperc);
                };

                style.backgroundPositionX = (xperc - 9) + '%';
                style.backgroundPositionY = (yperc - 9) + '%';

                style.left = (x - 180) + 'px';
                style.top = (y - 180) + 'px';
            }, false);
        });
    };
};
