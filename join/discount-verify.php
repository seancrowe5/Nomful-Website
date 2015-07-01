<?php
   require 'vendor/autoload.php';
    use Parse\ParseClient;
    use Parse\ParseQuery;
    use Parse\ParseObject;
//live
//ParseClient::initialize('KjqhJkgvtVSsPA9SVHxq1Euad73fWhLWfVS4LNxO', '9V1I071QAS4aveQRkxabmIY2wzisgnGQ1UH4SVG0', 'j3W9jcVXVgWQDfamFbm7UodDiYOSPjinnEAR7EdS');
//dev
ParseClient::initialize('EcHepDGBmNvZhRx8D1vMFLzMPgqAXqfIjpiIJuIe', 'cyksn8TZdJyJVIeM0RbTMkGmHlped7dMhoksgrxm', 'fk2DwxckV3Pe4fKGRs6LH1YaZkslDTu86TS6Ouv5');

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
//        // Get the group code
//        $group_code  = $_POST["group-code"];
//        $group_code = strtolower($group_code);
//    
//        //get email from existing cookie
//        $return = $_COOKIE['user'];
//        $objs = json_decode($return);
//        $userPhone = $objs->{'cell_phone'}; // 12345
//            
//        //let's query the gym table to find if the group code exists
//        $query = new ParseQuery("Gym");
//        $query->equalTo("accessCode", $group_code);
//        $results = $query->find();
//
//        //the result from the query is alwasy an array...even if there is only one result
//        if(count($results) == 0){
//            //if the results array has 0 results...then there are no matching codes in our database
//            http_response_code(500);
//            echo "Oops! Try that code again."; // give an error if the code is incorrect or does not exist
//            exit;
//        }else{
//            //There is a match to our group code in the database
//            //Success! The user has entered a confirmed code
//            
//            //take the results array and get the first object (there should only be one object)
//            //set that result to a gymObject...this variable contains ALL information about that gym
//            $gymObject = $results[0];
//            
//            //get info for coookie:
//    
//            //get gym object details for the cookie
//            $accessCode = $gymObject->get("accessCode");
//            $club = $gymObject->get("businessName");
//            $basicPrice = $gymObject->get("standardPrice");
//            $premiumPrice = $gymObject->get("premiumPrice");
//            $gymID = $gymObject->getObjectId();
//
//            
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
                $coupon = Stripe_Coupon::retrieve('tester'); //check coupon exists
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
