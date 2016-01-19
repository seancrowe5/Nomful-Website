<?php
//call parse cloud
require 'vendor/autoload.php';
use Parse\ParseClient;
use Parse\ParseCloud;
ParseClient::initialize('KjqhJkgvtVSsPA9SVHxq1Euad73fWhLWfVS4LNxO', '9V1I071QAS4aveQRkxabmIY2wzisgnGQ1UH4SVG0', 'j3W9jcVXVgWQDfamFbm7UodDiYOSPjinnEAR7EdS'); //live


    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $phone_number = $_POST["phone_number_a"];
        $email = filter_var(trim($_POST["email_c"]), FILTER_SANITIZE_EMAIL);
        $phone_number_strip = preg_replace("/[^0-9]/","",$phone_number);
      
    
        if (ParseCloud::run("userSignupFromWebsite", array("toEmail" => $email))) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Awesome! You’ve taken the first step towards a healthier lifestyle. Look out for a text to download the app! :)";
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
