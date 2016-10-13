$(document).ready(function() {
    function close_accordion_section() {
        $('.accordionLoja .accordion-section-title-loja').removeClass('active');
        $('.accordionLoja .accordion-section-content').slideUp(300).removeClass('open');
    }
 
    $('.accordion-section-title-loja').click(function(e) {
        // Grab current anchor value
        var currentAttrValue = $(this).attr('href');
 
        if($(e.target).is('.active')) {
            close_accordion_section();
        }else {
            close_accordion_section();
 
            // Add active class to section title
            $(this).addClass('active');
            // Open up the hidden content panel
            $('.accordionLoja ' + currentAttrValue).slideDown(300).addClass('open'); 
        }
 
        e.preventDefault();
    });
});