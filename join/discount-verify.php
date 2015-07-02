<?php
//this loads the Stripe and parse classes and sets the api key for stripe
require_once('./config.php');

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
       
        // Get the group code
        $coupon_code  = $_POST["coupon-code"];
        $coupon_code = strtolower($coupon_code);
    
//        //get email from existing cookie
//        $return = $_COOKIE['user'];
//        $objs = json_decode($return);
//        $userPhone = $objs->{'cell_phone'}; // 12345
            
//          // take the information from the gymObject and set in cookie
//          $code_info = array(
//            'code' => $accessCode, // this is the NAME of the GROUP CODE
//            'club' => $club, // this is the NAME of the affiliate partner
//            'basic_price' => $basicPrice, // this is the PRICE of the BASIC plan for this group code
//            'premium_price' => $premiumPrice, // this is the PRICE of the PREMIUM plan for this group code
//            'gymID' => $gymID //gym id
//          );
//          
//        $c = json_encode($code_info);
//        setcookie(
//          'code_info',				// Name of the cookie, required
//          $c,					// The value of the cookie
//          time()+60*60*24,			// Expiration time, set for a week in the future
//          '/',						// Folder path the cookie will be available for
//          'nomful.com'		// Domain to which the cookie will be bound
//        );

      $using_discount = false;
      
          try {
              
              //code was wrong...has to reference the \Stripe library then then \Coupon classs
              //same syntax we used in the charge file to create a charge on a customer --> $customer = \Stripe\Customer::create
                $coupon = \Stripe\Coupon::retrieve($coupon_code); //check coupon exists
              
                if($coupon !== NULL) {
                 $using_discount = true; //set to true our coupon exists or take the coupon id if you wanted to.
                }
                // if we got here, the coupon is valid
              //$coupon variable contains the COUPON OBJECT NOW...

             } catch (Exception $e) {
                // an exception was caught, so the code is invalid
                $message = $e->getMessage();
                
             }

      
      
        //Check to see if the group code is actually valid
        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "thomas@nomful.com";

        // Set the email subject.
        $subject = $using_discount. "group code - coupon thingy";

        // Build the email content.
        $email_content = "I guess it works";

        // Send the email.
        if (mail($recipient, $subject, $email_content)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo $using_discount . '----' . $coupon . '----' . $message;
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong.";
        }

    } 
     else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
