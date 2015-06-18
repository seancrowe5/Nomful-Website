<?php
   if (isset($_COOKIE['user'])) { 
    header ( "Location: /payment.php" ); 
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8" /> 
  <title>nomful | be nomful about food</title>
  <meta name="keywords" content=""/>
  <meta name="description" content="nomful | be nomful about food" />
  <meta property="og:type" content="website" /> 
  <meta property="og:title" content="" /> 
  <meta property="og:image" content="" /> 
  <meta property="og:description" content="" /> 
  <meta property="og:url" content="https://nomful.com">
  <meta name="author" content="nomful" /> 
  <meta name="robots" content="index, follow, noydir" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="google-site-verification" content="s-PDv36DeQ8GbPWkvISgveTSpQBsb7BQSMJTfiK_7Ps" />
  <link rel="icon" 
    type="image/png" 
    href="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <script src="//use.typekit.net/zcg5xnb.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="/../css/normalize.css">
  <link rel="stylesheet" href="/../css/skeleton.css">
  <link rel="stylesheet" href="/../css/custom.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="/../images/favicon.png">

  <!-- SCRIPTS
  ================================================== -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
  <script src="/../js/vendor/modernizr.js"></script>
  <script src="/../js/vendor/jquery.js"></script>
  <script src="/../js/foundation.min.js"></script>
  <script src="/../js/classie.js"></script>
  <script src="/../js/jquery-2.1.0.min.js"></script>
  <script src="/../js/app.js"></script>
  <script src="/../js/apps.js"></script>
  <script src="/../js/mailcheck.min.js"></script>
  <script src="/../js/jquery.label_better.js"></script>

  <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
  <script>
 $(document).ready(function(){ 
  $("#first").click(function() { 
    $("#bank").fadeIn("slow");
    $("#first-name").focus();
    $("#other-device").hide();
  });

  $("#second").click(function() { 
    $("#other-device").fadeIn("slow");
    $("#bank").hide();
  });
   
  $("#third").click(function() { 
    $("#other-device").fadeIn("slow");
    $("#bank").hide();
  });
});
  </script>

</head>
<body>
  
  <header> 
    <div class="nav">
      <img class="reg-logo" src="/../img/nomful.png"/>
    </div>
  </header><!-- /header -->
  
  <div class="container">
    <div class="top-masthead">
        <h1>Nutrition support built around you</h1>
        <p>Nomful makes eating healthy easy. Team up with a dedicated nutrition coach to get the personalized support you need. Transform your health.</p>
        <br>
        <h3>Choose your device below.</h3>
    </div>
  </div>
  
  <div class="container">
    <div class="center">
      <img class="phone-pick" id="first" src="/../img/1.png">
      <img class="phone-pick" id="second" src="/../img/2.png">
      <img class="phone-pick" id="third" src="/../img/3.png">
    </div>
  </div>
  
  <div class="container" id="other-device">
    <h5>Cinnamon sticks! Nomful is currently available exclusively on iOS devices.</h5>
    <p>Be the first to be notified of when Nomful will be available on your device!</p>
    <div id="form-messages"></div>
    <form class="email-form" id="ajax-contact" method="post" action="/../mailer.php" novalidate>
      <input type="email" id="join-email" name="join-email" placeholder="your email" />
      <input type="text"  id="sp-website" name="sp-website" value=""  />
      <input type="phone" id="sp-phone" name="sp-phone" value="" />
      <input type="submit" value="Join now" />
      <p id="suggestion"></p>
    </form>
  </div>

  
  
  <div class="container mbudge" id="bank">
    <h4 class="center">Great! Now tell us about yourself.</h4>
  <div class="form-container mbudge">
    
    <div id="register-messages"></div>
    
    <form id="ajax-register" method="post" action="register-cookie.php" novalidate>
    <div class="row">
      <div class="six columns">
        <input class="u-full-width label_better mbudge" data-new-placeholder="first name" type="text" placeholder="first name" name="first-name" id="first-name">
      </div>
      <div class="six columns">
        <input class="u-full-width label_better mbudge" data-new-placeholder="last name" type="text" placeholder="last name" name="last-name" id="last-name">
      </div>
    </div>
    <div class="row">
      <div class="six columns">
        <input class="u-full-width label_better mbudge" data-new-placeholder="email" type="email" placeholder="email" name="email" id="email">
      </div>
      <div class="six columns">
        <input class="u-full-width label_better mbudge" data-new-placeholder="cell phone" type="tel" placeholder="cell phone" name="cell-phone" id="cell-phone">
      </div>
    </div>
      
    <div class="row">
      <div class="six columns">
        <input class="u-full-width label_better mbudge" data-new-placeholder="password" type="password" placeholder="password" name="password" id="password">
      </div>
      <div class="six columns">
        <input class="u-full-width label_better mbudge" data-new-placeholder="re-type password" type="password" placeholder="re-type password" name="retype-password" id="retype-password">
      </div>
    </div>
      
    <div class="row">
      <div class="twelve columns">
        <input class="u-full-width label_better mbudge" data-new-placeholder="motivation for joining" type="text" placeholder="motivation for joining" name="motivation" id="motivation">
      </div>
    </div>
    <input type="text"  id="sp-website-r" name="sp-website-r" value=""  />
    <input type="phone" id="sp-phone-r" name="sp-phone-r" value="" />
    <input class="button-primary u-pull-right mbudge" type="submit" value="Continue">
    </form>
  </div>
  </div>
  
  
  
  
  

<script>
var domains = ['hotmail.com', 'gmail.com', 'aol.com'];
var topLevelDomains = ["com", "net", "org"];
$('#join-email').on('blur', function(event) {
  console.log("event ", event);
  console.log("this ", $(this));
  $(this).mailcheck({
    domains: domains,                       // optional
    topLevelDomains: topLevelDomains,       // optional
    suggested: function(element, suggestion) {
      // callback code
      var suggestion = "Yikes! Did you mean <span class='suggestion'>" + suggestion.full + "</span> ?";
      $('#suggestion').html(suggestion).fadeIn(150);
    },
    empty: function(element) {
      // callback code
      $('#suggestion').html(''); // fill in html if you'd like a message to appear
    }
  });
});

$('#suggestion').on('click', function() {
  // On click, fill in the field with the suggestion and remove the hint
  $('#join-email').val($(".suggestion").text());
  $('#suggestion').fadeOut(200, function() {
    $(this).empty();
  });
  return false;
});
  
  $("input.label_better").label_better({
    position: "top",
    animationTime: 400,
    easing: "bounce",
    offset: 10,
    hidePlaceholderOnFocus: true
  });
  
</script>
  
  
  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>