function initText(element){
    element.css("min-height", element.height(),);
    element.text("|");
}

function setIDs(elements){
    for(var i=0;i<elements.length; i++){
        var atID = "autoText-" + i;
        $(elements[i]).attr("id", atID);
    }
}

function displayText(element,text,typingSpeed, isLastItem){
    setTimeout(function () {
        var newString = "";
        var fin = false;
        element.css("opacity", 1);
        /*element.prev().removeAttr("class","cursor");*/
        element.text("");
        for (var i = 0; (i < text.length) & (fin==false); i++) {
            (function (i, char) {
                setTimeout(function () {
                    newString += char;
                    element.html(newString + "<span class='cursor'>|</span>");
                    
                    if(i == text.length & !isLastItem){
                        element.html(newString);  
                    }
                }, i * typingSpeed);
            })(i + 1, text[i]);
        }
    }, 1500);
}

function doSetTimeout(atID, text, typingSpeed, delay,isLastItem) {
  setTimeout(function(){
    initText($(atID));
    displayText($(atID),text,typingSpeed,isLastItem);
  }, delay);
}

function autoType(elementClass, typingSpeed) {
    var elements = $(elementClass);
    var delay = 0;
    
    setIDs(elements);
    
    for(var i = 0; i<elements.length; i++){
        var atID = "#autoText-" + i;
        var text = $(atID).text().trim().split('');
        var isLastItem = (i==elements.length-1)? true : false;
        
        doSetTimeout(atID, text, typingSpeed, delay, isLastItem);
        delay += text.length * typingSpeed;
    }
}

$(document).ready(function () {
    var textJs = ".text-js";
    var textJsF = textJs +":first";
    var textJsOffset = $(textJsF).offset().top;
    var wHeight = $(window).innerHeight();
    var displayed = false;
    
    $(window).scroll(function () {
        if (window.pageYOffset + wHeight + (wHeight*0.5) >= textJsOffset & displayed == false) {
            autoType(textJs, 20);
            displayed = true;
        }
    });
    
});