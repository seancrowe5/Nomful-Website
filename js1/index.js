$('#toggle').click(function() {
   $(this).toggleClass('active');
   $('#overlay').toggleClass('open');
  });

$(function(){
 var shrinkHeader = 100;
  $(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= shrinkHeader ) {
          $('header').addClass('shrink');
          $('img.logo').addClass('shrink');
          $('nav.reg-menu').addClass('shrink');
        }
        else {
          $('header').removeClass('shrink');
          $('img.logo').removeClass('shrink');
          $('nav.reg-menu').removeClass('shrink');
        }
  });
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
});