$(document).ready(function() {
  // main nav dropdown hover fade
  $('.navbar-default .navbar-nav > li.dropdown').hover(
      function() {
        $('ul.dropdown-menu', this).stop(true, true).fadeIn();
        $(this).addClass('open');
      }, function() {   
        $('ul.dropdown-menu', this).stop(true, true).fadeOut();
        $(this).removeClass('open');
      }
  );
  
  // icons hover info fade
  fade_time = 200;
  function fader(i){
       $('.hover-info>div').stop().fadeTo(fade_time,0).eq(!i?i:$(this).index()).fadeTo(fade_time,1);
    }
  
  function fadeBackToFirstElement(){
       $('.hover-info>div').stop().fadeTo(fade_time,0).eq(0).fadeTo(fade_time,1);
    }
    
    fader(0); // on load fade in first element
//    $("#icons>li").hover(fader, fadeBackToFirstElement);
    $("#icons>li").mouseenter(fader);
  
  //initialize swiper when document ready  
    var mySwiper = new Swiper ('.swiper-container', {
      // Optional parameters
      direction: 'vertical',
      loop: true
    });

});