$(document).ready(function(){
    main();
    smoothScroll();
});

function main() {
    let topofDiv = $("#header").offset().top; //gets offset of header
    var height   = $("#header").outerHeight();
    let navPresence = false;
    let contactActive = false;

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

        if($(window).scrollTop() + $(window).height() > $(document).height() - 100 && !contactActive) {
            $('.nav-item').removeClass('active');
            $('.nav-item[href="#contact"]').addClass('active');
            contactActive = true;
        }

        if($(window).scrollTop() + $(window).height() <= $(document).height() - 100 && contactActive) {
            $('.nav-item').removeClass('active');
            $('.nav-item[href="#about"]').addClass('active');
            contactActive = false;
        }

    });
    
    $('.productsIco>.productPlusIcon').on('click',function(){
        let selectedIcon;
        let selectedItem;


        if ($(this).parent().hasClass('productsMainItemImage')) {
            selectedIcon = 'fas fa-book';
            selectedItem = $(this).parent().text().trim();
        }
        else{
            selectedIcon = $(this).next().attr('class');
            selectedItem = $(this).parent().next().html().trim();
        }

        let selectedItem_class = selectedItem.replace(/\s+/g, '-').toLowerCase();

        if ($(this).parent().hasClass('active')){

            $(this).attr('class','productPlusIcon fas fa-plus');
            $(this).parent().removeClass('active');
            $('.'+selectedItem_class).remove();

        }else{

            $(this).parent().addClass('active');
            $(this).attr('class','productPlusIcon fas fa-minus');

            let html = '<div class="'+selectedItem_class+' col-md-3 contactSelectedItem selectedItem">'+
            '<div>'+
            '<i class="'+selectedIcon+'"></i>'+
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
        $('.productPlusIcon').attr('class','productPlusIcon fas fa-minus');
        $('.productsIco').addClass('active');

        var html = '';
        var html2 = '';

        $('i.productIcon').each(function () {

            if ($(this).parent().hasClass('productsMainItemImage')) {
                selectedIcon = 'fas fa-book';
                selectedItem = $(this).parent().text().trim();
            }
            else{
                selectedIcon = $(this).attr('class');
                selectedItem = $(this).parent().next().html().trim();
            }

            let selectedItem_class = selectedItem.replace(/\s+/g, '-').toLowerCase();

            html += '<div class="'+selectedItem_class+' col-md-3 contactSelectedItem selectedItem">'+
            '<div>'+
            '<i class="'+selectedIcon+'"></i>'+
            '<div class="contactSelectedItemDesc">'+
                selectedItem+
            '</div>'+
            '</div>'+
            '</div>';

            html2 += '<input class="selectedItem '+selectedItem_class+'" type="hidden" value="'+selectedItem+'" name="selectedItems[]">';
        });

        $('.contactSelectedItems').append(html);
        $('#contactForm').append(html2);
    })

    $('.productsResetBtn').on('click',function(){
        $('.productPlusIcon').attr('class','productPlusIcon fas fa-plus');
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