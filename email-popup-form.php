<?php
require 'vendor/autoload.php';
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $email = filter_var(trim($_POST["email-popup"]), FILTER_SANITIZE_EMAIL);

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
        $subject = "New Contact Message!";

        // Build the email content.
        $email_content = "Email: $email \n\n";
      
        // Build the email headers.
        $email_headers = "From: <$email>";
      
                //ADD USER TO MAILCHIMP
        $MailChimp = new \Drewm\MailChimp('458779a92e35ef155beeb58b445fd2ee-us10');
        $result = $MailChimp->call('lists/subscribe', array(
            'id'                => '297cbd7828',
            'email'             => array('email'=>$email),
            'merge_vars'        => array('TYPE' => 'Trial'),
            'double_optin'      => false,
            'update_existing'   => true,
            'replace_interests' => false,
            'send_welcome'      => false,
        ));
      
        $payload = array("text" => "Hey <@sean> <@thomas>, you've got a subscriber!! \n$email_content\n\n");                                                                    
        $data_string = json_encode($payload);                                                                                   

        $ch = curl_init('https://hooks.slack.com/services/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');                                                                      
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json',                                                                                
            'Content-Length: ' . strlen($data_string))                                                                       
        ); 

      
        // Send the email.
        if (curl_exec($ch) || mail($recipient, $subject, $email_content)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Awesome! You’ve taken the first step towards a healthier lifestyle. One of our experts will be in touch soon to match you with the perfect coach.";
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
