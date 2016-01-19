<?php
require 'vendor/autoload.php';
use Parse\ParseClient;
use Parse\ParseCloud;
ParseClient::initialize('KjqhJkgvtVSsPA9SVHxq1Euad73fWhLWfVS4LNxO', '9V1I071QAS4aveQRkxabmIY2wzisgnGQ1UH4SVG0', 'j3W9jcVXVgWQDfamFbm7UodDiYOSPjinnEAR7EdS'); //live

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace
        $email = filter_var(trim($_POST["email-popup"]), FILTER_SANITIZE_EMAIL);

        // Check that data was sent to the mailer.
        if ( !filter_var($email, FILTER_VALIDATE_EMAIL)) {
          // Set a 400 (bad request) response code and exit.
          http_response_code(400);
          echo "Oops! There was a problem with your email. Please try again.";
          exit;
        }

        // run cloud code
        if (ParseCloud::run("userSignupFromWebsite", array("toEmail" => $email))) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Boom! Check your email for a link to download Nomful!";
            
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
