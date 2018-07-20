jQuery(document).ready(function($) {
            var delay = 12000;
            setInterval(function() {
                nocolor();
                moveRight();
                
            }, delay);

            var slideCount = $('#slider ul li').length;
            var slideWidth = $('#slider ul li').width();

            console.log(slideCount);
            console.log(slideWidth);

            var slideHeight = $('#slider ul li').height();
            var sliderUlWidth = slideCount * slideWidth;

            $('#slider ul li').css({
                width: slideWidth
            });
            $('#slider').css({
                width: slideWidth,
                height: slideHeight
            });
            $('#slider ul').css({
                width: sliderUlWidth,
                marginLeft: -slideWidth
            });
            $('#slider ul li:last-child').prependTo('#slider ul');

            function moveLeft() {
                $('#slider ul').animate({
                    left: +slideWidth
                }, 200, function() {
                    $('#slider ul li:last-child').prependTo('#slider ul');
                    $('#slider ul').css('left', '');
                });
            };

            function moveRight() {
                $('#slider ul').animate({
                    
                    left: -slideWidth
                }, 200, function() {
                    $('#slider ul li:first-child').appendTo('#slider ul');
                    $('#slider ul').css('left', '');
                    color();
                });
            };
    
            function nocolor() {
                $('#slider ul li .revealing').css(
                    {'color': 'transparent !important',
                     'opacity': '0'
                    });
            };
    
            function color() {
                $('#slider ul li .revealing').css(
                    {'color': 'inherit !important',
                     'opacity': 'inherit'
                    });
            };

        });