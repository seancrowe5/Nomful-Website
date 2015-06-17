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
  <script src="trainer-register.js"></script>
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
    <div class="top-masthead">
      <h1>Trainer Registration</h1>
      <p>If you'd like to connect with you clients and their nutrition coach, sign up below! Once you do, you'll be able to log into the app.</p>
    </div>
  </div>
  
  <div class="form-container mbudge">
    
    <div id="trainer-messages"></div>
    
    <form id="ajax-trainer" method="post" action="trainer-process.php" novalidate>
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

    <input type="text"  id="sp-website-r" name="sp-website-r" value=""  />
    <input type="phone" id="sp-phone-r" name="sp-phone-r" value="" />
    <input class="button-primary u-pull-right mbudge" type="submit" value="Register">
    </form>
    
    <div id="success-trainers" class="center">
      <p>You have successfully signed up. Please continue by downloading the app, and hit LOGIN to login with the credentials you just used.</p>
      <br>
      <a href="https://itunes.apple.com/US/app/id991589420?mt=8#" class="button button-primary">Download App</a>
    </div>
  </div>
  
  
  

<script>  
  $("input.label_better").label_better({
    position: "top",
    animationTime: 400,
    easing: "bounce",
    offset: 10,
    hidePlaceholderOnFocus: true
  });
  
  $(document).ready(function(){ 
    $("#first-name").focus();
  });
</script>
  
  
  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>