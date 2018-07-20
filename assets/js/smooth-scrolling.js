function scrollNav() {
	var stickyMenuHeight = $(window).innerWidth() < 767 ? 50 : 38;
	
  $('.nav a').click(function(){ 
    var theClass = $(this).attr("class");
    $('.'+theClass).parent('li').addClass('active');
    //Animate
    $('html, body')
        .stop()
        .animate(
            {
            scrollTop: $( $(this).attr('href') ).offset().top - stickyMenuHeight
            }, 1100);
    return false;
  });
  $('.scrollTop a').scrollTop();
}

scrollNav();