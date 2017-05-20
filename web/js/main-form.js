$( document ).ready(function() {
    var slider = document.getElementById('slider1');

    noUiSlider.create(slider, {
        start: [ 0 ],
        step: 10,
        range: {
            'min': [  0 ],
            'max': [ 100 ]
        }
    });


    var stepSliderValueElement = document.getElementById('slider1value');

    slider.noUiSlider.on('update', function( values, handle ) {
    	stepSliderValueElement.innerHTML = values[handle];
    });


    var slider2 = document.getElementById('slider2');

    noUiSlider.create(slider2, {
        start: [ 0 ],
        step: 10,
        range: {
            'min': [  0 ],
            'max': [ 100 ]
        }
    });

    var stepSlider2ValueElement = document.getElementById('slider2value');

    slider2.noUiSlider.on('update', function( values, handle ) {
    	stepSlider2ValueElement.innerHTML = values[handle];
    });


});
