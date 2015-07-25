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
  <script src="referral.js"></script>
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
      <h1>Submit a referral</h1>
      <p>Track who you refer to Nomful and get extra cash for those who sign up! Fill out the information below.</p>
    </div>
  </div>
  
  <div class="form-container mbudge">
    
    <div id="referral-messages"></div>
    
    <form id="ajax-referral" method="post" action="referral-process.php" novalidate>
    <div class="row">
      <div class="six columns">
        <input class="u-full-width label_better mbudge" data-new-placeholder="client first name" type="text" placeholder="client first name" name="client-first-name" id="client-first-name">
      </div>
      <div class="six columns">
        <input class="u-full-width label_better mbudge" data-new-placeholder="client last name" type="text" placeholder="client last name" name="client-last-name" id="client-last-name">
      </div>
    </div>
    <div class="row">
      <div class="six columns">
        <input class="u-full-width label_better mbudge" data-new-placeholder="your email" type="email" placeholder="your email" name="trainer-email" id="trainer-email">
      </div>
      <div class="six columns">
        <input class="u-full-width label_better mbudge" data-new-placeholder="your name" type="text" placeholder="your name" name="trainer-name" id="trainer-name">
      </div>
    </div>

    <input type="text"  id="sp-website-r" name="sp-website-r" value=""  />
    <input type="phone" id="sp-phone-r" name="sp-phone-r" value="" />
    <input class="button-primary u-pull-right mbudge" type="submit" value="Submit">
    </form>
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
    $("#client-first-name").focus();
  });
</script>
  
  
  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>