$(document).ready(function(){
    main();
});

function main() {
    let topofDiv = $("#header").offset().top; //gets offset of header
    let navPresence = false;
    
    $(window).scroll(function(){
        if($(window).scrollTop() > topofDiv && !navPresence){
           $('#nav').animate({
              top: "+=10vh" 
           }, 500);
           navPresence = true;
        }

        else if($(window).scrollTop() ==  topofDiv && navPresence){
            $('#nav').animate({
                top: "-=10vh" 
             }, 500);
             navPresence = true;
           navPresence = false;
        }
    });
}