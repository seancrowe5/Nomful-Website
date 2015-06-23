<?php
  require_once('../config.php');
  require '../vendor/autoload.php';
    use Parse\ParseClient;
    use Parse\ParseQuery;
    use Parse\ParseObject;
//live
//ParseClient::initialize('KjqhJkgvtVSsPA9SVHxq1Euad73fWhLWfVS4LNxO', '9V1I071QAS4aveQRkxabmIY2wzisgnGQ1UH4SVG0', 'j3W9jcVXVgWQDfamFbm7UodDiYOSPjinnEAR7EdS');
//dev
ParseClient::initialize('EcHepDGBmNvZhRx8D1vMFLzMPgqAXqfIjpiIJuIe', 'cyksn8TZdJyJVIeM0RbTMkGmHlped7dMhoksgrxm', 'fk2DwxckV3Pe4fKGRs6LH1YaZkslDTu86TS6Ouv5');

//test
$stripe = array(
  "secret_key"      => "sk_test_uMTJhaR5rAwMtnsLLKH9wTBx",
  "publishable_key" => "pk_test_JQ0bC9TcrUXB06bKoMjYjw3l"
);


\Stripe\Stripe::setApiKey($stripe['secret_key']);

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      try {
        $couponCode  = 'tester';
        
        $coupon = Stripe_Coupon::retrieve( 'tester' ); //check coupon exists
        if($coupon !== NULL) {
         $using_discount = true; //set to true our coupon exists or take the coupon id if you wanted to.
        }
        // if we got here, the coupon is valid

     } catch (Exception $e) {
        // an exception was caught, so the code is invalid
        $message = $e->getMessage();
        returnErrorWithMessage($message);
     }
      

      
        //Check to see if the group code is actually valid
        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "thomas@nomful.com";

        // Set the email subject.
        $subject = "group code";

        // Build the email content.
        $email_content = "I guess it works";

        // Send the email.
        if (mail($recipient, $subject, $email_content)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Applying group code." . $coupon . ' ' . $message;
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong." . $message;
        }

    } 
    else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
