$(document).ready(function () {
    function addCircle() {
        var $circle = $('<div class="circle"></div>');
        $circle.animate({
            'width': '300px',
            'height': '300px',
            'margin-top': '-150px',
            'margin-right': '-150px',
            'opacity': '0',
            'z-index': 1
        }, 8000, 'swing');
        $('#radar').append($circle);
    
        setTimeout(function __remove() {
            $circle.remove();
        }, 8000);
    }
    addCircle();
    setInterval(addCircle, 3200);
});
