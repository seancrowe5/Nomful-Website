<?php
require 'vendor/autoload.php';
use Parse\ParseClient;
use Parse\ParseUser;
use Parse\ParseException;
use Parse\ParseCloud;
//live
ParseClient::initialize('KjqhJkgvtVSsPA9SVHxq1Euad73fWhLWfVS4LNxO', '9V1I071QAS4aveQRkxabmIY2wzisgnGQ1UH4SVG0', 'j3W9jcVXVgWQDfamFbm7UodDiYOSPjinnEAR7EdS');
//dev
//ParseClient::initialize('EcHepDGBmNvZhRx8D1vMFLzMPgqAXqfIjpiIJuIe', 'cyksn8TZdJyJVIeM0RbTMkGmHlped7dMhoksgrxm', 'fk2DwxckV3Pe4fKGRs6LH1YaZkslDTu86TS6Ouv5');

    // My modifications to mailer script from:
    // http://blog.teamtreehouse.com/create-ajax-contact-form
    // Added input sanitizing to prevent injection

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        
        //i don't think these are in the right data type...parse doesn't like them
        $first_name = $_POST["first-name"];
        $cell_phone = $_POST["cell-phone"];

        
        //build user object
        $user = new ParseUser();
        $user->set("username",      $_POST['email']);
        $user->set("password",      $_POST['password']);
        $user->set("email",         $_POST['email']);
        $user->set("phoneNumber",   $_POST['cell-phone']);
        $user->set("firstName",     $_POST['first-name']);
        $user->set("lastName",      $_POST['last-name']);
        $user->set("role",          "Client");
        $user->set("motivation",    $_POST['motivation']);

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
        
        // Check that data was sent to the mailer.
        if ( !filter_var($email, FILTER_VALIDATE_EMAIL)) {
          // Set a 400 (bad request) response code and exit.
          http_response_code(400);
          echo "Oops! There was a problem with your email. Please try again.";
          exit;
        }
      
        $contents = array('first_name' => $first_name, 'email' => $email, 'cell_phone' => $cell_phone);
        
        $c=json_encode($contents);
        
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
            echo "Thank You!";
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
