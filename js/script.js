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
  
  //altenateing container background
  $('.alternate>div:odd').css("background-color", "rgb(248,248,248)");

  
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
  
/*----- Swiper functions ------*/
  var mySwiper = new Swiper ('.swiper-container', {
      // Optional parameters
    direction: 'vertical',
    slidesPerView: 2,
    autoHeight: true,
    setWrapperSize: true,
    paginationClickable: true,
    spaceBetween: 30,
    paginationType: 'custom',
    pagination: '.swiper-pagination',
    paginationClickable: true,
    mousewheelControl: true,
    freeMode: true,
    freeModeSticky: true,
    paginationCustomRender: function (swiper, current, total) {
      return current + ' / ' + total;
  }
  });   

});