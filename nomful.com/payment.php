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
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/custom.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- SCRIPTS
  ================================================== -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
  <script src="js/vendor/modernizr.js"></script>
  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script src="js/classie.js"></script>
  <script src="js/jquery-2.1.0.min.js"></script>
  <script src="js/app.js"></script>
  <script src="js/apps.js"></script>
  <script src="js/mailcheck.min.js"></script>
  <script src="js/jquery.label_better.js"></script>

  <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<body>
  
  <header> 
    <div class="nav">
      <img class="reg-logo" src="img/nomful.png"/>
    </div>
  </header><!-- /header -->
  
  <?php

  $return=$_COOKIE['user'];
  $arr=json_decode($return, true);
  foreach($arr as $key1 => $values)
  {
    echo $key1.' : '.$values.'<br>';
  }

  $obj = json_decode($return);
  $first_name = $obj->{'first_name'}; // 12345
  ?>
  
  <div class="container">
    <div class="top-masthead">
        <h3>Hey <?php echo $first_name; ?>, do you have a group code?</h3>
    </div>
  </div>
  
  <div class="form-container">
    <div class="row">
      <div class="six columns">
        <h3>$99</h3>
        <ul>
          <li>dedicated nutrition support</li>
          <li>even more things</li>
          <li>yass so many goodness</li>
        </ul>
      </div>
      <div class="six columns">
        <h3>$99</h3>
        <ul>
          <li>dedicated nutrition support</li>
          <li>even more things</li>
          <li>yass so many goodness</li>
        </ul>
      </div>
    </div>
  </div>
  

  
  
  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
