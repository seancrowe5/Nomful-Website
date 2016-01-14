<?php
require 'vendor/autoload.php';
use Parse\ParseClient;
use Parse\ParseCloud;
ParseClient::initialize('KjqhJkgvtVSsPA9SVHxq1Euad73fWhLWfVS4LNxO', '9V1I071QAS4aveQRkxabmIY2wzisgnGQ1UH4SVG0', 'j3W9jcVXVgWQDfamFbm7UodDiYOSPjinnEAR7EdS'); //live


    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $email = filter_var(trim($_POST["email-c"]), FILTER_SANITIZE_EMAIL);

        // Check that data was sent to the mailer.
        if ( !filter_var($email, FILTER_VALIDATE_EMAIL)) {
          // Set a 400 (bad request) response code and exit.
          http_response_code(400);
          echo "Oops! There was a problem with your email. Please try again.";
          exit;
        }
        
        //ADD USER TO MAILCHIMP
        ParseCloud::run("addUserToMailchimpList", array("toEmail" => $email));
    
//        
//        $mc_ulr = "/automations/e34c745515/emails/7b108c9d9b/queue";
//        $MailChimp = new \Drewm\MailChimp('458779a92e35ef155beeb58b445fd2ee-us10');
//        $result = $MailChimp->call('lists/subscribe', array(
//            'id'                => '297cbd7828',
//            'email'             => array('email'=>$email),
//            'merge_vars'        => array('TYPE' => 'Trial'),
//            'double_optin'      => false,
//            'update_existing'   => true,
//            'replace_interests' => false,
//            'send_welcome'      => false,
//        ));
//        
        //TESTING EMAIL INFO FOR THOMAS
        $recipient = "thomas@nomful.com";
        $subject = "New Contact Message!";
        $email_content = "Email: $email \n\n";
        $email_headers = "From: <$email>";
      
      
        //SEND SLACK MESSAGE WHEN USER ENTERS EMAIL
        $payload = array("text" => "HOME CTA FORM: Hey <@sean> <@thomas>, you've got a Nashville interested!! \n$email_content\n\n");                                           $data_string = json_encode($payload);                                                                                   
        $ch = curl_init('https://hooks.slack.com/services/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');                                                                      
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json',                                                                                
            'Content-Length: ' . strlen($data_string))                                                                       
        ); 

      
        // Send the TEST email and Execute curl request for Slack
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
