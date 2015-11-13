<?php

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        
        //i don't think these are in the right data type...parse doesn't like them
        $client_first_name = $_POST["client-first-name"];
        $client_last_name = $_POST["client-last-name"];
        $trainer_email = $_POST["trainer-email"];
        $trainer_name = $_POST["trainer-name"];
        
      
        // Check that data was sent to the mailer.
        if ( !filter_var($trainer_email, FILTER_VALIDATE_EMAIL)) {
          // Set a 400 (bad request) response code and exit.
          http_response_code(400);
          echo "Oops! There was a problem with your email. Please try again.";
          exit;
        }
      
        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "thomas@nomful.com";

        // Set the email subject.
        $subject = "Referral from $trainer_name";

        // Build the email content.
        $email_content .= "Client First Name: $client_first_name\n\n";
        $email_content .= "Client Last Name: $client_last_name\n\n";
        $email_content .= "Trainer Name: $trainer_mame\n\n";
        $email_content .= "Trainer Email: $trainer_email\n\n";
      
        // Build the email headers.
        $email_headers = "From: <$trainer_email>"; 
               
        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Congratulations and thank you! We have confirmed your referral.";
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
