<?php
require 'vendor/autoload.php';
    // My modifications to mailer script from:
    // http://blog.teamtreehouse.com/create-ajax-contact-form
    // Added input sanitizing to prevent injection

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $email = filter_var(trim($_POST["join-email"]), FILTER_SANITIZE_EMAIL);

        // Check that data was sent to the mailer.
        if ( !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "sean@nomful.com";

        // Set the email subject.
        $subject = "New contact from $email";

        // Build the email content.
        $email_content .= "Email: $email\n\n";

        // Build the email headers.
        $email_headers = "From: <$email>";
        
        try {
            $mandrill = new Mandrill('QcW7X7TjFMCbR6eC9lqZWQ'); //QcW7X7TjFMCbR6eC9lqZWQ 
            
            $message = array(
                'html' => '<p>Example HTML content</p>',
                'text' => 'Example text content',
                'subject' => 'example subject',
                'from_email' => 'sean@nomful.com',
                'from_name' => 'Sean',
                'to' => array(
                    array(
                        'email' => $email
                    )
                ),
                'headers' => array('Reply-To' => 'support@nomful.com')
            );
            
            $template_name = 'Waiting List - Welcome to Community';
            
            $template_content = null;

            
            $response = $mandrill->messages->sendTemplate($template_name, $template_content, $message);

            print_r($response);
            
} catch(Mandrill_Error $e) {
    // Mandrill errors are thrown as exceptions
    echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
    // A mandrill error occurred: Mandrill_Unknown_Subaccount - No subaccount exists with the id 'customer-123'
    throw $e;
}
        
        
        
        
        
        
        
        
        
        
        

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
