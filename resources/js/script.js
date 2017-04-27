$(document).ready(function() {

    $('.js--section-features').waypoints(function(direction) {
        if (direction == "down") {
            $('nav').addClass('sticky');
        } else {
            $('nav').removeClass('sticky');
        }
    }, {
        offset: '60px';        
    })
    
    $(window).scroll(function(){
        $("header").css("opacity", 1 - $(window).scrollTop() / 250);
    })
    
});