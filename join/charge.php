<?php
require 'vendor/autoload.php';
    use Parse\ParseClient;
    use Parse\ParseQuery;
    use Parse\ParseObject;
//live
//ParseClient::initialize('KjqhJkgvtVSsPA9SVHxq1Euad73fWhLWfVS4LNxO', '9V1I071QAS4aveQRkxabmIY2wzisgnGQ1UH4SVG0', 'j3W9jcVXVgWQDfamFbm7UodDiYOSPjinnEAR7EdS');
//dev
ParseClient::initialize('EcHepDGBmNvZhRx8D1vMFLzMPgqAXqfIjpiIJuIe', 'cyksn8TZdJyJVIeM0RbTMkGmHlped7dMhoksgrxm', 'fk2DwxckV3Pe4fKGRs6LH1YaZkslDTu86TS6Ouv5');

   if (!isset($_COOKIE['user'])) { 
    header ( "Location: payment.php" ); 
   } 
  require_once('./config.php');

  $token  = $_POST['stripeToken'];
  $email = $_POST['stripeEmail'];


//query parse for the user with that email
//if found...then get the plan they are subscribed to 
    //$plan = 'plan from parse';

//****
///if user doens't come fomr co-branded page...then we need to check if ther is NO cookie
//otherwise they can't successfully checkout
//******

//do you need anything from the "user" cookie?
$return = $_COOKIE['partner_info'];
        $objs = json_decode($return);
        $plan_base = $objs->{'plan_base'};

$returns = $_COOKIE['coupon_info'];
        $goods = json_decode($returns);
        $coupon_id = $goods->{'id'};

$type = $_COOKIE['plan_info']; // will return either "basic-plan" or "premium-plan"
$plan = $type . '-' . $plan_base;


try {
    
    if (isset($_COOKIE['coupon_info'])){
        //if coupon is used then charge with coupon
        $customer = \Stripe\Customer::create(array(
          "source" => $token, // obtained from Stripe.js
          "plan" => $plan,
          "email" => $email,
          "coupon" => $coupon_id
        ));
        $success = 1;
    }else{
        //no coupon used
        $customer = \Stripe\Customer::create(array(
          "source" => $token, // obtained from Stripe.js
          "plan" => $plan,
          "email" => $email
        ));
        $success = 1;
    } 
} catch(Stripe_CardError $e) {
  $error1 = $e->getMessage();
} catch (Stripe_InvalidRequestError $e) {
  // Invalid parameters were supplied to Stripe's API
  $error2 = $e->getMessage();
} catch (Stripe_AuthenticationError $e) {
  // Authentication with Stripe's API failed
  $error3 = $e->getMessage();
} catch (Stripe_ApiConnectionError $e) {
  // Network communication with Stripe failed
  $error4 = $e->getMessage();
} catch (Stripe_Error $e) {
  // Display a very generic error to the user, and maybe send
  // yourself an email
  $error5 = $e->getMessage();
} catch (Exception $e) {
  // Something else happened, completely unrelated to Stripe
  $error6 = $e->getMessage();
}

if ($success!=1)
{
    $_SESSION['error1'] = $error1;
    $_SESSION['error2'] = $error2;
    $_SESSION['error3'] = $error3;
    $_SESSION['error4'] = $error4;
    $_SESSION['error5'] = $error5;
    $_SESSION['error6'] = $error6;
    header('Location: payment.php');
    exit();
}

else {   
  
    //payment successful...do stuff
    
    //get info from cookie
    $return = $_COOKIE['user'];
    $userCookie = json_decode($return);
    $userPhone = $userCookie->{'cell_phone'}; 
    $first_name = $userCookie->{'first_name'};
    
     //get info from cookie
    $returns = $_COOKIE['partner_info'];
    $partnerCookie = json_decode($returns);
    $gymID = $partnerCookie->{'gymID'};
  
   

    //we have the user phone...check
    //we have the gym ID...check
    //let's go get the Gym Object based on the ID we got from cookie
    $query = new ParseQuery("Gym");
    try {
        if($gymID){
            //there is a gym id from cookie
            $gymObject = $query->get($gymID);
            // The object was retrieved successfully.
            //let's know associate the user with the gym they are a member fo
            $gymMember = new ParseObject("GymMembers");
            $gymMember->set("GymObjects", $gymObject);
            $gymMember->set("userPhone", $userPhone);
        }else{
            //there is no gymid from cookie
            $gymMember = new ParseObject("GymMembers");
            $gymMember->set("userPhone", $userPhone);
        }
        
    } catch (ParseException $ex) {
      // The object was not retrieved successfully.  
        //parse error thrown here
    }
    

    //save the object ot parse
    try {
      $gymMember->save();
      //saved successfully

    } catch (ParseException $ex) {  
      // Execute any logic that should take place if the save fails.
      // error is a ParseException object with an error code and message.
        http_response_code(500);
        echo 'Failed to create new object, with error message: ' + $ex->getMessage();
    }

    

  
setcookie ("user", "", time()-60*60*25, '/', 'nomful.com'	);
setcookie ("plan_info", "", time()-60*60*25, '/', 'nomful.com'	);
setcookie ("partner_info", "", time()-60*60*25, '/', 'nomful.com' );
setcookie ("coupon_info", "", time()-60*60*25, '/', 'nomful.com' );

  
unset($_COOKIE['user']);
unset($_COOKIE['plan']);
unset($_COOKIE['partner_info']);
unset($_COOKIE['coupon_info']);

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
  <script src="referral.js"></script>
  <script src="/../js/mailcheck.min.js"></script>
  <script src="/../js/jquery.label_better.js"></script>

  <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<body>
  <div class="full-bowl">
  <header> 
    <div class="nav">
      <img class="reg-logo" src="/../img/nomful.png"/>
    </div>
  </header><!-- /header -->
  
  <div class="container">
    <div class="top-masthead">
      <h2>Congratulations <?php echo $first_name; ?>!</h2>
      <p>You have successfully signed up. Please continue by downloading the app and press LOGIN to login with the credentials you just used.</p>
      <br>
      <a href="https://itunes.apple.com/US/app/id991589420?mt=8#" class="button button-primary">Download App</a>
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

<?php 
  

} ?>
