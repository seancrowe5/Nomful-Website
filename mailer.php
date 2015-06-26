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
    $mandrill = new Mandrill('QcW7X7TjFMCbR6eC9lqZWQ');
    $message = array(
        'html' => '<p>Example HTML content</p>',
        'text' => 'Example text content',
        'subject' => 'example subject',
        'from_email' => 'sean@nomful.com',
        'from_name' => 'Sean',
        'to' => array(
            array(
                'email' => $email,
                'name' => 'Recipient Name',
                'type' => 'to'
            )
        ),
        'headers' => array('Reply-To' => 'thomas@nomful.com'),
        'important' => false,
        'track_opens' => null,
        'track_clicks' => null,
        'auto_text' => null,
        'auto_html' => null,
        'inline_css' => null,
        'url_strip_qs' => null,
        'preserve_recipients' => null,
        'view_content_link' => null,
        'bcc_address' => null,
        'tracking_domain' => null,
        'signing_domain' => null,
        'return_path_domain' => null,
        'merge' => true,
        'merge_language' => 'mailchimp',
        'global_merge_vars' => array(
            array(
                'name' => 'merge1',
                'content' => 'merge1 content'
            )
        ),
        'merge_vars' => array(
            array(
                'rcpt' => $email,
                'vars' => array(
                    array(
                        'name' => 'merge2',
                        'content' => 'merge2 content'
                    )
                )
            )
        ),
        'tags' => array('password-resets'),
        'subaccount' => 'customer-123',
        'google_analytics_domains' => array('example.com'),
        'google_analytics_campaign' => 'sean@nomful.com',
        'metadata' => array('website' => 'www.nomful.com')
    );
  
    $result = $mandrill->messages->send($message, $async, $ip_pool, $send_at);
    print_r($result);
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
