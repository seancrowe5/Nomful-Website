<?php
require '../vendor/autoload.php';
use Parse\ParseClient;
use Parse\ParseUser;
use Parse\ParseException;
use Parse\ParseQuery;
//live
ParseClient::initialize('KjqhJkgvtVSsPA9SVHxq1Euad73fWhLWfVS4LNxO', '9V1I071QAS4aveQRkxabmIY2wzisgnGQ1UH4SVG0', 'j3W9jcVXVgWQDfamFbm7UodDiYOSPjinnEAR7EdS');

    // My modifications to mailer script from:
    // http://blog.teamtreehouse.com/create-ajax-contact-form
    // Added input sanitizing to prevent injection

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        //$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        
        //get the cell phone from the form on the webpage
        $cell_phone = $_POST["cell-phone"]; //(330) 671-4458 format
        $cell_phone = "(".substr($cell_phone, 0, 3).") ".substr($cell_phone, 3, 3)."-".substr($cell_phone,6);

        try {
            //parse code
            //query users with that phone number 
            $query = ParseUser::query();
            $query->equalTo("phoneNumber", $cell_phone); 
            //return the frist user with that number
            $user = $query->first(); 
            
        } catch (ParseException $e){
            //objqect not found
            //don't redirect to the signup flow
            http_response_code(500);
            echo "Oops!";
            echo $e->getMessage();
            exit;
        } //end catch       
        
        if($user){
             //set email and firstname for the payment page 
            $email = $user->get("email");
            $firstName = $user->get("firstName");

            try {
              ParseUser::requestPasswordReset($email);
                // Password reset request was sent successfully
            } catch (ParseException $ex) {
              // Password reset failed, check the exception message
            }
        }else{
            //the user object was not found...show message
            http_response_code(500);
            echo "Looks like your phone number isn't registered with Nomful!";
            exit;
            
        }//end if user
       
        
        //set contents for cookie
        $contents = array('cell_phone' => $_POST["cell-phone"], 'first_name'=>$firstName, 'email'=>$email);
    
        //json encode the contentes
        $c=json_encode($contents);
        
        //set the cookie
        $cookieset = setcookie(
          'user',				// Name of the cookie, required
          $c,					// The value of the cookie
          time()+60*60*24,		// Expiration time, set for a week in the future
          '/',					// Folder path the cookie will be available for
          'nomful.com'		    // Domain to which the cookie will be bound
        );

        
               
        // Send the email.
        if ($cookieset) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "yassss it twerks Thank You!";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong. Problem.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
