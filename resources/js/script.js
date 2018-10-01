$(document).ready(function() {
     
    
    $('.js-broken-phone').waypoint(function(direction) {
        $('.js-broken-phone').addClass('animated slideInLeft');
    }, {
       offset: '50%' 
    });

    
    $('.js-appear').waypoint(function(direction) {
        $('.js-appear').addClass('animated fadeIn');
    }, {
       offset: '70%' 
    });
    

 });   

