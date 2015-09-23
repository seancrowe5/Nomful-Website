<?php require("header-partners.php"); ?>
  
<section class="partners-top">
  <div class="container partners-top-content">
    <h2 class="bold">Your Clients. Eating healthy.</h2>
    <h4>Nomful partners with top personal trainers and studios to provide nutrition accountability your clients need.</h4>
    <a class="scroll" href="#joinform"><button class="button-primary" id="top-button">Become a Partner</button></a>
  </div>
</section>
  
<section class="masthead partners-why">
  <div class="container partner-why-content">
    <h2>Why become a Nomful Partner?</h2>
    <div class="row">
      <div class="one-third column partners-why-step">
        <img src="/../img1/clock.png"/>
        <h4>Everyday Support</h4>
        <p>Have peace of mind. Your clients have the attention of a dedicated coach, everyday.</p>
      </div>
      <div class="one-third column partners-why-step">
        <img src="/../img1/money.png"/>
        <h4>Monthly Revenue</h4>
        <p>Earn extra recurring revenue for every client that signs up with Nomful.</p>
      </div>
      <div class="one-third column partners-why-step">
        <img src="/../img1/heart.png"/>
        <h4>Improved Outcomes</h4>
        <p>Your clients are held accountable by coaches with experience as registered dietitians.</p>
      </div>
    </div>
  </div>
</section>
  
<section class="masthead partners-join" id="joinform" >
  <div class="container partners-join-content">
    <h2 class="bold">Interested in holding your clients accountable?</h2>
    <h5>Fill the form out below and we will be in contact with you shortly!</h5>
    
    <script src="js1/jquery.label_better.js"></script>
    <script src="partners-join-form.js"></script>
    <form id="ajax-partners-join" method="post" action="partners-join-form.php" class="container-720" novalidate>
    <div id="partners-join-message"></div>
    <div class="row">
      <div class="six columns">
        <input class="u-full-width label_better" data-new-placeholder="first name" type="text" placeholder="first name" name="first-name" id="first-name">
      </div>
      <div class="six columns">
        <input class="u-full-width label_better" data-new-placeholder="last name" type="text" placeholder="last name" name="last-name" id="last-name">
      </div>
    </div>
    <div class="row">
      <div class="six columns">
        <input class="u-full-width label_better" data-new-placeholder="email" type="email" placeholder="email" name="email" id="email">
      </div>
      <div class="six columns">
        <input class="u-full-width label_better" data-new-placeholder="cell phone" type="tel" placeholder="cell phone" name="cell-phone" id="cell-phone">
      </div>
    </div>
    
    <input type="text"  id="sp-website-r" name="sp-website-r" value=""  />
    <input type="phone" id="sp-phone-r" name="sp-phone-r" value="" />
    <input class="button-primary u-pull-right" type="submit" value="Become a Partner">
    </form>
  </div>
</section>


<script>  
  $("input.label_better").label_better({
    position: "top",
    animationTime: 400,
    easing: "bounce",
    offset: 10,
    hidePlaceholderOnFocus: true
  });
  
  /*$(document).ready(function(){ 
    $("#first-name").focus();
  });*/
  
  var hashTagActive = "";
  $(".scroll").click(function (event) {
      if(hashTagActive != this.hash) { //this will prevent if the user click several times the same link to freeze the scroll.
          event.preventDefault();
          //calculate destination place
          var dest = 0;
          if ($(this.hash).offset().top > $(document).height() - $(window).height()) {
              dest = $(document).height() - $(window).height();
          } else {
              dest = $(this.hash).offset().top;
          }
          //go to destination
          $('html,body').animate({
              scrollTop: dest
          }, 500, 'swing');
          hashTagActive = this.hash;
      }
    });
</script>


<?php require("footer-partners.php"); ?>
