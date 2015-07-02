<?php
//this loads the Stripe and parse classes and sets the api key for stripe
require_once('./config.php');

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
          
      // Get the coupon code
      $coupon_code  = $_POST["coupon-code"];
      $coupon_code = strtolower($coupon_code);

      $coupon_valid = false;
      try {
        //has to reference the \Stripe library then then \Coupon classs
        //same syntax we used in the charge file to create a charge on a customer --> $customer = \Stripe\Customer::create
        $coupon = \Stripe\Coupon::retrieve($coupon_code); //check coupon exists

        if($coupon !== NULL) {
          $coupon_valid = true; //set to true our coupon exists or take the coupon id if you wanted to.
          //$message = 'Congratulations! We applied your coupon code :)';
          //if we got here, the coupon is valid
          //$coupon variable contains the COUPON OBJECT NOW...
          $c = json_encode($coupon);
          setcookie(
            'coupon_info',				// Name of the cookie, required
            $c,					        // The value of the cookie
            time()+60*60*24,			// Expiration time, set for a day in the future
            '/',						// Folder path the cookie will be available for
            'nomful.com'		        // Domain to which the cookie will be bound
          );
        }

      } catch (Exception $e) {
        // an exception was caught, so the coupon code is invalid
        $message = $e->getMessage();
      }

      // if you need to quickly test via sending emails
      /*$recipient = "thomas@nomful.com";
      $subject = "coupon thingy";
      $email_content = "I guess it works";
      mail($recipient, $subject, $email_content);*/

      // Send the email.
      if ($coupon_valid) {
        // Set a 200 (okay) response code.
        http_response_code(200);
        //echo $message;
      } else {
        // Set a 500 (internal server error) response code.
        http_response_code(500);
        echo $message;
      }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "Ya you shouldn't be here.";
    }

?>
