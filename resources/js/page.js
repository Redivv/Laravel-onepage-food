$(document).ready(function(){
    main();
});

function main() {
    let topofDiv = $("#header").offset().top; //gets offset of header
    var height   = $("#header").outerHeight();
    let navPresence = false;

    if($(window).scrollTop() > (topofDiv+height) && !navPresence){
        $('#navigation').animate({
           top: "+=200px" 
        }, 500);
        navPresence = true;
     }
    
    $(window).scroll(function(){
        if($(window).scrollTop() > (topofDiv+height) && !navPresence){
           $('#navigation').animate({
              top: "+=200px" 
           }, 500);
           navPresence = true;
        }

        else if($(window).scrollTop() ==  (topofDiv+height) && navPresence){
            $('#navigation').animate({
                top: "-=200px" 
             }, 500);
             navPresence = true;
           navPresence = false;
        }
    });
}