$(document).ready(function(){
    main();
    smoothScroll();
});

function main() {
    let topofDiv = $("#header").offset().top; //gets offset of header
    var height   = $("#header").outerHeight();
    let navPresence = false;

    if($(window).scrollTop() > (topofDiv+height) && !navPresence){
        $('#navigation').animate({
           top: "+=50vh" 
        }, 500);
        navPresence = true;
     }
    
    $(window).scroll(function(){
        if($(window).scrollTop() > (topofDiv+height) && !navPresence){
           $('#navigation').animate({
              top: "+=50vh" 
           }, 500);
           navPresence = true;
        }

        else if($(window).scrollTop() <=  (topofDiv+height) && navPresence){
            $('#navigation').animate({
                top: "-=50vh" 
             }, 500);
             navPresence = true;
           navPresence = false;
        }
    });

    $('.productsIco').on('click',function(){
        let selectedIcon;
        let selectedItem;


        if ($(this).hasClass('productsMainItemImage')) {
            selectedIcon = '<i class="fas fa-book"></i>';
            selectedItem = $(this).text().trim();
        }
        else{
            selectedIcon = $(this).html().trim();
            selectedItem = $(this).next().html().trim();
        }

        let selectedItem_class = selectedItem.replace(/\s+/g, '-').toLowerCase();

        if ($(this).hasClass('active')){

            $(this).removeClass('active');
            $('.'+selectedItem_class).remove();

        }else{

            $(this).addClass('active');
            let html = '<div class="'+selectedItem_class+' col-md-3 contactSelectedItem selectedItem">'+
            '<div>'+
            selectedIcon+
            '<div class="contactSelectedItemDesc">'+
                selectedItem+
            '</div>'+
            '</div>'+
            '</div>';

            $('.contactSelectedItems').append(html);

            html = '<input class="selectedItem '+selectedItem_class+'" type="hidden" value="'+selectedItem+'" name="selectedItems[]">';

            $('#contactForm').append(html);
        }
    })

    $('.productsAllBtn').on('click',function(){
        $('.productsIco').removeClass('active');
        $('.selectedItem').remove();
        $('.productsIco').addClass('active');

        var html = '';
        var html2 = '';

        $('div.productsIco').each(function () {

            if ($(this).hasClass('productsMainItemImage')) {
                selectedIcon = '<i class="fas fa-book"></i>';
                selectedItem = $(this).text().trim();
            }
            else{
                selectedIcon = $(this).html().trim();
                selectedItem = $(this).next().html().trim();
            }
            let selectedItem_class = selectedItem.replace(/\s+/g, '-').toLowerCase();

            html += '<div class="'+selectedItem_class+' col-md-3 contactSelectedItem selectedItem">'+
            selectedIcon+
            '<div class="contactSelectedItemDesc">'+
                selectedItem+
            '</div>'+
            '</div>';

            html2 += '<input class="selectedItem '+selectedItem_class+'" type="hidden" value="'+selectedItem+'" name="selectedItems[]">';
        });

        $('.contactSelectedItems').append(html);
        $('#contactForm').append(html2);
    })

    $('.productsResetBtn').on('click',function(){
        $('.productsIco').removeClass('active');
        $('.selectedItem').remove();
    })
    
}

function smoothScroll() {
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            // On-page links
            if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
            && 
            location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                        }, 800, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
    });
}