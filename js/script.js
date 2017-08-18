$(document).ready(function() {
  
  function isMobile() {
    var bps = 768;
    var w = $(window).width();
    return w <= bps
}
  
/*----- Dropdown fade fx functions ------*/
    fade_time = 200;
  // main nav dropdown hover fade
  
  $('.navbar-default .navbar-nav > li.dropdown').hover(
      function() {
        if(!isMobile()) {
        $('ul.dropdown-menu', this).stop(true, true).fadeIn(fade_time);
        $(this).addClass('open');
        }
      }, function() {   
        if(!isMobile()) {
        $('ul.dropdown-menu', this).stop(true, true).fadeOut(fade_time);
        $(this).removeClass('open');
        }
      }
  );
  
  //altenateing container background
  $('.alternate>div:odd').css("background-color", "rgb(248,248,248)");

  
/*----- Icons hover info fade ------*/
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
    spaceBetween: 30,
    // Responsive breakpoints
  breakpoints: {
    768: {
      slidesPerView: 1,
      spaceBetween: 10
    }
  },
    nextButton: '.button-next',
    prevButton: '.button-prev',
    pagination: '.swiper-pagination',
    paginationClickable: true,
//    mousewheelControl: true,
//    freeMode: true,
//    freeModeSticky: true,
    paginationBulletRender: function (swiper, index, className) {
            return '<span class="' + className + '">' + (index + 1) + '</span>';
        }
  });
});