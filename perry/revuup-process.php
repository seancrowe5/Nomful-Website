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
     
        $name = $_POST["name"];
        $phone = $_POST["cell-phone"];
        
        $perryGymID = '';
        
        //we just need the user phone and gym object
        //let's now associate the user with REVUUP as 'paying' customers
        $gymMember = new ParseObject("GymMembers");
        $gymMember->set("GymObjects", $perryGymID);
        $gymMember->set("userPhone", $_POST['cell-phone']);
        $gymMember->set("name", $name);

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
      

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "thomas@nomful.com";

        // Set the email subject.
        $subject = "PHILLY PHITNESS - $name";

        // Build the email content.
        $email_content .= "Name: $name\n\n";
        $email_content .= "Phone: $phone\n\n";
      
      
        // Build the email headers.
        $email_headers = "From: <thomas@nomful.com>"; 
               
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
