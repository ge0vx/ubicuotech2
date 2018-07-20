/**fadding at start**/
(function ($) {
    $(document).ready(function () {

        var elements = $(".effect1");

        var datas = [];
        var wHeight = $(window).innerHeight();

        for (var i = 0; i < elements.length; i++) {
            var newId = "id-" + i;
            $(elements[i]).attr("id", newId);
        }

        for (var i = 0; i < elements.length; i++) {
            var oldId = "#id-" + i;
            var eOffset = $(oldId).offset().top + $(oldId).height();
            datas.push(eOffset);
        }

        $(window).scroll(function () {
            for (var i = 0; i < datas.length; i++) {
                if (datas[i] != 0) {
                    if ((window.pageYOffset + wHeight) > datas[i]) {
                        var old2Id = "#id-" + i;
                        $(old2Id).css("visibility", "inherit").animateCss('zoomIn');
                        datas[i] = 0;
                    }
                }
            }
        });


    });
})(jQuery);



/**stycky menu**/
var navbar = document.getElementById("stcky-menu");
var offsetToShowSticky = $(window).innerHeight() / 2;


function myFunction() {
    if (window.pageYOffset >= offsetToShowSticky) {
        $(navbar).addClass("sticky")
        $(navbar).slideDown();
    } else {
        $(navbar).removeClass("sticky");
        $(navbar).slideUp();
    }
}

window.onscroll = function () {
    myFunction()
};
