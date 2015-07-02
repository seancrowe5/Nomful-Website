<?php 
require_once('vendor/autoload.php');
require_once('./config.php');

   if (!isset($_COOKIE['user'])) { 
    header ( "Location: index.php" ); 
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
  <script src="/../js/forms/discount-verify.js"></script>
  <script src="/../js/forms/plan-select.js"></script>
  <script src="/../js/mailcheck.min.js"></script>
  <script src="/../js/jquery.label_better.js"></script>
  <script src="/../js/spin.min.js"></script>
  <script src="/../js/iosOverlay.js"></script>
  <link rel="stylesheet" href="https://taitems.github.io/iOS-Overlay/css/iosOverlay.css">
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
  
  <?php
  //get user cookie and save to $obj
  $return=$_COOKIE['user'];
  $obj = json_decode($return);

  //get first name and email from cookie
  $first_name = $obj->{'first_name'}; // 12345
  $email = $obj->{'email'};

  //***hard code pricing
  $basicPrice = 109;
  $premiumPrice = 279;
  ?>
  
  
<?php // This code checks to see if the discount code cookie has been set
  if(isset($_COOKIE['partner_info'])) { 
    $return = $_COOKIE['partner_info'];
    $objs = json_decode($return);
    $club = $objs->{'club'};
    $basicPrice = $objs->{'basic_price'};
    $premiumPrice = $objs->{'premium_price'};
    $gymID = $objs->{'gymID'};

    $basicOGPrice = 109;
    $premiumOGPrice = 279; 
  
    $intro_message = 'Congrats ' . $first_name . '! As a member of ' . $club . ' we have already applied your special pricing!'; // if they do have a partner!! ?>  
    <!-- <script>
      $(document).ready(function(){
        $("#group-code-question").hide(); // if yes we don't ask the user anymore and hide the form 
        $("#group-code-success").hide().fadeIn(1200); // and we fade in the success message
      });</script> -->
  <?php } else { 
    $intro_message = 'Congrats ' . $first_name . ', you are almost done! Choose a plan that fits your needs below.'; // if they are not from a club ?> 
    <style>
      .og-price-small {
        display: none;
      }
    </style>
    <!-- <script>
      $(document).ready(function(){
        $(".og-price-small").hide();
      });
    </script> -->
  <?php }  ?>
  
  
  <?php // This code checks to see if the coupon code cookie has been set, and if yes, get rid of the coupon field
  if(isset($_COOKIE['coupon_info'])) { 
    $returns = $_COOKIE['coupon_info'];
    echo $returns;
    $goods = json_decode($returns);
    echo 'asdfasdf asdf asdfasdf ' . $goods;
    $percent_off = $goods->{'percent_off'}; 
    $basicPrice = (100 - $percent_off)/100*basicPrice;
    $premiumPrice = (100 - $percent_off)/100*premiumPrice; 
    $basicOGPrice = 109;
    $premiumOGPrice = 279; 
  
    echo '1111111111111 this is p off' . $percent_off; ?>
    <style>
      #coupon-code-form {
        display: none;
      }
    </style>
  <?php }  ?>
  
  
 <div class="form-container center" id="coupon-code-form">
    <form id="ajax-discount" method="post" action="discount-verify.php" novalidate>
      <h4>If you have a coupon code, enter it below!</h4>
      <div id="discount-messages"></div>
      <div class="row">
        <input class="label_better" data-new-placeholder="coupon code" type="text" placeholder="coupon code" name="coupon-code" id="coupon-code">
        <input type="text"  id="sp-website-r" name="sp-website-r" value=""  />
        <input type="phone" id="sp-phone-r" name="sp-phone-r" value="" />
        <input class="button-primary" type="submit" id="btns" value="Continue">
      </div>
    </form>
  </div>
  
  
<div class="top-masthead" id="group-code-success">
<h4><?php echo $intro_message; ?></h4>
</div>
  
  
  <div class="form-container center">
    <div class="row">
      <div class="six columns">
        <h3><span class="group-price"><?php echo '$' . $basicPrice; ?></span> <span class="og-price-small"><?php echo '$' . $basicOGPrice; ?></span> <span class="per_month"> per month</span></h3>
        <ul class="no-dec">
          <li>Initial phone consultation</li>
          <li>Monthly phone call check-ins</li>
          <li>Around-the-clock nutrition support</li>
          <li>Simple, photo-based meal logging</li>
        </ul>
        <button id="join-basic-plan">join basic plan</button>
      </div>
      <div class="six columns">
        <h3><span class="group-price"><?php echo '$' . $premiumPrice; ?></span> <span class="og-price-small"><?php echo '$' . $premiumOGPrice; ?></span> <span class="per_month"> per month</span></h3>
        <ul class="no-dec">
          <li>Everything in basic</li>
          <li>Extensive diet analysis</li>
          <li>Weekly phone call check-ins</li>
          <li>Comprehensive meal plan support</li>
        </ul>
        <button id="join-premium-plan">join premium plan</button>
      </div>
    </div>
  </div>  
  
  
  <form action="charge.php" method="post" id="basicForm">
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key          =   "<?php echo $stripe['publishable_key']; ?>"
            data-amount       =   "<?php echo $basicPrice*100; ?>" 
            data-description  =   "Basic Plan" //title at top
            data-panel-label  =   "Pay" //blue button _______ $99.00
            data-email        =   "<?php echo $email; ?>" //prefills the email if we already know it
            data-label        =   "" //blue button to initiate pay flow
            >
    </script>
  </form>
  
  <form action="charge.php" method="post" id="premiumForm">
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key          =   "<?php echo $stripe['publishable_key']; ?>"
            data-amount       =   "<?php echo $premiumPrice*100; ?>" 
            data-description  =   "Premium Plan" //title at top
            data-panel-label  =   "Pay" //blue button _______ $99.00
            data-email        =   "<?php echo $email; ?>" //prefills the email if we already know it
            data-label        =   "" //blue button to initiate pay flow
            >
    </script>
  </form>
  
    <!-- Stripe magic and cookie setting
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script>
  
  $('#join-basic-plan').click(function(){
    $("form#basicForm button.stripe-button-el").click();
    var plan = 'basic';
    
    $.ajax({
      type: "POST",
      url: 'plan-select.php',
      data: { plan : plan }
    });
    
    });
    
  $('#join-premium-plan').click(function(){
    $("form#premiumForm button.stripe-button-el").click();
    var plan = 'premium';
    
    $.ajax({
      type: "POST",
      url: 'plan-select.php',
      data: { plan : plan }
    });
    
    });
  </script>

  

  
  
  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
