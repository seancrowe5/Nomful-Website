<?php require("headers.php"); ?>
  
<section class="contact-top">
  <div class="container contact-top-content">
    <h2 class="bold">Get in touch with us</h2>
    <h4>And we'll get the pineapple rolling</h4>
    
    <script src="/js1/jquery.label_better.js"></script>
    <script src="contact-form.js"></script>
    <form id="ajax-contact" method="post" action="contact-form.php" class="container-720" novalidate>
    <div id="contact-message"></div>
    <div class="row">
      <div class="six columns">
        <input class="u-full-width label_better" data-new-placeholder="name" type="text" placeholder="name" name="name" id="name">
      </div>
      <div class="six columns">
        <input class="u-full-width label_better" data-new-placeholder="email" type="email" placeholder="email" name="email" id="email">
      </div>
    </div>
    <div class="row">
      <div class="twelve columns">
        <textarea class="u-full-width" data-new-placeholder="message" type="text" placeholder="message" name="message" id="message"></textarea>
    </div>
    
    <input type="text"  id="sp-website-r" name="sp-website-r" value=""  />
    <input type="phone" id="sp-phone-r" name="sp-phone-r" value="" />
    <input class="button-primary u-pull-right" type="submit" value="Get in touch">
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
  
</script>

<?php require("footers.php"); ?>
