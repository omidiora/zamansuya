(function ($) {
	var carouselElement, CreateCarousel, NextImage, PreviousImage, ResetTimer, Buttons, currentImage = 1, carouselTimer;

	$.fn.Carousel = function(methodOrOptions) {
		if (methods[methodOrOptions]) {
            return methods[methodOrOptions].apply(this, Array.prototype.slice.call(arguments, 1));
        }

        if (typeof methodOrOptions === 'object' || !methodOrOptions) {
            return methods.init.apply(this, arguments);
        }
	};

	defaults = {
		imagePath: 'images/',
        images: ['carousel01.jpg','carousel02.jpg','carousel03.jpg'],
        height: 500,
        transitionTime: 1000,
        pauseTime: 5000,
        direction: 'right',
        buttons: true
    }

    var methods = {
        init : function(options) {
            settings = $.extend(defaults, options);
            carouselElement = $(this);
            carouselElement.css({height: settings.height});
            if (settings.images.length > 1) {
                CreateCarousel();
            } else {
                $.error("jQuery.carousel error: You need more than 1 image to make a carousel, you silly person :-)");
            }
        }
    }
    
    CreateCarousel = function() {
        var carouselWrapper, carouselListContainer, carouselImageContainer, carouselImage;
        carouselWrapper = $('<div class="carousel-wrapper"></div>');
        carouselListContainer = $('<ul class="carousel-list-container"></ul>');

        $.each(settings.images, function(index, val) {
            carouselImageContainer = $('<li class="carousel-image-container"></li>');
            carouselImageContainer.append('<div class="carousel-overlay"></div>');
            carouselImageContainer.css('transition', 'transform '+(settings.transitionTime/1000)+'s ease-in-out');
            carouselImage = $('<div class="carousel-image"></div>')

            carouselImage.css('background-image','url('+settings.imagePath+val+')');

            if (index == 0) {
                carouselImageContainer.css('transform', 'translate(-100%,0)');
                carouselImageContainer.data('pushed', -100);
            } else if (index != 0) {
                carouselImageContainer.css('top', '-'+100*index+'%');
                carouselImageContainer.css('transform', 'translate('+100*(index-1)+'%,0)');
                carouselImageContainer.data('pushed', 100*(index-1));
            }

            carouselImageContainer.append(carouselImage);
            carouselListContainer.append(carouselImageContainer);
        });
        carouselWrapper.append(carouselListContainer);

        carouselTimer = setInterval(function() {
            if (settings.direction == 'right') {
                NextImage();
            } else if (settings.direction == 'left') {
                PreviousImage();
            }
        }, settings.pauseTime);


        if (settings.buttons == true) {
            // Create Buttons
            var btnContainer = $("<div class='button-container'></div>"), btnLeft = $("<div id='btn-left'></div>"), btnRight = $("<div id='btn-right'></div>");
            btnContainer.css({position: 'absolute', top: '50%', right: 0, left: 0});

            btnLeft.css({position: 'absolute', left: 10, cursor: 'pointer', transform: 'translateY(-50%)'});
            btnRight.css({position: 'absolute', right: 10, cursor: 'pointer', transform: 'translateY(-50%)'});

            btnLeft.append("<i class='mdi-hardware-keyboard-arrow-left'></i>");
            btnRight.append("<i class='mdi-hardware-keyboard-arrow-right'></i>");

            btnLeft.on('click', function() {
                PreviousImage();
                ResetTimer();
            });
            btnRight.on('click', function() {
                NextImage();
                ResetTimer();
            });

            btnContainer.append(btnLeft).append(btnRight);
            carouselWrapper.append(btnContainer);
        } 

        carouselElement.append(carouselWrapper);
    }

    ResetTimer = function() {
        clearInterval(carouselTimer);
        carouselTimer = setInterval(function() {
            if (settings.direction == 'right') {
                NextImage();
            } else if (settings.direction == 'left') {
                PreviousImage();
            }
        }, settings.pauseTime);
    }

    NextImage = function() {
        var carouselImages = $('.carousel-image-container');
        if (currentImage != (settings.images.length-1)) {
            $.each(carouselImages, function(index, val) {

                var pushed = $(val).data('pushed');
                var newPush = pushed - 100;
                $(val).data('pushed', newPush);
                $(carouselImages[index]).css('transform','translate('+newPush+'%,0)');
            });
        } else {
            $.each(carouselImages, function(index, val) {
                var newPush;
                if (index == 0) {
                    newPush = '0';
                } else {
                    var pushed = $(val).data('pushed');
                    newPush = 100*(index);
                }
                $(carouselImages[index]).css('transform','translate('+newPush+'%,0)');
                $(val).data('pushed', newPush);
            });
        }
        if (currentImage == (settings.images.length-1)) {
            currentImage = 0;
        } else {
            currentImage++;
        }
    }

    PreviousImage = function() {
        var carouselImages = $('.carousel-image-container');
        if (currentImage != 0) {
            $.each(carouselImages, function(index, val) {
                var pushed = $(val).data('pushed');
                var newPush = pushed + 100;
                $(val).data('pushed', newPush);
                $(carouselImages[index]).css('transform','translate('+newPush+'%,0)');
            });
        } else {
             $.each(carouselImages, function(index, val) {
                var newPush;
                if (index == (settings.images.length-1)) {
                    newPush = '0';
                } else {
                    var pushed = $(val).data('pushed');
                    newPush = -100*(settings.images.length-1-index);
                }
                $(carouselImages[index]).css('transform','translate('+newPush+'%,0)');
                $(val).data('pushed', newPush);
            });
        }
        if (currentImage == 0) {
            currentImage = (settings.images.length-1);
        } else {
            currentImage--;
        }
    }
}(jQuery));