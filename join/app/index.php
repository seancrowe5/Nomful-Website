<?php
   if (isset($_COOKIE['user'])) { 
    header ( "Location: /../payment.php" ); 
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
  <script src="app-cookie.js"></script>
  <script src="/../js/mailcheck.min.js"></script>
  <script src="/../js/jquery.label_better.js"></script>

  <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<body>
  
  <header> 
    <div class="nav">
      <img class="reg-logo" src="/../img/nomful.png"/>
    </div>
  </header><!-- /header -->
  
  <div class="container">
    <div class="top-masthead-join pbudge">
        <h1>Nutrition support built around you</h1>
        <p>Nomful makes eating healthy easy. Team up with a dedicated nutrition coach to get the personalized support you need.</p>
        <br>
    </div>
  </div>
  
  <div class="form-container mbudge">
    <div id="app-messages"></div>
    
    <form id="ajax-app" method="post" action="app-cookie.php" novalidate>
    <div class="row">
      <h4 class="center">Please verify your phone number below.</h4>
      <div class="offset-by-three six columns">
        <input class="u-full-width label_better mbudge" data-new-placeholder="cell phone" type="tel" placeholder="cell phone" name="cell-phone" id="cell-phone">
      </div>
    </div>
      
    <input type="text"  id="sp-website-r" name="sp-website-r" value=""  />
    <input type="phone" id="sp-phone-r" name="sp-phone-r" value="" />
    <input class="button-primary u-pull-right mbudge" type="submit" value="Continue">
    </form>
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