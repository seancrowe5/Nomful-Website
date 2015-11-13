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
          $("#partnerimage").attr("src", "/../img1/nomful-partner-black.png").fadeIn();
        }
        else {
          $('header').removeClass('shrink');
          $('img.logo').removeClass('shrink');
          $('nav.reg-menu').removeClass('shrink');
          $("#partnerimage").attr("src", "/../img1/nomful-partner-white.png").fadeIn();
        }
  });
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
});