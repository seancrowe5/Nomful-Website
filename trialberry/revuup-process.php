<?php
require 'vendor/autoload.php';
use Parse\ParseClient;
use Parse\ParseUser;
use Parse\ParseQuery;
use Parse\ParseObject;


//live
ParseClient::initialize('KjqhJkgvtVSsPA9SVHxq1Euad73fWhLWfVS4LNxO', '9V1I071QAS4aveQRkxabmIY2wzisgnGQ1UH4SVG0', 'j3W9jcVXVgWQDfamFbm7UodDiYOSPjinnEAR7EdS');

//dev
//ParseClient::initialize('EcHepDGBmNvZhRx8D1vMFLzMPgqAXqfIjpiIJuIe', 'cyksn8TZdJyJVIeM0RbTMkGmHlped7dMhoksgrxm', 'fk2DwxckV3Pe4fKGRs6LH1YaZkslDTu86TS6Ouv5');

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        
        //i don't think these are in the right data type...parse doesn't like them
        $first_name = $_POST["first-name"];
        $email = $_POST["email"];
        
        //save user to parse
         //PARSE
        //build user object
        $user = new ParseUser();
        $user->set("username",      $_POST['email']);
        $user->set("password",      $_POST['password']);
        $user->set("email",         $_POST['email']);
        $user->set("phoneNumber",   $_POST['cell-phone']);
        $user->set("firstName",     $_POST['first-name']);
        $user->set("lastName",      $_POST['last-name']);
        $user->set("motivation",      $_POST['motivation']);
        $user->set("role",          "Client");

        //save user object to parse
        try {
          $user->signUp();
          // Hooray! USER SIGNED UP...NOW DO STUFF HERE 
          
        } catch (ParseException $ex) {
          //OH NO! ERROR OCCURED. THOMAS 
          // Show the error message somewhere and let the user try again.
          http_response_code(500);
          echo "Error: " . $ex->getCode() . " " . $ex->getMessage();
          exit;
        }
        
        
        //get the gym object for REVUUP: Wacv1Ck6Tf
        $query = new ParseQuery("Gym");
        try {
          $gymObject = $query->get("XNDGTgMQtW"); //for dailey method use only //XNDGTgMQtW cross 3wpXUaiaFJ//dailey method
          // The object was retrieved successfully.
        } catch (ParseException $ex) {
          // The object was not retrieved successfully.
          // error is a ParseException with an error code and message.
        }
                
        
        //we just need the user phone and gym object
        //let's now associate the user with REVUUP as 'paying' customers
        $gymMember = new ParseObject("GymMembers");
        $gymMember->set("GymObjects", $gymObject);
        $gymMember->set("userPhone", $_POST['cell-phone']);

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

        
        
        
        // Check that data was sent to the mailer.
        if ( !filter_var($email, FILTER_VALIDATE_EMAIL)) {
          // Set a 400 (bad request) response code and exit.
          http_response_code(400);
          echo "Oops! There was a problem with your email. Please try again.";
          exit;
        }
      
        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "thomas@nomful.com";

        // Set the email subject.
        $subject = "New trial berry signed up - $first_name";

        // Build the email content.
        $email_content .= "First Name: $first_name\n\n";
        $email_content .= "Email: $email\n\n";
      
      
        // Build the email headers.
        $email_headers = "From: <$email>"; 
               
        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank you! Registration successful.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
