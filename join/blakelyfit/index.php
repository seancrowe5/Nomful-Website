<?php 
    //this is the co-braded page for Nomful + MAC

  $partner_info = array(
    'plan_base' => 'blakelyfit', //THIS HAS TO MATCH THE ID IN STRIPE
    'club' => 'Blakelyfit', // this is the NAME of the affiliate partner
    'basic_price' => '0 - 10 Days Free', // this is the PRICE of the BASIC plan for this group code
    'premium_price' => '199', // this is the PRICE of the PREMIUM plan for this group code
    'gymID' => 'JHFOIGfado' //gym id for fit   
  );

  $c = json_encode($partner_info);
  setcookie(
    'partner_info',				// Name of the cookie, required
    $c,					        // The value of the cookie
    time()+60*60*24,			// Expiration time, set for a week in the future
    '/',						// Folder path the cookie will be available for 
    'nomful.com'		        // Domain to which the cookie will be bound
  );


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

  <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> 
  <![endif]-->

</head>
<body>
  
  <div class="container mbudges">
    <div class="tables center">
      <img class="partnerlogo cell-middle" src="/../img/blakelyfit.png"/>
      <img class="partnerlogo cell-middle" src="/../img/nomful.png"/>
    </div>
    <div class="top-masthead-join mbudges">
      <p>Nomful is proud to bring you with personalized nutrition support from the experts, right on your phone.<br>If you have any additional questions or need help, email <a href="mailto:thomas@nomful.com">support@nomful.com</a> or call us anytime at (562) 666 - 3858.</p>
    </div>
  </div>
  
    
  <div class="form-container">
    <div class="row">
      <div class="offset-by-three six columns center">
        <a class="button" href="../">Member Sign-up</a>
      </div>
    </div>
  </div>
  
  <style>
    html { 
    background: url(http://nomful.com/img/strawberry.jpg) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
  </style>
  
  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>