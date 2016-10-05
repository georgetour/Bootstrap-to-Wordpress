$(document).ready(function () {

    //Cache the window object
    var $window = $(window);

    //Parallax background effect
    $('section[data-type="background"]').each(function () {
        var $backgroundObject = $(this);//assigning the object

        $(window).scroll(function () {

        //scroll the background at var speed
        //the yPos is a negative value because we are scrolling it up
        var yPos = -($window.scrollTop()/$backgroundObject.data('speed'));

        //Put together out background position
        var coords = '50%' + yPos + 'px';

       //Move the background
        $backgroundObject.css({backgroundPosition:coords});

        });//End Window scroll

    });

    //Back to top event with animation using jQuery scrollTop method
    $('#backToTop').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 1000);
    });


});
