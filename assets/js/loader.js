$(window).on('load', function(){
    setTimeout(removeLoader, 1000);
  });
  function removeLoader(){
    $("body").css("overflow-y","scroll");
      $("#loader").fadeOut(200, function() {
        /** empiza la animacion de rotating-text.js despues de cargar a pagina totalmente**/
        rotatingTextInit();
        $( "#loader" ).remove();
    });  
  }