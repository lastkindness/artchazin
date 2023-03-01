import noUiSlider from 'nouislider/dist/nouislider.mjs';

export default () => {
    let sliderMadness = document.getElementById('form-group-price');
    let inputValues = [
        document.getElementById('min_madness'),
        document.getElementById('max_madness')
    ];
    noUiSlider.create(sliderMadness, {
        tooltips: true,
        step: 1,
        format: {
            to: (v) => parseFloat(v).toFixed(0),
            from: (v) => parseFloat(v).toFixed(0)
        },
        start: [sliderMadness.dataset.from, sliderMadness.dataset.to],
        connect: true,
        range: { 'min': 0, 'max': 5000}
    });

    sliderMadness.noUiSlider.on('update', function(values, handle) {
        console.log(values[handle]);
        inputValues[handle].value = values[handle];
        let combinedValues = jQuery('#min_madness').val() + '-' + jQuery('#max_madness').val()
        jQuery('#hidden-price').val(combinedValues);

    });
    sliderMadness.noUiSlider.on('end', function() {
        //jQuery(document.body).trigger('madness_ajax_request');
        jQuery('#form-price').submit();

    });
};
