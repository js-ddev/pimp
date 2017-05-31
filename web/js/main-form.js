// Adrien - Fonctions pour gestion des slider de selection dans les formulaires
$(document).ready(function() {
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

    // Slider 2
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

    // Slider 3
    var slider3 = document.getElementById('slider3');

    noUiSlider.create(slider3, {
        start: [ 0 ],
        step: 10,
        range: {
            'min': [  0 ],
            'max': [ 100 ]
        }
    });

    var stepSlider3ValueElement = document.getElementById('slider3value');

    slider3.noUiSlider.on('update', function( values, handle ) {
        stepSlider3ValueElement.innerHTML = values[handle];
    });

    // Slider 4
    var slider4 = document.getElementById('slider4');

    noUiSlider.create(slider4, {
        start: [ 0 ],
        step: 10,
        range: {
            'min': [  0 ],
            'max': [ 100 ]
        }
    });

    var stepSlider4ValueElement = document.getElementById('slider4value');

    slider4.noUiSlider.on('update', function( values, handle ) {
        stepSlider4ValueElement.innerHTML = values[handle];
    });

    // Slider 5
    var slider5 = document.getElementById('slider5');

    noUiSlider.create(slider5, {
        start: [ 0 ],
        step: 10,
        range: {
            'min': [  0 ],
            'max': [ 100 ]
        }
    });

    var stepSlider5ValueElement = document.getElementById('slider5value');

    slider5.noUiSlider.on('update', function( values, handle ) {
        stepSlider5ValueElement.innerHTML = values[handle];
    });

    // Slider 6
    var slider6 = document.getElementById('slider6');

    noUiSlider.create(slider6, {
        start: [ 0 ],
        step: 10,
        range: {
            'min': [  0 ],
            'max': [ 100 ]
        }
    });

    var stepSlider6ValueElement = document.getElementById('slider6value');

    slider6.noUiSlider.on('update', function( values, handle ) {
        stepSlider6ValueElement.innerHTML = values[handle];
    });
});